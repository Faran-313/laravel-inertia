<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--bootstrap cdn--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product List</title>
</head>
<body>
<div class="container col-md-12 mt-5">
    <div>
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <div>
        <a href="{{ route('product.view') }}" class="btn btn-sm btn-primary">home</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">product name</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">category</th>
            <th scope="col">price</th>
            <th scope="col">actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td scope="row">{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ number_format($product->price, 2) }}</td>
                <td>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-sm btn-primary">edit</a>
                    <form action="{{ route('product.delete', $product->id) }}" method="POST">
                        @csrf
                    <button type="submit" class="btn btn-sm btn-danger mt-1">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
 </div>
</body>
</html>
