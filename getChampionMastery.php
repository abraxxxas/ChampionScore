<?php
    if($_POST["req_type"] == "getChampions")
    {
        $apiKey = "02279a23-0702-4044-91bf-26738c5090f0";
        $name = str_replace(" ", "", $_POST["req_userName"]);
        $location = $_POST["req_location"];

        $url = "https://". $location .".api.pvp.net/api/lol/". $location ."/v1.4/summoner/by-name/". $name ."?api_key=". $apiKey;
        $json_userInfo = json_decode(file_get_contents($url), true);
        $locationAPI = "";

        switch($location)
        {
            case "euw":
                $locationAPI = "EUW1";
                break;
            case "las":
                $locationAPI = "LA2";
                break;
            case "ru":
                $locationAPI = "RU";
                break;
            case "tr":
                $locationAPI = "TR1";
                break;
            case "kr":
                $locationAPI = "KR";
                break;
            case "jp":
                $locationAPI = "JP1";
                break;
            case "na":
                $locationAPI = "NA1";
                break;
            case "br":
                $locationAPI = "BR1";
                break;
            default:
                $locationAPI = substr($location, 0, -1) . "1";
        }

        $id = $json_userInfo[$name]["id"];
        $url = "https://". $location .".api.pvp.net/championmastery/location/". $locationAPI ."/player/". $id ."/champions?api_key=". $apiKey;
        $json_champions = json_decode(file_get_contents($url), true);

        $json_championName = json_decode(file_get_contents("json/champions.json"), true);

        $data = array(array('userInfo' => $json_userInfo), array('champions' => $json_champions), array('championsInfo' => $json_championName));
        echo json_encode($data);
    }

    if($_POST["req_type"] == "setCookie")
    {
        $apiKey = "02279a23-0702-4044-91bf-26738c5090f0";
        $name = str_replace(" ", "", $_POST["req_userName"]);
        $location = $_POST["req_location"];

        $url = "https://". $location .".api.pvp.net/api/lol/". $location ."/v1.4/summoner/by-name/". $name ."?api_key=". $apiKey;
        $json_userInfo = json_decode(@file_get_contents($url), true);
        if(!is_null($json_userInfo))
        {
            $name = str_replace(" ", "", $_POST["req_userName"]);
            setcookie("loggedUser", $name);
            setcookie("locationUser", $location);
            echo "1";
        }
        else
            echo "0";
    }
?>