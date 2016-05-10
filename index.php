<html>
	<head>
		<?php include('partials/_header.php') ?>
		<?php include('partials/_navbar.php') ?>
	</head>
	<body class="bodyInfo">
		<div class="container margintTopDiv" id="div_main">
			<div class="row">
				<div class="col=xs-12 col-sm-3"></div>
				<div class="col=xs-12 col-sm-6"> 
					<center><img class="img-responsive" src="images/logo1.png"></center></br></br>
				</div>
				<div class="col=xs-12 col-sm-3"></div>
			</div>
			<div class="row">
                <div class="col-xs-12 col-sm-3"></div>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-4">
                        <input type="text" class="form-control" id="txt_name" placeholder="Username" required />
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <select class="form-control" id="cb_location">
                            <option id="na">NA</option>
                            <option id="br">BR</option>
                            <option id="eune">EUNE</option>
                            <option id="euw">EUW</option>
                            <option id="kr">KR</option>
                            <option id="lan">LAN</option>
                            <option id="las">LAS</option>
                            <option id="oce">OCE</option>
                            <option id="tr">TR</option>
                            <option id="ru">RU</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                </div>
			</div><!-- ROW -->  
            <div class="row">
                <div class="col-xs-12 col-sm-5"></div>
                <div class="col-xs-12 col-sm-2">
                    <button type="submit" class="btn btn-default btn-lg btn-block btn-rowaling" onclick="loadItems();return false;">Search</button>
                </div>
                <div class="col-xs-12 col-sm-5"></div>
            </div>
		</div><!-- CONTAINER --> 
		<?php include('partials/_common_footer.php') ?> 	
	</body>
</html>