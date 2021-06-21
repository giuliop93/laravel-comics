<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yeld("page_title")Document</title>
</head>
<body>
    @include("partials.header")

    @extends("layout.default")

    @section("page_title", "homepage")

</body>
</html>