//モーダル
window.onload = function() {
  // ボタンとモーダルを関連付ける
  $('.btn-large').leanModal({
    dismissible: true,  // 画面外のタッチによってモーダルを閉じるかどうか
    opacity: 0.5,       // 背景の透明度
    in_duration: 400,   // インアニメーションの時間
    out_duration: 300,  // アウトアニメーションの時間
    // 開くときのコールバック
    ready: function() {
      console.log('ready');
    },
    // 閉じる時のコールバック
    complete: function() {
      console.log('closed');
    }
  });
};

//サイドバー
var WindowHeight = $(window).height(); 
$(function(){
  if(WindowHeight > 0){ 
  $('.wh').css('height',WindowHeight+'px');
  }
});

$(function() {
  $('.DSmenu').click(function () {
  $(this).toggleClass('action');
  $('.section').toggleClass('blur');
  });
});



