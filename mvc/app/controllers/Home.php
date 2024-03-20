<?php

class Home extends Controller
{
    public function Index()
    {
        $user = new User();
        $data = $user->findAll();
        show($data);

        $this->view('home');
    }
}