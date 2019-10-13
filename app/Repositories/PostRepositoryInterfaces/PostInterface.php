<?php
namespace App\Repositories;

interface PostInterface
{
    /**
     * @return mixed
     */
    public function all();
    public function main_page_posts();
}
