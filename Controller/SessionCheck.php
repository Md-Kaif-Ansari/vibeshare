<?php
session_start();
if (!isset($_SESSION["flag"])) {
  header("location: /403");
  exit();
}
