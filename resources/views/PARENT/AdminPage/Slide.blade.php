@extends('admin')
@section('content')
    <!-- Button trigger modal -->
    <section class="dashboard-counts no-padding-bottom">
        <div class="wrapper wrapper-content animated fadeInRight"></div>
        <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                Ajouter
            </button><br><br>
        </div>
        <div class="container">
            <div class="row">
                @if ($slides ?? false)
                    @foreach ($slides as $item)
                    <div class="col-lg-4">
                        <div class="widget style1 navb-bg" style="background-color: #ffffff">
                            <div class="row">
                                <div class="col-xs-6">
                                    <img src="{{Storage::url($item->image)}}" alt="" style="heigth:150px ; width:300px">

                                    <h4> <u> Contenue</u>:</h4>{{$item->contenue}}
                                    <h4><u>date creation</u>:</h4>{{$item->dateCreation}}
                                    <br><br>
                                    <button data-toggle="modal" type="button" class="btn btn-warning"
                                        href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                    <button type="submit" class="btn btn-danger" id="delete" href="{{route('delete.slide',$item->id)}}"><i
                                            class="fa fa-trash"></i></button>
                                </div>

                            </div>
                        </div>
                        <br><br>
                    </div>
                    @endforeach
                @endif
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h class="modal-title">Ajout Slides</h>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('create.slide') }}" method="post" class="form-validate"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-sm-6  col-sx-12 ">
                                <div class="form-group">
                                    <label for="">contenue</label>
                                    <input type="text" name="contenue" id="contenue" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Help text</small>
                                </div>
                            </div>

                            <div class="col-sm-6  col-sx-12 ">
                                <div class="form-group">
                                    <label for="">image</label>
                                    <input type="file" name="image" id="image" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Help text</small>
                                </div>
                            </div>

                            <div class="col-sm-6  col-sx-12 ">
                                <div class="form-group">
                                    <label for="">dateCreation</label>
                                    <input type="date" name="dateCreation" id="dateCreation" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                    <small id="helpId" class="text-muted">Help text</small>
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
        </div>
    </section>
@endsection
