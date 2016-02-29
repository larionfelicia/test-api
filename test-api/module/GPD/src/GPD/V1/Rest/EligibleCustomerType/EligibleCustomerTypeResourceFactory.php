<?php
namespace GPD\V1\Rest\EligibleCustomerType;

class EligibleCustomerTypeResourceFactory
{
    public function __invoke($services)
    {
        return new EligibleCustomerTypeResource($services->get('GPD\V1\Rest\EligibleCustomerType\ArrayMapper'));
    }
}
