@extends("layouts.app-admin")

@section("title", "Projeler")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Ürün Ekle</h5>
            <form action="{{route("dashboard-projects.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu max 1000x1000px. Lütfen boyutlara uygun fotoğraf seçiniz..</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Proje Adı</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="name" name="name" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none"></textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma proje açıklamasını yazabilirsiniz.</label>
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
            <h5 class="card-header">Projeler</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>İsim</th>
                        <th>Açıklama</th>
                        <th style="width: %10">İşlem</th>
                    </tr>
                    </thead>
                    @foreach($projects as $project)
                        <tbody>
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->name}}</td>
                            <td>{{$project->desc}}</td>
                            <td>
                                <form action="{{route("dashboard-projects.destroy", $project->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" style="position: center" class="btn btn-danger">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
                <div class="row" style="margin-top: 20px">
                    <div class="d-flex justify-content-center">
                        {{$projects->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
