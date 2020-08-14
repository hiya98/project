@extends('article')
@section('content')

<center>
    <h1>NatureZone
    </h1>
</center>
    <body>
    <center>
        <a href="{{ URL('http://127.0.0.1:8000/view') }}"><strong><p style="font-size:25px">1.View article</p></strong></a>
        <a href="{{ URL('http://127.0.0.1:8000/edit') }}"><strong><br><p style="font-size:25px">2.Add Article</p><br></strong></a>
        <img src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg" alt="Mountain" style="width:200px">
    </center>
    </body>

@endsection
