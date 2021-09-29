@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')
    <h1>新規登録画面</h1>
        @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="zipcode">郵便番号</label>
            <input type="text" name="zipcode" id="zipcode" value="{{ old('zipcode', $zipcode) }}">
        </div>
        <div>
            <label for="address">住所</label>
            <textarea name="address" id="address" cols="30" rows="10">{{ old('address', $address) }}</textarea>
        </div>
        <div>
            <label for="phoneNumber">電話番号</label>
            <input type="text" name="phoneNumber" id="phoneNumber" value="{{ old('phoneNumber') }}">
        </div>
        <input type="submit" value="登録">
    </form>
    <button onclick="location.href='/customers/zipcode'">郵便番号検索に戻る</button>

@endsection
