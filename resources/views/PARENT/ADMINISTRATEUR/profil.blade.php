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
                            <h5> Listes des Profil </strong></h5>
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
                                            <th>Role</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($profils as $profil)
                                        <tr>
                                            <td>{{$profil->id}}</td>
                                            <td>{{$profil->nomprofil}}</td>
                                            <td>
                                                <button data-toggle="modal" type="button" class="btn btn-warning" href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                                <button type="submit" class="btn btn-danger" id="delete" href="{{route('prodil.delete',$profil->id)}}"><i class="fa fa-trash"></i></button>
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
                            <form action="{{route('profil.create')}}" method="post" class="form-validate">
                                <div class="form-group">
                                    @csrf
                                    @method('POST')
                                    <label for="">Role<strong style="color:red;">* </strong></label>
                                    <input type="text" name="nomprofil" id="nomprofil" class="form-control"
                                        placeholder="" aria-describedby="helpId">
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
                          @foreach ($profils as $profil)
                          <form action="{{route('profil.update',$profil->id)}}" method="post" class="form-validate">
                            <div class="form-group">
                                @csrf
                                @method('POST')
                                <label for="">Role<strong style="color:red;">*</strong></label>
                                <input type="text" name="nomprofil" id="nomprofil" class="form-control"
                                    placeholder="" aria-describedby="helpId" value="{{$profil->nomprofil}}">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                            <button type="reset" class="btn btn-secondary">annuler</button>
                            <button type="submit" class="btn btn-primary" >valider</button>
                        </form>
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
