<?php
    var_dump($_POST);

    $authController = new AuthController();
    $res = $authController->login($_POST["username"], $_POST["password"]);

    class AuthController
    {
        public function login($email='', $password)
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('email' => $email,'password' => $password),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return $response;
        }
    }