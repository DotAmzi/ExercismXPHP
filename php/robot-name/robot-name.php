<?php

class Robot
{
    private $name;
    private $list_names = [];

    function __construct()
    {
        $this->createName();
    }

    function createName()
    {
        $name = $this->rand_string(2);
        $name .= rand(000, 999);

        if (!in_array($name, $this->list_names, true)) {
            array_push($this->list_names, $name);
            $this->name = $name;
        } else {
            $this->createName();
        }
    }

    function reset()
    {
        $this->createName();
    }


    function rand_string($quant)
    {
        $characters = str_split("ABCDEFGHIJKLMNOPQRSTVWXYZ");
        $char_rand = array_rand($characters, $quant);

        $return_value = '';

        foreach ($char_rand as $char) {
            $return_value .= $characters[$char];
        }

        return $return_value;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
