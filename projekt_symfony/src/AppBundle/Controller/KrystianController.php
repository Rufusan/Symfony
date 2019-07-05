<?php
/**
 * Created by PhpStorm.
 * User: Krystian
 * Date: 05.04.2017
 * Time: 18:01
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class KrystianController extends Controller
{
    /**
     * @Route("/krystian/{someName}")
     */
    public function showAction($someName)
    {
        return $this->render('krystian/show.html.twig', [
            'name' => $someName,
        ]);

    }

    /**
     * @Route("/krystian/{someName}/notes")
     * @Method("GET")
     */
    public function getNotesAction()
    {
        $notes = [
            ['id' => 1, 'username' => 'Aqua', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Some notes about Octopus', 'date' => 'Apr. 6, 2017'],
            ['id' => 2, 'username' => 'Aqua2', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Some notes about Octopus', 'date' => 'Apr. 6, 2017'],
            ['id' => 3, 'username' => 'Aqua3', 'avatarUri' => '/images/leanna.jpeg', 'note' => 'Some notes about Octopus', 'date' => 'Apr. 6, 2017'],
        ];

        $data = [
            'notes' => $notes,
        ];

        return new JsonResponse($data);
    }
}

?>