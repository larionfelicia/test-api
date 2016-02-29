<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'CRC\\V1\\Rest\\Customer\\CustomerResource' => 'CRC\\V1\\Rest\\Customer\\CustomerResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'crc.rest.customer' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/crc/customer[/:customer_id]',
                    'defaults' => array(
                        'controller' => 'CRC\\V1\\Rest\\Customer\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'crc.rest.customer',
        ),
    ),
    'zf-rest' => array(
        'CRC\\V1\\Rest\\Customer\\Controller' => array(
            'listener' => 'CRC\\V1\\Rest\\Customer\\CustomerResource',
            'route_name' => 'crc.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
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
            'entity_class' => 'CRC\\V1\\Rest\\Customer\\CustomerEntity',
            'collection_class' => 'CRC\\V1\\Rest\\Customer\\CustomerCollection',
            'service_name' => 'customer',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'CRC\\V1\\Rest\\Customer\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'CRC\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.crc.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'CRC\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.crc.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'CRC\\V1\\Rest\\Customer\\CustomerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'crc.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'CRC\\V1\\Rest\\Customer\\CustomerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'crc.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ),
        ),
    ),
);
