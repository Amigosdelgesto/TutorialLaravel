<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial</title>
	<link rel="stylesheet" href={{asset("css/normalize.css");}}>
	<link rel="stylesheet" href={{asset("css/foundation.css");}}>
	<link rel="stylesheet" href={{asset("css/style.css");}}>
	<script src={{asset("js/vendor/custom.modernizr.js")}}></script>
</head>
<body>

	<header class="hide-for-small-only">
		<div class="row">
			<h2 id="title" style="color:#ffffff;">Tutorial de Laravel</h2>
		</div>
	</header>
	<section id="main-content">
		@yield('content')
	</section> 
	<script src={{asset("js/vendor/jquery.js");}}></script>
	<script src={{asset("js/foundation.min.js");}}></script>
	<script>
		$(document).foundation();
	</script>
</body>
</html>