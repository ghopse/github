$(function() {
  
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      slotNo: "required",
      plateNo: {
        required: true,
        maxlength: 10
      }
    },
    // Specify validation error messages
    messages: {
      slotNo: "Please enter your parking space number",
      plateNo: {
        required: "Please enter your car plate number",
        maxlength: "Your car plate number can't be over 10 characters long"
      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
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