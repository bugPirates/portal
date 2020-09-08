<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Statistik wilayah</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link rel="shorcut icon" href="<?php echo base_url().'theme/images/favicon.png'?>">
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	<!-- Stylesheets -->

	<link href="<?php echo base_url().'theme/plugins/bootstrap.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'theme/fonts/ionicons.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'theme/common/styles.css'?>" rel="stylesheet">
    <style>
    		
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        padding:15x;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>

</head>
<body>
	
	<?php echo $header;?>

</style>
</head>
<body>

<center><h2>Statistik Penduduk</h2></center>
<br>

<div class="container">
<table>
  <tr>
    <th>Jumlah Penduduk</th>
    <th>Laki-Laki</th>
    <th>Perempuan</th>
  </tr>
  <tr>
    <td>1000</td>
    <td>600</td>
    <td>400</td>
      </tr>
</table>
<br>
<center><h2>Pekerjaan Penduduk</h2></center>
<br>
<table>
  <tr>
    <th>Pekerjaan</th>
    <th>Jumlah</th>
  </tr>
  <tr>
    <td>PNS</td>
    <td>--</td>
  </tr>
  <tr>
    <td>Buruh Tani</td>
    <td>--</td>
  </tr>
  <tr>
    <td>Penenun</td>
    <td>--</td>
  </tr>
  <tr>
    <td>Petani</td>
    <td>--</td>
  </tr>
  <tr>
    <td>Peternak</td>
    <td>--</td>
  </tr>
  <tr>
    <td>TKI</td>
    <td>--</td>
  </tr>
</table>

</div>
<br>
	
	<?php echo $footer;?>
	
	<!-- SCIPTS -->
	<script src="<?php echo base_url().'theme/plugins/jquery-3.2.1.min.js'?>"></script>
	<script src="<?php echo base_url().'theme/plugins/tether.min.js'?>"></script>
	<script src="<?php echo base_url().'theme/plugins/bootstrap.js'?>"></script>
	<script src="<?php echo base_url().'theme/common/scripts.js'?>"></script>
	
</body>
</html>