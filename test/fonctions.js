function insertApel(valeur,types)
{
    $.ajax
            (
                    {
                        type: "GET",
                        url: "insertApel.php",
                        data: "valeur=" + valeur + "&types=" + types,
                        success: function (data)
                        {
                            alert("l'apel est enregistré");
                            envoieEmail(types);
                        },
                        error: function ()
                        {
                            alert("Erreur d'insertion");
                        }
                    }
            );
}

function getApel()
{
    $.ajax
            (
                    {
                        type: "GET",
                        url: "getApel.php",
                        success: function (data)
                        {
                            $('#divLog').empty();
                            $('#divLog').append(data);
                        },
                        error: function ()
                        {
                            alert("Erreur de récupération de la liste des apels");
                        }
                    }
            );
}

function envoieEmail(types)
{
    $.ajax
            (
                    {
                        type: "GET",
                        url: "envoieEmail.php",
                        data: "types=" + types,
                        success: function (data)
                        {
                            //alert("L'email a bien été envoyé !")
                        },
                        error: function ()
                        {
                            //alert("Erreur d'envoie d'email");
                        }
                    }
            );
}