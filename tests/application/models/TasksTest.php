<?php
use PHPUnit\Framework\TestCase;

class TasksTest extends TestCase {

    function setUp()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('task');
        $this->CI->load->model('tasks');
        $this->list = new Tasks();
    }

    function testTasklistHasMoreCompletedThanIncompleteTasks()
    {
        $complete = 0;
        $incomplete = 0;

        foreach($this->list as $task)
        {
            if($task->status == 0)
            {
                $incomplete++;
            }
            else
            {
                $complete++;
            }
        }

        $this->assertGreaterThan($complete,$incomplete,"Complete should be greater than incomplete");
    }
}