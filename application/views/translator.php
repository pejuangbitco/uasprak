       <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
  		<!--banner-->	
		    <div class="banner">
		   
				<h2>
				<a href="index.html">Let's Translate</a>
				</h2>
		    </div>


		<!--//banner-->
		<!--content-->


		<div class="content-bottom">

			
			<div class="col-md-6 post-top">
				<div class="post">

					<form class="text-area" action="<?= base_url('translate')?>" method="post">
						<textarea   required="" rows="10" name="kata" value="<?php if ($kata) echo $kata; ?>">
						</textarea>
					</form>
					<div class="post-at">
						<form class="text-sub">
							<input type="submit" name="submit" value="translate">
						</form>
						<div class="clearfix"> </div>
					</div>
				</div>

			</div>

			<div class="col-md-6 post-top">
				<div class="post">
					<form class="text-area">
						<textarea   required="" rows="10" readonly="">
						
						<?php if ($eng) { echo $eng;?>
						
						<?php } ?>			
						
						</textarea>
					</form>
				</div>
				<br><br><br><br><br>

			</div>


			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->