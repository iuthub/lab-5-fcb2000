<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="http://www.cs.washington.edu/education/courses/cse190m/09sp/labs/4-buyagrade/buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php
		if(isset($_REQUEST["name"])) $name=$_REQUEST["name"]; 
		if(isset($_REQUEST["section"])) $section=$_REQUEST["section"]; 
		if(isset($_REQUEST["code"])) $code=$_REQUEST["code"]; 
		if(isset($_REQUEST["cc"])) $cc=$_REQUEST["cc"]; 
		
		//if(isset($section) && $section!="") print "true"; else print "false";
		if($name!="" && $section!="" && $code!="" && $cc!="")
		{
			$context=$name.';'.$section.';'.$code.';'.$cc.PHP_EOL;
			file_put_contents("sucker.txt",$context,FILE_APPEND)
		?>

	

		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
			<?= $name ?>
			</dd>

			<dt>Section</dt>
			<dd>
			<?= $section ?>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?= $code ?>(<?= $cc ?>)
			</dd>
		</dl>
		<p>Here are all the suckers who have submitted here:</p>
		
		<p>
			<?php 
			$txt=file("sucker.txt");
			//print_r($txt);
			foreach ($txt as $v) {
				print $v."<br/>";
			}
			?>
		</p>
		<?php } else {?>
		<h1>Sorry</h1>

		<p>You didn't fill out the form completely. <a href="buyagrade.php">Try again?</a></p>
			
		
		<?php } ?>
	</body>
</html>  