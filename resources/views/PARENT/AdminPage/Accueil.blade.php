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
                             <span> Les medcins </span>
                             <h2 class="font-bold">87 </h2>
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
                             <span>  utilisateurs </span>
                             <h2 class="font-bold">54</h2>
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
                             <span> REJOINDRE </span>
                             <h2 class="font-bold">65</h2>
                         </div>
                     </div>
                 </div>
             </div>
               <div class="col-lg-4">
                 <div class="widget style1 yellow-bg" style="background-color:   #FF7F00 ">
                     <div class="row">
                         <div class="col-xs-4">
                           <h2> <i class="fa fa-sitemap"></i></h2>
                         </div>
                         <div class="col-xs-6 text-right">
                             <span> Produit Saycure </span>
                             <h2 class="font-bold">45</h2>
                         </div>
                     </div>
                 </div>
             </div>
              <div class="col-lg-4">
                 <div class="widget style1 lazur-bg">
                     <div class="row">
                         <div class="col-xs-4">
                             <h2> <i class="fa fa-users"></i></h2>
                         </div>
                        <div class="col-xs-5 text-right">
                             <span>Utilisateurs</span>
                             <h2 class="font-bold">{</h2>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4">
                 <div class="widget style1 navy-bg"  style="background-color:  #135d8d ">
                     <div class="row">
                         <div class="col-xs-4">
                             <i class="fa fa-euro fa-3x"></i>
                         </div>
                         <div class="col-xs-4 text-right">
                             <span> Consultations </span>
                             <h2 class="font-bold">768 </h2>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         </div><div class="wrapper wrapper-content">
         <div class="row">
             <div class="col-lg-2">
                 <div class="ibox float-e-margins">
                     <div class="ibox-title">
                         <span class="label label-success pull-right" style="background-color: #13478d ">Monthly</span>
                         <h5>Views</h5>
                     </div>
                     <div class="ibox-content">
                         <h1 class="no-margins">386,200</h1>
                         <div class="stat-percent font-bold text-success">98% <i class="fa fa-bolt"></i></div>
                         <small>Total views</small>
                     </div>
                 </div>
             </div>
             <div class="col-lg-2">

                 <div class="ibox float-e-margins">
                     <div class="ibox-title">
                         <span class="label label-info pull-right" style="background-color:   #FF7F00 ">Annual</span>
                         <h5>Orders</h5>
                     </div>
                     <div class="ibox-content">
                         <h1 class="no-margins">80,800</h1>
                         <div class="stat-percent font-bold text-info">20% <i class="fa fa-level-up"></i></div>
                         <small>New orders</small>
                     </div>
                 </div>
             </div>


           </section>
@endsection
