<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\Budget;
use App\Form\BudgetType;
use App\Repository\BudgetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;


class BudgetController extends AbstractController
{
    /**
     * @var BudgetRepository $repository
     */
    private $BudgetRepository;


    public function __construct(BudgetRepository $BudgetRepository, EntityManagerInterface $em)
    {
        $this->BudgetRepository = $BudgetRepository;
    }

    #[Route('/budget', name: 'app_budget')]
    public function index(): Response
    {
        return $this->render('budget/index.html.twig', [
            'controller_name' => 'BudgetController',
        ]);
    }

    /**
     *  Liste des lignes budgetaire du site dans le reporting.
     */
    #[Route('/budget/reporting', name: 'app_budget_reporting')]
    public function reporting(BudgetRepository $budgets, UserRepository $users)
    {
        return $this->render("budget/reporting.html.twig", [
            'budgets' => $budgets->findAll(),
            'users' => $users->findAll(),
        ]);
    }

    /**
     *  Liste des lignes budgetaire du site dans la saisie budgètaire.
     */
    #[Route('/budget/saisie-budgetaire', name: 'app_budget_saisie_budgetaire')]
    public function saisieBudgetaire(BudgetRepository $budgets, UserRepository $users)
    {
        return $this->render("budget/saisieBudgetaire.html.twig", [
            'budgets' => $budgets->findAll(),
            'users' => $users->findAll(),
        ]);
    }

    /**
     * Ajouter une nouvelle ligne budgétaire
     */
    #[Route('/budget/nouvelle-ligne', name: 'app_budget_nouvelle_ligne')]
    public function newBudget (Request $request, EntityManagerInterface $entityManager, BudgetRepository $budgets, UserRepository $users)
    {
      $budget = new Budget;

      $form = $this->createForm(BudgetType::class, $budget);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($budget);
        $entityManager->flush();
        $this->addFlash('success', 'Ligne budgétaire créée !');
        return $this->redirectToRoute('app_budget_saisie_budgetaire');
      }

      return $this->render('budget/NewSaisieBudgetaire.html.twig', [
        'budget' => $budget,
        'budgetForm' => $form->createView(),
        'budgets' => $budgets->findAll(),
        'users' => $users->findAll(),
      ]);

    }

    /**
     *  Modifier une ligne budgétaire 
     */
    #[Route('/budget/modifier/{id}', name: 'app_budget_modifier_ligne')]
    public function editBudget($id, Request $request, EntityManagerInterface $entityManager, BudgetRepository $budgets, UserRepository $users)
    {
        $budget = $this->BudgetRepository->find($id);

        if (! $budget) {
            throw $this->createNotFoundException('Budget #' . $id . ' pas trouvé !');
        }

        $form = $this->createForm(BudgetType::class, $budget);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($budget);
            $entityManager->flush();
            $this->addFlash('info', 'Ligne budgétaire modifiée !');
            return $this->redirectToRoute('app_budget_saisie_budgetaire');
        }
        return $this->render('budget/EditSaisieBudgetaire.html.twig', [
            'budgetForm' => $form->createView(),
            'budgets' => $budgets->findAll(),
            'users' => $users->findAll(),
        ]);
    }

    /**
     * Supprimer une ligne budgétaire
     */
    #[Route('/budget/supprimer/{id}', name: 'app_budget_supprimer_ligne')]
    public function deleteBudget($id, EntityManagerInterface $entityManager)
    {
        $budget = $this->BudgetRepository->find($id);

        $entityManager->remove($budget);
        $entityManager->flush();
        $this->addFlash('danger', 'Ligne budgétaire supprimée !');
        return $this->redirectToRoute('app_budget_saisie_budgetaire');
    }
}
