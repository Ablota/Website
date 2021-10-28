<?php

require_once '../i18n/en.php';

$title = $lang['legal']['title'];
$color = 'aquamarine';
$logo = 'Ablota_Logo.png';
$valuesPromises = false;

?>
<?php include '../layout/header.php'; ?>
				<main>
					<section class="pt_banner_inner">
						<div class="container">
							<div class="row justify-content-center text-center">
								<div class="col-md-8 col-lg-6">
									<div class="banner_title_inner margin-b-10">
										<h1 data-aos="fade-up" data-aos-delay="0"><?php echo $lang['legal']['title']; ?></h1>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="imprint" class="margin-b-6">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12">
									<h2><?php echo $lang['imprint']['title']; ?></h2>
									<div class="row justify-content-center">
										<div class="col-md-6 col-12">
											<h3><?php echo $lang['imprint']['address']['title']; ?></h3>
											<p>
												StarApps GmbH<br>
												Sonnenweg 13<br>
												8112 Otelfingen<br>
												<?php echo $lang['imprint']['address']['switzerland']; ?>
											</p>
										</div>
										<div class="col-md-6 col-12">
											<h3><?php echo $lang['imprint']['responsible_person']['title']; ?></h3>
											<p><?php echo $lang['imprint']['responsible_person']['text']; ?></p>
										</div>
										<div class="col-12">
											<p><?php echo $lang['imprint']['text']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section id="privacy-policy" class="margin-b-6">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-12">
									<h2><?php echo $lang['privacy_policy']['title']; ?></h2>
									<p><?php echo $lang['privacy_policy']['text']; ?></p>
									<h3><?php echo $lang['privacy_policy']['introduction']['title']; ?></h3>
									<p><?php echo $lang['privacy_policy']['introduction']['text']; ?></p>
									<h3><?php echo $lang['privacy_policy']['server-location']['title']; ?></h3>
									<p><?php echo $lang['privacy_policy']['server-location']['text']; ?></p>
									<h3><?php echo $lang['privacy_policy']['server-logs']['title']; ?></h3>
									<p class="mb-0"><?php echo $lang['privacy_policy']['server-logs']['text']; ?></p>
									<ul>
										<?php foreach($lang['privacy_policy']['server-logs']['list'] as $entry) { ?>
										<li><?php echo $entry; ?></li>
										<?php } ?>
									</ul>
									<h3><?php echo $lang['privacy_policy']['changes']['title']; ?></h3>
									<p><?php echo $lang['privacy_policy']['changes']['text']; ?></p>
									<h3><?php echo $lang['privacy_policy']['conclusion']['title']; ?></h3>
									<p><?php echo $lang['privacy_policy']['conclusion']['text']; ?></p>
									<p><?php echo $lang['privacy_policy']['date']; ?></p>
								</div>
							</div>
						</div>
					</section>
				</main>
<?php include '../layout/footer.php'; ?>
