<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Instant Search</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,600">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.css">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>


<div class="container">


	<div class="row">
		<div class="col-md-3">
			<h3 class="title">Algolia instant search</h3>
		</div>

		<div class="col-md-9">
			<div id="search-input"></div>
			<div id="search-input-icon"></div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-3">
			<div id="manufacturer" class="facet"></div>
			<div id="discipline" class="facet"></div>
			<div id="suspension" class="facet"></div>
			<div id="price" class="facet"></div>
		</div>

		<div class="col-md-9">
			<div id="sort-by-wrapper"><span id="sort-by"></span></div>
			<div id="stats"></div>
			<div id="hits"></div>
			<div id="pagination"></div>
		</div>
	</div>
</div>



<script type="text/html" id="hit-template">
	<div class="hit">
		<div class="hit-content">
			<h3 class="hit-price">$@{{price}}</h3>
			<h2 class="hit-name">@{{{_highlightResult.name.value}}}</h2>
			<p class="hit-data">
				Brand: <strong>@{{{ _highlightResult.manufacturer.value }}}</strong>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;
				<span class="hit-disciplines">
					Disciplines: @{{#disciplines}} <strong class="hit-discipline">@{{.}}</strong> @{{/disciplines}}
				</span>
			</p>
			<p class="hit-description">@{{{_highlightResult.description.value}}}</p>
		</div>
	</div>
</script>


<script type="text/html" id="no-results-template">
	<div id="no-results-message">
		<p>We didn't find any results for the search <em>"@{{query}}"</em>.</p>
		<a href="." class="clear-all">Clear search</a>
	</div>
</script>


<script src="https://cdn.jsdelivr.net/instantsearch.js/1/instantsearch.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
