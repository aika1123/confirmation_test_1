@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

<header class="header">
    <div class="register-header">
        <div class="header__inner">
            <a href="/" class="header__logo">
            FashionablyLate
            </a>
            <ul class="header-nav">
                <li class="header-nav__item">
                    <a href="/login" class="header-nav__link">
                        logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>
            Admin
        </h2>
    </div>
    <form class="search-form">
        <div class="search-form__item">
            <input type="text" class="search-form__input-text" placeholder="名前やメールアドレスを入力してください">
            <select class="search-form__gender">
                <option>
                    性別
                </option>
            </select>
            <select class="search-form__category">
                <option>
                    お問い合わせの種類
                </option>
            </select>
            <input type="date" class="search-form__input-date">
            <button class="search-form__button-search" type="submit">
                検索
            </button>
            <button class="search-form__button-reset" type="submit">
                リセット
            </button>
        </div>
    </form>
    <form class="export-form">
        <div class="export-form__button-export">
            エクスポート
        </div>
        <div class="export-form__pagination">
            <a href="#" class="export-form__page">
                1
            </a>
            <a href="#" class="export-form__page">
                2
            </a>
            <a href="#" class="export-form__page">
                3
            </a>
            <a href="#" class="export-form__page">
                4
            </a>
            <a href="#" class="export-form__page">
                5
            </a>
        </div>
    </form>
    <div class="admin-table">
        <table class="admin-table__inner">
            <tr class="admin-table__row">
                <th class="admin-table__header">
                    <span class="admin-table__header-span">
                        お名前
                    </span>
                    <span class="admin-table__header-span">
                        性別
                    </span>
                    <span class="admin-table__header-span">
                        メールアドレス
                    </span>
                    <span class="admin-table__header-span">
                        お問い合わせの種類
                    </span>
                </th>
            </tr>
            <tr class="admin-table__row">
                <td class="admin-table__item">
                    <form class="detail-form">
                        <div class="detail-form__item">
                            <input type="text" class="detail-form__item-input" name="content" value="">
                        </div>
                        <div class="detail-form__button">
                            <button class="detail-form__button-submit" type="submit">
                                詳細
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection



