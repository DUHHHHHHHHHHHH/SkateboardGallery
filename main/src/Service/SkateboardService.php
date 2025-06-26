<?php

namespace App\Service;

use App\Repository\SkateboardRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Skateboard;

class SkateboardService
{
    private $skateboardRepository;
    private $entityManager;

    public function __construct(SkateboardRepository $skateboardRepository, EntityManagerInterface $entityManager)
    {
        $this->skateboardRepository = $skateboardRepository;
        $this->entityManager = $entityManager;
    }

    public function getAllSkateboards(): array
    {
        return $this->skateboardRepository->findAll();
    }

    public function getSkateboardById(int $id)
    {
        return $this->skateboardRepository->find($id);
    }

    public function saveSkateboard(Skateboard $skateboard): void
{
    $this->entityManager->persist($skateboard);
    $this->entityManager->flush();
}

    public function deleteSkateboard(int $id): void
    {
        $skateboard = $this->getSkateboardById($id);
        if ($skateboard) {
            $this->skateboardRepository->remove($skateboard);
        }
    }

    public function updateSkateboard($skateboard): void
    {
        $this->skateboardRepository->save($skateboard);
    }

    public function findSkateboardsByCriteria(array $criteria): array
    {
        return $this->skateboardRepository->findBy($criteria);
    }
    
}