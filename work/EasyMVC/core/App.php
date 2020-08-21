<?php

class App {
    
    public function __construct() {
        $url = $this->parseUrl();
        
        $controllerName = "{$url[0]}Controller";
        if (!file_exists("controllers/$controllerName.php"))
            return;
        require_once "controllers/$controllerName.php";//已經require給index，以require為準的路徑
        $controller = new $controllerName;
        $methodName = isset($url[1]) ? $url[1] : "index";
        // if (!method_exists($controller, $methodName))
        //     return;
        unset($url[0]); unset($url[1]);// 刪除變數
        $params = $url ? array_values($url) : Array();
        call_user_func_array(Array($controller, $methodName), $params);
        //var_dump($params) ;
    }
    
    public function parseUrl() {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = explode("/", $url);//用來切割字串
            return $url;
        }
    }
    
}

?>