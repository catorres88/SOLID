<?php
{
interface IAve {  
    void volar();
    void comer();
}

class Loro implements IAve{

    @Override
    public void volar() {
        //...
    }

    @Override
    public void comer() {
        //..
    }
}

class Tucan implements IAve{  
    @Override
    public void volar() {
        //...
    }

    @Override
    public void comer() {
        //..
    }
}