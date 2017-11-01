<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Moework</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- IE8 에서 HTML5 요소와 미디어 쿼리를 위한 HTML5 shim 와 Respond.js -->
    <!-- WARNING: Respond.js 는 당신이 file:// 을 통해 페이지를 볼 때는 동작하지 않습니다. -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="#">모에워크 운영진 페이지</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <form class="navbar-form navbar-right">
            <button type="button" class="btn btn-success" onclick="location.href='sign.php';">Sign in</button>
          </form>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#contact">운영진 소개</a></li>
            <li><a href="/test/irc/">회의소</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">게시판<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">건의게시판</a></li>
                <li><a href="#">자유게시판</a></li>
                <li><a href="/test/table/1.php">한줄 덕담</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>운영진 소개</h1>
        <p>우리 모에워크는 최고의 운영진들로 구성되어 운영됩니다!</p>
      </div>
    </div>

    <div class="container">
      <div class="container marketing">
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>한빛가람 - 그룹장</h2>
            <p>현직 웹 프로그래머. <br><br>하루하루 프로그래머로써 바쁘게 살아가는 와중에 생활의 안식을 찾고자 케프랑 같이 모에워크를 생성 및 개발한다. 팀원중 유일한 사회인. 그룹장을 맡으면서 최고 군림하게 되었다.</p>
            <p><a class="btn btn-default" href="http://hanb.jp/" role="button" target="_blank">개인 프로필</a></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>케프 - 디자이너</h2>
            <p>반도의 고등학생. <br><br>프로그래밍 공부겸 취미로 모에워크의 간단한 프로그래밍 및 디자인을 담당한다. 지금 보고있는 이 페이지도 케프가 만들었다고.. 하지만, 매우 병약해서 약으로 살아간다고 무방할 정도로 약을 많이 먹고산다.</p>
            <p><a class="btn btn-default" href="https://hanbit.moe/test/keff/" role="button" target="_blank">개인 프로필</a></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>렌디 - 모니터링</h2>
            <p>지극히 평범한 컴공과 대학교 1학년. <br><br>시키면 뭐든지 잘한다. 팀 내에서 뭔가 할려고 하지만, 딱히 할 일이 없다. 위의 2명이 거의 모든일을 알아서 다 처리해서.... 실제로 일을해도 하는일은 버그 리포트정도. 나이는 위의 한빛가람과 같다.</p>
            <p><a class="btn btn-default" href="#" role="button">개인 프로필</a></p>
          </div>
          <div class="col-lg-4" style="padding-bottom:0px">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>커뿌 - 소셜담당</h2>
            <p>맨날 pc방에 틀어박혀있는 게임페인. <br><br> 푸릇한 청소년이지만 얼굴은 20대 아저씨. 인터넷 페인이라서 SNS쪽을 담당한다는 카더라 통신이 있다. 이제 곧 고등학교와의 싸움을 앞두는중. 팀원중 가장 막둥이. </p>
            <p><a class="btn btn-default" href="#" role="button">개인 프로필</a></p>
          </div>
        </div>
      </div>
      <hr>
      <footer>
        <p>Moe Work © Company 2017</p>
      </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
