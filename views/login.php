<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="d-flex align-items-center justify-content-center">


        <form id="login-form" class="m-2" action="Artist/store" method="POST">
            <div class="text-center mb-4">
                <strong>Login</strong>
            </div>

            <?php if(isset($alert)) { ?>
                <div class="alert alert-danger text-center">
                    <?= $alert ?>
                </div>
            <?php } ?>

            <fieldset>
                <div class="form-group">
                    <label for="">Usuario:</label>
                    <input type="usuario" name="user" value="" class="form-control">
                </div>
            </fieldset>
            <fieldset>
                <div class="form-group">
                    <label for="">Password:</label>
                    <input type="password" name="pass" value="" class="form-control">
                </div>
            </fieldset>
            <button type="submit" name="button" class="btn btn-primary btn-block">Crear artista</button>
        </form>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
