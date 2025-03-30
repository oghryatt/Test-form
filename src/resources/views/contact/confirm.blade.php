<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ詳細</title>
   <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <div class="detail-container">
        <header>
            <h1>Confirm</h1>
        </header>
       <main class="detail-content">
             <h1>Confirm</h1>
            <div class="detail-item">
                <span class="detail-label">お名前:</span>
                <span class="detail-value">{{ $data['last_name'] }} {{ $data['first_name'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">性別:</span>
                <span class="detail-value">{{ $data['gender'] == 'male' ? '男性' : '女性' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">メールアドレス:</span>
                <span class="detail-value">{{ $data['email'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">電話番号:</span>
                <span class="detail-value">{{ $data['phone'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">住所:</span>
                <span class="detail-value">{{ $data['address'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">建物名:</span>
                <span class="detail-value">{{ $data['building'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">お問い合わせの種類:</span>
                <span class="detail-value">{{ $data['category_name'] }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">お問い合わせ内容:</span>
                <span class="detail-value">{{ $data['content'] }}</span>
            </div>
            <button class="-button" >送信</button>
            <span class="button">
             修正</span>
        </main>

    </div>
</body>
</html>
