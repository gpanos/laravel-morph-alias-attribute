<?php

namespace Gpanos\MorphAliasAttribute\Tests\Stubs;

use Gpanos\MorphAliasAttribute\MorphAlias;
use Illuminate\Database\Eloquent\Model;

#[MorphAlias('test')]
class TestModel extends Model
{
}
