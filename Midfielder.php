<?php
namespace WorldCup;

class Midfielder extends Player {
    private $vision;

    public function isVision() {
        return $this->vision;
    }

    public function setVision($vision) {
        $this->vision = $vision;
    }

    public function organize() {
        echo "organizing\n";
    }
}

