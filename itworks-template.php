<!doctype html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<style>
		body{
			background: #fff;
			font-family: 'Ubuntu', sans-serif;
		}
		main{
			height: 100vh;
			width: 100vw;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}
	</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<main>
		<strong><?php _e( 'It works!', 'itworks' ) ?></strong>
		<div>¯\_(ツ)_/¯</div>
	</main>

<?php wp_footer(); ?>
</body>
</html>
