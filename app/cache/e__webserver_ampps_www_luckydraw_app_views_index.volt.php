<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>
		<?php echo $this->assets->outputCss(); ?>
	</head>
	<body>
		<?php echo $this->getContent(); ?>
		<?php echo $this->assets->outputJs(); ?>
	</body>
</html>