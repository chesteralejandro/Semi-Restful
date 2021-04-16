<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/index.css?<?=time();?>">
        <title>All Products | Semi Restful Route Demo</title>
    </head>
    <body>
        <div class="container">
            <h1>Products</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
<?php       if(count($products) == 0) { ?>
                <tr class="shade2">
                    <td colspan="4">There is no product</td>
                </tr>
<?php       } else { ?>
    <?php       $counter = 0; ?>
<?php       foreach($products as $product) { ?>
                <tr class="shade<?=($counter % 2) + 1?>">
                    <td><?=$product['name'];?></td>
                    <td><?=$product['description'];?></td>
                    <td>$<?=$product['price'];?></td>
                    <td>
                    <!-- ADD PARAMETERS TO THE LINK -->
                        <a href="/show/<?=$product['id'];?>">Show</a>
                        <a href="/edit/<?=$product['id'];?>">Edit</a>
                        <form action="/destroy" method="POST">
                            <input type="hidden" name="id" value="<?=$product['id'];?>">
                            <input type="submit" value="Remove">
                        </form>
                    </td>
                </tr>
<?php       $counter++; ?>
<?php       } ?>
<?php       } ?>            
            </table>
            <a href="/new" class="product">Add a new product</a>
        </div>
    </body>
</html>