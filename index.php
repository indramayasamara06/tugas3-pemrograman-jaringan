<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>DEA MOVIE MANIA</title>

</head>

<body>
  <?php
  if (isset($_POST['cari'])) {
    $judul = $_POST['judul'];
    echo "<h1>Hasil Pencarian</h1>";

    $url = 'http://www.omdbapi.com/?apikey=b893c632&s="' . $judul . '"';

    //Akses API dengan CURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);

    // var_dump($output);
    $data = json_decode($output, TRUE);
    // $data = $data['Search'];

    foreach ($data['Search'] as $movie) {

      echo "\n <p>Judul: " . $movie["Title"] . "</p>";
      echo "<p>Tahun: " . $movie["Year"] . "</p>";
      echo '<img src= "' . $movie['Poster'] . '">';
    }
  }

  ?>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">

      <h3>DEA MOVIE MANIA</h3>
      <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>

      </form>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <div class="container-new" style="background-image:url('55.jpg')" ;>

    <div class="container">
      <div class="row mt-3 text-center">
        <div class="col">

        </div>
      </div>


      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="sniper.jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title">Sniper Legacy :(2014)
              </h5>
              <p class="card-text"> Film yang menceritakan tentang misi seorang sniper yang ingin membongkar dalang pembunuh ayahnya.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="iBoy.Jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title">iBOY:(2023)</h5>
              <p class="card-text"> Film 'iBoy' menjadi rekomendasi untuk mengisi waktu luangmu.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="shazam.Jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title">Shazam (2018)</h5>
              <p class="card-text">Film ini termasuk sekuel yang cukup kuat untuk dinikmati.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="zootopia.jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title">Zootopia(2022)</h5>
              <p class="card-text">mengisahkan seekor kelinci betina bernama Judy Hopps yang memiliki keinginan menjadi seorang polisi di kota Zootopia. Sedangkan yang mendominasi sebagai polisi adalah hewan predator. </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="mania.jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title">Mania (2020)</h5>
              <p class="card-text">Mania mengungkapkan kecintaan mereka terhadap Persela Lamongan melalui sebuah
                film berjudul Setia Bersamamu.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="jumper.Jpeg" class="card-img-top" height="400px">
            <div class="card-body">
              <h5 class="card-title"> Jumper: (2019)</h5>
              <p class="card-text">Jumper merupakan film yang menceritakan tentang seorang remaja yang bernama David Rice (Hayden Christensen) yang terkejut karena dirinya tiba-tiba memiliki kekuatan teleportasi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>