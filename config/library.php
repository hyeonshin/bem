<?php
require_once 'koneksi.php';
class Library extends Koneksi
{
	private $koneksi;

	function __construct()
	{
		$this->koneksi = new Koneksi();
	}

	public function input_angket($id_angket, $jurusan, $prodi, $semester, $angkatan, 
    $a11, $a12, $a13, $a14, $a15, $a16, $a17,
    $b11, $b12, $b13, $b14, $b15, $b16, $b17, $b18,
    $c11, $c12, $c13, $c14,
    $d11, $d12, $d13, $sarana1, $sarana2,
    $a21, $a22, $a23, $a24, $a25, $a26,
    $b21, $b22, $staff1,
    $a31, $a32, $a33, $a34, $a35, $a36, $a37, $mahasiswa1, $kritik, $tgl_angket)
	{
		$id_angket = htmlentities($_POST['id_angket']);
		$jurusan = htmlentities($_POST['jurusan']); 
		$prodi = htmlentities($_POST['prodi']); 
		$semester = htmlentities($_POST['semester']); 
		$angkatan = htmlentities($_POST['angkatan']); 
    	$a11 = htmlentities($_POST['1a1']); 
    	$a12 = htmlentities($_POST['1a2']); 
    	$a13 = htmlentities($_POST['1a3']); 
    	$a14 =htmlentities($_POST['1a4']);
    	$a15 =htmlentities($_POST['1a5']); 
    	$a16 =htmlentities($_POST['1a6']); 
    	$a17 =htmlentities($_POST['1a7']);
    	$b11 =htmlentities($_POST['1b1']); 
    	$b12 =htmlentities($_POST['1b2']); 
    	$b13 =htmlentities($_POST['1b3']); 
    	$b14 =htmlentities($_POST['1b4']); 
    	$b15 =htmlentities($_POST['1b5']); 
    	$b16 =htmlentities($_POST['1b6']); 
    	$b17 =htmlentities($_POST['1b7']); 
    	$b18 =htmlentities($_POST['1b8']);
    	$c11 =htmlentities($_POST['1c1']); 
    	$c12 =htmlentities($_POST['1c2']); 
    	$c13 =htmlentities($_POST['1c3']); 
    	$c14 =htmlentities($_POST['1c4']);
    	$d11 =htmlentities($_POST['1d1']); 
    	$d12 =htmlentities($_POST['1d2']); 
    	$d13 =htmlentities($_POST['1d3']); 
    	$sarana1 =htmlentities($_POST['sarana1']); 
    	$sarana2 =htmlentities($_POST['sarana2']);
    	$a21 =htmlentities($_POST['2a1']); 
    	$a22 =htmlentities($_POST['2a2']); 
    	$a23 =htmlentities($_POST['2a3']); 
    	$a24 =htmlentities($_POST['2a4']); 
    	$a25 =htmlentities($_POST['2a5']); 
    	$a26 =htmlentities($_POST['2a6']);
    	$b21 =htmlentities($_POST['2b1']); 
    	$b22 =htmlentities($_POST['2b2']); 
    	$staff1 =htmlentities($_POST['staff1']);
    	$a31 =htmlentities($_POST['3a1']); 
    	$a32 =htmlentities($_POST['3a2']); 
    	$a33 =htmlentities($_POST['3a3']); 
    	$a34 =htmlentities($_POST['3a4']); 
    	$a35 =htmlentities($_POST['3a5']); 
    	$a36 =htmlentities($_POST['3a6']); 
    	$a37 =htmlentities($_POST['3a7']); 
    	$mahasiswa1 =htmlentities($_POST['mahasiswa1']); 
    	$kritik =htmlentities($_POST['kritik']); 
    	$tgl_angket =htmlentities($_POST['tgl_angket']);

/*		$tgl_aspirasi = STR_TO_DATE('$tgl_aspirasi', '%Y/%m/%d');*/

		

		try {
			$sql = "INSERT INTO `tbl_angket`(`jurusan`,`prodi`,`semester`,`angkatan`,`1a1`,`1a2`,`1a3`,`1a4`,`1a5`,`1a6`,`1a7`,`1b1`,`1b2`,`1b3`,`1b4`,`1b5`,`1b6`,`1b7`,`1b8`,`1c1`,`1c2`,`1c3`,`1c4`,`1d1`,`1d2`,`1d3`,`sarana1`,`sarana2`,`2a1`,`2a2`,`2a3`,`2a4`,`2a5`,`2a6`,`2b1`,`2b2`,`staff1`,`3a1`,`3a2`,`3a3`,`3a4`,`3a5`,`3a6`,`3a7`,`mahasiswa1`,`kritik`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$query = $this->koneksi->db->prepare($sql);
			$query->bindParam(1, $jurusan);
			$query->bindParam(2, $prodi);
			$query->bindParam(3, $semester);
			$query->bindParam(4, $angkatan);
			$query->bindParam(5, $a11);
			$query->bindParam(6, $a12);
			$query->bindParam(7, $a13);
			$query->bindParam(8, $a14);
			$query->bindParam(9, $a15);
			$query->bindParam(10, $a16);
			$query->bindParam(11, $a17);
			$query->bindParam(12, $b11);
			$query->bindParam(13, $b12);
			$query->bindParam(14, $b13);
			$query->bindParam(15, $b14);
			$query->bindParam(16, $b15);
			$query->bindParam(17, $b16);
			$query->bindParam(18, $b17);
			$query->bindParam(19, $b18);
			$query->bindParam(20, $c11);
			$query->bindParam(21, $c12);
			$query->bindParam(22, $c13);
			$query->bindParam(23, $c14);
			$query->bindParam(24, $d11);
			$query->bindParam(25, $d12);
			$query->bindParam(26, $d13);
			$query->bindParam(27, $sarana1);
			$query->bindParam(28, $sarana2);
			$query->bindParam(29, $a21);
			$query->bindParam(30, $a22);
			$query->bindParam(31, $a23);
			$query->bindParam(32, $a24);
			$query->bindParam(33, $a25);
			$query->bindParam(34, $a26);
			$query->bindParam(35, $b21);
			$query->bindParam(36, $b22);
			$query->bindParam(37, $staff1);
			$query->bindParam(38, $a31);
			$query->bindParam(39, $a32);
			$query->bindParam(40, $a33);
			$query->bindParam(41, $a34);
			$query->bindParam(42, $a35);
			$query->bindParam(43, $a36);
			$query->bindParam(44, $a37);
			$query->bindParam(45, $mahasiswa1);
			$query->bindParam(46, $kritik);
			
			$query->execute();

			if ($query) {
				return "SUCCESS";
			} else {
				return "FAILED";
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
			return FALSE;
		}
	}
	public function view_angket()
	{
		try {
			$sql = "SELECT * FROM tbl_angket ORDER BY id_angket ASC";
			$query = $this->koneksi->db->query($sql);
			return $query;
		} catch (PDOException $e) {
			echo $e->getMessage();
			return FALSE;
		}
	}
}
?>