<?php

use Gpanos\MorphAliasAttribute\Tests\Stubs\TestModel;
use Gpanos\MorphAliasAttribute\Tests\TestCase;

class MorphAliasTest extends TestCase
{
    public function test_custom_alias_is_applied()
    {
        $model = TestModel::make();

        $morphName = $model->getMorphClass();
        $this->assertEquals('test', $morphName);
    }
}
