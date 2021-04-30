@extends("layouts.app-admin")

@section("title", "Logo")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <form action="{{route("dashboard-logo.update",1)}}" method="post" enctype="multipart/form-data">
            @method("patch")
            @csrf
        <div class="card">
            <h5 class="card-header">Header Logo Ayarı</h5>
            <div class="card-body">
                <div class="row">
                    <div class="text-center" style="margin: 50px">
                        <img src="/img/logo/{{$logo[0]->logo}}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu 191x43px. Koyu renkli logo kullanın. Lütfen boyutlara dikkat ediniz.</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
        </form>
    </div>
    </div>
    <form action="{{route("dashboard-footer-logo.update",1)}}" method="post" enctype="multipart/form-data">
        @method("patch")
        @csrf
        <div class="card">
            <h5 class="card-header">Footer Logo Ayarı</h5>
            <div class="card-body bg-dark text-white">
                <div class="row">
                    <div class="text-center" style="margin: 50px">
                        <img src="/img/logo/{{$flogo[0]->flogo}}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu 191x43px. Beyaz logo kullanın. Lütfen boyutlara dikkat ediniz.</label>
                        <input class="form-control bg-dark text-white" type="file" id="fimage" name="fimage">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <form action="{{route("dashboard-favicon.update",1)}}" method="post" enctype="multipart/form-data">
        @method("patch")
        @csrf
        <div class="card">
            <h5 class="card-header">Favicon Logo Ayarı</h5>
            <div class="card-body">
                <div class="row">
                    <div class="text-center" style="margin: 50px">
                        <img src="/img/logo/{{$favicon[0]->favicon ?? " "}}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu 64x64px. Lütfen boyutlara dikkat ediniz.</label>
                        <input class="form-control" type="file" id="favicon" name="favicon">
                    </div>
                </div>
                <div class="row" style="margin-bottom: 50px">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
