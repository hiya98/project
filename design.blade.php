<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body style="background-color: #EAEDFF">
<div class="header">
    @section('header')
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">NatureZone</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create">Create Account</a>
                    </li>
                </ul>
            </div>
        </nav>
    @show
</div>
<div class="content">
    <div style="background-image: url('hiya.jpg');">
    @section('content')


        @show
    </div>
</div>
<div class="footer">
    @section('footer')

    @show</div>

</body>
</html>
