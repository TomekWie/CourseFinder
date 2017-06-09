<?php

namespace CourseFinderBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;// przy relacjach do wielu


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

/**
* @ORM\OneToMany(targetEntity="Review", mappedBy="user")
*/
private $reviews;
  
  
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  public function __construct() {
    parent::__construct();
    $this->reviews = new ArrayCollection();
  }


    /**
     * Add reviews
     *
     * @param \CourseFinderBundle\Entity\Review $reviews
     * @return User
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
}
