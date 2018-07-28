<?php

namespace Hortalizas\VentaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transporte
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Transporte
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_salida", type="datetime")
     */
    private $fechaSalida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_llegada", type="datetime")
     */
    private $fechaLlegada;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=100)
     */
    private $destino;

    /**
     * @var integer
     *
     * @ORM\Column(name="anticipo_flete", type="integer")
     */
    private $anticipoFlete;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer")
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_flete", type="integer")
     */
    private $totalFlete;

    /**
    * VINCULAR CON CAMION
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
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Transporte
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set fechaLlegada
     *
     * @param \DateTime $fechaLlegada
     * @return Transporte
     */
    public function setFechaLlegada($fechaLlegada)
    {
        $this->fechaLlegada = $fechaLlegada;

        return $this;
    }

    /**
     * Get fechaLlegada
     *
     * @return \DateTime 
     */
    public function getFechaLlegada()
    {
        return $this->fechaLlegada;
    }

    /**
     * Set anticipoFlete
     *
     * @param integer $anticipoFlete
     * @return Transporte
     */
    public function setAnticipoFlete($anticipoFlete)
    {
        $this->anticipoFlete = $anticipoFlete;

        return $this;
    }

    /**
     * Get anticipoFlete
     *
     * @return integer 
     */
    public function getAnticipoFlete()
    {
        return $this->anticipoFlete;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return Transporte
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set totalFlete
     *
     * @param integer $totalFlete
     * @return Transporte
     */
    public function setTotalFlete($totalFlete)
    {
        $this->totalFlete = $totalFlete;

        return $this;
    }

    /**
     * Get totalFlete
     *
     * @return integer 
     */
    public function getTotalFlete()
    {
        return $this->totalFlete;
    }
}
