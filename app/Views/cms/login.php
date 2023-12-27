<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CMS</title>
    <link rel="stylesheet" href="<?= base_url('backend/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('backend/css/style.css')?>">
</head>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height:100vh">
        <div class="card-login" style="width:23rem;">
            <div class="c-header"><h4>Login CMS</h4></div>
            <form action="" method="post">
            <div class="c-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="user" id="user" class="form-text">
                    <div id="check-user" style="color:red; font-size:0.8rem"></div>
                </div>
                <div class="form-group mt-3">
                    <label for="">Password</label>
                    <input type="password" name="pass" id="pass" class="form-text">
                    <div id="check-pass" style="color:red; font-size:0.8rem"></div>
                </div>
                <div class="form-group mt-3">
                    <label for="ssee-pass"><input type="checkbox" name="" id="see-pass">Lihat Password</label>
                </div>
            </div>
            <div class="c-footer text-center p-3">
                <input type="submit" value="Login" id="login" class="btn btn-submit">
                <button id="clear" class="btn btn-cancel">Hapus</button>
                
            </div>
            </form>
        </div>
    </div>
<body>
    <script src="<?= base_url('backend/js/jquery.min.js')?>"></script>
    <script src="<?= base_url('backend/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('backend/js/main.js')?>"></script>
</body>
</html>