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
        '/admin' => [[['_route' => 'sonata_admin_redirect', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'sonata.admin.action.dashboard'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'sonata.admin.action.search'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/category/list' => [[['_route' => 'admin_app_category_list', '_controller' => 'sonata.admin.controller.crud::listAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_list'], null, null, null, false, false, null]],
        '/admin/app/category/create' => [[['_route' => 'admin_app_category_create', '_controller' => 'sonata.admin.controller.crud::createAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_create'], null, null, null, false, false, null]],
        '/admin/app/category/batch' => [[['_route' => 'admin_app_category_batch', '_controller' => 'sonata.admin.controller.crud::batchAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_batch'], null, null, null, false, false, null]],
        '/admin/app/category/export' => [[['_route' => 'admin_app_category_export', '_controller' => 'sonata.admin.controller.crud::exportAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_export'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:233)'
                    .'|app/category/([^/]++)/(?'
                        .'|edit(*:270)'
                        .'|delete(*:284)'
                        .'|show(*:296)'
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
        233 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        270 => [[['_route' => 'admin_app_category_edit', '_controller' => 'sonata.admin.controller.crud::editAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_edit'], ['id'], null, null, false, false, null]],
        284 => [[['_route' => 'admin_app_category_delete', '_controller' => 'sonata.admin.controller.crud::deleteAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_delete'], ['id'], null, null, false, false, null]],
        296 => [
            [['_route' => 'admin_app_category_show', '_controller' => 'sonata.admin.controller.crud::showAction', '_sonata_admin' => 'admin.category', '_sonata_name' => 'admin_app_category_show'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
