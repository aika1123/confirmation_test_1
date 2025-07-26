@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

<header class="header">
    <div class="register-header">
        <div class="header__inner">
            <a href="/" class="header__logo">
            FashionablyLate
            </a>
            <ul class="header-nav">
                <li class="header-nav__item">
                    <a href="/register" class="header-nav__link">
                        register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>login</h2>
    </div>
    <form class="form" action="/login" method="post">
    @csrf
        <div class="form__group-title">
            <span class="form__label--item">
                メールアドレス
            </span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}">
            </div>
            <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form__group-title">
            <span class="form__label--item">
                パスワード
            </span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="password" name="password" placeholder="例:coachtecllo6">
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">
                ログイン
            </button>
        </div>
    </form>
</div>
@endsection
