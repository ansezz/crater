<?php

namespace Crater\Http\Controllers\V1\Settings;

use Crater\Models\CompanySetting;
use Crater\Http\Controllers\Controller;
use Crater\Http\Requests\UpdateSettingsRequest;

class UpdateCompanySettingsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\UpdateSettingsRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(UpdateSettingsRequest $request)
    {
        CompanySetting::setSettings($request->settings, $request->header('company'));

        return response()->json([
            'success' => true
        ]);
    }
}
