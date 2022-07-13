@extends('admin')
@section('content')

<section class="tables">
    <div style="text-align: center; ">
    </div>
    @if (session()->get('success'))
            <center><h2 style="color: #13478d">{{ session()->get('success') }}</h2></center>
    @endif

    @if (session()->get('message'))
            <center><h2 style="color: #13478d">{{ session()->get('message') }}</h2></center>
    @endif
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> Listes des Partenaire </strong></h5>
                        <div class="pull-right m-t-n-xs">
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
                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id </th>
                                        <th>nom complet</th>
                                        <th>email</th>
                                        <th>téléphone</th>
                                        <th>logo</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if ($partenaires ?? false)
                                    @foreach ($partenaires as $partenaire)
                                    <tr>
                                        <td>{{$partenaire->id}}</td>
                                        <td>{{$partenaire->nomPartenaire}}</td>
                                        <td>{{$partenaire->emailPartenaire}}</td>
                                        <td>{{$partenaire->telephone}}</td>
                                        <td><img src="{{Storage::url($partenaire->logo)}}" alt="" style="height:55px; width:60px"></td>
                                        <td>
                                            <button data-toggle="modal" type="button" class="btn btn-warning" href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                            <button type="submit" class="btn btn-danger" id="delete" href="{{route('partenaire.delete',$partenaire->id)}}"><i class="fa fa-trash"></i></button>
                                            <button type="button" data-toggle="modal"class="btn btn-primary" href="#modal-formchow" ><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </td>
                                        </tr>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
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
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="m-t-center-b">
                            <center> ajout partenaire</center>
                        </h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div><br/>
                      @endif
                      <form method="post" class="form-validate" action="{{route('partenaire.create')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <label>nom complet <strong style="color:red;">* </strong></label>
                                <input type="text" name="nomPartenaire" id="nomPartenaire" class="form-control"  required=""><br>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>email <strong style="color:red;">* </strong></label>
                                <input type="email" name="emailPartenaire" id="emailPartenaire" class="form-control"  required=""><br>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>password <strong style="color:red;">* </strong></label>
                                <input type="password" name="password" id="password" class="form-control"  required=""><br>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>téléphone <strong style="color:red;">* </strong></label>
                                <input type="text" name="telephone" id="telephone" class="form-control"  required=""><br>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>logo <strong style="color:red;">* </strong></label>
                                <input type="file" name="logo" id="logo" class="form-control"  required="">
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

    <div id="modal-formUP" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="row">
                        <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h3 class="m-t-center-b">
                            <center> ajouter un profil</center>
                        </h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div><br/>
                      @endif
                      <form method="post" class="form-validate" action="{{route('client_create')}}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <label>nom complet <strong style="color:red;">* </strong></label>
                                <input type="text" name="nomPartenaire" id="nomPartenaire" class="form-control"  required="">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>email <strong style="color:red;">* </strong></label>
                                <input type="email" name="emailPartenaire" id="emailPartenaire" class="form-control"  required="">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>password <strong style="color:red;">* </strong></label>
                                <input type="password" name="password" id="password" class="form-control"  required="">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>téléphone <strong style="color:red;">* </strong></label>
                                <input type="telephone" name="telephone" id="telephone" class="form-control"  required="">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <label>logo <strong style="color:red;">* </strong></label>
                                <input type="text" name="logo" id="logo" class="form-control"  required="">
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
