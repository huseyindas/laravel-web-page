@extends("layouts.app-admin")

@section("title", "Hakkımızda")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        @foreach($abaouts as $abaout)
                <div class="card">
                    <h5 class="card-header">Anasayfa Hakkımızda Bölümü Ayarları</h5>
                    <div class="card-body">
                        <form action="{{route("dashboard-abaout.update", 1)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PATCH")
                            <div class="row">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Hakkımızda Bölümü Başlığı</span>
                                    <input type="text" class="form-control" value="{{$abaout->head_home}}" id="head_home" name="head_home" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" value="{{$abaout->desc_home}}" id="desc_home" name="desc_home" style="height: 100px; resize: none">{{$abaout->desc_home}}</textarea>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Başlık 1</span>
                                    <input type="text" class="form-control" value="{{$abaout->head1}}" id="head1" name="head1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" value="{{$abaout->mini_desc1}}" placeholder="Leave a comment here" id="mini_desc1" name="mini_desc1" style="height: 100px; resize: none">{{$abaout->mini_desc1}}</textarea>
                                </div>
                                <div class="input-group mb-3" style="margin-top: 20px">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Başlık 2</span>
                                    <input type="text" class="form-control" value="{{$abaout->head2}}" id="head2" name="head2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" value="{{$abaout->mini_desc2}}" id="mini_desc2" name="mini_desc2" style="height: 100px; resize: none">{{$abaout->mini_desc2}}</textarea>
                                </div>
                                <div class="row">
                                    <label for="formFile" class="form-label" style="font-size: 13px">Lütfen uzun metinler kullanmayınız. Aksi takdirde hatalar alabilirsiniz.</label>
                                </div>
                            </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col">
                    <button style="float: right; margin-bottom: 50px" type="submit" class="btn btn-success">Kaydet</button>
                </div>
            </div>
        </form>
    </div>
@endsection
