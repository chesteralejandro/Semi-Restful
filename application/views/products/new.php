<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url();?>/assets/form.css?<?=time();?>">
    <title>Create a new product | Semi Restful Route Demo</title>
</head>
<body>
    <div class="container">
        <h1>Add a new product</h1>
        <form action="/create" method="POST" autocomplete="off">
        <input type="hidden" name="action" value="new">
        <div>
                <p><?=$this->session->flashdata('name_error');?></p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <p><?=$this->session->flashdata('description_error');?></p>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <p><?=$this->session->flashdata('price_error');?></p>
                <label for="price">Price</label>
                <input type="text" name="price" id="price">
            </div>
            <input type="submit" value="Create">
        </form>
        <a href="/">Go back</a>
    </div>
</body>
</html>