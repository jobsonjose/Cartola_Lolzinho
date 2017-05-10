<html>
<head>
	<script src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
	<body>
	<div id='centralizar'>
	<div id="cronometro">
		<div id="relogio"></div>
	</div>
	<div class="buttons">
		<button id="start">|></button>
		<button id="reset">reset</button>
		<button id="Stop">||</button>
		<button id="recomecar">Recomeçar</button>
	</div>
	</div>

	<script>
		
		function time(min, seg, cent){
			$("#relogio").append("<p class='remove'>"+min+"</p>");
			$("#relogio").append("<p class='remove'>"+seg+";</p>");
			$("#relogio").append("<p class='remove'>"+cent+";</p>");
		}
				var min = 00;
				var seg = 00;
				var mil = 000;
				time(min, seg, mil);
			//Apartir de agora faz ser feito um EventList();

		$("#start").on("click", function inicio(){
			$("#start").attr('disabled','disabled');
			$("#Stop").removeAttr('disabled');
			$("#recomecar").attr('disabled','disabled');
			$("#reset").removeAttr('disabled');

			
		var	start = setInterval(function(){
			$(".remove").remove();
			mil += 120;
			if(mil >= 1000){
				seg += 1;
				mil = 0;
			}
			if(seg == 60){
				seg = 0;
				min += 1 ;
			}
			time(min, seg, mil);
			
			console.log(mil);
			console.log(seg);

		},100);

		$("#reset").on("click", function(){
			$(".remove").remove();
			cent = 00;
			seg = 00;
			min = 00;
			time(min, seg, 00);
			clearInterval(start);
			$("#start").removeAttr('disabled')
			$("#Stop").attr('disabled','disabled');
		})

		$("#Stop").on("click",function(){
			$("#start").attr('disabled', 'disabled');
			$("#reset").attr('disabled', 'disabled');
			$("#recomecar").removeAttr('disabled');
			clearInterval(start);

		})

		 $("#recomecar").on("click", inicio);
		 
			


	});

	</script>
	</body>
</html>