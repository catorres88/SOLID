<?php
{
public static void imprimirNumAsientos(Coche[] arrayCoches){  
        for (Coche coche : arrayCoches) {
            System.out.println(coche.numAsientos());
        }
    }

imprimirNumAsientos(arrayCoches);