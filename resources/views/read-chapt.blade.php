<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dragons and Dragon Lore</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $book_name }}</h1>
    <h2>{{ $author_year }}</h2>

@for($i = 1; $i <= $num_of_chapters; $i++)
      <a href="/chapter/{{ $i }}" button class="btn btn-secondary" type="button">Chapter {{ $i }} </a>
@endfor
<a href="/" button class="btn btn-warning" type="button">Home</a>
<hr>
    <pre>
   @include('chapter' . $chapter_number)
    </pre>    
</body>
</html>