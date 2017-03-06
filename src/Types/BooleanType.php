<?php

namespace Raml\Types;

use Raml\Exception\TypeValidationException;
use Raml\Type;

/**
 * BooleanType class
 *
 * @author Melvin Loos <m.loos@infopact.nl>
 */
class BooleanType extends Type
{
    /**
    * Create a new BooleanType from an array of data
    *
    * @param string    $name
    * @param array     $data
    *
    * @return BooleanType
    */
    public static function createFromArray($name, array $data = [])
    {
        $type = parent::createFromArray($name, $data);

        return $type;
    }

    public function validate($value)
    {
        if (!is_bool($value)) {
            throw TypeValidationException::unexpectedValueType('boolean', $value);
        }

        return true;
    }
}