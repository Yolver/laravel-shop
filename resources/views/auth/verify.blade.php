@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('验证您的邮箱') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('新的验证链接已发送到您的电子邮箱。') }}
                        </div>
                    @endif

                    <h1 style="text-align: center">{{ __('请先验证邮箱') }}</h1>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary" style="display: block;margin: 0 auto;">{{ __('发送验证邮件') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
