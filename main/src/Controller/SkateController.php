<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SkateboardService;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Skateboard;
use App\Form\SkateboardType;
use Doctrine\ORM\EntityManagerInterface;

class SkateController extends AbstractController
{
    // pagina principale +++++++++++++++++++++++++++++
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_login');
    }

    // RITORNA TUTTI GLI SKATEBOARD ++++++++++++++++++++++++++++++++++++++
    #[Route('/skate', name: 'skate_index')]
    public function index(SkateboardService $skateboardService, Request $request): Response
    {
    $skateboards = $skateboardService->getAllSkateboards();
    $tipologia = $request->query->get('tipologia');
    if ($tipologia) {
        $skateboards = array_filter($skateboards, fn($s) => $s->getTipologia() === $tipologia);
    }
    $editingId = $request->query->get('editing_id');

    return $this->render('skate/index.html.twig', [
        'skateboards' => $skateboards,
        'editing_id' => $editingId,
    ]);
    }

    // RITORNA UNO SKATEBOARD SPECIFICO +++++++++++++++++++++++++++++
    #[Route('/skate/{id}', name: 'skate_show', requirements: ['id' => '\d+'])]
    public function show(int $id, SkateboardService $skateboardService): Response
    {
        $skateboard = $skateboardService->getSkateboardById($id);
        if (!$skateboard) {
            throw $this->createNotFoundException('Skateboard not found');
        }
        return $this->render('skate/show.html.twig', [
            'skateboard' => $skateboard,
        ]);
    }

    // EDITA UNO SKATEBOARD SPECIFICO +++++++++++++++++++++++++++++
        #[Route('/skate/{id}/edit', name: 'skate_edit', methods: ['POST'])]
    public function edit(int $id, SkateboardService $skateboardService, Request $request): Response
    {
        $skateboard = $skateboardService->getSkateboardById($id);
        if (!$skateboard) {
            throw $this->createNotFoundException('Skateboard not found');
        }

        // Aggiorna i dati con quelli inviati dal form della modal
        $skateboard->setMarca($request->request->get('marca'));
        $skateboard->setModello($request->request->get('modello'));
        $skateboard->setTaglia($request->request->get('taglia'));
        $skateboard->setColore($request->request->get('colore'));
        $skateboard->setTipologia($request->request->get('tipologia'));

        $skateboardService->saveSkateboard($skateboard);

        $this->addFlash('success', 'Skateboard aggiornato con successo.');

        return $this->redirectToRoute('skate_show', ['id' => $skateboard->getId()]);
    }

    // ELIMINA UNO SKATEBOARD SPECIFICO +++++++++++++++++++++++++++++
    #[Route('/skate/{id}/delete', name: 'skate_delete')]
    public function deleteSkateboard(int $id, EntityManagerInterface $entityManager): Response
    {
        $skateboard = $entityManager->getRepository(Skateboard::class)->find($id);
        if ($skateboard) {
            $entityManager->remove($skateboard);
            $entityManager->flush();
            $this->addFlash('success', 'Skateboard deleted successfully.');
        } else {
            $this->addFlash('error', 'Skateboard not found.');
        }
        return $this->redirectToRoute('skate_index');
    
    }

    // AGGIUNGE UNO SKATEBOARD +++++++++++++++++++++++++++++++++++++
    #[Route('/skate/create', name: 'skate_create', methods: ['POST'])]
    public function create(Request $request, SkateboardService $skateboardService): Response
    {
    // Validazione dei dati
    $skateboard = new Skateboard();
    $skateboard->setMarca($request->request->get('marca'));
    $skateboard->setModello($request->request->get('modello'));
    $skateboard->setTaglia($request->request->get('taglia'));
    $skateboard->setColore($request->request->get('colore'));
    $skateboard->setTipologia($request->request->get('tipologia'));
    
    // immagini
    $immagini = $request->files->get('immagini');
    $nomiImmagini = [];
    if ($immagini) {
        foreach ($immagini as $file) {
            $nome = uniqid().'.'.$file->guessExtension();
            $file->move($this->getParameter('kernel.project_dir').'/public/uploads/skateboards/add/', $nome);
            $nomiImmagini[] = 'add/' . $nome;
        }
    }
    $skateboard->setImmagini($nomiImmagini);
    $skateboardService->saveSkateboard($skateboard);

    return $this->redirectToRoute('skate_index');
}

}