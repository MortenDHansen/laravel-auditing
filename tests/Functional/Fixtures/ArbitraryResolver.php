<?php

namespace OwenIt\Auditing\Tests\Functional\Fixtures;

use OwenIt\Auditing\Contracts\Resolver;

class ArbitraryResolver implements Resolver
{

    public static function resolve($model)
    {
        return 'Did my job!';
    }
}
