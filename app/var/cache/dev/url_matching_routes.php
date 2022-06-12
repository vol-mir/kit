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
        '/analytic/groups' => [[['_route' => 'analytic_group_index', '_controller' => 'App\\Controller\\AnalyticGroupController::index'], null, ['GET' => 0], null, false, false, null]],
        '/analytic/group/datatables' => [[['_route' => 'analytic_group_datatables', '_controller' => 'App\\Controller\\AnalyticGroupController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/analytic/group/new' => [[['_route' => 'analytic_group_new', '_controller' => 'App\\Controller\\AnalyticGroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calculations' => [[['_route' => 'calculation_index', '_controller' => 'App\\Controller\\CalculationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/calculation/datatables' => [[['_route' => 'calculation_datatables', '_controller' => 'App\\Controller\\CalculationController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/calculation/new' => [[['_route' => 'calculation_new', '_controller' => 'App\\Controller\\CalculationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/departments' => [[['_route' => 'department_index', '_controller' => 'App\\Controller\\DepartmentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/department/datatables' => [[['_route' => 'department_datatables', '_controller' => 'App\\Controller\\DepartmentController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/department/new' => [[['_route' => 'department_new', '_controller' => 'App\\Controller\\DepartmentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/documentas' => [[['_route' => 'document_index', '_controller' => 'App\\Controller\\DocumentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/document/datatables' => [[['_route' => 'document_datatables', '_controller' => 'App\\Controller\\DocumentController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/document/new' => [[['_route' => 'document_new', '_controller' => 'App\\Controller\\DocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/select/document' => [[['_route' => 'select_document', '_controller' => 'App\\Controller\\DocumentController::listSelectDocumentAction'], null, ['POST' => 0], null, false, false, null]],
        '/finance/groups' => [[['_route' => 'finance_group_index', '_controller' => 'App\\Controller\\FinanceGroupController::index'], null, ['GET' => 0], null, false, false, null]],
        '/finance/group/datatables' => [[['_route' => 'finance_group_datatables', '_controller' => 'App\\Controller\\FinanceGroupController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/finance/group/new' => [[['_route' => 'finance_group_new', '_controller' => 'App\\Controller\\FinanceGroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/version' => [[['_route' => 'version', '_controller' => 'App\\Controller\\HomeController::version'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ajax/searchallSelect2' => [[['_route' => 'ajax_searchall_select2', '_controller' => 'App\\Controller\\HomeController::searchallSelect2Action'], null, null, null, false, false, null]],
        '/materials' => [[['_route' => 'material_index', '_controller' => 'App\\Controller\\MaterialController::index'], null, ['GET' => 0], null, false, false, null]],
        '/material/datatables' => [[['_route' => 'material_datatables', '_controller' => 'App\\Controller\\MaterialController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/material/new' => [[['_route' => 'material_new', '_controller' => 'App\\Controller\\MaterialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/select/material' => [[['_route' => 'select_material', '_controller' => 'App\\Controller\\MaterialController::listSelectMaterialAction'], null, ['POST' => 0], null, false, false, null]],
        '/materials/list/edit' => [[['_route' => 'materials_list_edit', '_controller' => 'App\\Controller\\MaterialController::editList'], null, ['POST' => 0], null, false, false, null]],
        '/norm/documents' => [[['_route' => 'norm_document_index', '_controller' => 'App\\Controller\\NormDocumentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/norm/document/datatables' => [[['_route' => 'norm_document_datatables', '_controller' => 'App\\Controller\\NormDocumentController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/norm/document/new' => [[['_route' => 'norm_document_new', '_controller' => 'App\\Controller\\NormDocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/categories' => [[['_route' => 'product_category_index', '_controller' => 'App\\Controller\\ProductCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/categories/datatables' => [[['_route' => 'product_category_datatables', '_controller' => 'App\\Controller\\ProductCategoryController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/product/category/new' => [[['_route' => 'product_category_new', '_controller' => 'App\\Controller\\ProductCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/datatables' => [[['_route' => 'product_datatables', '_controller' => 'App\\Controller\\ProductController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/select/product' => [[['_route' => 'select_product', '_controller' => 'App\\Controller\\ProductController::listSelectProductAction'], null, ['POST' => 0], null, false, false, null]],
        '/products/list/edit' => [[['_route' => 'products_list_edit', '_controller' => 'App\\Controller\\ProductController::editList'], null, ['POST' => 0], null, false, false, null]],
        '/product/groups' => [[['_route' => 'product_group_index', '_controller' => 'App\\Controller\\ProductGroupController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/groups/datatables' => [[['_route' => 'product_group_datatables', '_controller' => 'App\\Controller\\ProductGroupController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/product/group/new' => [[['_route' => 'product_group_new', '_controller' => 'App\\Controller\\ProductGroupController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/kinds' => [[['_route' => 'product_kind_index', '_controller' => 'App\\Controller\\ProductKindController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/kinds/datatables' => [[['_route' => 'product_kind_datatables', '_controller' => 'App\\Controller\\ProductKindController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/product/kind/new' => [[['_route' => 'product_kind_new', '_controller' => 'App\\Controller\\ProductKindController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product/types' => [[['_route' => 'product_type_index', '_controller' => 'App\\Controller\\ProductTypeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/product/types/datatables' => [[['_route' => 'product_type_datatables', '_controller' => 'App\\Controller\\ProductTypeController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/product/type/new' => [[['_route' => 'product_type_new', '_controller' => 'App\\Controller\\ProductTypeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/production/plans' => [[['_route' => 'production_plan_index', '_controller' => 'App\\Controller\\ProductionPlanController::index'], null, ['GET' => 0], null, false, false, null]],
        '/datatable/production/plans' => [[['_route' => 'datatable_production_plans', '_controller' => 'App\\Controller\\ProductionPlanController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/renditions' => [[['_route' => 'rendition_index', '_controller' => 'App\\Controller\\RenditionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/rendition/datatables' => [[['_route' => 'rendition_datatables', '_controller' => 'App\\Controller\\RenditionController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/rendition/new' => [[['_route' => 'rendition_new', '_controller' => 'App\\Controller\\RenditionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/specifications' => [[['_route' => 'specification_index', '_controller' => 'App\\Controller\\SpecificationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/specification/datatables' => [[['_route' => 'specification_datatables', '_controller' => 'App\\Controller\\SpecificationController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/specification/new' => [[['_route' => 'specification_new', '_controller' => 'App\\Controller\\SpecificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/specifications/error' => [[['_route' => 'specification_index_error', '_controller' => 'App\\Controller\\SpecificationController::indexError'], null, ['GET' => 0], null, false, false, null]],
        '/specification/sections' => [[['_route' => 'specification_section_index', '_controller' => 'App\\Controller\\SpecificationSectionController::index'], null, null, null, false, false, null]],
        '/specification/sections/datatables' => [[['_route' => 'specification_section_datatables', '_controller' => 'App\\Controller\\SpecificationSectionController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/specification/section/new' => [[['_route' => 'specification_section_new', '_controller' => 'App\\Controller\\SpecificationSectionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/select/section' => [[['_route' => 'select_section', '_controller' => 'App\\Controller\\SpecificationSectionController::listSelectSectionAction'], null, ['POST' => 0], null, false, false, null]],
        '/technological/operations' => [[['_route' => 'technological_operation_index', '_controller' => 'App\\Controller\\TechnologicalOperationController::index'], null, null, null, false, false, null]],
        '/technological/operation/datatables' => [[['_route' => 'technological_operation_datatables', '_controller' => 'App\\Controller\\TechnologicalOperationController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/technological/operation/new' => [[['_route' => 'technological_operation_new', '_controller' => 'App\\Controller\\TechnologicalOperationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/track/documents' => [[['_route' => 'track_document_index', '_controller' => 'App\\Controller\\TrackDocumentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/track/document/datatables' => [[['_route' => 'track_document_datatables', '_controller' => 'App\\Controller\\TrackDocumentController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/track/document/new' => [[['_route' => 'track_document_new', '_controller' => 'App\\Controller\\TrackDocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/units' => [[['_route' => 'unit_index', '_controller' => 'App\\Controller\\UnitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/unit/datatables' => [[['_route' => 'unit_datatables', '_controller' => 'App\\Controller\\UnitController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/unit/new' => [[['_route' => 'unit_new', '_controller' => 'App\\Controller\\UnitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/datatables' => [[['_route' => 'user_datatables', '_controller' => 'App\\Controller\\UserController::listDatatableAction'], null, ['POST' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/analytic/group/(?'
                    .'|(\\d+)/edit(*:198)'
                    .'|(\\d+)(*:211)'
                    .'|(\\d+)/delete(*:231)'
                .')'
                .'|/calculation/(?'
                    .'|(\\d+)/edit(*:266)'
                    .'|(\\d+)(*:279)'
                    .'|(\\d+)/delete(*:299)'
                .')'
                .'|/d(?'
                    .'|epartment/(?'
                        .'|(\\d+)/edit(*:336)'
                        .'|(\\d+)(*:349)'
                        .'|(\\d+)/delete(*:369)'
                    .')'
                    .'|ocument/(?'
                        .'|(\\d+)/edit(*:399)'
                        .'|(\\d+)(*:412)'
                        .'|(\\d+)/delete(*:432)'
                    .')'
                .')'
                .'|/finance/group/(?'
                    .'|(\\d+)/edit(*:470)'
                    .'|(\\d+)(*:483)'
                    .'|(\\d+)/delete(*:503)'
                .')'
                .'|/material/(?'
                    .'|(\\d+)(*:530)'
                    .'|(\\d+)/edit(*:548)'
                    .'|(\\d+)/delete(*:568)'
                .')'
                .'|/norm/document/(?'
                    .'|(\\d+)/edit/consumption/datatables(*:628)'
                    .'|(\\d+)/edit/consumption/(\\d+)/replacement/datatables(*:687)'
                    .'|(\\d+)/edit/consumption/material/new(*:730)'
                    .'|(\\d+)/edit/consumption/(\\d+)/material/edit(*:780)'
                    .'|(\\d+)/edit/consumption/(\\d+)/delete(*:823)'
                    .'|(\\d+)/edit/consumption/(\\d+)/element/replacement(*:879)'
                    .'|(\\d+)/edit/consumption/replacement/add(*:925)'
                    .'|(\\d+)/edit/consumption/(\\d+)/replacement/delete(*:980)'
                    .'|(\\d+)/edit/consumption/(\\d+)/up(*:1019)'
                    .'|(\\d+)/edit/consumption/(\\d+)/adown(*:1062)'
                    .'|(\\d+)/edit/consumption/(\\d+)/move/(\\d+)/new\\-index(*:1121)'
                    .'|(\\d+)/edit(*:1140)'
                    .'|(\\d+)(*:1154)'
                    .'|(\\d+)/delete(*:1175)'
                    .'|(\\d+)/copy(*:1194)'
                .')'
                .'|/product(?'
                    .'|/(?'
                        .'|category/(?'
                            .'|(\\d+)/edit(*:1241)'
                            .'|(\\d+)(*:1255)'
                            .'|(\\d+)/delete(*:1276)'
                        .')'
                        .'|(\\d+)/edit(*:1296)'
                        .'|(\\d+)(*:1310)'
                        .'|([^/]++)/detailing(*:1337)'
                        .'|(\\d+)/delete(*:1358)'
                        .'|([^/]++)/(?'
                            .'|material/norms/print(*:1399)'
                            .'|rendition/(\\d+)/save/xml(*:1432)'
                        .')'
                        .'|group/(?'
                            .'|(\\d+)/edit(*:1461)'
                            .'|(\\d+)(*:1475)'
                            .'|(\\d+)/delete(*:1496)'
                        .')'
                        .'|kind/(?'
                            .'|(\\d+)/edit(*:1524)'
                            .'|(\\d+)(*:1538)'
                            .'|(\\d+)/delete(*:1559)'
                        .')'
                        .'|type/(?'
                            .'|(\\d+)/edit(*:1587)'
                            .'|(\\d+)(*:1601)'
                            .'|(\\d+)/delete(*:1622)'
                        .')'
                    .')'
                    .'|ion/plan/(?'
                        .'|(\\d+)(*:1650)'
                        .'|(\\d+)/delete(*:1671)'
                    .')'
                .')'
                .'|/rendition/(?'
                    .'|(\\d+)/edit(*:1706)'
                    .'|(\\d+)/delete(*:1727)'
                .')'
                .'|/specification/(?'
                    .'|(\\d+)(*:1760)'
                    .'|(\\d+)/edit(*:1779)'
                    .'|(\\d+)/delete(*:1800)'
                    .'|([^/]++)/print(*:1823)'
                    .'|(\\d+)/copy(*:1842)'
                    .'|section/(?'
                        .'|(\\d+)(*:1867)'
                        .'|(\\d+)/edit(*:1886)'
                        .'|(\\d+)/delete(*:1907)'
                    .')'
                    .'|(\\d+)/edit/structure/datatables(*:1948)'
                    .'|(\\d+)/edit/structure/product/new(*:1989)'
                    .'|(\\d+)/edit/structure/section/new(*:2030)'
                    .'|(\\d+)/edit/structure/material/new(*:2072)'
                    .'|(\\d+)/edit/structure/document/new(*:2114)'
                    .'|(\\d+)/edit/structure/(\\d+)/product/edit(*:2162)'
                    .'|(\\d+)/edit/structure/(\\d+)/replacement/datatables(*:2220)'
                    .'|(\\d+)/edit/structure/replacement/add(*:2265)'
                    .'|(\\d+)/edit/structure/(\\d+)/element/replacement(*:2320)'
                    .'|(\\d+)/edit/structure/(\\d+)/section/edit(*:2368)'
                    .'|(\\d+)/edit/structure/(\\d+)/material/edit(*:2417)'
                    .'|(\\d+)/edit/structure/(\\d+)/document/edit(*:2466)'
                    .'|(\\d+)/edit/structure/(\\d+)/delete(*:2508)'
                    .'|(\\d+)/edit/structure/(\\d+)/replacement/delete(*:2562)'
                    .'|(\\d+)/edit/structure/(\\d+)/up(*:2600)'
                    .'|(\\d+)/edit/structure/(\\d+)/adown(*:2641)'
                    .'|(\\d+)/edit/structure/(\\d+)/move/(\\d+)/new\\-index(*:2698)'
                .')'
                .'|/t(?'
                    .'|echnological/operation/(?'
                        .'|(\\d+)/edit(*:2749)'
                        .'|(\\d+)(*:2763)'
                        .'|(\\d+)/delete(*:2784)'
                    .')'
                    .'|rack/document/(?'
                        .'|(\\d+)/edit/track/datatables(*:2838)'
                        .'|(\\d+)/edit/track/new(*:2867)'
                        .'|(\\d+)/edit/track/(\\d+)/edit(*:2903)'
                        .'|(\\d+)/edit/track/(\\d+)/delete(*:2941)'
                        .'|(\\d+)/edit/track/(\\d+)/up(*:2975)'
                        .'|(\\d+)/edit/track/(\\d+)/adown(*:3012)'
                        .'|(\\d+)/edit/track/(\\d+)/move/(\\d+)/new\\-index(*:3065)'
                        .'|(\\d+)/edit(*:3084)'
                        .'|(\\d+)(*:3098)'
                        .'|(\\d+)/delete(*:3119)'
                        .'|(\\d+)/copy(*:3138)'
                    .')'
                .')'
                .'|/u(?'
                    .'|nit/(?'
                        .'|(\\d+)/edit(*:3171)'
                        .'|(\\d+)/delete(*:3192)'
                    .')'
                    .'|ser/(?'
                        .'|(\\d+)/edit(*:3219)'
                        .'|(\\d+)/delete(*:3240)'
                    .')'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:3278)'
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
        198 => [[['_route' => 'analytic_group_edit', '_controller' => 'App\\Controller\\AnalyticGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [[['_route' => 'analytic_group_show', '_controller' => 'App\\Controller\\AnalyticGroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'analytic_group_delete', '_controller' => 'App\\Controller\\AnalyticGroupController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        266 => [[['_route' => 'calculation_edit', '_controller' => 'App\\Controller\\CalculationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        279 => [[['_route' => 'calculation_show', '_controller' => 'App\\Controller\\CalculationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        299 => [[['_route' => 'calculation_delete', '_controller' => 'App\\Controller\\CalculationController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        336 => [[['_route' => 'department_edit', '_controller' => 'App\\Controller\\DepartmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        349 => [[['_route' => 'department_show', '_controller' => 'App\\Controller\\DepartmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'department_delete', '_controller' => 'App\\Controller\\DepartmentController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        399 => [[['_route' => 'document_edit', '_controller' => 'App\\Controller\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'document_delete', '_controller' => 'App\\Controller\\DocumentController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        470 => [[['_route' => 'finance_group_edit', '_controller' => 'App\\Controller\\FinanceGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'finance_group_show', '_controller' => 'App\\Controller\\FinanceGroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        503 => [[['_route' => 'finance_group_delete', '_controller' => 'App\\Controller\\FinanceGroupController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        530 => [[['_route' => 'material_show', '_controller' => 'App\\Controller\\MaterialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        548 => [[['_route' => 'material_edit', '_controller' => 'App\\Controller\\MaterialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        568 => [[['_route' => 'material_delete', '_controller' => 'App\\Controller\\MaterialController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        628 => [[['_route' => 'consumption_datatables', '_controller' => 'App\\Controller\\MaterialNormController::listDatatableAction'], ['norm_document_id'], ['POST' => 0], null, false, false, null]],
        687 => [[['_route' => 'consumption_replacement_datatables', 'materialNormMainId' => null, '_controller' => 'App\\Controller\\MaterialNormController::listReplacementDatatableAction'], ['norm_document_id', 'materialNormMainId'], ['POST' => 0], null, false, false, null]],
        730 => [[['_route' => 'consumption_material_new', '_controller' => 'App\\Controller\\MaterialNormController::newMaterial'], ['norm_document_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        780 => [[['_route' => 'consumption_material_edit', '_controller' => 'App\\Controller\\MaterialNormController::editMaterial'], ['norm_document_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        823 => [[['_route' => 'consumption_delete', '_controller' => 'App\\Controller\\MaterialNormController::delete'], ['norm_document_id', 'id'], ['DELETE' => 0], null, false, false, null]],
        879 => [[['_route' => 'consumption_element_replacement', '_controller' => 'App\\Controller\\MaterialNormController::replacementMaterialNormElement'], ['norm_document_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        925 => [[['_route' => 'consumption_element_replacement_new', '_controller' => 'App\\Controller\\MaterialNormController::newReplacementElement'], ['norm_document_id'], ['POST' => 0], null, false, false, null]],
        980 => [[['_route' => 'consumption_replacement_delete', '_controller' => 'App\\Controller\\MaterialNormController::deleteMaterialNormReplacement'], ['norm_document_id', 'id'], ['DELETE' => 0], null, false, false, null]],
        1019 => [[['_route' => 'consumption_elem_up', '_controller' => 'App\\Controller\\MaterialNormController::upMaterialNorm'], ['norm_document_id', 'id'], ['POST' => 0], null, false, false, null]],
        1062 => [[['_route' => 'consumption_elem_adown', '_controller' => 'App\\Controller\\MaterialNormController::adownMaterialNorm'], ['norm_document_id', 'id'], ['POST' => 0], null, false, false, null]],
        1121 => [[['_route' => 'consumption_elem_down', '_controller' => 'App\\Controller\\MaterialNormController::moveMaterialNorm'], ['norm_document_id', 'id', 'newIndexNumber'], ['POST' => 0], null, false, false, null]],
        1140 => [[['_route' => 'norm_document_edit', '_controller' => 'App\\Controller\\NormDocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1154 => [[['_route' => 'norm_document_show', '_controller' => 'App\\Controller\\NormDocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1175 => [[['_route' => 'norm_document_delete', '_controller' => 'App\\Controller\\NormDocumentController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1194 => [[['_route' => 'norm_document_copy', '_controller' => 'App\\Controller\\NormDocumentController::copy'], ['id'], ['POST' => 0], null, false, false, null]],
        1241 => [[['_route' => 'product_category_edit', '_controller' => 'App\\Controller\\ProductCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1255 => [[['_route' => 'product_category_show', '_controller' => 'App\\Controller\\ProductCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1276 => [[['_route' => 'product_category_delete', '_controller' => 'App\\Controller\\ProductCategoryController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1296 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1310 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1337 => [[['_route' => 'product_detailing', '_controller' => 'App\\Controller\\ProductController::detailing'], ['id'], ['POST' => 0], null, false, false, null]],
        1358 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1399 => [[['_route' => 'print_product_material_norms', '_controller' => 'App\\Controller\\ProductController::invoice'], ['id'], ['GET' => 0], null, false, false, null]],
        1432 => [[['_route' => 'save_xml', '_controller' => 'App\\Controller\\ProductController::saveXml'], ['id', 'rendition_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1461 => [[['_route' => 'product_group_edit', '_controller' => 'App\\Controller\\ProductGroupController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1475 => [[['_route' => 'product_group_show', '_controller' => 'App\\Controller\\ProductGroupController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1496 => [[['_route' => 'product_group_delete', '_controller' => 'App\\Controller\\ProductGroupController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1524 => [[['_route' => 'product_kind_edit', '_controller' => 'App\\Controller\\ProductKindController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1538 => [[['_route' => 'product_kind_show', '_controller' => 'App\\Controller\\ProductKindController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1559 => [[['_route' => 'product_kind_delete', '_controller' => 'App\\Controller\\ProductKindController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1587 => [[['_route' => 'product_type_edit', '_controller' => 'App\\Controller\\ProductTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1601 => [[['_route' => 'product_type_show', '_controller' => 'App\\Controller\\ProductTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1622 => [[['_route' => 'product_type_delete', '_controller' => 'App\\Controller\\ProductTypeController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1650 => [[['_route' => 'production_plan_show', '_controller' => 'App\\Controller\\ProductionPlanController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1671 => [[['_route' => 'production_plan_delete', '_controller' => 'App\\Controller\\ProductionPlanController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1706 => [[['_route' => 'rendition_edit', '_controller' => 'App\\Controller\\RenditionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1727 => [[['_route' => 'rendition_delete', '_controller' => 'App\\Controller\\RenditionController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1760 => [[['_route' => 'specification_show', '_controller' => 'App\\Controller\\SpecificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1779 => [[['_route' => 'specification_edit', '_controller' => 'App\\Controller\\SpecificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1800 => [[['_route' => 'specification_delete', '_controller' => 'App\\Controller\\SpecificationController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1823 => [[['_route' => 'print_specification', '_controller' => 'App\\Controller\\SpecificationController::invoice'], ['id'], ['GET' => 0], null, false, false, null]],
        1842 => [[['_route' => 'specification_copy', '_controller' => 'App\\Controller\\SpecificationController::copy'], ['id'], ['POST' => 0], null, false, false, null]],
        1867 => [[['_route' => 'specification_section_show', '_controller' => 'App\\Controller\\SpecificationSectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1886 => [[['_route' => 'specification_section_edit', '_controller' => 'App\\Controller\\SpecificationSectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1907 => [[['_route' => 'specification_section_delete', '_controller' => 'App\\Controller\\SpecificationSectionController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        1948 => [[['_route' => 'structure_datatables', '_controller' => 'App\\Controller\\StructureController::listDatatableAction'], ['specification_id'], ['POST' => 0], null, false, false, null]],
        1989 => [[['_route' => 'structure_product_new', '_controller' => 'App\\Controller\\StructureController::newProduct'], ['specification_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2030 => [[['_route' => 'structure_section_new', '_controller' => 'App\\Controller\\StructureController::newSection'], ['specification_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2072 => [[['_route' => 'structure_material_new', '_controller' => 'App\\Controller\\StructureController::newMaterial'], ['specification_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2114 => [[['_route' => 'structure_document_new', '_controller' => 'App\\Controller\\StructureController::newDocument'], ['specification_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2162 => [[['_route' => 'structure_product_edit', '_controller' => 'App\\Controller\\StructureController::editProduct'], ['specification_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2220 => [[['_route' => 'structure_replacement_datatables', 'structureMainId' => null, '_controller' => 'App\\Controller\\StructureController::listReplacementDatatableAction'], ['specification_id', 'structureMainId'], ['POST' => 0], null, false, false, null]],
        2265 => [[['_route' => 'structure_element_replacement_new', '_controller' => 'App\\Controller\\StructureController::newReplacementElement'], ['specification_id'], ['POST' => 0], null, false, false, null]],
        2320 => [[['_route' => 'structure_element_replacement', '_controller' => 'App\\Controller\\StructureController::replacementStructureElement'], ['specification_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2368 => [[['_route' => 'structure_section_edit', '_controller' => 'App\\Controller\\StructureController::editSection'], ['specification_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2417 => [[['_route' => 'structure_material_edit', '_controller' => 'App\\Controller\\StructureController::editMaterial'], ['specification_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2466 => [[['_route' => 'structure_document_edit', '_controller' => 'App\\Controller\\StructureController::editDocument'], ['specification_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2508 => [[['_route' => 'structure_delete', '_controller' => 'App\\Controller\\StructureController::delete'], ['specification_id', 'id'], ['DELETE' => 0], null, false, false, null]],
        2562 => [[['_route' => 'structure_replacement_delete', '_controller' => 'App\\Controller\\StructureController::deleteStructureReplacement'], ['specification_id', 'id'], ['DELETE' => 0], null, false, false, null]],
        2600 => [[['_route' => 'structure_elem_up', '_controller' => 'App\\Controller\\StructureController::upStructure'], ['specification_id', 'id'], ['POST' => 0], null, false, false, null]],
        2641 => [[['_route' => 'structure_elem_adown', '_controller' => 'App\\Controller\\StructureController::adownStructure'], ['specification_id', 'id'], ['POST' => 0], null, false, false, null]],
        2698 => [[['_route' => 'structure_elem_down', '_controller' => 'App\\Controller\\StructureController::moveStructure'], ['specification_id', 'id', 'newIndexNumber'], ['POST' => 0], null, false, false, null]],
        2749 => [[['_route' => 'technological_operation_edit', '_controller' => 'App\\Controller\\TechnologicalOperationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2763 => [[['_route' => 'technological_operation_show', '_controller' => 'App\\Controller\\TechnologicalOperationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2784 => [[['_route' => 'technological_operation_delete', '_controller' => 'App\\Controller\\TechnologicalOperationController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        2838 => [[['_route' => 'track_datatables', '_controller' => 'App\\Controller\\TrackController::listDatatableAction'], ['track_document_id'], ['POST' => 0], null, false, false, null]],
        2867 => [[['_route' => 'track_new', '_controller' => 'App\\Controller\\TrackController::newTrack'], ['track_document_id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2903 => [[['_route' => 'track_edit', '_controller' => 'App\\Controller\\TrackController::editTrack'], ['track_document_id', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2941 => [[['_route' => 'track_delete', '_controller' => 'App\\Controller\\TrackController::delete'], ['track_document_id', 'id'], ['DELETE' => 0], null, false, false, null]],
        2975 => [[['_route' => 'track_elem_up', '_controller' => 'App\\Controller\\TrackController::upTrack'], ['track_document_id', 'id'], ['POST' => 0], null, false, false, null]],
        3012 => [[['_route' => 'track_elem_adown', '_controller' => 'App\\Controller\\TrackController::adownTrack'], ['track_document_id', 'id'], ['POST' => 0], null, false, false, null]],
        3065 => [[['_route' => 'track_elem_down', '_controller' => 'App\\Controller\\TrackController::moveTrack'], ['track_document_id', 'id', 'newIndexNumber'], ['POST' => 0], null, false, false, null]],
        3084 => [[['_route' => 'track_document_edit', '_controller' => 'App\\Controller\\TrackDocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3098 => [[['_route' => 'track_document_show', '_controller' => 'App\\Controller\\TrackDocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3119 => [[['_route' => 'track_document_delete', '_controller' => 'App\\Controller\\TrackDocumentController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        3138 => [[['_route' => 'track_document_copy', '_controller' => 'App\\Controller\\TrackDocumentController::copy'], ['id'], ['POST' => 0], null, false, false, null]],
        3171 => [[['_route' => 'unit_edit', '_controller' => 'App\\Controller\\UnitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3192 => [[['_route' => 'unit_delete', '_controller' => 'App\\Controller\\UnitController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        3219 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3240 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        3278 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
