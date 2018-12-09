<?php

namespace AppBundle\Controller;

use DataBundle\Entity\Data;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Finder\Finder;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('base.html.twig');
    }

    /**
     * @Route("/search", name="searchpage")
     */
    public function searchAction(Request $request)
    {
        return $this->render('test.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
        return $this->render('about.html.twig');
    }



    /**
     * @Route("/store", name="store")
     * @Method({"GET", "POST"})
     */
    public function storeAction(Request $request)
    {
        $data = new Data();
        $data->setFileName($request->request->get("title"));
        $user = $this->getUser()->getUsername();
        $format= "d-m-Y H:i:s";
        $data->setUserName($user);
        $data->setConsultationTime(\DateTime::createFromFormat($format,$request->request->get("time")));
        $data->setPhoneNo($request->request->get("phoneNo"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($data);
        $em->flush();
        return new JsonResponse(array(
            "status" => "success"
        ));
    }


    /**
     * @Route("/excel/{_filename}.{_format}", defaults={"_format"="xls","_filename"="example"}, requirements={"_format"="csv|xls|xlsx"}, name="data_excel")
     * @Template(":Default:excel.xlsx.twig")
     */
    public function excelAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Data::class)->findAll();
        return $this->render('dataexcel.xlsx.twig', [
            'data' => $data
        ]);
    }
}
