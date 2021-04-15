<?php

declare(strict_types=1);

namespace App;

class RosaDorada
{
    public string $nombre;

    public int $calidad;

    public int $diasParaVencimiento;

    public function __construct(string $nombre, int $calidad, int $diasParaVencimiento)
    {
        $this->nombre = $nombre;
        $this->calidad = $calidad;
        $this->diasParaVencimiento = $diasParaVencimiento;
    }

    public function tick(): void
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
                        } else {
                            $this->calidad = 50;
                        }
                    }
                    if ($this->diasParaVencimiento < 6) {
                        if ($this->calidad < 50) {
                            $this->calidad = $this->calidad + 1;
                        } else {
                            $this->calidad = 50;
                        }
                    }
                }
            } else {
                $this->calidad = 50;
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
                } else {
                    $this->calidad = 50;
                }
            }
        }
    }
}
