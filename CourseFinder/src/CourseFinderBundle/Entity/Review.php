<?php

namespace CourseFinderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Reviev
 *
 * @ORM\Table(name="review")
 * @ORM\Entity(repositoryClass="CourseFinderBundle\Repository\RevievRepository")
 */
class Review
{
  
/**
* @ORM\ManyToOne(targetEntity="School", inversedBy="reviews")
* @ORM\JoinColumn(name="school_id", referencedColumnName="id")
*/
private $school;

/**
* @ORM\ManyToOne(targetEntity="Course", inversedBy="reviews")
* @ORM\JoinColumn(name="course_id", referencedColumnName="id")
*/
private $course;

/**
* @ORM\ManyToOne(targetEntity="User", inversedBy="reviews")
* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
*/
private $user;






    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @var int
     *
     * @ORM\Column(name="stars", type="integer", nullable=true)
     */
    private $stars;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creationDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="verified", type="boolean", nullable=true)
     */
    private $verified;

    /**
     * @var bool
     *
     * @ORM\Column(name="anonymous", type="boolean", nullable=true)
     */
    private $anonymous;


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
     * Set content
     *
     * @param string $content
     * @return Reviev
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set stars
     *
     * @param integer $stars
     * @return Reviev
     */
    public function setStars($stars)
    {
        $this->stars = $stars;

        return $this;
    }

    /**
     * Get stars
     *
     * @return integer 
     */
    public function getStars()
    {
        return $this->stars;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Reviev
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set verified
     *
     * @param boolean $verified
     * @return Reviev
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return boolean 
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set anonymous
     *
     * @param boolean $anonymous
     * @return Reviev
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;

        return $this;
    }

    /**
     * Get anonymous
     *
     * @return boolean 
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set school
     *
     * @param \CourseFinderBundle\Entity\School $school
     * @return Review
     */
    public function setSchool(\CourseFinderBundle\Entity\School $school = null)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \CourseFinderBundle\Entity\School 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set course
     *
     * @param \CourseFinderBundle\Entity\Course $course
     * @return Review
     */
    public function setCourse(\CourseFinderBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \CourseFinderBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set user
     *
     * @param \CourseFinderBundle\Entity\User $user
     * @return Review
     */
    public function setUser(\CourseFinderBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CourseFinderBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
