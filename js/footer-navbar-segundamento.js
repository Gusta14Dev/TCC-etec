$(function () {
  'use strict'

  $('[data-toggle="menu"]').on('click', function () {
    $('.menu-lateral').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open')
    $('body').toggleClass('static');
  });
  $('.fechar-menu-lateral').on('click', function () {
    $('.menu-lateral').toggleClass('open');
    $('.fechar-menu-lateral').toggleClass('open');
    $('body').toggleClass('static');
  });
  $('#menu-dropdown1').hide();
  $('[data-dropdawn-toggle="menu-dropdown1"]').on('click', function () {
  	$('#menu-dropdown1').slideToggle("fast");
  	$('#seta1').toggleClass('fa-caret-down');
  	$('#seta1').toggleClass('fa-caret-up');
  });
  $('#menu-dropdown2').hide();
  $('[data-dropdawn-toggle="menu-dropdown2"]').on('click', function () {
  	$('#menu-dropdown2').slideToggle("fast");
  	$('#seta2').toggleClass('fa-caret-down');
  	$('#seta2').toggleClass('fa-caret-up');
  });
  $('#menu-dropdown3').hide();
  $('[data-dropdawn-toggle="menu-dropdown3"]').on('click', function () {
    $('#menu-dropdown3').slideToggle("fast");
    $('#seta3').toggleClass('fa-caret-down');
    $('#seta3').toggleClass('fa-caret-up');
  });
})