<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="fonctions.js"></script>
        <script src="./JQuery/JQuery 3.5.1.js"></script>
        <style>
            textarea{
                width: 40%;
                font-size: 2em;
                height: 200px;
            }
        </style>

    </head>
    <body>

        <textarea id="texte">   </textarea>

        <p>
            <button id="enregistrer"> Enregistrer </button>
            <button id="stop"> Stop </button>
            <button id="log"> Log </button>
        </p>

        <div id="divLog">
        </div>

        <script>
            let btnEnregistrer = document.getElementById("enregistrer");
            let btnStop = document.getElementById("stop");
            let btnLog = document.getElementById("log");

            let inputTexte = document.getElementById("texte");

            var reconnaissance = new (window.webkitSpeechRecognition)();
            reconnaissance.lang = 'fr-FR';
            reconnaissance.continuous = true;

            reconnaissance.onresult = function (event) {
                //var types = 0;
                var valeur = inputTexte.value = event.results[0][0].transcript;
                if (valeur.includes("code 10") == true) { //ce n'est pas la maniere la plus optimal (à changer)
                    types = 1;
                } else if (valeur.includes("code 11") == true) {
                    types = 2;
                } else if (valeur.includes("code 12") == true) {
                    types = 3;
                } else if (valeur.includes("code 13") == true) {
                    types = 4;
                } else {
                    types = null;
                }


                insertApel(valeur,types);


//                var mot = "code 10";
//                if(valeur.includes(mot) == true){
//                    alert("la chaine contient le mot : " + mot);
//                }else {
//                    alert("la chaine ne contient pas le mot : " + mot);
//                }
            }

            btnEnregistrer.onclick = function () {//lance la reconnaissance du son
                reconnaissance.start();
            }

            btnStop.onclick = function () {//stop la reconnaissance du son
                reconnaissance.stop();

            }

            btnLog.onclick = function () {//affiche les logs
                getApel();

            }
        </script>




    </body>
</html>
