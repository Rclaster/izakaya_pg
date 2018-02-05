<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="">
<title>QRコード作成</title>
<link rel='stylesheet' href='css/materialize.css' />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/demo.css" rel="stylesheet">
<link rel="stylesheet" href="./iconfont/material-icons.css">
<link rel="stylesheet" href="css/style_pro.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/fakeLoader.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Chathura">
<script src="js/jquery1.7.2.min.js"></script>
<script src="js/script.js"></script>
<script src='js/materialize.js'></script>
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js'></script>
<script src="css/card.js"></script>

</head>
<body>

<div id="fakeLoader"></div>

<!-- サイドバー -->
<section>
  <div class="wh DSmenu">
  <ul>
    <a href="sarada.php"><li>サラダ</li></a>
    <a href="yaki.php"><li>焼き物</li></a>
    <a href="age.php"><li>揚げ物</li></a>
    <a href="fish.php"><li>魚</li></a>
    <a href="dessert.php"><li>デザート</li></a>
    <a href="drink.php"><li>ドリンク</li></a>
  </ul>
  
  <div class="waves-button">
    <a href="card.php" class="waves-effect waves-light btn">クレジット登録</a>
    <a href="qr.php" class="waves-effect waves-light btn">QRコード作成</a>
    <a href="yaki.php" class="waves-effect waves-light btn list" style="width: 252px">注文リスト</a>
    <a href="yaki.php" class="waves-effect waves-light btn list" style="width: 252px">おあいそ</a>
  </div>
  <!-- end-->
  <div class="DSbtn">
  <div class="hambarg"></div>
  <div class="hambarg"></div>
  <div class="hambarg"></div>
  </div>
  </div>
</section>
<!-- / サイドバー -->

<!-- FabButton -->
<a id="cart" class="btn-floating btn-large waves-effect waves-light blue" data-target="modal-demo">
  <i class="material-icons">shopping_cart</i>
</a>
<!-- / FabButton -->
<!-- カートの中 -->
<div id="modal-demo" class="modal">
    <div class="modal-content">
      <h2>注文カート</h2>
      <table id="hor-minimalist-a">
      <thead>
          <tr>
              <th scope="col">商品名</th>
              <th scope="col">数量</th>
              <th scope="col">値段</th>
              <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
          <tr><td>シーザーサラダ</td><td>1</td><td>750円</td>
            <td><a class=" modal-action modal-close waves-effect waves-green green btn-flat">削除</a></td>
          </tr>
          <tr><td>ししゃも</td><td>2</td><td>360円</td>
            <td><a class=" modal-action modal-close waves-effect waves-green green btn-flat">削除</a></td>
          </tr>
      </tbody>
  　</table>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green red btn-flat">注文</a>
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">閉じる</a>
    </div>
</div>
<!-- / カートの中 -->

<!-- メイン画像 -->
<div id="mainBanner" class="mainImg">
   <div class="inner">
    <img src="images/main_sarada.jpg" alt="" width="500" height="150">
        <div class="slogan">
      <ol class="breadcrumb">
        <li><a href="home.php"><span class=aria-hidden="true"></span>ホーム</a></li>
        <li class="active">QRコード作成</li>
      </ol>
    </div>
   </div>
</div>
<!-- / QRコード作成 -->
<div id="to"></div>
<div class="site" style="height: 400px; background-color: white;">
  <header id="header" class="site-header" role="banner">
  </header>
  <div id="main" class="site-main">
    <div id="demo">
      <div id="qrcode"></div>
    </div>
  </div>
</div>

<script src='js/jquery.qrcode.min.js'></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  var home;
  home = "192.168.100.138/home.php";
  $('#qrcode').qrcode(home);

  (adsbygoogle = window.adsbygoogle || []).push({});

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46849303-1', 'on-ze.com');
  ga('send', 'pageview');
</script>
</div>
<script src="js/fakeLoader.min.js"></script>
<script src="js/card.js"></script>
<script>
new Card({
          form: document.querySelector('form'),
          container: '.card-wrapper'
      });

$("#fakeLoader").fakeLoader({
  timeToHide: 1000,
  zIndex: "99999",
  spinner: "spinner2",
  bgColor: "black",
  //imagePath: ""
});
</script>
</body>
</html>