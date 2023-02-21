<?php

use Magento\Framework\Component\ComponentRegistrar;
 
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'MyVendor_BasicModule',
    __DIR__
);
