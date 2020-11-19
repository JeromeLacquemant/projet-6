<?php

namespace App\Controller;

use App\Entity\User as AppUser;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserChecker extends AbstractController implements UserCheckerInterface 
{
    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof AppUser) {
            return;
        }
        
        if ($user->getActivationToken() !== null) {
            $this->addFlash('message', 'Vous n avez pas activé votre compte, merci de regarder vos emails');
            throw new AccountExpiredException('...');
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof AppUser) {
            return;
        }
    }
}