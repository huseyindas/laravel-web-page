@extends("layouts.app-admin")

@section("title", "Slider")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        @foreach($sliders as $slider)
        <form action="{{route("dashboard-slider.update",1)}}" method="post" enctype="multipart/form-data">
            @method("patch")
            @csrf
        <div class="card">
            <h5 class="card-header">Slider Yazıları</h5>
            <div class="card-body">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Yazı 1</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="label1" name="label1" value="{{$slider->label1}}" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Yazı 2</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="label2" name="label2" value="{{$slider->label2}}" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Yazı 3</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="label3" name="label3" value="{{$slider->label3}}" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Yazı 4</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="label4" name="label4" value="{{$slider->label4}}" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Yazı 5</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="label5" name="label5" value="{{$slider->label5}}" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="row">
                        <label for="formFile" class="form-label" style="font-size: 13px">Lütfen uzun metinler kullanmayınız. Aksi takdirde hatalar alabilirsiniz.</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Buton Ayarları</h5>
            <div class="card-body">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-link"></i></span>
                        <input type="text" class="form-control" placeholder="Buton Linki" aria-describedby="basic-addon1" id="buttonLink" name="buttonLink" value="{{$slider->buttonLink}}">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-text-height"></i></span>
                        <input type="text" class="form-control" placeholder="Buton Yazısı" aria-describedby="basic-addon1" id="buttonText" name="buttonText" value="{{$slider->buttonText}}">
                    </div>
                    <div class="row">
                        <label for="formFile" class="form-label" style="font-size: 13px">Buton default olarak iletişim sayfasına yönlenir. Dilediğiniz sayfaya yönlendirmek için tam link yazınız.</label>
                    </div>
                </div>
            </div>
        </div>
            <div class="card">
                <h5 class="card-header">Arkaplan Ayarları</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="text-center">
                            <img src="/img/slider/{{$slider->image}}" class="rounded" alt="...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="font-size: 13px; margin-top: 20px">Önerilen dosya boyutu 1920x1000px. Koyu renkli arkaplan kullanın. Lütfen boyutlara dikkat ediniz.</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
@endsection
