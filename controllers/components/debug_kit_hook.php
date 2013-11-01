<?php
class DebugKitHookComponent extends Object {
    var $registerHooks = array('initialize');
    function initialize($controller){
        $controller->components[] = 'DebugKit.Toolbar';
        $controller->Component->init($controller);
        $controller->Toolbar->initialize($controller,array());
    }
}
