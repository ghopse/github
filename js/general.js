$(document).ready(function () {
    
  // Validate plateNo
      $('#plateNoCheck').hide();   
      let plateNoError = true;
      $('#input1').keyup(function () {
          validatePlateNo();
      });
       
      function validatePlateNo() {
        let plateNoValue = $('#input1').val();
        if (plateNoValue.length == '') {
        $('#plateNoCheck').show();
            plateNoError = false;
            return false;
        }
        else if (plateNoValue.length > 10) {
            $('#plateNoCheck').show();
            $('#plateNoCheck').html
  ("length of car plate number must be under 10");
            plateNoError = false;
            return false;
        }
        else {
            $('#plateNoCheck').hide();
        }
      }

  // Validate slotNo
  $('#slotNoCheck').hide();   
  let slotNoError = true;
  $('#input2').keyup(function () {
      validateSlotNo();
  });
   
  function validateSlotNo() {
    let slotNoValue = $('#input2').val();
    if (slotNoValue.length == '') {
    $('#slotNoCheck').show();
        slotNoError = false;
        return false;
    }
    else {
        $('#slotNoCheck').hide();
    }
  }

  // Submit button
  $('#btn-1').click(function () {
    validatePlateNo();
    validateSlotNo();
    
    if ((plateNoError === true) && (slotNoError === true)) {
        return true;
    } else {
        return false;
    }
    
});

$(function(){
  $('#form').validate({
    rules: {
      plateNo: {
        required: true
      },
      slotNo:{
        required: true,
      },
    },
    messages: {
      plateNo: {
        required:'required'
      },
      slotNo: {
        required:'required',
      },
    },
    submitHandler: function(form) {
      form.submit();
    }
});


});

$(function() {
  var availableSlots = [
    "A1",
    "A2",
    "A3",
    "B1",
    "B2",
    "B3",
    "C1",
    "C2",
    "C3"
  ];
  $( "#input2" ).autocomplete({
    source: availableSlots
  });
});

});




//let btn1 = document.querySelector('#btn-1')
//let input1 = document.querySelector('.input1').value
//let input2 = document.querySelector('.input2').value
//let save = []

//btn1.addEventListener("click", function () {
  //if (input1.length < 10) {
  //save.push(input1)
  //}
  //if (input2.length < 10 ) {
  //save.push(input2)
  //}
  //for (let i = 0; i < save.length; i++) {
    //if (save[i] === "") {
      //btn1.disabled = true
      //alert("Please enter the information")
      //break 
    //} else {
      //btn1.disabled = false
    //}
  //}
 //}
//)