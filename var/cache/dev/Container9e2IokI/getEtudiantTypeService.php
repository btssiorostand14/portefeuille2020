<?php

namespace Container9e2IokI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEtudiantTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\EtudiantType' shared autowired service.
     *
     * @return \App\Form\EtudiantType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/EtudiantType.php';

        return $container->privates['App\\Form\\EtudiantType'] = new \App\Form\EtudiantType();
    }
}