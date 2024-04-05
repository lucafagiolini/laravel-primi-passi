<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pagina2</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>






<body data-bs-theme="dark">
    <div class=" d-flex flex-column align-items-center m-5">
        <h1 class=" text-danger ">CON IL LIETO FINE,</h1>
        <h2 class=" text-warning pb-5">Per fortuna</h2>
        <div class="card" style="width: 18rem;">
            <img src="{{ $page5img }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $page5 }}</h5>
                <a href="{{ route('home') }}" class="btn btn-primary">Torna alla Home</a>
            </div>
        </div>


    </div>









    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
