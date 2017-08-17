<?php
require("header.php");
if(!isset($_GET['notify'])) {
  $_GET['notify'] = False;
}
if ($_GET["notify"] == "acc_m") {
  echo "<div class='notify'><b>Success! </b> Account created successfully! Hit the log in button to log in!</div>";
}

if ($_GET["notify"] == "log") {
  echo "<div class='notify'><b>Success! </b> you have been logged in</div>";
}

if ($_GET["notify"] == "out") {
  echo "<div class='notify'><b>Success! </b> you have been logged out</div>";
}
 ?>
 <div class='container'>
   <h1>Note for TreeTop2016</h1>
 <h2>Flags for Posts</h2>
 <span class='open'>OPEN</span> The post can be commented on <br><br>
 <span class='closed'>CLOSED</span> The commenting is disabled<br><br>
<span class='ISSUE'>ISSUE</span> You need help with something<br><br>

<h2>Post Categories</h2>
<span class='t-Scratch'>Scratch</span>Things that have to do with Scratch<br><br>
<span class='t-IRL'>In Real Life</span> Things that have to do with real life<br><br>
<span class='t-Update'>Update</span> An update to something, whether it be Scratch or In Real Life<br><br>

<span class='t-other'>OTHER</span> Something out of the ordinary<br><br>

<h2>Notes:</h2>
<p>Everytime someone replies to something you posted, they get a point.</p>
<p>People can help you resolve issues you have with Scratch or real coding if you use the <span class='ISSUE'>ISSUE</span> tag.</p>
<p>If you think something is innopropriate for your site you can always delete it by either using the delete button or by deleting the actual files (I believe in non-censorship so I would recommend not deleting the actual files and just using the delete button)</p>
<p>Verified people from Scratch get a star by their name</p>
</body>
 </div>
