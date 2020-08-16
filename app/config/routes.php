<?php 


$this->add('', 'FrontendController@index');
$this->add('cari-loker', 'FrontendController@cariLoker');


$this->add('admin-user', 'UsersAdminController@index');
$this->add('admin-user-add', 'UsersAdminController@add');
$this->add('admin-user-store', 'UsersAdminController@store');
$this->add('admin-user-update', 'UsersAdminController@update');
$this->add('admin-user-delete', 'UsersAdminController@delete');
$this->add('admin-user-edit', 'UsersAdminController@show');

$this->add('admin-roles', 'RolesAdminController@index');
$this->add('admin-roles-add', 'RolesAdminController@add');
$this->add('admin-roles-store', 'RolesAdminController@store');
$this->add('admin-roles-update', 'RolesAdminController@update');
$this->add('admin-roles-delete', 'RolesAdminController@delete');
$this->add('admin-roles-edit', 'RolesAdminController@show');

$this->add('admin-kategoris', 'KategorisAdminController@index');
$this->add('admin-kategori-add', 'KategorisAdminController@add');
$this->add('admin-kategori-store', 'KategorisAdminController@store');
$this->add('admin-kategori-update', 'KategorisAdminController@update');
$this->add('admin-kategori-delete', 'KategorisAdminController@delete');
$this->add('admin-kategori-edit', 'KategorisAdminController@show');

$this->add('admin-lokers', 'LokersAdminController@index');
$this->add('admin-loker-add', 'LokersAdminController@add');
$this->add('admin-loker-store', 'LokersAdminController@store');
$this->add('admin-loker-update', 'LokersAdminController@update');
$this->add('admin-loker-delete', 'LokersAdminController@delete');
$this->add('admin-loker-edit', 'LokersAdminController@show');


