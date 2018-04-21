<?php 
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('open my home page.');
$I->amOnPage("/home");
$I->seeInTitle('Todone | Home');
$I->see('Welcome to Todone!');