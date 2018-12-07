<?php
require SQLite3::class;

$admin_users = [
    [
        'username' => 'juani2',
        'password' => 'password'
    ],
    [
        'username' => 'mcangela',
        'password' => 'password'
    ],
    [
        'username' => 'Sancuervo',
        'password' => 'password'
    ],
];


$admin_users1 = new PDO('sqlite:/tmp/restaurant.db');
//$admin_users1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$sql = "SELECT * FROM users";
//$result = $admin_users1->query($sql);

unset($db);


function isUserFound($user){
    $isFound = false;
    foreach ($GLOBALS['admin_users'] as $u){
        if($u['username'] == $user) $isFound = true;
    }

    return $isFound;
}
?>