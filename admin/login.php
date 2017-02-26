<!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>管理员登录</title>
    <link href="../assets/css/adminLogin.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <script src="../assets/js/jquery-2.0.3.min.js"></script>
    <style>
        body.login {
            background-color: #427394;
        }
    </style>
</head>
<body class='login'>
<div class='wrapper'>
    <div class='row'>
        <div class='col-lg-12'>
            <div class='brand text-center'>
                <h1>
                    <div class='logo-icon'>
                        <i class='icon-beer'></i>
                    </div>
                    管理系统
                </h1>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-lg-12'>
            <form action="doLogin.php" method="post">
                <fieldset class='text-center'>
                    <legend>管理员登录</legend>
                    <div class='form-group'>
                        <input class='form-control' placeholder='账号' name="username" type='text'>
                    </div>
                    <div class='form-group'>
                        <input class='form-control' placeholder='密码' name="password" type='password'>
                    </div>
                    <input class="btn btn-default" type="submit" value="登录">
                    <br>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>
