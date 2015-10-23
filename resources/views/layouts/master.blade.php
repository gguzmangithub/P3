<!doctype html>
<html>
<head>
    <title>
        @yield('title','Developers Best Friend')
    </title>

    <meta charset='utf-8'>
    <link href="/css/p3.css" type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cerulean/bootstrap.min.css' rel='stylesheet'>

    <meta charset='utf-8'>

   <meta name='viewport' content='width=device-width, initial-scale=1'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>
    <header>
        <img
        src='http://ecx.images-amazon.com/images/I/61%2BJfwUsMfL._SL500_.png'
        style='width:300px'
        alt='RCG Logo'>
    </header>
<nav>
  <ul>
    <li><a href='/'>Home</a></li>
    <li><a href='/generator'>Lorem Ipsum Paragrahs Generator</a></li>
    <li><a href='/randomuser'>Random User Generator</a></li>
  </ul>
</nav>
     <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
