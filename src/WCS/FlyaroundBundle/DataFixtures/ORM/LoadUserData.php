<?php
// src/WCS/FlyaroundBundle/DataFixtures/ORM/LoadUserData.php

namespace WCS\FlyaroundBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use WCS\FlyaroundBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface

{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $factory = $this->getSecurityManager();

        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $encoder = $factory->getEncoder($userAdmin);
        $encodedPassword = $encoder->encodePassword('test', $userAdmin->getSalt());
        $userAdmin->setPassword($encodedPassword);

        $manager->persist($userAdmin);
        $manager->flush();
    }

    /**
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    private function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}