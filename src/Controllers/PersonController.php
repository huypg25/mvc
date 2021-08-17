<?php

namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\PersonModel;
use MVC\Repo\PersonRepository;

class PersonController extends Controller
{

    function index()
    {
//        echo "helo";
        $p = new PersonRepository();
        $d['person'] = $p->showAllTasks();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {

        if (isset($_POST["name"])) {

            $p = new PersonRepository();
            $model = new PersonModel();
            $model->setName($_POST["name"]);
            $model->setAge($_POST["age"]);
            if ($p->create($model)) {
                header("Location: " . WEBROOT . "person/");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $p = new PersonRepository();
        $d["person"] = $p->showTask($id);
        $old = $p->get($id);
        $d["person"] = $old->getProperties();
        if (isset($_POST["name"])) {
            $model = new PersonModel();
            $model->setId($id);
            $model->setName($_POST["name"]);
            $model->setAge($_POST["age"]);
            if ($p->edit($model)) {
                header("Location: " . WEBROOT . "person/");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        $p = new PersonRepository();
        if ($p->delete($id)) {
            header("Location: " . WEBROOT . "person/");
        }
    }
}

?>