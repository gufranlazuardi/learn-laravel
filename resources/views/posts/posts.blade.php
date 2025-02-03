<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts</title>
</head>
<body>  
    <p>tsjadhfjsakfkhas</p>

    <ul id="post-list"></ul>

    <div class="flex flex-col">
        <p>laskdjfa</p>
        <p>lasjdfjla</p>
    </div>

    {{-- jquery harus diatas --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/assets/js/posts/' . $ajax . '.js') }}"></script>
</body>
</html>