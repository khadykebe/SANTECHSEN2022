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
    <link rel="stylesheet" href="{{asset('Utilisateurs/css/bootstrap.min.css')}}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('Utilisateurs/css/animate.min.css')}}">

    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('Utilisateurs/css/style.css')}}">
</head>
<body id="page-top">
    <div class="container">
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
    </div>

    <div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right" style="margin-top: 5%">
                        <li><a class="page-scroll" href="/">acceuil</a></li>
                        <li><a class="page-scroll" href="/">services</a></li>
                        <li><a class="page-scroll" href="/">partenaire</a></li>
                        <li><a class="page-scroll" href="/">evenement</a></li>
                        <li><a class="page-scroll" href="/">qui somme nous</a></li>
                        <li><a class="page-scroll" href="/">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>


    <div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @if ($slide1 ??false)
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{ $slide1->contenue }}</h1> <br />
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">lien youtube</a></a>
                        </p>
                    </div>
                    <!-- <div class="carousel-image wow zoomIn">
                    <img src="img/laptop.png" alt="laptop"/>
                </div>-->
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one">
                    <img src="{{ Storage::url($slide1->image) }}" alt="" style="height: 300px;width:1530px">
                </div>
            </div>
            @endif
            @if($slide2 ?? false)
            <div class="item ">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>{{ $slide2->contenue }}</h1> <br />
                        <p>
                            <a class="btn btn-lg btn-primary" href="#" role="button">lien youtube</a></a>
                        </p>
                    </div>
                    <!-- <div class="carousel-image wow zoomIn">
                    <img src="img/laptop.png" alt="laptop"/>
                </div>-->
                </div>
                <!-- Set background for slide in css -->
                <div class="header-back one">
                    <img src="{{ Storage::url($slide2->image) }}" alt="" style="height: 300px;width:1530px">
                </div>
            </div>
            @endif
        </div>
        <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

        <section id="pricing" class="pricing  " style="margin-top: 15%">
            <div class="container">
                <div class="row m-b-lg">
                    <marquee>
                        <CENTER><strong>
                                <h3 style="color: #FF7F00"> Veuillez Remplir les champs suivants pour votre demande</h3>
                            </strong></CENTER>
                    </marquee>
                </div>
                @if(session()->get('message') || session()->get('mess'))
                <div class="row ">
                    <div class="col-sm-3 "></div>
                    <div class="col-sm-5 text-center p-2">
                        @if (session()->get('mess'))
                        <div class="alert alert-secondary">
                            {{session()->get('mess') }}
                        </div>
                        @endif
                        <div class="navy-line"></div>
                        <form action="{{ route('demande_create',$services->id) }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">code validation</label>
                                <input type="text" name="codeValidation" id="codeValidatioon" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <button class="btn btn-primary" type="submit">valider</button><br /><br /><br /><br />
                        </form>
                    </div>
                </div>
                @endif
                <div class="row">
                    <h2> <u>formulaire de demande</u> </h2> <br>
                    <form action="{{route('client_create')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="">Nom</label>
                                <input type="text" name="nomclient" id="nomclient" class="form-control" placeholder="nom" aria-describedby="helpId"><br>
                            </div>
                            <div class="col-sm-4">
                                <label for="">Prenom</label>
                                <input type="text" name="prenomclient" id="prenomclient" class="form-control" placeholder="prenom" aria-describedby="helpId"><br>
                            </div>
                            <div class="col-sm-8">
                                <label for="">Adresse Email</label>
                                <input type="email" name="emailClient" id="emailClient" class="form-control" placeholder="email" aria-describedby="helpId"><br>
                                <div style="text-align: end">
                                    <button type="button" href="/" class="btn btn-secondary btn-lg">Annuler</button>
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div><br>
        </section>
    </div>


    <script src="{{asset('Utilisateurs/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/pace.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/classie.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/cbpAnimatedHeader.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/wow.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/inspinia.js')}}"></script>
</body>
</html>
