


$(".openbtn").click(function () {//ボタンがクリックされたら
	$(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
});

$("#g-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
});




$('.slider').slick({
		fade:true,//切り替えをフェードで行う。初期値はfalse。
		autoplay: true,//自動的に動き出すか。初期値はfalse。
		autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
		speed:1000,//スライドの動きのスピード。初期値は300。
		infinite: true,//スライドをループさせるかどうか。初期値はtrue。
		slidesToShow: 1,//スライドを画面に3枚見せる
		slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
		arrows: true,//左右の矢印あり

		prevArrow: '<div class="slick-prev slick-arrow"><img src="https://piyofolio.sakura.ne.jp/portfolio/wp-content/themes/piyofolio/assets/img/prev-arrow.svg" alt=""></div>',//矢印部分PreviewのHTMLを変更
		nextArrow: '<div class="slick-next slick-arrow"><img src="https://piyofolio.sakura.ne.jp/portfolio/wp-content/themes/piyofolio/assets/img/next-arrow.svg" alt=""></div>',//矢印部分NextのHTMLを変更
		dots: true,//下部ドットナビゲーションの表示
        dotsClass: 'slick-dots',
        pauseOnFocus: false,//フォーカスで一時停止を無効
        pauseOnHover: false,//マウスホバーで一時停止を無効
        pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

$(function(){
  
  //カーソル要素の指定
  var cursor=$("#cursor");
  
  //mousemoveイベントでカーソル要素を移動させる
  $(document).on("mousemove",function(e){
               //カーソルの座標位置を取得
    var x=e.clientX;
    var y=e.clientY;
    //カーソル要素のcssを書き換える用
    cursor.css({
      "opacity":"1",
      "top":y+"px",
      "left":x+"px"
    });
  });
  
    $("a").on({
    "mouseenter": function() {
      //activeクラス付与
      cursor.addClass("active");
      stalker.addClass("active");
    },
    "mouseleave": function() {
      cursor.removeClass("active");
      stalker.removeClass("active");
      
    }
  });
   
});