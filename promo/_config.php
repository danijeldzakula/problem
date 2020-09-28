<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
  $helperBase = '/home/vanja/Dev/osv/prelanders/lander-api';
  $baseUrl = 'http://track.leadsadmin.vjs/api';
} else {
  $helperBase = '/var/www/lander-api';
  $baseUrl = 'http://adsfxs.pro/api';
  $offer_code = '3bf217d5-8ace-4f2a-8c97-38e3e4d1ad7d';
}
?>
