<?php

namespace Staff;

class Developer extends Employee implements Task
{
    protected string $language;
    protected string $type;


    public function __construct(string $id, string $firstName, string $lastName, string $email, string $gender, int $age, float $salary, string $language="", string $type="")
    {
        parent::__construct($id, $firstName, $lastName, $email, $gender, $age, $salary);
        $this->language = $language;
        $this->type = $type;
    }

    public function statusCheck()
    {
        print("Checking to do list.\n");
        print("Let's write some code!\n");
    }

    public function setLanguage($language)
    {
       $this->language = $language;
       print("Set language successfully to $language\n");
    }

    public function setType($type)
    {
       $this->type = $type;
       print("Set developer type successfully to $type\n");
    }


    public function develop()
    {
        return print("
                {
              {   }
               }_{ __{
            .-{   }   }-.
           (   }     {   )
           |`-.._____..-'|
           |             ;--.
           |            (__  \
           |             | )  )
           |             |/  /
           |             /  /    Writing Code...
           |            (  /
           \             y'
            `-.._____..-'
            ");
    }

    public function report(){
      return print("
        (\
        \'\
         \'\     __________
         / '|   ()_________)
         \ '/    \ ~~~~~~~~ \
           \       \ ~~~~~~   \     Writing Report...
           ==).      \__________\
          (__)       ()__________)
        ");
    }


}

