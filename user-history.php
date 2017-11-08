<!DOCTYPE html>
<html lang="en">
<head>
	<title>Millenia</title>
	<?php include "/templates/styles.html" ?>
</head>

<body>
	<?php include "/templates/navbar.php" ?>
	<?php include "/templates/mobile-search.php" ?>
	<!-- content start here -->
	<div class="container-fluid nopad bg-ver2">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad outer-space-p">
			
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopad">
				<div class="container-fluid nopad outer-box-p">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-ver2" style="">
						<!-- avatar edit profile menu -->
						<div class="container-fluid nopad text-center avatar-p" style="background-color:white">
							<div class="col-xs-3 col-sm-12 col-md-12 col-lg-12 nopad">
								<img src="images/icons/ic-profile.svg" class="img-prof" style="">
							</div>
							<div class="col-xs-9 col-sm-12 col-md-12 col-lg-12 nopad space-profile-3">	
								<h5 style="font-size:1.3em;"> aa </h5>
								<h5> Active since 2 days ago </h5>
								<a class="biru kecil2"> <i class="fa fa-pencil biru" aria-hidden="true" style="padding-right:2%;"></i>Edit Profil </a>
							</div>
						</div>
						<!-- echo milenia points here -->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad text-center point-p" style="">
							<h5> Milenia Points </h5>
							<h4> 100.000 Points </h4>
						</div>
						
						<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 nopad text-left" style="padding:5% 10% 6% 10%;">
							<!-- menu users in desktop here -->
							<div class="hidden-xs container-fluid nopad">
								<div class="container-fluid nopad" style="border-top:none;">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3%;">
										<img src="images/icons/ic-profile.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5> Profil Saya</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.5%;">
										<img src="images/icons/ic-inbox.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5> Kotak Pesan</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4%;">
										<img src="images/icons/ic-history.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5>Histori Belanja</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.5%;">
										<img src="images/icons/ic-review.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5>Ulasan Belanja</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4.3%;">
										<img src="images/icons/ic-wishlist.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5>Wishlist</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4%;">
										<img src="images/icons/ic-point.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5>Milenia Points</h5>
									</div>
								</div>
								<div class="container-fluid nopad">
									<div class="col-lg-2 nopad" style="padding:4%;">
										<img src="images/icons/ic-complain.svg" style="width:100%;">
									</div>
									<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
										<h5>Komplain</h5>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- menu users in mobile here -->
					<div class="hidden-sm hidden-md hidden-lg col-xs-12 nopad" style="padding:2%;margin-bottom:10px;">
						<select class="form-control" id="tabprofile" onchange="location=this.value;">
							<option value="user-profile.html">Profil Saya</option>
							<option value="user-inbox.html">Kotak Pesan</option>
							<option value="user-history.html">Histori Belanja</option>
							<option value="user-review.html">Ulasan Belanja</option>
							<option value="user-wishlist.html">Wishlist</option>
							<option value="user-points.html">Milenia Points</option>
							<option value="user-complain.html">Komplain</option>
						</select>
					</div>
					
				</div>
			</div>
			
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 nopad space-p-2 box-ver2" style="box-shadow:none;">
				<div class="container-fluid nopad">
					<!-- tabs menu -->
					<ul class="nav nav-tabs" style="border-bottom:1px solid #e0e0e0;padding:0%;margin:0px;" id="style-3">
						<li class="active text-center"><a data-toggle="tab" href="#menup1">&nbsp &nbsp Status Pembayaran </a></li>
						<li><a data-toggle="tab" href="#menup2">Status Pemesanan</a></li>
						<li><a data-toggle="tab" href="#menup3">Konfirmasi Penerimaan</a></li>
						<li><a data-toggle="tab" href="#menup4">Daftar Transaksi</a></li>
					</ul>
				</div>
				
				<div class="container-fluid nopad content-ver2" style="">
					<!-- tabs content -->
					<div class="tab-content container-fluid space-profile-4" style="">
						<!-- tabs 1 : status pembayaran -->
						<div id="menup1" class="tab-pane fade in active">
							<div class="container-fluid nopad" style="padding-top:13px;padding-left:1%;">
								<!--<h5 style="font-size:1.1em;"> Data Profil </h5>-->
								<!-- list content tab 1 -->
								<div class="container-fluid nopad">
									<!-- row invoice -->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-invoice">
										<div class="container-fluid nopad" >
											<div class="col-lg-9 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#orderan" style="cursor:pointer"> Lihat semua produk 
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
											<div class="col-lg-3 nopad" style="padding:10px 0px 10px 0px;">
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad">
													<button class="btn-defaults btn-hist" id="buyitem" style="margin-bottom:10px;">
														Selesai
													</button>
												</div>
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad space-btn-xs">	
													<button class="btn-out-default col-xs-6 col-lg-12 btn-hist" id="buyitem">
														Lacak
													</button>
												</div>	
											</div>	
										</div>
										<div id="orderan" class="collapse">
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee">
												<div class="col-xs-3 col-lg-2 nopad" style="">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-lg-5 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- echo in mobile too -->
													<div class="col-xs-12 nopad hidden-sm hidden-md hidden-lg" style="margin-top:-10px;">
														<h5> Rp 30.000 x 2  </h5>
														<h5>Rp 60.000</h5>
													</div>
												</div>
												<!-- echo in desktop -->
												<div class="hidden-xs col-lg-3 nopad" style="padding-left:10px;">
													<h5> Rp 30.000 x 2 </h5>
												</div>
												<div class="hidden-xs col-lg-2 nopad" style="padding-left:10px;">
													<h5>Rp 60.000 </h5>
												</div>
											</div>
										</div>	
										
									</div>
									
									
									<!-- row invoice -->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-invoice">
										<div class="container-fluid nopad" >
											<div class="col-lg-9 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#orderan2" style="cursor:pointer"> Lihat semua produk 
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
											<div class="col-lg-3 nopad" style="padding:10px 0px 10px 0px;">
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad">
													<button class="btn-defaults btn-hist" id="buyitem" style="margin-bottom:10px;">
														Selesai
													</button>
												</div>
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad space-btn-xs">	
													<button class="btn-out-default col-xs-6 col-lg-12 btn-hist" id="buyitem">
														Lacak
													</button>
												</div>	
											</div>	
										</div>
										<div id="orderan2" class="collapse">
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee">
												<div class="col-xs-3 col-lg-2 nopad" style="">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-lg-5 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- echo in mobile too -->
													<div class="col-xs-12 nopad hidden-sm hidden-md hidden-lg" style="margin-top:-10px;">
														<h5> Rp 30.000 x 2 </h5>
														<h5>Rp 60.000 </h5>
													</div>
												</div>
												<!-- echo in desktop -->
												<div class="hidden-xs col-lg-3 nopad" style="padding-left:10px;">
													<h5> Rp 30.000 x 2</h5>
												</div>
												<div class="hidden-xs col-lg-2 nopad" style="padding-left:10px;">
													<h5>Rp 60.000</h5>
												</div>
											</div>
										</div>	
										
									</div>
									
								</div>	
								
							</div>
						</div>
						<!-- tabs 2 : status pemesanan -->
						<div id="menup2" class="tab-pane fade">
							<div class="container-fluid nopad" style="padding-top:13px;padding-left:1%;">
								<!-- list content tab 2 -->
								<div class="container-fluid nopad">
									
									<!-- row invoice -->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-invoice">
										<div class="container-fluid nopad" >
											<div class="col-lg-9 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#alamat" style="cursor:pointer"> 
													Lihat Alamat Pengiriman & Produk
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
											<div class="col-lg-3 nopad" style="padding:10px 0px 10px 0px;">
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad">
													<button class="btn-defaults btn-hist" id="buyitem" style="margin-bottom:10px;">
														Selesai
													</button>
												</div>
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad space-btn-xs">	
													<button class="btn-out-default col-xs-6 col-lg-12 btn-hist" id="buyitem">
														Lacak
													</button>
												</div>	
											</div>	
										</div>
										<div id="alamat" class="collapse">
											<!-- row shipping address-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding:5px 10px 10px 10px;">
												<h5> Alamat Tujuan </h5>
												<h5> Username - 081791819 </h5>
												<h5> jl. suka suka, Provinsi : Banten, Kota : Tangerang, Kecamatan: aa (15100) </h5>
												<h5> Paket JNE YES - Rp 15.000</h5>
											</div>
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee">
												<h5 style="padding:5px 10px 10px 10px;"> Daftar Produk </h5>
												<div class="col-xs-3 col-lg-2 nopad" style="">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-lg-5 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- echo in mobile too -->
													<div class="col-xs-12 nopad hidden-sm hidden-md hidden-lg" style="margin-top:-10px;">
														<h5> Rp 30.000 x 2</h5>
														<h5> Rp 60.000</h5>
													</div>
												</div>
												<!-- echo in desktop -->
												<div class="hidden-xs col-lg-3 nopad" style="padding-left:10px;">
													<h5> Rp 30.000 x 2</h5>
												</div>
												<div class="hidden-xs col-lg-2 nopad" style="padding-left:10px;">
													<h5> Rp 60.000</h5>
												</div>
											</div>
										</div>
									</div>
								</div>	
								
								
							</div>
						</div>
						<!-- tabs 3 : alamat pengiriman -->
						<div id="menup3" class="tab-pane fade">
							<div class="container-fluid nopad" style="padding-top:13px;padding-left:1%;">
								<!-- list content tab 2 -->
								<div class="container-fluid nopad">
									
									<!-- row invoice -->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-invoice">
										<div class="container-fluid nopad" >
											<div class="col-lg-9 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#alamatkonfirmasi" style="cursor:pointer"> 
													Lihat Alamat Pengiriman & Produk
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
											<div class="col-lg-3 nopad" style="padding:10px 0px 10px 0px;">
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad">
													<button class="btn-defaults btn-hist" id="buyitem" style="margin-bottom:10px;">
														Konfirmasi
													</button>
												</div>
												<div class="col-xs-6 col-sm-12 col-md-12 col-lg-12 nopad space-btn-xs">	
													<button class="btn-out-default col-xs-6 col-lg-12 btn-hist" id="buyitem">
														Lacak
													</button>
												</div>	
											</div>	
										</div>
										<div id="alamatkonfirmasi" class="collapse">
											<!-- row shipping address-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding:5px 10px 10px 10px;">
												<h5> Alamat Tujuan </h5>
												<h5> Username - 081791819 </h5>
												<h5> jl. suka suka, Provinsi : Banten, Kota : Tangerang, Kecamatan: aa (15100) </h5>
												<h5> Paket JNE YES - Rp 15.000</h5>
											</div>
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee">
												<h5 style="padding:5px 10px 10px 10px;"> Daftar Produk </h5>
												<div class="col-xs-3 col-lg-2 nopad" style="">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-lg-5 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- echo in mobile too -->
													<div class="col-xs-12 nopad hidden-sm hidden-md hidden-lg" style="margin-top:-10px;">
														<h5>Rp 30.000 x 2 </h5>
														<h5> Rp 60.000</h5>
													</div>
												</div>
												<!-- echo in desktop -->
												<div class="hidden-xs col-lg-3 nopad" style="padding-left:10px;">
													<h5>Rp 30.000 x 2 </h5>
												</div>
												<div class="hidden-xs col-lg-2 nopad" style="padding-left:10px;">
													<h5> Rp 60.000</h5>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
						
						<!-- tabs 4 : daftar transaksi -->
						<div id="menup4" class="tab-pane fade">
							<div class="container-fluid nopad" style="padding-top:13px;padding-left:1%;">
								<!-- list content tab 2 -->
								<div class="container-fluid nopad">
									
									<!-- row invoice -->
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-invoice">
										<div class="container-fluid nopad" >
											<div class="col-lg-9 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#alamatdaftar" style="cursor:pointer"> 
													Lihat Alamat Pengiriman & Produk
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
											<div class="col-lg-3 nopad" style="padding:10px 0px 10px 0px;">
												<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
													<button class="btn-defaults btn-hist" id="buyitem" style="margin-bottom:10px;">
														Review
													</button>
												</div>
												
											</div>	
										</div>
										<div id="alamatdaftar" class="collapse">
											<!-- row shipping address-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding:5px 10px 10px 10px;">
												<h5> Alamat Tujuan </h5>
												<h5> Username - 081791819 </h5>
												<h5> jl. suka suka, Provinsi : Banten, Kota : Tangerang, Kecamatan: aa (15100) </h5>
												<h5> Paket JNE YES - Rp 15.000</h5>
											</div>
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee">
												<h5 style="padding:5px 10px 10px 10px;"> Daftar Produk </h5>
												<div class="col-xs-3 col-lg-2 nopad" style="">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-lg-5 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- echo in mobile too -->
													<div class="col-xs-12 nopad hidden-sm hidden-md hidden-lg" style="margin-top:-10px;">
														<h5>Rp 30.000 x 2 </h5>
														<h5>Rp 60.000</h5>
													</div>
												</div>
												<!-- echo in desktop -->
												<div class="hidden-xs col-lg-3 nopad" style="padding-left:10px;">
													<h5>Rp 30.000 x 2 </h5>
												</div>
												<div class="hidden-xs col-lg-2 nopad" style="padding-left:10px;">
													<h5>Rp 60.000</h5>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
						
					</div>	  
				</div>
				
			</div>
		</div>
	</div>
	<!-- content end here -->

	<!-- modal for cart -->
	<div id="myModal" class="modal fade" role="dialog" style="margin:10% 5% 10% 5%;">
		<div class="modal-dialog" >
			<div class="modal-content" style="padding:1%;">
				<div class="modal-header" style="border-bottom:1px solid #eeeeee;padding-bottom:1%;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h5 style="margin-top:2%;" id="counteritemxs">0 Barang</h5>
				</div>
				<div class="modal-body" style="padding:6%;height:280px;overflow-y:scroll;" id="keranjangkuxs">
					
				</div>
				<div class="container-fluid text-right" style="position:fixed;bottom:19%;background-color:white;">
					<h5 id="totalitemxs"> Total : Rp 0 </h5>
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


		/* filter select option for add new address */
		document.getElementById("addcity").disabled=true;
		document.getElementById("adddistrict").disabled=true;	

		/* filter provinsi */				
		$('#addprov').on('change', function (e) {
			/* ini buat dapetin value yang terpilih di selection*/
			var optionprov = $("option:selected", this);
			var valueprov = this.value;
			console.log(valueprov);
			if(valueprov=="Pilih Provinsi")
			{
				document.getElementById("addcity").disabled=true;
			}
			else
			{
				document.getElementById("addcity").disabled=false;
			}
		});

		/* filter kota */
		$('#addcity').on('change', function (e) {
			var optioncity = $("option:selected", this);
			var valuecity = this.value;
			console.log(valuecity);
			if(valuecity=="Pilih Kota"){
				document.getElementById("adddistrict").disabled=true;
			}
			else{
				document.getElementById("adddistrict").disabled=false;
			}
		});
		
		/* for overlay purposes, dont change this */
		function openov1(){
			$("#bgku2").fadeIn();
		}

		function closebgku2(){
			$("#bgku2").fadeOut();
		}
		
	</script>
</body>
</html>