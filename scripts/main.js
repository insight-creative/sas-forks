jQuery(document).ready(function($) {
  var $navbarToggle = $('.navbar-toggle');
  var $navbarNav = $('.navbar-nav');
  $navbarToggle.click(function() {
    $navbarNav.slideToggle();
  });
  var $submenu = $('.submenu');
  var $dropdownToggle = $('.menu-item-has-children');
  $submenu.hide();

  $dropdownToggle.click(function(e) {
    e.preventDefault();
    $currentToggle = $(this);
    $currentSubmenu = $currentToggle.parent('li').find('.submenu');
    $submenu.hide();
    if ($currentToggle.hasClass('open')) {
      $currentSubmenu.hide();
      $currentToggle.removeClass('open');
    } else {
      $dropdownToggle.removeClass('open');
      $currentToggle.addClass('open');
      $currentSubmenu.show();
    }
  });

  var slides = document.querySelectorAll('#slides .slide');
  if (slides.length > 0) {
    var playing = true;
    var pauseButton = document.getElementById('pause');
    var next = document.getElementById('next');
    var previous = document.getElementById('previous');
    var currentSlide = 0;
    var slideInterval = setInterval(nextSlide, 5000);

    var controls = document.querySelectorAll('.controls');
    for(var i=0; i<controls.length; i++){
      controls[i].style.display = 'inline-block';
    }

    function pauseSlideshow() {
      pauseButton.innerHTML = '<i class="fa fa-play"></i> <span class="sr-only">Play</span>';
      playing = false;
      clearInterval(slideInterval);
    }

    function playSlideshow() {
      pauseButton.innerHTML = '<i class="fa fa-pause"></i> <span class="sr-only">Pause</span>';
      playing = true;
      slideInterval = setInterval(nextSlide,2000);
    }

    pauseButton.onclick = function() {
      if(playing) {
        pauseSlideshow();
      } else {
        playSlideshow();
      }
    }

    next.onclick = function() {
      pauseSlideshow();
      nextSlide();
    }

    previous.onclick = function() {
        pauseSlideshow();
        previousSlide();
    }

    function nextSlide() {
      goToSlide(currentSlide+1);
    }

    function previousSlide() {
      goToSlide(currentSlide-1);
    }

    function goToSlide(n) {
      slides[currentSlide].className = 'slide';
      currentSlide = (n+slides.length)%slides.length;
      slides[currentSlide].className = 'slide showing';
    }
  }


});

// Script for our state search submit button
var stateSearchButton = document.querySelector(".searchButton");
stateSearchButton.addEventListener("click", stateSearch, false);
//function to check if lower michigan was selected, they are the only other us distributor

function stateSearch () {
    var selectedState = document.querySelector(".choiceList").value;

    if (selectedState === "Select") {
      document.querySelector("#selectError").innerHTML= "You must select a state so we can guide you to the proper distributor!";
      Object.assign(selectError.style,{background: "#F8F8F8",margin:"10px",padding:"20px"});
    } else if (selectedState === "Region Select"){
      document.querySelector("#selectError").innerHTML= "You must select a region so we can guide you to the proper distributor!";
      Object.assign(selectError.style,{background: "#F8F8F8",margin:"10px",padding:"20px"});
    } else if (selectedState === "USA") {
      stateSearchButton.setAttribute("href", "/usa-distributors/");
    } else if (selectedState === "Lower Michigan") {
      stateSearchButton.setAttribute("href", "/contact/michigan-distributor/");
    } else if (selectedState === "Australia") {
      stateSearchButton.setAttribute("href", "/contact/australia-distributor/");
    } else if (selectedState === "Europe") {
      stateSearchButton.setAttribute("href", "/contact/europe-distributor/");
    } else{
      stateSearchButton.setAttribute("href", "/contact/sas-forks/");
  }
}


// Script for our region search submit button
/*
var searchButton = document.querySelector("#regionSearchButton");
searchButton.addEventListener("click", regionSearch, false);
//function to check if lower michigan was selected, they are the only other us distributor
function regionSearch () {
    var selectedRegion = document.querySelector("#regionList").value;

    if (selectedRegion === "Select") {
      document.querySelector("#regionSelectError").innerHTML= "You must select a region so we can guide you to the proper distributor!";
      Object.assign(regionSelectError.style,{background: "#F8F8F8",margin:"10px",padding:"20px"});
    } else if (selectedRegion === "Australia"){
      searchButton.setAttribute("href", "/sasForksTest/contact/australia-distributor/");
    } else if (selectedRegion === "Europe"){
      searchButton.setAttribute("href", "/sasForksTest/contact/europe-distributor/");
    } else{
      searchButton.setAttribute("href", "/sasForksTest/usa-distributors/");
  }
}
*/
