<?php

require_once '../i18n/en.php';

$title = $lang['store']['title'];
$description = $lang['store']['description'];
$color = 'blue2';
$logo = 'Ablota_Store_Icon.png';

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
											<span class="c-<?php echo $color; ?>"><?php echo $lang['store']['product']; ?></span>
										</div>
										<h1><?php echo $lang['store']['description']; ?></h1>
										<p><?php echo $lang['store']['introduction']; ?></p>
										<div class="z_apps">
											<a href="https://ablota.com/repo/Ablota_Store.apk" class="item__app mb-3 mb-sm-0 bg_apple bg-<?php echo $color; ?>" download>
												<div class="media">
													<i class="tio android icon"></i>
													<div class="media-body">
														<div class="txt">
															<span><?php echo $lang['words']['download_for']; ?></span>
															<h4>Android</h4>
														</div>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="row d-flex">
								<div class="col-md-6 col-lg-4 d-none d-sm-block order-1 order-sm-1">
									<div class="item_box item_one">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/bitwarden.png" />
										</div>
										<h3>Bitwarden</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['productivity']; ?></p>
									</div>
									<div class="item_box item_two">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/newpipe.png" />
										</div>
										<h3>NewPipe</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['video_players']; ?></p>
									</div>
									<div class="item_box item_three">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/tutanota.png" />
										</div>
										<h3>Tutanota</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['communication']; ?></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 order-3 order-sm-2" data-aos="fade-up" data-aos-delay="0">
									<div class="app_mobile text-center">
										<img class="apoo" alt="" src="/img/store/home.png" />
										<p class="text-notice"><?php echo $lang['store']['notice']; ?></p>
									</div>
								</div>
								<div class="col-md-6 col-lg-4 d-none d-sm-block order-2 order-sm-3">
									<div class="item_box item_four">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/collabora-office.png" />
										</div>
										<h3>Collabora Office</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['productivity']; ?></p>
									</div>
									<div class="item_box item_five">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/tor-browser.png" />
										</div>
										<h3>Tor Browser</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['communication']; ?></p>
									</div>
									<div class="item_box item_six">
										<div class="img_bbo">
											<img alt="" src="/img/store/icons/mullvad-vpn.png" />
										</div>
										<h3>Mullvad VPN</h3>
										<p class="c-<?php echo $color; ?>"><?php echo $lang['words']['tools']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="section__showcase margin-t-12">
						<div class="container">
							<div class="row justify-content-center text-center">
								<div class="col-md-8 col-lg-5">
									<div class="title_sections">
										<div class="before_title">
											<span><?php echo $lang['words']['our']; ?></span>
											<span class="c-<?php echo $color; ?>"><?php echo $lang['words']['customers']; ?></span>
										</div>
										<h2><?php echo $lang['store']['advantages']['title']; ?></h2>
										<p><?php echo $lang['store']['advantages']['text']; ?></p>
									</div>
								</div>
							</div>
							<div class="block__tab">
								<ul class="nav nav-pills justify-content-center" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="advantages-end-customers-tab" data-toggle="pill" href="#advantages-end-customers" role="tab"
											aria-controls="advantages-end-customers" aria-selected="true">
											<div class="icon">
												<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
													</g>
												</svg>
											</div>
											<h3><?php echo $lang['store']['advantages']['end_customers']['title']; ?></h3>
											<div class="prog bg-blue2"></div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="advantages-developers-tab" data-toggle="pill" href="#advantages-developers" role="tab"
											aria-controls="advantages-developers" aria-selected="false">
											<div class="icon">
												<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
														<rect fill="#000000" opacity="0.3" x="12" y="17" width="10" height="2" rx="1"></rect>
													</g>
												</svg>
											</div>
											<h3><?php echo $lang['store']['advantages']['developers']['title']; ?></h3>
											<div class="prog bg-blue2"></div>
										</a>
									</li>
									<li class="nav-item" role="presentation">
										<a class="nav-link" id="advantages-companies-tab" data-toggle="pill" href="#advantages-companies" role="tab"
											aria-controls="advantages-companies" aria-selected="false">
											<div class="icon">
												<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<path d="M13.5,21 L13.5,18 C13.5,17.4477153 13.0522847,17 12.5,17 L11.5,17 C10.9477153,17 10.5,17.4477153 10.5,18 L10.5,21 L5,21 L5,4 C5,2.8954305 5.8954305,2 7,2 L17,2 C18.1045695,2 19,2.8954305 19,4 L19,21 L13.5,21 Z M9,4 C8.44771525,4 8,4.44771525 8,5 L8,6 C8,6.55228475 8.44771525,7 9,7 L10,7 C10.5522847,7 11,6.55228475 11,6 L11,5 C11,4.44771525 10.5522847,4 10,4 L9,4 Z M14,4 C13.4477153,4 13,4.44771525 13,5 L13,6 C13,6.55228475 13.4477153,7 14,7 L15,7 C15.5522847,7 16,6.55228475 16,6 L16,5 C16,4.44771525 15.5522847,4 15,4 L14,4 Z M9,8 C8.44771525,8 8,8.44771525 8,9 L8,10 C8,10.5522847 8.44771525,11 9,11 L10,11 C10.5522847,11 11,10.5522847 11,10 L11,9 C11,8.44771525 10.5522847,8 10,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 L8,14 C8,14.5522847 8.44771525,15 9,15 L10,15 C10.5522847,15 11,14.5522847 11,14 L11,13 C11,12.4477153 10.5522847,12 10,12 L9,12 Z M14,12 C13.4477153,12 13,12.4477153 13,13 L13,14 C13,14.5522847 13.4477153,15 14,15 L15,15 C15.5522847,15 16,14.5522847 16,14 L16,13 C16,12.4477153 15.5522847,12 15,12 L14,12 Z" fill="#000000"></path>
														<rect fill="#FFFFFF" x="13" y="8" width="3" height="3" rx="1"></rect>
														<path d="M4,21 L20,21 C20.5522847,21 21,21.4477153 21,22 L21,22.4 C21,22.7313708 20.7313708,23 20.4,23 L3.6,23 C3.26862915,23 3,22.7313708 3,22.4 L3,22 C3,21.4477153 3.44771525,21 4,21 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
											</div>
											<h3><?php echo $lang['store']['advantages']['companies']['title']; ?></h3>
											<div class="prog bg-blue2"></div>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="advantages-end-customers" role="tabpanel" aria-labelledby="advantages-end-customers-tab">
										<section class="serv_app section__priorities">
											<div class="container">
												<div class="row justify-content-center">
													<div class="col-lg-5 mb-4 mb-lg-0">
														<div class="amo_pic bg-<?php echo $color; ?>">
															<img alt="" src="/img/store/app.png" />
														</div>
													</div>
													<div class="col-lg-6 my-auto mx-auto">
														<div class="title_sections mb-0">
															<p><?php echo $lang['store']['advantages']['end_customers']['text']; ?></p>
															<div class="point__item">
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio apps"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['end_customers']['benefit_1']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio dollar"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['end_customers']['benefit_2']; ?></h3>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio new_york"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['end_customers']['benefit_3']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio protection"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['end_customers']['benefit_4']; ?></h3>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="tab-pane fade" id="advantages-developers" role="tabpanel" aria-labelledby="advantages-developers-tab">
										<section class="serv_app section__priorities">
											<div class="container">
												<div class="row justify-content-center">
													<div class="col-lg-5 mb-4 mb-lg-0">
														<div class="amo_pic bg-<?php echo $color; ?>">
															<img alt="" src="/img/store/sources.png" />
														</div>
													</div>
													<div class="col-lg-6 my-auto mx-auto">
														<div class="title_sections mb-0">
															<p><?php echo $lang['store']['advantages']['developers']['text']; ?></p>
															<div class="point__item">
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio gym"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['developers']['benefit_1']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio flash"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['developers']['benefit_2']; ?></h3>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio wallet"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['developers']['benefit_3']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio trending_up"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['developers']['benefit_4']; ?></h3>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="tab-pane fade" id="advantages-companies" role="tabpanel" aria-labelledby="advantages-companies-tab">
										<section class="serv_app section__priorities">
											<div class="container">
												<div class="row justify-content-center">
													<div class="col-lg-5 mb-4 mb-lg-0">
														<div class="amo_pic bg-<?php echo $color; ?>">
															<img alt="" src="/img/store/manager.png" />
														</div>
													</div>
													<div class="col-lg-6 my-auto mx-auto">
														<div class="title_sections mb-0">
															<p><?php echo $lang['store']['advantages']['companies']['text']; ?></p>
															<div class="point__item">
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio route"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['companies']['benefit_1']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio launch"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['companies']['benefit_2']; ?></h3>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="0">
																		<div class="icon__ch">
																			<i class="tio label"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['companies']['benefit_3']; ?></h3>
																	</div>
																	<div class="col-md-6 item__ico" data-aos="fade-up" data-aos-delay="100">
																		<div class="icon__ch">
																			<i class="tio key"></i>
																		</div>
																		<h3><?php echo $lang['store']['advantages']['companies']['benefit_4']; ?></h3>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</section>
				</main>
<?php include '../layout/footer.php'; ?>
