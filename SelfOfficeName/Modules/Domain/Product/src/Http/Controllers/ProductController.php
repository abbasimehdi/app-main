<?php

namespace Selfofficename\Modules\Domain\Product\Http\Controllers;

use Illuminate\Http\Request;
use Selfofficename\Modules\Core\Http\Resources\BaseListCollection;
use Selfofficename\Modules\Domain\Product\Http\Contracts\Repository\ProductInterface;
use Selfofficename\Modules\Domain\Product\Models\Product;
use Selfofficename\Modules\InfraStructure\Http\Controllers\Controller;

class ProductController extends Controller
{

    /**
     * @param ProductInterface $productRepositoryInterface
     */
    public function __construct(protected ProductInterface $productRepositoryInterface)
    {
        $this->productRepositoryInterface = $productRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return $this->productRepositoryInterface->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->productRepositoryInterface->store($request->post());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
