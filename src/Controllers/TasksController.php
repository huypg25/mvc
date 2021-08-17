<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Repo\TaskRepository;

class TasksController extends Controller
{

    function index()
    {
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->showAllTasks();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {

        if (isset($_POST["title"])) {

            $task = new TaskRepository();
            $model = new TaskModel();
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            var_dump(get_object_vars($model));
            if ($task->create($model)) {
                header("Location: " . WEBROOT . "");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $task = new TaskRepository();
        $d["task"] = $task->showTask($id);
        $old = $task->get($id);
        $d["task"] = $old->getProperties();
        if (isset($_POST["title"])) {
            $model = new TaskModel();
            $model->setId($id);
            $model->setTitle($_POST["title"]);
            $model->setDescription($_POST["description"]);
            if ($task->edit($model)) {
                header("Location: " . WEBROOT . "");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $task = new TaskRepository();
        if ($task->delete($id)) {
            header("Location: " . WEBROOT . "");
        }
    }
}

?>