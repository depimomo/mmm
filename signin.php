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

	<div class="container-fluid nopad space-ban-xs" style="">
		<div class="container-fluid nopad">
			<div class="hidden-xs col-sm-6 col-md-6 col-lg-6 nopad grad2" style="height:600px;"></div>
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 nopad" style="padding:4.5% 6% 5% 6%;">
				<h1 class="title" style="font-size:3.7em;"> Sign In </h1>
				<div class="divider-biru" style="margin:0px;margin-top:25px;margin-left:3px;margin-bottom:30px;"></div>
				<h5 style="font-size:1.1em;"> Belum punya akun? Yuk, <span class="biru">Daftar sekarang </span>! </h5>
				<div class="container-fluid nopad space-input-1">
					<div class="input-group col-lg-12">
						<span class="input-group-addon"><i class="fa fa-envelope biru" style="margin-left:-10px;font-size:1.2em;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Silakan masukkan Email Anda">
					</div>
					<div class="input-group col-lg-12" style="margin-top:3%;">
						<span class="input-group-addon"><i class="fa fa-key biru" style="margin-left:-10px;font-size:1.2em;"></i></span>
						<input id="email" type="text" class="form-control input-edit" name="email" placeholder="Password">
					</div>
				</div>
				<div class="container-fluid nopad space-input-1" style="padding-top:15px;">
					<div class="col-xs-6 col-lg-6 nopad" style="padding-top:4px;">
						<label class="checkbox-inline"><input type="checkbox" value="">Ingat Saya</label>
					</div>
					<div class="col-xs-6 col-lg-6 nopad text-right">
						<h5 class="biru" style="text-decoration:underline"> Lupa Password </h5>
					</div>
				</div>
				<div class="container-fluid nopad space-input-1" style="padding-top:10px;">
					<div class="col-lg-12 nopad" style="padding-top:4px;padding-bottom:25px;border-bottom:1px solid #eeeeee">
						<button class="btn-defaults" style="padding:4% 6% 4% 6%;border-radius:3px;width:100%;font-size:1.2em;" id="beli"> Sign In </button>
					</div>
					<div class="col-lg-12 nopad text-center" style="padding-top:6px;">
						<!--<button class="btn-fb" style="padding:3% 6% 3% 6%;border-radius:3px;width:100%;font-size:1.2em;" id="beli"> Masuk </button>-->
						<h5>
							<button class="btn-circle" style="width:35px;height:35px;border-radius:50%;margin-right:10px;background-color:#4267b2;border:1px solid #4267b2;">
								<i class="fa fa-facebook putih" aria-hidden="true"></i>
							</button>
						Sign In via Facebook</h5>
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

		jQuery(document).on('hover mouseover', '.mega-dropdown', function(e) {
			e.stopPropagation()
		})

/*$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});*/



$("#tekan1").on("click", function() {
	console.log("aa");
});	

$("#hilang").on("click", function() {
	$("#hilang").fadeOut();
});

function openov1(){
	$("#bgku2").fadeIn();
}

function closebgku2(){
	$("#bgku2").fadeOut();
}

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