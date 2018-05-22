/* 
 $(document).ready(function() 
  {
var test = {
	"data1" : [
	  { "label": "M" },
     {"label": "M" },
     { "label": "F"},
    { "label": "M" },
     { "label": "M"},
     {"label": "F" },
    {"label": "M" },
     { "label": "F" },
    { "label": "M" },
  {"label": "F" },
    { "label": "M" },
  { "label": "F" },
  {"label": "M" }

]
};

var siege = {
  1:   { fill: '#B53333' },
  2:   { fill: '#E53333' },
};



$(function () {
	
  

	$('#rec').change(function(){
	  var values = [],
        labels = [];
		
		var data =[];

		
		
    var hash = $(this).find("option:selected").val();
    var data = test[hash];
   var k = data.length;

				var i=1;
				for(i=1;i<k;i++){
					var hash= "s"+i;
					console.log(siege[i]);
					if(typeof hemi[hash] === 'undefined'){
					
					}else{
						if(data[i].label == "M"){
							hemi[hash].attr(sexe[2]);
						}else{

						hemi[hash].attr(sexe[1]);
						}	
					}
				}

	

});
});
  }); */