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
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/books/list' => [[['_route' => 'admin_app_books_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_list'], null, null, null, false, false, null]],
        '/admin/app/books/create' => [[['_route' => 'admin_app_books_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_create'], null, null, null, false, false, null]],
        '/admin/app/books/batch' => [[['_route' => 'admin_app_books_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_batch'], null, null, null, false, false, null]],
        '/admin/app/books/export' => [[['_route' => 'admin_app_books_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_export'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'blog_list', '_controller' => 'App\\Controller\\BooksController::readData'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'WriteBook', '_controller' => 'App\\Controller\\BooksController::writeData'], null, null, null, false, false, null]],
        '/form' => [[['_route' => 'form', '_controller' => 'App\\Controller\\BooksController::formAdd'], null, null, null, false, false, null]],
        '/update' => [[['_route' => 'updateData', '_controller' => 'App\\Controller\\BooksController::updateData'], null, null, null, false, false, null]],
        '/deletebook' => [[['_route' => 'deleteBook', '_controller' => 'App\\Controller\\BooksController::deleteBook'], null, null, null, false, false, null]],
        '/getauthors' => [[['_route' => 'readAutors', '_controller' => 'App\\Controller\\AuthorController::readData'], null, null, null, false, false, null]],
        '/formautors' => [[['_route' => 'formAutors', '_controller' => 'App\\Controller\\AuthorController::formAdd'], null, null, null, false, false, null]],
        '/addauthors' => [[['_route' => 'addAuthors', '_controller' => 'App\\Controller\\AuthorController::addAuthors'], null, null, null, false, false, null]],
        '/updateevent' => [[['_route' => 'updateEventListener', '_controller' => 'App\\Controller\\AuthorController::updateEventListener'], null, null, null, false, false, null]],
        '/deleteauthor' => [[['_route' => 'deleteAuthors', '_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], null, null, null, false, false, null]],
        '/updateAuthor' => [[['_route' => 'updateDataAuthor', '_controller' => 'App\\Controller\\AuthorController::updateAuthor'], null, null, null, false, false, null]],
        '/formcoauthor' => [[['_route' => 'FormCoAuthor', '_controller' => 'App\\Controller\\CoauthorController::formAdd'], null, null, null, false, false, null]],
        '/getcoauthors' => [[['_route' => 'getCoAuthor', '_controller' => 'App\\Controller\\CoauthorController::readData'], null, null, null, false, false, null]],
        '/writeCo' => [[['_route' => 'WriteCoAuthor', '_controller' => 'App\\Controller\\CoauthorController::writeData'], null, null, null, false, false, null]],
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
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:198)'
                    .'|setting/reset/([^/]++)(*:228)'
                .')'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:301)'
                    .'|app/books/([^/]++)/(?'
                        .'|edit(*:335)'
                        .'|delete(*:349)'
                        .'|show(*:361)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        228 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        301 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        335 => [[['_route' => 'admin_app_books_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_edit'], ['id'], null, null, false, false, null]],
        349 => [[['_route' => 'admin_app_books_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_delete'], ['id'], null, null, false, false, null]],
        361 => [
            [['_route' => 'admin_app_books_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.books', '_sonata_name' => 'admin_app_books_show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
