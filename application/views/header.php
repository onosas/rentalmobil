<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="d-lg-none col-11">
				<a href="<?php echo base_url('home') ?>" class="logo">
					<img src="<?php echo base_url('assets/images/'.$rows['favicon']) ?>" alt="">
					<span class="logo-text fw-500"><?php echo $rows['nama_website'] ?></span>
				</a>
			</div>
			<div class="col-xl-12">

				<div class="nav-wrap">
					<!-- main nav start -->
					<nav class="top-nav">
						<ul class="nav sf-menu">
							<?php if ($this->session->role == 'Admin') {?>
							<li class="active">
								<a href="<?php echo base_url('admin') ?>">Dashboard</a>
							</li>
							<?php }else{ ?>
							<li class="active">
								<a href="<?php echo base_url('home') ?>">Home</a>
							</li>
							<?php } ?>

							<li>
								<a href="about.html">Pages</a>
								<ul>
									<li>
										<a href="team.html">Team</a>
										<ul>
											<li>
												<a href="team.html">Team List</a>
											</li>
											<li>
												<a href="team-single.html">Team Member</a>
											</li>
										</ul>
									</li>
									<!-- blog -->
									<li>
										<a href="blog-right.html">Blog</a>
										<ul>

											<li>
												<a href="blog-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="blog-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="blog-full.html">No Sidebar</a>
											</li>
											<li>
												<a href="blog-grid.html">Blog Grid</a>
											</li>

											<li>
												<a href="blog-single-right.html">Post</a>
												<ul>
													<li>
														<a href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li>
														<a href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof blog -->

									<li>
										<a href="gallery-image.html">Gallery</a>
										<ul>
											<!-- Gallery image only -->
											<li>
												<a href="gallery-image.html">Gallery Regular</a>
												<ul>
													<li>
														<a href="gallery-image-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-image.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-image-4-cols-fullwidth.html">4 columns</a>
													</li>

												</ul>
											</li>
											<!-- eof Gallery image only -->

											<!-- Gallery with title -->
											<li>
												<a href="gallery-title.html">Gallery Title</a>
												<ul>
													<li>
														<a href="gallery-title-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-title.html">3 column</a>
													</li>
													<li>
														<a href="gallery-title-4-cols-fullwidth.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery with title -->

											<!-- Gallery with excerpt -->
											<li>
												<a href="gallery-excerpt.html">Gallery Excerpt</a>
												<ul>
													<li>
														<a href="gallery-excerpt-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-excerpt.html">3 column</a>
													</li>
													<li>
														<a href="gallery-excerpt-4-cols-fullwidth.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery with excerpt -->


											<li>
												<a href="gallery-tiled.html">Tiled Gallery</a>
											</li>
											<!-- Gallery item -->

											<li>
												<a href="gallery2.html">Direction Gallery</a>
											</li>
											<li>
												<a href="gallery-single.html">Gallery Single</a>
												<ul>
													<li>
														<a href="gallery-single.html">Gallery Single</a>
													</li>
													<li>
														<a href="gallery-single2.html">Gallery Single 2</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery item -->
										</ul>
									</li>
									<!-- eof Gallery -->
									<li>
										<a href="pricing.html">Pricing</a>
									</li>
									<!-- shop -->
									<li>
										<a href="shop-right.html">Shop</a>
										<ul>
											<li>
												<a href="shop-account-dashboard.html">Account</a>
												<ul>

													<li>
														<a href="shop-account-details.html">Account details</a>
													</li>
													<li>
														<a href="shop-account-addresses.html">Addresses</a>
													</li>
													<li>
														<a href="shop-account-address-edit.html">Edit Address</a>
													</li>
													<li>
														<a href="shop-account-orders.html">Orders</a>
													</li>
													<li>
														<a href="shop-account-order-single.html">Single Order</a>
													</li>
													<li>
														<a href="shop-account-downloads.html">Downloads</a>
													</li>
													<li>
														<a href="shop-account-password-reset.html">Password Reset</a>
													</li>
													<li>
														<a href="shop-account-login.html">Login/Logout</a>
													</li>

												</ul>
											</li>
											<li>
												<a href="shop-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="shop-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="shop-product-right.html">Product Right Sidebar</a>
											</li>
											<li>
												<a href="shop-product-left.html">Product Left Sidebar</a>
											</li>
											<li>
												<a href="shop-cart.html">Cart</a>
											</li>
											<li>
												<a href="shop-checkout.html">Checkout</a>
											</li>
											<li>
												<a href="shop-order-received.html">Order Received</a>
											</li>

										</ul>
									</li>
									<!-- eof shop -->

									<!-- features -->
									<li>
										<a href="shortcodes_iconbox.html">Shortcodes</a>
										<ul>
											<li>
												<a href="shortcodes_typography.html">Typography</a>
											</li>
											<li>
												<a href="shortcodes_buttons.html">Buttons</a>
											</li>

											<li>
												<a href="shortcodes_iconbox.html">Icon Boxes</a>
											</li>
											<li>
												<a href="shortcodes_progress.html">Progress</a>
											</li>
											<li>
												<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
											</li>
											<li>
												<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
											</li>
											<li>
												<a href="shortcodes_animation.html">Animation</a>
											</li>
											<li>
												<a href="shortcodes_icons.html">Template Icons</a>
											</li>
											<li>
												<a href="shortcodes_socialicons.html">Social Icons</a>
											</li>
										</ul>
									</li>
									<!-- eof shortcodes -->

									<li>
										<a href="shortcodes_widgets_default.html">Widgets</a>
										<ul>
											<li>
												<a href="shortcodes_widgets_default.html">Default Widgets</a>
											</li>
											<li>
												<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
											</li>
											<li>
												<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
											</li>
										</ul>

									</li>


									<!-- events -->
									<li>
										<a href="events-left.html">Events</a>
										<ul>
											<li>
												<a href="events-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="events-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="events-full.html">Full Width</a>
											</li>
											<li>
												<a href="event-single-left.html">Single Event</a>
												<ul>
													<li>
														<a href="event-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="event-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="event-single-full.html">Full Width</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<!-- eof events -->
									<li>
										<a href="comingsoon.html">Comingsoon</a>
									</li>
									<li>
										<a href="404.html">404</a>
									</li>

								</ul>
							</li>
							<!-- eof pages -->
							<li>
								<a href="services.html">Services</a>
								<ul>
									<li>
										<a href="services.html">Services 1</a>
									</li>
									<li>
										<a href="services2.html">Services 2</a>
									</li>
									<li>
										<a href="services3.html">Services 3</a>
									</li>
									<li>
										<a href="service-single.html">Single Service</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="about.html">About Us</a>
							</li>
							<li>
							<li>
								<a href="faq.html">FAQ</a>
								<ul>
									<li>
										<a href="faq.html">FAQ</a>
									</li>
									<li>
										<a href="faq2.html">FAQ 2</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">Features</a>
								<div class="mega-menu">
									<ul class="mega-menu-row">
										<li class="mega-menu-col">
											<a href="#">Headers</a>
											<ul>
												<li>
													<a href="header1.html">Header Type 1</a>
												</li>
												<li>
													<a href="header2.html">Header Type 2</a>
												</li>
												<li>
													<a href="header3.html">Header Type 3</a>
												</li>
												<li>
													<a href="header4.html">Header Type 4</a>
												</li>
												<li>
													<a href="header5.html">Header Type 5</a>
												</li>
												<li>
													<a href="header6.html">Header Type 6</a>
												</li>
											</ul>
										</li>
										<li class="mega-menu-col">
											<a href="#">Side Menus</a>
											<ul>
												<li>
													<a href="header-side.html">Push Left</a>
												</li>
												<li>
													<a href="header-side-right.html">Push Right</a>
												</li>
												<li>
													<a href="header-side-slide.html">Slide Left</a>
												</li>
												<li>
													<a href="header-side-slide-right.html">Slide Right</a>
												</li>
												<li>
													<a href="header-side-sticked.html">Sticked Left</a>
												</li>
												<li>
													<a href="header-side-sticked-right.html">Sticked Right</a>
												</li>
											</ul>
										</li>
										<li class="mega-menu-col">
											<a href="title1.html">Title Sections</a>
											<ul>
												<li>
													<a href="title1.html">Title section 1</a>
												</li>
												<li>
													<a href="title2.html">Title section 2</a>
												</li>
												<li>
													<a href="title3.html">Title section 3</a>
												</li>
												<li>
													<a href="title4.html">Title section 4</a>
												</li>
												<li>
													<a href="title5.html">Title section 5</a>
												</li>
												<li>
													<a href="title6.html">Title section 6</a>
												</li>
											</ul>
										</li>
										<li class="mega-menu-col">
											<a href="footer1.html#footer">Footers</a>
											<ul>
												<li>
													<a href="footer1.html#footer">Footer Type 1</a>
												</li>
												<li>
													<a href="footer2.html#footer">Footer Type 2</a>
												</li>
												<li>
													<a href="footer3.html#footer">Footer Type 3</a>
												</li>
												<li>
													<a href="footer4.html#footer">Footer Type 4</a>
												</li>
												<li>
													<a href="footer5.html#footer">Footer Type 5</a>
												</li>
												<li>
													<a href="footer6.html#footer">Footer Type 6</a>
												</li>
											</ul>
										</li>
										<li class="mega-menu-col">
											<a href="copyright1.html#copyright">Copyright</a>

											<ul>
												<li>
													<a href="copyright1.html#copyright">Copyright 1</a>
												</li>
												<li>
													<a href="copyright2.html#copyright">Copyright 2</a>
												</li>
												<li>
													<a href="copyright3.html#copyright">Copyright 3</a>
												</li>
												<li>
													<a href="copyright4.html#copyright">Copyright 4</a>
												</li>
												<li>
													<a href="copyright5.html#copyright">Copyright 5</a>
												</li>
												<li>
													<a href="copyright6.html#copyright">Copyright 6</a>
												</li>
											</ul>
										</li>

									</ul>
								</div> <!-- eof mega menu -->
							</li>
							<!-- eof features -->
							<!-- contacts -->
							<?php  if ($this->session->role == 'Konsumen') {?>
							<li>
								<a href="contact.html">Account</a>
								<ul>
									<li>
										<a href="<?php echo base_url('order') ?>">Order</a>
									</li>
									<li>
										<a href="contact2.html">Contact 2</a>
									</li>
									<li>
										<a href="contact3.html">Contact 3</a>
									</li>
									<li>
										<a href="contact4.html">Contact 4</a>
									</li>
								</ul>
							</li>
							
							<?php }else{ ?>
							<li>
								<a href="contact.html">Contact</a>
								<ul>
									<li>
										<a href="contact.html">Contact 1</a>
									</li>
									<li>
										<a href="contact2.html">Contact 2</a>
									</li>
									<li>
										<a href="contact3.html">Contact 3</a>
									</li>
									<li>
										<a href="contact4.html">Contact 4</a>
									</li>
								</ul>
							</li>
							<?php } ?>
							<!-- eof contacts -->
						</ul>


					</nav>
					<!-- eof main nav -->


				</div>

			</div>
		</div>
	</div>

	<!-- header toggler -->

	<span class="toggle_menu"><span></span></span>

</header>