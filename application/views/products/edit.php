<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url();?>/assets/form.css">
    <title>Edit product <?=$product['id'];?> | Semi Restful Route Demo</title>
</head>
<body>
    <div class="container">
        <h1>Edit product <?=$product['id'];?></h1>
        <form action="/update" method="POST" autocomplete="off">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?=$product['id'];?>">
            <div>
                <p><?=$this->session->flashdata('name_error');?></p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?=$product['name'];?>">
            </div>
            <div>
                <p><?=$this->session->flashdata('description_error');?></p>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" value="<?=$product['description'];?>">
            </div>
            <div>
                <p><?=$this->session->flashdata('price_error');?></p>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?=$product['price'];?>">
            </div>
            <input type="submit" value="Update">
        </form>
        <a href="/show/<?=$product['id'];?>">Show</a>
        <a href="/">Back</a>
    </div>
</body>
</html>