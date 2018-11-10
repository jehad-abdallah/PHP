<!DOCTYPE html>
<head>
  <title>Simple PHP page</title>
</head>
<body>
	<h1><?php $myfile = fopen("index.txt", "r") or die("Unable to open file!");
	echo fread($myfile,filesize("index.txt"));?></h1>
	<img src="/images/info.png" alt="" />
	<img src="/images/web_technologies.png" alt="web_technologies" />
	<video width="320" height="240" controls>
	<source src="/media/Water.mp4" type="video/mp4">
</body>
