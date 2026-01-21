<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <h1>Products</h1>
    <ul>
    @foreach($products as $product)
        <li>{{$product['name']}}</li>
        <li>{{$product['price']}}</li>
        <li><img src="{{$product['img']}}" alt="product image" width="300"></li>
    @endforeach
    </ul>

</body>
</html>
