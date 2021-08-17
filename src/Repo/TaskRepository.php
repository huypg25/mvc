<?php
namespace MVC\Repo;
use MVC\Models\TaskResourceModel;
class TaskRepository extends TaskResourceModel{
    public function create($model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->save($model);
    }
    public function showTask($id)
    {
       return $this->get($id);
    }
    public function showAllTasks()
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->getAll();
    }
    public function edit($model)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->save($model);
    }
    public function delete($id)
    {
        $taskResourceModel = new TaskResourceModel;
        return $taskResourceModel->remove($id);
    }

}