<?php

namespace Modules\Photo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\AdminCore\Http\Controllers\AdminResourceController;

class PhotoController extends AdminResourceController
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
