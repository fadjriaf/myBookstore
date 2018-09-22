<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" href="img/single-logo.png">

        <title>myBookstore - Forgot Password</title>

        <!-- Google-Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>


        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="../css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="../assets/ionicon/css/ionicons.min.css" rel="stylesheet" /> 

        <!-- Custom styles for this template -->
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/helper.css" rel="stylesheet">
        <link href="../css/style-responsive.css" rel="stylesheet" />

        <style>
            body {
                background-image: url("../img/wpp.jpg");
                background-size: 1920px 1080px;
            }
        </style>

</head>

    <body>

        <div class="wrapper-page animated fadeInDown">
            <div class="panel panel-color panel-primary">

                <div class="panel-heading"> 
                   <h3 class="text-center m-t-10">Forgot Passwprd</h3>
                </div> 

                <br>

                <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}

                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Masukkan <b>Email</b> dan instruksi akan dikirimkan kepada Anda!
                    </div>

                    <label for="email" class="control-label">E-Mail Address</label>
                    <div class="form-group m-b-0"> 
                        <div class="input-group"> 
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Reset</button> </span> 
                        </div> 
                    </div> 
                    
                </form>

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/pace.min.js"></script>
        <script src="../js/wow.min.js"></script>
        <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>

        <!--common script for all pages-->
        <script src="../js/jquery.app.js"></script>

    </body>

</html>
