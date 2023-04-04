<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz59</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div id="container">

<header>

<h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="SAMPLE COMPANY"></a></h1>

<!--メニュー-->
<nav id="menubar">
<ul>
<li><a href="index.html">HOME</a></li>
<li><a href="company.html">COMPANY</a></li>
<li><a href="">SERVICE</a>
	<ul>
	<li><a href="service.html">メニューメニュー</a></li>
	<li><a href="service.html">メニュー</a></li>
	<li><a href="service.html">メニュー</a></li>
	<li><a href="service.html">メニュー</a></li>
	</ul>
</li>
<li><a href="faq.html">FAQ</a></li>
<li><a href="contact.html">CONTACT</a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
</ul>
</nav>

<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
<span></span><span></span><span></span>
</div>

</header>

<main>

<section>

<h2>送信完了</h2>

<!-- フォームの情報はここからです -->
<form name="form1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
<input type="hidden" name="mode" value="finish" />
<!-- 処理終了 -->
<p>送信が完了しました。</p>
</form>
<!-- フォームの情報はここまでです -->

</section>

</main>

<footer>

<ul id="footermenu">
<li><a href="#">フッターメニュー</a></li>
<li><a href="#">フッターメニュー</a></li>
<li><a href="#">フッターメニュー</a></li>
<li><a href="#">フッターメニュー</a></li>
<li><a href="#">フッターメニュー</a></li>
</ul>

<small>Copyright&copy; <a href="index.html">SAMPLE COMPANY</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>

</footer>

</div>
<!--/#container-->

<!--jQueryの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="js/jquery.inview_set.js"></script>

<!--このテンプレート専用のスクリプト-->
<script src="js/main.js"></script>

<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>

</body>
</html>
