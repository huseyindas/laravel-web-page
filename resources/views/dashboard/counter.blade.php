@extends("layouts.app-admin")

@section("title", "Sayaç")
@section("content")
    <div class="page-content">
        @if(session()->has('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Sayaç</h5>
            @foreach($counters as $counter)
            <div class="card-body">
                <form action="{{route("dashboard-counter.update", 1)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PATCH")
                <div class="row">
                   <div class="col">
                       <div class="input-group mb-3">
                           <span class="input-group-text" id="inputGroup-sizing-default">Sayaç 1</span>
                           <input type="text" class="form-control" aria-label="Sizing example input" id="desc1" name="desc1" value="{{$counter->desc1}}" aria-describedby="inputGroup-sizing-default">
                       </div>
                   </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Değer 1</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="num1" name="num1" value="{{$counter->num1}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sayaç 2</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="desc2" name="desc2" value="{{$counter->desc2}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Değer 2</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="num2" name="num2" value="{{$counter->num2}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sayaç 3</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="desc3" name="desc3" value="{{$counter->desc3}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Değer 3</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="num3" name="num3" value="{{$counter->num3}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Sayaç 4</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="desc4" name="desc4" value="{{$counter->desc4}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Değer 4</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" id="num4" name="num4" value="{{$counter->num4}}" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <label for="formFile" class="form-label" style="font-size: 13px">Lütfen uzun metinler kullanmayınız. Aksi takdirde hatalar alabilirsiniz.</label>
                </div>
                <div class="row">
                    <div class="col">
                        <button style="float: right" type="submit" class="btn btn-success">Kaydet</button>
                    </div>
                </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
@endsection
