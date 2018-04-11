<?php
/**
 * Created by PhpStorm.
 * User: vmadmin
 * Date: 25.10.2017
 * Time: 10:46
 */

namespace helper;

class FormHelper extends BaseHelper
{

    public function createForm(string $name,
                               string $action,
                               string $method = 'POST',
                               string $id="",
                               string $class="login-form",
                               array $options = []
    ):string{
        return "<form action='$action' method='$method' name='$name'id='$id' class='$class'>";
    }

    public function inputGroup(string $name, string $classes, array $options = [], string $type){
        $this->renderer->setAttribute('name', $name);
        $this->renderer->setAttribute('classes', $classes);
       if(isset($type)){
           $this->renderer->setAttribute("type",$type);
       }
        $this->renderer->setAttribute('options', $options);
       if(isset($options['label'])){
           $this->renderer->setAttribute('label', $options['label']);
       }
       if(isset($options['placeholder'])){
           $this->renderer->setAttribute('placeholderText',$options['placeholder']);
       }
       if(isset($options['value'])){
           $this->renderer->setAttribute('valueText',$options['value']);
       }
        $required=(isset($options['required']))?true:false;
        $this->renderer->setAttribute('labelText', $options['label']);
        $this->renderer->renderByFileName('input-group.php');
    }

    public function input(
        string $name,
        string $classes,
        array $options = []
    ){
        return "<input type='text' name='$name' class='$classes'>";
    }

    public function endForm():string{
        return "</form>";
    }

}