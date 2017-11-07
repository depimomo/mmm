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
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad">
		<div class="container nopad">
			<div class="row bs-wizard" style="border-bottom:0;">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum" style="color:white">Langkah 1</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="hidden-xs bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:1%;">Informasi Pengiriman</div>
					<div class="hidden-sm hidden-md hidden-lg bs-wizard-info text-center" style="color:#424242;font-size:1em;padding-top:3%;">
					Langkah 1</div>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bs-wizard-step active"><!-- complete -->
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
			<h2 class="text-left title" style=""> Metode Pembayaran</h2>
		</div>
		<div class="container-fluid space-ship-2" style="">
			<!-- container barang cart -->
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 nopad space-ship-3" style="">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:0px;">
					<label for="usr">Nama Penerima</label>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 nopad form-field form-field-lg" style="padding-top:1.5%;">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 form-field-lg-3" style="">
							
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border:1px solid #3FC0D6;padding:1.5% 3% 1.5% 3%;border-radius:3px;margin-bottom:5px;">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopad">
									<div class="radio">
										<label><input type="radio" name="optradio">Transfer Bank</label>
									</div>
								</div>
								<div class="hidden-xs col-sm-8 col-md-8 col-lg-8 nopad text-right" style="padding-top:2%">
									<div class="col-lg-2 nopad" style="float:right;">
										<img src="images/logos/bca.png" style="width:100%;height:auto;">
									</div>	
								</div>	
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="border:1px solid #eeeeee;padding:1.5% 3% 1.5% 3%;border-radius:3px;">
								<div class="ccol-xs-12 col-sm-4 col-md-4 ol-lg-4 nopad">
									<div class="radio">
										<label><input type="radio" name="optradio">Kartu Kredit</label>
									</div>
								</div>
								<div class="hidden-xs col-sm-8 col-md-8 col-lg-8 nopad text-right" style="padding-top:2%">
									<div class="col-lg-2 nopad" style="float:right;">
										<img src="images/logos/bca.png" style="width:100%;height:auto;">
									</div>	
								</div>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:2% 0% 2% 0%;">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
							<label for="usr">Nomor Kartu Kredit</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
							<label for="usr">Nama Pemilik Kartu Kredit</label>
							<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Nama Penerima">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<label for="usr">Tanggal Kadaluarsa</label>
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
							
							<div class="col-lg-6 nopad" style="padding-right:2%;">
								<input id="email" type="text" class="form-control input-edit" name="email" style="border-radius:3px;"
								placeholder="MM">
							</div>	
							<div class="col-lg-6 nopad">
								<input id="email" type="text" class="form-control input-edit" name="email" style="border-radius:3px;"
								placeholder="YY">
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad form-field">
						<div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12 field-text nopad" style="padding-right:10px;">
							<label for="usr">CCV / CVV</label>
							<input id="email" type="text" class="form-control input-edit" name="email" 
							placeholder="Masukkan 3 digit terakhir nomer kartu kredit">
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
							<h5 style="font-size:1em"> Biaya Pengiriman</h5>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 nopad text-right" style="padding-top:1%;">
							<h5 style="font-size:1em"> Rp 5000</h5>
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
					
				<!--
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding:0% 0% 6% 0%;">
					<button class="btn-defaults" style="padding:6% 5% 6% 5%;border-radius:3px;width:100%;margin-bottom:2.5%;" id="buyitem">
					Lanjut ke Pembayaran </button>
					<button class="btn-out-default" style="padding:6% 5% 6% 5%;border-radius:3px;width:100%;" id="buyitem"> 
					Lanjut Belanja
					</button>
				</div>-->
			</div>	
		</div>
		<!--opsi 2
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 nopad" style="padding-left:3.5%;">
			<div class="container-fluid nopad" style="padding:0%;">
			<h3 style="font-size:1.25em;margin:0px"> Rincian Pesanan</h3>
			<div class="container-fluid nopad" style="padding-top:3%;">
				<div class="col-lg-12 nopad" style="border-top:1px solid #eeeeee;margin-top:2%;">
					<div class="col-lg-8 nopad" style="padding-top:3%;">
						<h5 style="font-size:1em;"> Subtotal</h5>
					</div>
					<div class="col-lg-4 nopad text-right" style="padding-top:3%;">
						<h5 style="font-size:1em;"> Rp 30.000</h5>
					</div>	
				</div>
				<div class="col-lg-12 nopad" style="">
					<div class="col-lg-8 nopad" style="padding-top:1%;">
						<h5 style="font-size:1em;"> Diskon</h5>
					</div>
					<div class="col-lg-4 nopad text-right" style="padding-top:1%;">
						<h5 class="biru" style="font-size:1em;"> -Rp 100</h5>
					</div>	
				</div>
				<div class="col-lg-12 nopad" style="border-top:1px solid #eeeeee;margin-top:2%;">
					<div class="col-lg-8 nopad" style="padding-top:3%;">
						<h5 style="font-size:1.15em"> Total</h5>
					</div>
					<div class="col-lg-4 nopad text-right" style="padding-top:3%;">
						<h5 style="font-size:1.15em"> Rp 29.900</h5>
					</div>	
				</div>
				<div class="col-lg-12 nopad" style="padding:6% 0% 6% 0%;">
					<button class="btn-defaults" style="padding:5%;border-radius:3px;width:100%;margin-bottom:2.5%;" id="buyitem">
					Lanjut ke Pembayaran </button>
					<button class="btn-out-default" style="padding:5%;border-radius:3px;width:100%;" id="buyitem"> 
					Lanjut Belanja
					</button>
				</div>
			</div>
			</div>
		</div>-->
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


/*gakepake
sidebar
//document.getElementById("bgku").style.display = "block";
//document.getElementById("sidebarku").style.width = "250";
//document.getElementById("bgku").style.display = "none";
//document.getElementById("sidebarku").style.width = "0";
//$(sel2).toggleClass('out');
document.getElementById("sidebarku").style.display = "block";
$("#sidebarku").animate({opacity: '1'}, "fast");						

$(".mega-dropdown").hover(function(e){
    e.stopPropagation()
});

*/



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