<!DOCTYPE html>
<html>
    <head>
        <title>Royalty Ceramic</title>
        <style> 
            .login-form {
                width: 25rem;
                height: 18.75rem;
                position: fixed;
                top: 50%;
                margin-top: -9.375rem;
                left: 50%;
                margin-left: -12.5rem;
                background-color: #ffffff;
                opacity: 0;
                -webkit-transform: scale(.8);
                transform: scale(.8);
            }
        </style>
    <div class="login-form padding20 block-shadow" style="opacity: 1; transform: scale(1); transition: 0.5s;">
        <form id="formulario" action="<?php echo URL; ?>inicio/Verificar" method="post">
            <h1 class="text-light">Royalty Ceramic</h1>
            <hr class="thin">
            <br>
            <div class="input-control select full-size" data-role="select" id="user_login">
                <label >Usuario:</label>
                <input type="text" name="usuario" id="user" style="padding-right: 36px;">

                <button class="button helper-button clear" tabindex="-1" type="button"><span class="mif-cross"></span></button>
            </div>
            <br>
            <br>
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Contraseña:</label>
                <input type="password" name="contra" id="pas" style="padding-right: 36px;">
                <button class="button helper-button reveal" tabindex="-1" type="button"><span class="mif-looks"></span></button>
            </div>
            <br>
            <br>
            <div class="form-actions">
                <button type="submit" id="botoniniciar" class="button primary">Acceder</button>
                <button type="button" class="button link">Recuperar contraseña</button>
            </div>
        </form>
    </div>
    <script>
        function Iniciar()
        {
            var user = $("#user").val();
            var pas = $("#pas").val();
            $.post("<?php echo URL; ?>inicio/Verificar", {"usuario": user, "contra": pas, "withouttem": 1}, function (data) {

                if (data == "correcto")
                {
                    alert(data);
                    window.location("<?php echo URL; ?>clasificador");
                }
            });
        }
    </script>
