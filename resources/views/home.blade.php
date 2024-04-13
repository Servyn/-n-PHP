@include('partials.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/view.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!-- sass ./public/css/view.scss ./public/css/view.css --watch -->
    @include('partials.header')
    @include('partials.banner')
    @include('partials.product')
    @include('partials.process')
    @include('partials.footer')
</body>

</html>
