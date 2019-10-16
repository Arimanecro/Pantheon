<?php
/*development*/
const DEVELOP_MODE = 1;
const ERRORS = true;
const PERFORMANCE = 1;

/*security*/
const HEALED_HTTP_REQUESTS = ['_GET', '_POST'];

/*PDO settings*/
const CONNECTION = 0;
const PDO_ERR_LOG = 0;

const DB_HOST = '';
const DB_NAME = '';
const DB_USER = '';
const DB_PASS = '';

/*Locale*/
const LOCALE = 'en';
const TIMEZONE = 'Europe/London';  //http://php.net/manual/en/timezones.europe.php
const CURRENCY = 1;

/*Theme*/
define ("WELCOME_PAGE", 'welcome');
define ("ERROR_PAGE", 'Error.html');
define("CAPTCHA_IMG", ROOT . 'public/img/captcha/');