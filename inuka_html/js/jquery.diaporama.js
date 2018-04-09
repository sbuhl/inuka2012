(function($){ //1
	$.fn.diaporama = function(options) {
		
		var defaults = {
			delay:5,
			animationSpeed: "slow",
			controls:false
		};
		//2 Appliquer le diaporama à chacun des éléments ciblés
		this.each(function(){
			
		// On attribue à la variable obje, l'objet courant (le diaporama courant)
		var obj = $(this);
		
		// On teste s'il y a plus d'une image, sinon le diaporama n'est pas nécessaire
		if($(obj).find("li").length > 1){
			
			//On va exécuter la fonction nextElt à quaque intervalle de temps
    		var inter = setInterval(function(){nextElt(options)}, (options.delay*1000));
			
			//On enregistre le sens de rotation
			var sens = "right";
			
			//Par défaut, le diaporama n'est pas en pause
			var pause = false;
			
			//On cache tous les éléments de la liste
			$(obj).find("li").hide();
			
			//Le premier élément s'affiche progressivement et se voit attribuer la classe 'active'
			$(obj).find("li:first-child").addClass("active").fadeIn(options.animationSpeed);
		
		//Affiche l'élément suivant
		function nextElt(options)
		{
			//On cache de manière progressive l'image active
			$(obj).find("li.active").fadeOut(options.animationSpeed);
			
			//Si l'image active courante n'est pas la dernière image de la liste
			if(!$(obj).find("li.active").is(":last-child"))
			{
				//Alors on cherche l'image suivante (".next()"), on lui ajoute la classe"active",
				//Et on retire cette classe à l'image précédente
				$(obj).find("li.active").next().addClass("active").prev().removeClass("active");
				
				//On affiche la nouvelle image active progressivement
				$(obj).find("li.active").fadeIn(options.animationSpeed);
			}
			//L'image est le dernière de la liste
			else
			{
				//On fait la meême chose mais en prenant la première image de la liste via le sélecteur "first-child"
				$(obj).find("li:first-child").addClass("active").fadeIn(options.animationSpeed);
				$(obj).find("li:last-child").removeClass("active");
			}
		}
		// Affiche l'élément précédent
 
                function prevElt(options)
                {
                    $(obj).find("li.active").fadeOut(options.animationSpeed);
 
                    if(!$(obj).find("li.active").is(":first-child"))
                    {
                        $(obj).find("li.active").prev().addClass("active").next().removeClass("active");
                        $(obj).find("li.active").fadeIn(options.animationSpeed);
 
                    }
                    else
                    {
                        $(obj).find("li:last-child").addClass("active").fadeIn(options.animationSpeed);
                        $(obj).find("li:first-child").removeClass("active");
                    }
				}}});
		
		return this; //3 Continuer le chainage JQuery
	};
})(jQuery);
