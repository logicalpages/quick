<?php declare(strict_types=1);

namespace GBU\Controller;
use GBU\Core\RequestInterface;
use GBU\Core\ResponseInterface;
use GBU\Entity\TeacherModel;

class InvoicesController implements ActionInterface
{
    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $teachers = (new TeacherModel())->listAll();
       // var_dump($teachers);
        ///var_dump($request->getParams());
        $response->template('page/invoices',
                [
                    'title'=>'Invoice',
                    //'invoices'=>(int) $request->getParam('invoice_id')
                    'invoices' =>$teachers
                ]);
        return $response;
    }
}