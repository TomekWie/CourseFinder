<?php

namespace CourseFinderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;// przy relacjach do wielu


/**
 * School
 *
 * @ORM\Table(name="school")
 * @ORM\Entity(repositoryClass="CourseFinderBundle\Repository\SchoolRepository")
 */
class School
{
/**
* @ORM\OneToMany(targetEntity="Review", mappedBy="school")
*/
private $reviews;

/**
* @ORM\OneToMany(targetEntity="Course", mappedBy="school")
*/
private $courses;

public function __construct() {
$this->reviews = new ArrayCollection();
$this->courses = new ArrayCollection();
}
  
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
     * @ORM\Column(name="name", type="text")
     */
    private $name;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * 
     */
    private $description;
    
    

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="text", nullable=true)
     */
    private $img;


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
     * Set description
     *
     * @param string $description
     * @return School
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return School
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Add reviews
     *
     * @param \CourseFinderBundle\Entity\Review $reviews
     * @return School
     */
    public function addReview(\CourseFinderBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \CourseFinderBundle\Entity\Review $reviews
     */
    public function removeReview(\CourseFinderBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add courses
     *
     * @param \CourseFinderBundle\Entity\Course $courses
     * @return School
     */
    public function addCourse(\CourseFinderBundle\Entity\Course $courses)
    {
        $this->courses[] = $courses;

        return $this;
    }

    /**
     * Remove courses
     *
     * @param \CourseFinderBundle\Entity\Course $courses
     */
    public function removeCourse(\CourseFinderBundle\Entity\Course $courses)
    {
        $this->courses->removeElement($courses);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return School
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
