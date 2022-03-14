<html>
<head>

</head>
<body>
  <a href="Menu.php"> Back </a> |
  <a href="../controllers/logout.php"> logout </a>
 <form method="post" action="../Controllers/send_message.php">
  <fieldset>
  <legend>Send Message</legend>
  <table>
    
    <tr>
      <td>Enter Email</td>
  <td><input type="email" name="email" placeholder="Enter Reciever's email">
  </td>
  <tr>
    <td>Write something</td>
  <td><input type="text" name="message" value=""></td>
  </tr>
  <td></td>
  <tr>
    <td></td>
  <td><input type="submit" name="send" value="Submit"></td>
</tr>
    </table>
  </fieldset>
  <a href="../Views/MessageList.php">Message List</a>
 </form>
</body>