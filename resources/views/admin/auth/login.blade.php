
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    {!! HTML::style('/stylesheet/bootstrap.min.css') !!}
    {!! HTML::style('/stylesheet/font-awesome.min.css') !!}
    {!! HTML::style('/stylesheet/admin/categories.css') !!}
    {!! HTML::style('/stylesheet/admin/index.css') !!}
</head>
<body>
    <div class="container">
        <div class="row login">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-md-offset-1 col-lg-offset-1">
                <div class="logo-s">
                    {!! HTML::image('/images/site/fc-icon.png') !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
                <div class="login-system">
                    <form action="" method="POST" role="form">
                        <legend class="tit-logs">LOG IN FCBARCELONA.COM</legend>
                        <div class="form-group">
                            <label for="">Your name</label>
                            <input type="text" class="form-control" id="" placeholder="Input your user name...">
                        </div>
                         <div class="form-group">
                            <label for="">Your password</label>
                            <input type="password" class="form-control" id="" placeholder="Input your password...">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style type="text/css">
    body{
        background: url('../../images/site/noucamp.jpg') no-repeat;
    }
    .login{
        margin-top: 10%;
    }
    .login-system{
        padding: 15px;
        background: rgba(0,0,0,0.5);
        color: #ddd;
        margin-bottom: 15px;
    }
    .logo-s{
        padding-right: 10px;
        border-right: 3px solid #ddd;
    }
    .logo-s img{
        max-width: 100%;
        max-height: 100%;
    }
    .tit-logs{
        font-family: "AvoBold", sans-serif;
        font-size: 2em;
        color: #01bee7;
    }
    input[type=text], input[type=password]{
        padding: 5px;
        background: transparent;
        color: #fff;
        font-family: "AvoBold", sans-serif;
        letter-spacing: 1px;
        background: rgba(255,255,255,0.1);
        border: 1px solid #01bee7;
    }
    .btn{
        background: #01bee7;
        color: #fff;
        border: 0;
        padding: 10px;
        font-weight: bold;
        letter-spacing: 1px;
        -webkit-transition: all ease-in 0.2s;
        -o-transition: all ease-in 0.2s;
        transition: all ease-in 0.2s;
    }
    .btn:hover{
        color: #fff;
        background: #007c98;
        -webkit-transition: all ease-in 0.2s;
        -o-transition: all ease-in 0.2s;
        transition: all ease-in 0.2s;
    }
    @media only screen and (min-width: 240px) and (max-width: 991px) {
        .logo-s{
            text-align: center;
            padding-bottom: 15px;
            border: 0;
        }
        .logo-s img{
            width: 20%;
        }
    }
</style>