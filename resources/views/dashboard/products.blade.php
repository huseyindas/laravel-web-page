@extends("layouts.app-admin")

@section("title", "Ürünler")
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
            <form action="{{route("dashboard-products.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <label for="formFile" class="form-label" style="font-size: 13px">Önerilen dosya boyutu max 1000x1000px. Lütfen boyutlara uygun fotoğraf seçiniz..</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Ürün Adı</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" id="name" name="name" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="desc" name="desc" style="height: 100px; resize: none"></textarea>
                        <label for="floatingTextarea2" class="form-label" style="font-size: 13px">Bu kısıma ürün açıklamasını yazabilirsiniz.</label>
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
            <h5 class="card-header">Ürünler</h5>
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
                    @foreach($products as $product)
                        <tbody>
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->desc}}</td>
                            <td>
                                <form action="{{route("dashboard-products.destroy", $product->id)}}" method="POST">
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
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
