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


		<div class="content-bottom" style="height: 450px;">

			
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