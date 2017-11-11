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
				<?php
            $querysel = "select a.product_name as pname, a.product_price as pprice, a.product_promo_price as proprice, a.product_time_day as tds, b.picture_color_url as img, a.product_time_hour as ths, a.product_time_day_end as tde, a.product_time_hour as the from mi_product a, mi_view_product b where a.product_clearance_active = 1 and a.product_code = b.product_code order by RAND() limit 4 ";
            $result = $conn->query($querysel);
            while ($row = $result->fetch_assoc()) {
                $date = new DateTime($row['tde']." ".$row['the']);
                $datenow = new DateTime();
                $diff = $datenow->diff($date); ?>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6">
							<div class="col-sm-12 col-lg-12 nopad bgputih card-sale">
								<div class="container-fluid">
									<img src="<?php echo $row['img'] ?>" class="img-sale">
								</div>
								<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #E0E0E0;">
									<h5 class="title title-items" style="" id="items1"><?php echo $row['pname'] ?></h5>
									<h5 style="padding-top:5%;"> IDR <span class="money"><?php echo $row['proprice'] ?></span> <span class="kecil" style="padding-left:2%;"> Rp <span class="money"><?php echo $row['pprice'] ?></span></span> </h5>
									<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i>
										<span class="biru"><?php echo $diff->format('%d Days %h:%i:%s') ?> </span> time left</h5>
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
