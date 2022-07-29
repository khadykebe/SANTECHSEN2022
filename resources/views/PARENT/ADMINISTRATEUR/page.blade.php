@extends('admin')
@section('content')

<section class="tables">
    <div style="text-align: center; ">
    </div>
    @if (session()->get('success'))
        <center>
            <h2 style="color: #13478d">{{ session()->get('success') }}</h2>
        </center>
    @endif

    @if (session()->get('message'))
        <center>
            <h2 style="color: #13478d">{{ session()->get('message') }}</h2>
        </center>
    @endif
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5> Listes des Profil </strong></h5>
                        <div class="pull-right m-t-n-xs">
                            <a data-toggle="modal" class="btn btn-primary" href="#modelId"><i class="fa fa-plus"
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
                                        <th>contenue</th>
                                        <th>date</th>
                                        <th>date</th>
                                        <th>type_page</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($pages ?? false)
                                        @foreach ($pages as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->contenue }}</td>
                                                <td>{{ $item->date }}</td>
                                                <td>{{ $item->nomType }}</td>
                                                <td><img src="{{Storage::url($item->image)}}" alt="image" style="height:55px; width:60px"></td>
                                                <td>
                                                    <button data-toggle="modal" type="button" class="btn btn-warning"
                                                        href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                                    <button type="submit" class="btn btn-danger" id="delete"
                                                        href="{{ route('delete.page', $item->id) }}"><i
                                                            class="fa fa-trash"></i></button>
                                                    <button type="button" data-toggle="modal"class="btn btn-primary"
                                                        href="#modal-formchow"><i class="fa fa-eye"
                                                            aria-hidden="true"></i></button>
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



    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('create.page')}}"  class="form-validate" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            @csrf
                            @method('POST')
                          <label for="">contenue</label>
                          <input type="text" name="contenue" id="contenue" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Help text</small>

                          <label for="">date</label>
                          <input type="date" name="date" id="date" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Help text</small>

                          <label for="">image</label>
                          <input type="file" name="image" id="image" class="form-control" placeholder="" aria-describedby="helpId">
                          <small id="helpId" class="text-muted">Help text</small>

                          <div class="form-group">
                            <label for="">type Page</label>
                            <select class="form-control" name="idTypePage" id="idTypePage">
                                    @foreach ($types as $item)
                                        <option value="{{$item->id}}"  label="{{$item->nomType}}"></option>
                                    @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</section>

@endsection
