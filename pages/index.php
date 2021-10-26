<?php

$color = 'aquamarine';
$logo = 'Ablota_Logo_Transparent.png';
$valuesPromises = false;

?>
<?php include '../layout/header.php'; ?>
				<main>
					<section class="demo_1 banner_section banner_demo8 demo__charity">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-lg-5 order-2 order-lg-1 my-auto">
									<div class="banner_title">
										<h1><?php echo $lang['index']['description']; ?></h1>
										<p><?php echo $lang['index']['introduction']; ?></p>
									</div>
								</div>
								<div class="col-lg-6 ml-auto order-1 order-lg-1">
									<div class="illustration__ch">
										<img class="img-fluid" alt="" src="/img/index/dream.svg">
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="services_section save__nature margin-t-12">
						<div class="container">
							<div class="row">
								<div class="col-lg-4 item__nature">
									<div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="0">
										<div class="icon--top">
											<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
													<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
													<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
												</g>
											</svg>
										</div>
										<div class="txt">
											<h3><?php echo $lang['index']['privacy']['title']; ?></h3>
											<p><?php echo $lang['index']['privacy']['text']; ?></p>
										</div>
										<!--
										<a href="#" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
											<div class="inside_item">
												<span data-hover="Learn More">Learn More</span>
											</div>
										</a>
										-->
									</div>
								</div>
								<div class="col-lg-4 item__nature active">
									<div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="100">
										<div class="icon--top">
											<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"></path>
													<path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>
										</div>
										<div class="txt">
											<h3><?php echo $lang['index']['quality']['title']; ?></h3>
											<p><?php echo $lang['index']['quality']['text']; ?></p>
										</div>
										<!--
										<a href="#" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
											<div class="inside_item">
												<span data-hover="Learn More">Learn More</span>
											</div>
										</a>
										-->
									</div>
								</div>
								<div class="col-lg-4 item__nature">
									<div class="items_serv sevice_block text-center" data-aos="fade-up" data-aos-delay="200">
										<div class="icon--top">
											<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" fill="#000000" fill-rule="nonzero"></path>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x="11" y="4" width="2" height="16" rx="1"></rect>
												</g>
											</svg>
										</div>
										<div class="txt">
											<h3><?php echo $lang['index']['open_source']['title']; ?></h3>
											<p><?php echo $lang['index']['open_source']['text']; ?></p>
										</div>
										<!--
										<a href="#" class="btn btn_md_primary sweep_top sweep_letter btn__link rounded-pill">
											<div class="inside_item">
												<span data-hover="Learn More">Learn More</span>
											</div>
										</a>
										-->
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="ablota-store" class="serv_app section__priorities padding-t-12">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-5 mb-4 mb-lg-0">
									<div class="amo_pic bg-blue2">
										<img alt="" src="/img/store/home.png" />
									</div>
								</div>
								<div class="col-lg-6 my-auto mx-auto">
									<div class="title_sections mb-0">
										<div class="before_title">
											<span><?php echo $lang['words']['our']; ?></span>
											<span class="c-<?php echo $color; ?>"><?php echo $lang['store']['product']; ?></span>
										</div>
										<h2><?php echo $lang['store']['title']; ?></h2>
										<p><?php echo $lang['store']['description']; ?></p>
										<div class="point__item">
											<div class="row">
												<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
													<div class="icon__ch">
														<i class="tio gym"></i>
													</div>
													<h3><?php echo $lang['index']['store']['empower']; ?></h3>
												</div>
												<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
													<div class="icon__ch">
														<i class="tio protection"></i>
													</div>
													<h3><?php echo $lang['index']['store']['protect']; ?></h3>
												</div>
												<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
													<a href="https://ablota.com/repo/Ablota_Store.apk"
														class="btn mt-3 rounded-pill sweep_top sweep_letter btn_lg_primary c-white scale bg-<?php echo $color;?>" download>
														<i class="tio android"></i>
														<div class="inside_item d-inline-flex">
															<span data-hover="Android"><?php echo $lang['words']['download']; ?></span>
														</div>
													</a>
													<a href="/store"
														class="btn mt-3 rounded-pill sweep_top sweep_letter btn_lg_primary c-white scale bg-<?php echo $color;?>">
														<div class="inside_item d-inline-flex">
															<span data-hover="<?php echo $lang['words']['learn_more']; ?>"><?php echo $lang['words']['learn_more']; ?></span>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="ablota-rewards" class="serv_app section__priorities padding-t-12">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-6 my-auto mx-auto">
									<div class="title_sections mb-0">
										<div class="before_title">
											<span><?php echo $lang['words']['our']; ?></span>
											<span class="c-<?php echo $color; ?>"><?php echo $lang['rewards']['product']; ?></span>
										</div>
										<h2><?php echo $lang['rewards']['title']; ?></h2>
										<p><?php echo $lang['rewards']['description']; ?></p>
										<div class="point__item">
											<div class="row">
												<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
													<div class="icon__ch">
														<i class="tio savings"></i>
													</div>
													<h3><?php echo $lang['index']['rewards']['support']; ?></h3>
												</div>
												<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
													<div class="icon__ch">
														<i class="tio node_multiple"></i>
													</div>
													<h3><?php echo $lang['index']['rewards']['leave']; ?></h3>
												</div>
												<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
													<a href="/rewards"
														class="btn mt-3 rounded-pill sweep_top sweep_letter btn_lg_primary c-white scale bg-<?php echo $color;?>">
														<div class="inside_item d-inline-flex">
															<span data-hover="<?php echo $lang['words']['learn_more']; ?>"><?php echo $lang['words']['learn_more']; ?></span>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-5 mt-4 mt-lg-0 ">
									<div class="amo_pic bg-gold">
										<img alt="" src="/img/rewards/home.png" />
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
<?php include '../layout/footer.php'; ?>
