
jQuery(document).ready(function($) {

 
  $('#quicktabs-tabpage-schedules_fares_tolls-0 .block .block-content, #quicktabs-tabpage-schedules_fares_tolls-1 .block .block-content').html('');

  $('.view-accordion-menu-v1.view-display-id-block .view-content .views-row-2 .views-field-title span').click(function() {
  	$('.view-accordion-menu-v1.view-display-id-block .view-content .views-row-2 .ui-accordion-content').html($('#mytrip'));
    
    $("#mytrip #fdate").removeClass('hasDatepicker');
  	$("#mytrip #fdate").datepicker();
    $("#mytrip #fdate").datepicker("setDate", "0");

  	$('#xmodeB').attr('checked', 'checked');
    $('#xmodeX').attr('checked', 'checked');
    $('#xmodeCT').attr('checked', 'checked');
    $('#xmodeR').attr('checked', 'checked');
    $('#tpSubmit').attr('action', 'http://Tripplanner.mta.info/MyTrip/handler/customplannerHandler.ashx?cid=mtahome');
    $('#currentmodule').val('tripplanner');
  });

  $('.view-accordion-menu-v1.view-display-id-block .view-content .views-row-3 .views-field-title span').click(function() {
    
    $('#quicktabs-schedules_fares_tolls .item-list ul li').removeClass('active');
    $('#quicktabs-schedules_fares_tolls .item-list ul li a').removeClass('active');
    $('#quicktabs-container-schedules_fares_tolls .quicktabs-tabpage').addClass('quicktabs-hide');

  	$('.view-accordion-menu-v1.view-display-id-block .view-content .views-row-2 .ui-accordion-content').html($('#mytrip'));

    $('#quicktabs-tab-schedules_fares_tolls-0').addClass('active');
    $('#quicktabs-tab-schedules_fares_tolls-0').parent().addClass('active');
    $('#quicktabs-tabpage-schedules_fares_tolls-0 .block .block-content').html($('#mytrip'));

    $('#quicktabs-tabpage-schedules_fares_tolls-0').removeClass('quicktabs-hide');
    
    $("#mytrip #fdate").removeClass('hasDatepicker');
  	$("#mytrip #fdate").datepicker();

    $('#xmodeB').attr('checked', '');
    $('#xmodeX').attr('checked', '');
    $('#xmodeCT').attr('checked', '');
    $('#xmodeR').attr('checked', 'checked');

    $('#tpSubmit').attr('action', 'http://Tripplanner.mta.info/MyTrip/handler/Point2Point.ashx?cid=mtahome');
    $('#currentmodule').val('point2point');

  });

  $('#quicktabs-tab-schedules_fares_tolls-0').click(function() {
  	$('#quicktabs-tabpage-schedules_fares_tolls-0 .block .block-content').html($('#mytrip'));
  	$("#mytrip #fdate").removeClass('hasDatepicker');
  	$("#mytrip #fdate").datepicker();

    $('#xmodeB').attr('checked', '');
    $('#xmodeX').attr('checked', '');
    $('#xmodeCT').attr('checked', '');
    $('#xmodeR').attr('checked', 'checked');
    $('#tpSubmit').attr('action', 'http://Tripplanner.mta.info/MyTrip/handler/Point2Point.ashx?cid=mtahome');
    $('#currentmodule').val('point2point');


  });

  $('#quicktabs-tab-schedules_fares_tolls-1').click(function() {
  	$('#quicktabs-tabpage-schedules_fares_tolls-1 .block .block-content').html($('#mytrip'));
    $("#mytrip #fdate").removeClass('hasDatepicker');
  	$("#mytrip #fdate").datepicker();

  	$('#xmodeB').attr('checked', 'checked');
    $('#xmodeX').attr('checked', '');
    $('#xmodeCT').attr('checked', '');
    $('#xmodeR').attr('checked', '');
    $('#tpSubmit').attr('action', 'http://Tripplanner.mta.info/MyTrip/handler/Point2Point.ashx?cid=mtahome');
    $('#currentmodule').val('point2point');

  });


});