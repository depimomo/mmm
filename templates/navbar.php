<!-- navigation start here -->
<nav class="navbar navbar-static-top" id="navbarku">
	<div class="container-fluid nopad">
		<div class="navbar-header">
			<button
			data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container"
			type="button" class="navbar-toggle pull-left sidebar">
			<i class="fa fa-bars burger fa-lg hidden-md hidden-lg" aria-hidden="true"></i>
		</button>
		<div class="navbar-brand" href="#"> <!--Milenia Logo-->
			<div class="image" style="margin-top:-10%;"></div>​
		</div>
		<div class="hidden-sm hidden-md hidden-lg text-right side-right-menu" style="padding-top:6%;">
			<a href="#"><i class="fa fa-search biru fa-lg side-items" aria-hidden="true" id="cari-xs" onclick="openov1()"></i></a>
			<a href="#" data-toggle="modal" data-target="#myModal">
				<i class="fa fa-shopping-cart biru fa-lg side-items1" aria-hidden="true" style=""></i></a>
			</div>

		</div>
		<form class="navbar-form navbar-left hidden-xs" style="padding-left:6%;">
			<div class="input-group bar-cari">
				<input type="text" class="form-control" placeholder="Search">
				<div class="input-group-btn">
					<button class="btn btn-defaults" type="submit">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</div>
			</div>
		</form>
		<div class="side-collapse in sidebars" id="sidebarku">
			<nav role="navigation" class="navbar-collapse">
				<ul class="nav navbar-nav navbar-right hidden-xs"  style="margin-right:10px;">
				  <!--navigasi sebelum login
				  <li><a href="#">Masuk &nbsp &nbsp </a></li>
				  <li>
					<button class="btn btn-biru" style="margin-top:7px;"> Daftar </button> &nbsp
				</li>	-->
				<?php
				if(isset($SESSION['username'])){//check apakah ada session atau tidak -Tim
					//kalo ada tampilan jadi akun -Tim
					?>
					<!-- Start Akunku -Tim -->
 				<li class="dropdown">
 					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
 						<i class="fa fa-user-circle fa-lg biru" aria-hidden="true" style="font-size:1.6em;"></i>
 						&nbsp &nbsp Username
 						&nbsp &nbsp <span class="caret"></span></a>
 						<ul class="dropdown-menu" style="padding:5% 3% 9% 3%;width:190px;border:none;">
 							<li style="padding:6% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-profile.svg" style="width:15%;">
 								&nbsp &nbsp Akun Saya</a>
 							</li>
 							<li style="padding:5% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-inbox.svg" style="width:14%;">
 								&nbsp &nbsp Kotak Pesan</a>
 							</li>
 							<li style="padding:5% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-history.svg" style="width:14%;">
 								&nbsp &nbsp Histori Belanja</a>
 							</li>
 							<li style="padding:3% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-review.svg" style="width:14%;">
 								&nbsp &nbsp Ulasan</a>
 							</li>
 							<li style="padding:4% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-wishlist.svg" style="width:12.9%;">
 								&nbsp &nbsp Wishlist</a>
 							</li>
 							<li style="padding:3% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-point.svg" style="width:14%;">
 								&nbsp &nbsp Milenia Point</a>
 							</li>
 							<li style="padding:4% 0% 3.5% 0%;">
 								<a href="#"><img src="images/icons/ic-complain.svg" style="width:14%;">
 								&nbsp &nbsp Komplain</a>
 							</li>
 						</ul>
 					</li>
 					<!-- End Akunku -Tim -->
					<?php
				}else{//kalo engga jadi Masuk daftar -Tim
					?>
					<!-- Tambain link ke signin.pgp -Tim -->
					<li><a href="signin.php">Masuk &nbsp &nbsp </a></li>
					<!-- End Tambahin link ke signin.pgp -Tim -->
				 <li>
				 <button class="btn btn-biru" style="margin-top:7px;"> Daftar </button> &nbsp
			 </li>
					<?php
				}
				 ?>

					<li><a href="#" id="cart" data-toggle="collapse" data-target="#demo" class="" aria-expanded="true"><span class="glyphicon glyphicon-shopping-cart biru"></span> &nbsp &nbsp My Cart</a>
						<ul class="dropdown-menu dropdown-cart collapse" role="menu" id="demo" aria-expanded="true" style="">
							<li>
								<a class="text-left" style="padding:5% 6% 5% 6%;border-bottom:1px solid #eeeeee;margin-bottom:10px;" id="counteritem">
								0 Barang</a>
							</li>
							<div class="items-cart" id="keranjangku">
								<!-- diisi dengan item keranjangku-->
							</div>
							<li class="divider"></li>
							<div class="col-lg-12 col-sm-12 nopad" style="padding-top:0%;padding-left:4%;">
								<li style="float:left;"><h5 id="totalitem">Total : Rp 0</h5></li>
							</div>
							<div class="col-lg-12 nopad">
								<div class="col-lg-6 col-sm-6 nopad" style="padding:2% 2% 5% 4%;">
									<button class="btn-out-default" style="padding:9%;border-radius:3px;width:100%;font-size:0.9em;"> Lihat Pesanan</button>
								</div>
								<div class="col-lg-6 col-sm-6 nopad" style="padding:2% 3% 5% 4%;">
									<button class="btn-defaults" style="padding:8%;border-radius:3px;width:100%;"> Bayar</button>
								</div>
							</div>
						</ul>
					</li>
				</ul>
				<div class="col-lg-12 hidden-sm nopad space-nav-lg" style="">
					<ul class="nav navbar-nav navbar-left" id="menu">
			<a class="hidden-sm hidden-md hidden-lg" style="display:inline;font-size:1.2em;padding-left:15px;"> Menu</a>
			<a class="hidden-sm hidden-md hidden-lg" href="javascript:void(0)" id="tutup"
			style="font-size:30px;position:relative;top:2px;left:64%;display:inline;">
		&times;</a>
		<div class="hidden-sm hidden-md hidden-lg col-xs-12 nopad" style="border-top:1px solid #eeeeee;margin-top:10px;"></div>
		<li class="hidden-sm hidden-md hidden-lg" style="padding-top:7%;"><a href="#">Beranda</a></li>
		<li class="dropdown mega-dropdown">
			<a href="#" class="dropdown-toggle drop" data-toggle="dropdown">Pakaian Pria &nbsp &nbsp &nbsp
				<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true"></i>
			</a>
			<ul class="dropdown-menu mega-dropdown-menu row megamenuku" id="menu1">
				<li class="col-sm-4 nopad">
					<ul>
						<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Atasan</a></li>
						<li><a href="#">Kemeja</a></li>
						<li><a href="#">Kaos T-shirt</a></li>
						<li><a href="#">Kaos Tanpa Lengan</a></li>
						<li><a href="#" style="text-decoration:underline;">Lihat Semua Atasan</a></li>
					</ul>
				</li>
				<li class="col-sm-4 nopad">
					<ul>
						<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Bawahan</a></li>
						<li><a href="#">Celana Pendek</a></li>
						<li><a href="#">Celana Panjang</a></li>
						<li><a href="#">Jeans</a></li>
						<li><a href="#" style="text-decoration:underline;">Lihat Semua Bawahan</a></li>
					</ul>
				</li>
				<li class="col-sm-4 nopad">
					<ul>
						<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Outwear</a></li>
						<li><a href="#">Cardigan</a></li>
						<li><a href="#">Jaket</a></li>
						<li><a href="#">Sweater</a></li>
						<li><a href="#" style="text-decoration:underline;">Lihat Semua Outwear</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="dropdown mega-dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pakaian Wanita &nbsp &nbsp &nbsp
				<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true"></i></a>
				<ul class="dropdown-menu mega-dropdown-menu col-sm-12 megamenuku" id="menu2">
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Dress</a></li>
							<li><a href="#">Santai</a></li>
							<li><a href="#">Cocktail</a></li>
							<li><a href="#">Bodycon</a></li>
							<li><a href="#">Jumpsuit</a></li>
							<li><a href="#" style="text-decoration:underline;">Lihat Semua Dress</a></li>
						</ul>
					</li>
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Atasan</a></li>
							<li><a href="#">Kemeja</a></li>
							<li><a href="#">Blouse</a></li>
							<li><a href="#">Kaos T-shirt</a></li>
							<li><a href="#">Tank Top</a></li>
							<li><a href="#" style="text-decoration:underline;">Lihat Semua Atasan</a></li>
						</ul>
					</li>
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Bawahan</a></li>
							<li><a href="#">Celana Pendek</a></li>
							<li><a href="#">Rok</a></li>
							<li><a href="#">Celana Panjang</a></li>
							<li><a href="#">Jeans</a></li>
							<li><a href="#">Leggings</a></li>
							<li><a href="#" style="text-decoration:underline;">Lihat Semua Bawahan</a></li>
						</ul>
					</li>
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Outerwear</a></li>
							<li><a href="#">Cardigan</a></li>
							<li><a href="#">Blazer</a></li>
							<li><a href="#">Jaket</a></li>
							<li><a href="#">Sweater</a></li>
							<li><a href="#" style="text-decoration:underline;">Lihat Semua Outerwear</a></li>
						</ul>
					</li>
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Pakaian Dalam</a></li>
							<li><a href="#">Baju Tidur</a></li>
						</ul>
					</li>
					<li class="col-sm-2 nopad">
						<ul>
							<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Aksesoris</a></li>
							<li><a href="#">Aksesoris Wanita</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pakaian Anak &nbsp &nbsp &nbsp
					<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true"></i></a>
					<ul class="dropdown-menu mega-dropdown-menu col-sm-12 megamenuku" id="menu3">
						<li class="col-sm-2 nopad space-lg-r1" style="">
							<ul>
								<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Junior Boys</a></li>
								<li><a href="#">Kaos T-shirt</a></li>
								<li><a href="#">Kemeja</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Celana Pendek</a></li>
								<li><a href="#">Piyama</a></li>
								<li><a href="#">Hoodie, Sweater & Outwear</a></li>
								<li><a href="#">Rompers</a></li>
								<li><a href="#">Pakaian Set</a></li>
								<li><a href="#" style="text-decoration:underline;">Lihat Semua Junior Boys</a></li>
							</ul>
						</li>
						<li class="col-sm-2 nopad space-lg-r1">
							<ul>
								<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Junior Girls</a></li>
								<li><a href="#">Dress</a></li>
								<li><a href="#">Kaos T-shirt</a></li>
								<li><a href="#">Leggings</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Celana Pendek & Rok</a></li>
								<li><a href="#">Piyama</a></li>
								<li><a href="#">Hoodie, Sweater & Outwear</a></li>
								<li><a href="#">Rompers</a></li>
								<li><a href="#">Pakaian Set</a></li>
								<li><a href="#" style="text-decoration:underline;">Lihat Semua Junior Girls</a></li>
							</ul>
						</li>
						<li class="col-sm-2 nopad space-lg-r1">
							<ul>
								<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Toddler Boys</a></li>
								<li><a href="#">Kaos T-shirt</a></li>
								<li><a href="#">Kemeja</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Celana Pendek</a></li>
								<li><a href="#">Piyama</a></li>
								<li><a href="#">Hoodie, Sweater & Outwear</a></li>
								<li><a href="#">Rompers</a></li>
								<li><a href="#">Pakaian Set</a></li>
								<li><a href="#" style="text-decoration:underline;">Lihat Semua Toddler Boys</a></li>
							</ul>
						</li>
						<li class="col-sm-2 nopad space-lg-r1">
							<ul>
								<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Toddler Girls</a></li>
								<li><a href="#">Dress</a></li>
								<li><a href="#">Kaos T-shirt</a></li>
								<li><a href="#">Leggings</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Celana Pendek & Rok</a></li>
								<li><a href="#">Piyama</a></li>
								<li><a href="#">Hoodie, Sweater & Outwear</a></li>
								<li><a href="#">Rompers</a></li>
								<li><a href="#">Pakaian Set</a></li>
								<li><a href="#" style="text-decoration:underline;">Lihat Semua Toddler Girls</a></li>
							</ul>
						</li>
						<li class="col-sm-2 nopad space-lg-r1">
							<ul>
								<li><a href="#" style="font-size:1.3em;color:#424242;margin-bottom:10px;">Baby</a></li>
								<li><a href="#">Jumper</a></li>
								<li><a href="#">Piyama & Pakaian Set</a></li>
								<li><a href="#">Dress</a></li>
								<li><a href="#">Kaos T-shirt</a></li>
								<li><a href="#">Leggings</a></li>
								<li><a href="#">Jeans & Trousers</a></li>
								<li><a href="#">Celana Pendek</a></li>
								<li><a href="#">Hoodie, Sweater & Outwear</a></li>
								<li><a href="#" style="text-decoration:underline;">Lihat Semua Baby</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right space-nav-xs" style="margin-right:-15px;">
				<div class="hidden-sm hidden-md hidden-lg container-fluid" style="border-top:1px solid #eeeeee;padding-top:8%;">
					<li class="dropdown">
						<div  class="dropdown-toggle" data-toggle="dropdown">
							<a href="#"> Username
								<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:5px;"></i></a>
							</div>
							<ul class="dropdown-menu" style="padding:2%;border:none;margin-left:-13%;">
								<li style="padding:2% 0% 2% 0%;">
									<a href="#"><img src="images/icons/ic-profile.svg" style="width:12%;">
									&nbsp &nbsp Akun Saya</a>
								</li>
								<li style="padding:2% 0% 2% 0%;">
									<a href="#"><img src="images/icons/ic-inbox.svg" style="width:11%;">
									&nbsp &nbsp Kotak Pesan</a>
								</li>
								<li style="padding:5% 0% 3.5% 0%;">
									<a href="#"><img src="images/icons/ic-history.svg" style="width:11%;">
									&nbsp &nbsp Histori Belanja</a>
								</li>
								<li style="padding:3% 0% 3.5% 0%;">
									<a href="#"><img src="images/icons/ic-review.svg" style="width:11%;">
									&nbsp &nbsp Ulasan</a>
								</li>
								<li style="padding:4% 0% 3.5% 0%;">
									<a href="#"><img src="images/icons/ic-wishlist.svg" style="width:9.5%;">
									&nbsp &nbsp Wishlist</a>
								</li>
								<li style="padding:3% 0% 3.5% 0%;">
									<a href="#"><img src="images/icons/ic-point.svg" style="width:11%;">
									&nbsp &nbsp Milenia Point</a>
								</li>
								<li style="padding:4% 0% 3.5% 0%;">
									<a href="#"><img src="images/icons/ic-complain.svg" style="width:11%;">
									&nbsp &nbsp Komplain</a>
								</li>
							</ul>
						</li>
					</div>
					<li><a href="#">Lacak Pesanan</a></li>
					<li><a href="#">Konfirmasi Pembayaran</a></li>
					<li class="hidden-sm hidden-md hidden-lg"><a href="#">Keluar</a></li>
					<li><a href="#" class="biru">Be a SELLER </a></li>
				</ul>
			</nav>
		</div>
	</div>
</nav>
<!-- navigation end here-->
