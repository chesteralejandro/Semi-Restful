<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=base_url();?>/assets/index.css?<?=time();?>">
        <title>Product <?=$product['id'];?> info | Semi Restful Route Demo</title>
    </head>
    <body>
        <div class="container">
            <h1>Product <?=$product['id'];?></h1>
            <div class="product">
                <h3>Name</h3>
                <p><?=$product['name'];?></p>
                <h3>Description</h3>
                <p><?=$product['description'];?></p>
                <h3>Price</h3>
                <p>$<?=$product['price'];?></p>
            </div>
            <div>
                <a href="/edit/<?=$product['id'];?>" class="product">Edit</a>
                <a href="/" class="product">Back</a>
            </div>
        </div>
    </body>
</html>