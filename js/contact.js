/* variables  */

function ready(fn) {
    if(document.readyState !== 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(function() {
    /*new window['MaterialChipInput'](document.getElementById('demo-0'));
    new window['MaterialChipInput'](document.getElementById('demo-1'));*/
    var withSearch = new window['MaterialChipInput'](document.getElementById('demo-2'));
    withSearch.addSearch(function(query, callback) {
        var techno = ["Java", "Swift", "HTML5", "CSS3", "SQL", "Géolocalisation"];
        var regex = new RegExp(query, 'i');
        callback(techno.filter(function(item) {
            return item.search(regex) != -1;
        }));
    });
});

function getFiles(){
    var files = document.getElementById('uploaded_file').files;
    var liste = '';

    for(var i=0; i<files.length; i++)
        liste += "," + files[i].name;

    document.getElementById('TEXT_ID').value = liste.substr(1);
}

var nom = document.getElementById("nom");
var prenom = document.getElementById("prenom");
var tamerlemail = document.getElementById("Email");
var telephone = document.getElementById("telephone");
var sujet = document.getElementById("sujet");
var note = document.getElementById("note");

var a = [nom, prenom, tamerlemail, telephone, sujet, note];

function enableSubmitButton(){

    /*if (nom.value !== "" && prenom.value !== "" && tamerlemail.value !== "" && telephone.value !== "" && sujet.value !== "" && note.value !== "")
        document.getElementById("submitButton").disabled = false;
    else
    {
        a.forEach(function (e) {
           if (e.value === ""){
               e.required = true;
           }
        });
    }*/
    document.getElementById("submitButton").disabled = false;

    $.toast({
        heading: 'Succès',
        text: 'Votre message a bien été envoyé',
        icon: 'success',
        loader: false,        // Change it to false to disable loader
        loaderBg: '#00B0F0',  // To change the background
        position: 'bottom-center'
    })
}


var widgetId1;
var widgetId2;
var onloadCallback = function () {
    // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
    // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
    widgetId1 = grecaptcha.render('example1', {
        'sitekey': '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V',
        'theme': 'light'
    });
    widgetId2 = grecaptcha.render(document.getElementById('example2'), {
        'sitekey': '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V'
    });
    grecaptcha.render('example3', {
        'sitekey': '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V',
        'callback': verifyCallback,
        'theme': 'dark'
    });
};