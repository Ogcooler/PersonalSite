<?php

class View 
{
    public function render($template, $data)
    {
        include LAYOUTS."$template";
        
    }
}