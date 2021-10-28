<?php

require_once __DIR__ . '/../i18n/en.php';

$script = basename($_SERVER["SCRIPT_FILENAME"], '.php');

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'unsafe-inline' 'self'; style-src 'unsafe-inline' 'self'; font-src data: 'self'">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noarchive, noimageindex">
		<meta name="theme-color" content="#ffffff">
		<meta name="author" content="Ablota, StarApps GmbH">
		<meta name="keywords" content="ablota,ablota store,ablota rewards,store,rewards,starapps,privacy,quality,open source,fairness,transparency,ethics,play store,app store,f-droid,android,ios">
		<?php if(!empty($description)) { ?>
		<meta name="description" content="<?php echo $description; ?>">
		<meta property="og:description" content="<?php echo $description; ?>">
		<?php } else { ?>
		<meta name="description" content="<?php echo $lang['index']['title']; ?>">
		<meta property="og:description" content="<?php echo $lang['index']['title']; ?>">
		<?php } ?>
		<meta property="og:title" content="<?php if(!empty($title)) { echo $title . ' | '; } ?>Ablota">
		<meta property="og:url" content="https://ablota.com/<?php echo $script; ?>">
		<meta property="og:image" content="https://ablota.com/img/<?php echo $logo; ?>">

		<title><?php if(!empty($title)) { echo $title . ' | '; } ?>Ablota</title>

		<link rel="manifest" href="/manifest.json?v=20211028">
		<link rel="icon" type="image/png" href="/favicon-32x32.png?v=20211028">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png?v=20211028">
		<link rel="preload" href="/css/vendor.css?v=20211028" as="style">
		<link rel="preload" href="/css/theme.css?v=20211028" as="style">
		<link rel="preload" href="/css/app.css?v=20211028" as="style">
		<link rel="preload" href="/js/vendor-1.js?v=20211028" as="script">
		<link rel="preload" href="/js/vendor-2.js?v=20211028" as="script">
		<link rel="preload" href="/js/theme.js?v=20211028" as="script">
		<link rel="preload" href="/img/Ablota_Logo.png?v=20211028" as="image">
		<link rel="preload" href="/fonts/The-Icon-of.woff2?w2v7hx" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/fonts/text-font/CircularStd-Black.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/fonts/text-font/CircularStd-Bold.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/fonts/text-font/CircularStd-Book.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="preload" href="/fonts/text-font/CircularStd-Medium.woff2" as="font" type="font/woff2" crossorigin>
		<link rel="stylesheet" href="/css/vendor.css?v=20211028" type="text/css">
		<link rel="stylesheet" href="/css/theme.css?v=20211028" type="text/css">
		<link rel="stylesheet" href="/css/app.css?v=20211028" type="text/css">
		<noscript>
			<link rel="preload" href="/css/noscript.css?v=20211028" as="style">
			<link rel="stylesheet" href="/css/noscript.css?v=20211028" type="text/css">
		</noscript>
	</head>
	<body class="selection-<?php echo $color; ?>">
		<div id="wrapper">
			<div id="content">
				<header class="header-nav-center header_ch_left active-<?php echo $color; ?>" id="myNavbar">
					<div class="container">
						<div class="alert alert-info fade show d-none noscript-show-flex" role="alert">
							<?php echo $lang['header']['noscript']; ?>
						</div>
						<nav class="navbar navbar-expand-lg navbar-light px-sm-0">
							<a class="navbar-brand" href="/">
								<img class="logo" src="/img/<?php echo $logo; ?>?v=20211028" alt="Logo">
							</a>
							<button class="navbar-toggler menu ripplemenu bg-<?php echo $color; ?>-active" type="button" data-toggle="collapse"
								data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false"
								aria-label="<?php echo $lang['words']['toggle_navigation']; ?>">
								<svg viewBox="0 0 64 48">
									<path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
									<path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
									<path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
								</svg>
							</button>
							<div class="collapse navbar-collapse" id="navbar-content">
								<ul class="navbar-nav mr-auto nav-pills">
									<li class="nav-item">
										<a class="nav-link<?php echo $script === 'index' ? ' active' : ''; ?>" href="/">Ablota</a>
									</li>
									<li class="nav-item">
										<a class="nav-link<?php echo $script === 'store' ? ' active' : ''; ?>" href="/store"><?php echo $lang['store']['title']; ?></a>
									</li>
									<li class="nav-item">
										<a class="nav-link<?php echo $script === 'rewards' ? ' active' : ''; ?>" href="/rewards"><?php echo $lang['rewards']['title']; ?></a>
									</li>
								</ul>
								<div class="nav_account">
									<a href="#contact-us"
										class="btn btn_sm_primary border-0 sweep_letter sweep_top bg-<?php echo $color; ?> c-white rounded-pill">
										<div class="inside_item">
											<span data-hover="<?php echo $lang['header']['contact-us']; ?>"><?php echo $lang['header']['contact-us']; ?></span>
										</div>
									</a>
								</div>
							</div>
						</nav>
					</div>
				</header>
