<?php 
require_once '../../config/library.php';

$lib = new Library();

if (isset($_POST['submit'])) {
   $id_angket=""; $jurusan=""; $prodi=""; $semester=""; $angkatan=""; 
    $a11=""; $a12=""; $a13=""; $a14=""; $a15=""; $a16=""; $a17="";
    $b11=""; $b12=""; $b13=""; $b14=""; $b15=""; $b16=""; $b17=""; $b18="";
    $c11=""; $c12=""; $c13=""; $c14="";
    $d11=""; $d12=""; $d13=""; $sarana1=""; $sarana2="";
    $a21=""; $a22=""; $a23=""; $a24=""; $a25=""; $a26="";
    $b21=""; $b22=""; $staff1="";
    $a31=""; $a32=""; $a33=""; $a34=""; $a35=""; $a36=""; $a37=""; $mahasiswa1=""; $kritik=""; $tgl_angket="";

  $simpan = $lib->input_angket(
    $id_angket, $jurusan, $prodi, $semester, $angkatan, 
    $a11, $a12, $a13, $a14, $a15, $a16, $a17,
    $b11, $b12, $b13, $b14, $b15, $b16, $b17, $b18,
    $c11, $c12, $c13, $c14,
    $d11, $d12, $d13, $sarana1, $sarana2,
    $a21, $a22, $a23, $a24, $a25, $a26,
    $b21, $b22, $staff1,
    $a31, $a32, $a33, $a34, $a35, $a36, $a37, $mahasiswa1, $kritik, $tgl_angket
  );
  if ($simpan == "SUCCESS") {
    echo "
    <script>
    alert('Angket berhasil di simpan!');
    window.location.href='.';
    </script>
    ";
  } 
  elseif ($simpan == "TIDAK VALID") {
    echo "
    <script>
    alert('Data yang dimasukkan tidak valid!');
    window.location.href='.';
    </script>
    ";
  }
  else {
    echo "
    <script>
    alert('Data gagal di simpan!');
    </script>
    ";
  }
}  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>BEM FMIPA UNNES 2019</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/img/bem.ico" type="image/x-icon">

    <!-- Font awesome -->
    <link href="../../assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="../../assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="../../assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="../../assets/css/theme-color/default-theme.css" rel="stylesheet">    

    <!-- Main style sheet -->
    <link href="../../assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='../../https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='../../https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
   <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="../../#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>official@bemfmipa.unnes.ac.id</span>
                  </div>
                  <!-- <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>(568) 986 652</span>
                  </div> -->
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a href="https://www.youtube.com/channel/UC0tIMOEFODPko4F51CFR0DQ"><span class="fa fa-youtube"></span></a></li>
                      <li><a href="http://instagram.com/bemfmipaunnes/"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <!-- <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Varsity</span></a> -->
          <!-- IMG BASED LOGO  -->
          <a class="navbar-brand" href="/"><img src="../../assets/img/logo cilik.png" alt="logo"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="/bemfmipa/">Home</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/bemfmipa/profil/">BEM FMIPA 2019</a></li>                
                <li><a href="/bemfmipa/visimisi/">Visi Misi</a></li>
                <li><a href="/bemfmipa/struktur/">Struktur Organisasi</a></li>
                <li><a href="/bemfmipa/logo/">Logo Kabinet</a></li>                    
              </ul>
            </li>           
            <li><a href="/bemfmipa/news/">News</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Serap Aspirasi <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Kirim Aspirasi</a></li>                
                <li><a href="/bemfmipa/aspirasi/faq/">FAQ</a></li>                
              </ul>
            </li>            
            
            
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>ANGKET SARASEHAN FMIPA TAHUN 2018/2019</h2>
           <!-- <ol class="breadcrumb">
            <li><a href="../../#">Home</a></li>            
            <li class="active">Angket Sarasehan</li>
          </ol> -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title"><!-- 
            <h2>Angket Sarasehan FMIPA Tahun 2018/2019</h2> -->
            <h4><b>PETUNJUK UMUM :</b></h4>
            <p style="text-align : left;">
              a. Kajian ini dilakukan dengan tujuan untuk mengukur tingkat kepuasan mahasiswa terhadap pelayanan di Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Negeri Semarang.<br>
              b. Saudara yang terpilih sebagai responden, dimohon untuk mengisi seluruh instrumen ini sesuai dengan pengalaman, pengetahuan, persepsi, dan keadaan yang sebenarnya.<br>
              c. Partisipasi Saudara untuk mengisi instrumen ini secara objektif sangat besar artinya bagi Fakultas untuk mendapatkan masukan yang akurat dalam rangka perbaikan dan peningkatan pelayanan  yang lebih baik.<br>
              d. Jawaban Saudara akan dijamin kerahasiaan dan tidak memiliki dampak negatif bagi siapapun.<br>
              e. Pilihlah salah satu dari pilihan yang disediakan dengan cara mengklik pada kolom yang tersedia.<br>
              f.Jika terdapat saran atau kritik deskripsikan dengan jelas dan singkat pengalaman, pengetahuan, persepsi, dan keadaan yang sebenarnya pada kolom deskripsi yang sudah tersedia. 
            </p>
          </div>
          <!-- end title -->
          <!-- start contact content -->
          <div class="mu-contact-content">           
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="mu-contact-left">
                  <form class="contactform" action="" method="post">
                    <input type="hidden" name="id_angket" id="id_angket" value="">
                    <input type="hidden" name="tgl_angket" id="tgl_angket" value="">
                  <!-- <div class="col-md-12">                  
                    <p class="comment-form-author">
                      <label for="nama">Nama <span class="required">*</span></label>
                      <input type="text" required="required" size="30" value="" name="nama" id="nama" placeholder="Masukkan Nama Anda" pattern="[A-Za-z]{1,50}">
                    </p>
                  </div> -->
                 <!--  <div class="col-md-6">
                    <p class="comment-form-email">
                      <label for="nim">NIM <span class="required">*</span></label>
                      <input type="text" required="required" aria-required="true" value="" name="nim" id="nim" placeholder="Masukkan NIM Anda" pattern="[0-9]*" />
                    </p>
                  </div> -->
                  <div class="col-md-6">
                    <p class="comment-form">
                      <label for="jurusan">Jurusan <span class="required">*</span></label>
                    <!-- <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div> -->
                      <input type="text" required="required" name="jurusan" placeholder="Masukkan Jurusan Anda" id="jurusan" name="jurusan" pattern="[A-Za-z\s]{2,50}" />  
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="comment-form">
                      <label for="jurusan">Program Studi <span class="required">*</span></label>
                    <!-- <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div> -->
                      <input type="text" required="required" name="prodi" placeholder="Masukkan Program Studi Anda" id="prodi" name="jurusan" pattern="[A-Za-z\s]{3,50}" />  
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="comment-form">
                      <label for="jurusan">Semester <span class="required">*</span></label>
                    <!-- <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div> -->
                      <input type="text" required="required" aria-required="true" value="" name="semester" id="semester" placeholder="Masukkan Semester Anda" pattern=".{1}[0-9]*" />  
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p class="comment-form">
                      <label for="jurusan">Angkatan <span class="required">*</span></label>
                    <!-- <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">1</label>
                    </div> -->
                      <input type="text" required="required" aria-required="true" value="" name="angkatan" id="angkatan" placeholder="Masukkan Angkatan Anda" pattern=".{4,6}[0-9]*" /> 
                    </p>
                  </div>
                  <div class="col-md-12">

                    <!-- SARANA DAN PRASARANA -->

                    <h3>1. Aspek Sarana dan Prasarana</h3><br>

                    <!-- TABEL LINGKUNGAN -->
                    <p>A. Lingkungan </p>
                    <table  class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%" ><p> Kebersihan Lingkungan Kampus</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a1" value="Sangat Tidak Bersih" required=""> Sangat Tidak Bersih
                              <input type="radio" name="1a1" value="Tidak Bersih"> Tidak Bersih
                              <input type="radio" name="1a1" value="Bersih"> Bersih
                              <input type="radio" name="1a1" value="Sangat Bersih"> Sangat Bersih
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Parkir Kendaraan</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a2" value="Sangat Tidak Memadai" required=""> Sangat Tidak Memadai
                              <input type="radio" name="1a2" value="Tidak Memadai"> Tidak Memadai
                              <input type="radio" name="1a2" value="Memadai"> Memadai
                              <input type="radio" name="1a2" value="Sangat Memadai"> Sangat Memadai
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kebersihan Kamar Mandi (WC) </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a3" value="Sangat Tidak Memadai" required=""> Sangat Tidak Memadai
                              <input type="radio" name="1a3" value="Tidak Memadai"> Tidak Memadai
                              <input type="radio" name="1a3" value="Memadai"> Memadai
                              <input type="radio" name="1a3" value="Sangat Memadai"> Sangat Memadai
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>4.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Tempat Sampah </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a4" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1a4" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1a4" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1a4" value="Sangat Mencukupi"> Sangat Mencukupi
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>5.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> CCTV </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a5" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1a5" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1a5" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1a5" value="Sangat Mencukupi"> Sangat Mencukupi
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>6.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Tempat Diskusi (Gazebo) </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a6" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1a6" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1a6" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1a6" value="Sangat Mencukupi"> Sangat Mencukupi
                              
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>7.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kantin </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              
                              <input type="radio" name="1a7" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1a7" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1a7" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1a7" value="Sangat Mencukupi"> Sangat Mencukupi
                              
                            </td>
                          </tr>
                    </table><br>

                    <!-- TABEL KELAS -->

                    <p>B. Kelas </p>
                    <table border="1" class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;"  width="10%"><p> Keadaan Ruang Kelas</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b1" value="Sangat Tidak Nyaman" required=""> Sangat Tidak Nyaman
                              <input type="radio" name="1b1" value="Tidak Nyaman"> Tidak Nyaman
                              <input type="radio" name="1b1" value="Nyaman"> Nyaman
                              <input type="radio" name="1b1" value="Sangat Nyaman"> Sangat Nyaman
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> LCD </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b2" value="Sangat Tidak Baik" required=""> Sangat Tidak Baik
                              <input type="radio" name="1b2" value="Tidak Baik"> Tidak Baik
                              <input type="radio" name="1b2" value="Baik"> Baik
                              <input type="radio" name="1b2" value="Sangat Baik"> Sangat Baik
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Wifi </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b3" value="Sangat Tidak Lancar" required=""> Sangat Tidak Lancar
                              <input type="radio" name="1b3" value="Tidak Lancar"> Tidak Lancar
                              <input type="radio" name="1b3" value="Lancar"> Lancar
                              <input type="radio" name="1b3" value="Sangat Lancar"> Sangat Lancar
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>4.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Stop Kontak </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b4" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1b4" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1b4" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1b4" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>5.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kipas Angin </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b5" value="Sangat Tidak Baik" required=""> Sangat Tidak Baik
                              <input type="radio" name="1b5" value="Tidak Baik"> Tidak Baik
                              <input type="radio" name="1b5" value="Baik"> Baik
                              <input type="radio" name="1b5" value="Sangat Baik"> Sangat Baik
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>6.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kursi </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b6" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1b6" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1b6" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1b6" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>7.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Papan Tulis </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b7" value="Sangat Tidak Layak" required=""> Sangat Tidak Layak
                              <input type="radio" name="1b7" value="Tidak Layak"> Tidak Layak
                              <input type="radio" name="1b7" value="Layak"> Layak
                              <input type="radio" name="1b7" value="Sangat Layak"> Sangat Layak
                            </td>
                          </tr>
                           <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>8.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Lampu </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1b8" value="Sangat Tidak Memadai" required=""> Sangat Tidak Memadai
                              <input type="radio" name="1b8" value="Tidak Memadai"> Tidak Memadai
                              <input type="radio" name="1b8" value="Memadai"> Memadai
                              <input type="radio" name="1b8" value="Sangat Memadai"> Sangat Memadai
                            </td>
                          </tr>
                    </table><br>

                    <!-- TABEL LABORATORIUM -->

                    <p>C. Laboratorium </p>
                    <table border="1" class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%"><p> Ketersediaan Alat </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1c1" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1c1" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1c1" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1c1" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Ketersediaan Bahan </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1c2" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1c2" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1c2" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1c2" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Keadaan Alat </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1c3" value="Sangat Tidak Baik" required=""> Sangat Tidak Baik
                              <input type="radio" name="1c3" value="Tidak Baik"> Tidak Baik
                              <input type="radio" name="1c3" value="Baik"> Baik
                              <input type="radio" name="1c3" value="Sangat Baik"> Sangat Baik
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>4.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Laboratorium </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1c4" value="Sangat Tidak Nyaman" required=""> Sangat Tidak Nyaman
                              <input type="radio" name="1c4" value="Tidak Nyaman"> Tidak Nyaman
                              <input type="radio" name="1c4" value="Nyaman"> Nyaman
                              <input type="radio" name="1c4" value="Sangat Nyaman"> Sangat Nyaman
                            </td>
                          </tr>
                    </table><br>

                    <!-- TABEL PERPUSTAKAAN -->

                    <p>D. Perpustakaan </p>
                    <table border="1" class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%"><p> Buku Referensi </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1d1" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1d1" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1d1" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1d1" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Lingkungan Perpustakaan </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1d2" value="Sangat Tidak Nyaman" required=""> Sangat Tidak Nyaman
                              <input type="radio" name="1d2" value="Tidak Nyaman"> Tidak Nyaman
                              <input type="radio" name="1d2" value="Nyaman"> Nyaman
                              <input type="radio" name="1d2" value="Sangat Nyaman"> Sangat Nyaman
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Referensi Jurnal </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="1d3" value="Sangat Tidak Mencukupi" required=""> Sangat Tidak Mencukupi
                              <input type="radio" name="1d3" value="Tidak Mencukupi"> Tidak Mencukupi
                              <input type="radio" name="1d3" value="Mencukupi"> Mencukupi
                              <input type="radio" name="1d3" value="Sangat Mencukupi"> Sangat Mencukupi
                            </td>
                          </tr>
                    </table><br>
                    <p class="comment-form-comment">
                      <label for="sarana1">Fasilitas Sarana dan Prasarana apa yang harus ditingkatkan kualitasnya ?</label>
                      <textarea aria-required="true" rows="8" cols="45" name="sarana1" id="sarana1" ></textarea>
                    </p> 
                    <p class="comment-form-comment">
                      <label for="sarana2">Fasilitas Sarana dan Prasarana apa yang harus ditambah ?</label>
                      <textarea aria-required="true" rows="8" cols="45" name="sarana2" id="sarana2" ></textarea>
                    </p> 
                  </div>
                  <div class="col-md-12">
                    <!-- <p class="comment-form-comment">
                      <label for="aspirasi">Aspirasi</label>
                      <textarea required="required" aria-required="true" rows="8" cols="45" name="aspirasi" name="aspirasi" id="aspirasi" ></textarea>
                    </p><br> -->

                    <!-- DOSEN DAN STAFF AKADEMIK -->

                    <h3>2. Kinerja Dosen dan Staff Akademik </h3><br>

                    <!-- TABEL DOSEN -->
                    <p>A. Dosen </p>
                    <table  class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%"><p> Sikap Religius Saat Perkuliahan (Memulai dengan Doa)</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a1" value="Tidak Pernah Dilakukan" required=""> Tidak Pernah Dilakukan
                              <input type="radio" name="2a1" value="Jarang Dilakukan"> Jarang Dilakukan
                              <input type="radio" name="2a1" value="Terkadang Dilakukan"> Terkadang Dilakukan
                              <input type="radio" name="2a1" value="Selalu Dilakukan"> Selalu Dilakukan
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Ketepatan Waktu dalam Pembelajaran</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a2" value="Tidak Pernah Sesuai" required=""> Tidak Pernah Sesuai
                              <input type="radio" name="2a2" value="Jarang Sesuai"> Jarang Sesuai
                              <input type="radio" name="2a2" value="Terkadang Sesuai"> Terkadang Sesuai
                              <input type="radio" name="2a2" value="Selalu Sesuai"> Selalu Sesuai
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kedatangan Dosen </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a3" value="Tidak Pernah Tepat Waktu" required=""> Tidak Pernah Tepat Waktu
                              <input type="radio" name="2a3" value="Jarang Tepat Waktu"> Jarang Tepat Waktu
                              <input type="radio" name="2a3" value="Terkadang Tepat Waktu"> Terkadang Tepat Waktu
                              <input type="radio" name="2a3" value="Selalu Tepat Waktu"> Selalu Tepat Waktu
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>4.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Rancangan Pembelajaran Semester </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a4" value="Tidak Pernah Disampaikan" required=""> Tidak Pernah Disampaikan
                              <input type="radio" name="2a4" value="Jarang Disampaikan"> Jarang Disampaikan
                              <input type="radio" name="2a4" value="Terkadang Disampaikan"> Terkadang Disampaikan
                              <input type="radio" name="2a4" value="Selalu Disampaikan"> Selalu Disampaikan
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>5.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Kesulitan Mahasiswa saat Pembelajaran </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a5" value="Tidak Pernah Direspon" required=""> Tidak Pernah Direspon
                              <input type="radio" name="2a5" value="Jarang Direspon"> Jarang Direspon
                              <input type="radio" name="2a5" value="Terkadang Direspon"> Terkadang Direspon
                              <input type="radio" name="2a5" value="Selalu Direspon"> Selalu Direspon
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>6.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Penyampaian Bahan Ajar </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2a6" value="Tidak Pernah Disampaikan" required=""> Tidak Pernah Disampaikan
                              <input type="radio" name="2a6" value="Jarang Disampaikan"> Jarang Disampaikan
                              <input type="radio" name="2a6" value="Terkadang Disampaikan"> Terkadang Disampaikan
                              <input type="radio" name="2a6" value="Selalu Disampaikan"> Selalu Disampaikan
                            </td>
                          </tr>
                    </table><br>

                    <!-- TABEL STAFF AKADEMIK -->

                    <p>B. Staff Akademik </p>
                    <table border="1" class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%"><p> Pelayanan Administrasi </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2b1" value="Tidak Pernah Baik" required=""> Tidak Pernah Baik
                              <input type="radio" name="2b1" value="Jarang Baik"> Jarang Baik
                              <input type="radio" name="2b1" value="Terkadang Baik"> Terkadang Baik
                              <input type="radio" name="2b1" value="Selalu Baik"> Selalu Baik
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Keluhan Mahasiswa </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="2b2" value="Tidak Pernah Direspon" required=""> Tidak Pernah Direspon
                              <input type="radio" name="2b2" value="Jarang Direspon"> Jarang Direspon
                              <input type="radio" name="2b2" value="Terkadang Direspon"> Terkadang Direspon
                              <input type="radio" name="2b2" value="Selalu Direspon"> Selalu Direspon
                            </td>
                          </tr>
                    </table><br>

                    <p class="comment-form-comment">
                      <label for="staff1">Pelayanan Akademik/Non Akademik apa yang harus ditingkatkan ? </label>
                      <textarea aria-required="true" rows="8" cols="45" name="staff1" id="staff1" ></textarea>
                    </p> 

                    <!-- ASPEK LAYANAN MAHASISWA -->

                    <h3>3. Aspek Layanan Mahasiswa </h3><br>

                    <table  class="table-bordered"> 
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>1.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" width="10%" ><p> Sosialisasi terkait UKT</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a1" value="Tidak Pernah Disampaikan" required=""> Tidak Pernah Disampaikan
                              <input type="radio" name="3a1" value="Jarang Disampaikan"> Jarang Disampaikan
                              <input type="radio" name="3a1" value="Terkadang Disampaikan"> Terkadang Disampaikan
                              <input type="radio" name="3a1" value="Selalu Disampaikan"> Selalu Disampaikan
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>2.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Sosialisasi terkait Beasiswa</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a2" value="Tidak Pernah Disampaikan" required=""> Tidak Pernah Disampaikan
                              <input type="radio" name="3a2" value="Jarang Disampaikan"> Jarang Disampaikan
                              <input type="radio" name="3a2" value="Terkadang Disampaikan"> Terkadang Disampaikan
                              <input type="radio" name="3a2" value="Selalu Disampaikan"> Selalu Disampaikan
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>3.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Peminjaman Tempat </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a3" value="Tidak Pernah Dilayani" required=""> Tidak Pernah Dilayani
                              <input type="radio" name="3a3" value="Jarang Dilayani"> Jarang Dilayani
                              <input type="radio" name="3a3" value="Terkadang Dilayani"> Terkadang Dilayani
                              <input type="radio" name="3a3" value="Selalu Dilayani"> Selalu Dilayani
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>4.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Peminjaman Alat </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a4" value="Tidak Pernah Dilayani" required=""> Tidak Pernah Dilayani
                              <input type="radio" name="3a4" value="Jarang Dilayani"> Jarang Dilayani
                              <input type="radio" name="3a4" value="Terkadang Dilayani"> Terkadang Dilayani
                              <input type="radio" name="3a4" value="Selalu Dilayani"> Selalu Dilayani
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>5.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Bantuan Mengembangkan Bakat dan Minat Mahasiswa </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a5" value="Tidak Pernah Ada" required=""> Tidak Pernah Ada
                              <input type="radio" name="3a5" value="Jarang Ada"> Jarang Ada
                              <input type="radio" name="3a5" value="Terkadang Ada"> Terkadang Ada
                              <input type="radio" name="3a5" value="Selalu Ada"> Selalu Ada
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>6.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Sistem Surat Menyurat ( KHS, izin observasi dll.)  </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a6" value="Tidak Pernah Komunikatif" required=""> Tidak Pernah Komunikatif
                              <input type="radio" name="3a6" value="Jarang Komunikatif"> Jarang Komunikatif
                              <input type="radio" name="3a6" value="Terkadang Komunikatif"> Terkadang Komunikatif
                              <input type="radio" name="3a6" value="Selalu Komunikatif"> Selalu Komunikatif
                            </td>
                          </tr>
                          <tr>
                            <td style="padding-left : 2px; padding-right : 2px;"><p>7.</p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" ><p> Proposal Mahasiswa, Laporan Pertanggung Jawaban Mahasiswa  </p></td>
                            <td style="padding-left: 5px; padding-right: 5px; padding-top: 3px; padding-bottom: 3px;" >
                              <input type="radio" name="3a7" value="Tidak Pernah Lancar" required=""> Tidak Pernah Lancar
                              <input type="radio" name="3a7" value="Jarang Lancar"> Jarang Lancar
                              <input type="radio" name="3a7" value="Terkadang Lancar"> Terkadang Lancar
                              <input type="radio" name="3a7" value="Selalu Lancar"> Selalu Lancar
                            </td>
                          </tr>
                    </table><br>

                    <p class="comment-form-comment">
                      <label for="mahasiswa1">Masalah/Kendala apa yang harus dihadapi atau segera diselesaikan?  </label>
                      <textarea aria-required="true" rows="8" cols="45" name="mahasiswa1" id="mahasiswa1" ></textarea>
                    </p><br>
                    <p class="comment-form-comment">
                      <label for="kritik"> Kritik dan saran untuk bidang yang belum tercantumkan di bagian sebelumnya  </label>
                      <textarea aria-required="true" rows="8" cols="45" name="kritik" id="kritik" ></textarea>
                    </p> 

                    <p class="form-submit">
                      
                      <input type="submit" value="Kirim Angket" class="mu-post-btn" name="submit">
                    </p>
                  </div>        
                  </form>
                </div>
              </div>
              
            </div>
          </div>
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
   <!--  <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="../../#">About Us</a></li>
                  <li><a href="../../">Features</a></li>
                  <li><a href="../../">Course</a></li>
                  <li><a href="../../">Event</a></li>
                  <li><a href="../../">Sitemap</a></li>
                  <li><a href="../../">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="../../">Get Started</a></li>
                  <li><a href="../../#">My Questions</a></li>
                  <li><a href="../../">Download Files</a></li>
                  <li><a href="../../">Latest Course</a></li>
                  <li><a href="../../">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed with &hearts; by KOMINFO BEM FMIPA UNNES 2019</p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->





  
  <!-- jQuery library -->
  <script src="../../assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="../../assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="../../assets/js/waypoints.js"></script>
  <script type="text/javascript" src="../../assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="../../assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="../../assets/js/jquery.fancybox.pack.js"></script>

  <!-- Custom js -->
  <script src="../../assets/js/custom.js"></script> 

  </body>
</html>