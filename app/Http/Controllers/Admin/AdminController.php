<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cart;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalUsers = User::count();
        $totalSales = Cart::calculateTotalValue();
        $pendingOrders = Cart::count();
        $supportTickets = Setting::first()?->getSupportTicketsCount() ?? 0;

        return view('admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalSales' => $totalSales,
            'pendingOrders' => $pendingOrders,
            'supportTickets' => $supportTickets,
            'route' => 'admin_dashboard',
        ]);
    }}
