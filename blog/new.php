<?php
require("header.php");
?>
<div class='container'>
  <h1>New Post</h1>
  <center>
  <div class='postbox'>

       <form action="spost.php" method="post">
<input class='name' name='pname'>
<textarea name='content'>
</textarea>

Challenge Type: <select name="type">
  <option value="scratch">Scratch</option>
  <option value="irl">In Real Life</option>
  <option value="update">Update</option>
  <option value="other">Other</option>
  <option value='adv'>Advanced</option>
</select><br>
  <input class='sub' type="submit">
  </form>

  </div>
</center>
