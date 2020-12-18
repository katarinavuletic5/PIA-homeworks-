function clickButton() {
    window.open("kvizpitanja.html");
    window.close(this);
};

var indexpitanja=0;
var rezultat=0;

var kvizpitanjaJSON={
        "pitanje1":{
            "pitanja":"Арес је грчки бог:",
            "odgovori":[
                "рата",
                "лова",
                "воде",
                "подземног света"
            ],
            "ispravanodg":"рата"
        },

        "pitanje2":{ 
            "pitanja":"Од понуђених раствора, најкиселији је онај чија је pH вредност:",
            "odgovori":[
                "3",
                "4",
                "5",
                "6"
            ],
            "ispravanodg":"3"
        },

        "pitanje3":{
            "pitanja":"Манифестација Дани лудаје одржава се у:",
            "odgovori":[
                "Ваљеву",
                "Сенти",
                "Кикинди",
                "Зрењанину"
            ],
            "ispravanodg":"Кикинди"
        },

        "pitanje4":{
            "pitanja":"Главна површина Windowsa, на којој можете да отворите и управљате датотекама и програмима, назива се:",
            "odgovori":[
                "Border",
                "Bold",
                "Justify",
                "Desktop"
            ],
            "ispravanodg":"Desktop"
        }, 

        "pitanje5":{
            "pitanja":"Које године се догодила велика француска буржоаска револуција?",
            "odgovori":[
                "1789.",
                "1879.",
                "1802.",
                "1804."
            ],
            "ispravanodg":"1789."
        },

        "pitanje6":{
            "pitanja":"Најстарији дневни лист у Србији је:",
            "odgovori":[
                "Борба",
                "Данас",
                "Политика",
                "Новости"
            ],
            "ispravanodg":"Политика"
        },

        "pitanje7":{
            "pitanja":"2011. године се, нaкон више од 30 година постојања, разишао бенд:",
            "odgovori":[
                "Roling Stons",
                "Aerosmith",
                "REM",
                "TLC"
            ],
            "ispravanodg":"REM"
        },

        "pitanje8":{
            "pitanja":"Које ће године Нови Сад бити Европска престоница културе?",
            "odgovori":[
                "2021.",
                "2022.",
                "2023.",
                "2024."
            ],
            "ispravanodg":"2021."
        }
}


function ucitajPitanja(indexpitanja)
{
    if(indexpitanja>7)
    {
        alert("Крај игре. Ваш број поена је:" + rezultat);
        document.getElementById("pitanje").style.display = "none";
    }
    else{
       tacno=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].ispravanodg;

        document.getElementById("brojpitanja").innerHTML=(indexpitanja+1) + ". Питање:"

        document.getElementById("postavljenopitanje").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].pitanja;
        document.getElementById("odg1").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[0];
        document.getElementById("odg2").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[1];
        document.getElementById("odg3").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[2];
        document.getElementById("odg4").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[3];

    }
}
ucitajPitanja(indexpitanja);


function preskoci() {
    ++indexpitanja;
    alert("Одговор ће се сматрати нетачним.");
    ucitajPitanja(indexpitanja);
}

function napusti() {
    ++indexpitanja;
    alert("Крај игре. Ваш број поена је:" + rezultat);
    document.getElementById("pitanje").style.display="none";
}


function proveriOdgovor(clicked) {
    clickedButtonValue=document.getElementById(clicked).value;
    if(clickedButtonValue==tacno)
        {
            rezultat+= 1;
            alert("Одговор је тачан.");
            ucitajPitanja(++indexpitanja);
        }
    else {
        alert("Одговор је нетачан.");
        ucitajPitanja(++indexpitanja);
        
    }    
}



