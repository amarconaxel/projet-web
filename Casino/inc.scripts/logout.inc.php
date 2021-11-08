<?php

/* Script pour la déconnexion */

session_start();
session_destroy();
header("Location: ../index.php");
?>