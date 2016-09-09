<?php 
$file = "media/orders/po-{$orderDetails->or_number}.pdf";
					$pdfData = $this->_getOrderPdf($orderDetails);
					
					$mpdf = new mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);
					$mpdf->SetDisplayMode('fullpage');
					$mpdf->list_indent_first_level = 0;
					$mpdf->WriteHTML($pdfData);
					$mpdf->Output($file, 'F');
					
					?>
