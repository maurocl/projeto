<?php
class User {

    private string $name;
    private string $email;
    
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function __toString():string {
      return sprintf("Name: %s, Email: %s", $this->name, $this->email);
    }


}