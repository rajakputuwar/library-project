<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking Delete</title>
</head>

<body>
    <h2>Greetings {{ $booking->user->name }}!</h2>
    <h3>Sorry to inform you that your booking of the book <em>{{ $booking->book->name }}</em> has been canceled</h3>
</body>

</html>
