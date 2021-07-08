
<section class="s-pt-55 s-pb-0 s-pt-lg-145 s-pb-lg-150 ls ms blog-section c-gutter-60" id="blog">
	<div class="container">
		<div class="col-12 mb-55">
			<h3 class="special-heading text-center">Latest<span class="text-gradient">Rental</span> Cars</h3>
			<p class="fs-20 color-dark">The Car Rental Appointment</p>
			<div class="divider-64 d-none d-lg-block"></div>
		</div>
		<div class="row justify-content-center c-mb-60 c-mb-lg-0">
			<?php  
				$car = $this->booking->booking();
				foreach ($car->result_array() as $row) {
			?>
			<div class="col-lg-4 col-md-6">
				<article class="vertical-item text-center content-padding post type-post status-publish format-standard has-post-thumbnail bordered ls">
					<div class="tagcloud">
						<a href="blog-right.html" class="tag-cloud-link">
							<span>
								<?php echo $row['nama_merk'] ?>
							</span>
						</a>
					</div>
					<div class="item-media post-thumbnail">
						<img src="<?php echo base_url('assets/foto_mobil/'.$row['foto']) ?>" alt="">
						<div class="media-links">
							<a class="abs-link" title="" href="blog-left.html"></a>
						</div>
					</div><!-- .post-thumbnail -->
					<div class="item-content">
						<header class="entry-header">
							<h4 class="entry-title">
								<a href="blog-left.html" rel="bookmark">
									<?php echo $row['nama_mobil'] ?>
								</a>
							</h4>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<p><?php echo idr_format($row['hrg_rental']) ?> / hari</p>
						</div><!-- .entry-content -->
						<div class="entry-meta">
							<button type="submit" id="contact_form_submit" class="btn btn-maincolor mt-20"><?php echo $row['status'] ?></button>
						</div>
					</div><!-- .item-content -->
				</article><!-- #post-## -->
			</div>
			<?php } ?>
		</div>
	</div>
</section>