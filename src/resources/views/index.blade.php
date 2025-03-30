<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <p class="title">FashionablyLate</p>
    </header>
    <h1>Contact</h1>
    <form method="POST" action="/contact/confirm">
        @csrf
        <div>
            <label for="last_name">姓 ※</label>
            <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @error('last_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="first_name">名 ※</label>
            <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}">
            @error('first_name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="gender">性別 ※</label>
            <select id="gender" name="gender">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>男性</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>女性</option>
                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>その他</option>
            </select>
            @error('gender')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">メールアドレス ※</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="phone">電話番号 ※</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="address">住所 ※</label>
            <input type="text" id="address" name="address" value="{{ old('address') }}">
            @error('address')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="type">お問い合わせ種類 ※</label>
            <select id="type" name="type">
                <option value="" disabled {{ old('type') ? '' : 'selected' }}>選択してください</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('type') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('type')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">お問い合わせ内容 ※</label>
            <textarea id="content" name="content" maxlength="120">{{ old('content') }}</textarea>
            @error('content')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">確認画面</button>
    </form>
</body>
</html>
