<?php


abstract class BaseController
{
    public abstract function create();
    public abstract function view();
    public abstract function listAll();
    public abstract function update();
    public abstract function delete();
}