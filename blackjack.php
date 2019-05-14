<?php
session_start();

class BlackJack
{
    // public $numbers = ["Two"=>2, "Three"=>3, "Four"=>4, "Five"=>5, "Six"=>6, "Seven"=>7, "Eight"=>8,
    // "Nine"=>9, "Ten"=>10, "Jack"=>10, "Queen"=>10, "King"=>10, "Ace"=>11];

    public $player = [];
    public $score = [];
    public $turn = true;

    public function Hit()
    {
        $this->player = [mt_rand(1, 11)];
        $this->score = array_sum($this->player);
    }

    public function Stand()
    {
        $this->turn = false;
        $_SESSION['Score'] = $this->score;
    }


    public function Surrender()
    {
        $_SESSION['Msg'] = "Dealer wins";
    }
}

$game = new BlackJack();
$game->Hit();
$game->Stand();

print "<pre>";
print_r($game->player);
print "</pre>";
print "<pre>";
print_r($game->score);
print "</pre>";
