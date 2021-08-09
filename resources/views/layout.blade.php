<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{mix('/css/theme.css')}}"> --}}
    <title>Document</title>
</head>
<body>
   
   
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <div class="container-fluid">
                {{-- <a class="navbar-brand" href="#">primary</a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                    aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
             
                   <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('posts.create')}}">New Question</a>
                    </div>
                </div>

            </div>
        </nav>
        <div class="container">
           {{-- @if(session()->has('status'))

      <h3 style="color: green;">
        {{ session()->get('status')}}
      </h3>
     @endif --}}

          @yield('content')
          
          </div>     

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>