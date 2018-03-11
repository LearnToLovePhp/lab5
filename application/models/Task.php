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
            throw new InvalidArgumentException('A name cannot be empty');
        }

        $tmp = str_replace(" ", "", $value);
        if (!ctype_alnum($tmp))
            throw new InvalidArgumentException('A task can only contain alphanumeric characters');

        if (strlen($value) > 64)
        {
            throw new InvalidArgumentException('A name cannot be longer than 64 characters');
        }
        $this->task = $value;
        return $this;
    }

    public function setPriority($value) {
        $intVal = intval($value);
        if ($intVal > 3 || $intVal < 0)
            throw new InvalidArgumentException('Priority must be from 0 - 3');
        $this->priority = $intVal;
        return $intVal;
    }
    public function setSize($value) {
        $intVal = intval($value);
        if ($intVal > 3 || $intVal < 0)
            throw new InvalidArgumentException('Size must be from 0 - 3');
        $this->size = $intVal;
        return $intVal;
    }
    public function setGroup($value) {
        $intVal = intval($value);
        if ($intVal > 4 || $intVal < 0)
        {
            throw new InvalidArgumentException('Group must be from 0-4');
        }
        $this->group = $intVal;
        return $intVal;
    }
    public function setDeadline($value) {
        $this->deadline = $value;
        return $value;
    }
    public function setStatus($value) {
        $this->status = $value;
        return $value;
    }
    public function setFlag($value) {
        $this->flag = $value;
        return $value;
    }

}