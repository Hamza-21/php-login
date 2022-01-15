function showPass() {
  var x = document.getElementById("pass-input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function showConPass() {
  var x = document.getElementById("confirm-input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var pass = document.getElementById("pass-input");
var conPass = document.getElementById("confirm-input");
var message = document.getElementById("msg");

var passMatch = function () {
  if (pass.value != conPass.value) {
    message.innerHTML = "Passwords do not match";
    message.style.color = "red";
  } else {
    message.innerHTML = "Passwords matched";
    message.style.color = "green";
  }
};

function fixPass() {
  if (pass.value != conPass.value) {
    alert("Passwords do not match!");
  }
  if (pass.value.length > 15) {
    alert("Password too long!");
  }
}
