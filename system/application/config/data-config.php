<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| HOME USER 
|--------------------------------------------------------------------------
| Setting ini menentukan di directory mana kita meletakan home user directory. Jangan lupa untuk menset permission directory tersebut ke 0777
|
|
*/
$config['home_user']	= "/tmp/data_sucker";

/*
|--------------------------------------------------------------------------
| Max User home 
|--------------------------------------------------------------------------
| Setting ini menentukan kapasitas maksimum setiap home directory, ukuran yang ditentukan dalam satuan Mega Byte
|
|
*/
$config['home_user_max_size']	= "2000";

/*
|--------------------------------------------------------------------------
| User Perday Max Download
|--------------------------------------------------------------------------
| Setting ini menentukan kapasitas maksimum data yang dapat didownload user perhari. Ukuran yang ditentukan dalam satuan Mega Byte
|
|
*/
$config['user_max_download']	= "700";