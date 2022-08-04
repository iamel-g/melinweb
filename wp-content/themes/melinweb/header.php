<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="author" content="Melissa Galvan" />
	<meta name="description" content="Site CV de Melissa Galvan, développeuse web en formation." />
	<meta name="keywords" content="développement web, portfolio, développeur web, java" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'twentyseventeen'); ?></a>
		<header id="masthead" class="site-header" role="banner">
			<nav id="nav-main" class="navbar my-nav navbar-expand-lg navbar-light bg-light p-0">
				<div class="navbar-brand mx-2">
					<a href="#" class="navbar-brand-link">inweb</a>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end dropdown" id="navbarNav">
					<ul class="nav navbar-nav mt-2 mt-lg-0 px-3 pb-md-1 pb-lg-0 pb-1">
						<li class="nav-item active mx-lg-4 mb-2 mb-md-0 mb-lg-0">
							<a class="nav-link" href="#mon-cv">Mon CV <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item mx-lg-4 mb-2 mb-md-0 mb-lg-0">
							<a class="nav-link" href="#projets">Projets</a>
						</li>
						<li class="nav-item mx-lg-4 mb-2 mb-md-0 mb-lg-0">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header><!-- #masthead -->

		<div class="site-content-contain">
			<div id="content" class="site-content">