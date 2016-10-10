<?php

namespace P94LP;

class TestHandler extends \Fruit\AbstractHandler
{
    public function qq()
    {
        $this->request->parse();

        return [
            'file' => $this->request->file,
            'form' => $this->request->form,
            'env' => $this->request->env,
        ];
    }

    public static function __set_state(array $data)
    {
        return new self;
    }
}
