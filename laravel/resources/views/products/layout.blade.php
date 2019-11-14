<!DOCTYPE html>
<html>
<head>
    <title>What's in my fridge?</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
table{background-color: #fff;color: black;}
table strong{color: black;}
h2,h1{color: #fff; font-family:'Raleway', sans-serif;}
strong,p{color: #fff;}
th,td{font-family:'Raleway', sans-serif;}
body {background-image: url('https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80');
    background-size:cover;}
</style>

    <div class="container">
     @yield('content')
    </div>
    
</body>
</html>