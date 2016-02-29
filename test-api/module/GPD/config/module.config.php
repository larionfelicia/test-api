<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'GPD\\V1\\Rest\\Product\\ProductResource' => 'GPD\\V1\\Rest\\Product\\ProductResourceFactory',
            'GPD\\V1\\Rest\\DfsEntity\\DfsEntityResource' => 'GPD\\V1\\Rest\\DfsEntity\\DfsEntityResourceFactory',
            'GPD\\V1\\Rest\\RiskClass\\RiskClassResource' => 'GPD\\V1\\Rest\\RiskClass\\RiskClassResourceFactory',
            'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskResource' => 'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskResourceFactory',
            'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeResource' => 'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'gpd.rest.product' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gpd/product[/:product_id]',
                    'defaults' => array(
                        'controller' => 'GPD\\V1\\Rest\\Product\\Controller',
                    ),
                ),
            ),
            'gpd.rest.dfs-entity' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gpd/dfs-entity[/:dfs_entity_id]',
                    'defaults' => array(
                        'controller' => 'GPD\\V1\\Rest\\DfsEntity\\Controller',
                    ),
                ),
            ),
            'gpd.rest.risk-class' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gpd/risk-class[/:risk_class_id]',
                    'defaults' => array(
                        'controller' => 'GPD\\V1\\Rest\\RiskClass\\Controller',
                    ),
                ),
            ),
            'gpd.rest.product-target-risk' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gpd/product/:product_id/target-risk[/:product_target_risk_id]',
                    'defaults' => array(
                        'controller' => 'GPD\\V1\\Rest\\ProductTargetRisk\\Controller',
                    ),
                ),
            ),
            'gpd.rest.eligible-customer-type' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/gpd/eligible-customer-type[/:eligible_customer_type_id]',
                    'defaults' => array(
                        'controller' => 'GPD\\V1\\Rest\\EligibleCustomerType\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'gpd.rest.product',
            1 => 'gpd.rest.dfs-entity',
            2 => 'gpd.rest.risk-class',
            3 => 'gpd.rest.product-target-risk',
            4 => 'gpd.rest.eligible-customer-type',
        ),
    ),
    'zf-rest' => array(
        'GPD\\V1\\Rest\\Product\\Controller' => array(
            'listener' => 'GPD\\V1\\Rest\\Product\\ProductResource',
            'route_name' => 'gpd.rest.product',
            'route_identifier_name' => 'product_id',
            'collection_name' => 'product',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'GPD\\V1\\Rest\\Product\\ProductEntity',
            'collection_class' => 'GPD\\V1\\Rest\\Product\\ProductCollection',
            'service_name' => 'product',
        ),
        'GPD\\V1\\Rest\\DfsEntity\\Controller' => array(
            'listener' => 'GPD\\V1\\Rest\\DfsEntity\\DfsEntityResource',
            'route_name' => 'gpd.rest.dfs-entity',
            'route_identifier_name' => 'dfs_entity_id',
            'collection_name' => 'dfs_entity',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'GPD\\V1\\Rest\\DfsEntity\\DfsEntityEntity',
            'collection_class' => 'GPD\\V1\\Rest\\DfsEntity\\DfsEntityCollection',
            'service_name' => 'dfsEntity',
        ),
        'GPD\\V1\\Rest\\RiskClass\\Controller' => array(
            'listener' => 'GPD\\V1\\Rest\\RiskClass\\RiskClassResource',
            'route_name' => 'gpd.rest.risk-class',
            'route_identifier_name' => 'risk_class_id',
            'collection_name' => 'risk_class',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'GPD\\V1\\Rest\\RiskClass\\RiskClassEntity',
            'collection_class' => 'GPD\\V1\\Rest\\RiskClass\\RiskClassCollection',
            'service_name' => 'riskClass',
        ),
        'GPD\\V1\\Rest\\ProductTargetRisk\\Controller' => array(
            'listener' => 'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskResource',
            'route_name' => 'gpd.rest.product-target-risk',
            'route_identifier_name' => 'product_target_risk_id',
            'collection_name' => 'product_target_risk',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskEntity',
            'collection_class' => 'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskCollection',
            'service_name' => 'productTargetRisk',
        ),
        'GPD\\V1\\Rest\\EligibleCustomerType\\Controller' => array(
            'listener' => 'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeResource',
            'route_name' => 'gpd.rest.eligible-customer-type',
            'route_identifier_name' => 'eligible_customer_type_id',
            'collection_name' => 'eligible_customer_type',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeEntity',
            'collection_class' => 'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeCollection',
            'service_name' => 'eligibleCustomerType',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'GPD\\V1\\Rest\\Product\\Controller' => 'HalJson',
            'GPD\\V1\\Rest\\DfsEntity\\Controller' => 'HalJson',
            'GPD\\V1\\Rest\\RiskClass\\Controller' => 'HalJson',
            'GPD\\V1\\Rest\\ProductTargetRisk\\Controller' => 'HalJson',
            'GPD\\V1\\Rest\\EligibleCustomerType\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'GPD\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'GPD\\V1\\Rest\\DfsEntity\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'GPD\\V1\\Rest\\RiskClass\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'GPD\\V1\\Rest\\ProductTargetRisk\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'GPD\\V1\\Rest\\EligibleCustomerType\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'GPD\\V1\\Rest\\Product\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/json',
            ),
            'GPD\\V1\\Rest\\DfsEntity\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/json',
            ),
            'GPD\\V1\\Rest\\RiskClass\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/json',
            ),
            'GPD\\V1\\Rest\\ProductTargetRisk\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/json',
            ),
            'GPD\\V1\\Rest\\EligibleCustomerType\\Controller' => array(
                0 => 'application/vnd.gpd.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'GPD\\V1\\Rest\\Product\\ProductEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.product',
                'route_identifier_name' => 'product_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'GPD\\V1\\Rest\\Product\\ProductCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.product',
                'route_identifier_name' => 'product_id',
                'is_collection' => true,
            ),
            'GPD\\V1\\Rest\\DfsEntity\\DfsEntityEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.dfs-entity',
                'route_identifier_name' => 'dfs_entity_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'GPD\\V1\\Rest\\DfsEntity\\DfsEntityCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.dfs-entity',
                'route_identifier_name' => 'dfs_entity_id',
                'is_collection' => true,
            ),
            'GPD\\V1\\Rest\\RiskClass\\RiskClassEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.risk-class',
                'route_identifier_name' => 'risk_class_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'GPD\\V1\\Rest\\RiskClass\\RiskClassCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.risk-class',
                'route_identifier_name' => 'risk_class_id',
                'is_collection' => true,
            ),
            'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.product-target-risk',
                'route_identifier_name' => 'product_target_risk_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'GPD\\V1\\Rest\\ProductTargetRisk\\ProductTargetRiskCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.product-target-risk',
                'route_identifier_name' => 'product_target_risk_id',
                'is_collection' => true,
            ),
            'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.eligible-customer-type',
                'route_identifier_name' => 'eligible_customer_type_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'GPD\\V1\\Rest\\EligibleCustomerType\\EligibleCustomerTypeCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'gpd.rest.eligible-customer-type',
                'route_identifier_name' => 'eligible_customer_type_id',
                'is_collection' => true,
            ),
        ),
    ),
);
