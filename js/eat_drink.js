var vendorPopups = function(){
  var originalWidth = 0;
  var originalZ = 0;
  var originalLeft = 0;
  var originalTop = 0;
  var originalLogoMarginTop = 0;
  var aniSpeed = 200;
  var aniEasing = 'easeOutCubic';
  var zoomables = $('#vendor_posters li').has('.payload');
  var hadClass = '';


  zoomables.each(function(){
    $(this).css('cursor','pointer');
  });

  zoomables.click(function(){

    var target = $(this);
    var payload = target.find('.payload');

    var activate = function(){
      $('body#eat_and_drink, body#night_market').append('<div id="modal_fade">').find('#modal_fade').fadeTo('fast',0.7).click(function(){
        deactivate();
      });
      if(target.hasClass('no_effects')){
        hadClass = 'no_effects';
        target.removeClass('no_effects');
      }
      target.removeClass('no_effects');
      originalZ = target.css('z-index');
      originalLeft = target.css('left');
      originalTop = target.css('top');
      target.css({'z-index':1500,'cursor':'default'});
      originalWidth = target.width();
      payload.css('width','460px');
      target.css('width',target.width()+'px');
      var logo = target.find('img.logo');
      originalLogoMarginTop = logo.css('margin-top');
      logo.css({'margin-left':'auto', 'margin-right':'auto'});
      logo.animate({'margin-top':'40px'}, aniSpeed, aniEasing);
      var payloadHeight = payload.show().height();
      payload.hide();
      payload.css('height','0').show().animate({'height':payloadHeight+'px'}, aniSpeed, aniEasing);
      var top = $('body').scrollTop()-100;
      target.animate({ 'width':'460px', 'left':'150px', 'top':top + 'px'}, aniSpeed, aniEasing);
      target.addClass('active');
    };
    var deactivate = function(){
      $('#modal_fade').fadeOut('fast',function(){ $(this).remove(); });
      payload.slideUp();
      target.animate({'width':originalWidth + 'px', 'left':originalLeft, 'top':originalTop}, function(){
        target.css({'z-index':originalZ, 'cursor':'pointer'});
        if(hadClass !== ''){
          target.addClass(hadClass);
          hadClass = '';
        };
      });
      target.find('img.logo').animate({'margin-top':originalLogoMarginTop}, aniSpeed, aniEasing);
      target.removeClass('active');
    };

    if(target.hasClass('active')){
      // deactivate();
    }else{
      activate();
    }


  });
};