<?php
namespace GPD\V1\Rest\RiskClass;

class RiskClassResourceFactory
{
    public function __invoke($services)
    {
    	return new RiskClassResource($services->get('GPD\V1\Rest\RiskClass\ArrayMapper'));
    }
}
