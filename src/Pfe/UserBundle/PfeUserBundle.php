<?php
// src/Wbi/UserBundle/WbiUserBundle.php

namespace Pfe\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PfeUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}