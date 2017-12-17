<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Ejemplo PHP MySQLi POO MVC</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script/jquery.validate.js" type="text/javascript"></script>
        <style type="text/css">
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
            
            .userform{width: 400px;}
            .userform input{width:265px;}
            .userform p {
            width: 100%;
            }
            .userform label {
            width: 125px;
            color: #333;
            float: left;
            }
            input.error {
            border: 1px dotted red;
            }
            label.error{
            width: 100%;
            color: red;
            font-style: italic;
            margin-left: 135px;
            margin-bottom: 5px;
            text-align:left;
            }
            .userform input.submit {
                margin-left: 120px;
            }
        </style>
        <script type="text/javascript">
$(document).ready(function() {
    $("#FrmUsuario").validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true
            },
            url: {
                required: false,
                url: true
            },
            username: {
                required: true,
                minlength: 6
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            },
            agree: "required"
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address",
            phone: {
                required: "Please enter your phone number",
                number: "Please enter only numeric value"
            },
            url: {
                url: "Please enter valid url"
            },
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 6 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Please enter the same password as above"
            },
            agree: "Please accept our policy"
        }
    });
});
</script>

    </head>
    <body>
        <form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-5" id="FrmUsuario">
            <h3>Añadir usuario</h3>
            <hr/>               
            Nombre: <input type="text" name="nombre" class="form-control"/>
            Apellido: <input type="text" name="apellido" class="form-control"/>
            Email: <input type="text" name="email" class="form-control"/>
            Contraseña: <input type="password" name="password" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        
        <div class="col-lg-7">
            <h3>Usuarios</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php foreach($allusers as $user) {?>
                <?php echo $user->id; ?> -
                <?php echo $user->nombre; ?> -
                <?php echo $user->apellido; ?> -
                <?php echo $user->email; ?>
                <div class="right">
                    <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
                </div>
                <hr/>
            <?php } ?>
        </section>
		
		 <?php if(isset($allproducts) && count($allproducts)>=1) {?>
		<div class="col-lg-7">
            <h3>Productos</h3>
            <hr/>
        </div>
		 <section class="col-lg-7 producto" style="height:400px;overflow-y:scroll;">
            <?php foreach($allproducts as $product) {?>
                <?php echo $product->id; ?> -
                <?php echo $product->nombre; ?> -
                <?php echo $product->precio; ?> -
                <?php echo $product->marca; ?>
                <hr/>
            <?php } ?>
        </section>
		 <?php } ?>
        <footer class="col-lg-12">
            <hr/>
           Ejemplo PHP MySQLi POO MVC - Víctor Robles - <a href="http://victorroblesweb.es">victorroblesweb.es</a> - Copyright &copy; <?php echo  date("Y"); ?>
        </footer>
    </body>
</html>