<?php
namespace MVC\Repo;
use MVC\Models\PersonResourceModel;
class PersonRepository extends PersonResourceModel{
    public function create($model)
    {
        $personResourceModel = new PersonResourceModel;

        return $personResourceModel->save($model);
    }
    public function showTask($id)
    {
       return $this->get($id);
    }
    public function showAllTasks()
    {
        $personResourceModel = new PersonResourceModel;
        return $personResourceModel->getAll();
    }
    public function edit($model)
    {
        $personResourceModel = new PersonResourceModel;
        return $personResourceModel->save($model);
    }
    public function delete($id)
    {
        $personResourceModel = new PersonResourceModel;
        return $personResourceModel->remove($id);
    }

}