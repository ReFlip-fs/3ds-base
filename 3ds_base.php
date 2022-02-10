<?php
/*
3ds_base.php Library

MIT License

Copyright (c) 2022 ReFlip

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
function init3DS($localtionURI){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Ugm-SessionID: test');
        header('Location: '. $locationURI);
        exit;
    }
}
function blockUnauthorizedClients(){
    $headers = apache_request_headers();
    if(isset($headers['User-Agent'])){
        http_response_code(403);
        echo "<html><head><title>403 Forbidden</title></head><body><h1>403 - Forbidden</h1><p>This website is only used to provide FS3D online services and shouldn't be accessed on a web browser.</p></body></html>";
        exit;
    }
}
?>
