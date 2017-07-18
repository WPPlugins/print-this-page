<?php
/**
 * Meta base class for plugin
 */

namespace deareight\dear\wordpress;

defined('ABSPATH') or die('Ready for fun? :-) ');

trait MetaTrait {



    public function addMethod($methodName, $methodCallable) {
    }

    public function __call($methodName, array $args) {
    }
	
}