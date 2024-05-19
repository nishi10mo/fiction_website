"use strict";

{
  const $hamburger = $("#hamburger");
  const $close = $("#closeBtn");
  const $menu = $("nav.layoutMenuArea");

  $hamburger.click(() => {
    $menu.addClass("appear");
  });

  $close.click(() => {
    $menu.removeClass("appear");
  });
}

{
  const $carouselWindow = $(".layoutCarouselArea .carouselWindow");
  const $carouselBtns = $(".layoutCarouselArea .carouselWindow-slideBtn");
  let currentIndex = 0;

  function moveSlides() {
    const carouselWindowWidth = $carouselWindow.eq(0).outerWidth();
    $carouselWindow.css("transform",`translateX(${-1*carouselWindowWidth*currentIndex}px`);
  }

  function updateBtns() {
    $.each($carouselBtns, (index, btn) => {
      $(btn).removeClass("carouselWindow-slideBtn--active");
    });
    $carouselBtns.eq(currentIndex).addClass("carouselWindow-slideBtn--active");
  }

  function autoSlides() {
    setTimeout(() => {
      currentIndex++;
      if (currentIndex > $carouselBtns.length - 1) {
        currentIndex = 0;
      }
      moveSlides();
      updateBtns();
      autoSlides();
    }, 5000)
  }

  updateBtns();
  autoSlides();

  $.each($carouselBtns, (index, btn) => {
    $(btn).click(() => {
      currentIndex = index;
      updateBtns();
      moveSlides();
    });
  });

  $(window).resize(() => {
    moveSlides();
  })
}