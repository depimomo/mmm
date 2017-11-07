<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<?php include "/templates/styles.html" ?>
</head>

<body>
	<?php include "/templates/navbar.php" ?>
	<div class="overlay" id="bgku"></div>

	<!-- halaman pencarian -->
	<div class="col-xs-12 overlay-w" id="bgku2" style="padding:35% 10% 15% 10%;">
		<a href="javascript:void(0)" class="closebtn" onclick="closebgku2()">&times;</a>
		<h4> Cari Produk </h4>
		<div class="col-xs-12 nopad" style="margin-bottom:8%;">
			<input type="text" class="bar-text-xs col-xs-8" id="usr" placeholder="Ketik nama produk disini">
		</div>
		<div class="col-xs-12 nopad">
			<button class="btn-defaults" style="padding:6%;border-radius:3px;width:100%;font-size:1.2em;" id="beli"> 
				<i class="glyphicon glyphicon-search" style="margin-right:2%;"></i>
			Temukan</button>
		</div>	
	</div>

	<div class="container side-collapse-container" id="itemku">
	<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding-top:2%;">
		<h2 class="text-left"> Checkout </h2>
	</div>-->
	
	<div class="container-fluid nopad" style="padding-top:3%;">
		<div class="container-fluid space-ship-2" style="">
			<!-- container barang cart -->
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center nopad" style="padding:0% 3% 0% 3%;">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-profile-1" style="border:1px solid #eeeeee;">
					<div class="container-fluid nopad text-center space-profile-2" style="">
						<div class="col-xs-3 col-sm-12 col-md-12 colcol-lg-12 nopad">
							<img src="images/icons/ic-profile.svg" class="img-prof" style="">
						</div>
						<div class="col-xs-8 col-sm-12 col-md-12 col-lg-12 nopad space-profile-3">	
							<h5 style="font-size:1.3em;"> aa </h5>
							<h5> Active since 2 days ago </h5>
							<a class="biru kecil2"> <i class="fa fa-pencil biru" aria-hidden="true" style="padding-right:2%;"></i>Edit Profil </a>
						</div>	
					</div>
					<div class="container-fluid nopad text-left border-point" style="padding:3% 10% 3% 10%;">
						<!--<img src="images/icons/ic-profile.svg" style="width:23%;margin-bottom:3%;">-->
						<h5> Milenia Points</h5>
						<h5 style="font-size:1.3em;"> 100.000 Points</h5>
						<!--<a class="biru kecil2"> <i class="fa fa-pencil biru" aria-hidden="true" style="padding-right:2%;"></i>Edit Profil </a>-->
					</div>
					<div class="hidden-xs container-fluid nopad text-left space-profile-1" style="">
						<div class="container-fluid nopad side-p-selected" style="border-top:none;">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3%;">
								<img src="images/icons/ic-profile.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5> Profil Saya</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.2%;">
								<img src="images/icons/ic-inbox.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5> Kotak Masuk</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.8%;">
								<img src="images/icons/ic-history.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5>Histori Belanja</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.5%;">
								<img src="images/icons/ic-review.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5>Ulasan Belanja</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4%;">
								<img src="images/icons/ic-wishlist.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5>Wishlist</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.8%;">
								<img src="images/icons/ic-point.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5>Milenia Points</h5>
							</div>
						</div>
						<div class="container-fluid nopad side-p-notselected">
							<div class="col-lg-2 nopad" style="padding:3.5%;">
								<img src="images/icons/ic-complain.svg" style="width:100%;">
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
								<h5>Komplain</h5>
							</div>
						</div>
						<!--<a class="biru kecil2"> <i class="fa fa-pencil biru" aria-hidden="true" style="padding-right:2%;"></i>Edit Profil </a>-->
					</div>
				</div>
			</div>
			
			<!-- rincian pesanan -->
			<!-- opsi 1-->
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 nopad" style="">
				<div class="container-fluid nopad" style="padding:1.5%;">
					<ul class="hidden-xs nav nav-tabs" style="border-bottom:1px solid #e0e0e0">
						<li class="active"><a data-toggle="tab" href="#menuit1">Profil Saya</a></li>
						<li><a data-toggle="tab" href="#menuit2">Keamanan</a></li>
						<li><a data-toggle="tab" href="#menuit3">Alamat Pengiriman</a></li>
					</ul>
					<div class="hidden-sm hidden-md hidden-lg col-xs-12 nopad" style="padding:2%;margin-bottom:20px;">
						<select class="form-control" id="tabprofile">
							<option>Profil Saya</option>
							<option>Keamanan</option>
							<option>Alamat Pengiriman</option>
						</select>
					</div>
					<div class="tab-content container-fluid space-profile-4" style="">
						<div id="menuit1" class="tab-pane fade in active">
							<div class="container-fluid nopad" style="padding-top:1%;">
								<h5 style="font-size:1.1em;"> Data Profil </h5>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 nopad">
										<h5> Nama Lengkap </h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;">
										<input id="email" type="text" class="form-control input-edit" name="email" value="Username">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5> E-mail </h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;">
										<input id="email" type="text" class="form-control input-edit" name="email" value="Username">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5>Tanggal Lahir</h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad space-row-xs" style="padding-left:2%;">
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 nopad" style="padding-right:1%;">
											<select class="form-control" id="size">
												<option>Tgl</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
												<option>XXL</option>
											</select>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 nopad" style="padding-right:1%;">
											<select class="form-control" id="size">
												<option>Bulan</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
												<option>XXL</option>
											</select>
										</div>
										<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 nopad">
											<select class="form-control" id="size">
												<option>Tahun</option>
												<option>M</option>
												<option>L</option>
												<option>XL</option>
												<option>XXL</option>
											</select>
										</div>	
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-jk space-row-xs" style="padding-top:1%;">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5> Jenis Kelamin</h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;padding-top:1%;">
										<label class="radio-inline"><input type="radio" name="optradio">Perempuan</label>
										<label class="radio-inline"><input type="radio" name="optradio">Laki-laki</label>
									</div>
								</div>
							</div>
							<div class="container-fluid nopad" style="padding-top:20px;">
								<button class="btn-defaults btn-xs-p" style="" id="buyitem">
								Simpan Perubahan</button>
							</div>	
						</div>
						<div id="menuit2" class="tab-pane fade">
							<div class="container-fluid nopad" style="padding-top:1%;">
								<h5 style="font-size:1.1em;"> Ubah Password</h5>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5> Password Lama </h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;">
										<input id="email" type="text" class="form-control input-edit" name="email" value="Username">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5> Password Baru</h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;">
										<input id="email" type="text" class="form-control input-edit" name="email" value="Username">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-row-xs">
									<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-lg-2 nopad">
										<h5> Password Baru</h5>
									</div>
									<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding-left:2%;">
										<input id="email" type="text" class="form-control input-edit" name="email" value="Username">
									</div>
								</div>
							</div>
							<div class="container-fluid nopad" style="padding-top:20px;">
								<button class="btn-defaults btn-xs-p" style="" id="buyitem">
								Simpan Perubahan</button>
							</div>	
						</div>
						<div id="menuit3" class="tab-pane fade">
							<div class="container-fluid nopad" style="padding-top:1%;">
								<a style="font-size:1.1em;"> Daftar Alamat Tersedia</a>
						<!-- tampilkan ini jika belum ada alamat
							<h5 style="padding-top:2%;padding-bottom:1%;"> Anda belum menyimpan alamat pengiriman </h5>-->
							<!-- tampilkan ini jika sudah ada alamat-->
							<div class="container-fluid nopad" style="padding-top:2%;margin-bottom:20px;">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border:1px solid #eeeeee;padding:2% 3% 2% 3%;border-radius:3px;">
									<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 nopad text-left" style="padding-left:2.5%;">
										<h5> Rumah </h5>
										<h5> Username1 - 0819 910 191</h5>
										<h5> Jl. suka suka no: 12, </h5>
										<h5> Prov : Banten, Kota : Tangerang, Kecamatan : Sukamundur (15112)  </h5>
									</div>
									<div class="col-xs-12 hidden-sm hidden-md hidden-lg nopad text-left" style="padding:2% 2.5% 3% 2.5%;">
										<a href="#" class="biru" style="margin-right:6%;">
											<i class="fa fa-pencil fa-lg biru" aria-hidden="true" style="margin-right:2%;"></i>
											Edit Alamat
										</a>
										<a href="#" class="biru">
											<i class="fa fa-trash fa-lg biru" aria-hidden="true" style="margin-right:2%;"></i>Hapus
										</a>
									</div>
									<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 nopad text-right" style="padding-left:2.5%;">
										<h5 class="biru" style="cursor:pointer;" data-toggle="dropdown"> Kelola Alamat
											<span class="caret" style="margin-left:3%;"></span></h5>
											<ul class="dropdown-menu">
												<li><a href="#">Edit Alamat</a></li>
												<li><a href="#"data-toggle="modal" data-target="#hapusalamat">Hapus</a></li>
												
											</ul>
										</div>
									</div>
								</div>
								
								<a class="biru" data-toggle="collapse" data-target="#tambahalamat" style="text-decoration:underline;"> <i class="fa fa-plus-circle fa-lg" aria-hidden="true" style="margin-right:1%;"></i>Tambah Alamat Baru</a>
								
								<div id="tambahalamat" class="collapse" style="padding-top:1%;">
									<div class="container-fluid nopad">
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Nama Alamat</label>
												<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Nama Penerima</label>
												<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Telepon</label>
												<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
											</div>
										</div>
										
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;" >
												<label for="usr">Alamat</label>
												<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Provinsi</label>
												<select class="form-control" id="addprov" style="border-radius:3px;">
													<option>Pilih Provinsi</option>
													<option>M</option>
													<option>L</option>
													<option>XL</option>
													<option>XXL</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Kota</label>
												<select class="form-control" id="addcity" style="border-radius:3px;">
													<option>Pilih Kota</option>
													<option>M</option>
													<option>L</option>
													<option>XL</option>
													<option>XXL</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Kelurahan</label>
												<select class="form-control" id="adddistrict" style="border-radius:3px;">
													<option>Pilih Keluarahan</option>
													<option>M</option>
													<option>L</option>
													<option>XL</option>
													<option>XXL</option>
												</select>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
											<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
												<label for="usr">Kode Pos</label>
												<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
											</div>
										</div>
									</div>
									<div class="container-fluid nopad" style="padding-top:20px;">
										<button class="btn-defaults btn-xs-p" style="" id="buyitem"
										data-toggle="collapse" data-target="#demo">
									Tambah Alamat</button>
								</div>
							</div> 
						</div>
					<!--<div class="container-fluid nopad" style="padding-top:3%;">
						<button class="btn-defaults" style="padding:2% 5% 2% 5%;border-radius:3px;margin-bottom:2.5%;" id="buyitem"
						data-toggle="collapse" data-target="#demo">
						Tambah Alamat Baru</button>
					</div>-->
					
				</div>
				
			</div> 
			
		</div>	
	</div>
	
</div>
</div>

</div>

<!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad space-low-btn" style="">
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
</div>-->


<div id="myModal" class="modal fade" role="dialog" style="margin:10% 5% 10% 5%;">
	<div class="modal-dialog" >

		<!-- Modal content-->
		<div class="modal-content" style="padding:1%;">
			<div class="modal-header" style="border-bottom:1px solid #eeeeee;padding-bottom:1%;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<!--<h4 class="modal-title">Keranjang</h4>-->
				<h5 style="margin-top:2%;" id="counteritemxs">0 Barang</h5>
			</div>
			<div class="modal-body" style="padding:6%;height:280px;overflow-y:scroll;" id="keranjangkuxs">
        <!--<div class="col-xs-12 nopad" style="margin-bottom:5%;">
			<div class="col-xs-3 nopad">
				<img src="images/test-1.jpg" style="width:100%;border:1px solid #eeeeee;">
			</div>
			<div class="col-xs-8 nopad" style="padding-left:5%;">
				<h5 class="modal-title">Nama Items</h5>
				<h5 class="modal-title">Rp 80.000 x 2</h5>
			</div>
			<i class='material-icons biru btnclear col-xs-1 nopad text-right' style='font-size:1.3em;'>
			clear
			</i>
		</div>-->
		
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


<!-- Modal -->
<div id="hapusalamat" class="modal fade" role="dialog" style="margin:5%;">
	<div class="modal-dialog">

		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title" style="padding-left:2%;">Hapus Alamat</h4>
			</div>
			<div class="modal-body">
				<h5 style="margin-left:2%;"> Apakah Anda ingin menghapus alamat "Rumah"? </h5>	
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-out-default" data-dismiss="modal">Batal</button>
				<button type="button" class="btn btn-defaults" data-dismiss="modal">Hapus</button>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {   
		var sideslider = $('[data-toggle=collapse-side]');
		var sel = sideslider.attr('data-target');
		var sel2 = sideslider.attr('data-target-2');
		var temp =1;
		sideslider.click(function(event){
			$(sel).toggleClass('in');
			jQuery('.navbar-static-top').css({position: 'static'});
			$("#sidebarku").fadeIn(200);
			$("#bgku").fadeIn(200);
		});
		
		$("#tutup").on("click", function() {
			console.log("burger");
			$("#sidebarku").fadeOut(200);
			$("#sidebarku").show().removeClass('animated slideInLeft');
			$(".sidebars").siblings(".sidebars").removeClass("in");
			$(".sidebars").toggleClass("in");
			$("#bgku").fadeOut(300);
			jQuery('.navbar-static-top').css({position: 'fixed'});
			$("#navbarku").removeClass("nonebs-nav-xs");
		});
		
		
		

	});	


	/* buat filter select option*/
	document.getElementById("addcity").disabled=true;
	document.getElementById("adddistrict").disabled=true;					
	$('#addprov').on('change', function (e) {
		/* ini buat dapetin value yang terpilih di selection*/
		var optionprov = $("option:selected", this);
		var valueprov = this.value;
		console.log(valueprov);
		if(valueprov=="Pilih Provinsi")
		{
			document.getElementById("addcity").disabled=true;
		//console.log("gaboleh");
	}
	else
	{
		document.getElementById("addcity").disabled=false;
	}
});

	$('#addcity').on('change', function (e) {
		/* ini buat dapetin value yang terpilih di selection*/
		var optioncity = $("option:selected", this);
		var valuecity = this.value;
		console.log(valuecity);
		if(valuecity=="Pilih Kota")
		{
			document.getElementById("adddistrict").disabled=true;
		//console.log("gaboleh");
	}
	else
	{
		document.getElementById("adddistrict").disabled=false;
	}
});



	/* buat filter select option*/
	$('#tabprofile').on('change', function (e) {
		/* ini buat dapetin value yang terpilih di selection*/
		var optionprofile = $("option:selected", this);
		var valueprofile = this.value;
		console.log(valueprofile);
		if(valueprofile=="Profil Saya")
		{
			$('#menuit2').removeClass("in active");
			$('#menuit3').removeClass("in active");
			$('#menuit1').addClass("in active");
		}
		if(valueprofile=="Keamanan")
		{
			$('#menuit1').removeClass("in active");
			$('#menuit3').removeClass("in active");
			$('#menuit2').addClass("in active");
		}
		if(valueprofile=="Alamat Pengiriman")
		{
			$('#menuit1').removeClass("in active");
			$('#menuit2').removeClass("in active");
			$('#menuit3').addClass("in active");
		}
	});


/*
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
*/

$("#hilang").on("click", function() {
	$("#hilang").fadeOut();
});

$(".thumbs").on("click", function() {
	//alert($(this).attr('value'));
	var nameimg = $(this).attr('value');
	var imgsrc= "images/" + nameimg;
	$('#top-img').attr("src",imgsrc);
	return false;
});

/*$(document).on('click touchstart', '.thumbs', function() {
    alert('ok');
});*/

function openov1(){
	$("#bgku2").fadeIn();
}

function closebgku2(){
	$("#bgku2").fadeOut();
}






var quantitiy=0;
$('.quantity-right-plus').click(function(e){
	
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
        
        $('#quantity').val(quantity + 1);

        
            // Increment
            
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




/* ---------------- CART FOR DESKTOP --------------*/

/*declare var global for desktop for count item in cart*/	
var hitungitem = 0;	
var sum = 0

/*jika ada elemen yang baru dibuat setelah html selesai diload, wajib pake ini*/
$(document).on("click",".btnclear", function() {
	var temphapus = $(this).attr('id');
	var tempharga = $("#harga"+temphapus).val();
	//console.log(tempharga);
	$("#cartitem"+temphapus).remove();
	hitungitem--;
	sum = sum - tempharga;
	//console.log(sum+"kurang");
	$('#counteritem').html(hitungitem+" Barang");
	$('#totalitem').html("Total : Rp "+sum);
});

/* ini buat desktop, mesti dipisah karena cartnya satu dropdown satu modal */	
$("#buyitem").on("click", function() {
	var nama = $('#nameitem').attr('value');
	var harga = parseInt($('#priceitem').attr('value'));
    //var ukuran = $('#size').find(":selected").text();
	//var warna = $('#color').find(":selected").text();
	var qty = $('#quantity').val();
	var gambar = $("#top-img").attr('value');
	hitungitem++;
	var totalperitem = qty*harga;
	sum = sum + totalperitem;
	console.log(sum);
	
	
	var tampung = 
	"<li id='cartitem"+hitungitem+"'><span class='item col-lg-10 nopad'><span class='item-left'><img src='images/"+gambar+"' style='width:100%;width:70px;height:70px;'><span class='item-info'><span>"+nama+"</span><span>Rp "+ harga +" x "+qty+"</span></span></span></span><i class='material-icons biru btnclear col-lg-2 nopad text-right' style='font-size:1.3em;right:15px;top:5px' id='"+hitungitem+"'>clear</i><input id='harga"+hitungitem+"' value="+totalperitem+" style='display:none'></li>";
	$('#counteritem').html(hitungitem+" Barang");
	$('#totalitem').html("Total : Rp "+sum);
	$('#keranjangku').append(tampung);
});



/* ---------------- CART FOR MOBILE --------------*/
/*declare var global for mobile for count item in cart*/
var hitungitemxs = 0;	
var sumxs=0;

/*jika ada elemen yang baru dibuat setelah html selesai diload, wajib pake ini*/
$(document).on("click",".btnclearxs", function() {
	var temphapusxs = $(this).attr('id');
	var temphargaxs = $("#hargaxs"+temphapusxs).val();
	$("#cartitem"+temphapusxs).remove();
	hitungitemxs--;
	sumxs = sumxs - temphargaxs;
	$('#counteritemxs').html(hitungitemxs+" Barang");
	$('#totalitemxs').html("Total : Rp "+sumxs);
});

/*ini buat cart mobile*/
$("#buyitemxs").on("click", function() {
	var namaxs = $('#nameitem').attr('value');
	var hargaxs = parseInt($('#priceitem').attr('value'));
	var qtyxs = $('#quantity').val();
	var gambarxs = $("#top-img").attr('value');
	hitungitemxs++;
	//console.log(namaxs,hargaxs,qtyxs,gambarxs,hitungitemxs);
	var totalperitemxs = qtyxs*hargaxs;
	sumxs = sumxs + totalperitemxs;
	console.log(sumxs);
	
	var tampungxs = 
	"<div class='col-xs-12 nopad' style='margin-bottom:5%;' id='cartitem"+hitungitemxs+"'><div class='col-xs-3 nopad'><img src='images/"+gambarxs+"' style='width:100%;border:1px solid #eeeeee;'></div><div class='col-xs-8 nopad' style='padding-left:5%;'><h5 class='modal-title'>"+namaxs+"</h5><h5 class='modal-title'>Rp "+hargaxs+" x "+qtyxs+"</h5></div><i class='material-icons biru btnclearxs col-xs-1 nopad text-right' style='font-size:1.3em;' id='"+hitungitemxs+"'>clear</i><input type='hidden' id='hargaxs"+hitungitemxs+"' value="+totalperitemxs+"></div>";
	$('#counteritemxs').html(hitungitemxs+" Barang");
	$('#totalitemxs').html("Total : Rp "+sumxs);
	$('#keranjangkuxs').append(tampungxs);
});




</script>
</body>



</html>	