<?php
session_start();
session_decode();
header('Location : index.php');
exit;