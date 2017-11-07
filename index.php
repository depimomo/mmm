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
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index:0;margin:0%;padding:0%;">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="https://dummyimage.com/1366x400/4f134f/ffffff.jpg" alt="Los Angeles">
					</div>

					<div class="item">
						<img src="https://dummyimage.com/1366x400/4f134f/ffffff.jpg" alt="Los Angeles">
					</div>

					<div class="item">
						<img src="https://dummyimage.com/1366x400/4f134f/ffffff.jpg" alt="Los Angeles">
					</div>
				</div>

				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="container-fluid">
			<div class="col-lg-12 text-center" style="padding:1.2%;">
				<h1 class="title"> <span class="biru">Why</span> Must Milenia </h1>
				<div class="divider-biru" style="margin-top:20px;"></div>
			</div>
			<div class="col-lg-12 text-center space-items-1">
				<div class="col-sm-3 col-lg-3 space-low-1">
					<img src="images/icons/ic-main1.svg" style="width:70px;">
					<h4 class="title" style="padding-top:10px;"> Best Quality </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor </p>
				</div>
				<div class="col-sm-3 col-lg-3 space-low-1">
					<img src="images/icons/ic-main2.svg" style="width:70px;">
					<h4 class="title" style="padding-top:10px;"> Change Size Anytime  </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor </p>
				</div>
				<div class="col-sm-3 col-lg-3 space-low-1">
					<img src="images/icons/ic-main3.svg" style="width:105px;">
					<h4 class="title" style="padding-top:10px;"> Same Day Shipping  </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor </p>
				</div>
				<div class="col-sm-3 col-lg-3 space-low-1">
					<img src="images/icons/ic-main4.svg" style="width:70px;">
					<h4 class="title" style="padding-top:10px;"> Fast Response  </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tortor </p>
				</div>
			</div>
		</div>
		
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


		<div class="container-fluid nopad">
			<div class="col-lg-12 nopad">
				<div class="col-sm-5 col-md-5 col-lg-6 grad1 space-items-4">
					<img class="shadow-2 spasi-img-1" src="images/pic3.jpeg" style="width:100%;">
				</div>
				<div class="col-sm-7 col-md-7 col-lg-6 space-items-5">
					<h1 class="title">  Milenia <br>8HARGA</h1>
					<div class="divider-biru divider-biru-left" style="margin-top:5%;margin-bottom:6%;"></div>
					<p style="margin-bottom:2%;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at nibh non arcu lacinia congue. </p>
					<div class="hidden-xs col-sm-12 col-lg-12 nopad text-left" style="padding-top:3%;">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-top:0%;margin-bottom:1%;padding-right:1%;">
							<button class="btn-out-grad" style="width:100%;"> 29.000</button>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 39.000</button>
						</div>	
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 49.000 </button>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 59.000</button>
						</div>	
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-top:0%;margin-bottom:1%;padding-right:1%;">
							<button class="btn-out-grad" style="width:100%;"> 69.000</button>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 79.000</button>
						</div>	
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 89.000 </button>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-3 nopad" style="margin-bottom:1%;padding-right:0.5%;">
							<button class="btn-out-grad" style="width:100%;"> 99.000</button>
						</div>
					</div>	
					<div class="col-xs-12 hidden-sm hidden-md hidden-lg nopad" style="padding:10%;padding-top:5%;">
						<select class="form-control" id="sel1">
							<option>29.000</option>
							<option>39.000</option>
							<option>49.000</option>
							<option>59.000</option>
							<option>69.000</option>
							<option>79.000</option>
							<option>89.000</option>
							<option>99.000</option>
						</select>
					</div>
				</div>
				
			</div>
		</div>


		<!-- section milenia 1-->
		<div class="container-fluid nopad space-out-box">
			<div class="col-sm-12 col-md-12 col-lg-12 space-box">
				<div class="container-fluid nopad bg-box">
					<div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 bgban space-inner-1 grad3" style="margin-right:-40px;">
						<!-- punya 2 judul yang berbeda untuk desktop dan mobile-->
						<h1 class="title putih hidden-xs" style="line-height:45px;"> Milenia <br>Time <br> Sales</h1>
						<h1 class="title putih hidden-sm hidden-md hidden-lg" style="line-height:45px;"> Milenia Time Sales</h1>
						
						<h5 class="putih" style="line-height:20px;margin-top:15px;"> 
							Lorem ipsum dolor sit amet, consecte tur adipiscing.
						</h5>
						<button class="btn-putih" style="margin-top:5%;padding:4% 12% 4% 12%;">See More</button>
					</div>
					<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 nopad space-inner-2" style="padding-top:1.5%;">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
							<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
								<div class="container-fluid">
									<img src="images/items1-2.png" style="width:100%;">
								</div>
								<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
									<h5 class="title title-items" style="" id="items1">Girls Long Pants Branded Grey Flower</h5>
									<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
									<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
										<span class="biru">19:01:00 </span> time left</h5>
									</div>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
								<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
									<div class="container-fluid">
										<img src="images/items1-2.png" style="width:100%;">
									</div>
									<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
										<h5 class="title title-items" style="" id="items2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque metus</h5>
										<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
										<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
											<span class="biru">19:01:00 </span> time left</h5>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm">
									<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
										<div class="container-fluid">
											<img src="images/items1-2.png" style="width:100%;">
										</div>
										<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
											<h5 class="title title-items" style="" id="items3">Tas Ransel Sekolah Jansport Abu Muda / Tas Pria Wanita Trendy Murah</h5>
											<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
											<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
												<span class="biru">19:01:00 </span> time left</h5>
											</div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm hidden-md">
										<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
											<div class="container-fluid">
												<img src="images/items1-2.png" style="width:100%;">
											</div>
											<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
												<h5 class="title title-items" style="" id="items4">Kids  <br> Sweater </h5>
												<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
												<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
													<span class="biru">19:01:00 </span> time left</h5>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>

						<!-- section milenia 2-->
						<div class="container-fluid nopad space-out-box">
							<div class="col-sm-12 col-md-12 col-lg-12 space-box space-low-box">
								<div class="container-fluid nopad bg-box-2">
									<div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 bgban2 space-inner-1 grad4" style="margin-right:-40px;">
										<!-- punya 2 judul yang berbeda untuk desktop dan mobile-->
										<h1 class="title putih hidden-xs" style="line-height:45px;"> Milenia <br>Quantity<br> Sales</h1>
										<h1 class="title putih hidden-sm hidden-md hidden-lg" style="line-height:45px;"> Milenia Quantity Sales</h1>
										
										<h5 class="putih" style="line-height:20px;margin-top:15px;"> 
											Lorem ipsum dolor sit amet, consecte tur adipiscing.
										</h5>
										<button class="btn-putih" style="margin-top:5%;padding:4% 12% 4% 12%;">See More</button>
									</div>
									<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 nopad space-inner-2" style="padding-top:1.5%;">
										<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
											<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
												<div class="container-fluid">
													<img src="images/items1-2.png" style="width:100%;">
												</div>
												<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
													<h5 class="title title-items" style="" id="items5">Girls Long Pants Branded Grey Flower</h5>
													<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
													<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
														<span class="biru">19:01:00 </span> time left</h5>
													</div>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
												<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
													<div class="container-fluid">
														<img src="images/items1-2.png" style="width:100%;">
													</div>
													<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
														<h5 class="title title-items" style="" id="items6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque metus</h5>
														<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
														<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
															<span class="biru">19:01:00 </span> time left</h5>
														</div>
													</div>
												</div>
												<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm">
													<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
														<div class="container-fluid">
															<img src="images/items1-2.png" style="width:100%;">
														</div>
														<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
															<h5 class="title title-items" style="" id="items7">Tas Ransel Sekolah Jansport Abu Muda / Tas Pria Wanita Trendy Murah</h5>
															<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
															<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																<span class="biru">19:01:00 </span> time left</h5>
															</div>
														</div>
													</div>
													<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm hidden-md">
														<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
															<div class="container-fluid">
																<img src="images/items1-2.png" style="width:100%;">
															</div>
															<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
																<h5 class="title title-items" style="" id="items8">Kids  <br> Sweater </h5>
																<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
																<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																	<span class="biru">19:01:00 </span> time left</h5>
																</div>
															</div>
														</div>
													</div>
												</div>	
											</div>
										</div>

										<!-- section milenia 3-->
										<div class="container-fluid nopad space-out-box">
											<div class="col-sm-12 col-md-12 col-lg-12 space-box space-low-box">
												<div class="container-fluid nopad bg-box-3">
													<div class="col-xs-12 col-sm-5 col-md-3 col-lg-3 bgban3 space-inner-1 grad5" style="margin-right:-40px;">
														<!-- punya 2 judul yang berbeda untuk desktop dan mobile-->
														<h1 class="title putih hidden-xs" style="line-height:45px;"> Milenia <br>Clearance<br> Sales</h1>
														<h1 class="title putih hidden-sm hidden-md hidden-lg" style="line-height:45px;"> Milenia Clearance Sales</h1>
														
														<h5 class="putih" style="line-height:20px;margin-top:15px;"> 
															Lorem ipsum dolor sit amet, consecte tur adipiscing.
														</h5>
														<button class="btn-putih" style="margin-top:5%;padding:4% 12% 4% 12%;">See More</button>
													</div>
													<div class="col-xs-12 col-sm-7 col-md-9 col-lg-9 nopad space-inner-2" style="padding-top:1.5%;">
														<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
															<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
																<div class="container-fluid">
																	<img src="images/items1-2.png" style="width:100%;">
																</div>
																<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
																	<h5 class="title title-items" style="" id="items9">Girls Long Pants Branded Grey Flower</h5>
																	<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
																	<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																		<span class="biru">19:01:00 </span> time left</h5>
																	</div>
																</div>
															</div>
															<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
																<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
																	<div class="container-fluid">
																		<img src="images/items1-2.png" style="width:100%;">
																	</div>
																	<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
																		<h5 class="title title-items" style="" id="items10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque metus</h5>
																		<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
																		<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																			<span class="biru">19:01:00 </span> time left</h5>
																		</div>
																	</div>
																</div>
																<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm">
																	<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
																		<div class="container-fluid">
																			<img src="images/items1-2.png" style="width:100%;">
																		</div>
																		<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
																			<h5 class="title title-items" style="" id="items11">Tas Ransel Sekolah Jansport Abu Muda / Tas Pria Wanita Trendy Murah</h5>
																			<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
																			<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																				<span class="biru">19:01:00 </span> time left</h5>
																			</div>
																		</div>
																	</div>
																	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6 hidden-xs hidden-sm hidden-md">
																		<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
																			<div class="container-fluid">
																				<img src="images/items1-2.png" style="width:100%;">
																			</div>
																			<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
																				<h5 class="title title-items" style="" id="items12">Kids  <br> Sweater </h5>
																				<h5 style="padding-top:5%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
																				<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
																					<span class="biru">19:01:00 </span> time left</h5>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>	
															</div>
														</div>





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
														
			/*
			$("#sidebarku").swipeleft(function() {
				$("#navbarku").removeClass("nonebs-nav-xs");
				$("#bgku").fadeOut(300);
				$("#sidebarku").fadeOut(200);
			});*/
			
			
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
					if(nomer[i] > 28){
						//console.log("aa");
						//console.log(text[i].substr(1,32)+"...");
						$("#items"+i).html(text[i].substr(0,28)+"...");
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