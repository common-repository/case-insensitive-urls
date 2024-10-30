<?php

  /*

  Plugin Name: Case Insensitive URL's

  Description: This plugin runs automatically at the beginning of each page load to insure every request is handled in a case-insensitive manner. It will force every capital letter in any URL be changed to lowercase. For example: /MyPage becomes /mypage. This prevents 404 errors from case-sensitive URL’s. This also prevents costly mistakes if you’ve printed your marketing materials with a capital letter.

  Version: 1.0

  Author: Nathan Ello
  
  Author URI: https://nathanello.com

 
  */

  function case_insensitive_url() {

   if (preg_match('/[A-Z]/', $_SERVER['REQUEST_URI'])) {

    $_SERVER['REQUEST_URI'] = strtolower($_SERVER['REQUEST_URI']);

    $_SERVER['PATH_INFO']   = strtolower($_SERVER['PATH_INFO']);

   }

  }

  add_action('init', 'case_insensitive_url');

 ?>