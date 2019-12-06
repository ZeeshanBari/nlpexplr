<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome to my Shop</h1>
        <ul>
            <?php
                $json = file.get_contents('http://product-service');
                $obj = json_decode($json);

                $products = $obj->products;
                foreach ($products as $product){
                    echo "<li>$product</li>";
                }
            ?>
        </ul>
    </body>
</html>