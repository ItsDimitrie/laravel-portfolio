@extends ('layout');

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POTD</title>
    <script type="text/javascript" src="/potd.js"></script>
</head>


<button id="showImage" onclick="showImage();">Show Image</button>

  <h1>NASA Astronomy Picture Of The Day</h1>
<h2 id="title"></h2>
<h3>Date:
<input type="date" id="Date_Picker" value="date" min="1995-01-01" max="2023-12-31"></h3>
<img id="pic" src="" alt="NASA Picture Of The Day">
<h3 id="explanation"></h3>



