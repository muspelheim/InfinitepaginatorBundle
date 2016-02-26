<?php

namespace Muspelheim\InfinitePaginatorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MuspelheimInfinitePaginatorBundle extends Bundle
{
    public function getParent()
    {
        return 'KnpPaginatorBundle';
    }
}
