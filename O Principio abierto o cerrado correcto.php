<?php
abstract class Coche {  
    // ...
    abstract int precioMedioCoche();
}

class Renault extends Coche {  
    @Override
    int precioMedioCoche() { return 18000; }
}

class Audi extends Coche {  
    @Override
    int precioMedioCoche() { return 25000; }
}

class Mercedes extends Coche {  
    @Override
    int precioMedioCoche() { return 27000; }
}

public static void main(String[] args) {

    Coche[] arrayCoches = {
            new Renault(),
            new Audi(),
            new Mercedes()
    };

    imprimirPrecioMedioCoche(arrayCoches);
}

public static void imprimirPrecioMedioCoche(Coche[] arrayCoches){  
    for (Coche coche : arrayCoches) {
        System.out.println(coche.precioMedioCoche());
    }
}