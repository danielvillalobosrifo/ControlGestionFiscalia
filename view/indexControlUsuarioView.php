<!DOCTYPE html PUBLIC "
<html lang=">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Control de Usuarios</title>
    <meta charset="utf-8"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="script/jquery.validate.js" type="text/javascript"></script>
    <link href="style/estilos.css" rel="stylesheet" type="text/css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
    <div id="contenedor">
      <header>
          <img src="images/logo.gif" alt=""/>
        <a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comprometidos con la gente, así avanza la occidente</a>
      </header>
      <nav><h2>Control de Usuarios</h2>
      </nav>
      <section id="contenido">
        <form action="<?php echo $helper->url("ControlUsuario","crear"); ?>" method="post" class="col-lg-5" id="FrmUsuario">
            <h3>Añadir usuario</h3>
            <hr/>               
            Rut Usuario: <input type="text" name="rut" class="form-control"/>
            Nombre Usuario: <input type="text" name="nombre" class="form-control"/>
            <input type="submit" value="enviar" class="btn btn-success"/>
        </form>
        <article>
          <h2></h2>
        </article>
      </section>
      <aside>
          <table id="tablaaside">           
              <tbody><tr><td>
                <marquee></marquee>
              </td><td>
            </td></tr><tr>
              <td>
                <marquee direction="RIGHT"></marquee>
              </td><td>
            </td></tr>
            <tr>
              <td>
              </td><td>
            </td></tr>
            
              <tr><td>
                
              </td>
          </tr></tbody></table>     
        
      </aside>
      <footer><h2>UGI RM Occidente - 2017</h2></footer>
    </div>
</body></html>