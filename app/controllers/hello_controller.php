<?php
class HelloController extends AppController
{
    public function index()
    {
	// hello world
        $message = Hello::getMessage();
        $this->set(get_defined_vars());
    }
}
