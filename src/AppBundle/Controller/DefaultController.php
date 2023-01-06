<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Segment;
use AppBundle\Service\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    public function callAction(Request $request, ApiService $api)
    {
        $url = 'https://testapi.lleego.com/prueba-tecnica/availability-price';
        $cuerpo = $api->callApi($url);
        $path = $cuerpo->AirShoppingRS->DataLists->FlightSegmentList->FlightSegment;
        $info = array();
        $vuelos = array();
        foreach ($path as $key => $XMLElement) {
            $segment = new Segment();
            $segment->setOriginCode($XMLElement->Departure->AirportCode[0]);
            $segment->setOriginName($XMLElement->Departure->AirportCode[0]);
            $segment->setCompanyCode($XMLElement->MarketingCarrier->AirlineID);
            $segment->setCompanyName($XMLElement->MarketingCarrier->Name);
            $segment->setDestinationCode($XMLElement->Arrival->AirportCode);
            $segment->setDestinationName($XMLElement->Arrival->AirportName);
            $segment->setStart($XMLElement->Departure->Date.' '.$XMLElement->Departure->Time);
            $segment->setEnd($XMLElement->Arrival->Date.' '.$XMLElement->Arrival->Time);
            $segment->setTransportNumber($XMLElement->MarketingCarrier->FlightNumber);
            $info[] = $segment;

        }
        foreach ($info as $key => $vuelo) {
            $vuelos[]["origin_code"] = $vuelo->getOriginCode();
            $vuelos[]["origin_name"] =$vuelo->getOriginName();
            $vuelos[]["destination_code"] =$vuelo->getDestinationCode();
            $vuelos[]["destination_name"] =$vuelo->getDestinationName();
            $vuelos[]["company_code"] = $vuelo->getCompanyCode();
            $vuelos[]["company_name"] = $vuelo->getCompanyName();
            $vuelos[]["start"] = $vuelo->getStart();
            $vuelos[]["end"] = $vuelo->getEnd();
            $vuelos[]["transport_number"] = $vuelo->getTransportNumber();

        }
        return new Response(json_encode($vuelos));


    }
}
