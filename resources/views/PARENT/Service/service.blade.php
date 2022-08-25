@extends('admin')
@section('content')
<section class="tables">
    <div style="text-align: center; ">
        @if (session()->get('success'))
            <center>
                <h2 style="color: #13478d">{{ session()->get('success') }}</h2>
            </center>
        @endif

        @if (session()->get('messd'))
            <center>
                <h2 style="color: #13478d">{{ session()->get('messd') }}</h2>
            </center>
        @endif
        @if (session()->get('mess'))
            <center>
                <h2 style="color: #13478d">{{ session()->get('mess') }}</h2>
            </center>
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
                        <div class="pull-right m-t-n-xs">
                            <a data-toggle="modal" class="btn btn-primary" href="#modal-form"><i class="fa fa-plus" aria-hidden="true"></i>
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
                                        <th>nomService</th>
                                        <th>contenue</th>
                                        <th>cout</th>
                                        <th>dateCreation</th>
                                        <th>TypeService</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @if ($services ?? false)
                                @foreach ($services as $service)
                                <tbody>

                                    <tr>
                                        <td>{{$service->id}}</td>
                                        <td>{{$service->nomService}}</td>
                                        <td>{{$service->contenue}}</td>
                                        <td>{{$service->cout}}</td>
                                        <td>{{$service->dateCreation}}</td>
                                        <td>{{$service->nomTypeService}}</td>
                                        <td><img src="{{Storage::url($service->image)}}" alt="" style="height:55px; width:100px"></td>
                                        <td>
                                            <button data-toggle="modal" type="button" class="btn btn-warning" href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                            <button type="submit" class="btn btn-danger" id="delete" href="{{route('service.delete',$service->id)}}"><i class="fa fa-trash"></i></button>
                                            <button type="button" data-toggle="modal" class="btn btn-primary" href="#modal-formchow"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                                @endforeach
                                @endif
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
                        <h3 class="m-t-center-b">
                            <center> formulaire d ajouter service</center>
                        </h3>
                        <form method="post" class="form-validate" action="{{route('service.create')}}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>nomService <strong style="color:red;">* </strong></label>
                                    <input type="text" name="nomService" id="nomService" class="form-control" required="">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>contenue <strong style="color:red;">* </strong></label>
                                    <input type="text" name="contenue" id="contenue" class="form-control" required="">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>image <strong style="color:red;">* </strong></label>
                                    <input type="file" name="image" id="image" class="form-control" required="">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>cout <strong style="color:red;">* </strong></label>
                                    <input type="text" name="cout" id="cout" class="form-control" required="">
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <label>dateCreation <strong style="color:red;">* </strong></label>
                                    <input type="date" name="dateCreation" id="dateCreation" class="form-control" required="">
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label for=""></label>
                                    <select class="form-control" name="idTypeService" id="idTypeService">
                                        @foreach ($type as $item)
                                        <option value="{{$item->id}}" label="{{$item->nomTypeService}}"></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <input type="reset" class="btn btn-default" value=" Annuler"></input>
                                <button class="btn btn-primary" name="submit"> valider</button>
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
