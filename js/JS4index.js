function fnameLugemine(){
    let fname=document.getElementById("fname");
    let vastus=document.getElementById("vastus");

    vastus.innerHTML="Eesnimi: " + fname.value;
}
function lnameLugemine(){
    let lname=document.getElementById("lname");
    let vastus=document.getElementById("vastus2");

    vastus2.innerHTML="Perekonnanimi: " + lname.value;
}
function birthdayLugemine(){
    let birthday=document.getElementById("birthday");
    let vastus=document.getElementById("vastus3");

    vastus3.innerHTML="Sünnipäev: " + birthday.value;
}
function suguLugemine(){
    let vastus4 =document.getElementById("vastus4");
    let gender1 = document.getElementById("gender1");
    let gender2 = document.getElementById("gender2");
    let gender3 = document.getElementById("gender3");

    if(gender1.checked){
        vastus4.innerText="Sugu: Mees"
    }
    else if(gender2.checked){
        vastus4.innerText="Sugu: Naine"
    }
    else if(gender3.checked);{
        vastus4.innerText="Sugu: Muu"
    }
}