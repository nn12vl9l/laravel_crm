@extends('layouts.main')

@section('title', '編集画面')

@section('content')
    <h1>編集画面</h1>
    <form action="/customers/{{ $customer->id }}" method="post">
        @csrf
        @method('PATCH')

        <p>
            <label for="name">名前</label>
            <input type="text" name='name' value="{{ old('name', $customer->name) }}">
        </p>
        <p>
            <label for="email">メールアドレス</label>
            <input type="text" name='email' value="{{ old('email', $customer->email) }}">
        </p>
        <p>
            <label for="zipcode">郵便番号</label>
            <input type="text" name='zipcode' value="{{ old('zipcode', $customer->zipcode) }}">
        </p>
        <p>
            <label for="address">住所</label>
            <textarea type="text" name="address">{{ old('address', $customer->address) }}</textarea>
        </p>
        <p>
            <label for="phoneNumber">電話番号</label>
            <input type="text" name='phoneNumber' value="{{ old('phoneNumber', $customer->phoneNumber) }}">
        </p>
        <div class="button-group">
            <input type="submit" value="更新">
            <button onclick="location.href='/customers/{{ $customer->id }}'">戻る</button>
        </div>
    </form>
@endsection
