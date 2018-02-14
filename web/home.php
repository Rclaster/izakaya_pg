<?php
// DBとの接続
require_once 'db/dbconnect.php';
require('../vendor/autoload.php');
$sql = "SELECT cart_pro_name, cart_pro_count, cart_pro_pri FROM `cart` WHERE 1";

$result = $mysqli -> query($sql);
//クエリー失敗
if(!$result) {
    echo $mysqli->error;
    exit();
}
//レコード件数
$row_count = $result->num_rows;
//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
}
//結果セットを解放
$result->free();
// データベース切断
$mysqli->close();
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<meta name="keywords" content="">
<title>サイトトップ</title>
<link rel='stylesheet' href='css/materialize.css' />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/demo.css" rel="stylesheet">
<link rel="stylesheet" href="./iconfont/material-icons.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/fakeLoader.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Chathura">
<script src="js/jquery1.7.2.min.js"></script>
<script src="js/script.js"></script>
<script src='js/materialize.js'></script>
</head>
<body>
	<div id="fakeLoader"></div>

<!-- サイドバー -->
<section>
	<div class="wh DSmenu">
	<ul>
		<a href="subPage/sarada.php"><li>サラダ</li></a>
		<a href="subPage/yaki.php"><li>焼き物</li></a>
		<a href="subPage/age.php"><li>揚げ物</li></a>
		<a href="subPage/fish.php"><li>魚</li></a>
		<a href="subPage/dessert.php"><li>デザート</li></a>
		<a href="subPage/drink.php"><li>ドリンク</li></a>
	</ul>

	<div class="waves-button">
		<a href="subPage/card.php" class="waves-effect waves-light btn">クレジット登録</a>
		<a href="subPage/qr.php" class="waves-effect waves-light btn">QRコード作成</a>
		<a href="subPage/yaki.php" class="waves-effect waves-light btn list" style="width: 252px">注文リスト</a>
		<a href="subPage/yaki.php" class="waves-effect waves-light btn list" style="width: 252px">おあいそ</a>
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
	  </div>
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
		    	<?php 
		          foreach($rows as $row){
		    	?>
		        <tr><td><?php echo htmlspecialchars($row['cart_pro_name'],ENT_QUOTES,'UTF-8'); ?></td><td><?php echo htmlspecialchars($row['cart_pro_count'],ENT_QUOTES,'UTF-8'); ?></td><td><?php echo htmlspecialchars($row['cart_pro_pri'],ENT_QUOTES,'UTF-8'); ?>円</td>
		        	<td><a class=" modal-action modal-close waves-effect waves-green green btn-flat">削除</a></td>
		        </tr>
		        <?php
		    	}
		    	?>
		    </tbody>
		</table>

	  <div class="modal-footer">
	  	<a href="#!" class=" modal-action modal-close waves-effect waves-green red btn-flat">注文</a>
	    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">閉じる</a>
	  </div>
</div>
<!-- / カートの中 -->

<!-- メイン画像 -->
<div id="mainBanner" class="mainImg">
  <div class="inner">
		<img src="images/main_pic2.jpg" alt="" width="500" height="150">
        <div class="slogan">
			<ol class="breadcrumb">
				<li class="active"><a href="home.php"><span class= aria-hidden="true"></span>ホーム</a></li>
			</ol>
		</div>
   </div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
	<main>
  		<section class="card">
  			<a href="subPage/sarada.php">
			  <img class="card-img" src="images/sarada.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">サラダ</h1>
			  </div>
		  	</a>
		</section>

		<section class="card">
		    <a href="subPage/yaki.php">
			  <img class="card-img" src="images/yaki.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">焼き物</h1>
			  </div>
		  	</a>
		</section>

		<section class="card">
		  	<a href="subPage/age.php">
			  <img class="card-img" src="images/age.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">揚げ物</h1>
			  </div>
		  	</a>
		</section>

		<section class="card">
		    <a href="subPage/fish.php">
			  <img class="card-img" src="images/fish.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">魚</h1>
			  </div>
		  	</a>
		</section>

		<section class="card">
		    <a href="subPage/dessert.php">
			  <img class="card-img" src="images/dessert.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">デザート</h1>
			  </div>
		  	</a>
		</section>

		<section class="card">
		    <a href="subPage/drink.php">
			  <img class="card-img" src="images/drink.jpg" alt="">
			  <div class="card-content">
			    <h1 class="card-title">ドリンク</h1>
			  </div>
		  	</a>
		</section>
	</main>
</div>
<!-- / WRAPPER -->
<script src="js/fakeLoader.min.js"></script>
<script>
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
