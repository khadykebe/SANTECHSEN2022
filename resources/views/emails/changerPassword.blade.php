<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Add Your favicon here -->
    <!--<link rel="icon" href="img/favicon.ico">-->

    <title>SANTECHSEN</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('Utilisateurs/css/bootstrap.min.css')}}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('Utilisateurs/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('Utilisateurs/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">


    <!-- Custom styles pour this template -->
    <link rel="stylesheet" href="{{asset('Utilisateurs/css/style.css')}}">

</head>
<body>


    <div class="container  ">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <img src="../Utilisateurs/img/image001.jpg" alt="logo">
            </div>
            <div class="col-sm-4 col-xs-12">
                <p style="margin-top:5% ; color:black;size:30px ;text-align: center"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+221 33 836 52 63 &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;santechsen2022@gmail.com
                </p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <ul class="list-inline social-icon  " style="margin-top: 5%;text-align: end ">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        @if(session()->get('message'))
        <div class="container">
            <div class="row" style="margin-top:10%">
                <div class="col-sm-8 offset-3">
                    <div class="card mb-3 ">
                        <div class="row no-gutters ">
                            <div class="col-md-4">
                                <img src="./storage/images/1659876379.jpg" class="card-img" alt="" style="width: 300px; height:250px">
                            </div>
                            <div class="col-md-6 offset-1">
                                <div class="card-body ">
                                    <h2>Réinitialisation </h2>
                                    <div class="alert alert-secondary">
                                        {{session()->get('message') }}
                                    </div>
                                    <form action="{{ route('code.confirm') }}" method="post">
                                        @csrf
                                        <label for=""></label>
                                        <input type="text" name="code" id="code" class="form-control" placeholder="code vérification" aria-describedby="helpId"><br>
                                        <button class="btn btn-primary" href="#" type="submit">envoyer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if(session()->get('messag'))

        <div class="container">
            <div class="row" style="margin-top:10%">
                <div class="col-sm-8 offset-3">
                    <div class="card mb-3 ">
                        <div class="row no-gutters ">
                            <div class="col-md-4">
                                <img src="./storage/images/1659876379.jpg" class="card-img" alt="" style="width: 260px; height:300px">
                            </div>
                            <div class="col-md-6 offset-1">
                                <di class="card-body">
                                    <h2>Réinitialisation </h2>
                                    <form action="{{ route('changer.pass') }}" method="post">
                                        @csrf
                                        <label for=""></label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="nouveau mot de passe" aria-describedby="helpId"><br>
                                        <input type="password" name="confirmePasword" id="confirmePasword" class="form-control" placeholder="confirmer votre mot de passe" aria-describedby="helpId"><br>
                                        <button class="btn btn-primary" href="#" type="submit">envoyer</button>
                                    </form>
                                </di>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif


        <script src="{{asset('Utilisateurs/js/jquery-2.1.1.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/pace.min.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/classie.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/cbpAnimatedHeader.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/wow.min.js')}}"></script>
        <script src="{{asset('Utilisateurs/js/inspinia.js')}}"></script>
</body>
</html>
