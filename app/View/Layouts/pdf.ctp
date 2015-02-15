<?php ob_start(); ?>
<html>
	<head>
		
	</head>
	<body>
		<?php echo $this->fetch('content'); ?>
	</body>
</html>
<?php 

	$html = ob_get_contents();
	ob_end_clean();
	App::import('Vendor', 'mpdf/mpdf');
	$mpdf=new mPDF();

	
	$mpdf->WriteHTML($html);
	$filename = 'YourPdfFileName.pdf';
	$mpdf->Output($filename,'D');
	exit;

?>