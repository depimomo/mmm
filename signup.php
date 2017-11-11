<!DOCTYPE html>
<html lang="en">
<head>
	<title>Millenia</title>
	<?php include "./templates/styles.html" ?>
</head>

<body>
	<?php include "./templates/navbar.php" ?>
    <?php include "./templates/mobile-search.php" ?>

	<div class="container-fluid nopad space-ban-xs" style="">
		<div class="container-fluid nopad">
			<div class="hidden-xs col-sm-6 col-md-6 col-lg-6 nopad grad2" style="height:600px;"></div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding:4.5% 6% 5% 6%;">
				<h1 class="title" style="font-size:3.7em;"> Sign Up</h1>
				<div class="divider-biru" style="margin:0px;margin-top:25px;margin-left:3px;margin-bottom:30px;"></div>
				<!-- Tambahin link ke signin.php -Tim -->
				<h5 style="font-size:1.1em;"> Sudah punya akun? Yuk, <a href="signin.php"><span class="biru">Masuk sekarang </span>!</a> </h5>
				<!-- End Tambahin link ke signin.php -Tim -->
				<div class="container-fluid nopad space-input-1">
					<div class="input-group col-lg-12">
						<span class="input-group-addon"><i class="fa fa-user fa-lg biru" style="margin-left:-10px;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Ketik Nama Lengkap Anda">
					</div>
					<div class="input-group col-lg-12" style="margin-top:3%;">
						<span class="input-group-addon"><i class="fa fa-envelope biru" style="margin-left:-10px;font-size:1.2em;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Ketik Email Anda">
					</div>
					<div class="input-group col-lg-12" style="margin-top:3%;">
						<span class="input-group-addon"><i class="fa fa-key biru" style="margin-left:-10px;font-size:1.2em;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Ketik Password">
					</div>
					<div class="input-group col-lg-12" style="margin-top:3%;">
						<span class="input-group-addon"><i class="fa fa-key biru" style="margin-left:-10px;font-size:1.2em;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Ketik kembali Password">
					</div>
				</div>
		<div class="container-fluid nopad space-input-1" style="padding-top:23px;">
			<div class="col-lg-12 nopad" style="padding-top:4px;">
				<button class="btn-defaults" style="padding:4% 6% 4% 6%;border-radius:3px;width:100%;font-size:1.2em;" id="beli"> Sign Up </button>
			</div>
		</div>
	</div>
</div>
</div>
<div id="myModal" class="modal fade" role="dialog" style="margin:10% 5% 10% 5%;">
	<div class="modal-dialog" >
		<div class="modal-content" style="padding:1%;">
			<div class="modal-header" style="border-bottom:1px solid #eeeeee;padding-bottom:1%;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!--<h4 class="modal-title">Keranjang</h4>-->
				<h5 style="margin-top:2%;" id="counteritemxs">0 Barang</h5>
			</div>
			<div class="modal-body" style="padding:6%;height:280px;overflow-y:scroll;" id="keranjangkuxs">

			</div>
			<div class="container-fluid text-right" style="position:fixed;bottom:19%;background-color:white;">
				<h5 id="totalitemxs"> Total : Rp 120.000 </h5>
			</div>
			<div class="modal-footer">
				<div class="col-xs-6 nopad" style="padding-right:1%;">
					<button class="btn-out-default" style="padding:7%;border-radius:3px;width:100%;"> Lihat Pesanan </button>
				</div>
				<div class="col-xs-6 nopad" style="">
					<button type="button" class="btn btn-defaults" style="padding:7%;border-radius:3px;width:100%;">Bayar</button>
				</div>
			</div>
		</div>

	</div>
</div>
<?php include "./templates/scripts.html" ?>
<script>
    <?php include "./templates/sidebar.js" ?>
	<?php include "./templates/cart.js" ?>

</script>
</body>
</html>
