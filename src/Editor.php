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
        $config = config('admin.extensions.vditor.edit-config') ?? '{cache:{enable:false}}';
        $this->script = <<<EOT

        var Vditor{$this->id};

        function submitMarkdown{$this->id}(){
            document.getElementById("vditor-data-{$this->id}").value=Vditor{$this->id}.getValue();
            return true;
        }

        $(document).ready(function(){
            var form_element=document.getElementById("vditor-{$this->id}");
            while(form_element!==null){
                if(form_element.tagName!="FORM"){
                    form_element=form_element.parentElement;
                }else{
                    break;
                }
            }
            if(form_element!==null){
                form_element.onsubmit=submitMarkdown{$this->id};
            }
            Vditor{$this->id} = new Vditor(
                document.getElementById("vditor-{$this->id}"),
                {$config}
            );
        });
EOT;
        return parent::render();
    }
}
