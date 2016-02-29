<?php
namespace CRC\V1\Rest\Customer;

class CustomerResourceFactory
{
    public function __invoke($services)
    {
    	return new CustomerResource($services->get('CRC\V1\Rest\Customer\ArrayMapper'));
    }
}
