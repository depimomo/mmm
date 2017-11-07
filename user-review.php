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
						<li class="active text-center"><a data-toggle="tab" href="#menup1">&nbsp &nbsp Review Tertunda </a></li>
						<li><a data-toggle="tab" href="#menup2">Daftar Review</a></li>
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
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#orderan" style="cursor:pointer"> Lihat semua produk 
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
										</div>
										<div id="orderan" class="collapse">
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-top:10px;">
												<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- ratings -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
														<span class="starRating">
															<input id="rating5" type="radio" name="rating" value="5">
															<label for="rating5">5</label>
															<input id="rating4" type="radio" name="rating" value="4">
															<label for="rating4">4</label>
															<input id="rating3" type="radio" name="rating" value="3">
															<label for="rating3">3</label>
															<input id="rating2" type="radio" name="rating" value="2">
															<label for="rating2">2</label>
															<input id="rating1" type="radio" name="rating" value="1">
															<label for="rating1">1</label>
														</span>
													</div>
													<!-- comment -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:10px 0px 10px 0px;">
														<textarea class="form-control" rows="2" id="comment"></textarea>
													</div>
												</div>
											</div>
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-top:10px;">
												<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- ratings -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
														<span class="starRating">
															<input id="rating6" type="radio" name="rating2" value="5">
															<label for="rating6">5</label>
															<input id="rating7" type="radio" name="rating2" value="4">
															<label for="rating7">4</label>
															<input id="rating8" type="radio" name="rating2" value="3">
															<label for="rating8">3</label>
															<input id="rating9" type="radio" name="rating2" value="2">
															<label for="rating9">2</label>
															<input id="rating10" type="radio" name="rating2" value="1">
															<label for="rating10">1</label>
														</span>
													</div>
													<!-- comment -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:10px 0px 10px 0px;">
														<textarea class="form-control" rows="2" id="comment"></textarea>
													</div>
												</div>
											</div>
											<div class="container-fluid nopad text-right" style="padding-top:10px;">
												<button class="btn-defaults" id="buyitem" style="margin-bottom:10px;padding:10px 30px 10px 30px;border-radius:3px;">
													Kirim Penilaian
												</button>
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
											<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
												<h5 style="font-size:1.2em;"> Invoice 0192901</h5>
												<h5 style="margin:3px 0px 3px 0px;"> Tanggal : 20/09/2017</h5>
												<h5 style=""> Total : Rp 290.000 -
													Pembelian atas 3 produk
												</h5>
												<h5 class="biru"data-toggle="collapse" data-target="#orderan2" style="cursor:pointer"> Lihat semua produk 
													<i class="fa fa-angle-down fa-lg" aria-hidden="true" style="padding-left:5px;"></i>
												</h5>
											</div>
										</div>
										<div id="orderan2" class="collapse">
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-top:10px;">
												<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- ratings -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
														<span class="starRating">
															<input id="rating15" type="radio" name="rating3" value="5">
															<label for="rating15">5</label>
															<input id="rating14" type="radio" name="rating3" value="4">
															<label for="rating14">4</label>
															<input id="rating13" type="radio" name="rating3" value="3">
															<label for="rating13">3</label>
															<input id="rating12" type="radio" name="rating3" value="2">
															<label for="rating12">2</label>
															<input id="rating11" type="radio" name="rating3" value="1">
															<label for="rating11">1</label>
														</span>
													</div>
													<!-- comment -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:10px 0px 10px 0px;">
														<h5> Barangya oke punya! thanks seller </h5>
													</div>
												</div>
											</div>
											<!-- row each product that has been ordered-->
											<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-top:10px;">
												<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad">
													<img src="images/items1-3.png" style="width:100%;height:auto;">
												</div>
												<div class="col-xs-9 col-sm-10 col-md-10 col-lg-10 nopad" style="padding-left:10px;">
													<h5> Sweater Black White</h5>
													<h5 style="margin-top:-2px;"> Ukuran : S, Warna : Putih  </h5>
													<!-- ratings -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
														<span class="starRating">
															<input id="rating16" type="radio" name="rating4" value="5">
															<label for="rating16">5</label>
															<input id="rating17" type="radio" name="rating4" value="4">
															<label for="rating17">4</label>
															<input id="rating18" type="radio" name="rating4" value="3">
															<label for="rating18">3</label>
															<input id="rating19" type="radio" name="rating4" value="2">
															<label for="rating19">2</label>
															<input id="rating20" type="radio" name="rating4" value="1">
															<label for="rating20">1</label>
														</span>
													</div>
													<!-- comment -->
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:10px 0px 10px 0px;">
														<h5> Barangya oke punya! thanks seller </h5>
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

		/* filter select option for add new address */
		document.getElementById("addcity").disabled=true;
		document.getElementById("adddistrict").disabled=true;	

		/* filter provinsi */				
		$('#addprov').on('change', function (e) {
			/* ini buat dapetin value yang terpilih di selection*/
			var optionprov = $("option:selected", this);
			var valueprov = this.value;
			console.log(valueprov);
			if(valueprov=="Pilih Provinsi"){
				document.getElementById("addcity").disabled=true;
			}
			else{
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
		var totalperitemxs = qtyxs*hargaxs;
		sumxs = sumxs + totalperitemxs;
	
		
		var tampungxs = 
		"<div class='col-xs-12 nopad' style='margin-bottom:5%;' id='cartitem"+hitungitemxs+"'><div class='col-xs-3 nopad'><img src='images/"+gambarxs+"' style='width:100%;border:1px solid #eeeeee;'></div><div class='col-xs-8 nopad' style='padding-left:5%;'><h5 class='modal-title'>"+namaxs+"</h5><h5 class='modal-title'>Rp "+hargaxs+" x "+qtyxs+"</h5></div><i class='material-icons biru btnclearxs col-xs-1 nopad text-right' style='font-size:1.3em;' id='"+hitungitemxs+"'>clear</i><input type='hidden' id='hargaxs"+hitungitemxs+"' value="+totalperitemxs+"></div>";
		$('#counteritemxs').html(hitungitemxs+" Barang");
		$('#totalitemxs').html("Total : Rp "+sumxs);
		$('#keranjangkuxs').append(tampungxs);
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