$(window).on('load', function () {
    $preloader = $('.loaderArea'),
    $loader = $preloader.find('.loader');
    $loader.fadeOut();
    $preloader.delay(350).fadeOut('slow');
});

$(document).ready(function(){
$('.tab__left-col').on('click', '.left-col__item:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('div.advantage__tab-block').find('div.right-col__content').removeClass('active').eq($(this).index()).addClass('active');
});

$('.d-menu__left').on('click', 'li:not(.active)', function() {
    $(this)
      .addClass('active').siblings().removeClass('active')
      .closest('.desktop-menu__wrapper').find('div.d-menu__content').removeClass('active').eq($(this).index()).addClass('active');
});

$('li.dropdown').on('click', function(){
	$('body').toggleClass('toggle-menu');
});


function showModal(){
  $('.modal-wrapper .modal-r').css("top", "50%"); 
  $('.modal-wrapper .modal-r').css("marginTop", "-317px"); 
  $('.modal-wrapper').css("zIndex", "10");
  $('.modal-wrapper').css("background", "rgba(0,0,0,.25)");
}

function closeModal(){
  $('.modal-wrapper .modal-r').css("top", "-100%");
  $('.modal-wrapper').css("zIndex", "-1");
  $('.modal-wrapper').css("background", "rgba(0,0,0,0)");
}

$('.recall-open').on('click', function(){
  showModal();
});

$('.icon-close').on('click', function(){
  closeModal();
});

$('body').on('keydown', function(e){
  if(e.keyCode == 27){
    closeModal();
  }
})

$('.modal-wrapper').on('click', function(event){
  closeModal();
});
$('.recall__wrapper').on('click', function(event){
  event.stopPropagation();
});

	
});