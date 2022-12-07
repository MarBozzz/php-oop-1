<?php 
/*
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/
?>


<?php 
include './class/Movie.php';
include './class/Genres.php';

$movieone = new Movie("Pulp Fiction", "John Travolta", "Samuel L Jackson", "Quentin Tarantino", "1994", "./assets/img/locandine-il-cinema-per-immagini-pulp-fiction_00.jpg", new Genres("Action", null, null, null, null, null));

$movietwo = new Movie("Inglorious Basterds","Brad Pitt", "Tim Roth","Quentin Tarantino", "2009", "./assets/img/locandinapg15.jpg", new Genres( null, null, "Thriller", null, null, null));

$moviethree = new Movie("Reservoir Dogs","Harvey Keitel", "Steve Buscemi","Quentin Tarantino", "1992", "./assets/img/reservoir.jpg", new Genres( null, null, null, null, "Drama", null));


//var_dump($movieone);
//var_dump($movietwo);
$movies = [$movieone, $movietwo, $moviethree];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <style>
      img {
        height: 150px;
      }
    </style>
    <title>Movies</title>
</head>

<body>
  <h1 class="text-center">MyMovies</h1>
  <table class="table table-dark table-striped m-auto my-5 text-center">
    <thead>
      <tr>
        <th scope="col">title</th>
        <th scope="col">poster</th>
        <th scope="col">genre</th>
        <th scope="col">actorOne</th>
        <th scope="col">actorTwo</th>
        <th scope="col">movieDirector</th>
        <th scope="col">year</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($movies as $movie) : ?>
        <tr class="text-center">
          <td><h5><?php echo $movie->title ?></h5></td>
          <td> <img class="thumbnail" src="<?php echo $movie->poster ?>" alt="image"></td>
          <td> 
            <?php echo $movie->genres?->action ?>
            <?php echo $movie->genres?->horror ?>
            <?php echo $movie->genres?->thriller ?>
            <?php echo $movie->genres?->fantasy ?>
            <?php echo $movie->genres?->drama ?>
            <?php echo $movie->genres?->comedy ?>
          </td>
          <td><?php echo $movie->actorOne ?></td>
          <td><?php echo $movie->actorTwo ?></td>
          <td><?php echo $movie->movieDirector ?></td>
          <td><?php echo $movie->year ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>