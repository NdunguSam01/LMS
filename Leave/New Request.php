<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>New Leave Request</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../CSS/nav.css">
        <link rel="stylesheet" href="../CSS/New.css">
        <link rel="icon" type="image/x-icon" href="../Images/Logo.jfif">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>    
        <script>
            $(function()
            {
                $('#navbar').load('./index.php');
            })
        </script>
    </head>
    <body>
        <div id="navbar"></div>
        <form method="post" action="../Info Process/Request">
            <label for="start">Start Date:</label>
            <input type="date" name="start" required>
            <label for="end">End Date:</label>
            <input type="date" name="end" required>
            <label for="numDays">Number of days:</label>
            <input type="number" name="numDays" min="0.5" step="0.5" required>
            <button type="submit">Submit Request</button>
        </form>
        <script src="../JS/main.js"></script>
    </body>
</html>