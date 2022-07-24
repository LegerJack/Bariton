<?php
namespace Src\Components;

use Src\Patterns\Singltone;

class DataBaseParameters extends Singltone
{
    private $parameters = array();

    public function set(string $name, $value)
    {
        if ($name == '') {
            $this->parameters[] = $value;
        }
        $this->parameters[$name] = $value;
    }

    public function get(string $name)
    {
        if (array_key_exists($name, $this->parameters)) {
            return $this->parameters[$name];
        }

        return null;
    }
}