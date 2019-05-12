<h1>DB Test</h1>
<?php

if (isset($_GET['useradd'])) {
    Xjsondb::insert('users', array(
        'username' => 'testuser',
    ));
}

if (isset($_GET['select'])) {
    debug(Xjsondb::select('users', 2));
}

