<?php

namespace Adapter;

class BirdAdapter extends Bird
{

    public function cry()
    {
        parent::tweet();
    }

    public function move()
    {
        parent::fly();
    }
}