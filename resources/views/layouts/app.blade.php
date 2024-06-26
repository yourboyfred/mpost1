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
        /* padding: 1%; */
        border: 2px solid gray;
        border-radius: 12px;
        
        margin-top:2%;
        /* padding-left: 3%; */
    }
    .phn{
        padding: 2%; 
        padding-left: 3%; 
        border-radius: 12px;
        

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
    .sub-btn{
        background-color: green;
        width: 80%;
        color: white;
        padding: 2%;
        border-radius: 8px;
        margin-top:8%;
        margin-left: 10%;
        padding-left: 3%;
    }
    .sub-btn1{
        background-color: green;
        width: 70%;
        color: white;
        padding: 1%;
        border-radius: 8px;  
        margin-left: 10%;
        padding-left: 3%;
    }
    .error-txt{
        color:red;
        font-size: 13px;
        margin-left:5px;
    }
    .phn:focus{
        width: 100%;
        border: magenta;
    }
    .mb-4{
        margin-top: 10px;
        border: 2px solid cyan;
        border-radius: 12px;
    
    }
    .mb-5{
        margin: 10px;
    }
    .p-text{
        font-weight:bold;
    }
    .p-text1{
        color: gray;
        font-size:12px;
        padding-left:1%;
    }
    .ta1{
        width:100%;
        height:20%;
        padding: 1%;
        padding-bottom: 15%;

    }
   
   
</style>
<body class="bg-cyan-200">
    <div class="bd">
        <nav class="nav-b">
            <ul class="lists">
                <li >
                    <a href="/">Home</a>
                </li>
                <li ><a href="{{route('dashboard')}}">Dashboard</a></li>
                <li ><a href="{{ route('posts') }}">Posts</a></li>
            </ul>
            <ul class="lists">
                @auth
                    <li >
                        <a href="">{{auth()->user()->name}}</a>
                    </li>  
                    <li >
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                        
                    </li>   
                @endauth

                @guest
                    <li ><a href="{{route ('login')}}">Login</a></li>
                    <li ><a href="{{ route('register') }}">Register</a></li>
                @endguest
                
                
                
            </ul>
        </nav>
        
    </div>
    @yield('content')
</body>
</html>