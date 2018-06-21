function checked(){

    //Leefgebied 1
    if(document.getElementById('begeleidingnaarwerk').checked){
        var check_begeleidingnaarwerk = document.getElementsByClassName('leefgebied');
        for(var i = 0; i < check_begeleidingnaarwerk.length; i++){
            if(check_begeleidingnaarwerk[i].id !== 'Begeleiding naar werk'){
                check_begeleidingnaarwerk[i].style.display = 'none';
            }
        }
    }
    if(document.getElementById('dagbesteding').checked) {
        var check_dagbesteding = document.getElementsByClassName('leefgebied');
        for (var a = 0; a < check_dagbesteding.length; a++) {
            if (check_dagbesteding[a].id !== 'Dagbesteding') {
                check_dagbesteding[a].style.display = 'none';
            }
        }
    }
}
setInterval(checked, 500);

function unchecked(){
    if(document.getElementById('begeleidingnaarwerk').checked === false){
        var uncheck_begeleidingnaarwerk = document.getElementsByClassName('leefgebied');
        for(var c = 0;c < uncheck_begeleidingnaarwerk.length; c++){
            if(uncheck_begeleidingnaarwerk[c].id !== 'Begeleiding naar werk'){
                uncheck_begeleidingnaarwerk[c].style.display = 'block';
            }
        }
    }
    if(document.getElementById('dagbesteding').checked === false){
        var uncheck_dagbesteding = document.getElementsByClassName('leefgebied');
        for(var d = 0;d < uncheck_dagbesteding.length; d++){
            if(uncheck_dagbesteding[d].id !== 'Dagbesteding'){
                uncheck_dagbesteding[d].style.display = 'block';
            }
        }
    }
}setInterval(unchecked, 500);