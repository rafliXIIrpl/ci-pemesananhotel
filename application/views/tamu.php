<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HOTEL</title>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    -->
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: Green ;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: Green;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	.container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	<div class="container">
        <form action="<?php echo base_url('datatamu/simpan') ?>" method="post">
            <h3>SELAMAT DATANG DI HOTEL MAWAR</h3>
			<div class="form-group">
				<label>NIK Pemesan</label>
				<input type="text" class="form-control" name="id_tamu" required>
			
			<div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" class="form-control" name="nama_tamu" required="required">
            
            <div class="form-group">
                <label>Alamat Asal</label>
                <input type="text" class="form-control" name="alamat_tamu" required="required">
            
            <div class="form-group">
                <label>No Handphone</label>
                <input type="number" class="form-control" name="no_hp">
            </div>
            <div class="form-group">
                <label>Nama Tipe Kamar</label>
                <select class="form-control" name="nama_tipe_kamar">
                    <option selected>-- Plih Tipe Kamar --</option>
                    <option value="tipe 1">tipe 1</option>
                    <option value="tipe 2">tipe 2</option>
                    <option value="tipe 3">tipe 3 </option>
                </select>
            </div>
            <br>
            <!DOCTYPE html>
<html>
<head>
<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color:blue;}
</style>
</head>
<body>

<button class="button button1">Submit</button>
<script type="text/javascript">
    alert('Data pemesanan hotel Sudah Tersimpan.');
    window.location.assign(index.php);
</script>
</body>
</html>

