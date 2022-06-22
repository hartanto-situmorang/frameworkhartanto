<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reponsive Login Form</title>
    <link rel="stylesheet" href="<?= base_url('aset/login/') ?>style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
</head>

<body>
    <div class="center">
        <div class="row">
            <div class="col-sm-9">
                <div class="d1">
                    <img src="<?= base_url('aset/images/') ?>bground.jpg" alt="">
                </div>
            </div>
            <div class="col-sm-3 login2">
                <div class="login">
                    <div class="bg">
                        <form class="" action="index.html" method="post">
                            <h2 style="text-align: center;">
                                <b>LOGIN</b>
                            </h2>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>