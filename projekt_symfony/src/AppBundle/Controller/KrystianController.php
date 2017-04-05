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
        $templating = $this->container->get('templating');
        $html = $templating->render('krystian/show.html.twig', [
            'name' => $someName
        ]);

        return new Response($html);
    }
}

?>