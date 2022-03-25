<!DOCTYPE html>
<html>
<body>

<?php
class Hero {
  public $name;
  public $human;

  function __construct($name, $human) {
    $this->name = $name; 
    $this->human = $human; 
  }
  function get_name() {
    return $this->name;
  }
  function get_human() {
    return $this->human;
  }
}

$manowar = new Hero("Manowar", "warrior");
echo $manowar->get_name();
echo "<br>";
echo $manowar->get_human();
?>
 
</body>
</html>
