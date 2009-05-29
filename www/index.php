
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="<?php echo $themeroot; ?>styles/estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body>

<!-- R-Forge Logo -->
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>


<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like -->

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>

<!-- end of project description -->

<p>Welcome to the <strong>waveslim</strong> package.  Originally written in S-plus in 1994
and ported to R in 2001, I have taken all the wavelet code I have accumulated over the 
years and created the <strong>waveslim</strong> R package.  Subroutines to perform wavelet 
analysis using Hilbert wavelet pairs have also been included by porting Selesnick's Matlab 
implementation of the dual-tree complex wavelet transform (CWT).  Major features include:</p>
<ul>
<li>Analysis of time series using the DWT, MODWT, DWPT and MODWPT.
<li>Analysis of images using the DWT, MODWT, DWPT and MODWPT.
<li>Analysis of three-dimensional arrays using the DWT and MODWT.
<li>Standard wavelet thresholding techniques.
<li>Wavelet analysis of covariance/correlation for bivariate time
series.
<li>Testing for homogeneity of variance in long-memory processes.
<li>Wavelet-based ML estimation for long-memory and seasonal
long-memory processes.
<li>Both standard (Donoho and Johnstone) and real data sets.
<li>The dual-tree complex wavelet transform (CWT).
<li>Time-varying spectral analysis using Hilbert wavelet pairs.
</ul>
<p>The <strong>project summary page</strong> may be found  
<a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

</body>
</html>
