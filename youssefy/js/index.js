$(document).ready(function(){
	
//	$("#jq1").html('<div class="alert alert-info alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>salut ! </strong>bienvenu sur notre site web.</div>');
	
	//modifie laspect du tire bug h1 presentaion
//	$('h3').addClass('titre3');
	
//	cacher le survole de la div top home 
	$("#home").css('right','-40px');
	$("#home").on('mouseenter',function(){
		$(this).stop().animate({right:'0px'},800);
	});
	$("#home").on('mouseleave',function(){
		$(this).stop().animate({right:'-40px'},800);
	});
	/*$("#btnsrv1").one('click',function(){
		alert('pas disponible pour le moment');
	});*/
	
	
//	Ferme le menu Responsive en un clic
	
	$('.navbar-collapse ul li a').click(function() {
	    $('.navbar-toggle:visible').click();
	});
	$('.navbar a').click(function() {
		if($('#menu_mobile').attr('aria-expanded')=='true'){
			$('.navbar-toggle:visible').click();}
	});
	$('#home').click(function() {
		if($('#menu_mobile').attr('aria-expanded')=='true'){
			$('.navbar-toggle:visible').click();}
	});
	$('.jumbotron').click(function() {
		if($('#menu_mobile').attr('aria-expanded')=='true'){
			$('.navbar-toggle:visible').click();}
	});
	
	$('section').click(function() {
		if($('#menu_mobile').attr('aria-expanded')=='true'){
			$('.navbar-toggle:visible').click();}
//	    $('this').stopPropagation();
	});
	
// attache l'evenement dbclick a toutes las section
//	$('body').delegate('section','dblclick',function(){
//		console.log($(this).html());
//	});
//	ajoute dynamiqueman une nouvell section
	/*var el=$("<section/>");
	el.attr({
		'id':'dynamique',
		'class':'container '
	});
	
	el.appendTo('body');
	$('<h1/>').text("dynamique").appendTo(el).attr({'class':'text-center'});
	$('<p/>').text("bla bla bla").appendTo(el);
	*/
//	ajouter la transparance sur la photo des collaborateurs
	$('#equipe img').hover(
			function(){
				$(this).stop().fadeTo('fast', 0.33);
			},
			function(){
				$(this).stop().fadeTo('fast', 1);
			}
		);
	
//	change laspet du titre en survolen le titre
//	$("section").delegate('h1','mouseenter mouseleave',function(){
//		$(this).toggleClass('accordeon');
//});
	
// info bulle qui suis la souri
/*	$("section img").hover(
			function(e) {
				var bulle=$('<p />');
				bulle.attr('id','bulle');
				bulle.text($(this).attr('alt'));
				bulle.css({'position':'absolute',
					'background-color':'aqua',
					'top':e.pageY+'px',
					'left':e.pageX+'px'});
				$('body').append(bulle);
			},
			function(){
				$('#bulle').remove();
			});
	$('section img').mousemove(function(e){
		$('#bulle').css({
			'top':e.pageY+'px',
			'left':e.pageX+'px'});		
	});*/
//	remanpla change h3 en p.addclass('titre')
//	$("h3").each(function(){
//		$(this).replaceWith('<p class="titre3">'+$(this).html()+'</p>');
//	});

//	affiche une etoil si url externe
	$('a').filter(function(){
		return (this.hostname !== window.location.hostname);
	}).after('<img src="pics/star.png" />');
	
	// AJAX
	$('#lancer').on('click',function(){
		var oXHR= new XMLHttpRequest() ;
//		prepare la requete
		oXHR.open('GET','php/requete3.php',true);
//		assosier la fonction de traitement 
		oXHR.onreadystatechange = function() {
			console.log(oXHR.readyState);
			if((oXHR.readyState==4) && (oXHR.status==200)){ 
//				console.log(oXHR.responseText);				
//				requete3
				$('#reponse').html(oXHR.responseText);
//				$('#tableau').attr('class','table table-bordered table-striped');
				$('#tableau').addClass('table table-bordered table-striped');
//				requete 2
//				var	Data=JSON.parse(oXHR.responseText);
//				var liste = new String() ;
//				$.each(Data , function(key,val) {
//					liste+= val.prenom + '<br/>';
//				});
//				//affiche la reponse				
//				$('#reponse').html(liste);  
			}
		};
//		execute la requeter
		oXHR.send(null);
	});
	// AJAX 2
	$('#text').on('keyup',function(){

		var oXHR= new XMLHttpRequest() ;
//		prepare la requete
		oXHR.open('POST','php/requete4.php',true);

//		assosier la fonction de traitement 
		oXHR.onreadystatechange = function() {
	
			if((oXHR.readyState==4) && (oXHR.status==200)){ 
							
				$('#reponse2').html(oXHR.responseText);
				$('#tableau').attr('class','table table-bordered table-striped');
			}
		};
//		execute la requeter
	
		oXHR.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
		oXHR.send('valeur='+ escape($('#text').val()));
	});
//	click sur une ligne de tableau td si un tableau une colone
	$('#ajax2').delegate('table tr td','click',function(){
		$('#text').val($(this).html());
		console.log($(this).html());
		
	});
	
	//ajax contacte
	$('#envoi').on('click',function(){
		var oXHR= new XMLHttpRequest() ;
		console.log($('#prenom').val());
//		prepare la requete
		oXHR.open('POST','php/requete5.php',true);

//		assosier la fonction de traitement 
		oXHR.onreadystatechange = function() {
		if((oXHR.readyState==4) && (oXHR.status==200)){ 
				console.log(oXHR.responseText);	
				$('#result').html(oXHR.responseText);
			}
		};
//		execute la requeter
	
		oXHR.setRequestHeader('Content-Type','application/x-www-form-urlencoded'); 
		oXHR.send('prenom='+ escape($('#prenom').val())+'&nom='+ escape($('#nom').val())+'&email='+ escape($('#email').val())+'&comment='+ escape($('#comment').val()));
	});
	//traitement ajax3 film IMDb
	$('#lancer3').on('click',function(){
		var sURL='http://www.omdbapi.com/?t=first+blood&y=&plot=short&r=json';
		$.getJSON(sURL)
		.done(function(data){
			console.log(data.Title);
			var poster=$('<img />');
			poster.attr('src',data.Poster);
			poster.appendTo($('#reponce3'));
		})
		.fail(function(jqXHR, sMsg, iErr){
			console.log('Erreur no ' + iErr + ' : ' + sMsg);
		})
		
	});

});

























