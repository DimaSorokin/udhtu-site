<?php
namespace App\Repositories;

interface PublicationInterface
{
    /**
     * @return mixed
     */
    public function getMainPublication();
    public function getStudentPublication();
}
