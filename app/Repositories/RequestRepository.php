<?php
namespace App\Repositories;

use App\Models\Request;

class RequestRepository
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Collection
     */
    public function all()
    {
        return $this->request->with('user')->get();
    }
}
