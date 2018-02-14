<?php
// DBとの接続
require_once 'db/dbconnect.php';
//データベース選択(1.サラダ、2.焼き物、3.揚げ物、4.魚、5.デザート、6.ドリンク)
$sql = "SELECT product_id, product_name, product_price FROM product_tb WHERE con_pro = 1";

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
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>サラダ</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
<meta name="robots" content="noindex, follow">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.css' />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/demo.css" rel="stylesheet">
<link rel="stylesheet" href="./iconfont/material-icons.css">
<link rel="stylesheet" href="css/style_pro.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/fakeLoader.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Chathura">
<script src="js/jquery1.7.2.min.js"></script>
<script src="js/script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.js'></script>

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

<!-- メイン画像 -->
<div id="mainBanner" class="mainImg">
   <div class="inner">
		<img src="images/main_sarada.jpg" alt="" width="500" height="150">
        <div class="slogan">
			<ol class="breadcrumb">
				<li><a href="home.php"><span class=aria-hidden="true"></span>ホーム</a></li>
				<li class="active">サラダ</li>
			</ol>
		</div>
   </div>
</div>
<!-- / メイン画像 -->

<div id="wrapper">
	<main>
		<!-- データベースから取得してきた商品リスト -->
		<?php 
		if($row_count != 0) {
          foreach($rows as $row){
    	?>
  		<section class="card">
		  <img class="card-img" src="http://webcreatorbox.com/sample/images/bear.jpg" alt="">
		  <div class="card-content">
		    <h1 class="card-title"><?php echo htmlspecialchars($row['product_name'],ENT_QUOTES,'UTF-8'); ?></h1>
		    <div class="card-footer">
		    	<p class="card-text">¥<?php echo htmlspecialchars($row['product_price'],ENT_QUOTES,'UTF-8'); ?></p>
		    	<a class="waves-effect waves-light btn" value=<?php echo htmlspecialchars($row['product_price'],ENT_QUOTES,'UTF-8'); ?> name="id">カートに追加</a>
		    </div>
		  </div>
		</section>
		<?php 
    		}
    	}else{
    	?>
    	<div class="no_query">
		    <p>存在しません。</p>
		</div>
    	<?php
    	}
    	?>
	</main>
</div>

<!-- カートの中 -->
<?php
$sql2 = "SELECT cart_pro_name, cart_pro_count, cart_pro_pri FROM `cart` WHERE 1";

$result2 = $mysqli -> query($sql2);
//クエリー失敗
if(!$result2) {
    echo $mysqli->error;
    exit();
}
//レコード件数
$row_count2 = $result2->num_rows;
//連想配列で取得
while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){
    $rows2[] = $row2;
}
//結果セットを解放
$result2->free();
?>
<div id="modal-demo" class="modal" style="width: 90%;">
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
              foreach($rows2 as $row2){
          ?>
            <tr><td><?php echo htmlspecialchars($row2['cart_pro_name'],ENT_QUOTES,'UTF-8'); ?></td><td><?php echo htmlspecialchars($row2['cart_pro_count'],ENT_QUOTES,'UTF-8'); ?></td><td><?php echo htmlspecialchars($row2['cart_pro_pri'],ENT_QUOTES,'UTF-8'); ?>円</td>
              <td><a class=" modal-action modal-close waves-effect waves-green green btn-flat">削除</a></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
	　</table>
	  <div class="modal-footer">
	  	<a href="#!" class=" modal-action modal-close waves-effect waves-green red btn-flat" style="margin-right: 14px;">注文</a>
	    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">閉じる</a>
	  </div>
</div>
<!-- / カートの中 -->
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