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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad box-ver2">
						<!-- avatar edit profile menu -->
						<div class="container-fluid nopad text-center avatar-p" style="background-color:white">
							<div class="col-xs-3 col-sm-12 col-md-12 col-lg-12 nopad">
								<img src="images/icons/ic-profile.svg" class="img-prof">
							</div>
							<div class="col-xs-9 col-sm-12 col-md-12 col-lg-12 nopad space-profile-3">	
								<h5 style="font-size:1.3em;"> aa </h5>
								<h5> Active since 2 days ago </h5>
								<a class="biru kecil2"> <i class="fa fa-pencil biru" aria-hidden="true" style="padding-right:2%;"></i>Edit Profil </a>
							</div>
						</div>
						<!-- echo milenia points here -->
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad text-center point-p">
							<h5> Milenia Points </h5>
							<h4> 100.000 Points </h4>
						</div>

						<div class="hidden-xs col-sm-12 col-md-12 col-lg-12 nopad text-left" style="padding:5% 10% 6% 10%;">
							<!-- menu users in desktop here -->
							<div class="hidden-xs container-fluid nopad">
								<a href="user-profile.html">
									<div class="container-fluid nopad" style="border-top:none;">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3%;">
											<img src="images/icons/ic-profile.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5> Profil Saya</h5>
										</div>
									</div>
								</a>
								<a href="user-inbox.html">
									<div class="container-fluid nopad">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.5%;">
											<img src="images/icons/ic-inbox.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5> Kotak Pesan</h5>
										</div>
									</div>
								</a>
								<a href="user-history.html">
									<div class="container-fluid nopad">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4%;">
											<img src="images/icons/ic-history.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5>Histori Belanja</h5>
										</div>
									</div>
								</a>
								<a href="user-review.html">
									<div class="container-fluid nopad">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:3.5%;">
											<img src="images/icons/ic-review.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5>Ulasan Belanja</h5>
										</div>
									</div>
								</a>
								<a href="user-wishlist.html">	
									<div class="container-fluid nopad">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4.3%;">
											<img src="images/icons/ic-wishlist.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5>Wishlist</h5>
										</div>
									</div>
								</a>
								<a href="user-points.html">							
									<div class="container-fluid nopad">
										<div class="col-sm-2 col-md-2 col-lg-2 nopad" style="padding:4%;">
											<img src="images/icons/ic-point.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5>Milenia Points</h5>
										</div>
									</div>
								</a>
								<a href="user-complain.html">	
									<div class="container-fluid nopad">
										<div class="col-lg-2 nopad" style="padding:4%;">
											<img src="images/icons/ic-complain.svg" style="width:100%;">
										</div>
										<div class="col-sm-10 col-md-10 col-lg-10 nopad" style="padding:1.5% 5% 1.5% 5%;">
											<h5>Komplain</h5>
										</div>
									</div>
								</a>
							</div>

						</div>
					</div>
					<!-- menu users in mobile here -->
					<div class="hidden-sm hidden-md hidden-lg col-xs-12 nopad" style="padding:2%;margin-bottom:10px;">
						<select class="form-control" id="tabprofile" onchange="location=this.value;">
							<option value="user-inbox.html">Kotak Pesan</option>
							<option value="user-profile.html">Profil Saya</option>
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
				<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-bottom:6px;padding-left:25px;padding-top:5px;">
					<h4> Kotak Pesan </h4>
				</div>

				<!-- list message in inbox here -->
				<div class="container-fluid nopad content-ver2">

					<!-- row each message in inbox here -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad message-i">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 nopad">
							<img src="images/icons/ic-profile.svg" style="width:80%;">
						</div>
						<div class="col-xs-10 col-sm-7 col-md-7 col-lg-8 nopad" style="padding-left:2%;">
							<h5 style="font-size:1.1em;"> Diskusi Produk Sweater Black White 
								<span class="kecil3"> - 20 Feb 2017, 11:59</span>
								<!-- use badges for new message -->
								<span class="badge" style="margin-left:2px;">5</span>
							</h5>
							<!-- btn see discussion for mobile -->
							<div class="col-xs-12 hidden-sm hidden-md hidden-lg nopad">
								<button class="btn btn-out-default" style="box-shadow:none;margin-top:3px"> Lihat Diskusi</button>
							</div>
						</div>
						<!-- btn see discussion for desktop -->
						<div class="hidden-xs col-sm-1 col-md-1 col-lg-3 nopad text-right">
							<a href="user-inbox2.html">
								<button class="btn btn-out-default" style="box-shadow:none;margin-top:3px"> Lihat Diskusi</button>
							</a>	
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
			if(valueprov=="Pilih Provinsi") {
				document.getElementById("addcity").disabled=true;
			}
			else {
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