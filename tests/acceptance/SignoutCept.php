<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('open sign in page.');
$I->amOnPage("/");
$I->see('Sign In');
$I->seeInTitle('Todone | Sign In');
$I->fillField('email', 'shootacean@gmail.com');
$I->fillField('password', 'qwerty');
$I->click('sign-in');
$I->seeInTitle('Todone | Home');
$I->see('Welcome to Todone!');
$I->click('sign-out');
$I->see('Sign In');
