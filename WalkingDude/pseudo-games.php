
<?php
class Game
{
    function action()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class Fight
{
    function punch()
    {
        Game::kill();
    }
}

$a = new Game();
$a->action();

A::foo();

$b = new Fight();
$b->kill();

Action::kill();
?>
