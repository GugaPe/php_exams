var firstNumber = document.getElementById("firstNumber");
var secondNumber = document.getElementById("secondNumber");
var info = document.getElementById("info");

function dodawanie() {
  if (!firstNumber.value || !secondNumber.value) {
    info.innerHTML = "Proszę uzupełnić obie liczby";
  } else {
    let sum = Number(firstNumber.value) + Number(secondNumber.value);
    info.innerHTML = "twój wynik to: " + sum;
  }
}

function odejmowanie() {
  var sus = Number(firstNumber.value) - Number(secondNumber.value);
  if (!firstNumber.value || !secondNumber.value) {
    info.innerHTML = "Proszę uzupełnić obie liczby";
  } else {
    info.innerHTML = "twój wynik to: " + sus;
  }
}

function mnozenie() {
  var iloczyn = Number(firstNumber.value) * Number(secondNumber.value);
  if (!firstNumber.value || !secondNumber.value) {
    info.innerHTML = "Proszę uzupełnić obie liczby";
  } else {
    info.innerHTML = "twój wynik to: " + iloczyn;
  }
}

function dzielenie() {
  if (!firstNumber.value || !secondNumber.value) {
    info.innerHTML = "Proszę uzupełnić obie liczby";
  } else if (Number(secondNumber.value) == 0) {
    info.innerHTML = "Nie można dzielić przez 0";
  } else {
    var iloraz = Number(firstNumber.value) / Number(secondNumber.value);
    info.innerHTML = "twój wynik to: " + iloraz;
  }
}
