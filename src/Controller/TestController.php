<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;

class TestController extends AbstractController
{
    public function test(TranslatorInterface $translator)
    {
        $translator->trans('This value should be false.');
        $translator->trans('This value should be true.');
        $translator->trans('This value should be of type {{ type }}.');
    }
}