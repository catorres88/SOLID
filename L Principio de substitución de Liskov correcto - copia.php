<?php
{
abstract class Coche {

    // ...
    abstract int numAsientos();
}

class Renault extends Coche {

    // ...
    @Override
    int numAsientos() {
        return 5;
    }
}
// ...