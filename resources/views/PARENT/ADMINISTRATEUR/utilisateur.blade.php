@extends('admin')
@section('content')
    <section class="tables">
        <div style="text-align: center; ">
            @if (session()->get('success'))
                <center><h2 style="color: #13478d">{{ session()->get('success') }}</h2></center>
            @endif
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5> Listes des Utilisateurs </strong></h5>
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
                                            <th>id</th>
                                            <th>nom </th>
                                            <th>prenom</th>
                                            <th>email</th>
                                            <th>telephone</th>
                                            <th>adresse</th>
                                            <th>photo</th>
                                            <th>status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($utilisateurs as $utilisateur)
                                        <tr>
                                            <td>{{$utilisateur->id}}</td>
                                            <td>{{$utilisateur->nom}}</td>
                                            <td>{{$utilisateur->prenom}}</td>
                                            <td>{{$utilisateur->email}}</td>
                                            <td>{{$utilisateur->telephone}}</td>
                                            <td>{{$utilisateur->adresse}}</td>
                                            <td><img src="{{Storage::url($utilisateur->photo)}}" alt="" style="height:55px; width:55px"></td>
                                            <td>{{$utilisateur->status}}</td>
                                            <td>
                                                <button data-toggle="modal" type="button" class="btn btn-warning" href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                                <button type="submit" class="btn btn-danger" id="delete" href="{{route('utilisateur.delete',$utilisateur->id)}}"><i class="fa fa-trash"></i></button>
                                            </td>
                                            </tr>
                                        </tr>
                                    @endforeach
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
                                <center> ajouter un profil</center>
                            </h3>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div><br />
                          @endif
                            <form action="{{route('utilisateur.create')}}" method="post" class="form-validate" enctype="multipart/form-data">
                                <div class="form-group">
                                    @csrf
                                    @method('POST')
                                    <label for="">nom<strong style="color:red;">* </strong></label>
                                    <input type="text" name="nom" id="nom" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">prenom<strong style="color:red;">* </strong></label>
                                    <input type="text" name="prenom" id="prenom" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">email<strong style="color:red;">* </strong></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">password<strong style="color:red;">* </strong></label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">telephone<strong style="color:red;">* </strong></label>
                                    <input type="text" name="telephone" id="telephone" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">adresse<strong style="color:red;">* </strong></label>
                                    <input type="text" name="adresse" id="adresse" class="form-control"
                                        placeholder=""  aria-describedby="helpId">

                                    <label for="">photo<strong style="color:red;">* </strong></label>
                                    <input type="file" name="photo" id="photo" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <label for="">status<strong style="color:red;">* </strong></label>
                                    <input type="text" name="status" id="status" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                    <div class="form-group">

                                      <label for="">profil<strong style="color:red;">* </strong></label>
                                        <select class="form-control" name="idProfil" id="idProfil" @foreach ($profils as $profil) >
                                            <option
                                                value="{{$profil->id}}" label="{{$profil->nomprofil}}"
                                                > profil</option>
                                         @endforeach
                                        </select>



                                    </div>

                                </div>
                                <button type="reset" class="btn btn-secondary">annuler</button>
                                <button type="submit" class="btn btn-primary" >valider</button>
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
                            <form action="" method="post" class="form-validate">
                                <div class="form-group">
                                    @csrf
                                    @method('POST')
                                    <label for="">Role<strong style="color:red;">*</strong></label>
                                    <input type="text" name="nomprofil" id="nomprofil" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="">
                                    <small id="helpId" class="text-muted">Help text</small>
                                </div>
                                <button type="reset" class="btn btn-secondary">annuler</button>
                                <button type="submit" class="btn btn-primary" >valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
