<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
      return view('equipment.eqoverview');
    }

    public function forecasting()
    {
      return view('equipment.forecasting');
    }

    public function rental()
    {
      return view('equipment.rental');
    }
    public function allocation()
    {
      return view('equipment.allocation');
    }
    public function inventory()
    {
      return view('equipment.inventory');
    }

    //project equipment functions

    public function approvetruck()
    {
      return view('equipment.project.approvetruck');
    }
}