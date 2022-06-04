<?php
$flag=0;
if(empty($_POST['firstname'])){echo"Type your first name."; $flag=1;}
if(empty($_POST['lastname'])){echo"Type your lastname."; $flag=1;}
if(empty($_POST['Gender'])){echo"Select Gender."; $flag=1;}
if(empty($_POST['address'])){echo"Provide mail address."; $flag=1;}
if(empty($_POST['number'])){echo"Provide number."; $flag=1;}
if(empty($_POST['lastname'])){echo"Provide number address."; $flag=1;}
?>