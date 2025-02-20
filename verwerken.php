<?php
echo $_POST["naam"];
echo password_hash($_POST["password"], PASSWORD_DEFAULT);