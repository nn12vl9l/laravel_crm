@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')
    <h1>新規登録画面</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
    <div>
        <label for="name">名前</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}" required>
    </div>
    <div>
        <label for="zipcode">郵便番号</label>
        <input type="text" name="zipcode" id="zipcode" required value="{{ old('zipcode, $zipcode') }}">
    </div>
    <div>
        <label for="address">住所</label>
        <textarea name="address" id="address" cols="30" rows="10" required>{{ $address }}</textarea>
    </div>
    <div>
        <label for="phoneNumber">電話番号</label>
        <input type="text" name="phoneNumber" id="phoneNumber" value="{{ old('phoneNumber') }}" required>
    </div>
    <input type="submit" value="登録">
</form>
<button onclick="location.href='{{ route('customers.zipcode')' }}'">郵便番号検索に戻る</button>
@endsection
