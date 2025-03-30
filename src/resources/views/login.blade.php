<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}" />
</head>
<body>
    <header>
        <span class="title">FashionablyLate</span>
        <a href="/register">Register</a>

    </header>
    <main>
        <form method="POST" action="/login">
            @csrf
            <h2>Login</h2>
            <div>
                <label for="email">メールアドレス</label>
                <input type="text" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password">
                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">ログイン</button>
        </form>
    </main>
</body>
</html>
