(function ($) {
      Drupal.behaviors.accordioncustom = {  
            attach: function (context, settings) {

                  var tpspeed = 1;        // each step sliding open takes 1 milliseconds
                  var previewHeight = 0; // height in pixels of partly opened TripPlanner+
                  var fullHeight = 300;   // height in pixels of fully opened TripPlanner+
                  var setHeight = 1;            // counter for sliding effect of preview
                  var SBform = '';        // stores html from the Subway/Bus schedule form
                  var TPform = '';        // stores html from the TripPlanner+ form
                  
                  // show "preview" of tripplanner From and To fields when accordion item is closed
                  // jquery animate isn't working here so we manually animate it opening
                  function initTPpreview(){
                        alert('openTP 15 Preview ');
                        //$('#block-views-accordion-menu-v1-block .views-row-2 .ui-accordion-content').css({'height': setHeight + 'px','display': 'block','overflow':'hidden'});
                        //if (setHeight < previewHeight) setHeight++;
                        //else {
                             //alert('openTP 15 Preview else ');
                        //      clearInterval(TPpreview);
                        //     setHeight =1;

                        }
                  }
                  
                        // initialize preview on page load
                  var TPpreview = setInterval(function(){initTPpreview(previewHeight)},tpspeed);
                  SBform = $('#block-block-576').html();
                  // empty block contents
                  $('#block-block-576').html('');
                  
                  // fully open the TripPlanner+ panel
                  function openTP(){
                      //  $(this).addClass('ui-state-active').removeClass('ui-state-default');
                      //  $('#block-views-accordion-menu-v1-block .views-row-2 .ui-accordion-content').css({'height': fullHeight + 'px','display': 'block','overflow':'hidden'});
                      //  $(".view-id-accordion_menu_v1.view-display-id-block .view-content").accordion({
                              // make the TripPlanner+ block panel active
                      //        active: 1
                       // });
                        alert('openTP 37');
                  }

                  // open full view when clicking into a From or Two field, or the tabs at top, and the panel is closed
                  $('#block-tripplanner-mta3-tripplanner #divStartAddress, #block-tripplanner-mta3-tripplanner #divEndAddress, #block-tripplanner-mta3-tripplanner #FromTo').mousedown( function() {
                        if ($('.view-accordion-menu-v1 .views-row-2 .views-field-title').hasClass('ui-state-default')) {
                              // if the panel is closed, trigger the open function
                             // openTP();
                              alert('openTP 45');
                        }                       
                  });
                  
                  // toggle preview and full view                 
                  $('#block-views-accordion-menu-v1-block .views-row-2 .views-field-title').mousedown(function() {
                       // if ($(this).hasClass('ui-state-default')) {
                             // openTP();
                              //alert('openTP 52');
                       // }
                       // else {
                        //$(this).removeClass('ui-state-active');
                        //$(this).addClass('ui-state-default');
                        //$(this).addClass('ui-state-default').removeClass('ui-state-active');
                        /*$(".view-id-accordion_menu_v1.view-display-id-block .view-content").accordion({
                              // make the status block panel active
                              active: 0
                        });*/
                      //alert('openTP 61');
                        }
                  });
                  
      
                  /* DO THINGS WHEN THE ACTIVE ACCORDION PANEL CHANGES */                 
                  
                  // function to asynchronously load the js file when the forms switch
                  // see http://stackoverflow.com/a/7352694/1620460
                  function require(script) {
                        $.ajax({
                              url: script,
                              dataType: "script",
                              async: true,
                              success: function () {
                                    //alert('success');
                              },
                              error: function () {
                                    throw new Error("Could not load script " + script);
                              }
                        });
                  }
                  
                  // check if the accordion object exists so IMCE won't break
                  if ($(".view-id-accordion_menu_v1.view-display-id-block .view-content").accordion) {
                        $(".view-id-accordion_menu_v1.view-display-id-block .view-content").accordion({
                              change: function(e, ui) {
                                    if (ui.oldHeader.find("a").text() == "TripPlanner+" && !(ui.newHeader.find("a").text() == "Schedules, Fares & Tolls")) {
                                          // when TripPlanner+ panel changes and is closed, show the preview, unless it has been hidden
                                         // TPpreview = setInterval(function(){initTPpreview(previewHeight)},tpspeed);
                                    }
                                    
                                    /* We have to swap out the html for the two forms, because tripplanner_ext.js loaded through the tripplanner_mta3 module
                                       does stuff with the id of fields and we can't have multiple forms with fields with the same ids
                                    */
                                    
                                    // When Schedules, Fares & Tolls panel becomes active
                                    if (ui.newHeader.find("a").text() == "Schedules, Fares & Tolls") {
                                          // save tripplanner block contents
                                          $('#fdate').removeClass('hasDatepicker');
                                          TPform = $('#block-tripplanner-mta3-tripplanner').html();
                                          // empty tripplanner block contents
                                          $('#block-tripplanner-mta3-tripplanner').html('');
                                          // close empty tripplanner panel
                                          $('#block-views-accordion-menu-v1-block .views-row-2 .ui-accordion-content').slideUp();
                                          // if subway and bus schedule form was removed
                                          if (SBform) {
                                                // insert the saved block contents
                                                $('#block-block-576').html(SBform);
                                                // prevent this happening until the block is hidden again
                                                SBform = null;
                                                $('#divTime select').css({'display':'inline'});
                                          }
                                          // asynchronously load the js file when the forms switch
                                          require("/sites/all/modules/custom/tripplanner_mta3/tripplanner_mta3.js");
                                          //position datepicker here instead of in css file
                                          $('#ui-datepicker-div').css( {'margin-left': '0px'} );
                                          $('.txtDestinationInput').css( {'font-size': '10px'} );                                   
                                    }
                                    // When TripPlanner+ panel becomes active
                                    if (ui.newHeader.find("a").text() == "TripPlanner+") {//alert('tp');
                                          // save subway and bus schedule block contents
                                          if (!SBform) {
                                          $('#fdate').removeClass('hasDatepicker');
                                          SBform = $('#block-block-576').html();
                                          }
                                          // empty block contents
                                          $('#block-block-576').html('');
                                          // if tripplanner form was removed
                                          if (TPform) {
                                                // insert the saved block contents
                                                $('#block-tripplanner-mta3-tripplanner').html(TPform);
                                                // prevent this happening until the block is hidden again
                                                TPform = null;                                        
                                          }
                                          // asynchronously load the js file when the forms switch
                                          require("/sites/all/modules/custom/tripplanner_mta3/tripplanner_mta3.js");
                                          //position datepicker here instead of in css file
                                          $('#ui-datepicker-div').css( {'margin-left': '-120px'} );
                                          // focus on something to get cursor out of text field when the form opens up
                                          $('#DepId').focus();
                                    }
                              }
                        });
                  }
                  
                  
                  //these need to be available on page load
                  $('#divCP').click( function() {
                        $('#block-views-accordion-menu-v1-block .views-row-2 .ui-accordion-content').css({'height': '300px'});
                        $('#currentmodule').val('tripplanner');
                        // we can't use jQuery to assign the action here because it detaches the hidden "jsonpacket" field
                        document.forms["tpSubmit"].action = 'http://Tripplanner.mta.info/MyTrip/handler/customplannerHandler.ashx?cid=mtahome';
                        $('#divCP').css({'background-color':'#d1d1d1'});
                        $('#divSIA').css({'background-color':'white'});
                        $('#hideMoreOptions').hide();
                        $('#divMoreOptions, #divEndAddress, #divMoreOptions, #divMinimizeRadio, #divSelectRouteCheckbox,').show();
                        $('#divWalkDistRadio').hide();
                  });
                  
                  $('#divSIA').click( function() {
                        $('#block-views-accordion-menu-v1-block .views-row-2 .ui-accordion-content').css({'height': '300px'});
                        $('#currentmodule').val('serviceinthearea');
                        // we can't use jQuery to assign the action here because it detaches the hidden "jsonpacket" field
                        document.forms["tpSubmit"].action = 'http://Tripplanner.mta.info/MyTrip/handler/ServiceintheArea.ashx?cid=mtahome';
                        $('#divCP').css({'background-color':'white'});
                        $('#divSIA').css({'background-color':'#d1d1d1'});
                                          
                        $('#hideMoreOptions').css('display','inline').slideDown();
                        $('#divMoreOptions, #divMinimizeRadio, #divSelectRouteCheckbox, #divEndAddress').hide();
                        $('#divWalkDistRadio').show();
                  });
                  
                  // fake the bus schedule tab - show the same form as for subway schedules
                  //$('#quicktabs-schedules_fares_tolls li.first').after('<li class="odd" id="schedules_fares_tolls-buses-li"><a class="jquery-once-2-processed" id="schedules_fares_tolls-buses-a" href="javascript:void(0)">BUSES</a></li>');
                  
                  $('#quicktabs-schedules_fares_tolls li a').mousedown( function() {
                        $('#quicktabs-schedules_fares_tolls li a').not(this).css('background-color','white');
                        $(this).css('background-color','#D1D1D1');
                  });

                  $('#schedules_fares_tolls-buses-a').click( function() {                 
                        $('#quicktabs-schedules_fares_tolls li.first a').click();
                        $('#quicktabs-schedules_fares_tolls li.first a').css('background-color','white');                     
                  });
                  

                  /* LIRR Schedule form datepicker (moved here from block #573) */

                  $("#RequestDate").datepicker({
                        dateFormat: "mm/dd/yy"
                  }).datepicker("setDate", "0");

            }
      };
})(jQuery);
