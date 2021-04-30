@extends("layouts.app-admin")

@section("title", "İletişim")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            @foreach($contacts as $contact)
            <h5 class="card-header">İletişim Bilgileri</h5>
            <form action="{{route("dashboard-contact.update", 1)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method("patch")
                <div class="card-body">
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Başlık 1</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="head1" id="head1" value="{{$contact->head1}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Mail 1</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="mail1" id="mail1" value="{{$contact->mail1}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control"  name="desc1" id="desc1" value="{{$contact->desc1}}" style="height: 100px; resize: none">{{$contact->desc1}}</textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma açıklama yazısı yazabilirsiniz.</label>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Başlık 2</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="head2" id="head2" value="{{$contact->head2}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Mail 2</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="mail2" id="mail2" value="{{$contact->mail2}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" name="desc2" id="desc2" value="{{$contact->desc2}}" style="height: 100px; resize: none">{{$contact->desc2}}</textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma açıklama yazısı yazabilirsiniz.</label>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Başlık 3</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="head3" id="head3" value="{{$contact->head3}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Mail 3</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" name="mail3" id="mail3" value="{{$contact->mail3}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control"  name="desc3" id="desc3" value="{{$contact->desc3}}" style="height: 100px; resize: none">{{$contact->desc3}}</textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma açıklama yazısı yazabilirsiniz.</label>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Adres</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="address" name="address" value="{{$contact->address}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Şehir/Ülke</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="country" name="country" value="{{$contact->country}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Telefon 1</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="phone1" name="phone1" value="{{$contact->phone1}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Telefon 2</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="phone2" name="phone2" value="{{$contact->phone2}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px">
                        <div class="col">
                            <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
            <form action="{{route("dashboard-maps.update",1)}}" method="post" enctype="multipart/form-data">
                @method("patch")
                @csrf
                <div class="card">
                    <h5 class="card-header">Harita Ayarları</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">API Key</span>
                                <input type="text" class="form-control" id="api" name="api" value="{{$maps[0]->api ?? " "}}" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col">
                                <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        @foreach($contactForms as $contactForm)
                <div class="card">
                    <h5 class="card-header">Referans Bölümü Ayarları</h5>
                    <form action="{{route("dashboard-contact-form.update",1)}}" method="post" enctype="multipart/form-data">
                        @method("patch")
                        @csrf
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Başlık</span>
                                <input type="text" class="form-control" id="heading" name="heading" value="{{$contactForm->heading}}">
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none">{{$contactForm->desc}}</textarea>
                                <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma hakkımızda bölümü açıklamalarını yazabilirsiniz.</label>
                            </div>
                            <div class="row" style="margin-top: 20px">
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
