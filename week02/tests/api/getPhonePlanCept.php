<?php 
$I = new ApiTester($scenario);
$I->wantTo('get a great Phone Plan');
$I->sendGET('/', ['desiredData' => 20, 'desiredHours' => 20]);
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeResponseIsJson();
$I->seeResponseContainsJson([ 'company' => 'Oister', 'plan' => 'P4']);