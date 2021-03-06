<?php

$discs = [
    [
      'poster' => 'https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg',
      'title' => 'New Jersey',
      'author' => 'Bon Jovi',
      'genre' => 'Rock',
      'year' => '1988'
    ],
  [
      'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg',
      'title' => 'Live at Wembley 86',
      'author' => 'Queen',
      'genre' => 'Pop',
      'year' => '1992'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg',
      'title' => 'Ten\'s Summoner\'s Tales',
      'author' => 'Sting',
      'genre' => 'Pop',
      'year' => '1993'
    ],
  [
      'poster' => 'https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg',
      'title' => 'Steve Gadd Band',
      'author' => 'Steve Gadd Band',
      'genre' => 'Jazz',
      'year' => '2018'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg',
      'title' => 'Brave new World',
      'author' => 'Iron Maiden',
      'genre' => 'Metal',
      'year' => '2000'
    ],
  [
      'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg',
      'title' => 'One more car, one more raider',
      'author' => 'Eric Clapton',
      'genre' => 'Rock',
      'year' => '2002'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
      'title' => 'Made in Japan',
      'author' => 'Deep Purple',
      'genre' => 'Rock',
      'year' => '1972'
    ],
  [
      'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
      'title' => 'And Justice for All',
      'author' => 'Metallica',
      'genre' => 'Metal',
      'year' => '1988'
    ],
  [
      'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
      'title' => 'Hard Wired',
      'author' => 'Dave Weckl',
      'genre' => 'Jazz',
      'year' => '1994'
    ],
  [
      'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
      'title' => 'Bad',
      'author' => 'Michael Jacjson',
      'genre' => 'Pop',
      'year' => '1987'
    ]
  ];

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>

    <div id="app">

        <header>
            <figure class="logo_wrapper">
                <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="">
            </figure>
        </header>

        <main>

            <div class="card_wrapper">
            

                <?php
                    foreach ( $discs as $disc ){
                ?>
                <div class="card">
                    <figure class="disc_wrapper">
                        <img class="disc" src=" <?php echo $disc["poster"]; ?>   " alt="">
                    </figure>

                    <div class="card_text_wrapper">
                        <h4 class="title"><?php echo $disc["title"]; ?></h4>
                        <p class="author"><?php echo $disc["author"]; ?></p>
                        <p class="year"><?php echo $disc["year"]; ?></p>
                    </div>
                </div>
                
                <?php
                }
                ?>

            </div>


        </main>



    </div>
  

    <script src="app.js"></script>
</body>
</html>