"use strict"
$(function() {

  // humbarger
  $('#hamburger').click(function(){
    $('.header-nav').fadeToggle();
    $('#hamburger').toggleClass('active');
    $('body').toggleClass('hidden');
    $('.header_nav_item').addClass('nav_active');
  });
  $('.hamburger-nav').click(function(){
    $('.header-nav').fadeToggle();
    $('#hamburger').toggleClass('active');
    $('body').toggleClass('hidden');
    console.log("クリックしたよ");
  });
  $('.header_nav_item').click(function(){
      if($(this).hasClass('nav_active')){
        $(this).removeClass('nav_active');
        $('.header-nav').fadeToggle();
        $('#hamburger').toggleClass('active');
        $('body').toggleClass('hidden');
      }
  });

  // スムーススクロール
  // ページ外からのリンクからのスムーススクロール
  let headerHeight = $('header').height();
  var urlHash = location.hash;
  if(urlHash) {
      $('body,html').stop().scrollTop(0);
      setTimeout(function(){
          var target = $(urlHash);
          var position = target.offset().top - headerHeight;
          $('body,html').stop().animate({scrollTop:position}, 500);
      }, 200);
  }
  // // ページ内リンク
  // 全てのアンカータグを対象にする
  $('a').click(function(e){
    var anchor = $(this),
        href = anchor.attr('href'),
        pagename = window.location.href;
        // 現在のurlのハッシュ以降を削除
        pagename = pagename.replace(/#.*/,'');
        // リンク先のurlから現在の表示中のurlを削除
        href = href.replace( pagename , '' );

    var spContactBtn = anchor[0].classList[1];
    if(spContactBtn == "spContactBtn"){
      $('.header-nav').fadeToggle();
      $('#hamburger').toggleClass('active');
      $('body').toggleClass('hidden');
    }
    if( href.search(/^#/) >= 0 ){
      let headerHeight = $('header').height();
      // 整形したリンクがページ内リンクの場合はページ無いスクロールの対象とする
      // 通常の遷移処理をキャンセル
      e.preventDefault();
      var speed = 500;
      // 前段階で整形したhrefを使用する
      // var href= $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top - headerHeight;
      $("html, body").animate({scrollTop:position}, speed, "swing");
      // ロケーションバーの内容を書き換え
      location.hash = href ;
      return false;


    }
  });





    // // service hover
    // $('.media-item, .web-item, .movie-item').hover(function(){
    //   $('this .hover-detail').addClass('hover-block');
    //   // $('.media-item::after').addClass('hover-block');
    // },function(){
    //   $('.hover-detail').removeClass('hover-block');
    // });



// service-JS
window.sr = ScrollReveal();
			sr.reveal('.animate', { easing: 'ease', duration: 1500, distance: '200px', opacity: 0.01, scale: 1 });
			sr.reveal('.animate_dr00', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 });
			sr.reveal('.animate_dr01', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 150});
			sr.reveal('.animate_dr02', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 300});
			sr.reveal('.animate_dr03', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 450});
			sr.reveal('.animate_dr04', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 600});
			sr.reveal('.animate_dr05', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 750});
			sr.reveal('.animate_dr06', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 900});
			sr.reveal('.animate_dr07', { easing: 'ease-in-out', mobile: false, distance: '0px', duration: 1000, opacity: 0.01, scale: 1 ,delay: 1050});
 		 sr.reveal('.fade_animate', {duration: 1500, opacity: 0.01, scale: 1 });


      $(function() {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
          $('.navi').addClass("background-white");
        } else {
          $('.navi').removeClass("background-white");
        }
    });
});

var mediaQuery = matchMedia('(min-width: 992px)');

// ページが読み込まれた時に実行
handle(mediaQuery);

// ウィンドウサイズが変更されても実行されるように
mediaQuery.addListener(handle);

function handle(mq) {
  if (mq.matches) {

$(window).scroll(function (){
	$(".service-box-border-top-under").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-1'); //クラス「active」を与える
	  }
	});
});

$(window).scroll(function (){
	$(".service-box-border-right-left").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-1'); //クラス「active」を与える
	  }
	});
});

$(window).scroll(function (){
	$(".service-box-border-top-under-2").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-2-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-2").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-2-1'); //クラス「active」を与える
	  }
	});
});

$(window).scroll(function (){
	$(".service-box-border-top-under-3").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-3-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-3").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-3-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-top-under-4").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-4-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-4").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-4-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-top-under-5").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-5-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-5").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-5-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-top-under-6").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-6-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-6").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-6-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-top-under-7").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-7-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-7").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-7-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-top-under-8").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-top-under-8-1'); //クラス「active」を与える
	  }
	});
});


$(window).scroll(function (){
	$(".service-box-border-right-left-8").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-right-left-8-1'); //クラス「active」を与える
	  }
	});
});



$(window).scroll(function (){
	$(".service-box-border-double").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-double-1'); //クラス「active」を与える
	  }
	});
});

$(window).scroll(function (){
	$(".service-box-border-double-2").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-double-2-1'); //クラス「active」を与える
	  }
	});
});

$(window).scroll(function (){
	$(".service-box-border-double-3").each(function(){
	  var position = $(this).offset().top; //ページの一番上から要素までの距離を取得
	  var scroll = $(window).scrollTop(); //スクロールの位置を取得
	  var windowHeight = $(window).height(); //ウインドウの高さを取得
	  if (scroll > position - windowHeight){ //スクロール位置が要素の位置を過ぎたとき
	    $(this).addClass('service-box-border-double-3-1'); //クラス「active」を与える
	  }
	});
});

};};








});
