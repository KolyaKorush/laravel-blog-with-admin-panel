<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layouts.head')
</head>

<body>
@include('user.layouts.header')

    {{--@include('user.home')--}}
    @section('main-content')

    @show

@include('user.layouts.footer')
</body>

</html>
