<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Factory_Tools
 * @since Factory Tools 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php is_home() ? bloginfo('name') : wp_title(); ?></title>
</head>

<body>
	<div class="container">
		<?php get_header(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	</div>
</body>