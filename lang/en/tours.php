<?php // var_dump($_SERVER);die;?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Bicitours - Viña del Mar</title>

        <meta name="description" content="Tours in Valparaiso, Bikes, Bikes in Valparaiso, Bikes in Vina del Mar, Tours in Vina del mar">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
        <!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="/css/ie.css"/><!--<![endif]-->
        <!--[if lt IE 9]> <script src="/js/respond.min.js"></script><!--<![endif]-->
        <!--[if lt IE 9]><script src="/js/modernizr.custom.js"></script><!--<![endif]-->


    </head>
    <body>
        <?php include_once "partials/header.php" ?>
        <?php
			switch ($_GET['t']) {
				case 'vina':
					include_once "partials/routes/vina.php";
					break;
				case 'concon':
					include_once "partials/routes/concon.php";
					break;
				default:
					include_once "partials/routes/vina.php";
					break;
			}
		?>
		<?php include_once "partials/footer.php"?>
    </body>
</html>
<script src="/js/jquery.min.js"></script>
<script src='/js/bootstrap.min.js'></script>