

<!-- Footer -->
<footer>
    <div class="bg2 p-t-80 p-b-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">

                            <img class="max-s-full" src="<?php echo base_url('public/assets/front/images/icons/logo.png')?>" style="height: 100px; width: 100px;" alt="LOGO">

                    </div>

                    <div>


                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">
                    <div class="size-h-3 flex-s-c">
                        <h5 class="f1-m-7 cl0">
                            XƏBƏRLƏR
                        </h5>
                    </div>

                    <ul>
                        <?php foreach ($all_popular as $news) { ?>
                        <li class="flex-wr-sb-s p-b-20">
                            <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">
                                <img src="<?php echo base_url('uploads/'. $news["image"])?>" alt="IMG">
                            </a>

                            <div class="size-w-5">
                                <h6 class="p-b-5">
                                    <a href="<?php echo base_url('news/'.$news['id'] )?>" class="f1-s-5 cl11 hov-cl10 trans-03">
                                        <?php echo $news['title']?>
                                    </a>
                                </h6>

                                <span class="f1-s-3 cl6">
										<?php echo $news['date']?>
									</span>
                            </div>
                        </li>
                        <?php }?>

                    </ul>
                </div>

<!--                <div class="col-sm-6 col-lg-4 p-b-20">-->
<!--                    <div class="size-h-3 flex-s-c">-->
<!--                        <h5 class="f1-m-7 cl0">-->
<!--                            Category-->
<!--                        </h5>-->
<!--                    </div>-->
<!---->
<!--                    <ul class="m-t--12">-->
<!--                        <li class="how-bor1 p-rl-5 p-tb-10">-->
<!--                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">-->
<!--                                SİYASƏT-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="how-bor1 p-rl-5 p-tb-10">-->
<!--                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">-->
<!--                                SOSİAL-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="how-bor1 p-rl-5 p-tb-10">-->
<!--                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">-->
<!--                                İQTİSADİYYAT-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="how-bor1 p-rl-5 p-tb-10">-->
<!--                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">-->
<!--                                İDMAN-->
<!--                            </a>-->
<!--                        </li>-->
<!---->
<!--                        <li class="how-bor1 p-rl-5 p-tb-10">-->
<!--                            <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">-->
<!--                                DÜNYA-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
            </div>
        </div>
    </div>

    <div class="bg11">
        <div class="container size-h-4 flex-c-c p-tb-15">
				<span class="f1-s-1 cl0 txt-center">
					Copyright ©

					<a href="http://academy.asoiu.edu.az/" class="f1-s-1 cl10 hov-link1">

Rauf :))))))<a href="#" target="_blank">PA NEWS</a>

				</span>
        </div>
    </div>
</footer>

<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<span class="fas fa-angle-up"></span>
		</span>
</div>

<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="video-mo-01">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YEG3bmU_WaI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url('public/assets/front/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('public/assets/front/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('public/assets/front/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('public/assets/front/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('public/assets/front/js/main.js')?>"></script>

</body>
</html>