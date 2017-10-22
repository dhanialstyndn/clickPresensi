<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type ="text/javascript" src ="<?php echo base_url('assets2/js/bootstrap.js');?>"></script>
	<script type ="text/javascript" src ="<?php echo base_url('assets2/js/jquery.js');?>"></script>
	<link rel ="stylesheet" type ="text/css" href ="<?php echo base_url('assets2/css/bootstrap.css');?>">
	
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href=<?php echo base_url().'Admin' ?>>Halaman Admin</a>
    </div>
    </div>
    <?php echo anchor('Admin/signout', 'Log Out', ['class' => 'btn btn-primary']);?>
</nav>