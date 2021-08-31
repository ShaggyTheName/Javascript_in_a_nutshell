// Funktionen für "Wieviele Tage hat dieser Monat?"

function totalDays() {

	var month = document.getElementById('Month').value
	var year = document.getElementById('Year').value
	var dayCount = 12;
	
	switch (month) { 
		
	case "1": case "3": case "5": case "7": case "8": case "10": case "12": 
		dayCount = 31;
		break;

	case "4": case "6": case "9": case "11": 
		dayCount = 30;
		break;

	case "2": 	
		if (year % 4 == 0) 
			dayCount = 29;
			else dayCount = 28;
		break;
	default:
		dayCount = "Error"; 	
		console.log(month);
		break;
	}
	
	document.getElementById('output').innerHTML = "Der ausgewählte Monat hat "+dayCount+" Tage";
}


function reset() {
	document.getElementById('output').innerHTML = "";
}

// Funktionen für "BMI Berechnung / IF / ELSEIF / ELSE"

function BMI() {
	var gewicht = document.getElementById('Gewicht').value
	var grösse = document.getElementById('Grösse').value

	let bmi = gewicht / (grösse*grösse)

	if (bmi < 18.5){
		document.getElementById('outputbmi').innerHTML = "Sie sind Untergewichtig!";
	}
	else if (bmi >= 18.5 && bmi < 24.9) {
		document.getElementById('outputbmi').innerHTML = "Sie haben ein Normalgewicht";
	}
	else {
		document.getElementById('outputbmi').innerHTML = "Sie haben Übergewicht!";
	}
}

function resetbmi() {
	document.getElementById('outputbmi').innerHTML = "";
}