<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = [
            [
                'id' => 1,
                'car_id' => 10,
                'user_name' => 'Jan Kowalski',
                'start_date' => '2025-11-01',
                'end_date' => '2025-11-05',
                'status' => 'confirmed'
            ],
            [
                'id' => 2,
                'car_id' => 15,
                'user_name' => 'Anna Nowak',
                'start_date' => '2025-11-10',
                'end_date' => '2025-11-12',
                'status' => 'pending'
            ]
        ];

        return response()->json($reservations, 200);
    }

    public function show($id) {
        
        if (!is_numeric($id) || $id <= 0) {
            return response()->json([
                'error' => 'The ID parameter must be a valid positive number.'], 400);
        }


        $id = (int)$id;

        $reservations = [
            1 => [
                'id' => 1,
                'car_id' => 10,
                'user_name' => 'Jan Kowalski',
                'start_date' => '2025-11-01',
                'end_date' => '2025-11-05',
                'status' => 'confirmed'
            ],
            2 => [
                'id' => 2,
                'car_id' => 15,
                'user_name' => 'Anna Nowak',
                'start_date' => '2025-11-10',
                'end_date' => '2025-11-12',
                'status' => 'pending'
            ]
        ];


        if (isset($reservations[$id])) {
            return response()->json($reservations[$id], 200);
        }

        return response()->json([
            'error' => 'The requested reservation with ID ' . $id . ' does not exist.'
        ], 404);
    }
}
