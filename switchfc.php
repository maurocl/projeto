<?php
class SwitchFC {
    
private string $name;
private string $ip;

/**
 * 
 */
  public function __construct($name, $ip) {
    $this->name = $name;
    $this->ip = $ip;
  }

  /**
   * 
   */
  public function getName():string {
    return $this->name;
  } 

  /**
   * 
   */
  public function getIP():string {
    return $this->ip;
  }
  


}