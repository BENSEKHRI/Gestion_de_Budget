<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/utilisateurs/(?'
                    .'|modifier/([^/]++)(*:209)'
                    .'|supprimer/([^/]++)(*:235)'
                .')'
                .'|/budget/(?'
                    .'|mo(?'
                        .'|difier/([^/]++)(*:275)'
                        .'|is/([^/]++)(*:294)'
                    .')'
                    .'|supprimer/([^/]++)(*:321)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:366)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        209 => [[['_route' => 'app_admin_modifier_utilisateur', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'app_admin_supprimer_utilisateur', '_controller' => 'App\\Controller\\AdminController::deleteUser'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'app_budget_modifier_ligne', '_controller' => 'App\\Controller\\FaitController::editBudget'], ['id'], null, null, false, true, null]],
        294 => [[['_route' => 'app_budget_choix_mois', '_controller' => 'App\\Controller\\MoisController::choixMois'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'app_budget_supprimer_ligne', '_controller' => 'App\\Controller\\FaitController::deleteBudget'], ['id'], null, null, false, true, null]],
        366 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
