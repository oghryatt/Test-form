<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/Admin.css') }}" />
</head>
<body>
    <header>
        <a href="/logout">logout</a>
        <span class="title">FashionablyLate</span>
    
    </header>

    <main>
        <h1>Admin</h1>
        
        <form class="form" action="/admin" method="post">
            @csrf
            <input type="text" name="name" placeholder="名前" value="{{ request('name') }}">
            <input type="text" name="email" placeholder="メールアドレス" value="{{ request('email') }}">
            <select name="gender">
                <option value="all" {{ request('gender') == 'all' ? 'selected' : '' }}>性別</option>
                <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
                <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
                <option value="other" {{ request('gender') == 'other' ? 'selected' : '' }}>その他</option>
           
            <input type="text" name="type" placeholder="お問い合わせ種類" value="{{ request('type') }}">
            <input type="date" name="date" value="{{ request('date') }}">
            <button type="submit">検索</button>
            <button type="reset" href='/search';>リセット</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>登録日</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inquiries as $inquiry)
                    <tr>
                        <td>{{ $inquiry->id }}</td>
                        <td>{{ $inquiry->name }}</td>
                        <td>{{ $inquiry->email }}</td>
                        <td>{{ $inquiry->created_at }}</td>
                        <td>
                            
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">データが見つかりませんでした。</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="pagination">
            {{ $inquiries->links() }}
        </div>
    </main>

</body>
</html>
