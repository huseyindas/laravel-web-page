@extends("layouts.app-admin")

@section("title", "Servisler")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Servis Ekle</h5>
            <form action="{{route("dashboard-services.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">İcon</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="icon" name="icon" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Servis Adı</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="name" name="name" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none"></textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma servis açıklamasını yazabilirsiniz.</label>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col">
                            <button style="float: right" type="submit" class="btn btn-success">Ekle</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card">
            <h5 class="card-header">Servisler</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>İcon</th>
                        <th>İsim</th>
                        <th style="width: %10">İşlem</th>
                    </tr>
                    </thead>
                    @foreach($services as $service)
                    <tbody>
                    <tr>
                        <th scope="row">{{$service->id}}</th>
                        <td>{{$service->icon}}</td>
                        <td>{{$service->name}}</td>
                        <td>
                            <div class="form-group">
                                <form action="#addRowModalDelete" data-toggle="modal" data-target="#addRowModalDelete">
                                    <button style="position: center" class="btn btn-danger" data-original-title="Servisi Sil" data-toggle="tooltip" title="">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="modal fade" id="addRowModalDelete" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">Servis silinecek, emin misiniz?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-footer no-bd">

                                            <form action="{{route("dashboard-services.destroy", $service->id)}}" method="POST">
                                                @csrf
                                                @method("delete")
                                                <button type="submit" style="position: center" class="btn btn-success">
                                                    <i class="fas fa-check"></i> Evet
                                                </button>
                                            </form>

                                            <button style="position: center" class="btn btn-danger" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-times"></i> Hayır
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="row" style="margin-top: 20px">
                    <div class="d-flex justify-content-center">
                        {{$services->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
