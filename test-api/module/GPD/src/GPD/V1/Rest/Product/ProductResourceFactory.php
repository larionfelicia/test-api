<?php
namespace GPD\V1\Rest\Product;

class ProductResourceFactory
{
    public function __invoke($services)
    {
    	return new ProductResource($services->get('GPD\V1\Rest\Product\ArrayMapper'));
    }
}
