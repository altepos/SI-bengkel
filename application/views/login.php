<!DOCTYPE html>
<html class="bg-gray">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-gray">
        <div class="container"> 
            <div class="form-display"> 

            </div>
            <div class="form-box" id="login-box">
                <div class="header">Sign In</div>
                <form action="../../index.html" method="post">
                    <div class="body">
                        <div class="form-group">
                            <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>          
                        <div class="form-group">
                            <input type="checkbox" name="remember_me"/> Remember me
                        </div>
                    </div>
                    <div class="footer">                                                               
                        <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                        <!-- forget password -->
                        <p><a href="#">I forgot my password</a></p>
                    </div>
                </form>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>