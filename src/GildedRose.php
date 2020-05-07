<?php

namespace App;

class RosaDorada
{
    public $nombre;

    public $calidad;

    public $diasParaVencimiento;

    public function __construct($nombre, $calidad, $diasParaVencimiento)
    {
        $this->nombre = $nombre;
        $this->calidad = $calidad;
        $this->diasParaVencimiento = $diasParaVencimiento;
    }

    public static function of($nombre, $calidad, $diasParaVencimiento)
    {
        return new static($nombre, $calidad, $diasParaVencimiento);
    }

    public function tick()
    {
        if ($this->nombre != 'queso brie' and $this->nombre != 'pases de camerino') {
            if ($this->calidad > 0) {
                if ($this->nombre != 'sulfuras') {
                    $this->calidad = $this->calidad - 1;
                }
            }
        } else {
            if ($this->calidad < 50) {
                $this->calidad = $this->calidad + 1;

                if ($this->nombre == 'pases de camerino') {
                    if ($this->diasParaVencimiento < 11) {
                        if ($this->calidad < 50) {
                            $this->calidad = $this->calidad + 1;
                        }
                    }
                    if ($this->diasParaVencimiento < 6) {
                        if ($this->calidad < 50) {
                            $this->calidad = $this->calidad + 1;
                        }
                    }
                }
            }
        }

        if ($this->nombre != 'sulfuras') {
            $this->diasParaVencimiento = $this->diasParaVencimiento - 1;
        }

        if ($this->diasParaVencimiento < 0) {
            if ($this->nombre != 'queso brie') {
                if ($this->nombre != 'pases de camerino') {
                    if ($this->calidad > 0) {
                        if ($this->nombre != 'sulfuras') {
                            $this->calidad = $this->calidad - 1;
                        }
                    }
                } else {
                    $this->calidad = $this->calidad - $this->calidad;
                }
            } else {
                if ($this->calidad < 50) {
                    $this->calidad = $this->calidad + 1;
                }
            }
        }
    }
}
