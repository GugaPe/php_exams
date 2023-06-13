function zamowienie(e){
    e.preventDefault;
    var numerZamowienia = document.getElementById("numer");
    var twoje = document.getElementById("twoje");
    if (numerZamowienia.value == "1") {
        twoje.innerHTML = "Twoje zamówienie to cukierek cytryna";
    } else if (numerZamowienia.value == "2"){
        twoje.innerHTML = "Twoje zamówienie to cukierek liść";
    } else if (numerZamowienia.value == "3"){
        twoje.innerHTML = "Twoje zamówienie to cukierek banan";
    } else {
        twoje.innerHTML = "Twoje zamówienie to cukierek inny";
    };

    var R = document.getElementById("R");
    var G = document.getElementById("G");
    var B = document.getElementById("B");
    var przycisk = document.getElementById('przycisk');

    przycisk.style.backgroundColor = "rgb(" + R.value + "," + G.value + "," + B.value + ")";
}