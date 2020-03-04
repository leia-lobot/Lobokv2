<?php

namespace App\Http\Requests;

use App\ReservationStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreReservationStatusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('reservation_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required'
            ],
            'color' => [
                'required'
            ],
        ];
    }
}
