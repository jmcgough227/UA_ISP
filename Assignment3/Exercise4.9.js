// Exercise 4.9 javascript

var namesA = new Array();
namesA[0] = "John";
namesA[1] = "Mary";
namesA[2] = "Susie";
namesA[3] = "Perry";
namesA[4] = "Edward";
namesA[5] = "Julie";
namesA[6] = "Billy";

var namesB = new Array();
namesB[0] = "Arnie";
namesB[1] = "Phil";
namesB[2] = "Oswald";
namesB[3] = "Jason";
namesB[4] = "Millie";
namesB[5] = "Barney";
namesB[6] = "Fred";
namesB[7] = "Anna";

function e_names(names){
	var n = 0;
	var count;
	
	for(n = 0; n < names.length; n++){
		if(names[n].search(/ie$/) != -1 || names[n].search(/y$/) != -1){
			document.write(names[n]);
			count++;
		}
	}
}