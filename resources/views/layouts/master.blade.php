<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>COS - @yield("title")</title>
</head>

<body>
<div>Navigation</div>
<hr/>
@yield("content")


@section("footer")

    <h1>Footer</h1>

@show
</body>

</html>