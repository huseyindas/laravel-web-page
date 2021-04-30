@extends("layouts.app-admin")

@section("title", "Sosyal Medya")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            @foreach($socials as $social)
            <h5 class="card-header">Sosyal Medya Bağlantıları</h5>
            <form action="{{route("dashboard-social-media.update", 1)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
            <div class="card-body">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-facebook"></i></span>
                        <input type="text" class="form-control" value="{{$social->facebook}}" aria-label="Username" id="facebook" name="facebook" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-twitter"></i></span>
                        <input type="text" class="form-control" value="{{$social->twitter}}" aria-label="Username" id="twitter" name="twitter" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-instagram"></i></span>
                        <input type="text" class="form-control" value="{{$social->instagram}}" aria-label="Username" id="instagram" name="instagram" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-linkedin"></i></span>
                        <input type="text" class="form-control" value="{{$social->linkedin}}" aria-label="Username" id="linkedin" name="linkedin" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-youtube"></i></span>
                        <input type="text" class="form-control" value="{{$social->youtube}}" aria-label="Username" id="youtube" name="youtube" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row">
                    <label for="formFile" class="form-label" style="font-size: 13px">Sosyal medya bağlantıları için sadece kullanıcı adlarını girmeniz yeterlidir. Aksi takdirde butonlar düzgün çalışmayabilir.</label>
                </div>
                <div class="row">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        @endforeach
    </div>
@endsection
