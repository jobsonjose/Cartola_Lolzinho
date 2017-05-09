function input(name){
		var input = "<input type='checkbox' class='remove' name="+name+"> <br>";
		return input;
		// Eu Não vou entender essa function no futuro
	}
	function label(value){
		var label = "<label class='remove'>"+value+"</label>";
		return label;
	}	
	function Laform(id, nome){
		$(id).append(label(nome))
	}
	function Inform(id, nome){
		$(id).append(input(nome));
	}	
	function form(id, nome){
		return Laform(id, nome)+Inform(id, nome);
	}
	function Quebra_de_Linha(id){
		$(id).append("<br>");
	}
	function hr(id){
		$(id).append("<hr>");
	}
	function slid(id, img){
		$(id).append("<img src="+img+">");
	}
	function stop(){
		clearInterval(foto);
		
	}
	$("#DCs").on("click",function(){
		$(".remove").remove();
		$("#remove").remove();
		$
		setTimeout(function() {clearInterval(foto)},100);
			Laform("#DC", "Escolha os Melhores Herois da DC Universal (Para você):");


	})
	$("#Ma").on("click", function(){
		$(".remove").remove();
		var Herois = ["Homen-de-Ferro","Viuva-Negra","Punho-de-Ferro","Homen-Aranha","Capitao-America","Luke","Jessica-Jones","NOVA","Demolidor","Pantera-Negra","Nick-Furyan","Deadpool","Homen-Aço","Adolescente-Super-Sonica"];
		var Viloes = ["Thanos", "Loki", "Ultron", "Venom", "Dr.Octoplos", "Homen-Areia", "Kill-Grave", "Cascavel", "Rei-do-Crime", "Soldado-Invernal","Misterio", "Duende-Verde","Apocalips","Fenix","Electron","Rhino"];
		var Img = ["marvel-0.png","marvel-1.jpg","marvel-2.jpg","marvel-3.jpg","marvel-4.jpg"];

		$("#div").append("<div class='remove' id='Marvel'></div>");
		Laform("#Marvel", "Escolha os Melhores Herois da Marvel (Para você):");
		Quebra_de_Linha("#Marvel");
		for (var i = 0; i < Herois.length; i++) {
					form("#Marvel",Herois[i]);  //Vai gerar Os input's com todos os Herois que estão armazenados no var Herois;
		}
		hr("#Marvel");
				Laform("#Marvel", "Escolha os Melhores Viloes da Marvel (Para você):")
				Quebra_de_Linha("#Marvel");
				for (var i = 0; i < Viloes.length; i++) {
					form("#Marvel", Viloes[i]);
				}
				var i = 0 
				// var time = 1000;
				// var cont = 0
				
				var foto = setInterval(function(){
					$("#remove").remove();
					$("#img").append("<img id='remove' src='"+Img[i]+"'>");
					i++;
					i %= Img.length;
					// cont++;
					// console.log(i); Estava testando Como estava o andamento da variavel i
				},1000);	

		$("#DCs").on("click",function(){
			setTimeout(function() {clearInterval(foto)
			$("#remove").remove();
			},100);
		})
							

	});

	