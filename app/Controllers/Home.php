<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').
            view('Temple/Section_01').
            view('Temple/End')
            ;
    }

    public function About(): string
    {
        $data['title'] = 'About';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').
            view('Temple/Card').

            view('Temple/End')
            ;
    }

    public function Skills(): string
    {
        $data['title'] = 'Skills';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').

            view('Temple/End')
            ;
    }

    public function Services(): string
    {
        $data['title'] = 'Services';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').

            view('Temple/End')
            ;
    }

    public function Contact(): string
    {
        $data['title'] = 'Contact';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').
            
            view('Temple/End')
            ;
    }



    public function More(): string
    {
        $data['title'] = 'More';/* Change the "Home" to change the title */

        return 
            view('Temple/Head', $data).
            view('Temple/Nav_01').

            view('Temple/End')
            ;
    }





}
