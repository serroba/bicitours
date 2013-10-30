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

        <section class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php include_once "partials/header-navbar.php" ?>
                </div>
                <div class='col-xs-12'>
                    <form class="form-horizontal" action='../../prueba.php'>
                        <div class="form-group">
                            <label for="inputName" class="col-xs-2 col-lg-2 control-label">Nombre</label>
                            <div class="col-xs-9 col-lg-9">
                                <input name='name' type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-xs-2 col-lg-2 control-label">Email</label>
                            <div class="col-xs-9 col-lg-9">
                                <input name='email' type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject" class="col-xs-2 col-lg-2 control-label">Asunto</label>
                            <div class="col-xs-9 col-lg-9">
                                <input name='name' type="text" class="form-control" id="inputSubject" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage" class="col-xs-2 col-lg-2 control-label">Mensaje</label>
                            <div class="col-xs-9 col-lg-9">
                                <textarea name="contenido" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <?php include_once "partials/footer.php" ?>
    </body>
</html>
<script src="/js/jquery.min.js"></script>
<script src='/js/bootstrap.min.js'></script>