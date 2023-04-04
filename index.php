<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>企業・ビジネスサイト向け 無料ホームページテンプレート tp_biz59</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">

<?php include('./css.php'); ?>
</head>

<body>

<div id="container">

<?php include('./header.php'); ?>


<!--スライドショー（slick）-->
<div id="slideshow">
<div><img src="images/1.jpg" alt=""></div>
<div><img src="images/2.jpg" alt=""></div>
<div><img src="images/3.jpg" alt=""></div>
</div>

<main class="home">
    <section>
        <h2>トピックス</h2>
        とかいろいろここに入るのかなぁ
        後ニュースとか？

        <div class="contents-field">
            <div class="content">
                <div class="display_block"><img src="images/sample1.jpg" alt=""></div>
                <div class="text">
                    <h3>Sample Title</h3>
                    <p>ここに説明を入れます。サンプルテキスト。</p>
                </div>
            </div>
            <div class="content">
                <div class="display_block"><img src="images/sample1.jpg" alt=""></div>
                <div class="text">
                    <h3>Sample Title</h3>
                    <p>ここに説明を入れます。サンプルテキスト。</p>
                </div>
            </div>
            <div class="content">
                <div class="display_block"><img src="images/sample1.jpg" alt=""></div>
                <div class="text">
                    <h3>Sample Title</h3>
                    <p>ここに説明を入れます。サンプルテキスト。</p>
                </div>
            </div>
        </div>

    </section>
    


</main>

<?php include('./footer.php'); ?>

</div>
<!--/#container-->



<!--ページの上部へ戻るボタン-->
<div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>


<?php include('./read_script.php'); ?>



</body>
</html>
