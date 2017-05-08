<?php

namespace Gintonic;

trait ContainerTrait
{
    /**
     * @param string $id
     * @return mixed Entry
     */
    public function get($id)
    {
        return $this->$id();
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has($id)
    {
        return in_array($id, get_class_methods($this));
    }
}
