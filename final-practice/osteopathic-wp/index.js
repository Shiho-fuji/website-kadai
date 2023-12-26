const mySwiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  effect: 'fade',
  speed: 1000,
  autoplay: {
    delay: 2500,
  },
 
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar'
  },
 
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
 
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

window.onload = function () {
  var nav = document.getElementById('nav-wrapper');
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function () {
      nav.classList.toggle('open');
  });
  blackBg.addEventListener('click', function () {
      nav.classList.remove('open');
  });

  let Animation = function() {
    //アイコン位置取得
    let pageTop =  document.getElementById('page_top');
  
    //要素の位置座標を取得
    let rect = pageTop.getBoundingClientRect();
    //topからの距離
    let scrollTop = rect.top + window.pageYOffset;
  
    if(scrollTop > 1000){
      pageTop.classList.add('show');
     }  else {
      pageTop.classList.remove('show');
     }
   }
      window.addEventListener('scroll', Animation);
};

window.addEventListener("scroll", function () {
  // ヘッダーを変数の中に格納する
  const header = document.querySelector("header");
  // 100px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
  header.classList.toggle("scroll-nav", window.scrollY > 100);
});


