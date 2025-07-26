@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

<header class="header">
    <div class="header__inner">
        <a href="/" class="header__logo">
            FashionablyLate
        </a>
    </div>
</header>

@section('content')
<div class="confirm__contact">
    <div class="confirm__heading">
        <h2>
            Confirm
        </h2>
    </div>
    <form class="form"action="{{ route('contact.store') }}" method="post">
    @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お名前
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly >
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        性別
                    </th>
                    <td class="confirm-table__text">
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly >
                        @if ($contact['gender'] == '1')
                            男性
                        @elseif ($contact['gender'] == '2')
                            女性
                        @elseif ($contact['gender'] == '3')
                            その他
                        @endif
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        電話番号
                    </th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel1" value="{{ $contact['tel1'] }}"readonly >
                        <input type="text" name="tel2" value="{{ $contact['tel2'] }}" readonly >
                        <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        建物名
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お問い合わせの種類
                    </th>
                    <td class="confirm-table__text">
                        {{$categoryName}}
                        <input type="hidden" name="content" value="{{ $contact['content'] }}"readonly  >
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お問い合わせ内容
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly >
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit" name="action" value="submit">
                送信
            </button>
            <button class="form__button-back" type="submit" name="action" value="back">
                修正
            </button>
        </div>
    </form>
</div>
@endsection
