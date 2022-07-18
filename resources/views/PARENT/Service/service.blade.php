@extends('admin')
@section('content')


<section class="tables">
    <div style="text-align: center; ">
        @if (session()->get('success'))
            <center><h2 style="color: #13478d">{{ session()->get('success') }}</h2></center>
        @endif

        @if (session()->get('mes'))
             <center><h2 style="color: #13478d">{{ session()->get('mes') }}</h2></center>
         @endif
    </div>
    <div style="text-align: center; ">
    </div>
           <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                   <div class="col-lg-12">
                   <div class="ibox float-e-margins">
                       <div class="ibox-title">
                           <h5> Listes des <strong style="color: red"> Services </strong></h5>
                           <div class="pull-right m-t-n-xs" >
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form"><i class="fa fa-plus"
                                aria-hidden="true"></i>
                            Ajouter</a>
                               <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                               </a>
                               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                   <i class="fa fa-wrench"></i>
                               </a>
                               <ul class="dropdown-menu dropdown-user">
                                   <li><a href="#">Config option 1</a>
                                   </li>
                                   <li><a href="#">Config option 2</a>
                                   </li>
                               </ul>
                               <a class="close-link">
                                   <i class="fa fa-times"></i>
                               </a>
                           </div>
                       </div>
                       <div class="ibox-content">
                   <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover dataTables-example" >
                       <thead>
                       <tr>
                            <th>id </th>
                            <th>nomService</th>
                            <th>contenue</th>
                            <th>image</th>
                            <th>cout</th>
                            <th>dateCreation</th>
                            <th>TypeService</th>
                            <th>action</th>
                       </tr>
                       </thead>
                       <tbody>
                        @if ($services ?? false)
                            @foreach ($services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->nomService}}</td>
                                <td>{{$service->contenue}}</td>
                                <td>{{$service->image}}</td>
                                <td>{{$service->cout}}</td>
                                <td>{{$service->dateCreation}}</td>
                                <td>{{$service->TypeService}}</td>
                                <td>
                                    <button data-toggle="modal" type="button" class="btn btn-warning" href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                    <button type="submit" class="btn btn-danger" id="delete" href="{{route('client_delete',$client->id)}}"><i class="fa fa-trash"></i></button>
                                    <button type="button" data-toggle="modal"class="btn btn-primary" href="#modal-formchow" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                       </tfoot>
                       </table>
                        </div>
                      </div>
                   </div>
                 </div>
               </div>
             </div>
             </div>
           </div>

           <div class="text-center">
                           </div>
                               <div id="modal-form" class="modal fade" aria-hidden="true">
                                   <div class="modal-dialog">
                                       <div class="modal-content">

                                           <div class="modal-body">
                                               <div class="row">
                                                   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                   <h3 class="m-t-center-b"><center> formulaire d'ajouter client</center></h3>
                                                    <form method="post" class="form-validate" action="{{route('client_create')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label>nom <strong style="color:red;">* </strong></label>
                                                                <input type="text" name="nomclient" id="nomclient" class="form-control"  required="">
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label>prenom <strong style="color:red;">* </strong></label>
                                                                <input type="text" name="prenomclient" id="prenomclient" class="form-control"  required="">
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label>email <strong style="color:red;">* </strong></label>
                                                                <input type="email" name="emailClient" id="emailClient" class="form-control"  required="">
                                                            </div>
                                                            <div class="col-sm-6 col-xs-12">
                                                                <label>password <strong style="color:red;">* </strong></label>
                                                                <input type="password" name="password" id="password" class="form-control"  required="">
                                                            </div>
                                                        </div>
                                                         </br>
                                                        <div class="col-xs-12">
                                                            <input type="reset"  class="btn btn-default" value=" Annuler"></input>
                                                            <button  class="btn btn-primary" name="submit"> valider</button>
                                                        </div>
                                                    </form>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                           </div>
</section>
@endsection
