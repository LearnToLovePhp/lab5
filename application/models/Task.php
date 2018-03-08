<?php
/**
 * Created by PhpStorm.
 * User: Juliana French
 * Date: 2018-03-08
 * Time: 1:58 PM
 */

class Task extends Entity
{
    protected $id;
    protected $task;
    protected $priority;
    protected $size;
    protected $group;
    protected $deadline;
    protected $status;
    protected $flag;

    // ID must be present
    public function setId($value)
    {
        if (empty($value))
        {
            throw new InvalidArgumentException('An ID must have a value');
        }
        $this->id = $value;
        return $this;
    }

    // Name must be present, less than 64 char
    public function setName($value)
    {
        if (empty($value))
        {
            throw new Exception('A name cannot be empty');
        }
        if (strlen($value) > 64)
        {
            throw new Exception('A name cannot be longer than 64 characters');
        }
        $this->task = $value;
        return $this;
    }

}