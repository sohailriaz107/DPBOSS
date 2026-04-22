
<div id="top"></div>
<header class="bdr mb-1">
	<a href="#">
		<img src="img/logo.webp" alt="Image of dpboss.boston" width="220" height="82.324">	
	</a>
</header>
<div class="page">
	<a class="btn btn-prev" onclick="gotoPage('prev')">
		<span>&laquo;</span>
		<b></b>
		Prev
	</a>
	<a class="btn btn-next" onclick="gotoPage('next')">
		Next
		<b></b>
		<span>&raquo;</span>
	</a>
</div>
<input id="fullUrl" type="hidden" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
<input id="currFileName" type="hidden" value="<?php echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>">
<script src="css-js/app.js"></script>
