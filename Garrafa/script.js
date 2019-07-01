$(document).ready(function() {

	const floatPath1 = {
		curviness: 1.25,
		autoRotate: false,
		values: [
			{x: 100, y: -20},
			{x: 300, y: 0},
			{x:500, y:100},
			{x:750 ,y: -30},
			{x: 350, y: -30},
			{x: 600, y: 80},
			{x: 800, y: 0},
			{x: window.innerWidth + 100, y: -20}
		]
	};

	const floatPath2 = {
		curviness: 1.25,
		autoRotate: false,
		values: [
			{x: window.innerWidth/3, y: -100},
			{x: window.innerWidth/2, y: 0},
			{x: window.innerWidth + 100, y: -150}
		]
	};

	const floatPath3 = {
		curviness: 1.25,
		autoRotate: false,
		values: [
			{x: window.innerWidth/2, y: -80},
			{x: window.innerWidth + 100, y: 0}
		]
	};

	//const tween = new TimelineLite();


	const tween = new TimelineLite({
		onComplete:function(){
			this.restart();
		}
	});

	tween.add(
		[
		TweenLite.to(".bottle1", 16,{
			bezier: floatPath1,
			ease: Power1.easeInOut
		}),
		TweenLite.to(".bottle2", 15,{
			bezier: floatPath2,
			ease: Power1.easeInOut
		}),
		TweenLite.to(".bottle3", 11,{
			bezier: floatPath3,
			ease: Power1.easeInOut
		})
		]
	);


	// Botão criar
	$("#btnCreate").click(function() {

		// Pausando as animações
		tween.pause(0);
		//tween.clear();﻿﻿

		// Escondendo os botões de criar e pescar
		$("#btnCreate").css({
			"display": 'none'
		});
		$("#btnHook").css({
			"display": 'none'
		});
		$("#logo").css({
			"display": 'none'
		});

		// Criando a div da mensagem
		$('.animation').append("<div id='message'></div>");
		$("#message").css({
			"margin": '0 auto',
			"width": '50%',
			"height": '90%',
			"background": "url('./img/papel.jpg')",
			"background-repeat": "no-repeat",
			"background-size": "cover",
			"margin-top": "5px"
		});

		var clique = 0;

		$("#message").click(function() {

			if(clique == 0){
				// Criando o selo
				$("#message").append('<div id="local1"></div>');

				// Sorteando a cor do selo
				var cor = "";
				var numero = Math.floor((Math.random() * 3)+1);
				if(numero == 1){
					cor = "red";
				}else if(numero == 2){
					cor = "green";
				}else{
					cor = "blue";
				}

				// Mudando o visual do selo
				$("#local1").css({
					"width": '32%',
					"height": '20%',
					"border-style": "solid",
					"border-color": cor,
					"color": cor,
					"font-size": "22px",
					"text-align": "center",
					"padding-top": "22px",
					"float": "left"
				});

				/*
				RETORNA A CIDADE IMPRECISAMENTE
				$.ajax({
		            type: 'GET',
		            url: "https://geoip-db.com/json/",
		            cache: false,
		            success: function(data){
		                console.log(data);
		            }

	        	});

	        	http://api.ipstack.com/200.146.198.75?access_key=f7f0ff08a74c90c5329693c573b8cda3
	        	*/


				//RETORNA LATITUDE E LONGITUDE
				if (navigator.geolocation){
				    	navigator.geolocation.getCurrentPosition(showPosition);
				}

				var latitude = "";
				var longitude = "";
				function showPosition(position){
					latitude = position.coords.latitude;
					longitude = position.coords.longitude;
					//console.log("Latitude: " + position.coords.latitude +
	  				//"\nLongitude: " + position.coords.longitude);
	  			}


		        // Checando a cidade e o país do usuário
	        	$.ajax({
		            type: 'GET',
		            url: "http://api.ipstack.com/200.146.198.75?access_key=f7f0ff08a74c90c5329693c573b8cda3",
		            cache: false,
		            success: function(data){
		            	var cidade = data.city;
						var pais = data.country_name;
						var now = new Date;
						var dia = now.getDate();
				        var mes = parseInt(now.getMonth()) + 1;
				        var ano = now.getFullYear();

				        //Colocando o texto no selo
		    			document.getElementById("local1").innerHTML = cidade + "<br>" + pais + "<br>"
		        		+ ano + "-" + mes + "-" + dia;

				        $(".animation").append("<button id='send'>ENVIAR</button>");
				        $("#send").css({
				        	"margin-top": "10px"
				        });

				        $("#send").click(function() {
				        	// Inserindo no banco de dados
				        	$.ajax({
					            url: "inserir.php",
					            type: "POST",
					            data: {
					            	city: cidade,
					            	country: pais,
					            	day: dia,
					            	month: mes,
					            	year: ano,
					            	color: cor,
					            	lat: latitude,
					            	lon: longitude
					            },
					            success: function(result){

					            }
					        });

				        	// Esconde a menssagem
				        	$("#send").fadeOut("slow");
				        	$("#local1").fadeOut("slow");
				        	$("#message").fadeOut("slow");
				        	$("#send").remove();
				        	$("#local1").remove();
				        	$("#message").remove();

				        	// Faz a animação do papel entrando na garrafa
				        	$(".animation").append("<img class='paperroll' src='./img/enrolado.png'>");
				        	$(".paperroll").css({
				        		"height": "90px",
				        		"width": "140px",
				        		"position": "absolute",
				        		"top": "39%",
				        		"left": "65%"
				        	});

				        	$(".animation").append("<img class='emptybottle' src='./img/garrafatransparente.png'>");
				        	$(".emptybottle").css({
				        		"height": "280px",
				        		"position": "absolute",
				        		"top": "25%",
				        		"left": "40%",
				        		"transform": "rotate(90deg)"
				        	});

				        	const path = {
								curviness: 1.25,
								autoRotate: false,
								values: [
									{x: -287, y: 0}
								]
							};

							const path2 = {
								curviness: 1.25,
								autoRotate: false,
								values: [
									{x: -334, y: 0}
								]
							};

							const tween2 = new TimelineLite({
								onComplete:function(){
									$(".paperroll").fadeOut(1);
									$(".emptybottle").fadeOut(1);;

									$("#btnCreate").css({
										"display": 'inline',
									});

									$("#btnHook").css({
										"display": 'inline',
									});

									$("#logo").css({
										"display": 'inline'
									});

									tween.restart();
								}
							});

							tween2.add(
								[
								TweenLite.to(".paperroll", 6,{
									bezier: path,
									ease: Power1.easeInOut
								})
								]
							);

				        });

		            }

	        	});
	        	clique = 1;
			}
		});
	});




	// Pescar
	$("#btnHook").click(function() {
		// Pausando as animações
		tween.pause(0);
		//tween.clear();﻿﻿

		// Escondendo os botões de criar e pescar
		$("#btnCreate").css({
			"display": 'none'
		});
		$("#btnHook").css({
			"display": 'none'
		});

		$("#logo").css({
			"display": 'none'
		});

		// Faz a animação do papel saindo da garrafa
    	$(".animation").append("<img class='paperroll' src='./img/enrolado.png'>");
    	$(".paperroll").css({
    		"height": "90px",
    		"width": "140px",
    		"position": "absolute",
    		"top": "39%",
    		"left": "44%"
    	});

    	$(".animation").append("<img class='emptybottle' src='./img/garrafatransparente.png'>");
    	$(".emptybottle").css({
    		"height": "280px",
    		"position": "absolute",
    		"top": "25%",
    		"left": "40%",
    		"transform": "rotate(90deg)"
    	});

    	const path = {
			curviness: 1.25,
			autoRotate: false,
			values: [
				{x: +287, y: 0}
			]
		};

		const path2 = {
			curviness: 1.25,
			autoRotate: false,
			values: [
				{x: +334, y: 0}
			]
		};

		var animPronta = 0;
		const tween3 = new TimelineLite({
			onComplete:function(){
				$(".paperroll").fadeOut(1);
				$(".emptybottle").fadeOut(1);


				// Criando a div da mensagem
				$('.animation').append("<div id='message'></div>");
				$("#message").css({
					"margin": '0 auto',
					"width": '50%',
					"height": '90%',
					"background": "url('./img/papel.jpg')",
					"background-repeat": "no-repeat",
					"background-size": "cover",
					"margin-top": "5px"
				});

				var tamanho;
				var idCarta;
				var latAntiga;
				var longAntiga;
				//Verificando selos daquela carta
				$.ajax({
		            url: "verificar.php",
		            type: "POST",
		            async: false,
		            data: {
		            	teste: "1"
		            },
		            success: function(result){
		            	var linhasDeDados = result.split(";");
		            	tamanho = linhasDeDados.length - 2;
		            	var corte = linhasDeDados[linhasDeDados.length-1].split(",");
		            	idCarta = corte[0];
		            	distancia = parseFloat(corte[1]).toFixed(2);


		            	$("#message").append("<div id='idDist'></div>");
		            	$("#idDist").css({
		            		"width": "100%",
		            		"height": "15px",
		            		"margin-bottom": "5px"
		            	});
		            	$("#idDist").text("Distância Viajada: " + distancia + " km");

		            	for (var i = 0; i < linhasDeDados.length-1; i++) {
							var atributos = linhasDeDados[i].split(",");

							//Criando o selo
							$("#message").append("<div id='local" + i + "'></div>");

							// Mudando o visual do selo
							$("#local" + i).css({
								"width": '32%',
								"height": '20%',
								"border-style": "solid",
								"font-size": "22px",
								"text-align": "center",
								"padding-top": "22px",
								"float": "left"
							});

							for(var j = 0; j < atributos.length; j++){
								var texto = document.getElementById("local" + i).innerHTML;
								if(j == 3){
									$("#local" + i).css({
										"border-color": atributos[3],
										"color": atributos[3]
									});
								}else if(j == 4){
									latAntiga = atributos[4];
								}else if(j == 5){
									longAntiga = atributos[5];
								}else{
									document.getElementById("local" + i).innerHTML = texto + atributos[j] + "<br>";
								}

							}
						}
		            }
		        });

		        var clique = 0;
				$("#message").click(function() {

					if(clique == 0){
						tamanho = tamanho + 1;
						// Criando o selo
						$("#message").append("<div id='local" + tamanho + "'></div>");

						// Sorteando a cor do selo
						var cor = "";
						var numero = Math.floor((Math.random() * 3)+1);
						if(numero == 1){
							cor = "red";
						}else if(numero == 2){
							cor = "green";
						}else{
							cor = "blue";
						}

						// Mudando o visual do selo
						$("#local" + tamanho).css({
							"width": '32%',
							"height": '20%',
							"border-style": "solid",
							"border-color": cor,
							"color": cor,
							"font-size": "22px",
							"text-align": "center",
							"padding-top": "22px",
							"float": "left"
						});

				        // Checando a cidade e o país do usuário
			        	$.ajax({
				            type: 'GET',
				            url: "http://api.ipstack.com/200.146.198.75?access_key=f7f0ff08a74c90c5329693c573b8cda3",
				            cache: false,
				            success: function(data){
				            	var cidade = data.city;
								var pais = data.country_name;
								var now = new Date;
								var dia = now.getDate();
						        var mes = parseInt(now.getMonth()) + 1;
						        var ano = now.getFullYear();

						        //Colocando o texto no selo
				    			document.getElementById("local" + tamanho).innerHTML = cidade + "<br>" + pais + "<br>"
				        		+ ano + "-" + mes + "-" + dia;

				        		//RETORNA LATITUDE E LONGITUDE
								if (navigator.geolocation){
									navigator.geolocation.getCurrentPosition(showPosition);
									setTimeout(delay, 3000);
								}


				        		var latNova = "";
								var longNova = "";
								function showPosition(position){
									latNova = position.coords.latitude;
									longNova = position.coords.longitude;
									//console.log("Latitude: " + position.coords.latitude +
					  				//"\nLongitude: " + position.coords.longitude);
					  			}

					  			function delay(){
									var R = 6371; // km
									var x1 = latNova-latAntiga;
									var dLat = x1 * Math.PI / 180;
									var x2 = longNova-longAntiga;
									var dLon = x2 * Math.PI / 180;
									var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
									                Math.cos(latAntiga * Math.PI / 180) * Math.cos(latNova * Math.PI / 180) *
									                Math.sin(dLon/2) * Math.sin(dLon/2);
									var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
									var d = R * c;

									var nova = (parseFloat(distancia) + parseFloat(d)).toFixed(2);
									$("#idDist").text("Distância Viajada: " + nova + " km");

									//console.log("D: " + d);
									$(".animation").append("<button id='send'>ENVIAR</button>");
							        $("#send").css({
							        	"margin-top": "10px"
							        });

							        $("#send").click(function() {
						        	// Inserindo no banco de dados
							        	$.ajax({
								            url: "atualizar.php",
								            type: "POST",
								            data: {
								            	city: cidade,
								            	country: pais,
								            	day: dia,
								            	month: mes,
								            	year: ano,
								            	color: cor,
								            	lat: latNova,
								            	long: longNova,
								            	dist: d,
								            	id: idCarta
								            },
								            success: function(result){

								            }
								        });

							        	// Esconde a menssagem
							        	$("#send").fadeOut("slow");
							        	$("#local" + tamanho).fadeOut("slow");
							        	$("#message").fadeOut("slow");
							        	$("#send").remove();
							        	$("#local" + tamanho).remove();
							        	$("#message").remove();

							        	// Faz a animação do papel entrando na garrafa
							        	$(".animation").append("<img class='paperroll' src='./img/enrolado.png'>");
							        	$(".paperroll").css({
							        		"height": "90px",
							        		"width": "140px",
							        		"position": "absolute",
							        		"top": "39%",
							        		"left": "65%"
							        	});

							        	$(".animation").append("<img class='emptybottle' src='./img/garrafatransparente.png'>");
							        	$(".emptybottle").css({
							        		"height": "280px",
							        		"position": "absolute",
							        		"top": "25%",
							        		"left": "40%",
							        		"transform": "rotate(90deg)"
							        	});

							        	const path = {
											curviness: 1.25,
											autoRotate: false,
											values: [
												{x: -287, y: 0}
											]
										};

										const path2 = {
											curviness: 1.25,
											autoRotate: false,
											values: [
												{x: -334, y: 0}
											]
										};

										const tween2 = new TimelineLite({
											onComplete:function(){
												$(".paperroll").fadeOut(1);
												$(".emptybottle").fadeOut(1);;

												$("#btnCreate").css({
													"display": 'inline',
												});

												$("#btnHook").css({
													"display": 'inline',
												});

												$("#logo").css({
													"display": 'inline'
												});

												tween.restart();
											}
										});

										tween2.add(
											[
											TweenLite.to(".paperroll", 6,{
												bezier: path,
												ease: Power1.easeInOut
											})
											]
										);

						        	});
								}

				            }

			        	});
			        	clique = 1;
					}
				});


			}
		});

		tween3.add(
			[
			TweenLite.to(".paperroll", 5,{
				bezier: path,
				ease: Power1.easeInOut
			})
			]
		);



	});
});
