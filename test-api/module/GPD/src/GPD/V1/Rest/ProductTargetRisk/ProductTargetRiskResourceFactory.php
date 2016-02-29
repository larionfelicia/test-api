<?php
namespace GPD\V1\Rest\ProductTargetRisk;

class ProductTargetRiskResourceFactory
{
    public function __invoke($services)
    {
        return new ProductTargetRiskResource($services->get('GPD\V1\Rest\ProductTargetRisk\ArrayMapper'));
    }
}
