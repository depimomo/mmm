<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<?php include "/templates/styles.html" ?>
</head>
<body>
	<?php include "/templates/navbar.php" ?>
	<!-- overlay things goes here -->
	<div class="overlay" id="bgku"></div>

	<!-- overlay overlay search mobile here -->
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
				<div class="container-fluid nopad" style="border-bottom:1px solid #eeeeee;padding-bottom:6px;padding-left:25px;padding-top:5px;">
					<h4> Milenia Points </h4>
				</div>
				
				<div class="container-fluid nopad content-ver2" style="padding-top:10px;">
					<!-- list content -->
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-bottom:1px solid #eeeeee;">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center nopad">
							<h5> Tanggal </h5>
						</div>
						<div class="hidden-xs col-sm-5 col-md-5 col-lg-5 nopad text-center">
							<h5> Keterangan </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Debet </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Kredit </h5>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Saldo Terakhir </h5>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-bottom:1px solid #eeeeee;">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center nopad">
							<h5> 23/02</h5>
						</div>
						<div class="hidden-xs col-sm-5 col-md-5 col-lg-5 nopad text-center">
							<h5> Keterangan </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Rp 100.101.010 </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> - </h5>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5>Rp 100.101.010</h5>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-bottom:1px solid #eeeeee;">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center nopad">
							<h5> 23/02</h5>
						</div>
						<div class="hidden-xs col-sm-5 col-md-5 col-lg-5 nopad text-center">
							<h5> Keterangan </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Rp 100.101.010 </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> - </h5>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5>Rp 100.101.010</h5>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-bottom:1px solid #eeeeee;">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center nopad">
							<h5> 23/02</h5>
						</div>
						<div class="hidden-xs col-sm-5 col-md-5 col-lg-5 nopad text-center">
							<h5> Keterangan </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Rp 100.101.010 </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> - </h5>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5>Rp 100.101.010</h5>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border-bottom:1px solid #eeeeee;">
						<div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-center nopad">
							<h5> 23/02</h5>
						</div>
						<div class="hidden-xs col-sm-5 col-md-5 col-lg-5 nopad text-center">
							<h5> Keterangan </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> Rp 100.101.010 </h5>
						</div>
						<div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5> - </h5>
						</div>
						<div class="col-xs-4 col-sm-2 col-md-2 col-lg-2 nopad text-center">
							<h5>Rp 100.101.010</h5>
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

	<script>
		$(document).ready(function() {   
			
			/* sidebar mobile*/	
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
			
			/* for ellipsis title items */
			/*panjang array dihardcode, cek by panjang string*/
			var nomer=[11];
			var text=[11];
			for (i = 1; i < 13; i++) { 
				//var nomer = $("#items"+i).text().length;
				//var text = $("#items"+i).text();
				nomer[i] = $("#items"+i).text().length;
				text[i] = $("#items"+i).text();
				//console.log(nomer[i]);
				//console.log(text[i]);
				for (j = 1; j < 13; j++) { 
					if(nomer[i] > 36){
						//console.log("aa");
						//console.log(text[i].substr(1,32)+"...");
						$("#items"+i).html(text[i].substr(0,36)+"...");
					}
				}
				
			}
			
		});


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
			if(valuecity=="Pilih Kota")
			{
				document.getElementById("adddistrict").disabled=true;
			}
			else
			{
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