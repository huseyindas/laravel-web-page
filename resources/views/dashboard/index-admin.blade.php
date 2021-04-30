@extends("layouts.app-admin")

@section("title", "Dashboard")
@section("content")
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--100per" role="alert">
                    <i class="zmdi zmdi-check-circle"></i>
                    <span class="content">Web sitenizin yönetim paneline başarıyla giriş yaptınız.</span>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="zmdi zmdi-close-circle"></i>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="col-lg-12">
                <h1>buraya site bilgileri gelebilir</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, dicta hic incidunt laudantium neque officiis qui sint! Animi autem, dolores dolorum ducimus enim error, impedit non omnis quam sunt tenetur?</p>
            </div>
        </div>
    </div>
@endsection
