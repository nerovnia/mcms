<?php

/* namespace model; */
class template_class
{

    public $values = array();

    public $html;
/*
    public function get_tpl($tpl)
    {
        $this->html = $tpl;
    }
*/

function get_tpl($tpl_name) {
  if ((empty($tpl_name)) || (!file_exists($tpl_name))) {
      return false;
  } else {
      $this->html = join('', file($tpl_name));
  }
}


    public function set_value($key, $var)
    {
        $key = '{' . $key . '}';
        $this->values[$key] = $var;
    }

    public function tpl_parse()
    {
        foreach ($this->values as $find => $replace) {
            $this->html = str_replace($find, $replace, $this->html);
        }
    }
}

?>
