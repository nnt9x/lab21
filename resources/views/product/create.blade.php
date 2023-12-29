<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
</head>
<body>
<div class="container">
    <h1>Nhập thông tin con vật</h1>
    <hr/>
    <form action="/create" method="POST">
        @csrf
        <input class="form-control" type="text" name="animalName"
               placeholder="Nhập tên con vật">

        <input class="form-control mt-3" type="text" name="animalUrl"
               placeholder="Hình ảnh url">

        <br/>
        <textarea class="mt-3" name="animalDescription" id="editor"></textarea>
        <button class="btn btn-primary w-25 mt-3">Tạo </button>
    </form>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</div>

</body>
</html>
