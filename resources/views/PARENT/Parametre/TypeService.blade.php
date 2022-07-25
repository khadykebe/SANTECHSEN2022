@extends('admin')
@section('content')

<section class="dashboard-counts no-padding-bottom">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container ">
            <button type="button" class="btn btn-primary  " data-toggle="modal" data-target="#modelId">
                <i class="fa fa-plus"
                aria-hidden="true"></i> ajouter
            </button>

            @if (session()->get('mess'))
                <center>
                    <h2 style="color: #13478d">{{ session()->get('mess') }}</h2>
                </center>
            @endif
        </div>
        <div class="container">
            <div class="row ">
                @if ($type ?? false)
                    @foreach ($type as $item)
                    <div class="col-lg-4">
                        <div class="widget style1 navb-bg" style="background-color: #ffffff">
                            <div class="row">
                                <div class="col-xs-6">
                                    <h4 class="font-bold"><u> nom </u>:</h4>
                                    <h4 class="font-bold"><u> status </u>:</h4><br>

                                    <button data-toggle="modal" type="button" class="btn btn-warning"
                                        href="#modal-formUP"><i class="fa fa-pencil"></i></button>
                                    <button type="submit" class="btn btn-danger" id="delete" href="{{route('type.delete',$item->id)}}"><i
                                            class="fa fa-trash"></i></button>
                                </div>
                                <div class="col-xs-4">
                                    <p>{{$item->nomTypeService}}</p><br>
                                    <p>{{$item->status}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajout de type service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('type.create')}}" method="POST"  class="form-validate" >
                    @csrf
                    @method('POST')
                    <div class="col-sm-6 col-sx-12">
                        <div class="form-group">
                            <label for="">nom</label>
                            <input type="text" name="nomTypeService" id="nomTypeService" class="form-control" placeholder=""
                                aria-describedby="helpId">
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

@endsection
