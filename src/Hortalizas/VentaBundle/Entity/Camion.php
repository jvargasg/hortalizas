<?php

namespace Hortalizas\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Camion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Camion
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
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=6)
     */
    private $patente;

    /**
    * VINCULAR CON CHOFER, PRODUCTOS CARGADOS, CARRO Y VENDEDOR
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
     * Set patente
     *
     * @param string $patente
     * @return Camion
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string 
     */
    public function getPatente()
    {
        return $this->patente;
    }
}
