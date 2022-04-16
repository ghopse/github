let btn1 = document.querySelector('#btn-1')
let input1 = document.querySelector('.input1').value
let input2 = document.querySelector('.input2').value
let save = []

btn1.addEventListener("click", function () {
  if (input1.length < 10) {
  save.push(input1)
  }
  if (input2.length < 10 ) {
  save.push(input2)
  }
  for (let i = 0; i < save.length; i++) {
    if (save[i] === "") {
      btn1.disabled = true
      alert("Please enter the information")
      break 
    } else {
      btn1.disabled = false
    }
  }
 }
)