@extends("layouts.app-admin")

@section("title", "Video Bar")
@section("content")

    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <form action="{{route("dashboard-video-bar.update",1)}}" method="post" enctype="multipart/form-data">
        @method("patch")
        @csrf
        @foreach($videos as $video)
        <div class="card">
            <h5 class="card-header">Arkaplan Ayarı</h5>
            <div class="card-body">
                <div class="row">
                    <div class="text-center">
                    <img src="/img/slider/{{$video->background}}" class="rounded" alt="..."></div>
                </div>
            <div class="row">
                <div class="mb-3">
                    <label for="formFile" class="form-label" style="font-size: 13px; margin-top: 20px">Önerilen dosya boyutu 1920x1000px. Koyu renkli arkaplan kullanın. Lütfen boyutlara dikkat ediniz.</label>
                    <input class="form-control" type="file" id="background" name="background">
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Link & Açıklama Ayarları</h5>
            <div class="card-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Video Linki</span>
                    <input type="text" class="form-control" id="link" name="link" value="{{$video->link}}">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none">{{$video->desc}}</textarea>
                    <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma açıklama yazısı yazabilirsiniz.</label>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </form>
    </div>
@endsection

