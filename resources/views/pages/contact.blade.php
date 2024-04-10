<meta charset="UTF-8">

<title>Skontaktuj się z nami!</title>
<h1>Witaj na stornie kontakt</h1>
<form method="POST">
    <label for="name">Imię</label><br>
    <input type="text" placeholder="Imię" name="name" id="name"><br><br>
    
    <label for="email">Email</label><br>
    <input type="text" placeholder="Email" name="email" id="email"><br><br>

    <label for="message">Wiadomość</label><br>
    <textarea type="text" placeholder="Wpisz wiadomość" name="message" id="message"></textarea><br><br>

    <input type="submit" name="button" id="button" value="Wyślij">
</form>

@extends("layouts.app")