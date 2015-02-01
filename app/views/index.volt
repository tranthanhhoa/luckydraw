<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		{{ assets.outputCss() }}
	</head>
	<body>
		{{ content() }}
		{{ assets.outputJs() }}
	</body>
</html>