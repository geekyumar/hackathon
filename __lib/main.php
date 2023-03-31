<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/____templates/$name.html";
}