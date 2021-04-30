@extends("layouts.app-admin")

@section("title", "Profilim")

@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    <i class="fa fa-times"></i>
                    {{ $error }}
                </div>
            @endforeach

            <div class="card">
            <h5 class="card-header">Profil Ayarları</h5>
            <form action="{{route("dashboard-profile.update", Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @method("patch")
                @csrf
            <div class="card-body">
                <div class="row">
                    <div class="text-center" style="margin: 50px">
                        <img src="/img/profile/{{ Auth::user()->photo }}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu max 300x300px. Lütfen boyutlara uygun profil fotoğrafı seçiniz..</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Adınız</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" id="name" name="name" value="{{ Auth::user()->name }}" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mail Adresiniz</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" id="email" name="email" value="{{ Auth::user()->email }}" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="card">
            <h5 class="card-header">Profil Ayarları</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('dashboard-password.store') }}">
                    @csrf
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Eski Şifreniz</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" id="current_password" name="current_password" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Yeni Şifreniz</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" id="new_password" name="new_password" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Yeni Şifreniz (Tekrar)</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" id="new_confirm_password" name="new_confirm_password" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="row" style="margin-top: 20px">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Güncelle</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
