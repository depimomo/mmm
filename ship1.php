<!DOCTYPE html>
<html lang="en">
<head>
	<title>Millenia</title>
	<?php include "/templates/styles.html" ?>
</head>

<body>
	<?php include "/templates/navbar.php" ?>
    <?php include "/templates/mobile-search.php" ?>

	<div class="container side-collapse-container" id="itemku">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
		<div class="container nopad">
			<div class="row bs-wizard" style="border-bottom:0;">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum" style="color:white">Langkah 1</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="hidden-xs bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:1%;">Informasi Pengiriman</div>
					<div class="hidden-sm hidden-md hidden-lg bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:3%;">
					Langkah 1</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum" style="color:white">Langkah 2</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="hidden-xs bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:1.5%;">Metode Pembayaran</div>
					<div class="hidden-sm hidden-md hidden-lg bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:3%;">
					Langkah 2</div>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum" style="color:white">Langkah 2</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="hidden-xs bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:1.5%;">Informasi Pengiriman</div>
					<div class="hidden-sm hidden-md hidden-lg bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:3%;">
					Langkah 3</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid nopad" style="padding-top:6%;">
		<div class="container-fluid nopad space-ship-1" style="">
			<h2 class="text-left title" style=""> Data Pengiriman </h2>
		</div>
		<div class="container-fluid space-ship-2" style="">
			<!-- container barang cart -->
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 nopad space-ship-3" style="margin-top:">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:0px;margin-top:-10px;">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
							<label for="usr">Nama Penerima</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right:10px;">
							<label for="usr">Telepon</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nomor Telepon">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-right:10px;">
							<label for="usr">Alamat</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Alamat">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-2" style="padding-right:10px;">
							<label for="usr">Provinsi</label>
							<select class="form-control" id="size" style="border-radius:3px;">
								<option>Banten</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
								<option>XXL</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-2" style="padding-right:10px;">
							<label for="usr">Kota</label>
							<select class="form-control" id="size" style="border-radius:3px;">
								<option>Tangerang</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
								<option>XXL</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-2" style="padding-right:10px;">
							<label for="usr">Kecamatan</label>
							<select class="form-control" id="size" style="border-radius:3px;">
								<option>Cimone</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
								<option>XXL</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-2" style="padding-right:10px;">
							<label for="usr">Kecamatan</label>
							<select class="form-control" id="size" style="border-radius:3px;">
								<option>Cimone</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
								<option>XXL</option>
							</select>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-top:12px;padding-right:10px;">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<label for="usr">Kode Pos</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Kode Pos">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field form-field-lg">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-2" style="padding-right:10px;">
							<label for="usr">Metode Pengiriman</label>
							<select class="form-control" id="size" style="border-radius:3px;">
								<option>JNE</option>
								<option>M</option>
								<option>L</option>
								<option>XL</option>
								<option>XXL</option>
							</select>
						</div>
					</div>
				</div>
			</div>

			<!-- rincian pesanan -->
			<!-- opsi 1-->
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopad" style="padding-left:2%;">
				<div class="container-fluid nopad" style="padding:6% 10% 8% 10%;background-color:#f8f8f8;border:1px solid #eeeeee;">
					<h5 style="padding-top:1%;font-size:1.1em;"> Rincian Pesanan</h5>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-top:1px solid #eeeeee;margin-top:2%;padding:2% 0% 3% 0%;">
						<div class="col-xs-3 col-sm-8 col-md-8 col-lg-3 nopad" style="padding-top:3%;">
							<img src="images/test-1.jpg" style="width:100%;height:auto;border:1px solid #eeeeee;">
						</div>
						<div class="col-xs-9 col-sm-4 col-md-4 col-lg-9 nopad" style="padding:3% 5% 1% 5%;">
							<h5 style="font-size:1em;margin:0px;line-height:20px;margin-bottom:10px;">Tas Ransel Sekolah Jansport Abu Muda / Tas Pria Wanita Trendy Murah</h5>
							<h5 style="font-size:1em;margin:0px;">Rp 30.000 x 2</h5>
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-top:1px solid #eeeeee;margin-top:2%;">
						<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 nopad" style="padding-top:3%;">
							<h5 style="font-size:1em;"> Subtotal</h5>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 nopad text-right" style="padding-top:3%;">
							<h5 style="font-size:1em;"> Rp 30.000</h5>
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="">
						<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 nopad" style="padding-top:1%;">
							<h5 style="font-size:1em"> Diskon</h5>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 nopad text-right" style="padding-top:1%;">
							<h5 style="font-size:1em"> Rp -100</h5>
						</div>	
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="margin-bottom:3%;">
						<div class="col-xs-6 col-sm-8 col-md-8 col-lg-8 nopad" style="padding-top:1%;">
							<h5 style="font-size:1.15em"> Total</h5>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 nopad text-right" style="padding-top:1%;">
							<h5 style="font-size:1.15em"> Rp 29.000</h5>
						</div>	
					</div>
			</div>	
		</div>
	</div>
</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-low-btn" style="">
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 nopad" style="float:left;padding-top:1%;">
		<h5 class="biru hidden-xs" style="font-size:1em"> <i class="fa fa-angle-left fa-lg biru" aria-hidden="true" style="margin-right:4%;"></i>
		Kembali ke Informasi Pengiriman</h5>
		<h5 class="biru hidden-sm hidden-md hidden-lg" style="font-size:1em">
			<i class="fa fa-angle-left fa-2x biru" aria-hidden="true" style="margin-right:4%;"></i></h5>
		</div>
		<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3 nopad text-right" style="float:right;margin-top:5px;">
			<button class="btn-defaults" style="padding:6% 5% 6% 5%;border-radius:3px;width:100%;margin-bottom:2.5%;" id="buyitem">
			Lanjut ke Konfirmasi </button>
		</div>	
	</div>
</div>


<div id="myModal" class="modal fade" role="dialog" style="margin:10% 5% 10% 5%;">
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="padding:1%;">
			<div class="modal-header" style="border-bottom:1px solid #eeeeee;padding-bottom:1%;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
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

<?php include "/templates/scripts.html" ?>
<script>
    <?php include "/templates/sidebar.js" ?>
    <?php include "/templates/cart.js" ?>

$("#hilang").on("click", function() {
	$("#hilang").fadeOut();
});

$(".thumbs").on("click", function() {
	var nameimg = $(this).attr('value');
	var imgsrc= "images/" + nameimg;
	$('#top-img').attr("src",imgsrc);
	return false;
});

function openov1(){
	$("#bgku2").fadeIn();
}

function closebgku2(){
	$("#bgku2").fadeOut();
}

var quantity=0;
$('.quantity-right-plus').click(function(e){

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        // If is not undefined
        $('#quantity').val(quantity + 1);
        });

$('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            // Increment
            if(quantity>0){
            	$('#quantity').val(quantity - 1);
            }
        });
</script>
</body>
</html>	