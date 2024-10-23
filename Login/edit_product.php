<?php
session_start();

if (!isset($_SESSION['api_token'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'], $_POST['name'], $_POST['slug'], $_POST['description'], $_POST['features'], $_POST['brand_id'], $_POST['categories'], $_POST['tags'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $features = $_POST['features'];
        $brand_id = $_POST['brand_id'];
        $categories = $_POST['categories']; 
        $tags = $_POST['tags']; 

        $postFields = http_build_query(array(
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'features' => $features,
            'brand_id' => $brand_id,
            'id' => $id,
            'categories' => $categories,
            'tags' => $tags
        ));

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $postFields,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer ' . $_SESSION['api_token'], 
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response);

        if (isset($response->data)) {
            header("Location: products.php?message=Product+updated+successfully");
        } else {
            echo "Error: " . $response->message;
        }
    } else {
        echo "All fields are required.";
    }
} else {
    header("Location: products.php");
}
?>
