<?php

/* namespace model; */
class html_block_class
{
  private $parent_block;
  private $css = array();
  private $tpl = array();
  private $js = array();
  private $child_blocks = array();

    public $html;

    public function get_tpl($tpl)
    {
        $this->html = $tpl;
    }

    /*
     * function get_tpl($tpl_name) {
     * if ((empty($tpl_name)) || (!file_exists($tpl_name))) {
     * return false;
     * } else {
     * $this->html = join('', file($tpl_name));
     * }
     * }
     */
    public function set_value($key, $var)
    {
       //echo '</br>' . 'key = ' . $key . '</br>';
        $key = '{' . $key . '}';
        //echo '</br>' . 'key = ' . $key . '</br>';
        //echo $this->html+=$key;
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
