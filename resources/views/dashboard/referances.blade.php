@extends("layouts.app-admin")

@section("title", "Referanslar")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Referans Ekle</h5>
            <form action="{{route("dashboard-referances.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu max 100x100px. Lütfen boyutlara uygun fotoğraf seçiniz..</label>
                            <input class="form-control" type="file" id="logo" name="logo">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">İsim</span>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none"></textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma referans açıklamalarını yazabilirsiniz.</label>
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
            <h5 class="card-header">Referanslar</h5>
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
                    @foreach($referances as $referance)
                        <tbody>
                        <tr>
                            <th scope="row">{{$referance->id}}</th>
                            <td>{{$referance->name}}</td>
                            <td>{{$referance->desc}}</td>
                            <td>
                                <form action="{{route("dashboard-referances.destroy", $referance->id)}}" method="POST">
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
                        {{$referances->links()}}
                    </div>
                </div>
            </div>
        </div>
        @foreach($refdescs as $refdesc)
        <div class="card">
                <h5 class="card-header">Referans Bölümü Ayarları</h5>
                <form action="{{route("dashboard-ref-desc.update",1)}}" method="post" enctype="multipart/form-data">
                    @method("patch")
                    @csrf
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Başlık</span>
                            <input type="text" class="form-control" id="heading" name="heading" value="{{$refdesc->heading}}">
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none">{{$refdesc->desc}}</textarea>
                            <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma hakkımızda bölümü açıklamalarını yazabilirsiniz.</label>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col">
                                <button style="float: right" type="submit" class="btn btn-success">Ekle</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
@endsection
