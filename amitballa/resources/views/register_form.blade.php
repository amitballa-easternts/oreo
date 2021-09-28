<!DOCTYPE html>
<title>Amit</title>
<head>
    <link rel="stylesheet" href="/my.css">
    {{-- <script src="my.js"></script> --}}
</head>
<body>

<div class="container">
<article>
<div class="card ">
    <div class="card-header">
        <h1>Register</h1>
    </div>
    <div class="card-body">
        <form method="post" action="user">
            @csrf
            <input type="text" name="user_name" placeholder="Eneter Name" >
            <br><br>
            <input type="password" name="password" placeholder="Eneter password">
            <br>
            <br>
            <button type="submit">login</button>
        </form>
        </form>
    </div>
</div>
</article>
</div>

</body>
