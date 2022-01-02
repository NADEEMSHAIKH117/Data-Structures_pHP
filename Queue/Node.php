<?php

/**
 * Author -> Nadeem shaikh
 * PHP Version -> 8.1.1
 * Class for Node having data and next
 */
class Node
{
    public $data;
    public $next;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = NULL;
    }
}