<html>
	<head>
		<?php include('partials/_header.php') ?>
		<?php include('partials/_navbar.php') ?>
	</head>
	<body class="bodyInfo">
		<div class="container marginTopDivInfo" id="div_main">
			<div class="row">
				<div class="col-xs-12 col-sm-3"></div>
				<div class="col-xs-12 col-sm-6 well" id="div_userInfo">
				</div>
				<div class="col-xs-12 col-sm-3"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-3">
				</div>
				<div class="col-xs-12 col-sm-6 well wellbg">
					<div class="table-responsive" id="div_table">
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
				</div>
			</div><!-- ROW -->  
		</div><!-- CONTAINER --> 
		<?php include('partials/_common_footer.php') ?> 
        <script>
            $(document).ready(function () {
                getChampions();
            });
        </script>	
	</body>
</html>