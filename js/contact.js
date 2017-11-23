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

function materializeSelects() {
    var label, parentEl;
    document.querySelectorAll('select').forEach(function(control) {
        parentEl = control.parentElement;
        control.classList.add('mdl-selectfield__select');
        if (parentEl.tagName !== 'DIV') {
            return;
        }
        parentEl.classList.add('mdl-selectfield', 'mdl-js-selectfield');
        label = parentEl.querySelector('label');
        if (label) {
            label.setAttribute('for', control.id || control.name)
            label.classList.add('mdl-selectfield__label');
        }
    });
}