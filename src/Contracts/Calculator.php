<?php

namespace MiladTech\Shoppingcart\Contracts;

use MiladTech\Shoppingcart\CartItem;

interface Calculator
{
    public static function getAttribute(string $attribute, CartItem $cartItem);
}
