<?php


namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class usernameProvider implements UserProviderInterface {

    /**
     * @var EntityManager
     */
    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function loadUserByUsername($username) {
        return $this->em->getRepository(User::class)->findOneBy(['id'=>$username]);
    }

    public function refreshUser(UserInterface $user) {
        if(!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return User::class === $class;
    }



}
