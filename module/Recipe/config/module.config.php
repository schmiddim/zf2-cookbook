<?php
return array(
    'service_manager' => array(
        'invokables' => array(
            'Recipe\Doctrine\Service\RecipeServiceInterface' =>
                Recipe\Doctrine\Service\RecipeService::class,

            Recipe\Doctrine\Service\UserServiceInterface::class =>
                Recipe\Doctrine\Service\UserService::class

        )
    ),
    'doctrine' => array(
        'driver' => array(
            'modules_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Recipe')
            ),

            'orm_default' => array(
                'drivers' => array(
                    'Recipe' => 'modules_entities'
                )
            )
        )
    )
);