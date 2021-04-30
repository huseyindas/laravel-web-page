@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Email Adresinizi Doğrulayınız') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('E-mail adresinize şifrenizi sıfırlamak için bir link gönderildi.') }}
                        </div>
                    @endif

                    {{ __('Devam etmeden önce, lütfen bir doğrulama bağlantısı için e-postanızı kontrol edin. ') }}
                    {{ __('Eğer mail almadıysanız') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('buraya tıklayıp yeni mail alabilirsiniz.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
