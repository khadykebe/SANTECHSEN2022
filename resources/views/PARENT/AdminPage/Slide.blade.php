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
                    @foreach ($slides as $slide)
                        <div class="col-sm-6 col-xs-12">
                            <div class="card">
                                <img class="card-img-top" src="Admins/img/p4.jpg" alt="" ><br>
                                <div class="card-body">
                                    <h4 class="card-title font-bord"><u>contenue</u> :</h4>{{ $slide->contenue }}
                                    <h4 class="card-title font-bord"><u>date de creation</u> :</h4>{{ $slide->dateCreation }}
                                </div><br><br><br>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajout Slides</h5>
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
                                    <input type="text" name="dateCreation" id="dateCreation" class="form-control"
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
