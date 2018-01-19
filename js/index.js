
window.onload = function () {
    var andr = document.getElementById("pieChartAndroid");
    var ios = document.getElementById("pieChartiOS");
    var cSharp = document.getElementById("pieChartCSharp");
    var java = document.getElementById("pieChartJava");
    var htmlCss = document.getElementById("pieChartHtmlCss");

    var legend = {
        display: false
    };

    var options = { 
        responsive: false,
        maintainAspectRatio: false,
        legend: legend,
        tooltips: {
            callbacks: {
               label: function(tooltipItem) {
                      return tooltipItem.yLabel;
               }
            }
        },
        scaleShowLabels : false
    };

    var androidDoughnutChart = new Chart(andr, {
        type: 'doughnut',
        data: {
            labels: ["Android"],
            datasets: [{
                label: 'Android',
                data: [85, 15],
                backgroundColor: [
                    'rgba(106, 179, 68, 1)',
                    'rgba(106, 179, 68, 0.1)'
                ],
                borderColor: [
                    'rgba(106, 179, 68, 1)',
                    'rgba(106, 179, 68, 0.1)'
                ],
                borderWidth: 1
            }]
        },
        options: options

    });

    var iOSDoughnutChart = new Chart(ios, {
        type: 'doughnut',
        data: {
            labels: ["iOS"],
            datasets: [{
                label: 'iOS',
                data: [35, 65],
                backgroundColor: [
                    'rgba(51, 51, 51, 1)',
                    'rgba(51, 51, 51, 0.1)'
                ],
                borderColor: [
                    'rgba(51, 51, 51, 1)',
                    'rgba(51, 51, 51, 0.1)'
                ],
                borderWidth: 1
            }]
        },

        options: options
    });

    var iOSDoughnutChart = new Chart(cSharp, {
        type: 'doughnut',
        data: {
            labels: ["C#"],
            datasets: [{
                label: 'C#',
                data: [85, 15],
                backgroundColor: [
                    'rgba(0, 103, 183, 1)',
                    'rgba(0, 103, 183, 0.1)'
                ],
                borderColor: [
                    'rgba(0, 103, 183, 1)',
                    'rgba(0, 103, 183, 0.1)'
                ],
                borderWidth: 1
            }]
        },

        options: options
    });

    var iOSDoughnutChart = new Chart(java, {
        type: 'doughnut',
        data: {
            labels: ["JAVA"],
            datasets: [{
                label: 'JAVA',
                data: [85, 15],
                backgroundColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(255, 0, 0, 0.1)'
                ],
                borderColor: [
                    'rgba(255, 0, 0, 1)',
                    'rgba(255, 0, 0, 0.1)'
                ],
                borderWidth: 1
            }]
        },

        options: options
    });

    var iOSDoughnutChart = new Chart(htmlCss, {
        type: 'doughnut',
        data: {
            labels: ["HTML5 / CSS3"],
            datasets: [{
                label: 'HTML5 / CSS3',
                data: [25, 75],
                backgroundColor: [
                    'rgba(255, 102, 0, 1)',
                    'rgba(255, 102, 0, 0.1)'
                ],
                borderColor: [
                    'rgba(255, 102, 0, 1)',
                    'rgba(255, 102, 0, 0.1)'
                ],
                borderWidth: 1
            }]
        },

        options: options
    });
    
    $("a[href^='#']").click(function (e) {
		var 
			yPos,
			yInitPos,
			target = ($($(this).attr("href") + ":first"));
			
		// On annule le comportement initial au cas ou la base soit différente de la page courante.
		e.preventDefault(); 
		
		yInitPos = $(window).scrollTop();
		
		// On ajoute le hash dans l'url.
		window.location.hash = $(this).attr("href");
		
		// Comme il est possible que l'ajout du hash perturbe le défilement, on va forcer le scrollTop à son endroit inital.
		$(window).scrollTop(yInitPos);
		
		// On cible manuellement l'ancre pour en extraire sa position.
		// Si c'est un ID on l'obtient.
		target = ($($(this).attr("href") + ":first"));
 
		// Sinon on cherche l'ancre dans le name d'un a.
		if (target.length == 0) {
			target = ($("a[name=" + $(this).attr("href").replace(/#/gi,"") + "]:first"))
		}
		
		// Si on a trouvé un name ou un id, on défile.
		if (target.length == 1) {
			yPos = target.offset().top; // Position de l'ancre.
		
			// On anime le défilement jusqu'à l'ancre.
			$('html,body').animate({ scrollTop: yPos - 100 }, 600); // On décale de 40 pixels l'affichage pour ne pas coller le bord haut de l'affichage du navigateur et on défile en 1 seconde jusqu'à l'ancre.
		}
	});
};

$(window).load(function () {
    $('input[data-required=true]').attr('required', true);
});