<?php

namespace App\Entity;

use App\Repository\FizzbuzzRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * Powma\ServiceBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="fizz")
 * #[ORM\Entity(repositoryClass: FizzRepository::class)]
 */

class Fizzbuzz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $num_inicial;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $num_termino;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $fizzbuzz;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $Id): self
    {
        $this->Id = $Id;

        return $this;
    }

    public function getNumInicial(): ?int
    {
        return $this->num_inicial;
    }

    public function setNumInicial(?int $num_inicial): self
    {
        $this->num_inicial = $num_inicial;

        return $this;
    }

    public function getNumTermino(): ?int
    {
        return $this->num_termino;
    }

    public function setNumTermino(?int $num_termino): self
    {
        $this->num_termino = $num_termino;

        return $this;
    }

    public function getFecha(): ?string
    {
        return $this->fecha;
    }

    public function setFecha(?string $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFizzbuzz(): ?string
    {
        return $this->fizzbuzz;
    }

    public function setFizzbuzz(?string $fizzbuzz): self
    {
        $this->fizzbuzz = $fizzbuzz;

        return $this;
    }
}
