<?php

$I = new WebGuy($scenario);
$I->wantTo('verify that the home page welcomes me');
$I->amOnPage('/');

$I->fillField('username', 'JohnDoe');
$I->fillField('password', '1234');
$I->click('Submit');

/* $I->submitForm('#testForm', [ */
/*     'username' => 'JohnDoe', */
/*     'password' => '1234', */
/*     ]); */

/* $I->seeCurrentUrlEquals('/admin.php'); */
$I->seeInCurrentUrl('/admin.php');
$I->see('Welcome, JohnDoe', 'h1');
