<?php

namespace CourseFinderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request; // obiekt Request
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use CourseFinderBundle\Entity\Course;
use CourseFinderBundle\Entity\Review;
use CourseFinderBundle\Entity\School;

class SearchController extends Controller {

  /**
   * @Route("/")
   */
  public function indexAction() {
    return $this->render('CourseFinderBundle:Search:index.html.twig');
  }

  /**
   * @Route("/results")
   * @Method("POST")
   */
  public function resultsAction(Request $request) {
    $school = $request->request->get('school');
    $course = $request->request->get('course');
    $city = $request->request->get('city');
    $language = $request->request->get('language');
    $maxPrice = $request->request->get('maxPrice');
    $hours = explode('-', $request->request->get('hours'));
    $minHours = $hours[0];
    $maxHours = $hours[1];
    $startDate = $request->request->get('startDate');
    $endDate = $request->request->get('endDate');
    $starsF = $request->request->get('stars');

    $em = $this->getDoctrine()->getManager();
    $qb = $em->createQueryBuilder();

    $qb
            ->select("c")
            ->from("CourseFinderBundle:Course", "c");

    if ($school !== "") {
      $qb->join('c.school', 's')->andWhere("s.name = '".$school."'");
    }
    if ($course !== "") {
      $qb->andWhere("c.name = '".$course."'");
    }
    if ($city !== "") {
      $qb->andWhere("c.city = '".$city."'");
    }
   
    if ($language !== "") {
      $qb->andWhere("c.programingLanguage = '".$language."'");
    }
    if ($maxPrice !== "") {
      $qb->andWhere("c.price < '".$maxPrice."'");
    }
    if ($minHours != "") {
      $qb->andWhere("c.hours > '".$minHours."'");
    }
    if ($maxHours != "") {
      $qb->andWhere("c.hours < '".$maxHours."'");
    }
    if ($startDate !== "") {
      $qb->andWhere("c.startDate > '".$startDate."'");
    }
    if ($endDate !== "") {
      $qb->andWhere("c.endDate < '".$endDate."'");
    }

    $courses = $qb->getQuery()->getResult();
    
    $coursesFiltered = [];

    foreach ($courses as $course) {

      $courseId = $course->getId();

      unset($qb);
      
      $qb = $em->createQueryBuilder();
      $qb->select("r")
              ->from("CourseFinderBundle:Review", "r")
              ->andWhere("r.course = $courseId");


      $reviews = $qb->getQuery()->getResult();

      $stars = [];

    

      foreach ($reviews as $review) {
        if ($review->getStars() > 0) {
          $stars[] = $review->getStars();
        }
      }

      if (count($stars) != 0) {
        
        $avg = array_sum($stars) / count($stars);

        if ($avg >= $starsF) {
          $coursesFiltered[] = ['course'=>$course, 'avg'=>$avg];
        }
      }
    }

    return $this->render('CourseFinderBundle:Search:results.html.twig', array(
              'courses' => $coursesFiltered
    ));
  }

}
