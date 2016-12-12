<?php
/**
 *  compiles .scss files to .css
 */
require_once('scss.inc.php');
use Leafo\ScssPhp\Compiler;
$cssdir = get_stylesheet_directory().'/css/';
autoCompileScss('app.scss',$cssdir.'scss/app.scss', $cssdir.'app.css');

function autoCompileScss($filename,$inputFile, $outputFile)
{
	$cachefile 	= get_stylesheet_directory()."/css/.sass-cache/{$filename}.cache";
	$scssfile[] = filemtime($inputFile);
	$scssfile[] = file_get_contents($inputFile);
	$compile 	= true;

	if(file_exists($cachefile))
	{
 		$cachetime 	= unserialize(file_get_contents($cachefile));
		$compile 	= ($cachetime[0] < $scssfile[0])? true : false;		
	}

	if($compile)
	{
		try {
			$scss = new Compiler();
			// $scss = new scssc();
			// $scss->setFormatter('scss_formatter'); // scss_formatter | scss_formatter_nested | scss_formatter_compressed
			$scss->addImportPath(get_stylesheet_directory().'/css/scss/');

			$out = $scss->compile($scssfile[1]);
			// file_put_contents not working out of disk space
			file_put_contents($outputFile, $out);
			file_put_contents($cachefile, serialize($scssfile));
		}catch(Exception $e){
			echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$e->getMessage().' in '.$e->getFile().'</div>';
		}
	}
}