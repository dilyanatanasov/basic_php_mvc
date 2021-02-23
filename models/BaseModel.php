<?php


abstract class BaseModel extends Db
{
    public abstract function view();
    public abstract function list();
    public abstract function update();
    public abstract function delete();
}