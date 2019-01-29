<?php

namespace App\Service;

use App\Entity\AssetAssociation;
use Doctrine\ORM\EntityManagerInterface;
use Ds\Component\Entity\Service\EntityService;

/**
 * Class AssetAssociationService
 */
final class AssetAssociationService extends EntityService
{
    /**
     * Constructor
     *
     * @param \Doctrine\ORM\EntityManagerInterface $manager
     * @param string $entity
     */
    public function __construct(EntityManagerInterface $manager, string $entity = AssetAssociation::class)
    {
        parent::__construct($manager, $entity);
    }
}
