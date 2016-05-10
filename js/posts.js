function getChampions() {
    var query_string = {};
    var query = window.location.search.substring(1);
    query_string = getName(query);
    $("#div_table").empty();
    $("#div_main").css('display', 'none');
    var userName = query_string["name"];
    var location = query_string["loc"];
    if (userName != "") {
        $.ajax({
            type: "POST",
            dataType: "json",
            data: {
                "req_type": "getChampions",
                "req_userName": userName,
                "req_location": location
            },
            url: "getChampionMastery.php",
            success: function (data) {
                var url = "http://ddragon.leagueoflegends.com/cdn/6.9.1/img/profileicon/" + data[0]["userInfo"][userName].profileIconId + ".png";
                document.getElementById("div_userInfo").innerHTML = ("<center><img src='" + url + "'>" + "<h2><b>"+ data[0]["userInfo"][userName].name + "</b></h2></center>");
                var table = "<table id='table_champions' class='table dt-responsive table-hoves table-bordered table-striped wellbg'" +
							"cellspacing='0' class='display' width='100%'>" +
							"<tbody>";
                $.each(data[1]['champions'], function (i, item) {
                    var championId = data[1]['champions'][i].championId;
					var championName = data[2]['championsInfo'][championId].name;
					var championKey = data[2]['championsInfo'][championId].key;
					var championTitle = data[2]['championsInfo'][championId].title;
					table += "<tr><div><td>"+
							 "<center><img src = http://ddragon.leagueoflegends.com/cdn/6.9.1/img/champion/" + championKey + ".png></center>" +
							 "</td><td>"+							
							 "<b>" + championName         + "</b>" + "</br>" +
							 "<b>Level: "                 + "</b>" + data[1]['champions'][i].championLevel  + "</br>" +
							 "<b>Champion Points: "       + "</b>" + data[1]['champions'][i].championPoints + "</br>";
					if(data[1]['champions'][i].highestGrade === undefined)
						table += "<b>Highest Grade: "         + "</b>Not available</br>";					
					else
						table += "<b>Highest Grade: "         + "</b>" + data[1]['champions'][i].highestGrade   + "</br>";
					if(data[1]['champions'][i].championPointsUntilNextLevel == "0")						
						table += "<b>Points for Next Level: " + "</b>Maxed out</br>";				
					else
						table += "<b>Points for Next Level: " + "</b>" + data[1]['champions'][i].championPointsUntilNextLevel + "</br>";
					table+= "</td></div></tr>";
                });
                table += "</tbody></table>";
                var div = document.getElementById("div_table");
                div.innerHTML = table;
                $("#div_main").slideDown("slow");
            },
        });
    }
}

function loadItems() {
    var userName = ((document.getElementById("txt_name").value).toLowerCase()).replace(/ /g, "");
    var location = (document.getElementById("cb_location").value).toLowerCase();
    $.ajax({
        type: "POST",
        dataType: "json",
        data: {
            "req_type": "setCookie",
            "req_userName": userName,
            "req_location": location
        },
        url: "getChampionMastery.php",
        success: function (data) {
            if (data)
                window.location = "info.php?name=" + userName + "&loc=" + location;
            else
                alert("Enter a valid username!");
        },
    });
}