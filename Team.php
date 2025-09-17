<?php
namespace WorldCup;

class Team {
    public $name;
    public $coach;
    public $players;

    public function __construct($name) {
        $this->name = $name;
    }

    public function play() {
        echo "playing\n";
    }

    public function attack() {
        echo "attacking\n";
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getCoach() {
        return $this->coach;
    }

    public function setCoach($coach) {
        $this->coach = $coach;
    }

    public function getPlayers() {
        return $this->players;
    }

    public function setPlayers($players) {
        $this->players = $players;
    }
}

