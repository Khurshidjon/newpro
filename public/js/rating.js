// $(function(){
// 	var count = 0;
// 	var starsAll = 10;//Всего звезд
// 	var voteAll = 3;//Всего голосов
// 	var idShop = 12;//id статьи
// 	var starWidth = 17;//ширина одной звезды
// 	var ratingUser = 4;//старий райтинг пользователя если нет то ноль
//
// 	var rating = (starsAll/voteAll); //Старый рейтинг
// 	rating = Math.round(rating*100)/100;
// 	if(isNaN(rating)){
// 		rating = 0;
// 	}
// 	// var ratingResCss = ratingUser*starWidth; //старый рейтинг в пикселях
//
// 	// $("#ratDone").css("width", ratingResCss);
// 	$("#ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");
//
// 	var coords;
// 	var stars;  //кол-во звезд при наведении
// 	var ratingNew;  //Новое количество звезд
//
// 	$("#rating").mousemove(function(e){
// 		var offset = $("#rating").offset();
// 		coords = e.clientX - offset.left; //текушая координата
// 		stars = Math.ceil(coords/starWidth);
// 		starsCss = stars*starWidth;
// 		$("#ratHover").css("width", starsCss).attr("title", stars+" из 5");
// 	});
// 	$("#rating").mouseout(function(){
// 		$("#ratHover").css("width", 0);
// 	});
// 	$("#rating").click(function(){
//
// 		var aaa = ratingUser - stars;
// 		var starsNew = starsAll - aaa;
//
// 		var ratingNew = starsNew/voteAll;
//
// 		ratingNew = Math.round(ratingNew*100)/100;
//
// 		var newRatingResCss = ratingNew * starWidth;
// 		$("#ratDone").css('width', newRatingResCss);
// 		$("#ratStat").html("Рейтинг: <strong>"+ratingNew+"</strong> Голосов: <strong>"+voteAll+"</strong>");
//
// 		// $.ajax({
// 		// 	type: "GET",
// 		// 	url: "/eshop/rating",
// 		// 	data: {"id": idShop, "id_user": <?=$user_id?>,"rating": stars},
// 		// 	cache: false,
// 		// 	success: function(response){
// 		// 		if(response == "ok"){
// 		// 			var newRat = response+"px";
// 		// 			var newRatingResCss = ratingNew * starWidth;
// 		// 			$("#ratDone").css('width', newRatingResCss);
// 		// 			$("#ratStat").html("Рейтинг: <strong>"+ratingNew+"</strong> Голосов: <strong>"+voteAll+"</strong>");
// 		// 		}else{
// 		// 			$("#ratStat").text(response);
// 		// 		}
// 		// 	}
// 		// });
// 		// return false;
// 	});
// });