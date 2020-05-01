<?php $this->load->view('front/front_header')?>
	








<!--	 Headline -->  <!-- SON DEQIQE START -->
<!--	<div class="container">-->
<!--		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8" style="background-color: black;">-->
<!--			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">-->
<!---->
<!--				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">-->
<!--					<span class="dis-inline-block slide100-txt-item animated visible-false">-->
<!---->
<!--					</span>-->
<!---->
<!--					<span class="dis-inline-block slide100-txt-item animated visible-false">-->
<!---->
<!--					</span>-->
<!---->
<!--					<span class="dis-inline-block slide100-txt-item animated visible-false">-->
<!---->
<!--					</span>-->
<!--				</span>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->



<!-- SON DEQIQE END -->


		
	<!-- Feature post -->  <!-- ESAS SON DEQIQE -->




	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">


					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esassiyaset["image"])?>">




						<a href="<?php echo base_url('news/'.$all_esassiyaset['id'] )?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="<?php echo base_url('Userhome/list/'.$all_esassiyaset['status'])?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                <?php echo $all_esassiyaset['status']?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="<?php echo base_url('news/'.$all_esassiyaset['id'])?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    <?php echo $all_esassiyaset['title']?>
								</a>
							</h3>

							<span class="how1-child2">

								<span class="f1-s-3 cl11">
									<?php echo $all_esassiyaset['date']?>
								</span>
							</span>


						</div>


                    </div>
				</div>






				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<div class="col-12 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esassosial["image"])?>">
								<a href="<?php echo base_url('news/'.$all_esassosial['id'] )?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
									<a href="<?php echo base_url('Userhome/list/'.$all_esassosial['status'])?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        <?php echo $all_esassosial['status']?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('news/'.$all_esassosial['id'] )?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                            <?php echo $all_esassosial['title'] ?>
										</a>
									</h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esasiqtisadiyyat["image"])?>">
								<a href="<?php echo base_url('news/'.$all_esasiqtisadiyyat['id'] )?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="<?php echo base_url('Userhome/list/'.$all_esasiqtisadiyyat['status'])?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $all_esasiqtisadiyyat['status'] ?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('news/'.$all_esasiqtisadiyyat['id'] )?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            <?php echo $all_esasiqtisadiyyat['title'] ?>
										</a>
									</h3>
								</div>
							</div>
						</div>


						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esasworld["image"])?>">
								<a href="<?php echo base_url('news/'.$all_esasworld['id'] )?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="<?php echo base_url('Userhome/list/'.$all_esasworld['status'])?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $all_esasworld['status']?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('xeber/'.$all_esasworld['id'] )?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											<?php echo $all_esasworld['title']?>
										</a>
									</h3>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

<!-- ESAS SON DEQIQ END -->



	<!-- Post --> <!-- XEBER POST START -->



	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">
						<!-- Entertainment -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
                                    <?php echo $all_esassiyaset['status']?>
								</h3>

								<!--  -->
								<a href="<?php echo base_url('Userhome/list/'.$all_esassiyaset['status'])?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    Hamısın göstər
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo base_url('news/'.$all_esassiyaset['id'] )?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $all_esassiyaset["image"])?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$all_esassiyaset['id'] )?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            <?php echo $all_esassiyaset['title']?>
														</a>
													</h5>

													<span class="cl8">

														<span class="f1-s-3">
															<?php echo $all_esassiyaset['date']?>
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">

                                            <?php foreach ($all_adisiyaset as $news) { ?>

											<!-- Item post -->
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('news/'.$news['id'] )?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $news["image"])?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$news['id'] )?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $news['title']?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $news['status']?>
														</a>

														<span class="f1-s-3">
															<?php echo $news['date']?>
														</span>
													</span>
												</div>
											</div>

                                            <?php }?>

										</div>
									</div>
								</div>
							</div>
						</div>







						<!-- SOSIAL XEBERLER -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl2 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl13 tab01-title">
                                    <?php echo $all_esassosial['status']?>
								</h3>

								<!--  -->
								<a href="<?php echo base_url('Userhome/list/'.$all_esassosial['status'])?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									Hamısın göstər
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo base_url('news/'.$all_esassosial['id'] )?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $all_esassosial['image'])?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$all_esassosial['id'] )?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            <?php echo $all_esassosial['title']?>
														</a>
													</h5>

													<span class="cl8">

														<span class="f1-s-3">
															<?php echo $all_esassosial['date']?>
														</span>
													</span>
												</div>
											</div>
										</div>



										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
                                            <?php foreach ($all_adisosial as $news) { ?>

											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('news/'.$news['id'] )?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $news["image"])?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$news['id'] )?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                            <?php echo $news['title']?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $news['status']?>
														</a>

														<span class="f1-s-3">
															<?php echo $news['date']?>
														</span>
													</span>
												</div>
											</div>
                                            <?php } ?>
										</div>


                                    </div>
								</div>
							</div>
						</div>
<!-- SOSAIL END -->





						<!-- Iqtisadiyyat -->




						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl3 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl14 tab01-title">
                                    <?php echo $all_esasiqtisadiyyat['status']?>
								</h3>


								<!--  -->
								<a href="<?php echo base_url('Userhome/list/'.$all_esasiqtisadiyyat['status'])?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									Hamısın göstər
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab3-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
												<a href="<?php echo base_url('news/'.$all_esasiqtisadiyyat['id'] )?>" class="wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $all_esasiqtisadiyyat["image"])?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$all_esasiqtisadiyyat['id'] )?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            <?php echo $all_esasiqtisadiyyat['title']?>
														</a>
													</h5>

													<span class="cl8">


														<span class="f1-s-3">
															<?php echo $all_esasiqtisadiyyat['date']?>
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
                                        <?php foreach ($all_adiiqtisadiyyat as $news) { ?>
											<div class="flex-wr-sb-s m-b-30">
												<a href="<?php echo base_url('news/'.$news['id'] )?>" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="<?php echo base_url('uploads/'. $news["image"])?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="<?php echo base_url('news/'.$news['id'] )?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                            <?php echo $news['title']?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
															<?php echo $news['status']?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo $news['date']?>
														</span>
													</span>
												</div>
											</div>
                                        <?php } ?>

										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>



<!--POPULAR XEBERLER START-->




				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!--  -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title" style="text-align: center">
                                    WORLD BREAKING <img src="<?php echo base_url('public/assets/front/live.gif')?>" >
								</h3>
							</div>

							<ul class="p-t-35">
                                <?php foreach ($all_news as $news) {?>
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        <img src="<?php echo base_url('uploads/'. $news["image"])?>"  class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6" alt="">
									</div>

									<a href="<?php echo base_url('news/'.$news['id'] )?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?php echo $news['title']?>
									</a>
								</li>

                            <?php } ?>


							</ul>
						</div>










						<!-- bannerr -->
						<div class="flex-c-s p-t-8">

                            <a href="<?php echo base_url('ads')?>"><img class="max-w-full" src="<?php echo base_url('public/assets/front/images/banner12.jpg')?>" alt="IMG"></a>
						</div>



						
						<!--  -->
						<div class="p-t-50">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Sosial şəbəkələrdə bizi izləyin
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Follow
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Subscribe
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">

            <a href="<?php echo base_url('ads')?>"><img class="max-w-full" src="<?php echo base_url('public/assets/front/images/banner6.jpg')?>"alt="IMG"></a>

		</div>
	</div>













	<!-- WORLD XEBERLERI       -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							WORLD BREAKING
						</h3>
					</div>



                    <div class="row p-t-35">
                        <?php foreach ($all_world as $news) { ?>

						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->

							<div class="m-b-45">
								<a href="<?php echo base_url('Userhome/blog/'.$news['id'] )?>" class="wrap-pic-w hov1 trans-03">
									<img src="<?php echo base_url('uploads/'. $news["image"])?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="<?php echo base_url('Userhome/blog/'.$news['id'] )?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $news['title']?>
										</a>
									</h5>

									<span class="cl8">


										<span class="f1-s-3">
											<?php echo $news['date']?>
										</span>
									</span>
								</div>
							</div>
						</div>

                        <?php }?>
					</div>




                </div>



<!--                VIDEO BANNER -->



				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									PA NEWS ADS VIDEO
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="<?php echo base_url('public/assets/front/images/video3.jpg')?>" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Stranger Things New Season watch to trailer
										</a>
									</h5>

									<span class="cl15">
										<a href="<?php base_url('ads') ?>" class="f1-s-4 cl8 hov-cl10 trans-03">
											PA NEWS ads
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>




							
						<!-- ABUNƏ OLUN -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								ABUNƏ OLUN
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								BÜTÜN XƏBƏRLƏR SİZƏ GƏLSİN.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<script>

</script>





<?php $this->load->view('front/front_footer')?>