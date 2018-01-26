

	var intro = $("#intro")
	nom = $('#nom')
	prenom = $('#prenom'); 
$(function(){
	
	// Shuffle the contents
	nom.shuffleLetters();
	prenom.shuffleLetters();

	// Bind events
	intro.click(function () {

		if(nom.text() === "ORLANDINI") {
			nom.shuffleLetters({
				"text": "Bienvenue"});
				prenom.text("");
		}
		else {
			nom.shuffleLetters({
				"text": "ORLANDINI"});
			prenom.shuffleLetters({
				"text": "Nicolas"});
		}
	})

    $('body').on( "keydown", function( event ) {
		console.log(event.which);
    if(event.which == 107){
		nom.shuffleLetters({
			"text": "est ailleurs"});
		prenom.shuffleLetters({
			"text": "La vérité"});
    }
	});
});

function AnimTitle() { 
		if(nom.text() === "ORLANDINI") {
			nom.shuffleLetters({
				"text": "Bienvenue"});
				prenom.text("");
		}
		else {
			nom.shuffleLetters({
				"text": "ORLANDINI"});
			prenom.shuffleLetters({
				"text": "Nicolas"});
		}
}
setInterval("AnimTitle();",5000); 