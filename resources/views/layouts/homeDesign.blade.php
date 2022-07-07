<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROSISTER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Nobile&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Nobile&family=Playfair+Display&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Josefin+Sans:wght@700&family=Nobile&family=Playfair+Display&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>

        :root{
            --primary:#ffffff;
            --sec:#2a2a2a;
            --romain:#6f4843;
            --rotext:#f8cfcb;
        }

        body{
            padding:10px 15px;
            background:var(--romain);
            color:var(--primary);
            font-family: 'Grape Nuts', cursive;
            font-family: 'Nobile', sans-serif;
            font-family: 'Titillium Web', sans-serif;
        }

        .desktop{

        }

        .header{
            display: flex;
            justify-content: space-around;
            align-items:center;
            position: fixed;
            width: 100%;
            top:0;
            z-index:1;
            background:var(--romain);
            padding-top: 10px;
        }


        h3{
            letter-spacing: 6px;
            font-family: 'Grape Nuts', cursive;
            font-family: 'Titillium Web', sans-serif;
            flex-grow: 1;
            margin-left:23%;

        }

        a{
            text-decoration:none;
            color:var(--primary);
        }

        .dropdown-toggle{
            color:var(--primary);
        }

        .searchBox{
            display: flex;
            align-items: baseline;
        }

        .container{
            width:100%;
            display:flex;
            justify-content: space-between;
            margin-top: 3%;
        }

        .filter{
            width:17%;
            height:100vh;
            overflow:hidden;
            margin-top:5%;
            position: fixed;
            left: 7%;
            top: 3%;
        }

        .bagFilter{
            margin-bottom: 10%;
        }

        .accFilter{
            margin-top: 15%;
        }

        .list-group-item{
            background:var(--rotext);
        }

        .content{
            width:82%;
            margin-left: 20%;
            display:flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
        }

        .card{
            background: var(--romain);
            border-radius: 15px;
            border: 1px solid #000000;
            overflow: hidden;
            margin-top:10px;
            margin-bottom:10px;
            text-align:center;
        }

        .card-body{
            background: var(--rotext);
            color: #000000;
        }

        h5{
            display: block;
            height: fit-content;
            width: 100%;
        }

        .abtn{
            border:1px solid black;
        }

        .bbtn{
            border:1px solid var(--rotext);
            color:var(--rotext);
        }

        .mobile{
            display:none;
        }

        @media only screen and (max-width: 450px){
            .desktop{
                display:none;
            }

            .mobile{
                display:block !important;
                height:100vh;
            }

            .mheader{
                flex-wrap:nowrap;
                align-items: baseline;
                position: fixed !important;
                top: 0;
                padding-top: 10px;
                z-index:1;
                background:var(--romain);
                display:flex;
            }

            .extra{
                display: flex;
                width:70%;
                justify-content: end;
                align-items: center;
            }

            .msearch{
                width:50%;
                display: flex;
                align-items: baseline;
            }

            h4{
                flex-grow: 1;
                letter-spacing:5px;
                font-family: 'Josefin Sans', sans-serif;
            }

            .type{
                display: flex;
                justify-content: space-evenly;
                margin-top: 15%;
            }

            .dropdown-toggle {
                color: var(--primary);
                background: var(--romain);
                border: 1px solid white;
            }

            .mcontent{
                margin-top:5%;
                display:flex;
                justify-content:space-between;
                flex-wrap:wrap;
            }

        }
    </style>
</head>
<body>

<div class="desktop">
    <div class="header">
        <div class="searchBox">
        <i class="fa-solid fa-magnifying-glass"></i>
        <form action="{{route('searchData')}}" method="post">
        @csrf
        <input type="text" placeholder="Search" name="search" style="border:none;background:var(--romain);color:var(--primary)">
        </form>
        </div>

            <h3><a href="{{route('login')}}">ROSISTER</a></h3>

        <div class="cataBox">
            <div class="dropdown">
              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Categories
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{route('bagOnly')}}">Bag</a>
                <a class="dropdown-item" href="{{route('acceOnly')}}">Accessory</a>
                <a class="dropdown-item" href="{{route('hatOnly')}}">Hat</a>
                <a class="dropdown-item" href="{{route('/')}}">All</a>
              </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="filter">
            <div class="bagFilter">
            <label>Bag Size</label>
            <div class="list-group">
                  <a href="{{route('bagSize/small')}}" class="list-group-item list-group-item-action">Small</a>
                  <a href="{{route('bagSize/medium')}}" class="list-group-item list-group-item-action">Medium</a>
                  <a href="{{route('bagSize/large')}}" class="list-group-item list-group-item-action">Large</a>
                </div>
            </div>

            <div class="accFilter">
            <label>Accessory Type</label>
            <div class="list-group">
                @foreach($acceTypes as $acceType)
                  <a href="{{route('acceType',$acceType->name)}}" class="list-group-item list-group-item-action">{{$acceType->name}}</a>
                @endforeach
                </div>
            </div>
        </div>

        <div class="content">
            @yield('desktop')
        </div>
    </div>

</div>

<div class="mobile">
        <div class="mheader">
            <h4><a href="{{route('login')}}">ROSISTER</a></h4>
            <div class="extra">
                <div class="dropdown" style="margin-right: 5%;">
                  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-solid fa-grip-lines"></i>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('bagOnly')}}">Bag</a>
                    <a class="dropdown-item" href="{{route('acceOnly')}}">Accessory</a>
                    <a class="dropdown-item" href="{{route('hatOnly')}}">hat</a>
                    <a class="dropdown-item" href="{{route('/')}}">All</a>
                  </div>
                </div>
                <div class="msearch">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form action="{{route('searchData')}}" method="post">
                @csrf
                <input type="text" placeholder="Search" name="search" style="width: 60%;border:none;background:var(--romain);color:var(--primary);" name="search">
                </form>
                </div>
            </div>
        </div>

        <div class="type">

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bag Size
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{route('bagSize/small')}}">Small</a>
                    <a class="dropdown-item" href="{{route('bagSize/medium')}}">Medium</a>
                    <a class="dropdown-item" href="{{route('bagSize/large')}}">Large</a>
                </div>
            </div>

            <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Accessory Type
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach($acceTypes as $acceType)
                <a class="dropdown-item" href="{{route('acceType',$acceType->name)}}">{{$acceType->name}}</a>
            @endforeach
            </div>
        </div>
    </div>

    <div class="mcontent">
        @yield('mobile')
    </div>
</div>

</body>
</html>
