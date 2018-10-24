<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Hungry_Hapa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karla:400,700|Montserrat:300,400,500,600,700,800|Open+Sans:400,600,700,800|Playfair+Display:400,700,900|Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
	
	<link rel="stylesheet" href="style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<?php if(is_home()) : ?>
	
		<!-- here we include our category navigation componenent -->
		<?php get_template_part('template-parts/nav-home'); ?>

		

	<!-- here if we are NOT on a product page, we are going to render 
	out our regular page header -->
	<?php elseif (!is_home()) : ?>

		<?php get_template_part('template-parts/nav-other'); ?>
		
	<?php endif; ?>

	

</div>
	
