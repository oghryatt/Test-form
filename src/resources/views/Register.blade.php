<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate - 登録</title>
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}" />
</head>
<body>
        <a href="/login" class="login-link">login</a>
        <span class="title">FashionablyLate</span>
    </header>

    <main>
        <section class="register-form">
            <form method="POST" action="/register">
                @csrf
                <h2>Register</h2>
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input type="text" id="name" name="name" placeholder="例: 山田 太郎" required>
                    @error('name')
                       {{message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" placeholder="例: test@example.com" required>
                    @error('email')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input type="password" id="password" name="password" placeholder="例: coachtech1106" required>
                    @error('password')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="submit-button">登録</button>
            </form>
        </section>
    </main>
</body>
</html>