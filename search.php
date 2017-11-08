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
							<a data-toggle="collapse" href="#collapseppm" style="font-size:1.1em;">Pakaian Pria
								<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
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
								<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
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
							<a data-toggle="collapse" href="#collapsepam" style="font-size:1.1em;">Pakaian Anak
								<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
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
				<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 nopad box-ver2" style="background-color:white">
					<div class="container-fluid nopad" style="padding:5% 10% 10% 10%;">
						<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:3%;border-bottom:1px solid #eeeeee;">
							<div class="col-sm-4 col-md-4 col-lg-4 nopad">
								<h4 style="font-size:1.1em;"> Filter </h4>
							</div>
							<div class="col-sm-8 col-md-8 col-lg-8 nopad text-right">
								<button class="btn-abu text-center" style="margin-top:2px;width:80px;height:32px;border-radius:3px;background-color:white">Reset</button>
							</div>
						</div>
						
						<!-- filter kategori start here-->
						<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding:5% 0% 5% 0%;border-bottom:1px solid #eeeeee;background-color:white">
							<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:5%;">
								<h5 style="font-size:1em;"> Kategori </h5>
							</div>
							<div class="panel-group" id="accordion" style="padding:0%;">
								<div class="panel panel-default">
									<div class="panel-heading nopad" style="padding-bottom:0px;">
										<a data-toggle="collapse" href="#collapsepp">Pakaian Pria
											<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
										</a>
									</div>
									<div id="collapsepp" class="panel-collapse collapse nopad">
										<div class="panel-body">
											<div class="panel-group nopad" id="accordion2" style="margin-top:10%;">
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="pria1" name="checkbox-group">
														<label for="pria1">Atasan</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion2" data-toggle="collapse" href="#collapsespp"aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespp" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria2" name="checkbox-group">
																<label class="sublabel" for="pria2">Kemeja</label>
															</p>	
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria3" name="checkbox-group">
																<label for="pria3">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria4" name="checkbox-group">
																<label for="pria4">Kaos Tanpa Lengan</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad" style="">
													<div class="nopad">
														<input type="checkbox" id="pria5" name="checkbox-group">
														<label for="pria5">Bawahan</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion2" data-toggle="collapse" 
														href="#collapsespp2" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespp2" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria6" name="checkbox-group">
																<label class="sublabel" for="pria6">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria7" name="checkbox-group">
																<label for="pria7">Celana Panjang</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria8" name="checkbox-group">
																<label for="pria8">Jeans</label>
															</p>
														</div>
													</div>
												</div>
												
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="pria9" name="checkbox-group">
														<label for="pria9">Outwear</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion2" data-toggle="collapse" 
														href="#collapsespp3" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespp3" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria10" name="checkbox-group">
																<label class="sublabel" for="pria10">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria11" name="checkbox-group">
																<label for="pria11">Celana Panjang</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="pria12" name="checkbox-group">
																<label for="pria12">Jeans</label>
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
										<a data-toggle="collapse" href="#collapsepw">Pakaian Wanita
											<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
										</a>
									</div>
									
									<div id="collapsepw" class="panel-collapse collapse nopad">
										<div class="panel-body" style="margin-top:3%;">
											<div class="panel-group nopad" id="accordion3" style="margin-top:3%;">
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita1" name="checkbox-group">
														<label for="wanita1">Dress</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion3" data-toggle="collapse" href="#collapsespw"aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespw" class="panel-collapse collapse nopad">
														<div class="panel-body nopad">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita2" name="checkbox-group">
																<label class="sublabel" for="wanita2">Santai</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita3" name="checkbox-group">
																<label for="wanita3">Cocktail</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita4" name="checkbox-group">
																<label for="wanita4">Bodycon</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita5" name="checkbox-group">
																<label for="wanita5">Jumpsuit</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita6" name="checkbox-group">
														<label for="wanita6">Atasan</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion3" data-toggle="collapse" 
														href="#collapsespw2" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespw2" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita7" name="checkbox-group">
																<label class="sublabel" for="wanita7">Kemeja</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita8" name="checkbox-group">
																<label for="wanita8">Blouse</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita9" name="checkbox-group">
																<label for="wanita9">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita10" name="checkbox-group">
																<label for="wanita10">Tank Top</label>
															</p>
														</div>
													</div>
												</div>
												
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita11" name="checkbox-group">
														<label for="wanita11">Bawahan</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion3" data-toggle="collapse" 
														href="#collapsespw3" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespw3" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita12" name="checkbox-group">
																<label class="sublabel" for="wanita12">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita13" name="checkbox-group">
																<label for="wanita13">Rok</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita14" name="checkbox-group">
																<label for="wanita14">Celana Panjang</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita15" name="checkbox-group">
																<label for="wanita15">Jeans</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita16" name="checkbox-group">
																<label for="wanita16">Leggings</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita17" name="checkbox-group">
														<label for="wanita17">Outerwear</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion3" data-toggle="collapse" 
														href="#collapsespw4" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespw4" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita18" name="checkbox-group">
																<label class="sublabel" for="wanita18">Cardigan</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita19" name="checkbox-group">
																<label for="wanita19">Blazer</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita20" name="checkbox-group">
																<label for="wanita20">Jaket</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita21" name="checkbox-group">
																<label for="wanita21">Sweater</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita22" name="checkbox-group">
														<label for="wanita22">Pakaian Dalam</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion3" data-toggle="collapse" 
														href="#collapsespw5" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespw5" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="wanita23" name="checkbox-group">
																<label class="sublabel" for="wanita23">Baju Tidur</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="wanita24" name="checkbox-group">
														<label for="wanita24">Aksesoris</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								
								<!-- punya anak-->
								<div class="panel panel-default nopad" style="padding-bottom:0px;">
									<div class="panel-heading" style="padding-bottom:0px;">
										<a data-toggle="collapse" href="#collapsepa">Pakaian Anak
											<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
										</a>
									</div>
									
									<div id="collapsepa" class="panel-collapse collapse nopad">
										<div class="panel-body" style="padding-top:8%;">
											<div class="panel-group nopad" id="accordion4" style="padding-top:5%;">
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="anak1" name="checkbox-group">
														<label for="anak1">Junior Boys</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion4" data-toggle="collapse" href="#collapsespa"aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespa" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak2" name="checkbox-group">
																<label class="sublabel" for="anak2">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak3" name="checkbox-group">
																<label for="anak3">Kemeja</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak4" name="checkbox-group">
																<label for="anak4">Jeans & Trousers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak5" name="checkbox-group">
																<label for="anak5">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak6" name="checkbox-group">
																<label class="sublabel" for="anak6">Piyama</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak7" name="checkbox-group">
																<label for="anak7">Hoodie, Sweater & Outwear</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak8" name="checkbox-group">
																<label for="anak8">Rompers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak9" name="checkbox-group">
																<label for="anak9">Pakaian Set</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="anak10" name="checkbox-group">
														<label for="anak10">Junior Girls</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion4" data-toggle="collapse" 
														href="#collapsespa2" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespa2" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak11" name="checkbox-group">
																<label class="sublabel" for="anak11">Dress</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak12" name="checkbox-group">
																<label for="anak12">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak13" name="checkbox-group">
																<label for="anak13">Leggings</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak14" name="checkbox-group">
																<label for="anak14">Jeans & Trousers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak15" name="checkbox-group">
																<label class="sublabel" for="anak15">Celana Pendek & Rok</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak16" name="checkbox-group">
																<label for="anak16">Piyama</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak17" name="checkbox-group">
																<label for="anak17">Hoodie, Sweater & Outwear</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak18" name="checkbox-group">
																<label for="anak18">Rompers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak19" name="checkbox-group">
																<label for="anak19">Pakaian Set</label>
															</p>
														</div>
													</div>
												</div>
												
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="anak20" name="checkbox-group">
														<label for="anak20">Toddler Boys</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion4" data-toggle="collapse" 
														href="#collapsespa3" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespa3" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak21" name="checkbox-group">
																<label class="sublabel" for="anak21">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak22" name="checkbox-group">
																<label for="anak22">Kemeja</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak23" name="checkbox-group">
																<label for="anak23">Jeans & Trousers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak24" name="checkbox-group">
																<label for="anak24">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak25" name="checkbox-group">
																<label class="sublabel" for="anak25">Piyama</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak26" name="checkbox-group">
																<label for="anak26">Hoodie, Sweater & Outwear</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak27" name="checkbox-group">
																<label for="anak27">Rompers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak28" name="checkbox-group">
																<label for="anak28">Pakaian Set</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="anak29" name="checkbox-group">
														<label for="anak29">Toddler Girls</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion4" data-toggle="collapse" 
														href="#collapsespa4" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespa4" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak30" name="checkbox-group">
																<label class="sublabel" for="anak30">Dress</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak31" name="checkbox-group">
																<label for="anak31">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak32" name="checkbox-group">
																<label for="anak32">Leggings</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak33" name="checkbox-group">
																<label for="anak33">Jeans & Trousers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak34" name="checkbox-group">
																<label class="sublabel" for="anak34">Celana Pendek & Rok</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak35" name="checkbox-group">
																<label for="anak35">Piyama</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak36" name="checkbox-group">
																<label for="anak36">Hoodie, Sweater & Outwear</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak37" name="checkbox-group">
																<label for="anak37">Rompers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak38" name="checkbox-group">
																<label for="anak38">Pakaian Set</label>
															</p>
														</div>
													</div>
												</div>
												
												<div class="panel panel-default nopad">
													<div class="nopad">
														<input type="checkbox" id="anak39" name="checkbox-group">
														<label for="anak39">Baby</label>
														<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion4" data-toggle="collapse" 
														href="#collapsespa5" aria-hidden="true" style="margin-top:2px;"></i>
													</div>
													<div id="collapsespa5" class="panel-collapse collapse nopad">
														<div class="panel-body nopad" style="padding:5%;padding-bottom:0%;">
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak40" name="checkbox-group">
																<label class="sublabel" for="anak40">Jumper</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak41" name="checkbox-group">
																<label for="anak41">Piyama & Pakaian Set</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak42" name="checkbox-group">
																<label for="anak42">Dress</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak43" name="checkbox-group">
																<label for="anak43">Kaos T-shirt</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak44" name="checkbox-group">
																<label class="sublabel" for="anak44">Leggings</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak45" name="checkbox-group">
																<label for="anak45">Jeans & Trousers</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak46" name="checkbox-group">
																<label for="anak46">Celana Pendek</label>
															</p>
															<p style="padding-bottom:1%;">
																<input type="checkbox" id="anak47" name="checkbox-group">
																<label for="anak47">Hoodie, Sweater & Outwear</label>
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
						<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding:5% 0% 5% 0%;border-bottom:1px solid #eeeeee;margin-bottom:6%;">
							<div class="col-lg-12 nopad" style="padding-bottom:2%;">
								<h5 style="font-size:1em;"> Ukuran Pakaian </h5>
							</div>
							<div class="col-lg-12 nopad" style="padding-bottom:2%;">
								<div class="container-fluid nopad">
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
											<h5> XS </h5>
										</div>	
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #3FC0D6;">
											<h5> S </h5>
										</div>	
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
											<h5> M </h5>
										</div>	
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
											<h5> L </h5>
										</div>	
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
											<h5> XL </h5>
										</div>	
									</div>
									<div class="col-sm-4 col-md-4 col-lg-2 nopad" style="padding-right:1%;">
										<div class="col-lg-12 nopad text-center" style="border:1px solid #e0e0e0;">
											<h5> XXL </h5>
										</div>	
									</div>
								</div>
							</div>
						</div>
					<div class="col-sm-12 col-md-12 panel-group" style="padding:5% 0% 5% 0%;border-bottom:1px solid #eeeeee;">
						<div class="panel panel-default">
							<div class="panel-heading nopad">
								<a data-toggle="collapse" href="#harga">Rentang Harga
									<i class="fa fa-angle-down fa-lg icons-nav-xs" aria-hidden="true" style="margin-top:2px;"></i>
								</a>
							</div>
							<div id="harga" class="panel-collapse collapse" style="margin-top:5%;">
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
					
					<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding:5% 0% 5% 0%;border-bottom:1px solid #eeeeee;">
						<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:2%;">
							<h5 style="font-size:1em;">  Warna Pakaian </h5>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-top:2%;overflow-y:scroll;height:100px;">
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
					
					<div class="col-lg-12 nopad" style="padding:8% 0% 5% 0%;">
						<div class="col-lg-12 nopad" style="padding-bottom:2%;">
							<button class="btn-defaults" style="padding:6%;border-radius:3px;width:100%;"> Filter </button>
						</div>
					</div>	
					
				</div>	
			</div>
			
			<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 nopad" style="margin-bottom:10%;">
				<div class="container-fluid nopad" style="padding:0% 0% 5% 5%;">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:2%;padding-right:2%;border-bottom:1px solid #e0e0e0;margin-bottom:3.5%;">
						<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 nopad">
							<h4 style="font-size:1.15em;">Pencarian untuk : "Pakaian Wanita" </h4>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 nopad hidden-xs" style="padding-top:0%;">
							<div class="col-xs-3 col-lg-3 nopad text-left" style="">
								<h5>Urutkan</h5>
							</div>
							<div class="col-xs-9 col-lg-9 nopad">
								<select class="form-control" id="sel1">
									<option>Produk Terbaru</option>
									<option>Rating Tertinggi</option>
									<option>Harga Termurah</option>
									<option>Harga Tertinggi</option>
									<option>Diskon Tertinggi</option>
								</select>
							</div>
						</div>	
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee;">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							<!--<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
								<span class="biru">19:01:00 </span> time left</h5>-->
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							<!--<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
								<span class="biru">19:01:00 </span> time left</h5>-->
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							<!--<h5> <i class="fa fa-clock-o biru" aria-hidden="true" style="margin-right:3%;"></i> 
								<span class="biru">19:01:00 </span> time left</h5>-->
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 nopad space-items-6" style="padding-bottom:2%;">
						<div class="col-sm-12 col-lg-12 nopad bgputih card-sale" style="box-shadow:none;border:1px solid #eeeeee">
							<div class="container-fluid">
								<img src="images/items1-2.png" style="width:100%;">
							</div>
							<div class="container-fluid" style="padding:3% 6% 3% 10%;border-top:1px solid #eeeeee;">
								<h5 class="title title-items" id="items12">Kids  <br> Sweater </h5>
								<h6 class="hidden-xs">XYZ - 019210 </h6>
								<h5 style="padding-top:0%;"> IDR 30.000 <span class="kecil" style="padding-left:2%;"> Rp 120.000</span> </h5>
							</div>
						</div>
					</div>
					
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


</div>

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


<div class="modal-dialog" >

	<!-- Modal content-->
	<div class="modal-content" style="padding:1%;">
		<div class="modal-header" style="border-bottom:1px solid #eeeeee;padding-bottom:1%;">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h5 style="margin-top:2%;">3 Barang</h5>
		</div>
		<div class="modal-body" style="padding:6%;height:280px;overflow-y:scroll;">
			<div class="col-xs-12 nopad" style="margin-bottom:5%;">
				<div class="col-xs-3 nopad">
					<img src="images/test-1.jpg" style="width:100%;border:1px solid #eeeeee;">
				</div>
				<div class="col-xs-9 nopad" style="padding-left:5%;">
					<h5 class="modal-title">Nama Items</h5>
					<h5 class="modal-title">Rp 80.000 x 2</h5>
				</div>
			</div>
			<div class="col-xs-12 nopad" style="margin-bottom:5%;">
				<div class="col-xs-3 nopad">
					<img src="images/test-1.jpg" style="width:100%;border:1px solid #eeeeee;">
				</div>
				<div class="col-xs-9 nopad" style="padding-left:5%;">
					<h5 class="modal-title">Nama Items</h5>
					<h5 class="modal-title">Rp 80.000 x 2</h5>
				</div>
			</div>
			<div class="col-xs-12 nopad" style="margin-bottom:5%;">
				<div class="col-xs-3 nopad">
					<img src="images/test-1.jpg" style="width:100%;border:1px solid #eeeeee;">
				</div>
				<div class="col-xs-9 nopad" style="padding-left:5%;">
					<h5 class="modal-title">Nama Items</h5>
					<h5 class="modal-title">Rp 80.000 x 2</h5>
				</div>
			</div>
			<div class="col-xs-12 nopad" style="margin-bottom:5%;">
				<div class="col-xs-3 nopad">
					<img src="images/test-1.jpg" style="width:100%;border:1px solid #eeeeee;">
				</div>
				<div class="col-xs-9 nopad" style="padding-left:5%;">
					<h5 class="modal-title">Nama Items</h5>
					<h5 class="modal-title">Rp 80.000 x 2</h5>
				</div>
			</div>
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