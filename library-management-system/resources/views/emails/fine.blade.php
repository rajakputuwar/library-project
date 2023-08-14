<html>
<head>
    <title>Mail for the fine</title>
</head>

<body>
    <h2>Greetings {{ $issueBook->user->name }}!</h2>
    <h3>Fine has been added to the book <em>{{ $issueBook->book->name }}</em> by {{ $issueBook->fine }}.</h3>
    <h3>Kindly return the book in time.</h3>
    <h4>Thank You!</h4>
</body>

</html>
