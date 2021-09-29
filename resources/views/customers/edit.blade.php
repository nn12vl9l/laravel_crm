@extends('layouts.main')

@section('title', '編集画面')

@section('content')
    <h1>編集画面</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('customers.update', $customer) }}" method="post">
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
        <input type="submit" value="更新">
    </form>
    <button onclick="location.href='{{ route('customers.show', $customer) }}'">戻る</button>
@endsection
