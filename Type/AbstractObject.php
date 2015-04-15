<?php

namespace CL\DocData\Component\OrderApi\Type;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
abstract class AbstractObject implements TypeInterface
{
    /**
     * @return array
     */
    public function toArray()
    {
        $return = [];

        foreach ($this as $name => $value) {
            if ($value === null) {
                continue;
            }

            if ($value instanceof TypeInterface) {
                $data = $value->toArray();
            } else if (is_array($value)) {
                foreach($value as $element) {
                    if ($element instanceof TypeInterface) {
                        $data[] = $element->toArray();
                    }
                    else {
                        $data[] = (string) $value;
                    }
                }
            } else {
                $data = (string) $value;
            }

            $return[$name] = $data;
        }

        return $return;
    }
}
