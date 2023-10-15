<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\AddDownloadJobRequest;
use App\Http\Resources\V1\DownloadJobResource;
use Ramsey\Uuid\Uuid;

class DownloadJobController extends Controller
{
    /**
     * @OA\Post(
     *     path="/v1/download",
     *     tags={"Download Job"},
     *     description="Creates a new Download Job and adds it to queue processing. Returns unique job id.",
     *     operationId="addDownloadJobV1",
     *     @OA\RequestBody(ref="#/components/requestBodies/AddDownloadJobRequestV1"),
     *     @OA\Response(response=200, description="Success response with Download Job ID.", @OA\JsonContent(ref="#/components/schemas/DownloadJobResourceV1")),
     * )
     */
    public function add(AddDownloadJobRequest $request): DownloadJobResource
    {
        $hex = Uuid::uuid4();

        return new DownloadJobResource([
            'download_job_id' => $hex,
        ]);
    }
}
