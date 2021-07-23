<?php

namespace App\Http\Controllers;

use App\Traits\ManageCart;
use App\Traits\Student\ManageCourses;
use App\Traits\Student\ManageOrders;
use App\Traits\Student\ManageWishlists;

class StudentController extends Controller
{
    use ManageCart, ManageCourses, ManageOrders, ManageWishlists;

    public function index() {
        return view('student.index');
    }
}
