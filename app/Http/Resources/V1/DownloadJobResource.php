<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema(
 *     schema="DownloadJobResourceV1",
 *     type="object",
 *     @OA\Property(
 *         property="data",
 *         type="object",
 *         @OA\Property(
 *             property="download_job_id",
 *             type="string",
 *             example="59af0d1d-b97d-41a8-975d-e397cd267c77",
 *             description="Unique Download Job ID in uuid4 format.",
 *         ),
 *     ),
 * )
 */
class DownloadJobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
