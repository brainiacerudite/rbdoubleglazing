<?php

function getRootPath()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
}

function asset($path)
{
    echo (getRootPath() . $path);
}

function route($path = '')
{
    echo (getRootPath() . $path);
}