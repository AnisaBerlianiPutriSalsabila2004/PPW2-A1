public function testfungsi(){
    return view('about', [
        "title" => "About",
        "name" => "Alsa",
        "email" => "anisab464@gmail.com"
    ]); 
}

















<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv = "X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Pertemuan 3 PPW || {{$tittle}} </title>
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <br>
        @include('partial.navbar')
        @yield('title')
        <h3> Nama : <?= $name; ?></h3>
        <h3> Email : <?= $email; ?></h3>
        <script src="js/script.js"></script>
    </body>
</html>

