<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Booking;
use App\Models\User;

class ExportController extends Controller
{
    private function esc($value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    public function dashboardXls(Request $request)
    {
        $query = Booking::with(['booker', 'returnService'])
            ->where('user_id', auth()->id())
            ->latest();

        $rideType   = $request->input('ride_type');
        $startDate  = $request->input('start_date');
        $endDate    = $request->input('end_date');
        $searchText = $request->input('search_text');

        if ($rideType === 'one') {
            $query->where('round_trip', 0);
        } elseif ($rideType === 'round') {
            $query->where('round_trip', 1);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('pickup_date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('pickup_date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('pickup_date', '<=', $endDate);
        }

        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('booking_id', 'like', "%$searchText%")
                  ->orWhere('pickup_location', 'like', "%$searchText%")
                  ->orWhere('dropoff_location', 'like', "%$searchText%")
                  ->orWhereHas('booker', function ($qb) use ($searchText) {
                      $qb->where('first_name', 'like', "%$searchText%")
                         ->orWhere('last_name', 'like', "%$searchText%");
                  });
            });
        }

        $rows = $query->get();

        $html = view('exports.dashboard_xls', ['rows' => $rows])->render();
        $filename = 'bookings_' . now()->format('Ymd_His') . '.xls';
        return response()->streamDownload(function () use ($html) {
            echo $html;
        }, $filename, [
            'Content-Type' => 'application/vnd.ms-excel; charset=UTF-8',
        ]);
    }

    public function usersXls(Request $request)
    {
        $query = User::select('id', 'first_name', 'last_name', 'email', 'phone', 'contact_type', 'email_verified_at')
            ->where('user_id', auth()->id())
            ->orderBy('id', 'desc');

        $searchText  = $request->input('search_text');
        $contactType = $request->input('contact_type');
        $status      = $request->input('status');

        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('first_name', 'like', "%$searchText%")
                  ->orWhere('last_name', 'like', "%$searchText%")
                  ->orWhere('email', 'like', "%$searchText%")
                  ->orWhere('phone', 'like', "%$searchText%");
            });
        }

        if (!empty($contactType)) {
            $query->where('contact_type', $contactType);
        }

        if ($status === 'verified') {
            $query->whereNotNull('email_verified_at');
        } elseif ($status === 'unverified') {
            $query->whereNull('email_verified_at');
        }

        $rows = $query->get();

        $html = view('exports.users_xls', ['rows' => $rows])->render();
        $filename = 'users_' . now()->format('Ymd_His') . '.xls';
        return response()->streamDownload(function () use ($html) {
            echo $html;
        }, $filename, [
            'Content-Type' => 'application/vnd.ms-excel; charset=UTF-8',
        ]);
    }

    public function dashboardPdf(Request $request)
    {
        $query = Booking::with(['booker', 'returnService'])
            ->where('user_id', auth()->id())
            ->latest();

        $rideType   = $request->input('ride_type');
        $startDate  = $request->input('start_date');
        $endDate    = $request->input('end_date');
        $searchText = $request->input('search_text');

        if ($rideType === 'one') {
            $query->where('round_trip', 0);
        } elseif ($rideType === 'round') {
            $query->where('round_trip', 1);
        }

        if ($startDate && $endDate) {
            $query->whereBetween('pickup_date', [$startDate, $endDate]);
        } elseif ($startDate) {
            $query->where('pickup_date', '>=', $startDate);
        } elseif ($endDate) {
            $query->where('pickup_date', '<=', $endDate);
        }

        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('booking_id', 'like', "%$searchText%")
                  ->orWhere('pickup_location', 'like', "%$searchText%")
                  ->orWhere('dropoff_location', 'like', "%$searchText%")
                  ->orWhereHas('booker', function ($qb) use ($searchText) {
                      $qb->where('first_name', 'like', "%$searchText%")
                         ->orWhere('last_name', 'like', "%$searchText%");
                  });
            });
        }

        $rows = $query->get();
        $pdf = Pdf::loadView('pdfs.dashboard_export', ['rows' => $rows]);
        return $pdf->download('bookings_' . now()->format('Ymd_His') . '.pdf');
    }

    public function usersPdf(Request $request)
    {
        $query = User::select('id', 'first_name', 'last_name', 'email', 'phone', 'contact_type', 'email_verified_at')
            ->where('user_id', auth()->id())
            ->orderBy('id', 'desc');

        $searchText  = $request->input('search_text');
        $contactType = $request->input('contact_type');
        $status      = $request->input('status');

        if ($searchText) {
            $query->where(function ($q) use ($searchText) {
                $q->where('first_name', 'like', "%$searchText%")
                  ->orWhere('last_name', 'like', "%$searchText%")
                  ->orWhere('email', 'like', "%$searchText%")
                  ->orWhere('phone', 'like', "%$searchText%");
            });
        }

        if (!empty($contactType)) {
            $query->where('contact_type', $contactType);
        }

        if ($status === 'verified') {
            $query->whereNotNull('email_verified_at');
        } elseif ($status === 'unverified') {
            $query->whereNull('email_verified_at');
        }

        $rows = $query->get();
        $pdf = Pdf::loadView('pdfs.users_export', ['rows' => $rows]);
        return $pdf->download('users_' . now()->format('Ymd_His') . '.pdf');
    }
}
