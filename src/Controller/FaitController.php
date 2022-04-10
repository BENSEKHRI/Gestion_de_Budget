<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\Fait;
use App\Entity\FaitSearch;
use App\Entity\Canal;
use App\Entity\Geographie;
use App\Entity\Produit;
use App\Form\FaitType;
use App\Form\FaitSearchType;
use App\Repository\FaitRepository;
use App\Repository\MoisRepository;
use App\Repository\FaitSearchRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use \Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;


class FaitController extends AbstractController
{
    /**
     * @var FaitRepository $repository
     */
    private $FaitRepository;


    public function __construct(FaitRepository $FaitRepository, EntityManagerInterface $em)
    {
        $this->FaitRepository = $FaitRepository;
    }

    /**
     *  Liste des lignes budgetaire du site dans le reporting.
     */
    #[Route('/budget/reporting', name: 'app_budget_reporting')]
    public function reporting(FaitRepository $faits, UserRepository $users)
    {
        return $this->render("budget/reporting.html.twig", [
            'faits' => $faits->findAll(),
            'users' => $users->findAll(),
        ]);
    }

    /**
     *  Liste des lignes budgetaire du site dans la saisie budgètaire.
     */
    #[Route('/budget/saisie-budgetaire', name: 'app_budget_saisie_budgetaire')]
    public function saisieBudgetaire(PaginatorInterface  $paginator,Request $request, FaitRepository $faitsRepository, MoisRepository $mois, UserRepository $users)
    {

        $search = new FaitSearch();
        $form = $this->createForm(FaitSearchType::class, $search);
        $form->handleRequest($request);

        $criteria = $form->getData();
        $faits = $faitsRepository->faitSearch($criteria);

        return $this->render("budget/saisieBudgetaire.html.twig", [
            'faits' => $faits,
            'mois' => $mois->findAll(),
            'users' => $users->findAll(),
            'form'  => $form->createView(),
        ]);
    }

    /**
     * Ajouter une nouvelle ligne budgétaire
     */
    #[Route('/budget/nouvelle-ligne', name: 'app_budget_nouvelle_ligne')]
    public function newBudget (Request $request, EntityManagerInterface $entityManager, FaitRepository $faits, MoisRepository $mois, UserRepository $users)
    {
      $fait = new Fait;

      $form = $this->createForm(FaitType::class, $fait);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($fait);
        $entityManager->flush();
        $this->addFlash('success', 'Ligne budgétaire créée !');
        return $this->redirectToRoute('app_budget_saisie_budgetaire');
      }

      return $this->render('budget/NewSaisieBudgetaire.html.twig', [
        'fait' => $fait,
        'faitForm' => $form->createView(),
        'mois' => $mois->findAll(),
        'faits' => $faits->findAll(),
        'users' => $users->findAll(),
      ]);

    }

    /**
     *  Modifier une ligne budgétaire 
     */
    #[Route('/budget/modifier/{id}', name: 'app_budget_modifier_ligne')]
    public function editBudget($id, Request $request, EntityManagerInterface $entityManager, FaitRepository $faits, MoisRepository $mois, UserRepository $users)
    {
        $fait = $this->FaitRepository->find($id);

        if (! $fait) {
            throw $this->createNotFoundException('Budget #' . $id . ' pas trouvé !');
        }

        $form = $this->createForm(FaitType::class, $fait);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($fait);
            $entityManager->flush();
            $this->addFlash('info', 'Ligne budgétaire modifiée !');
            return $this->redirectToRoute('app_budget_saisie_budgetaire');
        }
        return $this->render('budget/EditSaisieBudgetaire.html.twig', [
            'fait' => $fait,
            'faitForm' => $form->createView(),
            'mois' => $mois->findAll(),
            'faits' => $faits->findAll(),
            'users' => $users->findAll(),
        ]);
    }

    /**
     * Supprimer une ligne budgétaire
     */
    #[Route('/budget/supprimer/{id}', name: 'app_budget_supprimer_ligne')]
    public function deleteBudget($id, EntityManagerInterface $entityManager)
    {
        $fait = $this->FaitRepository->find($id);

        $entityManager->remove($fait);
        $entityManager->flush();
        $this->addFlash('danger', 'Ligne budgétaire supprimée !');
        return $this->redirectToRoute('app_budget_saisie_budgetaire');
    }
}
