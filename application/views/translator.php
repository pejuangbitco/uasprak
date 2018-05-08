       <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>

				<a href="<?php echo base_url() ?>/translate/">Let's Translate</a>
				</h2>
				<?php if ($this->session->flashdata('msg')) 
				{ 
					$msg = $this->session->flashdata('msg');
					echo "<center>" . $msg . "</center>";
				} ?>

		    </div>


		<!--//banner-->
		<!--content-->

				<br>
				<div>
				     <button style="margin-left: 18px;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				      Help
				     </button>
				     <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h2 class="modal-title">Help</h2>	
											</div>
											<div class="modal-body">
												<h3 class="modal-title">Contoh inputan yang benar :</h3><br>
												<p>saya mencuci mobil</p>
												<p>saya mencuci mobil kemarin</p>
												<br>
												<h3 class="modal-title">Contoh inputan yang salah :</h3><br>
												<p>saya</p>
												<p>mencuci</p>
												<p>saya mencuci</p>
				                            </div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
           		</div>
	
 				<!--//grid-->

		<div class="content-bottom" style="height: 380px;">

			
			<div class="col-md-6 post-top">
				<div class="post">

					<form class="text-area" action="<?= base_url('translate')?>" method="post">
						<input style="width :540px; height :100px; border:0px; text-indent: 20px;" type="text" name="kata" value="<?php if (isset($kata)) {echo $kata;} ?>">
						</input>
					
					<div class="post-at">
						<div class="text-sub">
							<input type="submit" name="submit" value="translate">
						</div>
						<div class="clearfix"> </div>
					</div>
					</form>
				</div>

			</div>

			<div class="col-md-6 post-top">
				<div class="post">
					<div class="text-area">
						<input  style="width :540px; height :100px; border:0px; text-indent: 20px;" type="text" readonly="" value="<?php if ($eng) { echo $eng;} ?>">
						
						</input>
					</div>
				</div>

			</div>


			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->