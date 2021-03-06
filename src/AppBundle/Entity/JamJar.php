<?php
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * JamJar
 *
 * @ORM\Table(name="jam_jar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JamJarRepository")
 */
class JamJar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="JamType", inversedBy="jamJars")
     * @ORM\JoinColumn(name="jam_type_id", referencedColumnName="id")
     */
    private $jamType;

    /**
     * @ORM\ManyToOne(targetEntity="Year", inversedBy="jamJars")
     * @ORM\JoinColumn(name="year_id", referencedColumnName="id")
     */
    private $jamYear;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     *
     */
    private $comment;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return JamJar
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set jamType
     *
     * @param \AppBundle\Entity\JamType $jamType
     *
     * @return JamJar
     */
    public function setJamType(\AppBundle\Entity\JamType $jamType = null)
    {
        $this->jamType = $jamType;

        return $this;
    }

    /**
     * Get jamType
     *
     * @return \AppBundle\Entity\JamType
     */
    public function getJamType()
    {
        return $this->jamType;
    }

    /**
     * Set jamYear
     *
     * @param \AppBundle\Entity\Year $jamYear
     *
     * @return JamJar
     */
    public function setJamYear(\AppBundle\Entity\Year $jamYear = null)
    {
        $this->jamYear = $jamYear;

        return $this;
    }

    /**
     * Get jamYear
     *
     * @return \AppBundle\Entity\Year
     */
    public function getJamYear()
    {
        return $this->jamYear;
    }
}
