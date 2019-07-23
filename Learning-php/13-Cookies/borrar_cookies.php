<?php

if (isset($_COOKIE['yearCookie'])) {
  unset($_COOKIE['yearCookie']);
  setcookie('yearCookie', '', time() - 100);
}

header('location: ver_cookies.php');