<?php
	require 'includes/connect.php';
	require 'includes/logged-in.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Millenia</title>
	<?php include "/templates/styles.html" ?>
</head>

<body>
	<?php include "/templates/navbar.php" ?>
    <?php include "/templates/mobile-search.php" ?>

	<div class="container-fluid nopad space-ban-xs" style="">
		<?php include "/templates/index/carousel.php" ?>
		<?php include "/templates/index/why-millenia.html" ?>

		<div class="container-fluid">
			<div class="col-lg-12">
				<div class="col-sm-6 col-lg-6 space-items-2">
					<h1 class="title"> <span class="biru">Milenia </span><br>Of The Month <br> MOTM</h1>
					<div class="divider-biru divider-biru-left" style="margin-top:6%;margin-bottom:6%;"></div>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at nibh non arcu lacinia congue. </p>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-6 space-items-2-1">
					<img class="shadow-1" src="images/pic3.jpeg" style="width:100%;">
					<div class="btn-top text-center putih grad1"> See Top Item</div>
				</div>
			</div>
		</div>

		<div class="container-fluid grad2 space-items-3">
			<div class="col-lg-12 text-left">
				<h1 class="title putih"> Milenia <br>Seller Center</h1>
				<div class="divider-putih" style="margin-top:3%;margin-bottom:2%;"></div>
				<h5 class="putih" style="line-height:20px;"> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Cras fermentum, odio eget elementum laoreet.
				</h5>
				<button class="btn-putih" style="margin-top:1%;">Be a SELLER</button>
			</div>
		</div>	

		<div class="container-fluid">
			<div class="col-lg-12 text-center" style="padding:4% 10% 5% 10%;">
				<h1 class="title"> Category</h1>
				<div class="divider-biru" style="margin-top:2%;margin-bottom:0%;"></div>
				<div class="col-lg-12" style="padding:3%;padding-top:45px;">
					<div class="col-sm-4 col-lg-4 space-low-1">
						<div class="col-lg-12">
							<img src="images/pic5.jpg" style="width:100%;">
							<h4 style="padding-top:10%;"> Women Collections </h4>	
						</div>
					</div>
					<div class="col-sm-4 col-lg-4 space-low-1">
						<div class="col-lg-12">
							<img src="images/pic5.jpg" style="width:100%;">
							<h4 style="padding-top:10%;"> Men Collections </h4>	
						</div>
					</div>
					<div class="col-sm-4 col-lg-4 space-low-1">
						<div class="col-lg-12">
							<img src="images/pic5.jpg" style="width:100%;">
							<h4 style="padding-top:10%;"> Kids Collections </h4>	
						</div>
					</div>
				</div>
			</div>	
		</div>

		<?php include '/templates/index/8-harga.php'; ?>
		<?php include '/templates/index/time-sale.php'; ?>
		<?php include '/templates/index/qty-sale.php'; ?>
		<?php include '/templates/index/clearance-sale.php'; ?>
										
		<div class="container-fluid grad2 space-items-3" style="margin-top:50px;">
			<div class="col-lg-12 text-left">
				<h1 class="title putih text-center"> Subscribe Newsletter</h1>
				<div class="divider-putih-2" style="margin-top:3%;margin-bottom:2%;"></div>
				<h5 class="putih text-center" style="line-height:20px;"> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit.
				</h5>
				<div class="container-fluid text-center" style="padding:2% 8% 0% 8%;">
					<input type="text" class="form-control bar-text-lg col-lg-12 text-center" id="usr" placeholder="Ketik alamat e-mail disini" 
					style="height:40px;box-shadow:none;">
					<button class="btn-putih" style="margin-top:20px;">Be a SELLER</button>
				</div>
			</div>
		</div>	

		<div class="container-fluid nopad" style="padding:5% 9% 5% 9%;">
			<h3 class="title"> Be a Seller, Grow Together</h3>
			<h5 class="text-left" style="line-height:20px;margin-top:25px"> 
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque metus, ultrices vitae maximus et, blandit at dolor. Ut sed sapien id nisl fringilla mollis eu pulvinar libero. Etiam vel mauris est. In hac habitasse platea dictumst. Praesent placerat, libero non aliquam maximus, sem erat egestas urna, vestibulum sagittis lorem nibh at nunc. Nullam tincidunt nulla quis ante aliquam molestie. Quisque eros massa, gravida ut nulla vitae, varius rutrum enim. Donec tempus nisi nec leo tempor, ac molestie lectus auctor. Nulla laoreet commodo elementum. Nulla libero lorem, vulputate ac varius et, lobortis a nisi.
				<br><br>
				Aenean pretium, lectus eget mollis rhoncus, libero neque condimentum dolor, vel pretium magna eros porta nibh. Sed ac malesuada diam. Proin sit amet neque at leo commodo gravida. Morbi lectus nunc, pharetra id nisi quis, commodo imperdiet ligula. Nunc sed iaculis tortor, in dictum massa. Aenean at metus quam. Nullam vitae interdum nulla. Vivamus sed scelerisque turpis. Nunc dignissim ligula ornare pharetra interdum. Nulla facilisi. Suspendisse efficitur posuere mauris, a rutrum dolor euismod in.
			</h5>
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
		<?php include "/templates/elipsis.js" ?>

		jQuery(document).on('hover mouseover', '.mega-dropdown', function(e) {
			e.stopPropagation()
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
	</script>
</body>
</html>	