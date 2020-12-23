function clickButton() {
    window.open("kvizpitanja.html");
    window.close(this);
};

var indexpitanja=0;
var rezultat=0;
var tajmer;

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
        },



     "pitanje9":{
            "pitanja":"БИЛИНГВИЗАМ је:",
           
            "ispravanodg":"паралелно учење два језика"
        },


  "pitanje10":{
            "pitanja":"Довршите изреку „Ко се мача лати ...“",
           
            "ispravanodg":"од мача и страда"
        }
}


function ucitajPitanja(indexpitanja)
{
    if(indexpitanja>9)
    {
        alert("Крај игре. Ваш број поена је:" + rezultat);
        clearInterval(sekund);
	$("#vreme").remove();
	$("#t").remove();
        $("#n").remove();
        document.getElementById("pitanje").style.display = "none";
    }
    else{
        if(indexpitanja<=7){
        $("#unos").hide();
        $("#proveri").hide();
       tacno=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].ispravanodg;

        document.getElementById("brojpitanja").innerHTML=(indexpitanja+1) + ". Питање:"

        document.getElementById("postavljenopitanje").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].pitanja;
        document.getElementById("odg1").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[0];
        document.getElementById("odg2").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[1];
        document.getElementById("odg3").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[2];
        document.getElementById("odg4").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].odgovori[3];
    }
     else{
          $("#unos").show();
          $("#proveri").show();
          $("#odg1").hide();
          $("#odg2").hide();
          $("#odg3").hide();
          $("#odg4").hide();
          tacno=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].ispravanodg;

          document.getElementById("brojpitanja").innerHTML=(indexpitanja+1) + ". Питање:"
          document.getElementById("postavljenopitanje").value=kvizpitanjaJSON["pitanje" + (indexpitanja+1)].pitanja;



    }

  }
}
ucitajPitanja(indexpitanja);
 $("#t").hide();
 $("#n").hide();

function preskoci() {
    ++indexpitanja;
    resetujTajmer();
    alert("Одговор ће се сматрати нетачним.");
    ucitajPitanja(indexpitanja);
}

function startujTajmer(trajanje, display) {
        tajmer=trajanje;
        var minuti, sekunde;
        sekund=setInterval(function () {
        minuti=parseInt(tajmer / 60, 10)
        sekunde=parseInt(tajmer % 60, 10);

        minuti=minuti < 10 ? "0" + minuti : minuti;
        sekunde=sekunde < 10 ? "0" + sekunde : sekunde;

        display.textContent=minuti + ":" + sekunde;


        if (--tajmer<0) {
            alert("Време је истекло! Одговор ће се сматрати нетачним.");
            ucitajPitanja(++indexpitanja);
            tajmer=trajanje;
        }
    }, 1000);

}

function napusti() {  
    ++indexpitanja;
    clearInterval(sekund);
    $("#vreme").remove();
    alert("Крај игре. Ваш број поена је:" + rezultat);
    document.getElementById("pitanje").style.display="none";
}

function resetujTajmer() {
     tajmer=20;
}



window.onload=function () {
    dvadesetsekundi=20,
    display=document.querySelector('#vreme');
    startujTajmer(dvadesetsekundi, display);
};


function proveriOdgovor(clicked) {
    clickedButtonValue=document.getElementById(clicked).value;
    if(clickedButtonValue==tacno)
        {
	    $("#t").show();
   
            setInterval(() => {
                   $("#t").hide();
            }, 1000);
            rezultat+= 1;
            resetujTajmer();
            
            ucitajPitanja(++indexpitanja);
        }
    else {
	 $("#n").show();
   
         setInterval(() => {
                $("#n").hide();
         }, 1000);
        resetujTajmer();
       
        ucitajPitanja(++indexpitanja);
        
    }    
}
function proveri() {  
      if (document.getElementById('unos').value== tacno){ 
	      
	    $("#t").show();
   
            setInterval(() => {
                   $("#t").hide();
            }, 1000);
            rezultat+=1;
            resetujTajmer();
		
            document.getElementById('unos').value = '';
            ucitajPitanja(++indexpitanja);
		}
		else { 	
	        $("#n").show();
   
                setInterval(() => {
                   $("#n").hide();
                }, 1000);
                resetujTajmer();													
		
                document.getElementById('unos').value = '';
                ucitajPitanja(++indexpitanja);
		}
	}


