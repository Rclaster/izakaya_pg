<?php
// DBとの接続
require_once 'db/dbconnect.php';
if(isset($_POST['insert'])) {
  $number = $mysqli->real_escape_string($_POST['number']);
  $name = $mysqli->real_escape_string($_POST['name']);
  $expiry = $mysqli->real_escape_string($_POST['expiry']);
  $cvc = $mysqli->real_escape_string($_POST['cvc']);
  // クエリの実行
  $sql = "INSERT INTO card_tb VALUES(1, '$number', '$name', '$expiry', '$cvc')";
  $result = $mysqli -> query($sql);

  //クエリー失敗
  if(!$result) {
      echo $mysqli->error;
      exit();
  }
  header("Location: home.php");
}
 ?>
<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="">
<title>クレジットカード入力</title>
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



<!-- メイン画像 -->
<div id="mainBanner" class="mainImg">
   <div class="inner">
    <img src="images/card_logo.jpg" alt="" width="500" height="150">
        <div class="slogan">
      <ol class="breadcrumb">
        <li><a href="home.php"><span class=aria-hidden="true"></span>ホーム</a></li>
        <li class="active">クレジットカード入力</li>
      </ol>
    </div>
   </div>
</div>
<!-- / メイン画像 -->
<div class="demo-background">
  <div class="demo-container">
      <div class="card-wrapper"></div>
      <div class="form-container active">
          <form method="POST">
              <input placeholder="Card number" type="tel" name="number">
              <input placeholder="Full name" type="text" name="name">
              <input placeholder="MM/YY" type="tel" name="expiry">
              <input placeholder="CVC" type="number" name="cvc">

              <input type="submit"  name="insert" class="red btn-flat" style="margin-left: 30px;">

          </form>
      </div>
  </div>
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