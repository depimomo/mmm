<!DOCTYPE html>
<html lang="en">
<head>
	<title>Millenia</title>
	<?php include "/templates/styles.html" ?>
</head>

<body>
	<?php include "/templates/navbar.php" ?>
    <?php include "/templates/mobile-search.php" ?>

	<div class="col-xs-12 overlay-sort" id="sortku" style="padding:30% 8% 15% 9%;">
		<a href="javascript:void(0)" class="closebtn" onclick="closesort()" style="color:black;">&times;</a>
		<div class="container-fluid nopad" style="padding-bottom:3%;">
			<h5 style="font-size:1.25em;"> Urutkan Berdasarkan</h5>
		</div>
		<div class="container-fluid nopad" style="padding-top:6%;">
			<p style="padding-bottom:1%;">
				<input type="radio" id="test1" name="radio-group" checked>
				<label for="test1">Produk Terbaru</label>
			</p>
			<p style="padding-bottom:1%;">
				<input type="radio" id="test2" name="radio-group">
				<label for="test2">Rating Tertinggi</label>
			</p>
			<p style="padding-bottom:1%;">
				<input type="radio" id="test3" name="radio-group">
				<label for="test3">Harga Termurah</label>
			</p>
			<p style="padding-bottom:1%;">
				<input type="radio" id="test4" name="radio-group">
				<label for="test4">Harga Tertinggi</label>
			</p>
			<p style="padding-bottom:1%;">
				<input type="radio" id="test5" name="radio-group">
				<label for="test5">Diskon Tertinggi</label>
			</p>
		</div>
		<div class="container-fluid nopad" style="padding-top:3%;">
			<button class="btn-defaults" style="padding:5%;border-radius:3px;width:100%;font-size:1.2em;" id="ayosortir" onclick="closesort()"> 
				<i class="fa fa-sort-amount-desc" aria-hidden="true" style="padding-right:3%;"></i>
			Urutkan</button>
		</div>
	</div>

	<div class="col-xs-12 overlay-filter" id="filterku" style="padding:8% 8% 15% 10%;">
		<a href="javascript:void(0)" class="closebtn" onclick="closefilter()">&times;</a>
		<div class="container-fluid nopad" style="padding-bottom:3%;">
			<h5 style="font-size:1.3em;"> Filter Produk </h5>
		</div>
		<div class="container-fluid nopad" style="padding-top:1%;">
			<!-- filter kategori start here-->
			<div class="col-sm-12 col-md-12  col-lg-12 nopad" style="padding:5% 0% 5% 0%;">
				<div class="col-sm-12 col-md-12 col-lg-12 nopad">
					<h5 style="font-size:1.2em;"> Kategori </h5>
				</div>
				<div class="panel-group" id="accordionm" style="padding:0%;padding-bottom:3%;">
					<div class="panel panel-default">
						<div class="panel-heading nopad" style="padding-bottom:0px;">
							<a data-toggle="collapse" href="#collapseppm" style="font-size:1.1em;"><b>Pakaian Pria</b>
							</a>
						</div>
						<div id="collapseppm" class="panel-collapse collapse nopad">
							<div class="panel-body">
								<div class="panel-group nopad" id="accordionm2" style="margin-top:10%;">
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="priam1" name="checkbox-group">
											<label for="priam1">Atasan</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm2" data-toggle="collapse" href="#collapsesppm"aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsesppm" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam2" name="checkbox-group">
													<label class="sublabel" for="priam2">Kemeja</label>
												</p>	
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam3" name="checkbox-group">
													<label for="priam3">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam4" name="checkbox-group">
													<label for="priam4">Kaos Tanpa Lengan</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad" style="">
										<div class="nopad">
											<input type="checkbox" id="priam5" name="checkbox-group">
											<label for="priam5">Bawahan</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm2" data-toggle="collapse" 
											href="#collapsesppm2" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsesppm2" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam6" name="checkbox-group">
													<label class="sublabel" for="priam6">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam7" name="checkbox-group">
													<label for="priam7">Celana Panjang</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam8" name="checkbox-group">
													<label for="priam8">Jeans</label>
												</p>
											</div>
										</div>
									</div>
									
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="priam9" name="checkbox-group">
											<label for="priam9">Outwear</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm2" data-toggle="collapse" 
											href="#collapsesppm3" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsesppm3" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam10" name="checkbox-group">
													<label class="sublabel" for="priam10">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam11" name="checkbox-group">
													<label for="priam11">Celana Panjang</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="priam12" name="checkbox-group">
													<label for="priam12">Jeans</label>
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					<!--punya wanita-->
					<div class="panel panel-default nopad" style="padding-bottom:0px;">
						<div class="panel-heading nopad" style="padding-bottom:0px;">
							<a data-toggle="collapse" href="#collapsepwm" style="font-size:1.1em;">Pakaian Wanita
							</a>
						</div>
						
						<div id="collapsepwm" class="panel-collapse collapse nopad">
							<div class="panel-body" style="margin-top:3%;">
								<div class="panel-group nopad" id="accordionm3" style="margin-top:3%;">
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam1" name="checkbox-group">
											<label for="wanitam1">Dress</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm3" data-toggle="collapse" href="#collapsespwm"aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespwm" class="panel-collapse collapse nopad">
											<div class="panel-body nopad">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam2" name="checkbox-group">
													<label class="sublabel" for="wanitam2">Santai</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam3" name="checkbox-group">
													<label for="wanitam3">Cocktail</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam4" name="checkbox-group">
													<label for="wanitam4">Bodycon</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam5" name="checkbox-group">
													<label for="wanitam5">Jumpsuit</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam6" name="checkbox-group">
											<label for="wanitam6">Atasan</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm3" data-toggle="collapse" 
											href="#collapsespwm2" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespwm2" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam7" name="checkbox-group">
													<label class="sublabel" for="wanitam7">Kemeja</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam8" name="checkbox-group">
													<label for="wanitam8">Blouse</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam9" name="checkbox-group">
													<label for="wanitam9">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam10" name="checkbox-group">
													<label for="wanitam10">Tank Top</label>
												</p>
											</div>
										</div>
									</div>
									
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam11" name="checkbox-group">
											<label for="wanitam11">Bawahan</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm3" data-toggle="collapse" 
											href="#collapsespwm3" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespwm3" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam12" name="checkbox-group">
													<label class="sublabel" for="wanitam12">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam13" name="checkbox-group">
													<label for="wanitam13">Rok</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam14" name="checkbox-group">
													<label for="wanitam14">Celana Panjang</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam15" name="checkbox-group">
													<label for="wanitam15">Jeans</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam16" name="checkbox-group">
													<label for="wanitam16">Leggings</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam17" name="checkbox-group">
											<label for="wanitam17">Outerwear</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm3" data-toggle="collapse" 
											href="#collapsespwm4" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespwm4" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam18" name="checkbox-group">
													<label class="sublabel" for="wanitam18">Cardigan</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam19" name="checkbox-group">
													<label for="wanitam19">Blazer</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam20" name="checkbox-group">
													<label for="wanitam20">Jaket</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam21" name="checkbox-group">
													<label for="wanitam21">Sweater</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam22" name="checkbox-group">
											<label for="wanitam22">Pakaian Dalam</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm3" data-toggle="collapse" 
											href="#collapsespwm5" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespwm5" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="wanitam23" name="checkbox-group">
													<label class="sublabel" for="wanitam23">Baju Tidur</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="wanitam24" name="checkbox-group">
											<label for="wanitam24">Aksesoris</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					
					<!-- punya Anak-->
					
					<div class="panel panel-default nopad" style="padding-bottom:0px;">
						<div class="panel-heading" style="padding-bottom:0px;">
							<a data-toggle="collapse" href="#collapsepam" style="font-size:1.1em;"><b>Pakaian Anak</b>
							</a>
						</div>
						
						<div id="collapsepam" class="panel-collapse collapse nopad">
							<div class="panel-body" style="padding-top:8%;">
								<div class="panel-group nopad" id="accordionm4" style="padding-top:5%;">
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="anakm1" name="checkbox-group">
											<label for="anakm1">Junior Boys</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm4" data-toggle="collapse" href="#collapsespam"aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespam" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm2" name="checkbox-group">
													<label class="sublabel" for="anakm2">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm3" name="checkbox-group">
													<label for="anakm3">Kemeja</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm4" name="checkbox-group">
													<label for="anakm4">Jeans & Trousers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm5" name="checkbox-group">
													<label for="anakm5">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm6" name="checkbox-group">
													<label class="sublabel" for="anakm6">Piyama</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm7" name="checkbox-group">
													<label for="anakm7">Hoodie, Sweater & Outwear</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm8" name="checkbox-group">
													<label for="anakm8">Rompers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm9" name="checkbox-group">
													<label for="anakm9">Pakaian Set</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="anakm10" name="checkbox-group">
											<label for="anakm10">Junior Girls</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm4" data-toggle="collapse" 
											href="#collapsespam2" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespam2" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm11" name="checkbox-group">
													<label class="sublabel" for="anakm11">Dress</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm12" name="checkbox-group">
													<label for="anakm12">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm13" name="checkbox-group">
													<label for="anakm13">Leggings</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm14" name="checkbox-group">
													<label for="anakm14">Jeans & Trousers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm15" name="checkbox-group">
													<label class="sublabel" for="anakm15">Celana Pendek & Rok</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm16" name="checkbox-group">
													<label for="anakm16">Piyama</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm17" name="checkbox-group">
													<label for="anakm17">Hoodie, Sweater & Outwear</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm18" name="checkbox-group">
													<label for="anakm18">Rompers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm19" name="checkbox-group">
													<label for="anakm19">Pakaian Set</label>
												</p>
											</div>
										</div>
									</div>
									
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="anakm20" name="checkbox-group">
											<label for="anakm20">Toddler Boys</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm4" data-toggle="collapse" 
											href="#collapsespam3" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespam3" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm21" name="checkbox-group">
													<label class="sublabel" for="anakm21">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm22" name="checkbox-group">
													<label for="anakm22">Kemeja</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm23" name="checkbox-group">
													<label for="anakm23">Jeans & Trousers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm24" name="checkbox-group">
													<label for="anakm24">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm25" name="checkbox-group">
													<label class="sublabel" for="anakm25">Piyama</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm26" name="checkbox-group">
													<label for="anakm26">Hoodie, Sweater & Outwear</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm27" name="checkbox-group">
													<label for="anakm27">Rompers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm28" name="checkbox-group">
													<label for="anakm28">Pakaian Set</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="anakm29" name="checkbox-group">
											<label for="anakm29">Toddler Girls</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm4" data-toggle="collapse" 
											href="#collapsespam4" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespam4" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm30" name="checkbox-group">
													<label class="sublabel" for="anakm30">Dress</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm31" name="checkbox-group">
													<label for="anakm31">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm32" name="checkbox-group">
													<label for="anakm32">Leggings</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm33" name="checkbox-group">
													<label for="anakm33">Jeans & Trousers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm34" name="checkbox-group">
													<label class="sublabel" for="anakm34">Celana Pendek & Rok</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm35" name="checkbox-group">
													<label for="anakm35">Piyama</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm36" name="checkbox-group">
													<label for="anakm36">Hoodie, Sweater & Outwear</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm37" name="checkbox-group">
													<label for="anakm37">Rompers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm38" name="checkbox-group">
													<label for="anakm38">Pakaian Set</label>
												</p>
											</div>
										</div>
									</div>
									
									<div class="panel panel-default nopad">
										<div class="nopad">
											<input type="checkbox" id="anakm39" name="checkbox-group">
											<label for="anakm39">Baby</label>
											<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordionm4" data-toggle="collapse" 
											href="#collapsespam5" aria-hidden="true" style="margin-top:2px;"></i>
										</div>
										<div id="collapsespam5" class="panel-collapse collapse nopad">
											<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm40" name="checkbox-group">
													<label class="sublabel" for="anakm40">Jumper</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm41" name="checkbox-group">
													<label for="anakm41">Piyama & Pakaian Set</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm42" name="checkbox-group">
													<label for="anakm42">Dress</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm43" name="checkbox-group">
													<label for="anakm43">Kaos T-shirt</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm44" name="checkbox-group">
													<label class="sublabel" for="anakm44">Leggings</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm45" name="checkbox-group">
													<label for="anakm45">Jeans & Trousers</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm46" name="checkbox-group">
													<label for="anakm46">Celana Pendek</label>
												</p>
												<p style="padding-bottom:1%;">
													<input type="checkbox" id="anakm47" name="checkbox-group">
													<label for="anakm47">Hoodie, Sweater & Outwear</label>
												</p>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- filter kategori end here-->

			<div class="container-fluid nopad" style="border-top:1px solid #e0e0e0;padding:4% 0% 8% 0%;border-bottom:1px solid #e0e0e0">
				<h5 style="font-size:1.2em;">
					Ukuran Pakaian
				</h5>
				<div class="col-xs-12 nopad">
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
					<div class="col-xs-2 nopad" style="padding-right:1%;">
						<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
							<h5> XS </h5>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="col-sm-12 col-md-12 panel-group" style="padding:5% 0% 3% 0%;border-bottom:1px solid #e0e0e0;">
				<div class="panel panel-default">
					<div class="panel-heading nopad">
						<a data-toggle="collapse" href="#harga" style="font-size:1.2em;">Rentang Harga
							<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
						</a>
					</div>
					<div id="harga" class="panel-collapse collapse" style="padding-top:6%;">
						<div class="panel-body">
							<div class="radio">
								<label><input type="radio" name="optradio">Rp 29.000 - 38.000</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="optradio">Option 1</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-md-12 panel-group" style="padding:5% 0% 3% 0%;border-bottom:1px solid #e0e0e0;">
				<div class="panel panel-default">
					<div class="panel-heading nopad">
						<a data-toggle="collapse" href="#warnam" style="font-size:1.2em;">Warna Pakaian
							<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
						</a>
					</div>
					<div id="warnam" class="panel-collapse collapse" style="margin-top:5%;">
						<div class="panel-body">
							<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-top:5%;overflow-y:scroll;height:150px;">
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
								<p>
									<input type="checkbox" id="warna1" name="checkbox-group">
									<label class="sublabel" for="warna1">Merah</label>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		<div class="container-fluid nopad" style="padding-top:7%;">
			<button class="btn-defaults" style="padding:5%;border-radius:3px;width:100%;font-size:1.2em;" id="ayofilter" onclick="closefilter()"> 
				<i class="fa fa-sort-amount-desc" aria-hidden="true" style="padding-right:3%;"></i>
			Filter</button>
		</div>
	</div>


	<div class="container-fluid nopad space-ban-xs bg-ver2">
		<div class="container-fluid nopad space-display">
			<div class="col-sm-12 col-md-12 col-lg-12 nopad">
			<?php include '/templates/search/searchbox.php'; ?>
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 nopad" style="margin-bottom:10%;">
				<div class="container-fluid nopad" style="padding:0% 0% 5% 5%;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:2%;padding-right:2%;border-bottom:1px solid #e0e0e0;margin-bottom:3.5%;">
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 nopad">
							<h4 style="font-size:1.15em;"> 342 Hasil </h4>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 nopad hidden-xs" style="padding-top:0%;">
							<div class="col-xs-3 col-lg-3 nopad text-left" style="">
								<h5>Urutkan</h5>
							</div>
							<div class="col-xs-9 col-lg-9 nopad">
								<select class="form-control" id="sel1">
									<option>Produk Terbaru</option>
									<option>Nama Produk</option>
									<option>Harga Termurah</option>
									<option>Harga Tertinggi</option>
								</select>
							</div>
						</div>	
					</div>
					
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
			<div class="container-fluid box-filter nopad hidden-sm hidden-md hidden-lg" style="padding:3%;background-color:#F5F5F5;">
				<div class="col-xs-6 nopad" style="padding-right:2%;">
					<div class="container-fluid nopad">
						<button class="btn-putih" style="padding:6%;border-radius:3px;width:100%;box-shadow:none;border:1px solid #e0e0e0" id="urutkan" onclick="showsort()"> 
							Urutkan 
						</button>
					</div>
				</div>
				<div class="col-xs-6 nopad">
					<div class="container-fluid nopad">
						<button class="btn-defaults" style="padding:6%;border-radius:3px;width:100%;box-shadow:none;" id="filterkan" onclick="showfilter()"> 
							Filter
						</button>
					</div>
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
	})

	function showsort(){
		$('#sortku').show().addClass('animated slideInLeft');
	}

	function closesort(){
		$('#sortku').fadeOut();
	}

	function showfilter(){
		$('#filterku').show().addClass('animated slideInRight');
	}

	function closefilter(){
		$('#filterku').fadeOut();
	}


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
</script>

</body>
</html>	