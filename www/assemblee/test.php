	<!-- author hayaert thomas/ preuss pierre -->
	<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="fr-FR"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="fr-FR"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="fr-FR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr-FR"> <!--<![endif]-->    <head>
    	     
        
        <meta charset="utf-8">
                <title> Situez votre député dans l'hémicyle - Assemblée nationale</title>
                
                
        
                
                    <meta name="Content-Type" content="text/html; charset=utf-8">
                    <meta name="Content-language" content="fr-FR">
                		
                                    <meta name="X-UA-Compatible" content="IE=edge,chrome=1">
                                                <meta name="viewport" content="width=954">
                                                <meta name="author" content="Assemblée Nationale">
                                                <meta name="copyright" content="Assemblée Nationale">
                                                <meta name="description" content="Presentation de l'Assemblee nationale, du palais Bourbon, de ses membres (deputes), de son fonctionnement et de son actualite : agenda, travaux en cours (amendements, rapports, commissions, lois), textes et dossiers (legislatifs ou d'actualite)...">
                                                <meta name="keywords" content="député, hémicycle, Palais Bourbon, Assemblée nationale, parlementaire">
                    		

								

	
	
										
									
	
<script type="text/javascript" src="jquery-1.7.2.min.js" charset="utf-8"></script>
<script type="text/javascript">
(function($) {
    var _rootUrl = '/', _serverUrl = _rootUrl + 'ezjscore/', _seperator = '@SEPERATOR$',
        _prefUrl = _rootUrl + 'user/preferences';
    // FIX: Ajax is broken on IE8 / IE7 on jQuery 1.4.x as it's trying to use the broken window.XMLHttpRequest object
    if ( window.XMLHttpRequest && window.ActiveXObject )
        $.ajaxSettings.xhr = function() { try { return new window.ActiveXObject('Microsoft.XMLHTTP'); } catch(e) {} };
    // (static) jQuery.ez() uses jQuery.post() (Or jQuery.get() if post paramer is false)
    //
    // @param string callArgs
    // @param object|array|string|false post Optional post values, uses get request if false or undefined
    // @param function Optional callBack
    function _ez( callArgs, post, callBack )
    {
        callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
        var url = _serverUrl + 'call/';
        if ( post )
        {
            var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
            if ( _tokenNode ) _token = _tokenNode.getAttribute('title');
            if ( post.join !== undefined )// support serializeArray() format
            {
                post.push( { 'name': 'ezjscServer_function_arguments', 'value': callArgs } );
                post.push( { 'name': 'ezxform_token', 'value': _token } );
            }
            else if ( typeof(post) === 'string' )// string
            {
                post += ( post ? '&' : '' ) + 'ezjscServer_function_arguments=' + callArgs + '&ezxform_token=' + _token;
            }
            else // object
            {
                post['ezjscServer_function_arguments'] = callArgs;
                post['ezxform_token'] = _token;
            }
            return $.post( url, post, callBack, 'json' );
        }
        return $.get( url + encodeURIComponent( callArgs ), {}, callBack, 'json' );
    };
    _ez.url = _serverUrl;
    _ez.root_url = _rootUrl;
    _ez.seperator = _seperator;
    $.ez = _ez;
    $.ez.setPreference = function( name, value )
    {
        var param = {'Function': 'set_and_exit', 'Key': name, 'Value': value};
            _tokenNode = document.getElementById( 'ezxform_token_js' );
        if ( _tokenNode )
            param.ezxform_token = _tokenNode.getAttribute( 'title' );
        return $.post( _prefUrl, param );
    };
    // Method version, for loading response into elements
    // NB: Does not use json (not possible with .load), so ezjscore/call will return string
    function _ezLoad( callArgs, post, selector, callBack )
    {
        callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
        var url = _serverUrl + 'call/';
        if ( post )
        {
            post['ezjscServer_function_arguments'] = callArgs;
            post['ezxform_token'] = jQuery('#ezxformtoken').attr('title');
        }
        else
            url += encodeURIComponent( callArgs );
        return this.load( url + ( selector ? ' ' + selector : '' ), post, callBack );
    };
    $.fn.ez = _ezLoad;
})(jQuery);
        
</script>



    <script>
	    var _gaq = [['_setAccount', 'UA-40085081-1'], ['_trackPageview']];
	    (function(d, t) {
	        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
	        g.async = true; g.src = '//www.google-analytics.com/ga.js'; s.parentNode.insertBefore(g, s);
	    })(document, 'script');
	</script>

        


    </head>
    <body>
        <div id="header">
            <header>
            </header>

			
    
					
	




<div id="contenu-page" class="sans-haut clearfix">
	

	<div class="contenu-principal pleine-largeur clearfix">
	
		<div class="interieur-contenu-principal clearfix">
		
		<article>
		
			<p class="text-center">Survolez les bancs et cliquez sur une place pour faire apparaître la photo du député(e) qui l'occupe</p>

			
			<div id="recherche" style="text-align:center;margin-bottom:30px;">
			
				<select name="rec" id="rec" class="chzn-select" style="width:330px;" data-placeholder="Choisissez un député">
				
				<option value="">Choisissez un député</option>
				
					
												
							<option value="s78">M. Damien Abad</option>
							
												
					
												
							<option value="s200">Mme Caroline Abadie</option>
							
												
					
												
							<option value="s600">Mme Bérangère Abba</option>
							
												
					
												
							<option value="s650">M. Jean-Félix Acquaviva</option>
							
												
					
												
							<option value="s319">M. Damien Adam</option>
							
												
					
												
							<option value="s357">M. Lénaïck Adam</option>
							
												
					
												
							<option value="s471">M. Saïd Ahamada</option>
							
												
					
												
							<option value="s464">M. Éric Alauzet</option>
							
												
					
												
							<option value="s59">M. Louis Aliot</option>
							
												
					
												
							<option value="s409">Mme Aude Amadou</option>
							
												
					
												
							<option value="s352">M. Patrice Anato</option>
							
												
					
												
							<option value="s276">M. François André</option>
							
												
					
												
							<option value="s227">M. Pieyre-Alexandre Anglade</option>
							
												
					
												
							<option value="s63">Mme Emmanuelle Anthoine</option>
							
												
					
												
							<option value="s526">M. Jean-Philippe Ardouin</option>
							
												
					
												
							<option value="s439">M. Christophe Arend</option>
							
												
					
												
							<option value="s453">M. Gabriel Attal</option>
							
												
					
												
							<option value="s136">M. Julien Aubert</option>
							
												
					
												
							<option value="s134">Mme Sophie Auconie</option>
							
												
					
												
							<option value="s618">Mme Clémentine Autain</option>
							
												
					
												
							<option value="s384">Mme Laetitia Avia</option>
							
												
					
						
							<option class="chzn-disabled" value="s0">M. Joël Aviragnet (Place non attribuée)</option>
			
												
					
												
							<option value="s596">M. Bruno Nestor Azerot</option>
							
												
					
												
							<option value="s419">M. Florian Bachelier</option>
							
												
					
												
							<option value="s486">Mme Delphine Bagarry</option>
							
												
					
												
							<option value="s321">M. Didier Baichère</option>
							
												
					
												
							<option value="s162">M. Erwan Balanant</option>
							
												
					
												
							<option value="s163">Mme Géraldine Bannier</option>
							
												
					
												
							<option value="s230">M. Frédéric Barbier</option>
							
												
					
												
							<option value="s503">Mme Ericka Bareigts</option>
							
												
					
												
							<option value="s167">M. Jean-Noël Barrot</option>
							
												
					
												
							<option value="s109">Mme Nathalie Bassire</option>
							
												
					
												
							<option value="s500">Mme Delphine Batho</option>
							
												
					
												
							<option value="s513">Mme Marie-Noëlle Battistel</option>
							
												
					
												
							<option value="s625">M. Xavier Batut</option>
							
												
					
												
							<option value="s12">M. Thibault Bazin</option>
							
												
					
												
							<option value="s119">Mme Valérie Bazin-Malgras</option>
							
												
					
												
							<option value="s567">Mme Sophie Beaudouin-Hubiere</option>
							
												
					
												
							<option value="s14">Mme Valérie Beauvais</option>
							
												
					
												
							<option value="s154">M. Olivier Becht</option>
							
												
					
												
							<option value="s574">M. Belkhir Belhaddad</option>
							
												
					
												
							<option value="s594">Mme Huguette Bello</option>
							
												
					
												
							<option value="s189">Mme Justine Benin</option>
							
												
					
												
							<option value="s113">M. Thierry Benoit</option>
							
												
					
												
							<option value="s462">Mme Aurore Bergé</option>
							
												
					
												
							<option value="s629">M. Ugo Bernalicis</option>
							
												
					
												
							<option value="s164">M. Philippe Berta</option>
							
												
					
												
							<option value="s212">M. Hervé Berville</option>
							
												
					
												
							<option value="s482">M. Grégory Besson-Moreau</option>
							
												
					
												
							<option value="s268">Mme Barbara Bessot Ballot</option>
							
												
					
												
							<option value="s515">Mme Gisèle Biémouret</option>
							
												
					
												
							<option value="s66">M. Bruno Bilde</option>
							
												
					
												
							<option value="s317">Mme Anne Blanc</option>
							
												
					
												
							<option value="s271">M. Christophe Blanchet</option>
							
												
					
												
							<option value="s421">M. Yves Blein</option>
							
												
					
												
							<option value="s414">M. Pascal Bois</option>
							
												
					
												
							<option value="s166">M. Philippe Bolo</option>
							
												
					
												
							<option value="s272">M. Bruno Bonnell</option>
							
												
					
												
							<option value="s9">Mme Émilie Bonnivard</option>
							
												
					
												
							<option value="s287">Mme Aude Bono-Vandorme</option>
							
												
					
												
							<option value="s2">M. Jean-Yves Bony</option>
							
												
					
												
							<option value="s387">M. Julien Borowczyk</option>
							
												
					
												
							<option value="s554">M. Éric Bothorel</option>
							
												
					
												
							<option value="s39">M. Ian Boucard</option>
							
												
					
												
							<option value="s52">M. Jean-Claude Bouchet</option>
							
												
					
												
							<option value="s233">M. Florent Boudié</option>
							
												
					
												
							<option value="s520">M. Christophe Bouillon</option>
							
												
					
												
							<option value="s334">Mme Brigitte Bourguignon</option>
							
												
					
												
							<option value="s165">M. Jean-Louis Bourlanges</option>
							
												
					
												
							<option value="s146">M. Pierre-Yves Bournazel</option>
							
												
					
												
							<option value="s210">M. Bertrand Bouyx</option>
							
												
					
												
							<option value="s315">Mme Pascale Boyer</option>
							
												
					
												
							<option value="s82">Mme Valérie Boyer</option>
							
												
					
												
							<option value="s481">Mme Yaël Braun-Pivet</option>
							
												
					
												
							<option value="s150">Mme Marine Brenier</option>
							
												
					
												
							<option value="s41">M. Xavier Breton</option>
							
												
					
												
							<option value="s140">M. Guy Bricout</option>
							
												
					
												
							<option value="s498">M. Jean-Louis Bricout</option>
							
												
					
												
							<option value="s454">M. Jean-Jacques Bridey</option>
							
												
					
												
							<option value="s323">Mme Blandine Brocard</option>
							
												
					
												
							<option value="s83">M. Bernard Brochand</option>
							
												
					
												
							<option value="s582">M. Moetai Brotherson</option>
							
												
					
												
							<option value="s168">M. Vincent Bru</option>
							
												
					
												
							<option value="s434">Mme Anne Brugnera</option>
							
												
					
												
							<option value="s549">Mme Danielle Brulebois</option>
							
												
					
												
							<option value="s137">M. Fabrice Brun</option>
							
												
					
												
							<option value="s586">M. Alain Bruneel</option>
							
												
					
												
							<option value="s550">Mme Anne-France Brunet</option>
							
												
					
												
							<option value="s632">M. Stéphane Buchou</option>
							
												
					
												
							<option value="s593">Mme Marie-George Buffet</option>
							
												
					
												
							<option value="s288">Mme Carole Bureau-Bonnard</option>
							
												
					
												
							<option value="s637">M. Pierre Cabaré</option>
							
												
					
												
							<option value="s270">Mme Céline Calvez</option>
							
												
					
												
							<option value="s638">Mme Émilie Cariou</option>
							
												
					
												
							<option value="s92">M. Gilles Carrez</option>
							
												
					
												
							<option value="s517">M. Luc Carvounas</option>
							
												
					
												
							<option value="s649">M. Michel Castellani</option>
							
												
					
												
							<option value="s211">Mme Anne-Laure Cattelot</option>
							
												
					
												
							<option value="s73">M. Jacques Cattin</option>
							
												
					
												
							<option value="s362">M. Lionel Causse</option>
							
												
					
												
							<option value="s624">Mme Danièle Cazarian</option>
							
												
					
												
							<option value="s274">M. Jean-René Cazeneuve</option>
							
												
					
												
							<option value="s543">M. Sébastien Cazenove</option>
							
												
					
												
							<option value="s615">M. Anthony Cellier</option>
							
												
					
												
							<option value="s536">M. Jean-François Cesarini</option>
							
												
					
												
							<option value="s485">Mme Émilie Chalas</option>
							
												
					
												
							<option value="s444">M. Philippe Chalumeau</option>
							
												
					
												
							<option value="s425">Mme Annie Chapelier</option>
							
												
					
												
							<option value="s561">Mme Sylvie Charrière</option>
							
												
					
												
							<option value="s528">Mme Fannette Charvier</option>
							
												
					
												
							<option value="s587">M. André Chassaigne</option>
							
												
					
												
							<option value="s405">M. Philippe Chassaing</option>
							
												
					
												
							<option value="s57">M. Sébastien Chenu</option>
							
												
					
												
							<option value="s116">M. Gérard Cherpion</option>
							
												
					
												
							<option value="s616">M. Guillaume Chiche</option>
							
												
					
												
							<option value="s141">M. Paul Christophe</option>
							
												
					
												
							<option value="s64">M. Dino Cinieri</option>
							
												
					
												
							<option value="s91">M. Éric Ciotti</option>
							
												
					
												
							<option value="s599">M. Stéphane Claireaux</option>
							
												
					
												
							<option value="s358">Mme Mireille Clapot</option>
							
												
					
												
							<option value="s417">M. Jean-Michel Clément</option>
							
												
					
												
							<option value="s301">Mme Christine Cloarec</option>
							
												
					
												
							<option value="s199">M. Jean-Charles Colas-Roy</option>
							
												
					
												
							<option value="s538">Mme Fabienne Colboc</option>
							
												
					
												
							<option value="s58">M. Gilbert Collard</option>
							
												
					
												
							<option value="s648">M. Paul-André Colombani</option>
							
												
					
												
							<option value="s610">M. Éric Coquerel</option>
							
												
					
												
							<option value="s603">M. Alexis Corbière</option>
							
												
					
												
							<option value="s8">M. Pierre Cordier</option>
							
												
					
												
							<option value="s300">M. François Cormier-Bouligeon</option>
							
												
					
												
							<option value="s6">Mme Josiane Corneloup</option>
							
												
					
												
							<option value="s99">M. François Cornut-Gentille</option>
							
												
					
												
							<option value="s322">Mme Bérangère Couillard</option>
							
												
					
												
							<option value="s147">M. Charles de Courson</option>
							
												
					
												
							<option value="s238">Mme Yolaine de Courson</option>
							
												
					
												
							<option value="s367">Mme Michèle Crouzet</option>
							
												
					
												
							<option value="s169">M. Jean-Pierre Cubertafon</option>
							
												
					
												
							<option value="s16">Mme Marie-Christine Dalloz</option>
							
												
					
												
							<option value="s523">M. Olivier Damaisin</option>
							
												
					
												
							<option value="s295">M. Yves Daniel</option>
							
												
					
												
							<option value="s223">M. Dominique Da Silva</option>
							
												
					
												
							<option value="s100">M. Olivier Dassault</option>
							
												
					
												
							<option value="s518">M. Alain David</option>
							
												
					
												
							<option value="s644">Mme Dominique David</option>
							
												
					
												
							<option value="s88">M. Bernard Deflesselles</option>
							
												
					
												
							<option value="s350">Mme Typhanie Degois</option>
							
												
					
												
							<option value="s565">M. Marc Delatte</option>
							
												
					
												
							<option value="s117">M. Rémi Delatte</option>
							
												
					
												
							<option value="s437">M. Michel Delpon</option>
							
												
					
												
							<option value="s125">M. Stéphane Demilly</option>
							
												
					
												
							<option value="s487">M. Nicolas Démoulin</option>
							
												
					
												
							<option value="s170">Mme Marguerite Deprez-Audebert</option>
							
												
					
												
							<option value="s157">Mme Béatrice Descamps</option>
							
												
					
												
							<option value="s3">M. Vincent Descoeur</option>
							
												
					
												
							<option value="s467">M. Frédéric Descrozaille</option>
							
												
					
												
							<option value="s397">Mme Jennifer De Temmerman</option>
							
												
					
												
							<option value="s592">M. Pierre Dharréville</option>
							
												
					
												
							<option value="s25">M. Éric Diard</option>
							
												
					
												
							<option value="s13">M. Fabien Di Filippo</option>
							
												
					
												
							<option value="s553">M. Christophe Di Pompeo</option>
							
												
					
												
							<option value="s205">M. Benjamin Dirx</option>
							
												
					
												
							<option value="s53">M. Julien Dive</option>
							
												
					
												
							<option value="s539">M. Jean-Baptiste Djebbari</option>
							
												
					
												
							<option value="s341">Mme Stéphanie Do</option>
							
												
					
												
							<option value="s402">M. Loïc Dombreval</option>
							
												
					
												
							<option value="s191">Mme Jeanine Dubié</option>
							
												
					
												
							<option value="s484">Mme Jacqueline Dubois</option>
							
												
					
												
							<option value="s20">Mme Marianne Dubois</option>
							
												
					
												
							<option value="s370">Mme Christelle Dubos</option>
							
												
					
												
							<option value="s347">Mme Coralie Dubost</option>
							
												
					
												
							<option value="s302">Mme Nicole Dubré-Chirat</option>
							
												
					
												
							<option value="s95">Mme Virginie Duby-Muller</option>
							
												
					
												
							<option value="s522">Mme Audrey Dufeu Schubert</option>
							
												
					
												
							<option value="s591">M. Jean-Paul Dufrègne</option>
							
												
					
												
							<option value="s413">Mme Françoise Dumas</option>
							
												
					
												
							<option value="s411">Mme Frédérique Dumas</option>
							
												
					
												
							<option value="s509">Mme Laurence Dumont</option>
							
												
					
												
							<option value="s50">M. Pierre-Henri Dumont</option>
							
												
					
												
							<option value="s120">M. Philippe Dunoyer</option>
							
												
					
												
							<option value="s527">Mme Stella Dupont</option>
							
												
					
												
							<option value="s237">M. Nicolas Dupont-Aignan</option>
							
												
					
												
							<option value="s171">M. Bruno Duvergé</option>
							
												
					
												
							<option value="s640">M. M'jid El Guerrab</option>
							
												
					
												
							<option value="s172">Mme Sarah El Haïry</option>
							
												
					
												
							<option value="s551">M. Jean-François Eliaou</option>
							
												
					
												
							<option value="s173">Mme Nathalie Elimas</option>
							
												
					
												
							<option value="s361">Mme Sophie Errante</option>
							
												
					
												
							<option value="s174">Mme Nadia Essayan</option>
							
												
					
												
							<option value="s312">M. Christophe Euzet</option>
							
												
					
												
							<option value="s236">M. José Evrard</option>
							
												
					
												
							<option value="s217">Mme Catherine Fabre</option>
							
												
					
												
							<option value="s461">Mme Élise Fajgeles</option>
							
												
					
												
							<option value="s190">M. Olivier Falorni</option>
							
												
					
												
							<option value="s175">M. Michel Fanget</option>
							
												
					
												
							<option value="s62">M. Daniel Fasquelle</option>
							
												
					
												
							<option value="s588">Mme Elsa Faucillon</option>
							
												
					
												
							<option value="s499">M. Olivier Faure</option>
							
												
					
												
							<option value="s552">Mme Valéria Faure-Muntian</option>
							
												
					
												
							<option value="s213">M. Jean-Michel Fauvergue</option>
							
												
					
												
							<option value="s112">M. Yannick Favennec Becot</option>
							
												
					
												
							<option value="s422">M. Richard Ferrand</option>
							
												
					
												
							<option value="s18">M. Jean-Jacques Ferrara</option>
							
												
					
												
							<option value="s180">M. Marc Fesneau</option>
							
												
					
												
							<option value="s602">Mme Caroline Fiat</option>
							
												
					
												
							<option value="s560">M. Jean-Marie Fiévet</option>
							
												
					
												
							<option value="s158">Mme Agnès Firmin Le Bodo</option>
							
												
					
												
							<option value="s177">Mme Isabelle Florennes</option>
							
												
					
												
							<option value="s469">M. Philippe Folliot</option>
							
												
					
												
							<option value="s447">Mme Emmanuelle Fontaine-Domeizel</option>
							
												
					
												
							<option value="s463">Mme Pascale Fontenel-Personne</option>
							
												
					
												
							<option value="s19">M. Nicolas Forissier</option>
							
												
					
												
							<option value="s450">Mme Paula Forteza</option>
							
												
					
												
							<option value="s474">M. Alexandre Freschi</option>
							
												
					
												
							<option value="s181">M. Bruno Fuchs</option>
							
												
					
												
							<option value="s374">M. Jean-Luc Fugit</option>
							
												
					
												
							<option value="s80">M. Laurent Furst</option>
							
												
					
												
							<option value="s243">M. Olivier Gaillard</option>
							
												
					
												
							<option value="s216">Mme Albane Gaillot</option>
							
												
					
												
							<option value="s226">M. Grégory Galbadon</option>
							
												
					
												
							<option value="s176">Mme Patricia Gallerneau</option>
							
												
					
												
							<option value="s51">M. Claude de Ganay</option>
							
												
					
												
							<option value="s183">M. Laurent Garcia</option>
							
												
					
												
							<option value="s495">M. Guillaume Garot</option>
							
												
					
												
							<option value="s273">M. Thomas Gassilloud</option>
							
												
					
												
							<option value="s127">M. Jean-Jacques Gaultier</option>
							
												
					
												
							<option value="s241">M. Raphaël Gauvain</option>
							
												
					
												
							<option value="s530">Mme Laurence Gayte</option>
							
												
					
												
							<option value="s351">Mme Anne Genetet</option>
							
												
					
												
							<option value="s90">Mme Annie Genevard</option>
							
												
					
												
							<option value="s392">M. Raphaël Gérard</option>
							
												
					
												
							<option value="s365">Mme Séverine Gipson</option>
							
												
					
												
							<option value="s219">M. Éric Girardin</option>
							
												
					
												
							<option value="s410">M. Joël Giraud</option>
							
												
					
												
							<option value="s572">Mme Olga Givernet</option>
							
												
					
												
							<option value="s93">M. Claude Goasguen</option>
							
												
					
												
							<option value="s104">M. Philippe Gomès</option>
							
												
					
												
							<option value="s242">Mme Valérie Gomez-Bassac</option>
							
												
					
												
							<option value="s27">M. Philippe Gosselin</option>
							
												
					
												
							<option value="s420">M. Guillaume Gouffier-Cha</option>
							
												
					
												
							<option value="s460">Mme Perrine Goulet</option>
							
												
					
												
							<option value="s415">M. Fabien Gouttefarde</option>
							
												
					
												
							<option value="s378">Mme Carole Grandjean</option>
							
												
					
												
							<option value="s636">Mme Florence Granjus</option>
							
												
					
												
							<option value="s531">M. Romain Grau</option>
							
												
					
												
							<option value="s284">Mme Olivia Gregoire</option>
							
												
					
												
							<option value="s71">M. Jean-Carles Grelier</option>
							
												
					
												
							<option value="s479">Mme Émilie Guerel</option>
							
												
					
												
							<option value="s293">M. Stanislas Guerini</option>
							
												
					
												
							<option value="s307">Mme Marie Guévenoux</option>
							
												
					
												
							<option value="s40">Mme Claire Guion-Firmin</option>
							
												
					
												
							<option value="s506">M. David Habib</option>
							
												
					
												
							<option value="s144">M. Meyer Habib</option>
							
												
					
												
							<option value="s349">Mme Nadia Hai</option>
							
												
					
												
							<option value="s326">Mme Véronique Hammerer</option>
							
												
					
												
							<option value="s182">M. Brahim Hammouche</option>
							
												
					
												
							<option value="s566">M. Yannick Haury</option>
							
												
					
												
							<option value="s239">Mme Christine Hennion</option>
							
												
					
												
							<option value="s466">M. Pierre Henriet</option>
							
												
					
												
							<option value="s11">M. Michel Herbillon</option>
							
												
					
												
							<option value="s203">Mme Danièle Hérin</option>
							
												
					
												
							<option value="s143">M. Antoine Herth</option>
							
												
					
												
							<option value="s79">M. Patrick Hetzel</option>
							
												
					
												
							<option value="s298">M. Alexandre Holroyd</option>
							
												
					
												
							<option value="s406">M. Dimitri Houbron</option>
							
												
					
												
							<option value="s537">M. Sacha Houlié</option>
							
												
					
												
							<option value="s395">M. Philippe Huppé</option>
							
												
					
												
							<option value="s497">M. Christian Hutin</option>
							
												
					
												
							<option value="s43">M. Sébastien Huyghe</option>
							
												
					
												
							<option value="s280">Mme Monique Iborra</option>
							
												
					
												
							<option value="s184">M. Cyrille Isaac-Sibille</option>
							
												
					
												
							<option value="s94">M. Christian Jacob</option>
							
												
					
												
							<option value="s404">M. Jean-Michel Jacques</option>
							
												
					
												
							<option value="s185">Mme Élodie Jacquier-Laforge</option>
							
												
					
												
							<option value="s277">Mme Caroline Janvier</option>
							
												
					
												
							<option value="s132">M. Yves Jégo</option>
							
												
					
												
							<option value="s320">M. Christophe Jerretie</option>
							
												
					
												
							<option value="s606">M. François Jolivet</option>
							
												
					
												
							<option value="s179">M. Bruno Joncour</option>
							
												
					
												
							<option value="s324">Mme Sandrine Josso</option>
							
												
					
												
							<option value="s508">M. Régis Juanico</option>
							
												
					
												
							<option value="s308">M. Hubert Julien-Laferriere</option>
							
												
					
												
							<option value="s583">M. Sébastien Jumel</option>
							
												
					
												
							<option value="s98">M. Mansour Kamardine</option>
							
												
					
												
							<option value="s335">Mme Catherine Kamowski</option>
							
												
					
												
							<option value="s502">Mme Marietta Karamanli</option>
							
												
					
												
							<option value="s458">M. Guillaume Kasbarian</option>
							
												
					
												
							<option value="s472">Mme Stéphanie Kerbarh</option>
							
												
					
												
							<option value="s368">M. Yannick Kerlogot</option>
							
												
					
												
							<option value="s388">M. Loïc Kervran</option>
							
												
					
												
							<option value="s294">Mme Fadila Khattabi</option>
							
												
					
												
							<option value="s573">Mme Anissa Khedher</option>
							
												
					
												
							<option value="s245">M. Rodrigue Kokouendo</option>
							
												
					
												
							<option value="s542">M. Jacques Krabal</option>
							
												
					
												
							<option value="s633">Mme Sonia Krimi</option>
							
												
					
												
							<option value="s643">Mme Aina Kuric</option>
							
												
					
												
							<option value="s138">Mme Brigitte Kuster</option>
							
												
					
												
							<option value="s557">M. Mustapha Laabid</option>
							
												
					
												
							<option value="s342">M. Daniel Labaronne</option>
							
												
					
												
							<option value="s626">M. Bastien Lachaud</option>
							
												
					
												
							<option value="s15">Mme Valérie Lacroute</option>
							
												
					
												
							<option value="s135">M. Jean-Christophe Lagarde</option>
							
												
					
												
							<option value="s186">M. Jean-Luc Lagleize</option>
							
												
					
												
							<option value="s249">M. Fabien Lainé</option>
							
												
					
												
							<option value="s555">Mme Amal-Amélia Lakrafi</option>
							
												
					
												
							<option value="s578">M. Jérôme Lambert</option>
							
												
					
												
							<option value="s359">M. François-Michel Lambert</option>
							
												
					
												
							<option value="s282">Mme Anne-Christine Lang</option>
							
												
					
												
							<option value="s250">M. Mohamed Laqhila</option>
							
												
					
												
							<option value="s133">Mme Laure de La Raudière</option>
							
												
					
												
							<option value="s480">Mme Frédérique Lardet</option>
							
												
					
												
							<option value="s630">M. Michel Larive</option>
							
												
					
												
							<option value="s45">M. Guillaume Larrivé</option>
							
												
					
												
							<option value="s568">M. Jean-Charles Larsonneur</option>
							
												
					
												
							<option value="s225">M. Jean Lassalle</option>
							
												
					
												
							<option value="s251">Mme Florence Lasserre-David</option>
							
												
					
												
							<option value="s253">M. Philippe Latombe</option>
							
												
					
												
							<option value="s400">M. Michel Lauzzana</option>
							
												
					
												
							<option value="s473">Mme Célia de Lavergne</option>
							
												
					
												
							<option value="s418">Mme Fiona Lazaar</option>
							
												
					
												
							<option value="s338">Mme Marie Lebec</option>
							
												
					
												
							<option value="s207">M. Gaël Le Bohec</option>
							
												
					
												
							<option value="s532">M. Jean-Claude Leclabart</option>
							
												
					
												
							<option value="s1">M. Sébastien Leclerc</option>
							
												
					
												
							<option value="s393">Mme Charlotte Lecocq</option>
							
												
					
												
							<option value="s584">M. Jean-Paul Lecoq</option>
							
												
					
												
							<option value="s129">M. Vincent Ledoux</option>
							
												
					
												
							<option value="s286">Mme Sandrine Le Feur</option>
							
												
					
												
							<option value="s580">M. Stéphane Le Foll</option>
							
												
					
												
							<option value="s96">M. Marc Le Fur</option>
							
												
					
												
							<option value="s333">M. Didier Le Gac</option>
							
												
					
												
							<option value="s436">M. Gilles Le Gendre</option>
							
												
					
												
							<option value="s102">Mme Constance Le Grip</option>
							
												
					
												
							<option value="s360">Mme Martine Leguille-Balloy</option>
							
												
					
												
							<option value="s206">M. Christophe Lejeune</option>
							
												
					
												
							<option value="s318">Mme Annaïg Le Meur</option>
							
												
					
												
							<option value="s314">Mme Marion Lenne</option>
							
												
					
												
							<option value="s220">Mme Nicole Le Peih</option>
							
												
					
												
							<option value="s60">Mme Marine Le Pen</option>
							
												
					
												
							<option value="s111">M. Maurice Leroy</option>
							
												
					
												
							<option value="s634">M. Roland Lescure</option>
							
												
					
												
							<option value="s501">M. Serge Letchimy</option>
							
												
					
												
							<option value="s468">M. Fabrice Le Vigoureux</option>
							
												
					
												
							<option value="s87">Mme Geneviève Levy</option>
							
												
					
												
							<option value="s382">Mme Monique Limon</option>
							
												
					
												
							<option value="s325">M. Richard Lioger</option>
							
												
					
												
							<option value="s424">Mme Brigitte Liso</option>
							
												
					
												
							<option value="s67">Mme Marie-France Lorho</option>
							
												
					
												
							<option value="s110">M. David Lorion</option>
							
												
					
												
							<option value="s456">Mme Alexandra Louis</option>
							
												
					
												
							<option value="s97">Mme Véronique Louwagie</option>
							
												
					
												
							<option value="s254">Mme Aude Luquet</option>
							
												
					
												
							<option value="s10">M. Gilles Lurton</option>
							
												
					
												
							<option value="s327">Mme Marie-Ange Magne</option>
							
												
					
												
							<option value="s156">Mme Lise Magnier</option>
							
												
					
												
							<option value="s330">M. Sylvain Maillard</option>
							
												
					
												
							<option value="s569">Mme Laurence Maillart-Méhaignerie</option>
							
												
					
												
							<option value="s297">M. Jacques Maire</option>
							
												
					
												
							<option value="s581">Mme Josette Manin</option>
							
												
					
												
							<option value="s49">M. Emmanuel Maquet</option>
							
												
					
												
							<option value="s442">Mme Jacqueline Maquet</option>
							
												
					
												
							<option value="s483">M. Jacques Marilossian</option>
							
												
					
												
							<option value="s33">M. Olivier Marleix</option>
							
												
					
												
							<option value="s7">M. Franck Marlin</option>
							
												
					
												
							<option value="s372">Mme Sandra Marsaud</option>
							
												
					
												
							<option value="s366">M. Didier Martin</option>
							
												
					
												
							<option value="s377">M. Denis Masséglia</option>
							
												
					
												
							<option value="s152">M. Jean-Louis Masson</option>
							
												
					
												
							<option value="s188">M. Max Mathiasin</option>
							
												
					
												
							<option value="s386">M. Fabien Matras</option>
							
												
					
												
							<option value="s255">M. Jean-Paul Mattei</option>
							
												
					
												
							<option value="s438">Mme Sereine Mauborgne</option>
							
												
					
												
							<option value="s407">M. Stéphane Mazars</option>
							
												
					
												
							<option value="s426">M. Jean François Mbaye</option>
							
												
					
												
							<option value="s231">Mme Graziella Melchior</option>
							
												
					
												
							<option value="s601">M. Jean-Luc Mélenchon</option>
							
												
					
												
							<option value="s68">Mme Emmanuelle Ménard</option>
							
												
					
												
							<option value="s232">M. Ludovic Mendes</option>
							
												
					
												
							<option value="s118">M. Gérard Menuel</option>
							
												
					
												
							<option value="s353">M. Thomas Mesnier</option>
							
												
					
												
							<option value="s256">Mme Sophie Mette</option>
							
												
					
												
							<option value="s5">Mme Frédérique Meunier</option>
							
												
					
												
							<option value="s279">Mme Marjolaine Meynier-Millefert</option>
							
												
					
												
							<option value="s244">Mme Monica Michel</option>
							
												
					
												
							<option value="s259">M. Philippe Michel-Kleisbauer</option>
							
												
					
												
							<option value="s445">M. Thierry Michels</option>
							
												
					
												
							<option value="s248">M. Patrick Mignola</option>
							
												
					
												
							<option value="s178">M. Bruno Millienne</option>
							
												
					
												
							<option value="s17">M. Maxime Minot</option>
							
												
					
												
							<option value="s492">Mme Patricia Mirallès</option>
							
												
					
												
							<option value="s430">M. Jean-Michel Mis</option>
							
												
					
												
							<option value="s448">M. Paul Molac</option>
							
												
					
												
							<option value="s427">Mme Amélie de Montchalin</option>
							
												
					
												
							<option value="s278">Mme Sandrine Mörch</option>
							
												
					
												
							<option value="s337">M. Jean-Baptiste Moreau</option>
							
												
					
												
							<option value="s105">M. Pierre Morel-À-L'Huissier</option>
							
												
					
												
							<option value="s571">M. Adrien Morenas</option>
							
												
					
												
							<option value="s385">Mme Cendra Motin</option>
							
												
					
												
							<option value="s329">Mme Naïma Moutchou</option>
							
												
					
												
							<option value="s195">Mme Cécile Muschotti</option>
							
												
					
												
							<option value="s343">M. Sébastien Nadot</option>
							
												
					
												
							<option value="s155">M. Christophe Naegelen</option>
							
												
					
												
							<option value="s595">M. Jean-Philippe Nilor</option>
							
												
					
												
							<option value="s548">M. Mickaël Nogal</option>
							
												
					
												
							<option value="s30">M. Jérôme Nury</option>
							
												
					
												
							<option value="s240">Mme Delphine O</option>
							
												
					
												
							<option value="s611">Mme Danièle Obono</option>
							
												
					
												
							<option value="s304">Mme Claire O'Petit</option>
							
												
					
												
							<option value="s614">Mme Valérie Oppelt</option>
							
												
					
												
							<option value="s428">M. Matthieu Orphelin</option>
							
												
					
												
							<option value="s570">Mme Catherine Osson</option>
							
												
					
												
							<option value="s187">M. Jimmy Pahun</option>
							
												
					
												
							<option value="s56">M. Ludovic Pajot</option>
							
												
					
												
							<option value="s541">M. Xavier Paluszkiewicz</option>
							
												
					
												
							<option value="s103">M. Bertrand Pancher</option>
							
												
					
												
							<option value="s281">Mme Sophie Panonacle</option>
							
												
					
												
							<option value="s604">Mme Mathilde Panot</option>
							
												
					
												
							<option value="s32">M. Jean-François Parigi</option>
							
												
					
												
							<option value="s403">M. Didier Paris</option>
							
												
					
												
							<option value="s204">Mme Zivka Park</option>
							
												
					
												
							<option value="s149">M. Éric Pauget</option>
							
												
					
												
							<option value="s511">Mme George Pau-Langevin</option>
							
												
					
												
							<option value="s376">M. Hervé Pellois</option>
							
												
					
												
							<option value="s139">M. Guillaume Peltier</option>
							
												
					
												
							<option value="s429">M. Alain Perea</option>
							
												
					
												
							<option value="s547">M. Patrice Perrot</option>
							
												
					
												
							<option value="s108">M. Bernard Perrut</option>
							
												
					
												
							<option value="s558">M. Pierre Person</option>
							
												
					
												
							<option value="s440">Mme Anne-Laurence Petel</option>
							
												
					
												
							<option value="s260">M. Frédéric Petit</option>
							
												
					
												
							<option value="s262">Mme Maud Petit</option>
							
												
					
												
							<option value="s214">Mme Valérie Petit</option>
							
												
					
												
							<option value="s589">M. Stéphane Peu</option>
							
												
					
												
							<option value="s201">Mme Bénédicte Peyrol</option>
							
												
					
												
							<option value="s401">Mme Michèle Peyron</option>
							
												
					
												
							<option value="s303">M. Damien Pichereau</option>
							
												
					
												
							<option value="s371">M. Laurent Pietraszewski</option>
							
												
					
												
							<option value="s192">Mme Sylvia Pinel</option>
							
												
					
												
							<option value="s507">Mme Christine Pires Beaune</option>
							
												
					
												
							<option value="s391">Mme Béatrice Piron</option>
							
												
					
												
							<option value="s524">Mme Claire Pitollat</option>
							
												
					
												
							<option value="s22">Mme Bérengère Poletti</option>
							
												
					
												
							<option value="s348">Mme Barbara Pompili</option>
							
												
					
												
							<option value="s234">M. Jean-Pierre Pont</option>
							
												
					
												
							<option value="s645">M. Jean-François Portarrieu</option>
							
												
					
												
							<option value="s514">M. Dominique Potier</option>
							
												
					
												
							<option value="s198">M. Benoit Potterie</option>
							
												
					
												
							<option value="s263">Mme Josy Poueyto</option>
							
												
					
												
							<option value="s215">M. Éric Poulliat</option>
							
												
					
												
							<option value="s228">Mme Natalia Pouzyreff</option>
							
												
					
												
							<option value="s38">M. Aurélien Pradié</option>
							
												
					
												
							<option value="s621">M. Loïc Prud'homme</option>
							
												
					
												
							<option value="s516">M. Joaquim Pueyo</option>
							
												
					
												
							<option value="s510">M. François Pupponi</option>
							
												
					
												
							<option value="s612">M. Adrien Quatennens</option>
							
												
					
												
							<option value="s28">M. Didier Quentin</option>
							
												
					
												
							<option value="s383">M. Bruno Questel</option>
							
												
					
												
							<option value="s505">Mme Valérie Rabault</option>
							
												
					
												
							<option value="s336">Mme Cathy Racon-Bouzon</option>
							
												
					
												
							<option value="s48">M. Alain Ramadier</option>
							
												
					
												
							<option value="s44">Mme Nadia Ramassamy</option>
							
												
					
												
							<option value="s264">M. Richard Ramos</option>
							
												
					
												
							<option value="s269">M. Pierre-Alain Raphan</option>
							
												
					
												
							<option value="s619">M. Jean-Hugues Ratenon</option>
							
												
					
												
							<option value="s197">Mme Isabelle Rauch</option>
							
												
					
												
							<option value="s332">M. Rémy Rebeyrotte</option>
							
												
					
												
							<option value="s47">M. Robin Reda</option>
							
												
					
												
							<option value="s77">M. Frédéric Reiss</option>
							
												
					
												
							<option value="s75">M. Jean-Luc Reitzer</option>
							
												
					
												
							<option value="s196">M. Hugues Renson</option>
							
												
					
												
							<option value="s620">Mme Muriel Ressiguier</option>
							
												
					
												
							<option value="s101">M. Bernard Reynès</option>
							
												
					
												
							<option value="s124">M. Franck Riester</option>
							
												
					
												
							<option value="s344">Mme Cécile Rilhac</option>
							
												
					
												
							<option value="s431">Mme Véronique Riotton</option>
							
												
					
												
							<option value="s607">Mme Stéphanie Rist</option>
							
												
					
												
							<option value="s475">Mme Marie-Pierre Rixain</option>
							
												
					
												
							<option value="s533">Mme Mireille Robert</option>
							
												
					
												
							<option value="s258">M. Thierry Robert</option>
							
												
					
												
							<option value="s128">M. Vincent Rolland</option>
							
												
					
												
							<option value="s642">Mme Laëtitia Romeiro Dias</option>
							
												
					
												
							<option value="s394">M. Xavier Roseren</option>
							
												
					
												
							<option value="s441">Mme Laurianne Rossi</option>
							
												
					
												
							<option value="s354">M. Gwendal Rouillard</option>
							
												
					
												
							<option value="s309">M. Cédric Roussel</option>
							
												
					
												
							<option value="s590">M. Fabien Roussel</option>
							
												
					
												
							<option value="s628">Mme Sabine Rubin</option>
							
												
					
												
							<option value="s546">M. Thomas Rudigoz</option>
							
												
					
												
							<option value="s627">M. François Ruffin</option>
							
												
					
												
							<option value="s494">M. François de Rugy</option>
							
												
					
												
							<option value="s423">M. Pacôme Rupin</option>
							
												
					
												
							<option value="s21">M. Martial Saddier</option>
							
												
					
												
							<option value="s130">Mme Maina Sage</option>
							
												
					
												
							<option value="s345">M. Laurent Saint-Martin</option>
							
												
					
												
							<option value="s364">Mme Laetitia Saint-Paul</option>
							
												
					
												
							<option value="s145">Mme Nicole Sanquer</option>
							
												
					
												
							<option value="s290">Mme Nathalie Sarles</option>
							
												
					
												
							<option value="s257">Mme Marielle de Sarnez</option>
							
												
					
												
							<option value="s576">M. Hervé Saulignac</option>
							
												
					
												
							<option value="s639">M. Jacques Savatier</option>
							
												
					
												
							<option value="s70">M. Antoine Savignat</option>
							
												
					
												
							<option value="s72">M. Raphaël Schellenberger</option>
							
												
					
												
							<option value="s313">M. Jean-Bernard Sempastous</option>
							
												
					
												
							<option value="s86">M. Jean-Marie Sermier</option>
							
												
					
												
							<option value="s311">M. Olivier Serva</option>
							
												
					
												
							<option value="s597">M. Gabriel Serville</option>
							
												
					
												
							<option value="s416">M. Benoit Simian</option>
							
												
					
												
							<option value="s381">M. Thierry Solère</option>
							
												
					
												
							<option value="s623">M. Denis Sommer</option>
							
												
					
												
							<option value="s564">M. Joachim Son-Forget</option>
							
												
					
												
							<option value="s559">M. Bertrand Sorre</option>
							
												
					
												
							<option value="s76">M. Éric Straumann</option>
							
												
					
												
							<option value="s478">M. Bruno Studer</option>
							
												
					
												
							<option value="s291">Mme Sira Sylla</option>
							
												
					
												
							<option value="s85">Mme Michèle Tabarot</option>
							
												
					
												
							<option value="s412">M. Aurélien Taché</option>
							
												
					
												
							<option value="s224">Mme Marie Tamarelle-Verhaeghe</option>
							
												
					
												
							<option value="s465">M. Buon Tan</option>
							
												
					
												
							<option value="s398">Mme Liliana Tanguy</option>
							
												
					
												
							<option value="s209">M. Adrien Taquet</option>
							
												
					
												
							<option value="s36">M. Jean-Charles Taugourdeau</option>
							
												
					
												
							<option value="s609">Mme Bénédicte Taurine</option>
							
												
					
												
							<option value="s84">M. Guy Teissier</option>
							
												
					
												
							<option value="s457">M. Jean Terlier</option>
							
												
					
												
							<option value="s380">M. Stéphane Testé</option>
							
												
					
												
							<option value="s432">M. Vincent Thiébaut</option>
							
												
					
												
							<option value="s221">Mme Agnès Thill</option>
							
												
					
												
							<option value="s222">Mme Sabine Thillaye</option>
							
												
					
												
							<option value="s534">Mme Valérie Thomas</option>
							
												
					
												
							<option value="s452">Mme Alice Thourot</option>
							
												
					
												
							<option value="s455">Mme Huguette Tiegna</option>
							
												
					
												
							<option value="s285">M. Jean-Louis Touraine</option>
							
												
					
												
							<option value="s193">M. Alain Tourret</option>
							
												
					
												
							<option value="s331">Mme Élisabeth Toutut-Picard</option>
							
												
					
												
							<option value="s151">Mme Laurence Trastour-Isnart</option>
							
												
					
												
							<option value="s446">Mme Nicole Trisse</option>
							
												
					
												
							<option value="s544">M. Stéphane Trompille</option>
							
												
					
												
							<option value="s346">Mme Frédérique Tuffnell</option>
							
												
					
												
							<option value="s265">M. Nicolas Turquois</option>
							
												
					
												
							<option value="s577">Mme Cécile Untermaier</option>
							
												
					
												
							<option value="s496">Mme Hélène Vainqueur-Christophe</option>
							
												
					
												
							<option value="s24">Mme Isabelle Valentin</option>
							
												
					
												
							<option value="s451">Mme Alexandra Valetta Ardisson</option>
							
												
					
												
							<option value="s504">M. Boris Vallaud</option>
							
												
					
												
							<option value="s339">M. Manuel Valls</option>
							
												
					
												
							<option value="s292">Mme Laurence Vanceunebrock-Mialon</option>
							
												
					
												
							<option value="s31">M. Pierre Vatin</option>
							
												
					
												
							<option value="s266">Mme Michèle de Vaucouleurs</option>
							
												
					
												
							<option value="s540">M. Olivier Véran</option>
							
												
					
												
							<option value="s123">M. Francis Vercamer</option>
							
												
					
												
							<option value="s126">M. Patrice Verchère</option>
							
												
					
												
							<option value="s525">Mme Marie-Christine Verdier-Jouclas</option>
							
												
					
												
							<option value="s26">M. Charles de la Verpillière</option>
							
												
					
												
							<option value="s35">M. Arnaud Viala</option>
							
												
					
												
							<option value="s148">M. Michel Vialay</option>
							
												
					
												
							<option value="s261">Mme Laurence Vichnievsky</option>
							
												
					
												
							<option value="s512">Mme Michèle Victory</option>
							
												
					
												
							<option value="s433">Mme Annie Vidal</option>
							
												
					
												
							<option value="s54">M. Jean-Pierre Vigier</option>
							
												
					
												
							<option value="s114">M. Philippe Vigier</option>
							
												
					
												
							<option value="s389">M. Patrick Vignal</option>
							
												
					
												
							<option value="s375">Mme Corinne Vignon</option>
							
												
					
												
							<option value="s356">M. Cédric Villani</option>
							
												
					
												
							<option value="s153">M. André Villiers</option>
							
												
					
												
							<option value="s23">M. Stéphane Viry</option>
							
												
					
												
							<option value="s373">M. Guillaume Vuilletet</option>
							
												
					
												
							<option value="s106">M. Jean-Luc Warsmann</option>
							
												
					
												
							<option value="s267">M. Sylvain Waserman</option>
							
												
					
												
							<option value="s89">M. Éric Woerth</option>
							
												
					
												
							<option value="s488">Mme Martine Wonner</option>
							
												
					
												
							<option value="s585">M. Hubert Wulfranc</option>
							
												
					
												
							<option value="s296">Mme Hélène Zannier</option>
							
												
					
												
							<option value="s305">M. Jean-Marc Zulesi</option>
							
												
					
												
							<option value="s122">M. Michel Zumkeller</option>
							
												
										
				</select>
				
			</div>
		
			<div id="hemicycle" style="width:850px;margin:0 auto;">
			
				<div id="attente">
				
					<div class="image-tabmat-ajax clearfix" style="display:block"><i class="fa fa-refresh fa-spin"></i></div>
					
				</div>
				
			</div>
			
			<div id="data">
			
								
						<dl data-legislature="15" data-place="s78" data-civ="M." data-nom="Damien Abad" data-id="605036" data-departement="Ain" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s200" data-civ="Mme" data-nom="Caroline Abadie" data-id="719866" data-departement="Isère" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s600" data-civ="Mme" data-nom="Bérangère Abba" data-id="720242" data-departement="Haute-Marne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s650" data-civ="M." data-nom="Jean-Félix Acquaviva" data-id="719146" data-departement="Haute-Corse" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s319" data-civ="M." data-nom="Damien Adam" data-id="722038" data-departement="Seine-Maritime" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s357" data-civ="M." data-nom="Lénaïck Adam" data-id="721036" data-departement="Guyane" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s471" data-civ="M." data-nom="Saïd Ahamada" data-id="718954" data-departement="Bouches-du-Rhône" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s464" data-civ="M." data-nom="Éric Alauzet" data-id="605963" data-departement="Doubs" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s59" data-civ="M." data-nom="Louis Aliot" data-id="720798" data-departement="Pyrénées-Orientales" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s409" data-civ="Mme" data-nom="Aude Amadou" data-id="720124" data-departement="Loire-Atlantique" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s352" data-civ="M." data-nom="Patrice Anato" data-id="721278" data-departement="Seine-Saint-Denis" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s276" data-civ="M." data-nom="François André" data-id="606675" data-departement="Ille-et-Vilaine" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s227" data-civ="M." data-nom="Pieyre-Alexandre Anglade" data-id="721158" data-departement="Français établis hors de France" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s63" data-civ="Mme" data-nom="Emmanuelle Anthoine" data-id="719318" data-departement="Drôme" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s526" data-civ="M." data-nom="Jean-Philippe Ardouin" data-id="719100" data-departement="Charente-Maritime" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s439" data-civ="M." data-nom="Christophe Arend" data-id="720310" data-departement="Moselle" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s453" data-civ="M." data-nom="Gabriel Attal" data-id="722190" data-departement="Hauts-de-Seine" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s136" data-civ="M." data-nom="Julien Aubert" data-id="609726" data-departement="Vaucluse" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s134" data-civ="Mme" data-nom="Sophie Auconie" data-id="719806" data-departement="Indre-et-Loire" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s618" data-civ="Mme" data-nom="Clémentine Autain" data-id="588884" data-departement="Seine-Saint-Denis" data-circo="(11e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s384" data-civ="Mme" data-nom="Laetitia Avia" data-id="721624" data-departement="Paris" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s0" data-civ="M." data-nom="Joël Aviragnet" data-id="642764" data-departement="Haute-Garonne" data-circo="(8e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s596" data-civ="M." data-nom="Bruno Nestor Azerot" data-id="610634" data-departement="Martinique" data-circo="(2e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s419" data-civ="M." data-nom="Florian Bachelier" data-id="719770" data-departement="Ille-et-Vilaine" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s486" data-civ="Mme" data-nom="Delphine Bagarry" data-id="718744" data-departement="Alpes-de-Haute-Provence" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s321" data-civ="M." data-nom="Didier Baichère" data-id="721776" data-departement="Yvelines" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s162" data-civ="M." data-nom="Erwan Balanant" data-id="719558" data-departement="Finistère" data-circo="(8e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s163" data-civ="Mme" data-nom="Géraldine Bannier" data-id="720256" data-departement="Mayenne" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s230" data-civ="M." data-nom="Frédéric Barbier" data-id="642724" data-departement="Doubs" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s503" data-civ="Mme" data-nom="Ericka Bareigts" data-id="610681" data-departement="Réunion" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s167" data-civ="M." data-nom="Jean-Noël Barrot" data-id="721836" data-departement="Yvelines" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s109" data-civ="Mme" data-nom="Nathalie Bassire" data-id="721046" data-departement="Réunion" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s500" data-civ="Mme" data-nom="Delphine Batho" data-id="335999" data-departement="Deux-Sèvres" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s513" data-civ="Mme" data-nom="Marie-Noëlle Battistel" data-id="342415" data-departement="Isère" data-circo="(4e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s625" data-civ="M." data-nom="Xavier Batut" data-id="721522" data-departement="Seine-Maritime" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s12" data-civ="M." data-nom="Thibault Bazin" data-id="642847" data-departement="Meurthe-et-Moselle" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s119" data-civ="Mme" data-nom="Valérie Bazin-Malgras" data-id="718884" data-departement="Aube" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s567" data-civ="Mme" data-nom="Sophie Beaudouin-Hubiere" data-id="722170" data-departement="Haute-Vienne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s14" data-civ="Mme" data-nom="Valérie Beauvais" data-id="720210" data-departement="Marne" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s154" data-civ="M." data-nom="Olivier Becht" data-id="642935" data-departement="Haut-Rhin" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s574" data-civ="M." data-nom="Belkhir Belhaddad" data-id="720362" data-departement="Moselle" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s594" data-civ="Mme" data-nom="Huguette Bello" data-id="441" data-departement="Réunion" data-circo="(2e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s189" data-civ="Mme" data-nom="Justine Benin" data-id="720968" data-departement="Guadeloupe" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s113" data-civ="M." data-nom="Thierry Benoit" data-id="332228" data-departement="Ille-et-Vilaine" data-circo="(6e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s462" data-civ="Mme" data-nom="Aurore Bergé" data-id="722046" data-departement="Yvelines" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s629" data-civ="M." data-nom="Ugo Bernalicis" data-id="720430" data-departement="Nord" data-circo="(2e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s164" data-civ="M." data-nom="Philippe Berta" data-id="719488" data-departement="Gard" data-circo="(6e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s212" data-civ="M." data-nom="Hervé Berville" data-id="719218" data-departement="Côtes-d'Armor" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s482" data-civ="M." data-nom="Grégory Besson-Moreau" data-id="718876" data-departement="Aube" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s268" data-civ="Mme" data-nom="Barbara Bessot Ballot" data-id="722312" data-departement="Haute-Saône" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s515" data-civ="Mme" data-nom="Gisèle Biémouret" data-id="508" data-departement="Gers" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s66" data-civ="M." data-nom="Bruno Bilde" data-id="720822" data-departement="Pas-de-Calais" data-circo="(12e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s317" data-civ="Mme" data-nom="Anne Blanc" data-id="718990" data-departement="Aveyron" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s271" data-civ="M." data-nom="Christophe Blanchet" data-id="719024" data-departement="Calvados" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s421" data-civ="M." data-nom="Yves Blein" data-id="608641" data-departement="Rhône" data-circo="(14e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s414" data-civ="M." data-nom="Pascal Bois" data-id="720576" data-departement="Oise" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s166" data-civ="M." data-nom="Philippe Bolo" data-id="720162" data-departement="Maine-et-Loire" data-circo="(7e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s272" data-civ="M." data-nom="Bruno Bonnell" data-id="721344" data-departement="Rhône" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s9" data-civ="Mme" data-nom="Émilie Bonnivard" data-id="721410" data-departement="Savoie" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s287" data-civ="Mme" data-nom="Aude Bono-Vandorme" data-id="718756" data-departement="Aisne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s2" data-civ="M." data-nom="Jean-Yves Bony" data-id="266793" data-departement="Cantal" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s387" data-civ="M." data-nom="Julien Borowczyk" data-id="719980" data-departement="Loire" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s554" data-civ="M." data-nom="Éric Bothorel" data-id="642695" data-departement="Côtes-d'Armor" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s39" data-civ="M." data-nom="Ian Boucard" data-id="721816" data-departement="Territoire de Belfort" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s52" data-civ="M." data-nom="Jean-Claude Bouchet" data-id="336316" data-departement="Vaucluse" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s233" data-civ="M." data-nom="Florent Boudié" data-id="606507" data-departement="Gironde" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s520" data-civ="M." data-nom="Christophe Bouillon" data-id="267233" data-departement="Seine-Maritime" data-circo="(5e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s334" data-civ="Mme" data-nom="Brigitte Bourguignon" data-id="608083" data-departement="Pas-de-Calais" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s165" data-civ="M." data-nom="Jean-Louis Bourlanges" data-id="721608" data-departement="Hauts-de-Seine" data-circo="(12e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s146" data-civ="M." data-nom="Pierre-Yves Bournazel" data-id="722030" data-departement="Paris" data-circo="(18e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s210" data-civ="M." data-nom="Bertrand Bouyx" data-id="719032" data-departement="Calvados" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s315" data-civ="Mme" data-nom="Pascale Boyer" data-id="718710" data-departement="Hautes-Alpes" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s82" data-civ="Mme" data-nom="Valérie Boyer" data-id="330684" data-departement="Bouches-du-Rhône" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s481" data-civ="Mme" data-nom="Yaël Braun-Pivet" data-id="721908" data-departement="Yvelines" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s150" data-civ="Mme" data-nom="Marine Brenier" data-id="713448" data-departement="Alpes-Maritimes" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s41" data-civ="M." data-nom="Xavier Breton" data-id="330008" data-departement="Ain" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s140" data-civ="M." data-nom="Guy Bricout" data-id="267766" data-departement="Nord" data-circo="(18e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s498" data-civ="M." data-nom="Jean-Louis Bricout" data-id="605069" data-departement="Aisne" data-circo="(3e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s454" data-civ="M." data-nom="Jean-Jacques Bridey" data-id="672" data-departement="Val-de-Marne" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s323" data-civ="Mme" data-nom="Blandine Brocard" data-id="721336" data-departement="Rhône" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s83" data-civ="M." data-nom="Bernard Brochand" data-id="223837" data-departement="Alpes-Maritimes" data-circo="(8e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s582" data-civ="M." data-nom="Moetai Brotherson" data-id="721118" data-departement="Polynésie Française" data-circo="(3e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s168" data-civ="M." data-nom="Vincent Bru" data-id="720772" data-departement="Pyrénées-Atlantiques" data-circo="(6e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s434" data-civ="Mme" data-nom="Anne Brugnera" data-id="721328" data-departement="Rhône" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s549" data-civ="Mme" data-nom="Danielle Brulebois" data-id="719890" data-departement="Jura" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s137" data-civ="M." data-nom="Fabrice Brun" data-id="718838" data-departement="Ardèche" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s586" data-civ="M." data-nom="Alain Bruneel" data-id="720546" data-departement="Nord" data-circo="(16e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s550" data-civ="Mme" data-nom="Anne-France Brunet" data-id="720116" data-departement="Loire-Atlantique" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s632" data-civ="M." data-nom="Stéphane Buchou" data-id="722000" data-departement="Vendée" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s593" data-civ="Mme" data-nom="Marie-George Buffet" data-id="689" data-departement="Seine-Saint-Denis" data-circo="(4e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s288" data-civ="Mme" data-nom="Carole Bureau-Bonnard" data-id="720622" data-departement="Oise" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s637" data-civ="M." data-nom="Pierre Cabaré" data-id="719496" data-departement="Haute-Garonne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s270" data-civ="Mme" data-nom="Céline Calvez" data-id="721750" data-departement="Hauts-de-Seine" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s638" data-civ="Mme" data-nom="Émilie Cariou" data-id="720298" data-departement="Meuse" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s92" data-civ="M." data-nom="Gilles Carrez" data-id="746" data-departement="Val-de-Marne" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s517" data-civ="M." data-nom="Luc Carvounas" data-id="429893" data-departement="Val-de-Marne" data-circo="(9e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s649" data-civ="M." data-nom="Michel Castellani" data-id="719138" data-departement="Haute-Corse" data-circo="(1re circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s211" data-civ="Mme" data-nom="Anne-Laure Cattelot" data-id="720520" data-departement="Nord" data-circo="(12e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s73" data-civ="M." data-nom="Jacques Cattin" data-id="767" data-departement="Haut-Rhin" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s362" data-civ="M." data-nom="Lionel Causse" data-id="719922" data-departement="Landes" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s624" data-civ="Mme" data-nom="Danièle Cazarian" data-id="721352" data-departement="Rhône" data-circo="(13e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s274" data-civ="M." data-nom="Jean-René Cazeneuve" data-id="719472" data-departement="Gers" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s543" data-civ="M." data-nom="Sébastien Cazenove" data-id="720814" data-departement="Pyrénées-Orientales" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s615" data-civ="M." data-nom="Anthony Cellier" data-id="719440" data-departement="Gard" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s536" data-civ="M." data-nom="Jean-François Cesarini" data-id="721860" data-departement="Vaucluse" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s485" data-civ="Mme" data-nom="Émilie Chalas" data-id="719748" data-departement="Isère" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s444" data-civ="M." data-nom="Philippe Chalumeau" data-id="719790" data-departement="Indre-et-Loire" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s425" data-civ="Mme" data-nom="Annie Chapelier" data-id="719448" data-departement="Gard" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s561" data-civ="Mme" data-nom="Sylvie Charrière" data-id="721218" data-departement="Seine-Saint-Denis" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s528" data-civ="Mme" data-nom="Fannette Charvier" data-id="719170" data-departement="Doubs" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s587" data-civ="M." data-nom="André Chassaigne" data-id="267306" data-departement="Puy-de-Dôme" data-circo="(5e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s405" data-civ="M." data-nom="Philippe Chassaing" data-id="719250" data-departement="Dordogne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s57" data-civ="M." data-nom="Sébastien Chenu" data-id="720468" data-departement="Nord" data-circo="(19e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s116" data-civ="M." data-nom="Gérard Cherpion" data-id="856" data-departement="Vosges" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s616" data-civ="M." data-nom="Guillaume Chiche" data-id="722126" data-departement="Deux-Sèvres" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s141" data-civ="M." data-nom="Paul Christophe" data-id="642868" data-departement="Nord" data-circo="(14e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s64" data-civ="M." data-nom="Dino Cinieri" data-id="267429" data-departement="Loire" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s91" data-civ="M." data-nom="Éric Ciotti" data-id="330240" data-departement="Alpes-Maritimes" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s599" data-civ="M." data-nom="Stéphane Claireaux" data-id="702054" data-departement="Saint-Pierre-et-Miquelon" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s358" data-civ="Mme" data-nom="Mireille Clapot" data-id="719294" data-departement="Drôme" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s417" data-civ="M." data-nom="Jean-Michel Clément" data-id="336439" data-departement="Vienne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s301" data-civ="Mme" data-nom="Christine Cloarec" data-id="719756" data-departement="Ille-et-Vilaine" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s199" data-civ="M." data-nom="Jean-Charles Colas-Roy" data-id="719740" data-departement="Isère" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s538" data-civ="Mme" data-nom="Fabienne Colboc" data-id="719814" data-departement="Indre-et-Loire" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s58" data-civ="M." data-nom="Gilbert Collard" data-id="606212" data-departement="Gard" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s648" data-civ="M." data-nom="Paul-André Colombani" data-id="719286" data-departement="Corse-du-Sud" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s610" data-civ="M." data-nom="Éric Coquerel" data-id="721202" data-departement="Seine-Saint-Denis" data-circo="(1re circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s603" data-civ="M." data-nom="Alexis Corbière" data-id="721210" data-departement="Seine-Saint-Denis" data-circo="(7e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s8" data-civ="M." data-nom="Pierre Cordier" data-id="718850" data-departement="Ardennes" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s300" data-civ="M." data-nom="François Cormier-Bouligeon" data-id="719118" data-departement="Cher" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s6" data-civ="Mme" data-nom="Josiane Corneloup" data-id="722390" data-departement="Saône-et-Loire" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s99" data-civ="M." data-nom="François Cornut-Gentille" data-id="923" data-departement="Haute-Marne" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s322" data-civ="Mme" data-nom="Bérangère Couillard" data-id="719624" data-departement="Gironde" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s147" data-civ="M." data-nom="Charles de Courson" data-id="942" data-departement="Marne" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s238" data-civ="Mme" data-nom="Yolaine de Courson" data-id="719194" data-departement="Côte-d'Or" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s367" data-civ="Mme" data-nom="Michèle Crouzet" data-id="721808" data-departement="Yonne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s169" data-civ="M." data-nom="Jean-Pierre Cubertafon" data-id="719266" data-departement="Dordogne" data-circo="(3e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s16" data-civ="Mme" data-nom="Marie-Christine Dalloz" data-id="332523" data-departement="Jura" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s523" data-civ="M." data-nom="Olivier Damaisin" data-id="720268" data-departement="Lot-et-Garonne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s295" data-civ="M." data-nom="Yves Daniel" data-id="607155" data-departement="Loire-Atlantique" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s223" data-civ="M." data-nom="Dominique Da Silva" data-id="720932" data-departement="Val-d'Oise" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s100" data-civ="M." data-nom="Olivier Dassault" data-id="998" data-departement="Oise" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s518" data-civ="M." data-nom="Alain David" data-id="1008" data-departement="Gironde" data-circo="(4e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s644" data-civ="Mme" data-nom="Dominique David" data-id="719710" data-departement="Gironde" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s88" data-civ="M." data-nom="Bernard Deflesselles" data-id="1029" data-departement="Bouches-du-Rhône" data-circo="(9e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s350" data-civ="Mme" data-nom="Typhanie Degois" data-id="721398" data-departement="Savoie" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s565" data-civ="M." data-nom="Marc Delatte" data-id="718694" data-departement="Aisne" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s117" data-civ="M." data-nom="Rémi Delatte" data-id="267450" data-departement="Côte-d'Or" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s437" data-civ="M." data-nom="Michel Delpon" data-id="719258" data-departement="Dordogne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s125" data-civ="M." data-nom="Stéphane Demilly" data-id="267241" data-departement="Somme" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s487" data-civ="M." data-nom="Nicolas Démoulin" data-id="719830" data-departement="Hérault" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s170" data-civ="Mme" data-nom="Marguerite Deprez-Audebert" data-id="720598" data-departement="Pas-de-Calais" data-circo="(9e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s157" data-civ="Mme" data-nom="Béatrice Descamps" data-id="720696" data-departement="Nord" data-circo="(21e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s3" data-civ="M." data-nom="Vincent Descoeur" data-id="330909" data-departement="Cantal" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s467" data-civ="M." data-nom="Frédéric Descrozaille" data-id="720862" data-departement="Val-de-Marne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s397" data-civ="Mme" data-nom="Jennifer De Temmerman" data-id="720538" data-departement="Nord" data-circo="(15e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s592" data-civ="M." data-nom="Pierre Dharréville" data-id="718926" data-departement="Bouches-du-Rhône" data-circo="(13e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s25" data-civ="M." data-nom="Éric Diard" data-id="267440" data-departement="Bouches-du-Rhône" data-circo="(12e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s13" data-civ="M." data-nom="Fabien Di Filippo" data-id="720386" data-departement="Moselle" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s553" data-civ="M." data-nom="Christophe Di Pompeo" data-id="720438" data-departement="Nord" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s205" data-civ="M." data-nom="Benjamin Dirx" data-id="722382" data-departement="Saône-et-Loire" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s53" data-civ="M." data-nom="Julien Dive" data-id="712015" data-departement="Aisne" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s539" data-civ="M." data-nom="Jean-Baptiste Djebbari" data-id="722236" data-departement="Haute-Vienne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s341" data-civ="Mme" data-nom="Stéphanie Do" data-id="721718" data-departement="Seine-et-Marne" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s402" data-civ="M." data-nom="Loïc Dombreval" data-id="718894" data-departement="Alpes-Maritimes" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s191" data-civ="Mme" data-nom="Jeanine Dubié" data-id="608292" data-departement="Hautes-Pyrénées" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s484" data-civ="Mme" data-nom="Jacqueline Dubois" data-id="719162" data-departement="Dordogne" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s20" data-civ="Mme" data-nom="Marianne Dubois" data-id="342935" data-departement="Loiret" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s370" data-civ="Mme" data-nom="Christelle Dubos" data-id="719660" data-departement="Gironde" data-circo="(12e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s347" data-civ="Mme" data-nom="Coralie Dubost" data-id="719684" data-departement="Hérault" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s302" data-civ="Mme" data-nom="Nicole Dubré-Chirat" data-id="720154" data-departement="Maine-et-Loire" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s95" data-civ="Mme" data-nom="Virginie Duby-Muller" data-id="608826" data-departement="Haute-Savoie" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s522" data-civ="Mme" data-nom="Audrey Dufeu Schubert" data-id="720046" data-departement="Loire-Atlantique" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s591" data-civ="M." data-nom="Jean-Paul Dufrègne" data-id="718720" data-departement="Allier" data-circo="(1re circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s413" data-civ="Mme" data-nom="Françoise Dumas" data-id="606202" data-departement="Gard" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s411" data-civ="Mme" data-nom="Frédérique Dumas" data-id="721194" data-departement="Hauts-de-Seine" data-circo="(13e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s509" data-civ="Mme" data-nom="Laurence Dumont" data-id="1198" data-departement="Calvados" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s50" data-civ="M." data-nom="Pierre-Henri Dumont" data-id="720684" data-departement="Pas-de-Calais" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s120" data-civ="M." data-nom="Philippe Dunoyer" data-id="721094" data-departement="Nouvelle-Calédonie" data-circo="(1re circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s527" data-civ="Mme" data-nom="Stella Dupont" data-id="643175" data-departement="Maine-et-Loire" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s237" data-civ="M." data-nom="Nicolas Dupont-Aignan" data-id="1206" data-departement="Essonne" data-circo="(8e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s171" data-civ="M." data-nom="Bruno Duvergé" data-id="720652" data-departement="Pas-de-Calais" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s640" data-civ="M." data-nom="M'jid El Guerrab" data-id="720996" data-departement="Français établis hors de France" data-circo="(9e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s172" data-civ="Mme" data-nom="Sarah El Haïry" data-id="720002" data-departement="Loire-Atlantique" data-circo="(5e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s551" data-civ="M." data-nom="Jean-François Eliaou" data-id="719692" data-departement="Hérault" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s173" data-civ="Mme" data-nom="Nathalie Elimas" data-id="720924" data-departement="Val-d'Oise" data-circo="(6e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s361" data-civ="Mme" data-nom="Sophie Errante" data-id="607193" data-departement="Loire-Atlantique" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s174" data-civ="Mme" data-nom="Nadia Essayan" data-id="719044" data-departement="Cher" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s312" data-civ="M." data-nom="Christophe Euzet" data-id="719616" data-departement="Hérault" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s236" data-civ="M." data-nom="José Evrard" data-id="720664" data-departement="Pas-de-Calais" data-circo="(3e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s217" data-civ="Mme" data-nom="Catherine Fabre" data-id="719570" data-departement="Gironde" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s461" data-civ="Mme" data-nom="Élise Fajgeles" data-id="721564" data-departement="Paris" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s190" data-civ="M." data-nom="Olivier Falorni" data-id="605694" data-departement="Charente-Maritime" data-circo="(1re circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s175" data-civ="M." data-nom="Michel Fanget" data-id="1276" data-departement="Puy-de-Dôme" data-circo="(4e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s62" data-civ="M." data-nom="Daniel Fasquelle" data-id="334149" data-departement="Pas-de-Calais" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s588" data-civ="Mme" data-nom="Elsa Faucillon" data-id="721896" data-departement="Hauts-de-Seine" data-circo="(1re circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s499" data-civ="M." data-nom="Olivier Faure" data-id="609332" data-departement="Seine-et-Marne" data-circo="(11e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s552" data-civ="Mme" data-nom="Valéria Faure-Muntian" data-id="719960" data-departement="Loire" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s213" data-civ="M." data-nom="Jean-Michel Fauvergue" data-id="721702" data-departement="Seine-et-Marne" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s112" data-civ="M." data-nom="Yannick Favennec Becot" data-id="267042" data-departement="Mayenne" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s422" data-civ="M." data-nom="Richard Ferrand" data-id="606171" data-departement="Finistère" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s18" data-civ="M." data-nom="Jean-Jacques Ferrara" data-id="643103" data-departement="Corse-du-Sud" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s180" data-civ="M." data-nom="Marc Fesneau" data-id="719938" data-departement="Loir-et-Cher" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s602" data-civ="Mme" data-nom="Caroline Fiat" data-id="720286" data-departement="Meurthe-et-Moselle" data-circo="(6e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s560" data-civ="M." data-nom="Jean-Marie Fiévet" data-id="722134" data-departement="Deux-Sèvres" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s158" data-civ="Mme" data-nom="Agnès Firmin Le Bodo" data-id="267780" data-departement="Seine-Maritime" data-circo="(7e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s177" data-civ="Mme" data-nom="Isabelle Florennes" data-id="721742" data-departement="Hauts-de-Seine" data-circo="(4e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s469" data-civ="M." data-nom="Philippe Folliot" data-id="267673" data-departement="Tarn" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s447" data-civ="Mme" data-nom="Emmanuelle Fontaine-Domeizel" data-id="718706" data-departement="Alpes-de-Haute-Provence" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s463" data-civ="Mme" data-nom="Pascale Fontenel-Personne" data-id="721384" data-departement="Sarthe" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s19" data-civ="M." data-nom="Nicolas Forissier" data-id="1327" data-departement="Indre" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s450" data-civ="Mme" data-nom="Paula Forteza" data-id="721142" data-departement="Français établis hors de France" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s474" data-civ="M." data-nom="Alexandre Freschi" data-id="720030" data-departement="Lot-et-Garonne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s181" data-civ="M." data-nom="Bruno Fuchs" data-id="722284" data-departement="Haut-Rhin" data-circo="(6e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s374" data-civ="M." data-nom="Jean-Luc Fugit" data-id="722366" data-departement="Rhône" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s80" data-civ="M." data-nom="Laurent Furst" data-id="266774" data-departement="Bas-Rhin" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s243" data-civ="M." data-nom="Olivier Gaillard" data-id="719480" data-departement="Gard" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s216" data-civ="Mme" data-nom="Albane Gaillot" data-id="721246" data-departement="Val-de-Marne" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s226" data-civ="M." data-nom="Grégory Galbadon" data-id="720198" data-departement="Manche" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s176" data-civ="Mme" data-nom="Patricia Gallerneau" data-id="721992" data-departement="Vendée" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s51" data-civ="M." data-nom="Claude de Ganay" data-id="267735" data-departement="Loiret" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s183" data-civ="M." data-nom="Laurent Garcia" data-id="720178" data-departement="Meurthe-et-Moselle" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s495" data-civ="M." data-nom="Guillaume Garot" data-id="333285" data-departement="Mayenne" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s273" data-civ="M." data-nom="Thomas Gassilloud" data-id="722358" data-departement="Rhône" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s127" data-civ="M." data-nom="Jean-Jacques Gaultier" data-id="267324" data-departement="Vosges" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s241" data-civ="M." data-nom="Raphaël Gauvain" data-id="721364" data-departement="Saône-et-Loire" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s530" data-civ="Mme" data-nom="Laurence Gayte" data-id="720806" data-departement="Pyrénées-Orientales" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s351" data-civ="Mme" data-nom="Anne Genetet" data-id="721024" data-departement="Français établis hors de France" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s90" data-civ="Mme" data-nom="Annie Genevard" data-id="605991" data-departement="Doubs" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s392" data-civ="M." data-nom="Raphaël Gérard" data-id="719108" data-departement="Charente-Maritime" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s365" data-civ="Mme" data-nom="Séverine Gipson" data-id="719326" data-departement="Eure" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s219" data-civ="M." data-nom="Éric Girardin" data-id="720222" data-departement="Marne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s410" data-civ="M." data-nom="Joël Giraud" data-id="267336" data-departement="Hautes-Alpes" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s572" data-civ="Mme" data-nom="Olga Givernet" data-id="718674" data-departement="Ain" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s93" data-civ="M." data-nom="Claude Goasguen" data-id="1498" data-departement="Paris" data-circo="(14e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s104" data-civ="M." data-nom="Philippe Gomès" data-id="610775" data-departement="Nouvelle-Calédonie" data-circo="(2e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s242" data-civ="Mme" data-nom="Valérie Gomez-Bassac" data-id="721784" data-departement="Var" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s27" data-civ="M." data-nom="Philippe Gosselin" data-id="266797" data-departement="Manche" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s420" data-civ="M." data-nom="Guillaume Gouffier-Cha" data-id="721296" data-departement="Val-de-Marne" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s460" data-civ="Mme" data-nom="Perrine Goulet" data-id="720560" data-departement="Nièvre" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s415" data-civ="M." data-nom="Fabien Gouttefarde" data-id="719330" data-departement="Eure" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s378" data-civ="Mme" data-nom="Carole Grandjean" data-id="720170" data-departement="Meurthe-et-Moselle" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s636" data-civ="Mme" data-nom="Florence Granjus" data-id="722062" data-departement="Yvelines" data-circo="(12e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s531" data-civ="M." data-nom="Romain Grau" data-id="720790" data-departement="Pyrénées-Orientales" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s284" data-civ="Mme" data-nom="Olivia Gregoire" data-id="721764" data-departement="Paris" data-circo="(12e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s71" data-civ="M." data-nom="Jean-Carles Grelier" data-id="267318" data-departement="Sarthe" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s479" data-civ="Mme" data-nom="Émilie Guerel" data-id="721792" data-departement="Var" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s293" data-civ="M." data-nom="Stanislas Guerini" data-id="721498" data-departement="Paris" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s307" data-civ="Mme" data-nom="Marie Guévenoux" data-id="721880" data-departement="Essonne" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s40" data-civ="Mme" data-nom="Claire Guion-Firmin" data-id="721126" data-departement="Saint-Barthélemy et Saint-Martin" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s506" data-civ="M." data-nom="David Habib" data-id="1592" data-departement="Pyrénées-Atlantiques" data-circo="(3e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s144" data-civ="M." data-nom="Meyer Habib" data-id="695100" data-departement="Français établis hors de France" data-circo="(8e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s349" data-civ="Mme" data-nom="Nadia Hai" data-id="722054" data-departement="Yvelines" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s326" data-civ="Mme" data-nom="Véronique Hammerer" data-id="719652" data-departement="Gironde" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s182" data-civ="M." data-nom="Brahim Hammouche" data-id="720326" data-departement="Moselle" data-circo="(8e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s566" data-civ="M." data-nom="Yannick Haury" data-id="720054" data-departement="Loire-Atlantique" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s239" data-civ="Mme" data-nom="Christine Hennion" data-id="722094" data-departement="Hauts-de-Seine" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s466" data-civ="M." data-nom="Pierre Henriet" data-id="722070" data-departement="Vendée" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s11" data-civ="M." data-nom="Michel Herbillon" data-id="1630" data-departement="Val-de-Marne" data-circo="(8e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s203" data-civ="Mme" data-nom="Danièle Hérin" data-id="718794" data-departement="Aude" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s143" data-civ="M." data-nom="Antoine Herth" data-id="267355" data-departement="Bas-Rhin" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s79" data-civ="M." data-nom="Patrick Hetzel" data-id="608416" data-departement="Bas-Rhin" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s298" data-civ="M." data-nom="Alexandre Holroyd" data-id="721150" data-departement="Français établis hors de France" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s406" data-civ="M." data-nom="Dimitri Houbron" data-id="720454" data-departement="Nord" data-circo="(17e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s537" data-civ="M." data-nom="Sacha Houlié" data-id="722150" data-departement="Vienne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s395" data-civ="M." data-nom="Philippe Huppé" data-id="719700" data-departement="Hérault" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s497" data-civ="M." data-nom="Christian Hutin" data-id="333818" data-departement="Nord" data-circo="(13e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s43" data-civ="M." data-nom="Sébastien Huyghe" data-id="267200" data-departement="Nord" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s280" data-civ="Mme" data-nom="Monique Iborra" data-id="331835" data-departement="Haute-Garonne" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s184" data-civ="M." data-nom="Cyrille Isaac-Sibille" data-id="722374" data-departement="Rhône" data-circo="(12e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s94" data-civ="M." data-nom="Christian Jacob" data-id="1695" data-departement="Seine-et-Marne" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s404" data-civ="M." data-nom="Jean-Michel Jacques" data-id="720354" data-departement="Morbihan" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s185" data-civ="Mme" data-nom="Élodie Jacquier-Laforge" data-id="719874" data-departement="Isère" data-circo="(9e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s277" data-civ="Mme" data-nom="Caroline Janvier" data-id="720074" data-departement="Loiret" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s132" data-civ="M." data-nom="Yves Jégo" data-id="267801" data-departement="Seine-et-Marne" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s320" data-civ="M." data-nom="Christophe Jerretie" data-id="719060" data-departement="Corrèze" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s606" data-civ="M." data-nom="François Jolivet" data-id="719778" data-departement="Indre" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s179" data-civ="M." data-nom="Bruno Joncour" data-id="719210" data-departement="Côtes-d'Armor" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s324" data-civ="Mme" data-nom="Sandrine Josso" data-id="720038" data-departement="Loire-Atlantique" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s508" data-civ="M." data-nom="Régis Juanico" data-id="332614" data-departement="Loire" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s308" data-civ="M." data-nom="Hubert Julien-Laferriere" data-id="722344" data-departement="Rhône" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s583" data-civ="M." data-nom="Sébastien Jumel" data-id="722202" data-departement="Seine-Maritime" data-circo="(6e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s98" data-civ="M." data-nom="Mansour Kamardine" data-id="267901" data-departement="Mayotte" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s335" data-civ="Mme" data-nom="Catherine Kamowski" data-id="719994" data-departement="Isère" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s502" data-civ="Mme" data-nom="Marietta Karamanli" data-id="335054" data-departement="Sarthe" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s458" data-civ="M." data-nom="Guillaume Kasbarian" data-id="719372" data-departement="Eure-et-Loir" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s472" data-civ="Mme" data-nom="Stéphanie Kerbarh" data-id="721514" data-departement="Seine-Maritime" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s368" data-civ="M." data-nom="Yannick Kerlogot" data-id="719230" data-departement="Côtes-d'Armor" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s388" data-civ="M." data-nom="Loïc Kervran" data-id="719052" data-departement="Cher" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s294" data-civ="Mme" data-nom="Fadila Khattabi" data-id="719186" data-departement="Côte-d'Or" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s573" data-civ="Mme" data-nom="Anissa Khedher" data-id="722300" data-departement="Rhône" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s245" data-civ="M." data-nom="Rodrigue Kokouendo" data-id="721644" data-departement="Seine-et-Marne" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s542" data-civ="M." data-nom="Jacques Krabal" data-id="605084" data-departement="Aisne" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s633" data-civ="Mme" data-nom="Sonia Krimi" data-id="720202" data-departement="Manche" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s643" data-civ="Mme" data-nom="Aina Kuric" data-id="720214" data-departement="Marne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s138" data-civ="Mme" data-nom="Brigitte Kuster" data-id="721506" data-departement="Paris" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s557" data-civ="M." data-nom="Mustapha Laabid" data-id="719842" data-departement="Ille-et-Vilaine" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s342" data-civ="M." data-nom="Daniel Labaronne" data-id="719798" data-departement="Indre-et-Loire" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s626" data-civ="M." data-nom="Bastien Lachaud" data-id="720846" data-departement="Seine-Saint-Denis" data-circo="(6e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s15" data-civ="Mme" data-nom="Valérie Lacroute" data-id="609245" data-departement="Seine-et-Marne" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s135" data-civ="M." data-nom="Jean-Christophe Lagarde" data-id="268019" data-departement="Seine-Saint-Denis" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s186" data-civ="M." data-nom="Jean-Luc Lagleize" data-id="719504" data-departement="Haute-Garonne" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s249" data-civ="M." data-nom="Fabien Lainé" data-id="719918" data-departement="Landes" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s555" data-civ="Mme" data-nom="Amal-Amélia Lakrafi" data-id="721004" data-departement="Français établis hors de France" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s578" data-civ="M." data-nom="Jérôme Lambert" data-id="1809" data-departement="Charente" data-circo="(3e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s359" data-civ="M." data-nom="François-Michel Lambert" data-id="605518" data-departement="Bouches-du-Rhône" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s282" data-civ="Mme" data-nom="Anne-Christine Lang" data-id="643205" data-departement="Paris" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s250" data-civ="M." data-nom="Mohamed Laqhila" data-id="718978" data-departement="Bouches-du-Rhône" data-circo="(11e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s133" data-civ="Mme" data-nom="Laure de La Raudière" data-id="331567" data-departement="Eure-et-Loir" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s480" data-civ="Mme" data-nom="Frédérique Lardet" data-id="721434" data-departement="Haute-Savoie" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s630" data-civ="M." data-nom="Michel Larive" data-id="718868" data-departement="Ariège" data-circo="(2e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s45" data-civ="M." data-nom="Guillaume Larrivé" data-id="267785" data-departement="Yonne" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s568" data-civ="M." data-nom="Jean-Charles Larsonneur" data-id="719396" data-departement="Finistère" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s225" data-civ="M." data-nom="Jean Lassalle" data-id="1838" data-departement="Pyrénées-Atlantiques" data-circo="(4e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s251" data-civ="Mme" data-nom="Florence Lasserre-David" data-id="720764" data-departement="Pyrénées-Atlantiques" data-circo="(5e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s253" data-civ="M." data-nom="Philippe Latombe" data-id="721984" data-departement="Vendée" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s400" data-civ="M." data-nom="Michel Lauzzana" data-id="720022" data-departement="Lot-et-Garonne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s473" data-civ="Mme" data-nom="Célia de Lavergne" data-id="719310" data-departement="Drôme" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s418" data-civ="Mme" data-nom="Fiona Lazaar" data-id="720916" data-departement="Val-d'Oise" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s338" data-civ="Mme" data-nom="Marie Lebec" data-id="721852" data-departement="Yvelines" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s207" data-civ="M." data-nom="Gaël Le Bohec" data-id="719728" data-departement="Ille-et-Vilaine" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s532" data-civ="M." data-nom="Jean-Claude Leclabart" data-id="722228" data-departement="Somme" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s1" data-civ="M." data-nom="Sébastien Leclerc" data-id="340853" data-departement="Calvados" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s393" data-civ="Mme" data-nom="Charlotte Lecocq" data-id="720480" data-departement="Nord" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s584" data-civ="M." data-nom="Jean-Paul Lecoq" data-id="335612" data-departement="Seine-Maritime" data-circo="(8e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s129" data-civ="M." data-nom="Vincent Ledoux" data-id="712014" data-departement="Nord" data-circo="(10e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s286" data-civ="Mme" data-nom="Sandrine Le Feur" data-id="719412" data-departement="Finistère" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s580" data-civ="M." data-nom="Stéphane Le Foll" data-id="588886" data-departement="Sarthe" data-circo="(4e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s96" data-civ="M." data-nom="Marc Le Fur" data-id="1874" data-departement="Côtes-d'Armor" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s333" data-civ="M." data-nom="Didier Le Gac" data-id="719404" data-departement="Finistère" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s436" data-civ="M." data-nom="Gilles Le Gendre" data-id="721466" data-departement="Paris" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s102" data-civ="Mme" data-nom="Constance Le Grip" data-id="345722" data-departement="Hauts-de-Seine" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s360" data-civ="Mme" data-nom="Martine Leguille-Balloy" data-id="722008" data-departement="Vendée" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s206" data-civ="M." data-nom="Christophe Lejeune" data-id="722320" data-departement="Haute-Saône" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s318" data-civ="Mme" data-nom="Annaïg Le Meur" data-id="719388" data-departement="Finistère" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s314" data-civ="Mme" data-nom="Marion Lenne" data-id="721450" data-departement="Haute-Savoie" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s220" data-civ="Mme" data-nom="Nicole Le Peih" data-id="720342" data-departement="Morbihan" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s60" data-civ="Mme" data-nom="Marine Le Pen" data-id="720614" data-departement="Pas-de-Calais" data-circo="(11e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s111" data-civ="M." data-nom="Maurice Leroy" data-id="1960" data-departement="Loir-et-Cher" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s634" data-civ="M." data-nom="Roland Lescure" data-id="721134" data-departement="Français établis hors de France" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s501" data-civ="M." data-nom="Serge Letchimy" data-id="337483" data-departement="Martinique" data-circo="(3e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s468" data-civ="M." data-nom="Fabrice Le Vigoureux" data-id="719006" data-departement="Calvados" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s87" data-civ="Mme" data-nom="Geneviève Levy" data-id="267378" data-departement="Var" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s382" data-civ="Mme" data-nom="Monique Limon" data-id="719858" data-departement="Isère" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s325" data-civ="M." data-nom="Richard Lioger" data-id="720378" data-departement="Moselle" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s424" data-civ="Mme" data-nom="Brigitte Liso" data-id="720446" data-departement="Nord" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s67" data-civ="Mme" data-nom="Marie-France Lorho" data-id="721932" data-departement="Vaucluse" data-circo="(4e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s110" data-civ="M." data-nom="David Lorion" data-id="721054" data-departement="Réunion" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s456" data-civ="Mme" data-nom="Alexandra Louis" data-id="718918" data-departement="Bouches-du-Rhône" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s97" data-civ="Mme" data-nom="Véronique Louwagie" data-id="608016" data-departement="Orne" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s254" data-civ="Mme" data-nom="Aude Luquet" data-id="721530" data-departement="Seine-et-Marne" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s10" data-civ="M." data-nom="Gilles Lurton" data-id="606712" data-departement="Ille-et-Vilaine" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s327" data-civ="Mme" data-nom="Marie-Ange Magne" data-id="722244" data-departement="Haute-Vienne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s156" data-civ="Mme" data-nom="Lise Magnier" data-id="720230" data-departement="Marne" data-circo="(4e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s330" data-civ="M." data-nom="Sylvain Maillard" data-id="717379" data-departement="Paris" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s569" data-civ="Mme" data-nom="Laurence Maillart-Méhaignerie" data-id="719718" data-departement="Ille-et-Vilaine" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s297" data-civ="M." data-nom="Jacques Maire" data-id="722178" data-departement="Hauts-de-Seine" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s581" data-civ="Mme" data-nom="Josette Manin" data-id="720988" data-departement="Martinique" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s49" data-civ="M." data-nom="Emmanuel Maquet" data-id="346054" data-departement="Somme" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s442" data-civ="Mme" data-nom="Jacqueline Maquet" data-id="334116" data-departement="Pas-de-Calais" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s483" data-civ="M." data-nom="Jacques Marilossian" data-id="721946" data-departement="Hauts-de-Seine" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s33" data-civ="M." data-nom="Olivier Marleix" data-id="606098" data-departement="Eure-et-Loir" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s7" data-civ="M." data-nom="Franck Marlin" data-id="2086" data-departement="Essonne" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s372" data-civ="Mme" data-nom="Sandra Marsaud" data-id="719080" data-departement="Charente" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s366" data-civ="M." data-nom="Didier Martin" data-id="719154" data-departement="Côte-d'Or" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s377" data-civ="M." data-nom="Denis Masséglia" data-id="720146" data-departement="Maine-et-Loire" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s152" data-civ="M." data-nom="Jean-Louis Masson" data-id="346218" data-departement="Var" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s188" data-civ="M." data-nom="Max Mathiasin" data-id="720976" data-departement="Guadeloupe" data-circo="(3e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s386" data-civ="M." data-nom="Fabien Matras" data-id="721800" data-departement="Var" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s255" data-civ="M." data-nom="Jean-Paul Mattei" data-id="720728" data-departement="Pyrénées-Atlantiques" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s438" data-civ="Mme" data-nom="Sereine Mauborgne" data-id="721726" data-departement="Var" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s407" data-civ="M." data-nom="Stéphane Mazars" data-id="677483" data-departement="Aveyron" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s426" data-civ="M." data-nom="Jean François Mbaye" data-id="720870" data-departement="Val-de-Marne" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s231" data-civ="Mme" data-nom="Graziella Melchior" data-id="719338" data-departement="Finistère" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s601" data-civ="M." data-nom="Jean-Luc Mélenchon" data-id="2150" data-departement="Bouches-du-Rhône" data-circo="(4e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s68" data-civ="Mme" data-nom="Emmanuelle Ménard" data-id="719608" data-departement="Hérault" data-circo="(6e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s232" data-civ="M." data-nom="Ludovic Mendes" data-id="720370" data-departement="Moselle" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s118" data-civ="M." data-nom="Gérard Menuel" data-id="2155" data-departement="Aube" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s353" data-civ="M." data-nom="Thomas Mesnier" data-id="719072" data-departement="Charente" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s256" data-civ="Mme" data-nom="Sophie Mette" data-id="719640" data-departement="Gironde" data-circo="(9e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s5" data-civ="Mme" data-nom="Frédérique Meunier" data-id="719272" data-departement="Corrèze" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s279" data-civ="Mme" data-nom="Marjolaine Meynier-Millefert" data-id="719882" data-departement="Isère" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s244" data-civ="Mme" data-nom="Monica Michel" data-id="719130" data-departement="Bouches-du-Rhône" data-circo="(16e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s259" data-civ="M." data-nom="Philippe Michel-Kleisbauer" data-id="721734" data-departement="Var" data-circo="(5e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s445" data-civ="M." data-nom="Thierry Michels" data-id="720738" data-departement="Bas-Rhin" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s248" data-civ="M." data-nom="Patrick Mignola" data-id="721418" data-departement="Savoie" data-circo="(4e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s178" data-civ="M." data-nom="Bruno Millienne" data-id="721976" data-departement="Yvelines" data-circo="(9e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s17" data-civ="M." data-nom="Maxime Minot" data-id="720630" data-departement="Oise" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s492" data-civ="Mme" data-nom="Patricia Mirallès" data-id="719668" data-departement="Hérault" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s430" data-civ="M." data-nom="Jean-Michel Mis" data-id="719952" data-departement="Loire" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s448" data-civ="M." data-nom="Paul Molac" data-id="607619" data-departement="Morbihan" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s427" data-civ="Mme" data-nom="Amélie de Montchalin" data-id="721670" data-departement="Essonne" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s278" data-civ="Mme" data-nom="Sandrine Mörch" data-id="719456" data-departement="Haute-Garonne" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s337" data-civ="M." data-nom="Jean-Baptiste Moreau" data-id="719242" data-departement="Creuse" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s105" data-civ="M." data-nom="Pierre Morel-À-L'Huissier" data-id="266788" data-departement="Lozère" data-circo="(1re circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s571" data-civ="M." data-nom="Adrien Morenas" data-id="721876" data-departement="Vaucluse" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s385" data-civ="Mme" data-nom="Cendra Motin" data-id="719850" data-departement="Isère" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s329" data-civ="Mme" data-nom="Naïma Moutchou" data-id="720908" data-departement="Val-d'Oise" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s195" data-civ="Mme" data-nom="Cécile Muschotti" data-id="721656" data-departement="Var" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s343" data-civ="M." data-nom="Sébastien Nadot" data-id="719464" data-departement="Haute-Garonne" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s155" data-civ="M." data-nom="Christophe Naegelen" data-id="721486" data-departement="Vosges" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s595" data-civ="M." data-nom="Jean-Philippe Nilor" data-id="610654" data-departement="Martinique" data-circo="(4e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s548" data-civ="M." data-nom="Mickaël Nogal" data-id="719520" data-departement="Haute-Garonne" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s30" data-civ="M." data-nom="Jérôme Nury" data-id="720644" data-departement="Orne" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s240" data-civ="Mme" data-nom="Delphine O" data-id="721956" data-departement="Paris" data-circo="(16e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s611" data-civ="Mme" data-nom="Danièle Obono" data-id="721960" data-departement="Paris" data-circo="(17e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s304" data-civ="Mme" data-nom="Claire O'Petit" data-id="719364" data-departement="Eure" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s614" data-civ="Mme" data-nom="Valérie Oppelt" data-id="720108" data-departement="Loire-Atlantique" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s428" data-civ="M." data-nom="Matthieu Orphelin" data-id="720278" data-departement="Maine-et-Loire" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s570" data-civ="Mme" data-nom="Catherine Osson" data-id="720492" data-departement="Nord" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s187" data-civ="M." data-nom="Jimmy Pahun" data-id="720334" data-departement="Morbihan" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s56" data-civ="M." data-nom="Ludovic Pajot" data-id="720606" data-departement="Pas-de-Calais" data-circo="(10e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s541" data-civ="M." data-nom="Xavier Paluszkiewicz" data-id="720402" data-departement="Meurthe-et-Moselle" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s103" data-civ="M." data-nom="Bertrand Pancher" data-id="333421" data-departement="Meuse" data-circo="(1re circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s281" data-civ="Mme" data-nom="Sophie Panonacle" data-id="719632" data-departement="Gironde" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s604" data-civ="Mme" data-nom="Mathilde Panot" data-id="720892" data-departement="Val-de-Marne" data-circo="(10e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s32" data-civ="M." data-nom="Jean-François Parigi" data-id="721636" data-departement="Seine-et-Marne" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s403" data-civ="M." data-nom="Didier Paris" data-id="719202" data-departement="Côte-d'Or" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s204" data-civ="Mme" data-nom="Zivka Park" data-id="720944" data-departement="Val-d'Oise" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s149" data-civ="M." data-nom="Éric Pauget" data-id="718784" data-departement="Alpes-Maritimes" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s511" data-civ="Mme" data-nom="George Pau-Langevin" data-id="335532" data-departement="Paris" data-circo="(15e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s376" data-civ="M." data-nom="Hervé Pellois" data-id="607595" data-departement="Morbihan" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s139" data-civ="M." data-nom="Guillaume Peltier" data-id="719946" data-departement="Loir-et-Cher" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s429" data-civ="M." data-nom="Alain Perea" data-id="718802" data-departement="Aude" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s547" data-civ="M." data-nom="Patrice Perrot" data-id="720414" data-departement="Nièvre" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s108" data-civ="M." data-nom="Bernard Perrut" data-id="2377" data-departement="Rhône" data-circo="(9e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s558" data-civ="M." data-nom="Pierre Person" data-id="721568" data-departement="Paris" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s440" data-civ="Mme" data-nom="Anne-Laurence Petel" data-id="718930" data-departement="Bouches-du-Rhône" data-circo="(14e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s260" data-civ="M." data-nom="Frédéric Petit" data-id="721182" data-departement="Français établis hors de France" data-circo="(7e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s262" data-civ="Mme" data-nom="Maud Petit" data-id="721234" data-departement="Val-de-Marne" data-circo="(4e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s214" data-civ="Mme" data-nom="Valérie Petit" data-id="720500" data-departement="Nord" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s589" data-civ="M." data-nom="Stéphane Peu" data-id="721270" data-departement="Seine-Saint-Denis" data-circo="(2e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s201" data-civ="Mme" data-nom="Bénédicte Peyrol" data-id="718736" data-departement="Allier" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s401" data-civ="Mme" data-nom="Michèle Peyron" data-id="721710" data-departement="Seine-et-Marne" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s303" data-civ="M." data-nom="Damien Pichereau" data-id="721372" data-departement="Sarthe" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s371" data-civ="M." data-nom="Laurent Pietraszewski" data-id="720512" data-departement="Nord" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s192" data-civ="Mme" data-nom="Sylvia Pinel" data-id="336175" data-departement="Tarn-et-Garonne" data-circo="(2e circonscription)" data-groupe="Non inscrit"></dl>
						
								
						<dl data-legislature="15" data-place="s507" data-civ="Mme" data-nom="Christine Pires Beaune" data-id="608172" data-departement="Puy-de-Dôme" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s391" data-civ="Mme" data-nom="Béatrice Piron" data-id="721844" data-departement="Yvelines" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s524" data-civ="Mme" data-nom="Claire Pitollat" data-id="718910" data-departement="Bouches-du-Rhône" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s22" data-civ="Mme" data-nom="Bérengère Poletti" data-id="267260" data-departement="Ardennes" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s348" data-civ="Mme" data-nom="Barbara Pompili" data-id="609520" data-departement="Somme" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s234" data-civ="M." data-nom="Jean-Pierre Pont" data-id="2449" data-departement="Pas-de-Calais" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s645" data-civ="M." data-nom="Jean-François Portarrieu" data-id="719528" data-departement="Haute-Garonne" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s514" data-civ="M." data-nom="Dominique Potier" data-id="607553" data-departement="Meurthe-et-Moselle" data-circo="(5e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s198" data-civ="M." data-nom="Benoit Potterie" data-id="720590" data-departement="Pas-de-Calais" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s263" data-civ="Mme" data-nom="Josy Poueyto" data-id="720720" data-departement="Pyrénées-Atlantiques" data-circo="(1re circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s215" data-civ="M." data-nom="Éric Poulliat" data-id="719600" data-departement="Gironde" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s228" data-civ="Mme" data-nom="Natalia Pouzyreff" data-id="721916" data-departement="Yvelines" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s38" data-civ="M." data-nom="Aurélien Pradié" data-id="720100" data-departement="Lot" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s621" data-civ="M." data-nom="Loïc Prud'homme" data-id="719578" data-departement="Gironde" data-circo="(3e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s516" data-civ="M." data-nom="Joaquim Pueyo" data-id="608011" data-departement="Orne" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s510" data-civ="M." data-nom="François Pupponi" data-id="405480" data-departement="Val-d'Oise" data-circo="(8e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s612" data-civ="M." data-nom="Adrien Quatennens" data-id="720422" data-departement="Nord" data-circo="(1re circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s28" data-civ="M." data-nom="Didier Quentin" data-id="2492" data-departement="Charente-Maritime" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s383" data-civ="M." data-nom="Bruno Questel" data-id="643127" data-departement="Eure" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s505" data-civ="Mme" data-nom="Valérie Rabault" data-id="609590" data-departement="Tarn-et-Garonne" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s336" data-civ="Mme" data-nom="Cathy Racon-Bouzon" data-id="718944" data-departement="Bouches-du-Rhône" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s48" data-civ="M." data-nom="Alain Ramadier" data-id="721286" data-departement="Seine-Saint-Denis" data-circo="(10e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s44" data-civ="Mme" data-nom="Nadia Ramassamy" data-id="721070" data-departement="Réunion" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s264" data-civ="M." data-nom="Richard Ramos" data-id="720092" data-departement="Loiret" data-circo="(6e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s269" data-civ="M." data-nom="Pierre-Alain Raphan" data-id="721888" data-departement="Essonne" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s619" data-civ="M." data-nom="Jean-Hugues Ratenon" data-id="721062" data-departement="Réunion" data-circo="(5e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s197" data-civ="Mme" data-nom="Isabelle Rauch" data-id="720552" data-departement="Moselle" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s332" data-civ="M." data-nom="Rémy Rebeyrotte" data-id="722398" data-departement="Saône-et-Loire" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s47" data-civ="M." data-nom="Robin Reda" data-id="721678" data-departement="Essonne" data-circo="(7e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s77" data-civ="M." data-nom="Frédéric Reiss" data-id="266776" data-departement="Bas-Rhin" data-circo="(8e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s75" data-civ="M." data-nom="Jean-Luc Reitzer" data-id="2529" data-departement="Haut-Rhin" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s196" data-civ="M." data-nom="Hugues Renson" data-id="721824" data-departement="Paris" data-circo="(13e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s620" data-civ="Mme" data-nom="Muriel Ressiguier" data-id="719676" data-departement="Hérault" data-circo="(2e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s101" data-civ="M." data-nom="Bernard Reynès" data-id="330788" data-departement="Bouches-du-Rhône" data-circo="(15e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s124" data-civ="M." data-nom="Franck Riester" data-id="335758" data-departement="Seine-et-Marne" data-circo="(5e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s344" data-civ="Mme" data-nom="Cécile Rilhac" data-id="720900" data-departement="Val-d'Oise" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s431" data-civ="Mme" data-nom="Véronique Riotton" data-id="721426" data-departement="Haute-Savoie" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s607" data-civ="Mme" data-nom="Stéphanie Rist" data-id="720066" data-departement="Loiret" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s475" data-civ="Mme" data-nom="Marie-Pierre Rixain" data-id="722252" data-departement="Essonne" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s533" data-civ="Mme" data-nom="Mireille Robert" data-id="718810" data-departement="Aude" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s258" data-civ="M." data-nom="Thierry Robert" data-id="610733" data-departement="Réunion" data-circo="(7e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s128" data-civ="M." data-nom="Vincent Rolland" data-id="266808" data-departement="Savoie" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s642" data-civ="Mme" data-nom="Laëtitia Romeiro Dias" data-id="722022" data-departement="Essonne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s394" data-civ="M." data-nom="Xavier Roseren" data-id="721458" data-departement="Haute-Savoie" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s441" data-civ="Mme" data-nom="Laurianne Rossi" data-id="721600" data-departement="Hauts-de-Seine" data-circo="(11e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s354" data-civ="M." data-nom="Gwendal Rouillard" data-id="343493" data-departement="Morbihan" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s309" data-civ="M." data-nom="Cédric Roussel" data-id="718902" data-departement="Alpes-Maritimes" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s590" data-civ="M." data-nom="Fabien Roussel" data-id="720692" data-departement="Nord" data-circo="(20e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s628" data-civ="Mme" data-nom="Sabine Rubin" data-id="721226" data-departement="Seine-Saint-Denis" data-circo="(9e circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s546" data-civ="M." data-nom="Thomas Rudigoz" data-id="722292" data-departement="Rhône" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s627" data-civ="M." data-nom="François Ruffin" data-id="722142" data-departement="Somme" data-circo="(1re circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s494" data-civ="M." data-nom="François de Rugy" data-id="332747" data-departement="Loire-Atlantique" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s423" data-civ="M." data-nom="Pacôme Rupin" data-id="721616" data-departement="Paris" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s21" data-civ="M." data-nom="Martial Saddier" data-id="267527" data-departement="Haute-Savoie" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s130" data-civ="Mme" data-nom="Maina Sage" data-id="702052" data-departement="Polynésie Française" data-circo="(1re circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s345" data-civ="M." data-nom="Laurent Saint-Martin" data-id="720878" data-departement="Val-de-Marne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s364" data-civ="Mme" data-nom="Laetitia Saint-Paul" data-id="720138" data-departement="Maine-et-Loire" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s145" data-civ="Mme" data-nom="Nicole Sanquer" data-id="721110" data-departement="Polynésie Française" data-circo="(2e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s290" data-civ="Mme" data-nom="Nathalie Sarles" data-id="719972" data-departement="Loire" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s257" data-civ="Mme" data-nom="Marielle de Sarnez" data-id="717151" data-departement="Paris" data-circo="(11e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s576" data-civ="M." data-nom="Hervé Saulignac" data-id="340343" data-departement="Ardèche" data-circo="(1re circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s639" data-civ="M." data-nom="Jacques Savatier" data-id="722078" data-departement="Vienne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s70" data-civ="M." data-nom="Antoine Savignat" data-id="748954" data-departement="Val-d'Oise" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s72" data-civ="M." data-nom="Raphaël Schellenberger" data-id="721314" data-departement="Haut-Rhin" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s313" data-civ="M." data-nom="Jean-Bernard Sempastous" data-id="720780" data-departement="Hautes-Pyrénées" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s86" data-civ="M." data-nom="Jean-Marie Sermier" data-id="267204" data-departement="Jura" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s311" data-civ="M." data-nom="Olivier Serva" data-id="720960" data-departement="Guadeloupe" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s597" data-civ="M." data-nom="Gabriel Serville" data-id="610667" data-departement="Guyane" data-circo="(1re circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s416" data-civ="M." data-nom="Benoit Simian" data-id="719592" data-departement="Gironde" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s381" data-civ="M." data-nom="Thierry Solère" data-id="346876" data-departement="Hauts-de-Seine" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s623" data-civ="M." data-nom="Denis Sommer" data-id="719420" data-departement="Doubs" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s564" data-civ="M." data-nom="Joachim Son-Forget" data-id="721174" data-departement="Français établis hors de France" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s559" data-civ="M." data-nom="Bertrand Sorre" data-id="720190" data-departement="Manche" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s76" data-civ="M." data-nom="Éric Straumann" data-id="334654" data-departement="Haut-Rhin" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s478" data-civ="M." data-nom="Bruno Studer" data-id="720754" data-departement="Bas-Rhin" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s291" data-civ="Mme" data-nom="Sira Sylla" data-id="722118" data-departement="Seine-Maritime" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s85" data-civ="Mme" data-nom="Michèle Tabarot" data-id="267794" data-departement="Alpes-Maritimes" data-circo="(9e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s412" data-civ="M." data-nom="Aurélien Taché" data-id="720952" data-departement="Val-d'Oise" data-circo="(10e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s224" data-civ="Mme" data-nom="Marie Tamarelle-Verhaeghe" data-id="719350" data-departement="Eure" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s465" data-civ="M." data-nom="Buon Tan" data-id="721690" data-departement="Paris" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s398" data-civ="Mme" data-nom="Liliana Tanguy" data-id="719550" data-departement="Finistère" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s209" data-civ="M." data-nom="Adrien Taquet" data-id="722086" data-departement="Hauts-de-Seine" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s36" data-civ="M." data-nom="Jean-Charles Taugourdeau" data-id="2792" data-departement="Maine-et-Loire" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s609" data-civ="Mme" data-nom="Bénédicte Taurine" data-id="718860" data-departement="Ariège" data-circo="(1re circonscription)" data-groupe="La France insoumise"></dl>
						
								
						<dl data-legislature="15" data-place="s84" data-civ="M." data-nom="Guy Teissier" data-id="2796" data-departement="Bouches-du-Rhône" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s457" data-civ="M." data-nom="Jean Terlier" data-id="721584" data-departement="Tarn" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s380" data-civ="M." data-nom="Stéphane Testé" data-id="720854" data-departement="Seine-Saint-Denis" data-circo="(12e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s432" data-civ="M." data-nom="Vincent Thiébaut" data-id="722336" data-departement="Bas-Rhin" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s221" data-civ="Mme" data-nom="Agnès Thill" data-id="720568" data-departement="Oise" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s222" data-civ="Mme" data-nom="Sabine Thillaye" data-id="719822" data-departement="Indre-et-Loire" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s534" data-civ="Mme" data-nom="Valérie Thomas" data-id="720830" data-departement="Puy-de-Dôme" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s452" data-civ="Mme" data-nom="Alice Thourot" data-id="719302" data-departement="Drôme" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s455" data-civ="Mme" data-nom="Huguette Tiegna" data-id="720014" data-departement="Lot" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s285" data-civ="M." data-nom="Jean-Louis Touraine" data-id="334768" data-departement="Rhône" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s193" data-civ="M." data-nom="Alain Tourret" data-id="2828" data-departement="Calvados" data-circo="(6e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s331" data-civ="Mme" data-nom="Élisabeth Toutut-Picard" data-id="719540" data-departement="Haute-Garonne" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s151" data-civ="Mme" data-nom="Laurence Trastour-Isnart" data-id="718780" data-departement="Alpes-Maritimes" data-circo="(6e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s446" data-civ="Mme" data-nom="Nicole Trisse" data-id="720394" data-departement="Moselle" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s544" data-civ="M." data-nom="Stéphane Trompille" data-id="718682" data-departement="Ain" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s346" data-civ="Mme" data-nom="Frédérique Tuffnell" data-id="719092" data-departement="Charente-Maritime" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s265" data-civ="M." data-nom="Nicolas Turquois" data-id="722162" data-departement="Vienne" data-circo="(4e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s577" data-civ="Mme" data-nom="Cécile Untermaier" data-id="608695" data-departement="Saône-et-Loire" data-circo="(4e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s496" data-civ="Mme" data-nom="Hélène Vainqueur-Christophe" data-id="643145" data-departement="Guadeloupe" data-circo="(4e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s24" data-civ="Mme" data-nom="Isabelle Valentin" data-id="643134" data-departement="Haute-Loire" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s451" data-civ="Mme" data-nom="Alexandra Valetta Ardisson" data-id="718768" data-departement="Alpes-Maritimes" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s504" data-civ="M." data-nom="Boris Vallaud" data-id="719930" data-departement="Landes" data-circo="(3e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s339" data-civ="M." data-nom="Manuel Valls" data-id="267622" data-departement="Essonne" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s292" data-civ="Mme" data-nom="Laurence Vanceunebrock-Mialon" data-id="718728" data-departement="Allier" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s31" data-civ="M." data-nom="Pierre Vatin" data-id="720586" data-departement="Oise" data-circo="(5e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s266" data-civ="Mme" data-nom="Michèle de Vaucouleurs" data-id="721924" data-departement="Yvelines" data-circo="(7e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s540" data-civ="M." data-nom="Olivier Véran" data-id="642788" data-departement="Isère" data-circo="(1re circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s123" data-civ="M." data-nom="Francis Vercamer" data-id="267585" data-departement="Nord" data-circo="(7e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s126" data-civ="M." data-nom="Patrice Verchère" data-id="334843" data-departement="Rhône" data-circo="(8e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s525" data-civ="Mme" data-nom="Marie-Christine Verdier-Jouclas" data-id="721542" data-departement="Tarn" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s26" data-civ="M." data-nom="Charles de la Verpillière" data-id="1012" data-departement="Ain" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s35" data-civ="M." data-nom="Arnaud Viala" data-id="709315" data-departement="Aveyron" data-circo="(3e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s148" data-civ="M." data-nom="Michel Vialay" data-id="721968" data-departement="Yvelines" data-circo="(8e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s261" data-civ="Mme" data-nom="Laurence Vichnievsky" data-id="720704" data-departement="Puy-de-Dôme" data-circo="(3e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s512" data-civ="Mme" data-nom="Michèle Victory" data-id="340357" data-departement="Ardèche" data-circo="(2e circonscription)" data-groupe="Nouvelle Gauche"></dl>
						
								
						<dl data-legislature="15" data-place="s433" data-civ="Mme" data-nom="Annie Vidal" data-id="722102" data-departement="Seine-Maritime" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s54" data-civ="M." data-nom="Jean-Pierre Vigier" data-id="607090" data-departement="Haute-Loire" data-circo="(2e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s114" data-civ="M." data-nom="Philippe Vigier" data-id="331582" data-departement="Eure-et-Loir" data-circo="(4e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s389" data-civ="M." data-nom="Patrick Vignal" data-id="606639" data-departement="Hérault" data-circo="(9e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s375" data-civ="Mme" data-nom="Corinne Vignon" data-id="719512" data-departement="Haute-Garonne" data-circo="(3e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s356" data-civ="M." data-nom="Cédric Villani" data-id="722260" data-departement="Essonne" data-circo="(5e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s153" data-civ="M." data-nom="André Villiers" data-id="421348" data-departement="Yonne" data-circo="(2e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s23" data-civ="M." data-nom="Stéphane Viry" data-id="721474" data-departement="Vosges" data-circo="(1re circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s373" data-civ="M." data-nom="Guillaume Vuilletet" data-id="721262" data-departement="Val-d'Oise" data-circo="(2e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s106" data-civ="M." data-nom="Jean-Luc Warsmann" data-id="2952" data-departement="Ardennes" data-circo="(3e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
						<dl data-legislature="15" data-place="s267" data-civ="M." data-nom="Sylvain Waserman" data-id="720746" data-departement="Bas-Rhin" data-circo="(2e circonscription)" data-groupe="Mouvement Démocrate et apparentés"></dl>
						
								
						<dl data-legislature="15" data-place="s89" data-civ="M." data-nom="Éric Woerth" data-id="2960" data-departement="Oise" data-circo="(4e circonscription)" data-groupe="Les Républicains"></dl>
						
								
						<dl data-legislature="15" data-place="s488" data-civ="Mme" data-nom="Martine Wonner" data-id="722268" data-departement="Bas-Rhin" data-circo="(4e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s585" data-civ="M." data-nom="Hubert Wulfranc" data-id="722110" data-departement="Seine-Maritime" data-circo="(3e circonscription)" data-groupe="Gauche démocrate et républicaine"></dl>
						
								
						<dl data-legislature="15" data-place="s296" data-civ="Mme" data-nom="Hélène Zannier" data-id="720318" data-departement="Moselle" data-circo="(7e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s305" data-civ="M." data-nom="Jean-Marc Zulesi" data-id="718962" data-departement="Bouches-du-Rhône" data-circo="(8e circonscription)" data-groupe="La République en Marche"></dl>
						
								
						<dl data-legislature="15" data-place="s122" data-civ="M." data-nom="Michel Zumkeller" data-id="267330" data-departement="Territoire de Belfort" data-circo="(2e circonscription)" data-groupe="UDI, Agir et Indépendants"></dl>
						
								
			</div>
			
		</article>
		
		</div>
		
	</div>

</div>

				</div>
			</div>
		</div>
		
		
			

<script type="text/javascript" src="svg.js" charset="utf-8"></script>

<script type="text/javascript" src="raphael-min.js" charset="utf-8"></script>
<script type="text/javascript" src="raphael.tooltil.js" charset="utf-8"></script>
<script type="text/javascript" src="hemi.js" charset="utf-8"></script>


<?php
$file=fopen("bdd.csv","r");
while(!feof($file))
{
	$content=fgetcsv($file);
	$count=count($content);

		echo $content[0]."\t";
		echo $content[4]."\t";
		if($content[4] == "M"){
?>
<script type="text/javascript">
		"le siege M" == '#0000FF';
</script>
<?php	
		}elseif($content[4]=="F"){
?>
<script type="text/javascript">		
		"le siege F == Rose"	
</script>
<?php
		}
	
echo "<br/>";
}
?>

    <script>
	    var _gaq = [['_setAccount', 'UA-40085081-1'], ['_trackPageview']];
	    (function(d, t) {
	        var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
	        g.async = true; g.src = '//www.google-analytics.com/ga.js'; s.parentNode.insertBefore(g, s);
	    })(document, 'script');
	</script>





	
    </body>
</html>