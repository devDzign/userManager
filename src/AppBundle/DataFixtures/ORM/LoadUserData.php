<?php
/**
 * Created by PhpStorm.
 * User: mchabour
 * Date: 28/02/2017
 * Time: 11:15
 */

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->createUser();

        $user
            ->setUsername('someguy')
            ->setEmail('john.doe@example.com')
            ->setFirstLogin(\DateTime::createFromFormat('j-M-Y', '15-Feb-2009'))
            ->setEnabled(true);

        $user->setPlainPassword('somepass');
        $userManager->updateUser($user);
    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}