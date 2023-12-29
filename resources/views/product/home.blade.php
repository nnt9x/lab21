<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thong tin con vat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
<div class="container">
    <div class="row row-cols-2">
        @forelse($animals as $animal)
            <div class="col">
                <h2>{{$animal->name}}</h2>
                <hr>
                <img class="img-fluid" src="{{$animal->url}}">
                <hr/>
                {!! $animal->description !!}
            </div>
        @empty
            <div>Không có dữ liệu!</div>
        @endforelse


    </div>
</div>
</body>
</html>
