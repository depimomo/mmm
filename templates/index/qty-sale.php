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
				<?php
					for ($i = 0; $i < 4; $i++) { 
						?>
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
						<?php
					}
				?>
			</div>
		</div>	
	</div>
</div>