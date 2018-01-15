/*  */

function ready(fn) {
    if(document.readyState != 'loading') {
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


/* Vérification du recaptcha */

var verifyCallback = function (response) {
    alert(response);
};
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