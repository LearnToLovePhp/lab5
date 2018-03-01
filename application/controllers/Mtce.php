<?php
class Mtce extends Application
{

    private $items_per_page = 10;

public function index()
{
    $this->page(1);

}

private function show_page($tasks)
{
    $role = $this->session->userdata('userrole');
    $this->data['pagetitle'] = 'TODO List Maintenance ('. $role . ')';
    // build the task presentation output
    $result = '';
    foreach($tasks as $task)
    {
        if (!empty($task->status))
        {
            $task->status = $this->app->status($task->status);
        }
        if ($role == ROLE_OWNER)
        {

            $result .= $this->parser->parse('oneitemx', (array) $task, true);
        }
        else
        {
            $result .= $this->parser->parse('oneitem', (array) $task, true);
        }
    }
    $this->data['display_tasks'] = $result;


    // pass on
    $this->data['pagebody'] = 'itemlist';
    $this->render();
}

// Extract & handle a page of item, defaulting to the beginning
public function page($num = 1)
{
    $records = $this->tasks->all();
    $tasks = array();

    $index = 0;
    $count = 0;
    $start = ($num - 1) * $this->items_per_page;

    foreach($records as $task)
    {
        if ($index++ >= $start)
        {
            $tasks[] = $task;
            $count++;
        }
        if ($count >= $this->items_per_page) break;
    }

    $this->data['pagination'] = $this->pagenav($num);
    $role = $this->session->userdata('userrole');
    if ($role == ROLE_OWNER)
    {
        $this->data['pagination'] .= $this->parser->parse('itemadd',[], true);
    }
    $this->show_page($tasks);
}

private function pagenav($num)
{
    $lastpage = ceil($this->tasks->size() / $this->items_per_page);
    $parms = array(
        'first' => 1,
        'previous' => (max($num -1, 1)),
        'next' => min($num+1, $lastpage),
        'last' => $lastpage
    );
    return $this->parser->parse('itemnav', $parms, true);
}

}