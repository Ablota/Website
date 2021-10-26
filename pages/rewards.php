<?php

require_once '../i18n/en.php';

$title = $lang['rewards']['title'];
$description = $lang['rewards']['description'];
$color = 'gold';
$logo = 'Ablota_Rewards_Icon.png';

?>
<?php include '../layout/header.php'; ?>
				<main>
					<section class="feature_demo2 pt_banner_inner">
						<div class="container">
							<div class="row justify-content-md-center">
								<div class="col-md-10 col-lg-6 text-center">
									<div class="title_sections">
										<div class="before_title">
											<span><?php echo $lang['words']['our']; ?></span>
											<span class="c-<?php echo $color; ?>"><?php echo $lang['rewards']['product']; ?></span>
										</div>
										<h1><?php echo $lang['rewards']['description']; ?></h1>
										<p><?php echo $lang['rewards']['introduction']; ?></p>
										<div class="z_apps">
											<div class="item__app mb-3 mb-sm-0 bg_apple bg-<?php echo $color; ?>">
												<div class="media">
													<i class="tio time icon"></i>
													<div class="media-body">
														<div class="txt">
															<span><?php echo $lang['words']['coming_soon']; ?></span>
															<h4>Q3 2022</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
<?php include '../layout/footer.php'; ?>
