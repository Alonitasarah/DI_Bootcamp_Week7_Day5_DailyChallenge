<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="sendmail.php" method="post">
         <label for="to">To:</label>
         <input type="text" id="to" name="to"><br><br>
         <label for="from">From:</label>
         <input type="text" id="from" name="from"><br><br>
         <label for="subject">Subject:</label>
         <input type="text" id="subject" name="subject"><br><br>
         <label for="message">Message:</label>
         <textarea id="message" name="message"></textarea><br><br>
         <input type="submit" value="Send">
     </form>
</body>
</html>