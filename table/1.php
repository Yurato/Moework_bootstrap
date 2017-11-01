<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Moework</title>

  <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
  <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Bootstrap core CSS -->
  <link href="/test/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/test/jumbotron.css" rel="stylesheet">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
  <script type="text/javascript">
  var edit = function() {
  $('.click2edit').summernote({focus: true});
  };

  var save = function() {
  var markup = $('.click2edit').summernote('code');
  $('.click2edit').summernote('destroy');
  };
  </script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/test/index.php">모에워크 운영진 페이지</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
        <form class="navbar-form navbar-right">
          <button type="button" class="btn btn-success" onclick="location.href='sign.php';">Sign in</button>
        </form>
        <ul class="nav navbar-nav">
          <li><a href="/test/index.php">운영진 소개</a></li>
          <li><a href="/irc.php">회의소</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">게시판<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li class="active"><a href="#">건의게시판</a></li>
              <li><a href="#">자유게시판</a></li>
              <li><a href="#">한줄 덕담</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit</button>
<button id="save" class="btn btn-primary" onclick="save()" type="button">Save</button>
<div class="click2edit"></div>
</body>
</html>
