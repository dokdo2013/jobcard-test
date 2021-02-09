<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stackedCards.css">
    <script src="stackedCards.min.js"></script>

    <style>
    		*, *:before, *:after {
			box-sizing: border-box;
		}
		body {
			color: #444;
		}
		html {
			height: 100%;
		}
		body {
			font-family: "Roboto", sans-serif;
			width:  100%;
			height: 100%;
			min-height: 100%;
			margin: 0px;
			padding: 0px;
			background-color: #eee;
			background-color: #fff;
		}

		.stacked-cards h2 {
			text-align: center;
			position: relative;
			top: -20px;
		}

		.intro {
			max-width: 600px;
			margin: 20px auto;
			text-align: center;
		}

		.container-fuild {
			max-width: 80%;
			margin: 0 auto;
		}

		.container-fixed {
			max-width: 767px;
			margin: 0 auto;
		}

		.divider {
			max-width: 500px;
			margin: 25px auto;
			background-color: #ccc;
			height: 2px;
			width: 100%;
		}

		.stacked-cards {
			padding-top: 40px;
			padding-bottom: 15px;
		}

		.stacked-cards-fanOut {
			padding-bottom: 40px;
		}

		.stacked-cards-fanOut li img {
			max-height: 200px;
		}

		.stacked-cards li {
			height: 250px;
		}

		@media (max-width: 767px) {
			.stacked-cards li {
				height: 180px;
			}
		}

		.stacked-cards li {
			background-color: #00bcd4;
		}

		.stacked-cards li:nth-child(n) {
			background-color: #3599db;
		}

		.stacked-cards li:nth-child(2n) {
			background-color: #e61b77;
		}

		.stacked-cards li:nth-child(3n) {
			background-color: #00bcd4;
		}

		.stacked-cards li:nth-child(4n) {
			background-color: #f4b251;
		}

		.stacked-cards li:nth-child(5n) {
			background-color: #8e4497;
		}

		.source {
			margin: 25px auto;
		}

		.header {
			margin: 0px auto;
			padding: 25px 5px;
			background-color: #fff;
		}
		.header img {
			display: block;
			margin: 0 auto;
			max-width: 300px;
			height: auto;
		}
</style>
</head>
<body>


<div>
    <div class="stacked-cards">
		<ul style="height: 250px">
			<li>your content</li>
			<li>your content</li>
			<li>your content</li>
			<li>your content</li>
			<li>your content</li>
		</ul>
	</div>
</div>
		

    <script>
    var stackedCard = new stackedCards({
	 	selector: '.stacked-cards',
	 	layout: "slide",
	 	transformOrigin: "center",
	});

	stackedCard.init();
    </script>
</body>
</html>