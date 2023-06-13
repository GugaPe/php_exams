function sprawdz(e){
    e.preventDefault();
    var haslo = document.getElementById('haslo').value;
    var sus = document.getElementById('sus');
    if(haslo.length >= 7 && /[0-9]/.test(haslo) == true){
        sus.style.color = "green";
        sus.innerText = "SILNE";
        return;
    } else if (haslo.length >= 4 && haslo.length <= 6 && /[0-9]/.test(haslo) == true){
        sus.style.color = "blue";
        sus.innerText = "ŚREDNIE";
        return;
    } else if(!haslo){
        sus.style.color = "red";
        sus.innerText = "WPISZ HASŁO";
        return;
    } else {
        sus.style.color = "yellow";
        sus.innerText = "SŁABE";
        return;
    };
}