




<?php $this->load->view('front/front_header')?>


	<!-- BRODCUMP   ------------------------------------------------------------------------------>

	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="<?php echo base_url('home')?>" class="breadcrumb-item f1-s-3 cl9">
					Home
				</a>


				<span class="breadcrumb-item f1-s-3 cl9">
					<?php echo $search['status']?>
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






<!-------------------------------- BRODCUMP     SON ----------------------------------------------------------------------->





	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
            <?php echo $search['status']?>
		</h2>
	</div>



<!----------------------------------------------------------------------->





	<!-- Feature post --------------------------------------------------------------------------->



	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">


				<div class="col-md-6 p-rl-1 p-b-2">
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esassiyaset['image'])?>">
						<a href="<?php echo base_url('blog')?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?php echo $all_esassiyaset['status']?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="<?php echo base_url('blog')?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
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
						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esassosial['image'])?>">
								<a href="<?php echo base_url('blog')?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $all_esassosial['status']?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('blog')?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											<?php echo $all_esassosial['title']?>
										</a>
									</h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'. $all_esasiqtisadiyyat['image'])?>">
								<a href="<?php echo base_url('blog')?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $all_esasiqtisadiyyat['status']?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('blog')?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											<?php echo $all_esasiqtisadiyyat['title'] ?>
										</a>
									</h3>
								</div>
							</div>
						</div>

						<div class="col-sm-12 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(<?php echo base_url('uploads/'.$all_esasworld['image'])?>">
								<a href="<?php echo base_url('blog')?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $all_esasworld['status']?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="<?php echo base_url('blog')?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
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









	<!--POST START    ----------------------------------------------------------------------------------------------------------------->






	<section class="bg0 p-t-70 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
                        <?php foreach ($searchsiyaset as $key ){ ?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="<?php echo base_url('news/'.$key['id'])?>" class="wrap-pic-w hov1 trans-03">
									<img style="width: 320px;height: 175px;"  src="<?php echo base_url('uploads/'.$key['image'])?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="<?php echo base_url('news/'.$key['id'])?>" class="f1-m-3 cl2 hov-cl10 trans-03">
                                            <?php echo $key['title']?>
										</a>
									</h5>

									<span class="cl8">

										<span class="f1-s-3">
											<?php echo $key['date']?>
										</span>
									</span>
								</div>
							</div>
						</div>
                        <?php }?>

					</div>








					<!-- PAGINATION -------------------------------------------------------------------------------------->




<!--					<div class="flex-wr-s-c m-rl--7 p-t-15">-->
<!--						<a href="--><?php //base_url('list')?><!--" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>-->
<!--						<a href="--><?php //base_url('list')?><!--" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>-->
<!--					</div>-->
				</div>



                <!-- PAGINATION  END ------------------------------------------------------------------------------------->










				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
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










                        <!-- Most Popular --------------------------------------------->






						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
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



                        <!-- BANNER --------------------------------------------->


						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="<?php echo base_url('public/assets/front/images/video3.jpg')?>" alt="IMG">
							</a>
						</div>
						


					</div>
				</div>
			</div>
		</div>
	</section>





<?php $this->load->view('front/front_footer')?>