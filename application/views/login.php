<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url(); ?>assets/images/logo.png">
    <title>Masuk</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/signin.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="<?= base_url(); ?>assets/ionicons/css/ionicons.min.css" rel="stylesheet">
    <style type="text/css">
        .btn{
            cursor: no-drop;
        }
    </style>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
</head>

<body>
    <form class="form-signin" method="post" action="<?= site_url(); ?>login/prosesLogin">
        <div class="text-center mb-4">
            <img class="mb-4" src="<?= base_url(); ?>assets/images/logo.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 font-weight-normal">APARAT</h1>
            <p>APlikasi ARsip surAT</p>
        </div>

        <div class="input-group mb3">
            <input type="text" id="id" name="id" class="form-control" placeholder="ID" required="" autofocus="">
        </div>

        <div class="input-group mb3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" required="">
        </div>

        <button class="btn btn-lg btn-outline-primary btn-block disabled" type="submit">Masuk <i class="ion-log-in"></i></button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; APARAT 2017-2018</p>
    </form>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#password").keyup(function(){
                $(".btn").css("cursor", "pointer");
                $(".btn").removeClass("disabled");
                if ($(this).val().length === 0) {
                    $(".btn").css("cursor", "no-drop");
                    $(".btn").addClass("disabled");
                }
            });
        });
    </script>
</body>
</html>
