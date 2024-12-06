<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;

class CarController extends Controller
{
    // Show the dashboard
    public function index()
    {
        $cars = Car::where('user_id', Auth::id())->get();
        return view('dashboard', compact('cars'));
    }

    // Show the form to add a car
    public function create()
    {
        return view('addCar');
    }

    // Store the car information
    public function store(Request $request)
    {
        $request->validate([
            'car_name' => 'required|string|max:255',
            'distance_travelled' => 'required|numeric',
            'date_of_purchase' => 'required|date',
        ]);

        Car::create([
            'car_name' => $request->car_name,
            'distance_travelled' => $request->distance_travelled,
            'date_of_purchase' => $request->date_of_purchase,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('dashboard')->with('success', 'Car added successfully!');
    }

    // Show the form to edit a car
    public function edit($id)
    {
        $car = Car::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('editCar', compact('car'));
    }

    // Update the car details
    public function update(Request $request, $id)
    {
        $car = Car::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $request->validate([
            'car_name' => 'required|string|max:255',
            'distance_travelled' => 'required|numeric',
            'date_of_purchase' => 'required|date',
        ]);

        $car->update([
            'car_name' => $request->car_name,
            'distance_travelled' => $request->distance_travelled,
            'date_of_purchase' => $request->date_of_purchase,
        ]);

        return redirect()->route('dashboard')->with('success', 'Car updated successfully!');
    }

    // Show suggestions for a car
    public function showSuggestions($id)
    {
        $car = Car::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $distance = $car->distance_travelled;

        $suggestions = [];
        if ($distance >= 8000 && $distance < 16000) {
            $suggestions = ['Verify fluid levels', 'Check and adjust tire pressure', 'Inspect belts and hoses'];
        } elseif ($distance >= 16000 && $distance < 24000) {
            $suggestions = ['Replace air filter', 'Oil change', 'Replace oil filter'];
        } elseif ($distance >= 24000 && $distance < 32000) {
            $suggestions = ['Inspect brake pads and rotors', 'Inspect and replace wiper blades'];
        } elseif ($distance >= 40000 && $distance < 48000) {
            $suggestions = ['Inspect and replace timing belt'];
        } elseif ($distance >= 48000 && $distance < 56000) {
            $suggestions = ['Inspect and replace serpentine belt'];
        } elseif ($distance >= 56000 && $distance < 64000) {
            $suggestions = ['Inspect and replace coolant'];
        } else {
            $suggestions = ['No specific suggestions available for this distance range.'];
        }

        return view('carSuggestions', compact('car', 'suggestions'));
    }
}
