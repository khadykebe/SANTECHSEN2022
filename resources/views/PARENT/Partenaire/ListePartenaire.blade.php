@extends('admin')
@section('content')

<section class="tables">
<div style="text-align: center; ">
</div>
       <div class="wrapper wrapper-content animated fadeInRight">
           <div class="row">
               <div class="col-lg-12">
               <div class="ibox float-e-margins">
                   <div class="ibox-title">
                       <h5> Listes des <strong style="color: red"> Services </strong></h5>
                       <div class="pull-right m-t-n-xs" >
                         <a data-toggle="modal" class="btn btn-primary" href="#modal-form"><i class="fa fa-user-plus"></i> Nouveau
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
                   <th>titre</th>
                   <th>contenu</th>
                   <th>image</th>
                   <th>date ajout</th>
                    <th>Etat</th>
                   <th>action</th>
                   </tr>
                   </thead>
                   <tbody>
                          <tr>
                             <td>id</td>
                             <td>titre</td>
                             <td style="text-align: justify;">contenue </td>
                             <td> <img width="50px" height="40px"  src=""></td>
                           <td>date</td>
                            <td>
                                  <span class="label label-primary">actif</span>
                                   <span class="label label-default">Disactivé</span>
                           </td>
                             <td>
                                   <a class="btn btn-default btn-xs" href="{{URL::to('/unactive_service/')}}">
                                       <i class="fa fa-thumbs-up"></i>
                                   </a>
                                   <a class="btn btn-default btn-xs" href="{{URL::to('/active_service/')}}">
                                       <i class="fa fa-thumbs-up"></i>
                                   </a>
                                <a class="btn btn-default btn-xs" href="{{URL::to('/edit_service/')}}">
                                  <i class="fa fa-pencil"></i>
                               </a>
                               <a  class="btn btn-danger btn-xs" href="{{URL::to('/delete_service/')}}" id="delete" >

                                <i class="fa fa-trash"></i>
                               </button></a>
                                 <a class="btn btn-white btn-xs" href="{{URL::to('/detail_service/')}}" >
                                <i class="fa fa-eye"></i>
                               </a>
                                <a class="btn btn-white btn-xs" href="{{URL::to('/detail_service/')}}" >
                                <i class="fa fa-eye"></i>
                               </a>
                                  <a  class="btn btn-danger btn-xs" href="{{URL::to('/delete_service/')}}" id="delete">
                                <i class="fa fa-trash"></i>
                               </button></a>

                                    <a class="btn btn-default btn-xs" href="{{URL::to('/edit_service/')}}">
                                  <i class="fa fa-pencil"></i>
                               </a>
                               <a class="btn btn-white btn-xs" href="{{URL::to('/detail_service/')}}" >
                                <i class="fa fa-eye"></i>
                               </a>

                           </td>
                           </tr>
                           </tr>
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
                                               <h3 class="m-t-center-b"><center> formulaire d'ajouter service</center></h3>


                                                   <form method="post" class="form-validate" action="{{URL::to('/save_service')}}" enctype="multipart/form-data">
                                                     {{csrf_field()}}
                                                   <div class="row">
                                                     <div class="col-sm-6 col-xs-12">
                                                    <label>Titre <strong style="color:red;">* </strong></label>
                                                      <input type="text" name="titres" class="form-control"  required="">
                                                     </div>
                                                     <div class="col-sm-6 col-xs-12">
                                                        <label>Contenu<strong style="color:red;"> </strong></label>
                                                          <textarea  name="contenus" class="form-control " autocomplete="off"  ></textarea>
                                                     </div>

                                                     <div class="col-sm-6 col-xs-12">
                                                    <label>image <strong style="color:red;"> </strong>
                                                    </label>
                                                       <input type="file" name="imgs"  class="form-control" >
                                                     </div>
                                                        </div>
                                                     </br>
                                                    <div class="col-xs-12">
                                                    <input type="reset"  class="btn btn-default" value=" Annuler"></input>

                                                    <button  class="btn btn-primary" name="submit"> valider</button>
                                                 </div>
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
