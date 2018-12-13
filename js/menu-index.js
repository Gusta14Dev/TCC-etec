$(function () {
  'use strict'

  $(window).scroll(function () {
    if ($(this).scrollTop() >= 40) {
     $(".menu").addClass("fixed-top");
     $('.offcanvas-collapse').css("top","56px");
     $('.fechar-menu-lateral').css("top","56px");
     $('.menu-dropdown-body').css("top","56px");
    } else {
     $(".menu").removeClass("fixed-top");
     $('.offcanvas-collapse').css("top","96px");
     $('.fechar-menu-lateral').css("top","96px");
     $('.menu-dropdown-body').css("top","56px");
    }
  });
  $('[data-toggle="menu"]').on('click', function () {
    $('body').toggleClass('static');
    $('.offcanvas-collapse').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open');
  });
  $('.fechar-menu-lateral').on('click', function () {
    $('body').removeClass('static');
    $('.offcanvas-collapse').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open');
  });
    var largura = $(document).width();
    if (largura <= 991.9) {
      $('.menu-dropdown-body').hide();
      $('#login').addClass('menu-link');
      $('#login').html('<li class="menu-item"> <span>Login</span> </li>');
      $('[data-dropdawn-toggle="menu-dropdown1"]').on('click', function () {
        $('[data-dropdawn-toggle="menu-dropdown1"]').toggleClass('menu-item');
        $('[data-dropdawn-toggle="menu-dropdown1"]').toggleClass('dropdawn');
        $('#menu-dropdown1').slideToggle("fast");
        $('#seta1').toggleClass('fa-caret-down');
        $('#seta1').toggleClass('fa-caret-up');
      });
      $('[data-dropdawn-toggle="menu-dropdown2"]').on('click', function () {
        $('[data-dropdawn-toggle="menu-dropdown2"]').toggleClass('menu-item');
        $('[data-dropdawn-toggle="menu-dropdown2"]').toggleClass('dropdawn');
        $('#menu-dropdown2').slideToggle("fast");
        $('#seta2').toggleClass('fa-caret-down');
        $('#seta2').toggleClass('fa-caret-up');
      });
    };
})
