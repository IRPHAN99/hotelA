$('.toggle-section').each(function () {
    $(this).on('click', function () {
        const section = $(this).data('section');
        const rows = $(`.${section}`);
        
        rows.toggleClass('hidden');
        
        // Toggle expand/collapse icon
        const icon = $(this).find('.expand-icon');
        const currentIcon = icon.html(); // Corrected here
        icon.toggleClass('icofont-caret-down icofont-caret-up');
        // Toggle the icon based on its current state
       
    });
});



// ---------- column function  Start-----------------------------//
$("#selectDays").change(function () {
  if ($(this).val() == 7) {
    sevenCells();
  }
  if ($(this).val() == 14) {
    fourteenCells();
  }
  if ($(this).val() == 28) {
    twentyeightCells();
  }
});


function autoCells() {
  var table = document.getElementById("daysTable");  
  
  for (var i = 0; i < table.rows.length; i++) {
    var row = table.rows[i];  

    for (var j = 8; j <=28; j++) {
      if (row.cells[j]) {
        row.cells[j].style.display = "none";  
      }
    }
  }
}
autoCells() ;

function sevenCells() {
     
    var table = document.getElementById("daysTable");  
    
    for (var i = 0; i < table.rows.length; i++) {
      var row = table.rows[i];  
  
      for (var j = 8; j <=28; j++) {
        if (row.cells[j]) {
          row.cells[j].style.display = "none";  
        }
      }
    }
  }

  
  
  function fourteenCells() {
    var table = document.getElementById("daysTable");  
    
    for (var i = 0; i < table.rows.length; i++) {
      var row = table.rows[i];  
  
      for (var j = 15; j <=28; j++) {
        if (row.cells[j]) {
          row.cells[j].style.display = "none";  
        }
      }
      for (var j = 0; j <=14; j++) {
        if (row.cells[j]) {
          row.cells[j].style.display = "";  
        }
      }
    }
  }
  
  function twentyeightCells() {
    
    var table = document.getElementById("daysTable");  
    
    for (var i = 0; i < table.rows.length; i++) {
      var row = table.rows[i];  
  
      for (var j = 0; j <=28; j++) {
        if (row.cells[j]) {
          row.cells[j].style.display = "";  
        }
      }
    }
  }
// ---------- column function  End-----------------------------//

 // -----------------draging cell start-----------------------//

  $(document).ready(function() {
    $('.draggableTable .cell').draggable({
        helper: 'original', 
        revert: true,
        cursor: 'move',
    });
    
    $('.draggableTable .cell ').droppable({
        accept: 'td',
        hoverClass: 'highlight', 
        drop: function(event, ui) {
            var draggedElement = ui.helper[0]; 
            var droppedElement = this; 
            var temp = $(draggedElement).html();
            $(draggedElement).html($(droppedElement).html());
            $(droppedElement).html(temp);
            $('#changeReservation').modal('show');
            
        }
    });
    
});
// -----------------draging cell end-----------------------//

//-------------- New Reservation start----------------------//
$('.wrapper').on('click', '.remove', function() {
  $('.remove').closest('.wrapper').find('.element').not(':first').last().remove();
});
$('.wrapper').on('click', '.clone', function() {
  $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
});
//-------------- New Reservation end----------------------//

//-------------- New detail tab start----------------------//
$('.d-tab-wrapper').on('click', '.d-tab-remove', function() {
  $('.d-tab-remove').closest('.d-tab-wrapper').find('.d-tab-element').not(':first').last().remove();
});
$('.d-tab-wrapper').on('click', '.d-tab-clone', function() {
  $('.d-tab-clone').closest('.d-tab-wrapper').find('.d-tab-element').first().clone().appendTo('.d-tab-results');
});
// --Record Payment Start//
$('.cancelslide-Dtab').click(function(){
  $('.paymentRec-Dtab').css({"right":"0px", "opacity":"0","z-index":"-11"});
})
$('.p-recordBtnShow').click(function(){
  $('.paymentRec-Dtab').css({"right":"360px", "opacity":"1","z-index":"-11"});
})
// --Record Payment end//
$('.guestEmail').hide();
$('#Dtab-email').click(function(){
  $('.guestEmail').show();
})

//-------------- New detail tab end----------------------//

//-------------- New Guest tab start----------------------//
$('.g-tab-wrapper').on('click', '.g-tab-remove', function() {
  $('.g-tab-remove').closest('.g-tab-wrapper').find('.g-tab-element').not(':first').last().remove();
});
$('.g-tab-wrapper').on('click', '.g-tab-clone', function() {
  $('.g-tab-clone').closest('.g-tab-wrapper').find('.g-tab-element').first().clone().appendTo('.g-tab-results');
});

// -----------------add guest start ----------//
$('#guestTabCol').hide();
$('#g-tabAddroom').click(function(){
  $('#guestTabCol').show();
  $('.addGuestsTitle').hide();
});
// -----------------add guest end ----------//

//-------------- New Guest tab end----------------------//

// -------------payment tab start-----------------//
$('.cancelslide-Paytab').click(function(){
  $('.paymentRec-Paytab').css({"right":"0px", "opacity":"0","z-index":"-11"});
})
$('.p-recordBtnShow-Paytab').click(function(){
  $('.paymentRec-Paytab').css({"right":"360px", "opacity":"1","z-index":"-11"});
})

$('.payEmail').hide();
$('#Paytab-email').click(function(){
  $('.payEmail').show();
})
// -------------payment tab end-----------------//

// -------------notes tab start-----------------//
$('.cancelslide-Notetab').click(function(){
  $('.paymentRec-Notetab').css({"right":"0px", "opacity":"0","z-index":"-11"});
})
$('.p-recordBtnShow-Notetab').click(function(){
  $('.paymentRec-Notetab').css({"right":"360px", "opacity":"1","z-index":"-11"});
})

$('.NoteEmail').hide();
$('#Notetab-email').click(function(){
  $('.NoteEmail').show();
})
// -------------notes tab end-----------------//

// ------------invoice Tab start---------------------//
$('.invoiceHistory').hide();
$("#invoiceGen").click(function(){
    $('.invoiceHistory').show();
    $('.invoiceDetails').hide();
});

$('#emailaAlert').hide();
$('#emailInvoice').click(function(){
   $('#emailaAlert').show();
});
// ------------invoice Tab end ----------------------//


// ------------hover on search start------------------//
$('.bookedbysearch').mouseleave(function(){
  $('.resbox').hide();
});
$('.resbox').hide();
$('.bookedbysearch').mouseover(function(){
  $('.resbox').show();
});
$('.closeResbtn').click(function(){
  $('.resbox').hide();
});
// ------------hover on search end------------------//










// --Record Payment Start//
// $('.paymentRec').css({"right":"0px", "opacity":"0","z-index":"-11"});
// $('.cancelslide').click(function(){
//   $('.paymentRec').css({"right":"0px", "opacity":"0","z-index":"-11"});
// })
// $('.p-recordBtnShow').click(function(){
//   $('.paymentRec').css({"right":"360px", "opacity":"1","z-index":"-11"});
// })
// --Record Payment end//
















































// --------------------payment slide start----------------//

// $('.p-recordBtnhide').click(function(){
//   $('.paymentRec').css({"right":"0px", "opacity":"0","z-index":"-11"});
// })

// $('.p-recordBtnshowDetail').click(function(){
//   $('.paymentRec').css({"right":"360px", "opacity":"1","z-index":"-11"});
// })

// --------------------payment slide end----------------//



// -----------------confirmStatus start------------------//

$('.confirmStatus').click(function(){
  $(this).html('Checkin');
});

// -----------------confirmStatus end------------------//




// -------------------email invoice btn start------------//


// -------------------email invoice btn end------------//





// ----------------------EDIT RESERVATION DETAILS FORM START ---------------//


var erdetail = 1;

$("#addAnotherRoomDetails").click(function(){
    if(erdetail < 100) {
        var $addinput = $("#roomReserveDetails");
        var res = $("#addReservationDetails").clone().prependTo($addinput);
        erdetail++;
    }
   
  else{
    $("#add-cert2").off("click");  
 }
});
 




$('#roomReserveDetails').on('click', '.formclosebtn', function() {
  $('.formclosebtn').closest('#roomReserveDetails').find('#addReservationDetails').remove().last().remove();;
});

// $('#roomReserveDetails').on('click', '.formclosebtn', function() {
//   $('.formclosebtn').closest('#roomReserveDetails').find('#roomReserveDetails').clone().appendTo('#addReservationDetails');;
// });

// $('#roomReserveDetails').on('click', '#addAnotherRoomDetails', function() {
//   $('#addAnotherRoomDetails').closest('#roomReserveDetails').find('#addReservationDetails').first().clone().appendTo('.results');
// });

// $(document).ready(function() {
//   $('.AddNew').click(function() {
// $(".TargetElements:first").clone().insertAfter('.TargetElements:last');
//     $('.Remove').show();
//   });
// }); 

 

// $(document).ready(function () {
//           $('.Remove').click(function () {
//               if ($(".TargetElements").length > 1) {
//                   $(".TargetElements:last").remove();
//               }
//               else {
//                   $('.Remove').hide();
//               }
//           });
//       });

// <label>Name</label> </div>
// <div>
// <input type="button" value="Add" class="AddNew" />
// <input type="button" value="Remove" class="Remove" hidden="hidden" />
// </div>


// -----------------------EDIT RESERVATION DETAILS FORM  ---------------//

// ------------------Guest form Start------------------------//
// var Gcount = 1;

//  $("#newGuest").click(function(){
//   if(Gcount < 100) {
//           $("#guestC").clone().appendTo(".guestfromClon");
//          Gcount++;
//      }
//    else{
//      $("#add-cert3").off("click");  
//   }
//  });



 var Gcount = 1;

$("#newGuest").click(function(){
    if(Gcount < 100) {
        var $addinput = $(".guestfromClon");
        var res = $("#guestC").clone().prependTo($addinput);
        Gcount++;
    }
   
  else{
    $("#add-cert2").off("click");  
 }
});



 $('.guestfromClon').on('click', '.formclosebtn', function() {
  $('.formclosebtn').closest('.guestfromClon').find('#guestC').remove().last().remove();;
});
 

      // $(".addGuestsform").clone().appendTo(".gc");

// ------------------Guest form end ------------------------//


// $('.wrapper').on('click', '.remove', function() {
//   $('.remove').closest('.wrapper').find('.element').not(':first').last().remove();
// });
// $('.wrapper').on('click', '.clone', function() {
//   $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
// });

// <div class="wrapper">
//   <div class="element"></div>
//   <div class="results"></div>

//   <div class="buttons">
//     <button class="clone">clone</button>
//     <button class="remove">remove</button>
//   </div>
// </div>




