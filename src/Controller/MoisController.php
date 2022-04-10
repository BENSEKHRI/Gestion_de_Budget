<?php

namespace App\Controller;


use App\Entity\Fait;
use App\Entity\Mois;
use App\Form\MoisType;
use App\Repository\MoisRepository;
use App\Repository\FaitRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MoisController extends AbstractController
{
    /**
     * @var MoisRepository $repository
     */
    private $MoisRepository;


    public function __construct(MoisRepository $MoisRepository, EntityManagerInterface $em)
    {
        $this->MoisRepository = $MoisRepository;
    }

    #[Route('/budget/mois/{id}', name: 'app_budget_choix_mois')]
    public function choixMois($id, Request $request, EntityManagerInterface $entityManager, MoisRepository $moisRep, UserRepository $users)
    {
        $mois = $this->MoisRepository->find($id);

        if (! $mois) {
            throw $this->createNotFoundException('mois #' . $id . ' pas trouvé !');
        }

        $form = $this->createForm(MoisType::class, $mois);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($mois);
            $entityManager->flush();
            $this->addFlash('success', 'Les mois de la grille budgétaire ont été mis à jour !');
            return $this->redirectToRoute('app_budget_saisie_budgetaire');
        }
        return $this->render('mois/choixMois.html.twig', [
            'form' => $form->createView(),
            'moisRep' => $moisRep->findAll(),
            'users' => $users->findAll(),
        ]);
    }
}
