jQuery(document).ready(function($) {
  var $navbarToggle = $('.navbar-toggle');
  var $navbarNav = $('.navbar-nav');
  $navbarToggle.click(function() {
    $navbarNav.slideToggle();
  });
  // var $submenu = $('.submenu');
  // var $dropdownToggle = $('.menu-item-has-children');
  // $submenu.hide();
  //
  // $dropdownToggle.click(function(e) {
  //   e.preventDefault();
  //   $currentToggle = $(this);
  //   $currentSubmenu = $currentToggle.parent('li').find('.submenu');
  //   $submenu.hide();
  //   if ($currentToggle.hasClass('open')) {
  //     $currentSubmenu.hide();
  //     $currentToggle.removeClass('open');
  //   } else {
  //     $dropdownToggle.removeClass('open');
  //     $currentToggle.addClass('open');
  //     $currentSubmenu.show();
  //   }
  // });

  var slides = document.querySelectorAll('#slides .slide');
  var currentSlide = 0;
  slides[currentSlide].className = 'slide showing';
  var slideInterval = setInterval(nextSlide, 5000);

  function nextSlide() {
    slides[currentSlide].className = 'slide';
    currentSlide = (currentSlide+1)%slides.length;
    slides[currentSlide].className = 'slide showing';
  }

});
