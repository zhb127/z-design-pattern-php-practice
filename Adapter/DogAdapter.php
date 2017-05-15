<?php

namespace Adapter;

class DogAdapter extends Dog
{

    public function cry()
    {
        parent::wang();
    }

    public function move()
    {
        parent::run();
    }
}