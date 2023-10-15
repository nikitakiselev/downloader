<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\RequestBody(
 *     request="AddDownloadJobRequestV1",
 *     description="Request to add a new Download Job to processing queue.",
 *     required=true,
 *     @OA\JsonContent(
 *         type="object",
 *         @OA\Property(property="url", type="string", example="https://www.youtube.com/watch?v=j17yEgxPwkk"),
 *     ),
 * )
 */
class AddDownloadJobRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
        ];
    }
}
