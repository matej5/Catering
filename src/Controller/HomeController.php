<?php
namespace App\Controller;
use App\Entity\Job;
use App\Entity\Worker;
use App\Form\WorkerFormType;
use App\Form\BossFormType;
use App\Form\OffWorFormType;
use App\Repository\JobRepository;
use App\Repository\OfficeRepository;
use App\Repository\ReceiptRepository;
use App\Repository\ServiceRepository;
use App\Repository\UserRepository;
use App\Repository\WorkerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Symfony\Component\Routing\Annotation\Route("/", name="home")
     * @param            Request $request
     */
    public function index(
        Request $request
    ) {
        return $this->render(
            'home/index.html.twig',
            [
                'Title' => "naslov"
            ]
        );
    }

    /**
     * @Symfony\Component\Routing\Annotation\Route("/catering", name="catering")
     * @param            Request $request
     */
    public function catering(
        Request $request
    ) {
        return $this->render(
            'home/catering.html.twig',
            [
                'Title' => "catering"
            ]
        );
    }

    /**
     * @Symfony\Component\Routing\Annotation\Route("/ostalo", name="ostalo")
     * @param            Request $request
     */
    public function ostalo(
        Request $request
    ) {
        return $this->render(
            'home/ostalo.html.twig',
            [
                'Title' => "ostalo"
            ]
        );
    }

    /**
     * @Symfony\Component\Routing\Annotation\Route("/nadstrijesnice", name="nadstrijesnice")
     * @param            Request $request
     */
    public function nadstrijesnice(
        Request $request
    ) {
        return $this->render(
            'home/nadstrijesnice.html.twig',
            [
                'Title' => "nadstrijesnice"
            ]
        );
    }
}