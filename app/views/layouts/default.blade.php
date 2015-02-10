<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dormitory Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <style>
  @import url(//fonts.googleapis.com/css?family=Lato:700);

  body {
    margin:30px 50px 75px 50px;
    font-family:'Lato', sans-serif;
    text-align:left;
    color: #999;
  }

  .welcome {
    width: 300px;
    height: 200px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -150px;
    margin-top: -100px;
  }

  a, a:visited {
    text-decoration:none;
  }

  h1 {
    font-size: 32px;
    margin: 16px 0 0 0;
    color: #777;
  }

  table, th, td {
    border: 1px solid grey;
    padding: 10px;
  }
  </style>
</head>

  <body>
      @yield('content')
  </body>


</html>
