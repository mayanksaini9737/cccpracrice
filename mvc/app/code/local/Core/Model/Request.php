<?php
class Core_Model_Request {
    protected $_controllerName;
    protected $_actionName;
    protected $_moduleName; 
    
	public function __construct(){
        $reqUri = $this->getRequestUri();
        $url = explode("/", $reqUri);
        $this->_moduleName= $url[0];
        $this->_controllerName = $url[1];
        $this->_actionName = $url[2];
	}

	public function getRequestUri(){
		$uri = $_SERVER['REQUEST_URI'];
        $uri = str_replace("/Practice/mvc/",'',$uri);
		return $uri;
	}

	public function getParams($key = '') {
		return ($key == '')
			? $_REQUEST
			: (isset($_REQUEST[$key])
				? $_REQUEST[$key]
				: ''
			);
	}

	public function getPostData($key = '') {
		return ($key == '')
			? $_POST
			: (isset($_POST[$key])
				? $_POST[$key]
				: ''
			);
	}

	public function getQueryData($key = '') {
		return ($key == '')
			? $_GET
			: (isset($_GET[$key])
				? $_GET[$key]
				: ''
			);
	}

	public function isPost()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    return true;
		}
		return false;
	}

    public function getControllerName(){
        return $this->_controllerName;  
    }

    public function getActionName(){
        return $this->_actionName;
    }
    public function getModuleName(){
        return $this->_moduleName;
    }

    public function getFullControlClass(){
        $controllerClass = implode('_',['Page','Controller', ucfirst($this->_controllerName)]);
        return $controllerClass;
    }

}



