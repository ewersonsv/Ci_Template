<?php 
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Template {
    var $template_data = array();
    function set($name, $value){
      $this->template_data[$name] = $value;
    }
    function load($PATH = 'web', $LANG = 'por', $TEMPLATE = 'default', $VIEW = null, $DATA = null){
      /*************************************************************
       *** Carregar: Pasta, Idioma, Template, view(PHP) & Array. ***
       *************************************************************/
      $PASTE = $PATH.'/'.$LANG.'/'.$TEMPLATE;
      $LOADVIEW = $PASTE.'/'.$VIEW;
      $this->CI =& get_instance();
      return $this->CI->load->view($LOADVIEW, $DATA);
    }
  }
