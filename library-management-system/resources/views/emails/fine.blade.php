<html>
<head>
    <title>Mail for the fine</title>
</head>

<body>
    <h2>Greetings {{ $issueBook->user->name }}!</h2>
    <h3>You have been charged Rs.{{ $issueBook->fine }} as fine for late submission of <em>{{ $issueBook->book->name }}</em>.</h3>
    <h3>Kindly return the book on time.</h3>
    <h4>Thank You!</h4>
</body>

</html>
