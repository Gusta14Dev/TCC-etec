    $(document).ready(function(){
      $(window).on('scroll load', function(){
         var win_scl = $(window).scrollTop(); // valor do scroll da janela
         var nav = $('.navbar'); // menu
         var nav_ant = nav.prev('.login'); // div antes do menu
         var nav_hgt = nav.outerHeight(); // altura do menu
         var nav_ant_hgt = nav_ant.outerHeight(); // altura da div antes do menu
         var nav_ant_top = nav_ant.offset().top; // distância da div antes do menu ao topo
         var nav_ant_dst = nav_ant_top-win_scl; // distancia do final da div antes do menu ao topo da janela

         if(nav_ant_dst <= nav_ant_hgt && win_scl > nav_ant_hgt) {
            nav.addClass("f-nav");
             // adiciono margem superior à primeira div depois do menu
            $(".navbar+section").css('margin-top',nav_hgt+'px');
         }else{
            nav.removeClass("f-nav");
             // retiro margem superior à primeira div depois do menu
            $(".navbar").css('margin-top','0');
         }
      });
    });