<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\Budget;
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
     * @var UserRepository $repository
     */
    private $UserRepository;

    /**
     * @var BudgetRepository $repository
     */
    private $BudgetRepository;

    #[Route('/budget', name: 'app_budget')]
    public function index(): Response
    {
        return $this->render('budget/index.html.twig', [
            'controller_name' => 'BudgetController',
        ]);
    }

    /**
     *  Liste budgets du site
     */
    #[Route('/budget/workflow', name: 'app_budget_workflow')]
    public function workflow(BudgetRepository $budgets, UserRepository $users)
    {
        return $this->render("budget/workflow.html.twig", [
            'budgets' => $budgets->findAll(),
            'users' => $users->findAll(),
        ]);
    }
}
