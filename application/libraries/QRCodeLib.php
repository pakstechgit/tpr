<?php
include 'system/libraries/QRcode/qrlib.php'; 
class QRCodeLib{
    public function __construct() {
        
    }
    function generate($text, $ecc = 'L', $pixelSize = 7, $frameSize = 0) {
        ob_start(); // Start output buffering
        QRcode::png($text, null, $ecc, $pixelSize, $frameSize); // Output the QR code directly to the buffer
        $imageData = ob_get_contents(); // Get the contents of the output buffer
        ob_end_clean(); // Clean (erase) the output buffer and turn off output buffering
        //  var_dump($imageData);
        return base64_encode($imageData); // Return the image data
    }
}

