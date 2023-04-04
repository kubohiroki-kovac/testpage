




//ハンバーガーメニューをクリックした際の処理
$(function() {
	$('#menubar_ham').click(function() {
		$(this).toggleClass('ham');

			if($(this).hasClass('ham')) {
				$('#menubar').addClass('display_block');
			} else {
				$('#menubar').removeClass('display_block');
			}

	});
});


//pagetop
$(function() {
    var scroll = $('.pagetop');
    var scrollShow = $('.pagetop-show');
        $(scroll).hide();
        $(window).scroll(function() {
            if($(this).scrollTop() >= 300) {
                $(scroll).fadeIn().addClass(scrollShow);
            } else {
                $(scroll).fadeOut().removeClass(scrollShow);
            }
        });
});


//ロゴのフェードイン・アウト
$(function() {
        $(window).scroll(function() {
            if($(this).scrollTop() >= 300) {
                $('#logo').fadeOut();
            } else {
                $('#logo').fadeIn();
            }
        });
});


//スムーススクロール
$(window).on('load', function() {
	var hash = location.hash;
	if(hash) {
		$('body,html').scrollTop(0);
		setTimeout(function() {
			var target = $(hash);
			var scroll = target.offset().top - 40;
			$('body,html').animate({scrollTop:scroll},500);
		}, 100);
	}
});
$(window).on('load', function() {
    $('a[href^="#"]').click(function() {
        var href = $(this).attr('href');
        var target = href == '#' ? 0 : $(href).offset().top - 40;
            $('body,html').animate({scrollTop:target},500);
            return false;
    });
});



//menubar内のiタグを横並び
$(function() {
	$('#menubar li:has(i)').addClass('inline');
});


//h2の中に下線用のスタイルを作る
$(function() {
	$('main h2').wrapInner('<span class="uline">');
});
