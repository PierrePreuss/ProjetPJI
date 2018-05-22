var donne = {
	"data1" : [
 {"ratio": 30, "label": "homme"},
 {"ratio": 70, "label": "femme"}
],
	"data2" : [
 {"ratio": 3, "label": "NI"},
 {"ratio": 17, "label": "Républicain"},
 {"ratio": 5, "label": "Les Constructifs"},
 {"ratio": 8, "label": "MoDem"},
 {"ratio": 54, "label": "La République en marche"},
 {"ratio": 5, "label": "NG"},
 {"ratio": 3, "label": "FI"},
 {"ratio": 3, "label": "GDR"}
]

};



$(function () {
	
  

$('#rech').change(function(){
	  var values = [],
        labels = [];
		
		var data =[];
		
		$("#holder").html("");
		$("#legende").html("");
		
		/*data= $(this).find("option:selected").val();
		console.log(data);
		*/
		
		
    var hash = $(this).find("option:selected").val();
    var data = donne[hash];
    var k = data.length;

	
	/*
        if (hash == 1) {
             data =  data1;
             console.log(data);
		}else{
			if(hash == 2) data = data2;
		}*/
	

		
    for (var j = 0; j < k; j++){
	
		 values.push(parseInt(data[j].ratio, 10));
        labels.push(data[j].label + " " + data[j].ratio +"%");

	}
	
	
    for (var i = k-1; i >=0; i--){
        document.getElementById('legende' ).append(labels[i] + " | ");
	}
       

    $("table").hide();
    Raphael("holder", 700, 700).pieChart(350, 350, 200, values, labels, "#fff");
	});
});
