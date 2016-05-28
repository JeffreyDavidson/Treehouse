<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Alena Holligan";

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();
echo $recipe1->source;
$recipe1->source = "Grandma Holligan";
echo $recipe1->source;

$recipe2 = new Recipe();
$recipe2->source = "Betty Crocker";
echo $recipe1->source;
echo $recipe2->source;
