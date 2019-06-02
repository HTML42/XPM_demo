<?php
Utilities::rm_dir(Xjsondb::$dir);
Xjsondb::initiate();

$userid = $GLOBALS['XLDB']->create_user(array(
    'username' => 'testuser',
    'email' => 'test@user.de',
    'password' => Xlogin::password('1234'),
        ));
$userid = $GLOBALS['XLDB']->create_user(array(
    'username' => 'testadmin',
    'email' => 'test@admin.de',
    'password' => Xlogin::password('1234'),
        ));

$response['status'] = 200;
$response['success'] = true;