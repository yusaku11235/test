<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>あああ</title>
</head>
<body>
    <h1>つぶやきを編集する</h1>
    <div>
        <a href="{{route('tweet.index')}}">戻る</a>
        <p>投稿フォーム</p>
        @if (session('feedback.success'))
            <p style="color: green">{{ session('feedback.success')}}</p>
        @endif
        <form action="{{ route('tweet.update.put',['tweetId' => $tweet->id]) }}" method="post">
            @method('PUT')
            @csrf 
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea id="tweet-content" type="text" name="bbb" placeholder="つぶやきを入力">{{ $tweet -> content }}</textarea>

            @error('bbb')
            <p style="color: red;">{{ $message }}</p>
            @endError

            <button type="submit">投稿</button>

        </form>
    </div>
    </body>
</html>