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


</section>



<section id="features" class="container services">
    <div class="row m-b-lg">
        <div class="col-lg-12 text-center">
            <div class="navy-line"></div>
            <h1>Nos Evenements</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <h2></h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>LESS/SASS Files</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>6 Charts Library</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
        <div class="col-sm-3">
            <h2>Advanced Forms</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
            <p><a class="navy-link" href="#" role="button">Details &raquo;</a></p>
        </div>
    </div><br><br><br><br><br><br>
</section>

<section id="testimonials"  style="margin-top: 0">
    <div class="container comments gray-section">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Nos partenaire</h1>
            </div>
        </div>
        <div class="row features-block">
            @foreach (session()->get('partenaires') as $item )
            <div class="col-lg-4">
                <div class="bubble">
                    <p> <u>nomPartenaire</u>: &nbsp;&nbsp; {{$item->nomPartenaire}}</p>
                    <p><u>emailPartenaire</u> :&nbsp;&nbsp;{{$item->emailPartenaire}}</p>
                    <p><u>telephone</u> : &nbsp;&nbsp;{{$item->telephone}}</p>
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="{{Storage::url($item->logo)}}">
                    </a>

                </div>
            </div>
            @endforeach


        </div><br><br>
    </div>

</section>

<section id="team" >
    <div class="container  gray-section team">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Qui somme nous</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 wow fadeInLeft">
                <div class="team-member">
                    <img src="../storage/images/1658749109.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Amelia</span> Smith</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus. </p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="team-member wow zoomIn">
                    <img src="../storage/images/1658749136.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">John</span> Novak</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 wow fadeInRight">
                <div class="team-member">
                    <img src="../storage/images/1658749109.jpg" class="img-responsive img-circle img-small" alt="">
                    <h4><span class="navy">Peter</span> Johnson</h4>
                    <p>Lorem ipsum dolor sit amet, illum fastidii dissentias quo ne. Sea ne sint animal iisque, nam an soluta sensibus.</p>
                    <ul class="list-inline social-icon">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><br><br>

    </div>
</section>


<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contact Us</h1>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-3 col-lg-offset-3">
                <address>
                    <strong><span class="navy">Company name, Inc.</span></strong><br/>
                    795 Folsom Ave, Suite 600<br/>
                    San Francisco, CA 94107<br/>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
            </div>
            <div class="col-lg-4">
                <p class="text-color">
                    Consectetur adipisicing elit. Aut eaque, totam corporis laboriosam veritatis quis ad perspiciatis, totam corporis laboriosam veritatis, consectetur adipisicing elit quos non quis ad perspiciatis, totam corporis ea,
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="mailto:test@email.com" class="btn btn-primary">Send us mail</a>
                <p class="m-t-sm">
                    Or follow us on social platform
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2015 Company Name</strong><br/> consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Authentification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if (session()->get('messagelogin'))
                <div class="alert alert-danger">
                    {{ session()->get('messagelogin') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST" class="form-validate">
                <div class="form-group">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <div class="col-sm-6 col-sx-12">
                            <label for="">email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small> <br>
                        </div>

                        <div class="col-sm-6 col-sx-12">
                            <label for="">password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="" aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

    </div>
</div>
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
