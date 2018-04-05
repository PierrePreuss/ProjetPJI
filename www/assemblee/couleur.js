/**
 * @author hayaert thomas/ preuss pierre
 */

function couleur(hemi){	
	
		var i=1;
				for(i=1;i<651;i++){
				var hash= "s"+i;
				console.log(siege[i]);
				if(typeof siege[i] === 'undefined'){
	
				}else{
					hemi[hash].attr(siege[i]);
				}	
			}
}
