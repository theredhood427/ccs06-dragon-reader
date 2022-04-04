<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dragons and Dragon Lore</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    h1 {text-align: center;}
    h2 {text-align: center;}
    </style>
</head>

<body>
    <h1>{{ $book_name }}</h1>
    <h2>{{ $author_year }}</h2>
<br>
@for($i = 1; $i <= $num_of_chapters; $i++)
    <h3>
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="/chapter/{{ $i }}" button class="btn btn-outline-dark" role="button">  Chapter {{ $i }} </a>
      </div>
      </h3>
@endfor
<br>
<h3>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/all-chapters" button class="btn btn-outline-success" type="button"> Read All Chapters</a>
    </div>
</h3>
</body>
</html>