<?php

require_once '../i18n/en.php';

$script = basename($_SERVER["SCRIPT_FILENAME"], '.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'unsafe-inline' 'self'; style-src 'unsafe-inline' 'self'; font-src data: 'self'">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="robots" content="noarchive, noimageindex">
		<meta name="msapplication-TileColor" content="#ffffff">
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

		<link rel="icon" type="image/png" href="/img/Ablota_Logo_Transparent.png">
		<link rel="apple-touch-icon" href="/img/Ablota_Logo_Transparent.png">
		<link rel="preload" href="/css/vendor.css" as="style">
		<link rel="preload" href="/css/theme.css" as="style">
		<link rel="preload" href="/css/app.css" as="style">
		<link rel="preload" href="/js/vendor-1.js" as="script">
		<link rel="preload" href="/js/vendor-2.js" as="script">
		<link rel="preload" href="/js/theme.js" as="script">
		<link rel="stylesheet" href="/css/vendor.css" type="text/css">
		<link rel="stylesheet" href="/css/theme.css" type="text/css">
		<link rel="stylesheet" href="/css/app.css" type="text/css">
		<noscript>
			<link rel="preload" href="/css/noscript.css" as="style">
			<link rel="stylesheet" href="/css/noscript.css" type="text/css">
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
								<img class="logo" src="/img/<?php echo $logo; ?>" alt="Logo" />
							</a>
							<button class="navbar-toggler menu ripplemenu bg-<?php echo $color; ?>-active" type="button" data-toggle="collapse"
								data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
								aria-label="Toggle navigation">
								<svg viewBox="0 0 64 48">
									<path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
									<path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
									<path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
								</svg>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
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
