<?php

namespace App\Models;

use App\Http\Controllers\Model;

class Game extends Model
{
    protected $fillable = ['hunger', 'happiness', 'energy'];

    public function feed()
    {
        $this->hunger -= 10;
        $this->happiness += 5;
        $this->energy -= 2;

        $this->save();
    }

    public function play()
    {
        $this->hunger -= 5;
        $this->happiness += 10;
        $this->energy -= 5;

        $this->save();
    }

    public function rest()
    {
        $this->hunger -= 5;
        $this->happiness -= 5;
        $this->energy += 10;

        $this->save();
    }

    public function updateState()
    {
        $this->hunger += 5;
        $this->happiness -= 5;
        $this->energy -= 5;

        $this->save();
    }
}
