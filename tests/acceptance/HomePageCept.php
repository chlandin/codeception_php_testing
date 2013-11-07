<?php

$I = new WebGuy($scenario);
$I->wantTo('verify that the home page welcomes me');
$I->amOnPage('/');
$I->see('Welcome', 'h1');
