<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title><?php bloginfo('name'); ?></title>
        
        <?php wp_head(); ?>

    </head>
    <body>

    	<h1 class="h1-header"><?php bloginfo('name'); ?></h1>
		<p><?php bloginfo('description'); ?></p>

		<?php
			$args 	  = ['theme_location' => 'main_menu'];
			$location = get_nav_menu_locations();
			$menus 	  = wp_get_nav_menu_items($location['main_menu']);
		?>

		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<a class="navbar-brand" href="<?= home_url(); ?>">
				<img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php foreach ($menus as $menu): ?>
						<li class="nav-item active">
							<a class="nav-link" href="<?= $menu->url; ?>">
								<?= $menu->title; ?>
							</a>
						</li>
					<?php endforeach ?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
				</ul>
				<?php get_search_form(); ?>
			</div>
		</nav>

    	