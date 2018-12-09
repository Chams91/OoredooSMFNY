<?php

namespace DataBundle\Controller;

use DataBundle\DataBundle;
use DataBundle\Entity\Data;
use PhpOffice\PhpSpreadsheet\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class DefaultController extends Controller
{

    /**
     * @Route("/list", name="list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Data::class)->findAll();
        return $this->render('@Data/list.html.twig', array('data' => $data
        ));

    }

    /**
     * @Route("/pdf", name="viewpdf")
     */
    public function pdfAction()
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository(Data::class)->findAll();

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('@Data/list.html.twig', [
            'title' => "App history",
            'data' =>$data
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }



    /**
     * @Route("/adminpanel", name="adminpanel")
     */
    public function adminAction()
    {

        return $this->render('@Data/adminpanel.html.twig'
        );

    }


    /**
     * @Route("/delete", name="delete")
     */
    public function deleteAction()

    {
        $em=$this->getDoctrine()->getManager();
        $data=$em->getRepository(Data::class)->findAll();
        foreach ($data as $d)
        {
            $em->remove($d);
        }

        $em->flush();

        return $this->redirectToRoute('adminpanel');
    }


}
