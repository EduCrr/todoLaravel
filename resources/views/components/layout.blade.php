<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css"/>
    <title>{{$page ?? 'Todo'}}</title>
</head>
<body>
    <div class="container">
        <div class="sideBar">
            <img src="/assets/images/logo.png"/>
        </div>
        <div class="content">
            <nav>
               {{ $btn ?? null }}
            </nav>
            <main>
               {{ $slot }}
            </main>
        </div>
    </div>
    </html>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/assets/js/teste.js"></script>
</body>

</html>