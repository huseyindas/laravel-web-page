@extends("layouts.app-admin")

@section("title", "Müşteri Yorumları")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Yorum Ekle</h5>
            <form action="{{route("dashboard-comment.store")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="mb-3">
                        <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu max 100x100px. Lütfen boyutlara uygun fotoğraf seçiniz..</label>
                        <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">İsim</span>
                    <input type="text" class="form-control" id="name" name="name" value="">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" id="comment" name="comment" style="height: 100px; resize: none"></textarea>
                    <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma müşteri yorumlarını yazabilirsiniz.</label>
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
                <h5 class="card-header">Yorumlar</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>İsin</th>
                            <th>Yorum</th>
                            <th style="width: %10">İşlem</th>
                        </tr>
                        </thead>
                        @foreach($comments as $comment)
                            <tbody>
                            <tr>
                                <th scope="row">{{$comment->id}}</th>
                                <td>{{$comment->name}}</td>
                                <td>{{$comment->comment}}</td>
                                <td>
                                    <form action="{{route("dashboard-comment.destroy", $comment->id)}}" method="POST">
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
                            {{$comments->links()}}
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
