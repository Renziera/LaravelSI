<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Base64Controller extends Controller{
    public function encode($plaintext){
        $ciphertext = base64_encode($plaintext);

        return array(
            "status" => true,
            "data" => $ciphertext,
        );
    }

    public function decode($ciphertext){
        try{
            $plaintext = base64_decode($ciphertext);
            $plaintext = json_decode(json_encode($plaintext));
            return array(
                "status" => true,
                "data" => $plaintext,
            );
        }catch(Exception $e){
            return array(
                "status" => false,
                "data" => "Proses decoding gagal",
            );
        }
    }
}
