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

<h2>inviewサンプル</h2>
<p>jsフォルダのjquery.inview_set.jsや、cssフォルダのinview.cssで内容の変更や追加ができます。</p>
<p>他のページでも当ページのアニメーション効果を使いたい場合、当ページのhtml側下部にある、<br>
<span class="look">&lt;!--パララックス（inview）--&gt;<br>
&lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js&quot;&gt;&lt;/script&gt;<br>
&lt;script src=&quot;js/jquery.inview_set.js&quot;&gt;&lt;/script&gt;</span><br>
を同じ場所にコピペして下さい。これらのタグがないとアニメーションは動きません。<br>
また、長期間利用していると、inviewのバージョンが古くなって動かなくなる可能性もあります。その際は「CDN inview」などで検索しなおしてみて下さい。</p>

<h3>upスタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;up&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。例：&lt;div class=&quot;list-container <span class="color-check">up</span>&quot;&gt;</p>

<div class="list-container">

<div class="list up">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list up">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list up">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>downスタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;down&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。例：&lt;div class=&quot;list-container <span class="color-check">down</span>&quot;&gt;</p>

<div class="list-container">

<div class="list down">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list down">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list down">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>leftスタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;left&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。例：&lt;div class=&quot;list-container <span class="color-check">left</span>&quot;&gt;</p>

<div class="list-container">

<div class="list left">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list left">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list left">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>rightスタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;right&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。例：&lt;div class=&quot;list-container <span class="color-check">right</span>&quot;&gt;</p>

<div class="list-container">

<div class="list right">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list right">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list right">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>transform1スタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;transform1&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。例：&lt;div class=&quot;list2 <span class="color-check">transform1</span>&quot;&gt;</p>

<div class="list-container">

<div class="list transform1">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform1">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform1">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>transform2スタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;transform2&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。</p>

<div class="list-container">

<div class="list transform2">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform2">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform2">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>transform3スタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;transform3&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。</p>

<div class="list-container">

<div class="list transform3">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform3">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list transform3">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

<h3>blurスタイル</h3>
<p>使いたい要素に<span class="color-check">class=&quot;blur&quot;</span>を指定すれば以下のような動作になります。<br>
既にclass指定がある場合は半角スペースで区切って追加します。</p>

<div class="list-container">

<div class="list blur">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list blur">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

<div class="list blur">
<figure><img src="images/sample1.jpg" alt=""></figure>
<div class="text">
<h4>Sample Title</h4>
<p>ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。ここに説明を入れます。サンプルテキスト。</p>
</div>
</div>

</div>
<!--/.list-container-->

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
