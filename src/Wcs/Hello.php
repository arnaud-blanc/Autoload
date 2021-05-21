<?php

namespace App\Wcs;


class Hello
{
    public function talk(): string
    {
        return "Hello World !";
    }
}

/*
Solution alternative pour la quête suivante : 
'Composer - 2. Package Management'

use HelloWorld\SayHello;

class Hello
{
    public function talk(): string
    {
        return SayHello::world();
    }
}
*/
