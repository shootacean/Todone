<?php 
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('perform actions and see result');
$I->amOnPage("/");
$I->see('Welcome to CodeIgniter!');