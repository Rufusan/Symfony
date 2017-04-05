<?php
/**
 * Created by PhpStorm.
 * User: Krystian
 * Date: 05.04.2017
 * Time: 18:01
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class KrystianController
{
    /**
     * @Route("/krystian/{someName}")
     */
    public function showAction($someName)
    {
        return new Response('Witaj '.$someName);
    }
}

?>