<?php
namespace MVC;
class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/mvc/")
        {
            $request->controller = "Tasks";
            $request->action = "index";
            $request->params = [];
        }
        elseif ($url == "/mvc/tasks/create/")
        {
            $request->controller = "Tasks";
            $request->action = "create";
            $request->params = [];
        }
        elseif (strpos($url,'tasks/delete'))
        {
            $request->controller = "Tasks";
            $request->action = "delete";
            $request->params = [basename($url)];
        }
        elseif (strpos($url,'tasks/edit'))
        {
            $request->controller = "Tasks";
            $request->action = "edit";
            $request->params = [basename($url)];
        }
        elseif ($url == "/mvc/person/")
        {
            $request->controller = "Person";
            $request->action = "index";
            $request->params = [];
        }
        elseif ($url == "/mvc/person/create/")
        {
            $request->controller = "Person";
            $request->action = "create";
            $request->params = [];
        }
        elseif (strpos($url,'person/delete'))
        {
            $request->controller = "Person";
            $request->action = "delete";
            $request->params = [basename($url)];
        }
        elseif (strpos($url,'person/edit'))
        {
            $request->controller = "Person";
            $request->action = "edit";
            $request->params = [basename($url)];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }

    }
}
?>