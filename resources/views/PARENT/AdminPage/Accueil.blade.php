@extends('admin')
@section('content')

<section class="dashboard-counts no-padding-bottom">
    <div class="wrapper wrapper-content animated fadeInRight">
         <div class="row">
             <div class="col-lg-4" >
                 <div class="widget style1 navy-bg"style="background-color: #135d8d ">
                     <div class="row" >
                         <div class="col-xs-4">
                             <h2><i class="fa fa-users"></i></h2>
                         </div>
                         <div class="col-xs-4 text-right">
                             <span>UTILISATEURS</span>
                             <h2 class="font-bold">{{ $utilisateur }}</h2>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="widget style1 lazur-bg">
                     <div class="row">
                         <div class="col-xs-4">
                         <h2><i class="fa fa-users"></i></h2>
                         </div>
                         <div class="col-xs-4 text-right">
                             <span> SERVICES </span>
                             <h2 class="font-bold">{{ $service }}</h2>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="widget style1 oranger-bg" style="background-color:   #FF7F00 ">
                     <div class="row">
                         <div class="col-xs-4">
                              <h2> <i class="fa fa-sitemap"></i></h2>
                         </div>
                         <div class="col-xs-4 text-right">
                             <span> DEMANDES </span>
                             <h2 class="font-bold">{{ $demande }}</h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
@endsection
