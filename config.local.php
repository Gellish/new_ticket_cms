<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

$config['base_url'] = 'http://tameasy.com/new_ticket/';

$config['default']['hostname'] = 'localhost';

$config['default']['username'] = 'tameasy_user';

$config['default']['password'] = 'tameasy_user@123';

$config['default']['database'] = 'tameasy_new_ticket';

$config['default']['dbdriver'] = 'pdo';


$config['default']['dsn'] = 'mysql:dbname='.$config['default']['database'].';host='.$config['default']['hostname'];