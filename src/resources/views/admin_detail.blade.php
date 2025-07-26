@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="admin_detail__content">
    <form class="form">
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お名前
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="last_name" value="サンプルテキスト">
                        <input type="text" name="first_name" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        性別
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        メールアドレス
                    </th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        電話番号
                    </th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel1" value="サンプルテキスト">
                        <input type="text" name="tel2" value="サンプルテキスト">
                        <input type="tel" name="tel3" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        住所
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        建物名
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お問い合わせの種類
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="content" value="サンプルテキスト">
                    </td>
                </tr>
                <tr class="confirm-table___row">
                    <th class="confirm-table__header">
                        お問い合わせ内容
                    </th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="サンプルテキスト">
                    </td>
                </tr>
            </table>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">
                削除
            </button>
        </div>
    </form>
</div>
@endsection
