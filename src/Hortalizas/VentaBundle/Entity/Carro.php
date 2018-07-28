<?php

namespace Hortalizas\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carro
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Carro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacidad", type="integer")
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10)
     */
    private $codigo;

    /**
    * VINCULAR CON CAMION, PRODUCTOS CARGADOS Y VENDEDOR
    */


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set capacidad
     *
     * @param integer $capacidad
     * @return Carro
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return integer 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Carro
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
}
