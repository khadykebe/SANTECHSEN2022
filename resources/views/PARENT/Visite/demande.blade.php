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

    <link href="{{ asset('css/plugins/ladda/ladda-themeless.min.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
<body >
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
        <section id="pricing" class="pricing  ">
            <div class="container">
                <div class="row ">
                    <marquee>
                        <CENTER><strong>
                                <h3 style="color: #FF7F00"> Veuillez Remplir les champs suivants pour votre demande</h3>
                            </strong></CENTER>
                    </marquee>
                </div>
                @if(session()->get('message') || session()->get('mess'))
                <div class="container">
                    <div class="row" style="margin-top:10%">
                        <div class="col-sm-8 offset-1">
                            <div class="card mb-3 ">
                                <div class="row no-gutters ">
                                    <div class="col-sm-4">
                                        <img src="{{ Storage::url(session()->get('image')) }}" class="card-img" alt="" style="width: 200px; height:200px">
                                    </div>
                                    <div class="col-sm-5 offset-1">
                                        <div class="card-body " >
                                            <form action="{{ route('demande_create',session()->get('id')) }}" method="post">
                                                @csrf
                                                @method('POST')
                                                <div class="form-group ">                                                                                                                                         
                                                        <label for="">code validation</label>
                                                        <input type="text" name="codeValidation" id="codeValidation" class="form-control" placeholder="nom" aria-describedby="helpId"><br><button type="submit" class="btn btn-primary">Envoyer</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                @endif
                @if($services ?? false)
                <div class="container">
                    <div class="row" style="margin-top:10%">
                        <div class="col-sm-11 offset-1">
                            <div class="card mb-3 ">
                                <div class="row no-gutters ">
                                    <div class="col-md-4">
                                        <img src="{{ Storage::url($services->image) }}" class="card-img" alt="" style="width: 400px; height:400px">
                                    </div>
                                    <div class="col-md-5 offset-1">
                                        <div class="card-body " >
                                            <h2><u>formulaire de demande</u></h2>
                                            <form action="{{route('client_create')}}" method="post">
                                                @csrf
                                                @method('POST')
                                                <div class="form-group">                                                                                                                                         
                                                        <label for="">Nom</label>
                                                        <input type="text" name="nomclient" id="nomclient" class="form-control" placeholder="nom" aria-describedby="helpId"><br>
                                                        <label for="">Prenom</label>
                                                        <input type="text" name="prenomclient" id="prenomclient" class="form-control" placeholder="prenom" aria-describedby="helpId"><br>
                                                        <label for="">Adresse Email</label>
                                                        <input type="email" name="emailClient" id="emailClient" class="form-control" placeholder="email" aria-describedby="helpId"><br>
                                                        <div style="text-align: end">
                                                            <button type="button" href="/" class="btn btn-secondary btn-lg">Annuler</button>
                                                            <button type="submit" class="ladda-button btn btn-primary"   data-style="expand-left">Envoyer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>
    </div>


    <script>

    $(document).ready(function (){

        // Bind normal buttons
        Ladda.bind( '.ladda-button',{ timeout: 2000 });

        // Bind progress buttons and simulate loading progress
        Ladda.bind( '.progress-demo .ladda-button',{
            callback: function( instance ){
                var progress = 0;
                var interval = setInterval( function(){
                    progress = Math.min( progress + Math.random() * 0.1, 1 );
                    instance.setProgress( progress );

                    if( progress === 1 ){
                        instance.stop();
                        clearInterval( interval );
                    }
                }, 200 );
            }
        });


        var l = $( '.ladda-button-demo' ).ladda();

        l.click(function(){
            // Start loading
            l.ladda( 'start' );

            // Timeout example
            // Do something in backend and then stop ladda
            setTimeout(function(){
                l.ladda('stop');
            },12000)


        });

    });

</script>

    <script src="{{asset('Utilisateurs/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/pace.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/classie.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/cbpAnimatedHeader.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/wow.min.js')}}"></script>
    <script src="{{asset('Utilisateurs/js/inspinia.js')}}"></script>
</body>
</html>
