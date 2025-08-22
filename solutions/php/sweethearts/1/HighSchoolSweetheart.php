<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initial(string $name): string
    {
        $first_letter = trim($name)[0];
        return strtoupper("$first_letter.");
        throw new \BadFunctionCallException("Implement the function");
    }

    public function initials(string $name): string
    {
        $Initials = explode(' ', trim($name));
        $first_letter = $Initials[0][0];
        $last_letter = $Initials[1][0];
        return strtoupper("$first_letter. $last_letter.");
        throw new \BadFunctionCallException("Implement the function");
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $sweetheart_a = $this->initials($sweetheart_a);
        $sweetheart_b = $this->initials($sweetheart_b);
        $line = $sweetheart_a . "  +  " . $sweetheart_b;
return <<<END
     ******       ******
   **      **   **      **
 **         ** **         **
**            *            **
**                         **
**     {$line}     **
 **                       **
   **                   **
     **               **
       **           **
         **       **
           **   **
             ***
              *
END;
        return $pattern;
        throw new \BadFunctionCallException("Implement the function");
    }
}
