
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

    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <img src="../Utilisateurs/img/image001.jpg" alt="logo"  >
            </div>
            <div class="col-sm-4 col-xs-12">
                <p style="margin-top:5% ; color:black;size:30px ;text-align: center"><i   class="fa fa-phone" aria-hidden="true"></i>&nbsp;+221 33 836 52 63 &nbsp; &nbsp; &nbsp;
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>&nbsp;santechsen2022@gmail.com
                </p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <ul class="list-inline social-icon  " style="margin-top: 5%;text-align: end "  >
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

<div class="navbar-wrapper" >
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
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
                        <li><a class="page-scroll" href="#page-top">acceuil</a></li>
                        <li><a class="page-scroll" href="#pricing">services</a></li>
                        <li><a class="page-scroll" href="#features">evenement</a></li>
                        <li><a class="page-scroll" href="#testimonials">partenaire</a></li>
                        <li><a class="page-scroll" href="#team ">qui somme nous</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li style="margin-top:3%"><button type="button" class="btn btn-primary btn-lg" href="#modelId" data-toggle="modal">connecter</button></li>
                    </ul>
                </div>
            </div>
        </nav>

</div>

<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <div class="container">
                <div class="carousel-caption">

                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                    </p>
                </div>
                <!-- <div class="carousel-image wow zoomIn">
                    <img src="img/laptop.png" alt="laptop"/>
                </div>-->
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one">
                <img src="../storage/images/1658747388.jpg" alt="" style="height: 500px;width:1920px">
            </div>

        </div>


        <div class="item ">
            <div class="container">
                <div class="carousel-caption">

                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                    </p>
                </div>
                <!-- <div class="carousel-image wow zoomIn">
                    <img src="img/laptop.png" alt="laptop"/>
                </div>-->
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one">
                <img src="../storage/images/1658753731.jpg" alt="" style="height: 500px;width:1920px">

            </div>

        </div>

    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="pricing" class="pricing">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Nos Services</h1>
            </div>
        </div>
        <div class="row">
            @foreach ( session()->get('services') as $item )
            <div class="col-sm-4 wow zoomIn">
                <ul class="pricing-plan list-unstyled ">
                    <li class="pricing-title">
                        {{$item->nomService}}
                    </li>
                    <li class="pricing-desc">
                        <img src="{{Storage::url($item->image)}}" alt="">
                    </li>
                    <li class="pricing-price">
                        {{$item->contenue}}
                    </li>
                    <li>
                        {{$item->cout}}
                    </li>
                    <li>
                        {{$item->dateCreation}}
                    </li>
                    <li>
                        {{$item->nomTypeService}}
                    </li>

                    <li>
                        <a class="btn btn-primary btn-xs"  id="ouvreDemande" >Signup</a>
                    </li>
                </ul>
            </div>
            @endforeach

        </div>
        <div class="row m-t-lg">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
                <form action="" method="post">
                    <div class="form-group">
                      <label for=""></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>

                      <label for=""></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>

                      <label for=""></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row m-t-lg">
        <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg">
            <form action="" method="post">
                <div class="form-group">
                  <label for=""></label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>

                  <label for=""></label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>

                  <label for=""></label>
                  <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>
            </form>
        </div>
    </div>
</div>

</section>

<script src="{{asset('Utilisateurs/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('Utilisateurs/js/pace.min.js')}}"></script>
<script src="{{asset('Utilisateurs/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Utilisateurs/js/classie.js')}}"></script>
<script src="{{asset('Utilisateurs/js/cbpAnimatedHeader.js')}}"></script>
<script src="{{asset('Utilisateurs/js/wow.min.js')}}"></script>
<script src="{{asset('Utilisateurs/js/inspinia.js')}}"></script>
</body>
</html>

