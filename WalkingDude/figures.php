<!DOCTYPE html>
<html>
<body>

<?php
class Hero {
  private $_name;
  private $_human;

  function __construct($name, $human) {
    $this->_name = $name; 
    $this->_human = $human; 
  }
  function get_name() {
    return $this->_name;
  }
  function get_human() {
    return $this->_human;
  }
}

$manowar = new Hero("Manowar", "warrior");
echo $manowar->get_name();
echo "<br>";
echo $manowar->get_human();
?>
 
</body>
</html>
