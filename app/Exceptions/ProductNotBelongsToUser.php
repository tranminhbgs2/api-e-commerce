<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function reder()
    {
        return ['data' => 'Product Not Belongs to User'];
    }
}
