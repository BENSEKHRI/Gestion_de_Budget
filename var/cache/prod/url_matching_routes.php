<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [
            [['_route' => 'app_admin_home', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/admin/utilisateurs' => [[['_route' => 'app_admin_utilisateurs', '_controller' => 'App\\Controller\\AdminController::usersList'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'app_admin_compte', '_controller' => 'App\\Controller\\AdminController::edit'], null, null, null, false, false, null]],
        '/ChangerLeMotDePasse' => [[['_route' => 'app_admin_changePasseword', '_controller' => 'App\\Controller\\AdminController::changePassword'], null, null, null, false, false, null]],
        '/budget/reporting' => [[['_route' => 'app_budget_reporting', '_controller' => 'App\\Controller\\FaitController::reporting'], null, null, null, false, false, null]],
        '/budget/saisie-budgetaire' => [[['_route' => 'app_budget_saisie_budgetaire', '_controller' => 'App\\Controller\\FaitController::saisieBudgetaire'], null, null, null, false, false, null]],
        '/budget/nouvelle-ligne' => [[['_route' => 'app_budget_nouvelle_ligne', '_controller' => 'App\\Controller\\FaitController::newBudget'], null, null, null, false, false, null]],
        '/admin/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/utilisateurs/(?'
                    .'|modifier/([^/]++)(*:47)'
                    .'|supprimer/([^/]++)(*:72)'
                .')'
                .'|/budget/(?'
                    .'|mo(?'
                        .'|difier/([^/]++)(*:111)'
                        .'|is/([^/]++)(*:130)'
                    .')'
                    .'|supprimer/([^/]++)(*:157)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:202)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'app_admin_modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        72 => [[['_route' => 'app_admin_supprimer_utilisateur', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'app_budget_modifier_ligne', '_controller' => 'App\\Controller\\FaitController::editBudget'], ['id'], null, null, false, true, null]],
        130 => [[['_route' => 'app_budget_choix_mois', '_controller' => 'App\\Controller\\MoisController::choixMois'], ['id'], null, null, false, true, null]],
        157 => [[['_route' => 'app_budget_supprimer_ligne', '_controller' => 'App\\Controller\\FaitController::deleteBudget'], ['id'], null, null, false, true, null]],
        202 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
