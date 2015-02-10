<?php

namespace WCS\FlyaroundBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{

    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WCSFlyaroundBundle:Terrain')->findAll();

        return $this->render('WCSFlyaroundBundle:Terrain:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WCSFlyaroundBundle:Terrain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terrain entity.');
        }

        return $this->render('WCSFlyaroundBundle:Terrain:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
