<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome to my Shop</h1>
        <ul>
            <?php
                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => "http://product-service",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "cache-control: no-cache"
                ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);

                $obj = json_decode($response);

                echo $response;
            ?>
        </ul>
    </body>
</html>