<?php
namespace CRC\V1\Rest\Customer;

use DomainException;
use InvalidArgumentException;
use Traversable;
use Rhumsaa\Uuid\Uuid;
use Zend\Stdlib\ArrayUtils;
use Zend\Stdlib\Hydrator\ObjectProperty as ObjectPropertyHydrator;
use ZF\Configuration\ConfigResource;

/**
 * Mapper implementation using a file returning PHP arrays
 */
class ArrayMapper implements MapperInterface
{
    /**
     * @var ConfigResource
     */
    protected $configResource;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var Entity
     */
    protected $entityPrototype;

    /**
     * @var ObjectPropertyHydrator
     */
    protected $hydrator;

    /**
     * @param array $data 
     * @param ConfigResource $configResource 
     */
    public function __construct(array $data, ConfigResource $configResource)
    {   
        $this->data = $data;
        $this->configResource = $configResource;

        $this->hydrator = new ObjectPropertyHydrator();
        $this->entityPrototype = new CustomerEntity;


    }

    /**
     * @param array|Traversable|\stdClass $data 
     * @return Entity
     */
    public function create($data)
    {
        if ($data instanceof Traversable) {
            $data = ArrayUtils::iteratorToArray($data);
        }
        if (is_object($data)) {
            $data = (array) $data;
        }

        if (!is_array($data)) {
            throw new InvalidArgumentException(sprintf(
                'Invalid data provided to %s; must be an array or Traversable',
                __METHOD__
            ));
        }

        $id         = count($this->data) + 1;
        $data['id'] = $id;
        $data['created'] = time();

        $this->data[$id] = $data;
        $this->persistData();

        return $this->createEntity($data);
    }

    /**
     * @param string $id 
     * @return Entity
     */
    public function fetch($id)
    {
        if (!array_key_exists($id, $this->data)) {
            throw new DomainException('Customer not found', 404);
        }

        return $this->createEntity($this->data[$id]);
    }

    /**
     * @return Collection
     */
    public function fetchAll()
    {
        return new CustomerCollection($this->createCollection());
    }

    /**
     * @param string $id 
     * @param array|Traversable|\stdClass $data 
     * @return Entity
     */
    public function update($id, $data)
    {
        if (is_object($data)) {
            $data = (array) $data;
        }

        if (! array_key_exists($id, $this->data)) {
            throw new DomainException('Cannot update; no such customer', 404);
        }

        $data['modified'] = time();
        $updated = ArrayUtils::merge($this->data[$id], $data);
        
        $this->data[$id] = $updated;
        $this->persistData();

        return $this->createEntity($updated);
    }

    /**
     * @param string $id 
     * @return bool
     */
    public function delete($id)
    {
        if (! array_key_exists($id, $this->data)) {
            throw new DomainException('Cannot delete; no such customer', 404);
        }

        unset($this->data[$id]);
        $this->persistData();

        return true;
    }

    /**
     * @param array $item 
     * @return Entity
     */
    protected function createEntity(array $item)
    {
        return $this->hydrator->hydrate($item, $this->entityPrototype);
    }

    /**
     * @return HydratingArrayPaginator
     */
    protected function createCollection()
    {
        return new HydratingArrayPaginator($this->data, $this->hydrator, $this->entityPrototype);
    }

    protected function persistData()
    {
        $this->configResource->overWrite($this->data);
    }
}
