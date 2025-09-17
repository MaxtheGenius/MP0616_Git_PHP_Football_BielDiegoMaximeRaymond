<?php
namespace WorldCup;

class Goalkeeper extends Player {
    public $globes;

    public function isGlobes() {
        return $this->globes;
    }

    public function setGlobes($globes) {
        $this->globes = $globes;
    }

    public function block(Ball $ball) {
        $effects = ["with success", "without success"];
        $effect = $effects[array_rand($effects)];
        echo "catching $effect\n";
    }
}
