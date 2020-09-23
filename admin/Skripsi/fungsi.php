<?php
//fungsi untuk melakukan preprocessing terhadap teks
//terutama stopword removal dan stemming
//1
function preproses($teks) {

	include "koneksi.php";
  	//bersihkan tanda baca  diganti dengan space
	$teks = str_replace("'", " ", $teks);
	$teks = str_replace("-", " ", $teks);
	$teks = str_replace(")", " ", $teks);
	$teks = str_replace("(", " ", $teks);
	$teks = str_replace("\"", " ", $teks);
	$teks = str_replace("/", " ", $teks);
	$teks = str_replace("=", " ", $teks);
	$teks = str_replace(".", " ", $teks);
	$teks = str_replace(",", " ", $teks);
	$teks = str_replace(":", " ", $teks);
	$teks = str_replace(";", " ", $teks);
	$teks = str_replace("!", " ", $teks);
	$teks = str_replace("?", " ", $teks);

	//ubah ke huruf kecil
	$teks = strtolower(trim($teks));

	//proses menghapus kata yg di abaikan
	$astoplist = array (" akan","ada",	"biasanya",	"kalau"	,"menunjukkan",	"sedang",	"seusai","adalah", "bila", "kalian",	"menurut",	"sedangkan",	"sewaktu","adanya	", "bilamana", "	kami", "	mereka", "	sedikit", "	si","adapun	", "buat", "	kamu", "	merupakan", "	segera",   "	siapa","aduh	", "bukan",  "	karena", "	meski", "	sehabis", "	siapakah","agar",  "dalam",  "kata",  "meskipun",  "sehingga",   "siapapun","ah	","dan","	katanya","	misalnya","	sehubungan","	suatu","akan	","dapat","	kau","	mungkin","	sejak","	sudah","aku	","dari	ke	namun	sejumlah	supaya",
"alih-alih	","daripada","	kebanyakan","	nanti	","sekarang","	tak","anda", "dekat","	kecuali","	nyaris","	sekeliling","	tanpa","andai", "demi","	kemanakah","	oleh","	seketika","	tapi","antar	","demikian","	kemudian","	pada","	sekitar","	tatkala","antara","dengan","	kenapa","	padahal	","	telah","apa", "depan","	kenapakah","	para","	selagi","	tengah","apakah	","di	","kepada","	pasti","	selain","	tentang","apalagi","	dia","	ketika","	pelbagai","	selalu","	tentu","asalkan","	dikatakan","	ketimbang","	per","	selama","	tentunya","atas	","dilakukan","	kini	","peri	","selanjutnya","	tergolong","atau	","dkk","	kita","	perihal","	selesai","	terhadap","ataupun","	dll	","lagi	","pinggir","	seluruh","	terjadi","Bagai	","dsb","	lain","	pula","	seluruhnya","	terkadang","bagaikan","	engkau	","lain-lain","	pun	","semakin","	terlalu","bagaimana","	hal","	lainnya	","saat","	semenjak","	terlebih","bagaimanakah","	hampir","	lalu","	saja","	sementara","	termasuk","bagaimanapun","	hanya","	lebih","	sambil","	semua	","ternyata","bagi	","harus","	lepas	","sampai	","semuanya","	tersebut","bahkan	","hingga","	lewat	","samping","	seorang	","tertentu","bahwa	","ia	maka","	sang","	sepanjang","	tetap","balik	","ialah	","makin	","sangat	","seperti","	tetapi","banyak	","ini","	manakala","	sangatlah","	sepertinya","	tiap","barangkali","	itu	","masih","	saya	","seputar","	tiba-tiba","bawah	","iya","	masing-masing","	seakan","	seraya","	tidak","beberapa","	jadi","	masing-masingnya","	seakan-akan	","sering	","ujar","begini	","jangan","	maupun	","seantero	","seringkali","	ujarnya","begitu	","jarang	","melainkan","	sebab","	serta","	umumnya","belakang","	jauh","	melakukan	","sebabnya","	sesuai","	untuk","belum	","jika","	melalui","	sebagai	","sesuatu","	walau","berapa	","jikalau","	memang","	sebagaimana","	sesudah","	walaupun","berbagai","	juga","	mengatakan","	sebagainya	","sesudahnya","	ya","bersama","	jumlah","	mengenai","	sebelum","	sesungguhnya","	yaitu","beserta","	justru","	menjadi","	sebelumnya","	setelah	yakni","betapa	","kadang","	menjelang","	sebuah","	seterusnya","	yang","biar","	kadang-kadang","	menuju","	secara","	setiap"	);
	foreach ($astoplist as $i => $value) {
   	$teks = str_replace($astoplist[$i], "", $teks);
	}

	//selanjutnya proses stemming
	//buka tabel tbstem dan bandingkan dengan berita
	$restem = mysqli_query($konek,"SELECT * FROM tbstem ORDER BY Id");

	while($rowstem = mysqli_fetch_array($restem)) {
  		$teks = str_replace($rowstem['Term'], $rowstem['Stem'], $teks);
  	}

	//kembalikan teks yang telah dipreproses
	$teks = strtolower(trim($teks));
	return $teks;
} //akhir fase 1


//2
//fungsi untuk membuat index
function buatindex() {
		
		include "koneksi.php";
		//hapus index sebelumnya
		mysqli_query($konek,"TRUNCATE TABLE tbindex");

		//ambil semua berita (teks)
		$resBerita = mysqli_query($konek,"SELECT * FROM berita ORDER BY id");
		$num_rows = mysqli_num_rows($resBerita);
		print("Mengindeks sebanyak " . $num_rows . " dokumen. <br />");

		while($row = mysqli_fetch_array($resBerita)) {
			$docid = $row['id'];
			$berita = $row['isi'];

			//terapkan preprocessing
  			$berita = preproses($berita);

  			//simpan ke inverted index (tbindex)
  			$aberita = explode(" ", trim($berita));

  			foreach ($aberita as $j => $value) {
				//hanya jika Term tidak null atau nil, tidak kosong
				if ($aberita[$j] != "") {

					
					$rescount = mysqli_query($konek,"SELECT Count FROM tbindex WHERE Term = '$aberita[$j]' AND DocId = $docid");
					$num_rows = mysqli_num_rows($rescount);

					//jika sudah ada DocId dan Term tersebut	, naikkan Count (+1)
					if ($num_rows > 0) {
						$rowcount = mysqli_fetch_array($rescount);
						$count = $rowcount['Count'];
						$count++;

						mysqli_query($konek,"UPDATE tbindex SET Count = $count WHERE Term = '$aberita[$j]' AND DocId = $docid");
					}
					//jika belum ada, langsung simpan ke tbindex
					else {
						mysqli_query($konek,"INSERT INTO tbindex (Term, DocId, Count) VALUES ('$aberita[$j]', $docid, 1)");
					}
				} 
			} 
  		} 
} //akhir fase index



//fungsi hitungbobot, Tf.idf
function hitungbobot() {
	include "koneksi.php";
	
	$resn = mysqli_query($konek,"SELECT DISTINCT DocId FROM tbindex");
	$n = mysqli_num_rows($resn);



//hitung bobot untuk setiap Term dalam setiap DocId
	$resBobot = mysqli_query($konek,"SELECT * FROM tbindex ORDER BY id");
	$num_rows = mysqli_num_rows($resBobot);
	print("Terdapat " . $num_rows . " Term yang diberikan bobot. <br />");

	while($rowbobot = mysqli_fetch_array($resBobot)) {
		//$w = tf * log (n/N)
		$term = $rowbobot['Term'];
		$tf = $rowbobot['Count'];
		$id = $rowbobot['id'];

		//berapa jumlah dokumen yang mengandung term tersebut
		$resNTerm = mysqli_query($konek,"SELECT Count(*) as N FROM tbindex WHERE Term = '$term'");
		$rowNTerm = mysqli_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'];

		$w = $tf * log($n/$NTerm);

		//update bobot dari term tersebut
		$resUpdateBobot = mysqli_query($konek,"UPDATE tbindex SET Bobot = $w WHERE id = $id");
	  } 
	  
} //akhir fase tf idf



//fungsi panjangvektor, 
//rumus akar
function panjangvektor() {
	
	include "koneksi.php";
	//hapus isi tabel tbvektor
	mysqli_query($konek,"TRUNCATE TABLE tbvektor");

	//ambil setiap DocId dalam tbindex
	//hitung panjang vektor untuk setiap DocId tersebut
	//simpan ke dalam tabel tbvektor
	$resDocId = mysqli_query($konek,"SELECT DISTINCT DocId FROM tbindex");

	$num_rows = mysqli_num_rows($resDocId);
	print("Terdapat " . $num_rows . " dokumen yang dihitung panjang vektornya. <br />");

	while($rowDocId = mysqli_fetch_array($resDocId)) {
		$docId = $rowDocId['DocId'];

		$resVektor = mysqli_query($konek,"SELECT Bobot FROM tbindex WHERE DocId = $docId");

		//jumlahkan semua bobot kuadrat
		$panjangVektor = 0;
		while($rowVektor = mysqli_fetch_array($resVektor)) {
			$panjangVektor = $panjangVektor + $rowVektor['Bobot']  *  $rowVektor['Bobot'];
		}

		//hitung akarnya
		$panjangVektor = sqrt($panjangVektor);

		//masukkan ke dalam tbvektor
		$resInsertVektor = mysqli_query($konek,"INSERT INTO tbvektor (DocId, Panjang) VALUES ($docId, $panjangVektor)");
	} 
} 


// pencarian
function hitungsim($query) {
	
	include "koneksi.php";
	//ambil jumlah total dokumen yang telah diindex (tbindex atau tbvektor), n
	$resn = mysqli_query($konek,"SELECT Count(*) as n FROM tbvektor");
	$rown = mysqli_fetch_array($resn);
	$n = $rown['n'];

	//terapkan preprocessing terhadap $query
	$aquery = explode(" ", $query);

	//hitung panjang vektor query
	$panjangQuery = 0;
	$aBobotQuery = array();

	for ($i=0; $i<count($aquery); $i++) {
		//hitung bobot untuk term ke-i pada query, log(n/N);
		//hitung jumlah dokumen yang mengandung term tersebut
		$resNTerm = mysqli_query($konek,"SELECT Count(*) as N from tbindex WHERE Term = '$aquery[$i]'");
		$rowNTerm = mysqli_fetch_array($resNTerm);
		$NTerm = $rowNTerm['N'] ;
    //$idf = 0;
    $idf = 0;
    if($NTerm > 0)
		$idf = log($n/$NTerm);

		//simpan di array
		$aBobotQuery[] = $idf;

		$panjangQuery = $panjangQuery + $idf * $idf;
	}

	$panjangQuery = sqrt($panjangQuery);

	$jumlahmirip = 0;

	//ambil setiap term dari DocId, bandingkan dengan Query
	$resDocId = mysqli_query($konek,"SELECT * FROM tbvektor ORDER BY DocId");
	while ($rowDocId = mysqli_fetch_array($resDocId)) {

		$dotproduct = 0;

		$docId = $rowDocId['DocId'];
		$panjangDocId = $rowDocId['Panjang'];

		$resTerm = mysqli_query($konek,"SELECT * FROM tbindex WHERE DocId = $docId");
		while ($rowTerm = mysqli_fetch_array($resTerm)) {
			for ($i=0; $i<count($aquery); $i++) {
				//jika term sama
				if ($rowTerm['Term'] == $aquery[$i]) {
					$dotproduct = $dotproduct + $rowTerm['Bobot'] * $aBobotQuery[$i];
				} 
        } 
    }

		if ($dotproduct > 0) {
			$sim = $dotproduct / ($panjangQuery * $panjangDocId);
			// $cekvalue = mysqli_query($konek, "SELECT * FROM tbcache WHERE Query = $query");
			// if ($cekvalue!=NULL){
			// 	$resInsertCache = mysqli_query($konek,"UPDATE tbcache SET Query=$query, DocId=$docId, Value=$sim");
			// 	$jumlahmirip++;
			// }
			// else if ($cekvalue==NULL){
			//simpan kemiripan > 0  ke dalam tbcache
			$resInsertCache = mysqli_query($konek,"INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', $docId, $sim)");
			$jumlahmirip++;
			}
		// }


	} 

	if ($jumlahmirip == 0) {
		$resInsertCache = mysqli_query($konek,"INSERT INTO tbcache (Query, DocId, Value) VALUES ('$query', 0, 0)");
	}

} //akhir pencarian
//--------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------

function ambilcache($query) {
	include "koneksi.php";
	$resCache = mysqli_query($konek,"SELECT *  FROM tbcache WHERE Query = '$query' group by DocId ORDER BY Value DESC");
	$num_rows = mysqli_num_rows($resCache);

	if ($num_rows >0) {
		//tampilkan semua berita yang telah terurut
		while ($rowCache = mysqli_fetch_array($resCache)) {
			$docId = $rowCache['DocId'];
			$sim = $rowCache['Value'];

			if ($docId != 0) {
				//ambil berita dari tabel berita, tampilkan
				$resBerita = mysqli_query($konek,"SELECT * FROM berita WHERE id = $docId");
				$rowBerita = mysqli_fetch_array($resBerita);

				$judul = $rowBerita['judul'];
				$berita = $rowBerita['isi'];
				$beritaa = $docId . ". (" . $sim . ") <font color=blue><b>" . $judul . "</b></font><br />";
				print ($beritaa);
				// print($docId . ". (" . $sim . ") <font color=blue><b>" . $judul . "</b></font><br />");
				print($berita . "<hr />");
			} else {
				print("<b>Tidak ada... </b><hr />");
			}
		}//end while (rowCache = mysqli_fetch_array($resCache))
	}//end if $num_rows>0
	else {
		hitungsim($query);

		//pasti telah ada dalam tbcache
		$resCache = mysqli_query($konek,"SELECT *  FROM tbcache WHERE Query = '$query ORDER BY Value DESC");
		$num_rows = mysqli_num_rows($resCache);

		while ($rowCache = mysqli_fetch_array($resCache)) {
			$docId = $rowCache['DocId'];
			$sim = $rowCache['Value'];

			if ($docId != 0) {
				//ambil berita dari tabel berita, tampilkan
				$resBerita = mysqli_query($konek,"SELECT * FROM berita WHERE id = $docId");
				$rowBerita = mysqli_fetch_array($resBerita);

				$judul = $rowBerita['judul'];
				$berita = $rowBerita['isi'];

				print($docId . ". (" . $sim . ") <font color=blue><b>" . $judul . "</b></font><br />");
				print($berita . "<hr />");
			} else {
				print("<b>Tidak ada... </b><hr />");
			}
		} //end while
	}
} //end function ambilcache
//--------------------------------------------------------------------------------------------
//============== akhir koleksi fungsi ==================

?>
