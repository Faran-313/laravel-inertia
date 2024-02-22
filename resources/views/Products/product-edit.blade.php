<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{--bootstrap cdn--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product-edit</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">

            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" value="{{ $product->name }}" name="product name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" value="{{ $product->title }}" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <div>
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" value="{{ $product->category }}" name="category" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="text" value="{{ $product->price }}" name="price" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">update</button>
                <a href="{{ route('product.show') }}" class="btn btn-secondary">list</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
