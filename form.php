<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
<form  action="thanks.php" method="post">
  <div>
    <label for="firstname">Prénom :</label>
    <input type="text"  id="firstname"  name="user_firstname">
  </div>
  <div>
    <label for="lastname">Nom :</label>
    <input type="text"  id="lastname"  name="user_lastname">
  </div>
  <div>
    <label  for="email">Courriel :</label>
    <input  type="email"  id="email"  name="user_email">
  </div>
  <div>
    <label for="phone">Enter your phone number :</label>
    <input type="tel" id="phone" name="user_phone" >
  </div>
  <div>
    <label for="subject">Sujet :</label>
    <select id="subject"  name="subject">
      <option value=""> choisir un service </option>
      <option value="MOVIES">MOVIES</option>
      <option value="BOOKS">BOOKS</option>
      <option value="NEWSPAPERS">NEWSPAPER</option>
    </select>
  </div>
  <div>
    <label  for="message">Message :</label>
    <textarea  id="message"  name="user_message"></textarea>
  </div>
  <div  class="button">
    <button  type="submit">Envoyer votre message</button>
  </div>
</form>


</body>
</html>
