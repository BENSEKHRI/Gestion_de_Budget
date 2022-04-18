<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_admin_home' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/home']], [], [], []],
    'app_admin_utilisateurs' => [[], ['_controller' => 'App\\Controller\\AdminController::usersList'], [], [['text', '/admin/utilisateurs']], [], [], []],
    'app_admin_modifier_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::editUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateurs/modifier']], [], [], []],
    'app_admin_supprimer_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/utilisateurs/supprimer']], [], [], []],
    'app_admin_compte' => [[], ['_controller' => 'App\\Controller\\AdminController::edit'], [], [['text', '/compte']], [], [], []],
    'app_admin_changePasseword' => [[], ['_controller' => 'App\\Controller\\AdminController::changePassword'], [], [['text', '/ChangerLeMotDePasse']], [], [], []],
    'app_budget_reporting' => [[], ['_controller' => 'App\\Controller\\FaitController::reporting'], [], [['text', '/budget/reporting']], [], [], []],
    'app_budget_saisie_budgetaire' => [[], ['_controller' => 'App\\Controller\\FaitController::saisieBudgetaire'], [], [['text', '/budget/saisie-budgetaire']], [], [], []],
    'app_budget_nouvelle_ligne' => [[], ['_controller' => 'App\\Controller\\FaitController::newBudget'], [], [['text', '/budget/nouvelle-ligne']], [], [], []],
    'app_budget_modifier_ligne' => [['id'], ['_controller' => 'App\\Controller\\FaitController::editBudget'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/budget/modifier']], [], [], []],
    'app_budget_supprimer_ligne' => [['id'], ['_controller' => 'App\\Controller\\FaitController::deleteBudget'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/budget/supprimer']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_budget_choix_mois' => [['id'], ['_controller' => 'App\\Controller\\MoisController::choixMois'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/budget/mois']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/admin/inscription']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
];