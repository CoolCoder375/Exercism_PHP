<?php

class Lasagna
{
    public function expectedCookTime()
    {
        // Implement the expectedCookTime method
        $cookingTimeRequired = 40;
        return $cookingTimeRequired;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
        $cookingTimeRequired = $this->expectedCookTime();
        return ($cookingTimeRequired - $elapsed_minutes);
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        $requiredPrepTime = $layers_to_prep*2;
        return $requiredPrepTime;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
        $requiredPrepTime = $this->totalPreparationTime($layers_to_prep);
        return($elapsed_minutes + $requiredPrepTime);
    }

    public function alarm()
    {
        // Implement the alarm method
        return "Ding!";
    }
}
