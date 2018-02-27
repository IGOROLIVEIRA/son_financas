<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 27/02/2018
 * Time: 08:00
 */

namespace SONFin\View\Twig;

use SONFin\Auth\AuthInterface;
class TwigGlobals extends \Twig_Extension implements \Twig_Extension_GlobalsInterface
{
    /**
     * @var AuthInterface
     */
    private $auth;

    /**
     * TwigGlobals constructor.
     */
    public function __construct(AuthInterface $auth)
    {
        $this->auth = $auth;
    }

    public function getGlobals()
    {
        return [
            'Auth' => $this->auth
        ];
    }
}