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
     * @Route("/krystian")
     */
    public function showAction()
    {
        return new Response("<htmL><body><center><h1>Witaj Krystianie!</h1>
        <h2>Czeka Cię piękny dzień!</h2></center></body></htmL>");
    }
}