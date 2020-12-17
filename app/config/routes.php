<?php 


$this->add('', 'FrontendController@index');
$this->add('login', 'FrontendController@login');
$this->add('register', 'FrontendController@register');
$this->add('cari-loker', 'FrontendController@cariLoker');
$this->add('info-loker', 'FrontendController@infoLoker');

// Admin Page

$this->add('admin-dashboard', 'DashboardController@index');
$this->add('admin-logout', 'DashboardController@logout');

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
$this->add('admin-loker-applicant', 'LokersAdminController@applicant');
$this->add('admin-update-loker-applicant', 'LokersAdminController@updateApplicant');
$this->add('admin-loker-applicant-pdf', 'LokersAdminController@applicantPdf');

$this->add('admin-jenjangs', 'JenjangsAdminController@index');
$this->add('admin-jenjang-add', 'JenjangsAdminController@add');
$this->add('admin-jenjang-store', 'JenjangsAdminController@store');
$this->add('admin-jenjang-update', 'JenjangsAdminController@update');
$this->add('admin-jenjang-delete', 'JenjangsAdminController@delete');
$this->add('admin-jenjang-edit', 'JenjangsAdminController@show');



//Login & Register 
$this->add('login', 'AuthController@login' );
$this->add('register', 'AuthController@register');
$this->add('register-user', 'AuthController@registerUser');
$this->add('auth', 'AuthController@auth');

// Users Dashboard
$this->add('user-dashboard', 'FrontendController@userDashboard');
$this->add('user-resume', 'FrontendController@userResume');
$this->add('user-upload-berkas', 'FrontendController@uploadBerkasUsers' );
$this->add('user-delete-berkas', 'FrontendController@deleteBerkasUser' );
$this->add('user-resume-pdf', 'FrontendController@userResumePdf');
$this->add('user-pengaturan', 'FrontendController@userPengaturan');
$this->add('user-lamaran', 'FrontendController@userLamaranKerja');
$this->add('user-bantuan', 'FrontendController@userBantuan');

$this->add('user-logout', 'FrontendController@userLogout');


$this->add('update-user-resume', 'FrontendController@updateUserResume');
$this->add('update-user-pengaturan', 'FrontendController@updateUserPengaturan');
$this->add('lamar-loker', 'FrontendController@lamarPekerjaan');



$this->add('admin-login', 'AuthController@adminLogin');
$this->add('admin-login-check', 'AuthController@adminLoginCheck');