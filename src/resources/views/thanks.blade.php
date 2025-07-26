@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__bk">
        Thank you
    </div>
    <div class="thanks__message">
        <div class="thanks__heading">
            <h2>
                お問い合わせありがとうございました
            </h2>
        </div>
        <form class="form__button" action="/" method="get">
        @csrf
            <button class="form__button-submit" type="submit">
                HOME
            </button>
        </form>
    </div>
</div>
@endsection
