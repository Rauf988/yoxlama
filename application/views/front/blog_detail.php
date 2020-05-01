

<?php $this->load->view('front/front_header')?>




	<!-- Breadcrumb -->


	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="<?php echo base_url('home')?>" class="breadcrumb-item f1-s-3 cl9">
					Home
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					<?php echo $read['title']?>
				</span>
			</div>

<!--			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">-->
<!--				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">-->
<!--				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">-->
<!--					<i class="zmdi zmdi-search"></i>-->
<!--				</button>-->
<!--			</div>-->
		</div>
	</div>




<!--- BREADCRUMB END------------------------------------------------------------------>








            <!-- Content -->




	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                                <?php echo $read['status']?>
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                                <?php echo $read['title']?>
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">

									<span>
										<?php echo $read['date']?>
									</span>
								</span>

							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="<?php echo base_url('uploads/'. $read["image"])?>" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
                                <?php echo $read['description']?>
                            </p>






                            <!-- Share  ----------------------------------------------------------------->
							<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Share:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-google-plus-g m-r-7"></i>
										Google+
									</a>

									<a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-pinterest-p m-r-7"></i>
										Pinterest
									</a>
								</div>
							</div>
						</div>
					</div>




                    <!------------ BANNER----------------------------------------------------------->



                    <div>
                        <div class="container">
                            <div class="flex-c-c">
                                <a href="#">
                                    <img class="max-w-full" src="<?php echo base_url('public/assets/front/images/banner6.jpg')?>"alt="IMG">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>














				<!-- Sidebar --------------------------------------------------------->




				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
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


                        <!-- CATEGORY END ----------------------------------->








						<!-- Oxsar Posts ------------------------------------------>



<!--						<div class="p-b-30">-->
<!--                            <div>-->
<!--                                <div class="how2 how2-cl4 flex-s-c">-->
<!--                                    <h3 class="f1-m-2 cl3 tab01-title">-->
<!--                                        WORLD BREAKING-->
<!--                                    </h3>-->
<!--                                </div>-->
<!---->
<!--                                <ul class="p-t-35">-->
<!--                                    --><?php //foreach ($all_news as $news) {?>
<!--                                        <li class="flex-wr-sb-s p-b-22">-->
<!--                                            <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">-->
<!--                                                <img src="--><?php //echo base_url('uploads/'. $news["image"])?><!--"  class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6" alt="" >-->
<!--                                            </div>-->
<!---->
<!--                                            <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">-->
<!--                                                --><?php //echo $news['title']?>
<!--                                            </a>-->
<!--                                        </li>-->
<!---->
<!--                                    --><?php //} ?>
<!---->
<!---->
<!--                                </ul>-->
<!--                            </div>-->
<!--						</div>-->





						<!-- BANNNER ------------------------------------------------------->



						<div>
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
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
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

                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php $this->load->view('front/front_footer')?>