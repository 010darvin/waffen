<!DOCTYPE html>
<html lang="en">
<head>
    @if ($title)
            <title>{{$title}}</title>
    @else  
            <title>Waffen</title>
    @endif        
   
</head>
<body>

<div><a href="/home">Home</a> | <a href="/about">About</a> |  <a href="/articles">Articles</a>
    <hr />
    <div class="container">
        @yield('content')
    </div>
</div>

    
</body>
</html>
