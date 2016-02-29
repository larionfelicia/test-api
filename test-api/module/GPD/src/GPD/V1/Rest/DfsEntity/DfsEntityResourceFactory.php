<?php
namespace GPD\V1\Rest\DfsEntity;

class DfsEntityResourceFactory
{
    public function __invoke($services)
    {
        return new DfsEntityResource($services->get('GPD\V1\Rest\DfsEntity\ArrayMapper'));
    }
}
