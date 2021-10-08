<?php

namespace Gpanos\MorphAliasAttribute;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
class MorphAlias
{
    public function __construct(public string $alias)
    {
    }
}
