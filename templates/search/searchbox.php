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
		<form method="get" action="search.php">
		<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding:5% 0% 5% 0%;border-bottom:1px solid #eeeeee;background-color:white">
			<div class="col-sm-12 col-md-12 col-lg-12 nopad" style="padding-bottom:5%;">
				<h5 style="font-size:1em;"> Kategori </h5>
			</div>
			<div class="panel-group" id="accordion" style="padding:0%;">
				<div class="panel panel-default">
					<div class="panel-heading nopad" style="padding-bottom:0px;">
						<a data-toggle="collapse" href="#collapsepp"><b>Pakaian Pria</b>
						</a>
					</div>
					<div id="collapsepp" class="panel-collapse collapse nopad">
						<div class="panel-body">
							<div class="panel-group nopad" id="accordion2" style="margin-top:10%;">
								<div class="panel panel-default nopad">
									<div class="nopad">
										<input type="checkbox" id="pria1" name="checkbox-group">
										<label for="pria1">Atasan</label>
										<i class="fa fa-angle-down fa-lg icons-nav-xs" data-parent="#accordion2" data-toggle="collapse" href="#collapsespp" aria-hidden="true" style="margin-top:2px;"></i>
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
						<a data-toggle="collapse" href="#collapsepw"><b>Pakaian Wanita</b>
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
						<a data-toggle="collapse" href="#collapsepa"><b>Pakaian Anak</b>
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
		</form>
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
				<a>Rentang Harga</a>
			</div>
			<div class="input-group">
				<input type="number" class="form-control" placeholder="Start"><br><br>
				<input type="number" class="form-control" placeholder="End">
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