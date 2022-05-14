@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mail Adresiniz Doğrulayın') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Sıfırlama isteği mailinize gönderildi') }}
                        </div>
                    @endif

                    {{ __('Devam etmeden önce lütfen E-postanızı kontrol edin') }}
                    {{ __('E-postayı almadıysanız') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Yeni doğrulama maili için tıklayın') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
