<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mpost</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<style>
    .bd {
        background-color: skyblue; 
    }
    .nav-b{
        margin-top: 1%;
        padding:1%;
        display: flex;
        background-color:white;
        justify-content: space-between;
       
    }
    .lists{
        display:flex;
    }
    .lists > li{
        padding: 6px;
    }
    .wrap{
        display: flex;
        justify-content: center;
    }
    .wrap1{
        width: 66%;
        background-color: white;
        padding: 1% 2%;
        margin-top: 3%;
        border-radius: 12px;
    }
    .wrap2{
        width: 40%;
        background-color: white;
        padding: 1% 2%;
        margin-top: 3%;
        border-radius: 12px;
    }
    .reg-form{
        display: flex;
        justify-content: space-between;
        padding: 1%;
        border: 2px solid gray;
        border-radius: 12px;
        margin-top:2%;
        padding-left: 3%;
    }
    .sr-only{
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
    }
   
</style>
<body>
    <body class="bd">
        <nav class="nav-b">
            <ul class="lists">
                <li >
                    <a href="">Home</a>
                </li>
                <li ><a href="">Dashboard</a></li>
                <li ><a href="">Posts</a></li>
            </ul>
            <ul class="lists">
                <li >
                    <a href="">Fredrick Kimathi</a>
                </li>
                <li ><a href="">Login</a></li>
                <li ><a href="{{ route('register') }}">Register</a></li>
                <li ><a href="">Logout</a></li>
            </ul>
        </nav>
        
    </body>
    @yield('content')
</body>
</html>