	
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(<?= base_url('assets/pato/') ?>images/Oli-Blog-2.jpg);">
		<h2 class="tit6 t-center" style="color: black; background-color: red;">
			Blog
		</h2>
	</section>

	<!-- Content page -->
	<section>
		<div class="bread-crumb bo5-b p-t-17 p-b-17">
			<div class="container">
				<a href="index.html" class="txt27">
					Home
				</a>

				<span class="txt29 m-l-10 m-r-10">/</span>

				<span class="txt29">
					Blog
				</span>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md">
						<!-- Block4 -->

						<?php  foreach ($news as $key) { ?>
							<div class="blo4 p-b-63">
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="<?= base_url('assets/pato/') ?>images/blog-05.jpg" alt="IMG-BLOG">
								</a>

								<!-- <div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										28
									</span>

									<span class="txt31">
										Dec, 2018
									</span>
								</div> -->
							</div>

							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="<?= base_url('home/blog/' .$key->id_news) ?>" class="tit9"><?= $key->judul ?></a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?= $key->time ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										<?= $key->nama_kategori ?>
										<span class="m-r-6 m-l-4">|</span>
									</span>

								</div>

								<p>
									<?php $teks = $key->isi; $teks=character_limit($key->isi, 100); echo $teks;  ?>
								</p>

								<a href="<?= base_url('home/blog/' .$key->id_news) ?>" class="dis-block txt4 m-t-30">
									Selengkapnya..
									<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<?php } ?>
						

						

						<!-- Pagination -->
						<div class="pagination flex-l-m flex-w m-l--6 p-t-25">
							<!-- <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
							<a href="#" class="item-pagination flex-c-m trans-0-4">2</a> -->
							<?php echo $links; ?>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Categories
							</h4>

							<ul>
								<?php foreach ($kategori as $k) { ?>
									<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										<?= $k->nama_kategori ?>
									</a>
								</li>
								<?php } ?>
								

								
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								Most popular
							</h4>

							<ul>
								
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="<?= base_url('home/blog/'. $y->id_news) ?>">
											<img src="<?= base_url('assets/pato/') ?>images/blog-11.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="<?= base_url('home/blog/'. $y->id_news) ?>" class="dis-block txt28 m-b-8">
											
										</a>


									</div>
								</li>	
								
								

								
							</ul>
						</div>


						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										uly 2018
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										June 2018
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										May 2018
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										April  2018
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										March 2018
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										February 2018
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										January 2018
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										December 2017
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>