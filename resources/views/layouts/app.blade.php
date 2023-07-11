<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            font-size: 16px;
        }

        input {
            margin-bottom: 20px;
            padding: 15px;
            width: 20vw;

            font-family: 'Quicksand', sans-serif;
        }

        a {
            color: #000;
            text-decoration: none;
        }

        .btn {
            background-color: #4287f5;
            border-radius: 5px;
            color: #fff;
            font-size: 0.9rem;

            padding: 10px;

            transition: 200ms;
        }

        .btn:hover {
            filter: brightness(90%);
        }

        .navigation {
            background: rgb(64,38,77);
            background: linear-gradient(90deg, rgba(64,38,77,1) 0%, rgba(9,9,121,1) 25%, rgba(0,212,255,1) 100%);
            color: #fff;

            height: 10vh;
            width: 100%;
        }

        .navigation p {
            padding-top: 15px;

            text-align: center;
        }

        .container, .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container h1 {
            margin: 10vh 0 50px 0;
        }

        form span {
            margin: 20px 0 10px 0;
        }   

        .content {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .content .map {
            height: 50vh;
            width: 50vw;
            
            border: 1px solid #000;
        }

        
        ul {
            display: flex;
            flex-direction: column;
            gap: 10px;

            list-style: none;
        }

        ul li {
            display: flex;
            gap: 10px;
        }

        ul li span {
            border: 1px solid #000;

            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 15px;
            width: 20vw;
        }

        

    </style>
</head>
<body>
    @yield('content')
</body>
</html>