<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'Project1')</title>
  
</head>
<body>

    <ul>
        <li><a href="/">Home</a> </li>
    <li><a href="/about">About us</a> </li>
    <li><a href="/contact">Contact</a> </li>
 </ul>
    @yield('content')

</body>
</html>