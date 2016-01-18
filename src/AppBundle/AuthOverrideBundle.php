<?php

// src/AppBundle/AuthOverrideBundle.php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Implemented to override the security controller of the FOS user bundle, so 
 * that we can customise the behaviour.
 */
class AuthOverrideBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

