<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\EditUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;


use App\Form\CompteType;
use App\Form\ChangePasswordFormType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;



class AdminController extends AbstractController
{
    /**
     * @var UserRepository $repository
     */
    private $repository;

    /**
     * @var EntityManagerInterface $em
     */
    private $em;

    private ManagerRegistry $doctrine;

    public function __construct(UserRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
    }

    

    #[Route('/home', name: 'app_admin_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     *  Liste des utilisateurs du site
     */
    #[Route('/admin/utilisateurs', name: 'app_admin_utilisateurs')]
    public function usersList(UserRepository $users)
    {
        return $this->render("admin/users.html.twig", [
            'users' => $users->findAll()
        ]);
    }

    /**
     *  Modifier un utilisateur
     */
    #[Route('/admin/utilisateurs/modifier/{id}', name: 'app_admin_modifier_utilisateur')]
    public function editUser($id, Request $request, EntityManagerInterface $entityManager)
    {
        $user = $this->repository->find($id);

        if (! $user) {
            throw $this->createNotFoundException('Utilisateur #' . $id . ' pas trouvé !');
        }

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('info', 'Utilisateur modifié(e) !');
            return $this->redirectToRoute('app_admin_utilisateurs');
        }
        return $this->render('admin/editUser.html.twig', [
            'userForm' => $form->createView()
        ]);
    }

    /**
     * Supprimer un utilisateur
     */
    #[Route('/admin/utilisateurs/supprimer/{id}', name: 'app_admin_supprimer_utilisateur')]
    public function deleteUser($id, EntityManagerInterface $entityManager)
    {
        $user = $this->repository->find($id);

        $entityManager->remove($user);
        $entityManager->flush();
        $this->addFlash('danger', 'Utilisateur supprimé(e) !');
        return $this->redirectToRoute('app_admin_utilisateurs');
    }
    
     /**
     *  Modifier le compte de l'utilisateuer courant
     */
    #[Route('/admin/compte', name: 'app_admin_compte')]
    public function edit(Request $request, EntityManagerInterface $entityManager) {
        
        $user = $this->getUser();

        $form = $this->createForm(CompteType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Les informations de votre compte ont été modifiées !');
            return $this->redirectToRoute('app_home');
        }
        return $this->render('admin/editAccount.html.twig', [
          'form' => $form->createView()
        ]);
     }

     


     /**
     *  Modifier le mot de passe de l'utilisateur courant
     */
    #[Route('/admin/ChangerLeMotDePasse', name: 'app_admin_changePasseword')]
    public function changePassword(Request $request, UserPasswordEncoderInterface $encoder,  EntityManagerInterface $entityManager) {

        $user = $this->getUser();

        $form = $this->createForm(ChangePasswordFormType::class, null, [
             'current_password_is_required' => true
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $user->setPassword(
                    $encoder->encodePassword($user, $form->get('plainPassword')->getData())
               );
          $entityManager->flush();
          $this->addFlash('success', 'Vous venez de modifier votre mot de passe.');
          return $this->redirectToRoute('app_home');
        }
        return $this->render('admin/changePassword.html.twig', [
          'form' => $form->createView()
        ]);
     }
}