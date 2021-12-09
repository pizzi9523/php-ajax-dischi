<?php 

    $discs = [
        [
            "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
            "title" => "New Jersey",
            "author" => "Bon Jovi",
            "genre"=> "Rock",
            "year" => "1988"
        ],

        [
            "poster"=> "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
            "title" => "Live at Wembley 86",
            "author" => "Queen",
            "genre" => "Pop",
            "year" => "1992"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
            "title" => "Ten's Summoner's Tales",
            "author" => "Sting",
            "genre" => "Pop",
            "year" => "1993"
        ],

        [
            "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
            "title" => "Steve Gadd Band",
            "author" => "Steve Gadd Band",
            "genre" => "Jazz",
            "year" => "2018"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
            "title" => "Brave new World",
            "author" => "Iron Maiden",
            "genre" => "Metal",
            "year" => "2000"
        ],

        [
            "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
            "title" => "One more car, one more raider",
            "author" => "Eric Clapton",
            "genre" => "Rock",
            "year" => "2002"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
            "title" => "Made in Japan",
            "author" => "Deep Purple",
            "genre" => "Rock",
            "year" => "1972"
        ],

        [
            "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
            "title" => "And Justice for All",
            "author" => "Metallica",
            "genre" => "Metal",
            "year" => "1988"
        ],

        [
            "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
            "title" => "Hard Wired",
            "author" => "Dave Weckl",
            "genre" => "Jazz",
            "year" => "1994"
        ],

        [
            "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
            "title" => "Bad",
            "author" => "Michael Jacjson",
            "genre" => "Pop",
            "year" => "1987"
        ]
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<header>
    <div class="logo p-3">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        height="50px"
        width="50px"
        version="1.1"
        viewBox="0 0 168 168"
      >
        <path
          fill="#1ED760"
          d="m83.996 0.277c-46.249 0-83.743 37.493-83.743 83.742 0 46.251 37.494 83.741 83.743 83.741 46.254 0 83.744-37.49 83.744-83.741 0-46.246-37.49-83.738-83.745-83.738l0.001-0.004zm38.404 120.78c-1.5 2.46-4.72 3.24-7.18 1.73-19.662-12.01-44.414-14.73-73.564-8.07-2.809 0.64-5.609-1.12-6.249-3.93-0.643-2.81 1.11-5.61 3.926-6.25 31.9-7.291 59.263-4.15 81.337 9.34 2.46 1.51 3.24 4.72 1.73 7.18zm10.25-22.805c-1.89 3.075-5.91 4.045-8.98 2.155-22.51-13.839-56.823-17.846-83.448-9.764-3.453 1.043-7.1-0.903-8.148-4.35-1.04-3.453 0.907-7.093 4.354-8.143 30.413-9.228 68.222-4.758 94.072 11.127 3.07 1.89 4.04 5.91 2.15 8.976v-0.001zm0.88-23.744c-26.99-16.031-71.52-17.505-97.289-9.684-4.138 1.255-8.514-1.081-9.768-5.219-1.254-4.14 1.08-8.513 5.221-9.771 29.581-8.98 78.756-7.245 109.83 11.202 3.73 2.209 4.95 7.016 2.74 10.733-2.2 3.722-7.02 4.949-10.73 2.739z"
        />
      </svg>
    </div>
  </header>


  <main>
      <div class="container-fluid py-5">
          <div class="row py-5 text-center justify-content-center">
              <?php foreach ($discs as $disk) : ?>
                <div class="col-2 mb-4">
                    <div class="disk p-3 ">
                        <img class="p-2" src="<?php echo $disk['poster'] ?>" alt="" />
                        <h2 class="fs-5 disk_title text-light p-2">
                        <?php echo $disk['title'] ?>
                        </h2>
                <div class="disk_author fs-6">
                    <?php echo $disk['author'] ?>

                </div>
                <div class="disk_year fs-6">
                    <?php echo $disk['year'] ?>
                </div>
                </div>
            </div>
            
      <?php endforeach; ?>

          </div>
      </div>
      

  </main>
    

  <footer>

  </footer>


</body>
</html>