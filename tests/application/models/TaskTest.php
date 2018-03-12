<?php
use PHPUnit\Framework\TestCase;


class TaskTest extends TestCase
{
    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->task = new Task();
    }


    function testSetIdNull() {
        $this->expectException('InvalidArgumentException');
        $this->task->setId(null);
    }



    function testSetIdSetToValidValue() {
        $data = 30;
        $this->task->setId($data);
        $this->assertTrue($this->task->id == $data, "ID was not set to given value");
    }

    function testSetTaskNull() {
        $this->expectException('InvalidArgumentException');
        $this->task->setName(null);
    }

    function testSetTaskTitleGreaterThanMaxChar() {
        $data = "A really long title for a really long task that needs a "
        ."really long title so that the task is very long and needs a long title";
        $this->expectException('InvalidArgumentException');
        $this->task->setName($data);
    }

    function testSetTaskWithInvalidCharacters() {
        $data = "Title.:;;;;?%#4";
        $this->expectException('InvalidArgumentException');
        $this->task->setName($data);
    }

    function testSetTaskValidData() {
        $data = "Please update the blah blah";
        $this->task->setName($data);
        $this->assertTrue($this->task->task == $data, "Task title is not equal to input title.");
    }

    function testSetPriorityGreaterThanMaxValue() {
        $data = 10;
        $this->expectException('InvalidArgumentException');
        $this->task->setPriority($data);
    }

    function testSetPriorityLessThanMinValue() {
        $data = -1;
        $this->expectException('InvalidArgumentException');
        $this->task->setPriority($data);
    }

    function testSetPriorityValidData() {
        $data = 2;
        $this->task->setPriority($data);
        $this->assertTrue($this->task->priority == $data, "Priority is not equal to input value.");
    }

    function testSetSizeGreaterThanMaxValue() {
        $data = 10;
        $this->expectException('InvalidArgumentException');
        $this->task->setSize($data);
    }

    function testSetSizeLessThanMinValue() {
        $data = -1;
        $this->expectException('InvalidArgumentException');
        $this->task->setSize($data);
    }

    function testSetSizeValidData() {
        $data = 2;
        $this->task->setSize($data);
        $this->assertTrue($this->task->size == $data, "Size is not equal to input value.");
    }

    function testSetGroupGreaterThanMaxValue() {
        $data = 6;
        $this->expectException('InvalidArgumentException');
        $this->task->setGroup($data);
    }

    function testSetGroupLessThanMinValue() {
        $data = -1;
        $this->expectException('InvalidArgumentException');
        $this->task->setGroup($data);
    }

    function testSetGroupValidData() {
        $data = 1;
        $this->task->setGroup($data);
        $this->assertTrue($this->task->group == $data, "Group is not equal to input value.");
    }
}