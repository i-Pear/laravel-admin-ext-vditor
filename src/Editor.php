<?php

namespace iPear\Vditor;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    protected $view = 'laravel-admin-ext-vditor::editor';
    protected static $css = [
        'vendor/laravel-admin-ext/vditor/vditor-3.8.6/css/vditor.css'
    ];
    protected static $js = [
        'vendor/laravel-admin-ext/vditor/vditor-3.8.6/js/vditor.index.min.js'
    ];

    public function render()
    {
        $sign = $this->formatName($this->column);

        $this->script = <<<EOT

        var Vditor{$this->id};
        $(document).ready(function(){
            Vditor{$this->id} = new Vditor(
                document.getElementById("problem-content-vditor-{$this->id}"),
                {cache: {enable: false}}
            );
        });
EOT;
        return parent::render();
    }
}
