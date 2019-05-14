<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consulta
 *
 * @ORM\Table(name="consulta", indexes={@ORM\Index(name="consulta-paciente_idx", columns={"id_paciente"}), @ORM\Index(name="consulta-profesional_idx", columns={"id_profesional"}), @ORM\Index(name="consulta-usuario_idx", columns={"id_usuario"}), @ORM\Index(name="consulta-tconsulta_idx", columns={"id_tconsulta"})})
 * @ORM\Entity
 */
class Consulta
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_consulta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsulta;

    /**
     * @var \AppBundle\Entity\Paciente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paciente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paciente", referencedColumnName="id_paciente")
     * })
     */
    private $idPaciente;

    /**
     * @var \AppBundle\Entity\Profesional
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Profesional")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_profesional", referencedColumnName="id_profesional")
     * })
     */
    private $idProfesional;

    /**
     * @var \AppBundle\Entity\TipoConsulta
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoConsulta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tconsulta", referencedColumnName="id_tconsulta")
     * })
     */
    private $idTconsulta;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


}

