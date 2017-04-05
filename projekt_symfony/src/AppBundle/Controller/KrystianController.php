<?php
/**
 * Created by PhpStorm.
 * User: Krystian
 * Date: 05.04.2017
 * Time: 18:01
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class KrystianController extends Controller
{
    /**
     * @Route("/krystian/{someName}")
     */
    public function showAction($someName)
    {
        $notes = [
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'Ut enim ad minim veniam'
        ];


        return $this->render('krystian/show.html.twig', [
            'name' => $someName,
            'notes' => $notes
        ]);

    }
}

?>