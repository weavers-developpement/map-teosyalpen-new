/**
*
* Main JS
*
**/
(function ($){

	//Preloader
    $(window).load(function(){
    $('.preloaderLand').show();
    //clear previous map start.
    //$("#bh-sl-address").val(user_city);
    $("#bh-sl-region").val(user_country);
    $('#map-container').storeLocator("init");
    $('#map-container').storeLocator();
    //$('.slideContentHeight1').css('height', '550px');
	});

    //clear previous map end.
    $('.preloader').fadeOut('slow',function(){
      $(this).remove();
      slideimgheightset();
      mediaImg();
      footerHeightset();
      sliderheightset(1);
      sliderheightset(2);
      sliderheightset(3);
      teoxaneheightset();
    });

    $("#bh-sl-user-location").submit(function(){
            //alert($("#bh-sl-address").val());


            if($("#bh-sl-address").val().trim() !== '') {
              $(".bh-sl-loc-list").getNiceScroll(0).doScrollTop(1,100);
                //alert('yes');
              /*   $("#bh-sl-user-location").submit(); */
                setTimeout(function () {
                  $('#listcontentScroll').removeClass('setDefaultHeight');
                }, 1000);

                $('.mapSearchWrap .slimScrollDiv, #listcontentScroll').animate({
                    height: '300px'
                }, 2000, function() {

             $( ".bh-sl-loc-list ul li:first-child" ).trigger( "click" );

           });
            }
        });

  // Map Search form submit
    $("#bh-sl-submit").click(function(){
            //alert($("#bh-sl-address").val());
            if($("#bh-sl-address").val().trim() !== '') {
              $(".bh-sl-loc-list").getNiceScroll(0).doScrollTop(1,100);
                //alert('yes');
                $("#bh-sl-user-location").submit();
                setTimeout(function () {
                  $('#listcontentScroll').removeClass('setDefaultHeight');
                }, 1000);
                $('.mapSearchWrap .slimScrollDiv, #listcontentScroll').animate({
                    height: '300px'
                }, 2000, function() {

             $( ".bh-sl-loc-list ul li:first-child" ).trigger( "click" );


            });
            }



        });

}(jQuery));