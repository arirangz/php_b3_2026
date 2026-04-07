<?php

class Player
{
    protected string $nickname;
    protected int $health;

    protected static ?Player $instance = null;

    private function __construct(string $nickname, int $health = 100)
    {
        $this->nickname = $nickname;
        $this->health = $health;
    }

    public static function getInstance(string $nickname, int $health = 100):Player
    {
        if (self::$instance === null) {
            self::$instance = new Player($nickname, $health);
        }

        return self::$instance;
    }

}