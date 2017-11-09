$(document).ready(function() {
	/*panjang array dihardcode, cek by panjang string*/
	var nomer=[11];
	var text=[11];
	for (i = 1; i < 13; i++) { 
		nomer[i] = $("#items"+i).text().length;
		text[i] = $("#items"+i).text();
		for (j = 1; j < 13; j++) { 
			if(nomer[i] > 28){
				$("#items"+i).html(text[i].substr(0,28)+"...");
			}
		}
	}
});	