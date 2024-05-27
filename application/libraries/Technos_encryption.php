<?php
// application/libraries/Encryption_lib.php

class Technos_encryption {

    private $secret_key;
    private $iv;

    public function __construct($params = array()) {
        // Load necessary parameters like key and iv from your config or elsewhere
        $this->secret_key = isset($params['key']) ? $params['key'] : 'oT/UjPVn38+IiSzIf/3wbA==';
        $this->iv = isset($params['iv']) ? $params['iv']    : '?sgye_?sge/QR?=Y';
    }

    public function encryptData($data) {
        $cipher = "AES-256-CBC";
        $options = 0;

        $encryptedData = openssl_encrypt($data, $cipher, $this->secret_key, $options, $this->iv);

        return base64_encode($encryptedData);
    }

    public function decryptData($encryptedData) {
        $binaryData = base64_decode($encryptedData);
        $cipher = "AES-256-CBC";
        $options = 0;
        $decryptedData = openssl_decrypt($binaryData, $cipher, $this->secret_key, $options, $this->iv);

        return $decryptedData;
    }
}