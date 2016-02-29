<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
  'product' => array(
    'array_mapper_path' => 'data/product.php',
  ),
  'dfsEntity' => array(
    'array_mapper_path' => 'data/dfsEntity.php'
  ),
  'riskClass' => array(
    'array_mapper_path' => 'data/riskClass.php'
  ),
  'productTargetRisk' => array(
    'array_mapper_path' => 'data/productTargetRisk.php'
  ),
  'eligibleCustomerType' => array(
    'array_mapper_path' => 'data/eligibleCustomerType.php'
  ),
  'customer' => array(
    'array_mapper_path' => 'data/customer.php'
  ),
  'db' => array(
    'driver'   => 'Pdo_Sqlite',
    'database' => 'D:/Projects/sqlite/data/music.db',
  ),
  'service_manager' => array(
    'factories' => array(
      'Zend\Db\Adapter\Adapter'
            => 'Zend\Db\Adapter\AdapterServiceFactory',
      'GPD\V1\Rest\Product\ArrayMapper' => 'GPD\V1\Rest\Product\ArrayMapperFactory',
      'GPD\V1\Rest\DfsEntity\ArrayMapper' => 'GPD\V1\Rest\DfsEntity\ArrayMapperFactory',
      'GPD\V1\Rest\RiskClass\ArrayMapper' => 'GPD\V1\Rest\RiskClass\ArrayMapperFactory',
      'GPD\V1\Rest\ProductTargetRisk\ArrayMapper' => 'GPD\V1\Rest\ProductTargetRisk\ArrayMapperFactory',
      'GPD\V1\Rest\EligibleCustomerType\ArrayMapper' => 'GPD\V1\Rest\EligibleCustomerType\ArrayMapperFactory',
      'CRC\V1\Rest\Customer\ArrayMapper' => 'CRC\V1\Rest\Customer\ArrayMapperFactory'
    ),
  ),
);

