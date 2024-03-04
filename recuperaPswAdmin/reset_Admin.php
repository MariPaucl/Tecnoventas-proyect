<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../recuperaPsw/style.css">

    <link rel="website icon" type="png" href="../imagenes/Tecnoventas.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <title>Cambiar Contraseña</title>
</head>
<body>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cambiar Contraseña</div>
                    <div class="card-body">
                        <form action="reset_Admin.php" method="POST" name="login" onsubmit="return validateForm()">

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Nueva Contraseña</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required autofocus>
                                </div>
                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>
                                <div class="col-md-6">
                                    <input type="password" id="confirm" class="form-control" name="confirm" required>
                                <i class="bi bi-eye-slash" id="togglePassword"></i>
                            </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Cambiar" name="reset" id="reset">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>
<?php
    if(isset($_POST["reset"])){
        include('../registro/conexion.php');
        $psw = $_POST["password"];

        $Email = $_SESSION['correoAdmin'];

        $hash = md5($psw);

        $sql = mysqli_query($conex, "SELECT * FROM administradores WHERE correoAdmin='$Email'");
        $query = mysqli_num_rows($sql);
        $fetch = mysqli_fetch_assoc($sql);

        if($Email){
            $new_pass = $hash;
            mysqli_query($conex, "UPDATE administradores SET passAdmin='$new_pass' WHERE correoAdmin='$Email'");
            unset($_SESSION['correoAdmin']);
            unset($_SESSION['sessAdminID']);
            ?>
            <script>
                window.location.replace("../sesionAdmin.php");
                alert("<?php echo "Tu contraseña se ha actualizado correctamente :)"?>");
            </script>
            <?php
        }else{
            ?>
            <script>
                alert("<?php echo "Por favor intenta de nuevo :("?>");
            </script>
            <?php
        }
    }

?>
<script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const confirm = document.getElementById('confirm');

    toggle.addEventListener('click', function(){
        if(password.type === "password" && confirm.type === "password"){
            password.type = 'text';
            confirm.type = 'text';
        }else{
            password.type = 'password';
            confirm.type = 'password';
        }
        this.classList.toggle('bi-eye');
    });

    function validateForm() {
        const passwordValue = password.value;
        const confirmValue = confirm.value;

        if (passwordValue !== confirmValue) {
            alert("Las contraseñas no coinciden.");
            return false;
        }

        return true;
    }
</script>
