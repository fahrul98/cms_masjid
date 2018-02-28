<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  /*

  Letakkan link fronted (css,js) di sini. ok?
  using diffdash template

  */
  $title = $page;
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- head  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php
    //switch page title, (page ini kelakuannya ini, dsb)
    switch ($page) {
      case "Beranda":echo "- ".$title." - ".$cmprofil->pnama;break;
      case "tampilpost":echo "- ".$post->psjudul." - ";break;
      default:echo "- ".$title." - ";break;
    }
    ?></title>

<!-- TRY from template -->

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
<?php

if(!isset($mode)){

?>
<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/linearicons/style.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/metisMenu/metisMenu.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist/css/chartist.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/toastr/toastr.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>">

<link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">
<!-- Main JS ? -->
<?php }else{
 ?>
 <!-- CSS Template NetizenUI -->
 <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/demo.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/set1.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/overwrite.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.bxslider.css');?>">
 <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">

<?php
} ?>
<?php if($page=="Tulis Postingan"||$page=="Ubah Postingan"){
?>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/summernote/summernote.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-markdown/bootstrap-markdown.min.css'); ?>">

<?php } ?>

<?php if($page=="Tambah Kegiatan"||$page=="Ubah Kegiatan"){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/prettify-1.0.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-datepicker/css/bootstrap-datetimepicker.css'); ?>">
<?php } ?>

<?php //jika media
if($page=="Media" || $page=="Profil Admin" or isset($search)){?>
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/dropify/css/dropify.min.css');?>">
<?php } ?>


<!-- GOOGLE FONTS -->
<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png');?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/img/favicon.png');?>">
<style>
/* min */
  .phitam {
    color:#000000;
    font-size: 17px;
  }
  .container .phitam {
    color:#000000;
    font-size: 15px;
  }

  .nomargin {
    margin:0px;
    margin-left: 0px;
    margin-right: 0px;
  }

  .nopadding {
    padding: 0px;
    width: 430px;
  }

  .navbar .paddinglr {
    padding-left: 0px;
    padding-right: 0px;
  }

  .textfooter {
    padding-top: 0px;
    text-align: justify;
  }

  .container .navbar-header .navbar-brand {
    color:gold;
  }

  <?php 
    $dsid=1;
    $d = array(
      'nav' => '212121', 
      'lnr' => 'fff',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-4.jpg'
    );
    switch ($dsid) {
      case 1: //Dark
      $d = array(
      'nav' => '212121', 
      'lnr' => 'fff',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-3.jpg',
      'linkcol' => '0000bb',
      'hover' => '424242'
    );
        break;

      case 2:
      $d = array(
      'nav' => '345698', 
      'lnr' => 'ddd',
      'border' => '424242',
      'textcol' => 'fff',
      'img-bg' => 'img-2.jpg',
      'linkcol' => '0000bb',
      'hover' => '424242'
    );
        break;
      
      default:
        # code...
        break;
    }
  ?>

  /*Background-image*/
  .backgroundpict {
    background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
    background-attachment: fixed;
    width: 100%;
    height: 350px;
  }

  .backgroundpictop {
    background:url("<?php echo base_url('assets/img/'.$d['img-bg']);?>");
    background-attachment: fixed;
    width: 100%;
    height: 650px;
  }

  /*Footer*/
  body .last-div {
    background-color:#<?php echo $d['nav'];?>;
  }

  .inner-footer .widgetheading {
    color: #<?php echo $d['textcol']; ?>;
  }

  .inner-footer .row a {
    color: #<?php echo $d['textcol']; ?>; 
  }

  .inner-footer .row p {
    color: #<?php echo $d['textcol']; ?>; 
  }

  /*netizen*/
  body .navbar{
    background-color:#<?php echo $d['nav'];?>;
  }

  .navbar .size {
    font-size: 24px;
  }

  .navbar .navbar-collapse a:hover{
    background-color: #<?php echo $d['hover']; ?>; 
  }

  .navbar .navbar-collapse .active a{
    background-color: #<?php echo $d['hover']; ?>; 
  }

  .container .text-center{
    color: #<?php echo $d['textcol']; ?>;
  }

  /*Admin*/
  #wrapper .navbar{
    background-color:#<?php echo $d['nav']; ?>;
  }

  #wrapper .sidebar{
    background-color:#<?php echo $d['nav'] ;?>;
    color: #<?php echo $d['textcol'] ?>;
  }

  #wrapper a {
    color: #<?php echo $d['textcol']; ?>;
  }
  #wrapper #main-content a {
    color: #<?php echo $d['linkcol']; ?>;
  }

  #wrapper .dropdown-menu a {
    color: #<?php echo $d['linkcol']; ?>; 
  }

  .lnr {
    color:#<?php echo $d['lnr']; ?>;
  }

  #wrapper .border {
    border-color:#<?php echo $d['border'] ;?>;
  }

  #wrapper .sidebar-nav a:hover {
    background-color: #<?php echo $d['hover']; ?>; ;
  }
  #wrapper .sidebar .active a {
    background-color: #<?php echo $d['hover']; ?>; ;
  }
</style>
<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
  </head>
  <!-- <body style="background-color: #79b79c; padding-top:100px;"> -->
  <!-- <body style="color:#000000;"> -->
  <body>
  <!-- padding-top: 70px; -->
