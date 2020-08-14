@extends('design')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }


    </style>
</head>
<body><center>
    <h1 >Signup</h1>
    <div class="container">
        <form action="/submit" method="create">
            @csrf
            <div class="row">
                <div class="col-25">
                    <label for="Name">Name</label>
                </div>
                <div class="col-25">
                    <input type="varchar" id="Name" name="Name" placeholder="Your fullname..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Email">Email</label>
                </div>
                <div class="col-25">
                    <input type="varchar" id="Email" name="Email" placeholder="Your email..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Username">Username</label>
                </div>
                <div class="col-25">
                    <input type="varchar" id="Username" name="Username" placeholder="Your username..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="Password">Password</label>
                </div>
                <div class="col-25">
                    <input type="password" id="Password" name="Password" placeholder="Password">
                </div>
            </div>

            <button type="submit">Signup</button>

        </form>
    </div>
</center>
</body>
</html>
@endsection

