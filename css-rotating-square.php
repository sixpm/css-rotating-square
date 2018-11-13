<!doctype html>
<html lang="en">
<head>
  <title>CSS Rotating Square</title>
</head>

<body>
<style>
	DIV{
		position:absolute;
		top:40%;
		left:50%;
		margin-left:-125px;
		width:250px;
		height:250px;
		background:#ccc;
	  	-webkit-animation: rotate 4.5s infinite linear; /* Safari 4+ */
	  	-moz-animation:    rotate 4.5s infinite linear; /* Fx 5+ */
	  	-o-animation:      rotate 4.5s infinite linear; /* Opera 12+ */
	  	animation:         rotate 4.5s infinite linear; /* IE 10+, Fx 29+ */
	}

	@-webkit-keyframes rotate {
	    from {
	        -webkit-transform: rotate(0deg);
	    }
	    to {
	        -webkit-transform: rotate(360deg);
	    }
	}
	@keyframes rotate {
	    from {
	        transform: rotate(0deg);
	    }
	    to {
	        transform: rotate(360deg);
	    }
	}

</style>
<div></div>
</body>
</html>