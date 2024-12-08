@extends('backend.layouts.main') @section('main-container')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-sm-6 p-0">
                    <h3>Reservation</h3>
                </div>
                <div class="col-12 col-sm-6 p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <svg class="stroke-icon">
                                    <use href="backend/assets/svg/icon-sprite.svg#breadcrumb-home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item active"> Reservation</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="reservation-head mb-2">
                    <div class="d-flex align-items-center">
                        <div>
                            <select class="form-select" aria-label=".form-select-sm example" id="selectDays">
                                <option value="7" selected="">7 days </option>
                                <option value="14">14 days</option>
                                <option value="28">28 days</option>
                            </select>
                        </div>
                        <div class="ms-2">
                            <input class="form-control" id="search" type="text" placeholder="search ...">
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light" type="button">View Today</button>
                        <div class="ms-2">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-light" type="button" onclick="twentyeightCells()"><span>&#8920;</span></button>
                                <button class="btn btn-light" type="button" onclick="fourteenCells()"><span>&#8810;</span></button>
                                <button class="btn btn-light" type="button" onclick="sevenCells() "><span>&#60;</span></button>
                                <button class="btn btn-light" type="button">
                                    <div class="input-group flatpicker-calender" style="width:120px;">
                                        <span class="me-2"><i class="icofont icofont-ui-calendar"></i></span>
                                        <input class="form-control p-0 border-0" id="datetime-local" type="date" placeholder="2024-12-10">
                                    </div>
                                </button>
                                <button class="btn btn-light" type="button" onclick="sevenCells()"><span>&#62;</span></button>
                                <button class="btn btn-light" type="button" onclick="fourteenCells()"><span>&#8811;</span></button>
                                <button class="btn btn-light" type="button" onclick="twentyeightCells()"><span>&#8921;</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light" type="button" data-bs-toggle="modal" data-bs-target="#roomCloser"><span class="btn-icon"><i data-feather="minus-circle"></i></span> Room Closure</button>
                        <button class="btn btn-primary ms-2" type="button" data-bs-toggle="modal" data-bs-target="#NewReservation"><span class="btn-icon"><i data-feather="plus"></i></span> Reservation</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="reservation">
                    <div class="table-responsive">
                        <table class="table  table-bordered draggableTable" id="daysTable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-start"><span class="border p-1 ms-2 full-screen-icon"><i data-feather="minimize-2"></i></span></th>
                                    <th scope="col" class="text-center"><span class="txt-secondary">TODAY</span><span class="d-block">20</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>THU</span><span class="d-block">21</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>FRI</span><span class="d-block">22</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">23</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>SUN</span><span class="d-block">24</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>MON</span><span class="d-block">25</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>TUE</span><span class="d-block">26</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>WED</span><span class="d-block">27</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>THU</span><span class="d-block">28</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>FRI</span><span class="d-block">29</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">30</span><span class="d-block">Nov</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">01</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">02</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">03</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">04</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">05</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">06</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">07</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">08</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">09</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">10</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">11</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">12</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">13</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">14</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">15</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">16</span><span class="d-block">DEC</span></th>
                                    <th scope="col" class="text-center"><span>SAT</span><span class="d-block">17</span><span class="d-block">DEC</span></th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr class="room-title">
                                    <td colspan="29" class="fw-bold p-2 ">
                                        <div class="d-flex align-items-center">
                                            <span class="txt-primary toggle-section me-1" data-section="single-room"><i class="icofont icofont-caret-down expand-icon"></i></span> Single Room
                                        </div>
                                    </td>
                                </tr>

                                <tr class="single-room">

                                    <td>101</td>
                                    <td class="position-relative cell">
                                        <div class="bg-success p-2  top-0 start-0 mt-1  position-absolute ms-4 bookedby" style="width:200px"> Booked By Anil Kumar </div>
                                    </td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="position-relative cell">
                                        <div class="bg-danger p-2  top-0 start-0 mt-1 position-absolute ms-4 bookedby" style="width:200px"> Maintanance </div>
                                    </td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="position-relative cell">
                                        <div class="bg-success py-2  top-0 start-0 mt-1 position-absolute ms-4 bookedby" style="width:200px"> Booked By Gautam Kumar </div>
                                    </td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="single-room">
                                    <td>102</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>

                                </tr>
                                <tr class="single-room">
                                    <td>103</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="single-room">
                                    <td>104</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="single-room unallocated-room">
                                    <td>Unallocated</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="position-relative cell">
                                        <div class="bg-info  top-0 start-0 mt-1 position-absolute bookedby" style="width:200px;" type="button" data-bs-toggle="modal" data-bs-target="#EditReservation"><span class="bg-dark py-2 px-1 opacity-25 bookedbysearch"><i class="icon-search "></i></span> Booked By Sidhart </div>
                                        <div class="position-absolute border bg-white rounded p-4 resbox text-dark">
                                            <div class="d-flex justify-content-between align-items-center ">
                                                <h4 class="modal-title">Reservation LH24115678475 Sidhart</h4>
                                                <button class="btn px-0 closeResbtn"><i class="icon-close"></i></button>
                                            </div>
                                            <div class="container-fluid gx-0 mt-4">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <h4 class=" mb-2">Primary Contact</h4>
                                                        <div class="container-fluid gx-0">
                                                            <div class="row">
                                                                <div class="col-md-3 mb-3 mb-lg-0">
                                                                    <p class="mb-0">Guest Email</p>
                                                                    <p class="mb-0 ">example@info.com</p>
                                                                </div>
                                                                <div class="col-md-4 mb-3 mb-lg-0">

                                                                </div>
                                                                <div class="col-md-5 mb-3 mb-lg-0">
                                                                    <div class="">
                                                                        <p class="mb-0 ">Phone Number</p>
                                                                        <p class="mb-0 ">+91 1122 334 455</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class=" mb-2 mt-3">Reservation Details</h4>
                                                        <div class="container-fluid gx-0">
                                                            <div class="row">
                                                                <div class="col-md-3 mb-3 mb-lg-0">
                                                                    <p class="mb-0">Stay </p>
                                                                    <p class="mb-0 ">1 Night</p>
                                                                </div>
                                                                <div class="col-md-4 mb-3 mb-lg-0">
                                                                    <p class="mb-0">Arrival Time </p>
                                                                    <p class="mb-0 ">04:30 PM</p>
                                                                </div>
                                                                <div class="col-md-5 mb-3 mb-lg-0">
                                                                    <p class="mb-0 ">Source of reservation</p>
                                                                    <p class="mb-0 ">By Hotel</p>
                                                                </div>
                                                                <div class="container-fluid  mt-1">
                                                                    <div class="row ">
                                                                        <div class="col-md-4 mb-3 mb-lg-0">
                                                                            <p class="mb-0">Room Reservation </p>
                                                                            <p class="mb-0  text-danger">Unallocated</p>
                                                                        </div>
                                                                        <div class="col-md-3 ">

                                                                        </div>
                                                                        <div class="col-md-5 mb-3 mb-lg-0">
                                                                            <p class="mb-0 ">Guest</p>
                                                                            <p class="mb-0 ">5</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="rounded border p-3 bg-light text-muted">
                                                            <p class="mb-1 fw-bold">Paid</p>
                                                            <p class="mb-0">Reservation Total</p>
                                                            <p class="mb-0">0.00</p>
                                                            <p class="mt-2 mb-0">Total Outstanding</p>
                                                            <p class="mb-0">0.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0 gap-2 mt-2">
                                                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel Reservation</button>
                                                <button class="btn btn-muted border" type="button">View Reservation</button>
                                                <button class="btn btn-warning" type="button">Confirmed</button>
                                            </div>
                                        </div>



                                    </td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="room-title">
                                    <td colspan="29" class="fw-bold p-2">
                                        <div class="d-flex align-items-center">
                                            <span class="txt-primary toggle-section me-1" data-section="double-room"><i class="icofont icofont-caret-down expand-icon"></i></span> Double Room
                                        </div>
                                    </td>
                                </tr>
                                <tr class="double-room">
                                    <td>101</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>

                                </tr>
                                <tr class="double-room">
                                    <td>102</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="double-room">
                                    <td>103</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="double-room">
                                    <td>104</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>
                                <tr class="double-room unallocated-room">
                                    <td>Unallocated</td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                    <td class="cell"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    <!-- Room closure modal start -->
    <div class="modal fade" id="roomCloser" tabindex="-1" role="dialog" aria-labelledby="roomCloser" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-toggle-wrapper  text-start dark-sign-up">
                    <div class="modal-header">
                        <h4 class="modal-title">Room Closure</h4>
                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3 needs-validation" novalidate="">
                            <div class="col-md-12">
                                <label class="form-label">Room</label>
                                <select class="form-select form-select-sm" id="roomtype">
                                    <optgroup class="text-muted" label="Single Room">
                                        <option>Room 101</option>
                                        <option>Room 102</option>
                                        <option>Room 103</option>
                                    </optgroup>
                                    <optgroup class="text-muted" label="Double Room">
                                        <option>Room 101</option>
                                        <option>Room 102</option>
                                        <option>Room 103</option>
                                    </optgroup>
                                    <optgroup class="text-muted" label="Deluxe Room">
                                        <option>Room 101</option>
                                        <option>Room 102</option>
                                        <option>Room 103</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="start-date">Start Date</label>
                                <div class="input-group flatpicker-calender border px-2 d-flex align-items-center border-radius-4">
                                    <span class="text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                    <input class="form-control form-control-sm border-0" id="datetime-local" type="date" value="2023-05-03">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="end-date">End Date</label>
                                <div class="input-group flatpicker-calender border px-2 d-flex align-items-center border-radius-4">
                                    <span class="text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                    <input class="form-control form-control-sm border-0" id="datetime-local" type="date" value="2023-05-03">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="Description">Description</label>
                                    <textarea class="form-control form-control-sm" id="Description" rows="2"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer justify-content-between flex-nowrap">
                        <button class="btn btn-outline-secondary w-50" type="button" data-bs-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary w-50" type="button">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room closure modal end-->
    <!-- New reservation modal start -->
    <div class="modal fade" id="NewReservation" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Reservation</h5>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <ul class="simple-wrapper nav nav-tabs bg-secondary pt-2 px-2 reservationTab" role="tablist">
                    <li class="nav-item"><a class="nav-link   active" id="home-tab" data-bs-toggle="tab" href="#details" role="tab" aria-controls="home" aria-selected="true">DETAILS</a></li>
                </ul>
                <div class="modal-body">
                    <div class="alert alert-secondary text-dark" role="alert"> Room type must exit, Room type can't blank </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="details" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="checkinbox mb-3">
                                        <label class="form-label">Checkin</label>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" id="checkin" type="date" value="2023-05-03"> <span class="input-group-text text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="checkinbox mb-3">
                                        <label class="form-label">Checkout</label>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" id="checkout" type="date" value="2023-05-03"> <span class="input-group-text text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="mt-lg-4 mt-0 pt-3">
                                        <label>Length of stay: <strong>2 Nights</strong><span class="px-1">|</span>Booking status: <span class="text-success">New Booking</span> </label>
                                    </div>
                                </div>
                                <div class="col-md-12 wrapper" id="">
                                    <div class="room-type-bar border-radius-4 d-flex flex-wrap my-2 px-3 py-2 justify-content-between align-items-center bg-light element" id="">
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room Type</label>
                                            <select class="form-select form-select-sm">
                                                <option selected="">Singal Room </option>
                                                <option value="1">Family Room</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Rate plan</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 42.5</option>
                                                <option value="1">36.78</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room #</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> Room 1 </option>
                                                <option value="1">Room 2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Adults</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                                <option value="2"> 4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Children</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 0</option>
                                                <option> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                                <option value="2"> 4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Infants</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 0</option>
                                                <option> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Extra Person</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Discount</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <div class="d-flex align-items-center justify-content-center remove " style="width:20px;height:20px;">
                                                <i class="icon-close bg-danger p-1 rounded-circle formclosebtn" style="font-size:10px"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="results"></div>
                                    <div class="add-extra-room text-end">
                                        <button class="btn btn-light active px-2 clone" type="button" id=""><span class="btn-icon"><i data-feather="plus"></i></span> Add Another Room</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-8 col-sm-12 col-12">
                                    <h4 class="pt-2 mb-3 border-top text-uppercase txt-secondary">Primary Contact</h4>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-sm" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">City</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">State</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PIN / ZIP</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="PIN / ZIP">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Arrival Time</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected=""> Select Arrival Time</option>
                                                        <option> 12:00 AM</option>
                                                        <option> 01:00 AM</option>
                                                        <option> 02:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Document type</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected="">Document type</option>
                                                        <option>Aadhar Card </option>
                                                        <option>Pan Card</option>
                                                        <option>Driving Licence</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">ID Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div>
                                            {{--
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="comments">Guest Comments</label>
                                                <textarea class="form-control" id="comments" rows="2">Guest Comments</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12">
                                    <div class="reservation-summary px-3 py-2 bg-light">
                                        <h4 class="text-uppercase my-2">Booking Summary</h4>
                                        <div class="my-2">
                                            <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                            <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                            </div>
                                            <div class="my-2">
                                                <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="button">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!--New reservation modal end -->

</div>

<!-- customer Drag status modal start -->
<div class="modal fade" id="changeReservation" tabindex="-1" role="dialog" aria-labelledby="roomCloser" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-toggle-wrapper  text-start dark-sign-up">
                <div class="modal-header  border-0">
                    <h4 class="modal-title">Change Reservation</h4>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-2">Reservation LH24115678475 Sidhart</h6>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-2"><span class="d-block">Stay :</span> <span class="d-block">1 Night</span></td>
                                <td class="py-2"><span class="d-block">Stay :</span> <span class="d-block">1 Night</span></td>
                            </tr>
                            <tr>
                                <td class="py-2"><span class="d-block">Checkin:</span> <span class="d-block">Nov 20, 2024</span></td>
                                <td class="py-2"><span class="d-block">Checkin:</span> <span class="d-block">Nov 20, 2024</span></td>
                            </tr>
                            <tr>
                                <td class="py-2"><span class="d-block">Checkout:</span> <span class="d-block">Nov 22, 2024</span></td>
                                <td class="py-2"><span class="d-block">Checkout:</span> <span class="d-block">Nov 22, 2024</span></td>
                            </tr>
                            <tr>
                                <td class="py-2"><span class="d-block">Room Type:</span> <span class="d-block">Singal Room</span></td>
                                <td class="py-2"><span class="d-block">Room Type:</span> <span class="d-block">Singal Room</span></td>
                            </tr>
                            <tr>
                                <td class="py-2"><span class="d-block">Room :</span> <span class="d-block">Unallocated</span></td>
                                <td class="py-2"><span class="d-block">Room :</span> <span class="d-block">Room - 2</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between flex-nowrap border-0">
                    <button class="btn btn-outline-secondary w-50" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary w-50" type="button">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- customer status modal end -->


<!-- //Edi Reservation status start -->
<div class="modal fade" id="EditReservation" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reservation LH24115678475 Sidhart</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <ul class="simple-wrapper nav nav-tabs bg-secondary pt-2 px-2 reservationTab" role="tablist">
                    <li class="nav-item"><a class="nav-link fw-normal active" id="home-tab" data-bs-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">DETAILS</a></li>
                    <li class="nav-item"><a class="nav-link  fw-normal" id="profile-tabs" data-bs-toggle="tab" href="#guests" role="tab" aria-controls="profile" aria-selected="false">GUESTS</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal" id="contact-tab" data-bs-toggle="tab" href="#payments" role="tab" aria-controls="contact" aria-selected="false">PAYMENTS</a></li>
                    <li class="nav-item"><a class="nav-link  fw-normal" id="profile-tabs" data-bs-toggle="tab" href="#notes" role="tab" aria-controls="profile" aria-selected="false">NOTES</a></li>
                    <li class="nav-item"><a class="nav-link fw-normal" id="contact-tab" data-bs-toggle="tab" href="#invoice" role="tab" aria-controls="contact" aria-selected="false">INVOICE</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- details start -->
                    <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="home-tab">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="checkinbox mb-3">
                                        <label class="form-label">Checkin</label>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" id="checkin" type="date" value="2023-05-03"> <span class="input-group-text text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12 col-12">
                                    <div class="checkinbox mb-3">
                                        <label class="form-label">Checkout</label>
                                        <div class="input-group">
                                            <input class="form-control form-control-sm" id="checkout" type="date" value="2023-05-03"> <span class="input-group-text text-muted"><i class="icofont icofont-ui-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-12">
                                    <div class="mt-lg-4 mt-0 pt-3">
                                        <label>Length of stay: <strong>2 Nights</strong><span class="px-1">|</span>Booking status: <span class="text-success">Confirmed</span> </label>
                                    </div>
                                </div>
                                <div class="col-md-12 d-tab-wrapper" id="">
                                    <div class="room-type-bar border-radius-4 d-flex flex-wrap my-2 px-3 py-2 justify-content-between align-items-center bg-light d-tab-element" id="">
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room Type</label>
                                            <select class="form-select form-select-sm">
                                                <option selected="">Singal Room </option>
                                                <option value="1">Family Room</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Rate plan</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 42.5</option>
                                                <option value="1">36.78</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room #</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> Room 1 </option>
                                                <option value="1">Room 2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Adults</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                                <option value="2"> 4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Children</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 0</option>
                                                <option> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                                <option value="2"> 4</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Infants</label>
                                            <select class="form-select form-select-sm">
                                                <option selected=""> 0</option>
                                                <option> 1 </option>
                                                <option value="2"> 2</option>
                                                <option value="2"> 3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Room</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Extra Person</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label">Discount</label>
                                            <div class="input-group">
                                                <span class="input-group-text text-muted ">₹</span>
                                                <input class="form-control form-control-sm w-120" type="text" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <div class="d-flex align-items-center justify-content-center d-tab-remove " style="width:20px;height:20px;">
                                                <i class="icon-close bg-danger p-1 rounded-circle formclosebtn" style="font-size:10px"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-tab-results"></div>
                                    <div class="add-extra-room text-end">
                                        <button class="btn btn-light active px-2 d-tab-clone" type="button" id=""><span class="btn-icon"><i data-feather="plus"></i></span> Add Another Room</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-4">
                                <div class="col-lg-8 col-sm-12 col-12">
                                    <h4 class="pt-2 mb-3 border-top text-uppercase txt-secondary">Primary Contact</h4>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Name</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input class="form-control form-control-sm" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">City</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">State</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="State">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">PIN / ZIP</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="PIN / ZIP">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Arrival Time</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected=""> Select Arrival Time</option>
                                                        <option> 12:00 AM</option>
                                                        <option> 01:00 AM</option>
                                                        <option> 02:00 AM</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Document type</label>
                                                    <select class="form-select form-select-sm">
                                                        <option selected="">Document type</option>
                                                        <option>Aadhar Card </option>
                                                        <option>Pan Card</option>
                                                        <option>Driving Licence</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">ID Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div>
                                            {{--
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input class="form-control form-control-sm" type="text" placeholder="1234 56xx xxxx">
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="col-lg-12 col-sm-12 col-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="comments">Guest Comments</label>
                                                <textarea class="form-control" id="comments" rows="2">Guest Comments</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12 position-relative rsummary">
                                    <div class="reservation-summary px-3 py-2 bg-light ">
                                        <h4 class="text-uppercase my-2">Booking Summary</h4>
                                        <div class="my-2">
                                            <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                            <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                            </div>
                                            <div class="my-2">
                                                <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check checkbox checkbox-primary mb-0">
                                                        <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkbox-primary-1"> Percentage Taxes Included</label>
                                                    </div>
                                                    <span>₹21</span>
                                                </div>
                                                <button class="btn  w-100 btn-sm p-recordBtnShow text-dark btn-light">Record Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records start -->
                                    <div class="paymentRec-Dtab position-absolute  top-0 px-3 py-2  text-dark bg-light">
                                        <h4 class="text-uppercase my-1">Booking Summary</h4>
                                        <p class="mb-1"> Manually record a payment that has been taken outside of Hotel.</p>
                                        <div class="container-fluid gx-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Amount</label>
                                                    <input class="form-control form-control-sm py-1 " id="FirstName" type="number" placeholder="Enter Amount">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Date</label>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control  py-1 flatpickr-input active" id="datetime-local" type="text" readonly="readonly" placeholder="2024-12-08">
                                                        <span class="input-group-text rounded-end py-1"><i class="icofont icofont-ui-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Type</label>
                                                    <select class="form-select form-select-sm py-1" aria-label=".form-select-sm example">
                                                        <option selected=""> Cash</option>
                                                        <option value="1">Card</option>
                                                        <option value="2">Voucher</option>
                                                        <option value="3">Cheque</option>
                                                    </select>
                                                    <div class="form-check checkbox-checked mt-2">
                                                        <input class="form-check-input shadow-none" id="Deposit" type="checkbox">
                                                        <label class="form-check-label mb-0 shadow-none" for="Deposit">Deposit</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span>Note</span>
                                                        <div class="form-check checkbox-checked ">
                                                            <input class="form-check-input shadow-none" id="showinvoice" type="checkbox">
                                                            <label class="form-check-label shadow-none" for="showinvoice">Show note on invoice</label>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control btn-square" id="" rows="2"></textarea>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-check checkbox-checked ">
                                                        <input class="form-check-input shadow-none" id="Dtab-email" type="checkbox" value="ck">
                                                        <label class="form-check-label shadow-none" for="Email invoice">Email invoice</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="d-flex justify-content-between p-2 bg-light text-dark rounded">
                                                        <div class="">
                                                            <p class="mb-0">Sucharge</p>
                                                            <p class="mb-0">₹0</p>
                                                        </div>
                                                        <div class="">
                                                            <p class="mb-0">Total</p>
                                                            <p class="mb-0">₹200</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 guestEmail">
                                                   <label class="form-label  ">Guest Email</label>
                                                   <input class="form-control form-control-sm py-1 " id="FirstName" type="email" >
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="d-flex justify-content-between gap-3">
                                                        <button class="btn btn-danger w-50 cancelslide-Dtab">Cancel</button>
                                                        <button class="btn btn-success w-50">Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- details end -->
                    <!-- guests start -->
                    <div class="tab-pane fade " id="guests" role="tabpanel">
                        <div class="modal-body">
                            <div class="container-fluid gx-0">
                               <div class="row">
                               <div class="col-md-12 g-tab-wrapper" id="">
                                    <div class="add-extra-room text-end d-flex justify-content-between align-items-center">
                                        <h4 class="txt-secondary ">DOUBLE DELUXE : 103</h4>
                                        <button class="btn btn-light active px-2 g-tab-clone" type="button" ><span class="btn-icon"><i data-feather="plus"></i></span> Add New Guests</button>
                                    </div>
                                    <div class="addGuestsTitle">
                                        <span>No Guest</span>
                                        <button class="btn text-primary p-0  border-0" id="g-tabAddroom">Add New Guests</button>
                                    </div>
                                    <div class="" id="guestTabCol">
                                    <div class="room-type-bar border-radius-4 d-flex flex-wrap my-2 px-3 py-2 justify-content-between align-items-center bg-light g-tab-element" >
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label text-dark ">First Name</label>
                                            <input class="form-control" id="FirstName" type="text" placeholder="Enter Your First Name">  
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label text-dark ">Last Name</label>
                                            <input class="form-control" id="lastName" type="text" placeholder="Enter Your Last Name">
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label text-dark ">Email</label>
                                            <input class="form-control" id="email" type="email" placeholder="Enter Your Email">
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label text-dark ">Mobile Number</label>
                                            <input class="form-control" id="phoneNumber" type="number" placeholder="Mobile Number">
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <label class="form-label text-dark ">Gender</label>
                                            <select class="form-select " id="">
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select> 
                                        </div>
                                        <div class="mb-3 mb-lg-1">
                                            <div class="d-flex align-items-center justify-content-center g-tab-remove " style="width:20px;height:20px;">
                                                <i class="icon-close bg-danger p-1 rounded-circle formclosebtn" style="font-size:10px"></i>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="g-tab-results"></div>
                                    
                                </div>
                               </div>    
                            </div>
                        </div>
                    </div>
                    <!-- guests end -->
                    <!-- payments start -->
                    <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="modal-body">
                            <div class="row mt-3">
                                <div class="col-lg-8 col-sm-12 col-12">
                                    <h4 class="txt-secondary mt-2">COMPLETED PAYMENTS</h4>
                                    <div class="col-12">
                                        <table class="table mt-4 border">
                                            <tr class="bg-light">
                                                <th colspan="5">
                                                    <div class="d-flex justify-content-between">
                                                        <span>Recorded Payments (Cash)</span>
                                                        <span>22 Nov 2024</span>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fw-bold">Card</span>
                                                    <br>
                                                    <span>-</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bold">Amount</span>
                                                    <br>
                                                    <span>₹2000</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bold">Sucharge</span>
                                                    <br>
                                                    <span>₹0</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bold">Total</span>
                                                    <br>
                                                    <span>₹2000</span>
                                                </td>
                                                <td class="text-end">
                                                    <button class="btn btn-primary">Record Refund</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12 position-relative rsummary mb-5">
                                    <div class="reservation-summary px-3 py-2 bg-light ">
                                        <h4 class="text-uppercase my-2">Booking Summary</h4>
                                        <div class="my-2">
                                            <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                            <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                            </div>
                                            <div class="my-2">
                                                <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check checkbox checkbox-primary mb-0">
                                                        <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkbox-primary-1"> Percentage Taxes Included</label>
                                                    </div>
                                                    <span>₹21</span>
                                                </div>
                                                <button class="btn  w-100 btn-sm p-recordBtnShow-Paytab text-dark btn-light">Record Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records start -->
                                    <div class="paymentRec-Paytab position-absolute  top-0 px-3 py-2  text-dark bg-light">
                                        <h4 class="text-uppercase my-1">Booking Summary</h4>
                                        <p class="mb-1"> Manually record a payment that has been taken outside of Hotel.</p>
                                        <div class="container-fluid gx-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Amount</label>
                                                    <input class="form-control form-control-sm py-1 " id="FirstName" type="number" placeholder="Enter Amount">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Date</label>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control  py-1 flatpickr-input active" id="datetime-local" type="text" readonly="readonly" placeholder="2024-12-08">
                                                        <span class="input-group-text rounded-end py-1"><i class="icofont icofont-ui-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Type</label>
                                                    <select class="form-select form-select-sm py-1" aria-label=".form-select-sm example">
                                                        <option selected=""> Cash</option>
                                                        <option value="1">Card</option>
                                                        <option value="2">Voucher</option>
                                                        <option value="3">Cheque</option>
                                                    </select>
                                                    <div class="form-check checkbox-checked mt-2">
                                                        <input class="form-check-input shadow-none" id="Deposit" type="checkbox">
                                                        <label class="form-check-label mb-0 shadow-none" for="Deposit">Deposit</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span>Note</span>
                                                        <div class="form-check checkbox-checked ">
                                                            <input class="form-check-input shadow-none" id="showinvoice" type="checkbox">
                                                            <label class="form-check-label shadow-none" for="showinvoice">Show note on invoice</label>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control btn-square" id="" rows="2"></textarea>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-check checkbox-checked ">
                                                        <input class="form-check-input shadow-none" id="Paytab-email" type="checkbox" value="ck">
                                                        <label class="form-check-label shadow-none" for="Email invoice">Email invoice</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="d-flex justify-content-between p-2 bg-light text-dark rounded">
                                                        <div class="">
                                                            <p class="mb-0">Sucharge</p>
                                                            <p class="mb-0">₹0</p>
                                                        </div>
                                                        <div class="">
                                                            <p class="mb-0">Total</p>
                                                            <p class="mb-0">₹200</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 payEmail">
                                                   <label class="form-label  ">Guest Email</label>
                                                   <input class="form-control form-control-sm py-1 " id="FirstName" type="email" >
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="d-flex justify-content-between gap-3">
                                                        <button class="btn btn-danger w-50 cancelslide-Paytab">Cancel</button>
                                                        <button class="btn btn-success w-50">Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- payments end -->
                    <!-- notes start -->
                    <div class="tab-pane fade" id="notes" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="modal-body">
                            <div class="row mt-3">
                                <div class="col-lg-8 col-sm-12 col-12">

                                    <div class="col-12">
                                        <label class="form-label text-dark ">Notes</label>
                                        <textarea class="form-control btn-square" id="exampleFormControlTextarea14" rows="12"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 col-12 position-relative rsummary mb-5">
                                    <div class="reservation-summary px-3 py-2 bg-light ">
                                        <h4 class="text-uppercase my-2">Booking Summary</h4>
                                        <div class="my-2">
                                            <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                            <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                            <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                            </div>
                                            <div class="my-2">
                                                <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="form-check checkbox checkbox-primary mb-0">
                                                        <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkbox-primary-1"> Percentage Taxes Included</label>
                                                    </div>
                                                    <span>₹21</span>
                                                </div>
                                                <button class="btn  w-100 btn-sm p-recordBtnShow-Notetab text-dark btn-light">Record Payment</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records start -->
                                    <div class="paymentRec-Notetab position-absolute  top-0 px-3 py-2  bg-light text-dark">

                                        <h4 class="text-uppercase my-1">Booking Summary</h4>
                                        <p class="mb-1"> Manually record a payment that has been taken outside of Hotel.</p>
                                        <div class="container-fluid gx-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Amount</label>
                                                    <input class="form-control form-control-sm py-1 " id="FirstName" type="number" placeholder="Enter Amount">
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Date</label>
                                                    <div class="input-group mb-3">
                                                        <input class="form-control  py-1 flatpickr-input active" id="datetime-local" type="text" readonly="readonly" placeholder="2024-12-08">
                                                        <span class="input-group-text rounded-end py-1"><i class="icofont icofont-ui-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label  ">Payment Type</label>
                                                    <select class="form-select form-select-sm py-1" aria-label=".form-select-sm example">
                                                        <option selected=""> Cash</option>
                                                        <option value="1">Card</option>
                                                        <option value="2">Voucher</option>
                                                        <option value="3">Cheque</option>
                                                    </select>
                                                    <div class="form-check checkbox-checked mt-2">
                                                        <input class="form-check-input shadow-none" id="Deposit" type="checkbox">
                                                        <label class="form-check-label mb-0 shadow-none" for="Deposit">Deposit</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span>Note</span>
                                                        <div class="form-check checkbox-checked ">
                                                            <input class="form-check-input shadow-none" id="showinvoice" type="checkbox">
                                                            <label class="form-check-label shadow-none" for="showinvoice">Show note on invoice</label>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control btn-square" id="" rows="2"></textarea>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="form-check checkbox-checked ">
                                                        <input class="form-check-input shadow-none" id="Notetab-email" type="checkbox" >
                                                        <label class="form-check-label shadow-none" for="Email invoice">Email invoice</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <div class="d-flex justify-content-between p-2 bg-light text-dark rounded">
                                                        <div class="">
                                                            <p class="mb-0">Sucharge</p>
                                                            <p class="mb-0">₹0</p>
                                                        </div>
                                                        <div class="">
                                                            <p class="mb-0">Total</p>
                                                            <p class="mb-0">₹200</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 NoteEmail">
                                                   <label class="form-label  ">Guest Email</label>
                                                   <input class="form-control form-control-sm py-1 " id="FirstName" type="email" >
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <div class="d-flex justify-content-between gap-3">
                                                        <button class="btn btn-danger w-50 cancelslide-Notetab">Cancel</button>
                                                        <button class="btn btn-success w-50">Record</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- payment Records end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- notes end -->
                    <!-- invoice start -->
                    <div class="tab-pane fade" id="invoice" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="invoiceDetails">
                            <div class="modal-body">
                                <div class="row mt-3">
                                    <div class="col-lg-8 col-sm-12 col-12">
                                        <h3 class="  mb-2 text-uppercase text-dark fw-light px-2">Invoices</h3>
                                        <div class="col-12">
                                            <div class=" bg-light rounded d-flex justify-content-center align-items-center flex-column text-dark" style="height:250px; width:100%">
                                                <p class="fw-light mb-0" style="font-size:18px;">No invoice has been genrated</p>
                                                <p>Generate an invoice now to send to the customer and keep for your records.</p>
                                                <button class="btn btn-outline-primary" id="invoiceGen">Generate Invoice</button>
                                            </div>
                                            <p class="p-2 mt-3 fs-light" style="font-size:12px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit obcaecati nihil sunt nulla ducimus necessitatibus autem aperiam voluptas itaque est ab, minus veritatis quisquam ipsam, iste corrupti fugit ex
                                                eius beatae nam deleniti praesentium nobis maiores! Iusto cum facilis vel?</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-12">
                                        <div class="reservation-summary px-3 py-2 bg-light">
                                            <h4 class="text-uppercase my-2">Booking Summary</h4>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                                <div class="my-2">
                                                    <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                    <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                                </div>
                                                <div class="my-2">
                                                    <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="form-check checkbox checkbox-primary mb-0">
                                                            <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkbox-primary-1"> Percentage Taxes Included</label>
                                                        </div>
                                                        <span>₹21</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- current invoice start -->
                        <div class="invoiceHistory">
                            <div class="modal-body">
                                <div class="alert alert-danger  text-danger" role="alert" id="emailaAlert">No email found</div>
                                <div class="row mt-3">
                                    <div class="col-lg-8 col-sm-12 col-12">
                                        <h3 class="  mb-2 text-uppercase text-dark fw-light px-2">Invoices</h3>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between px-2 ">
                                                <h4 class="">Current Invoice (up-to-date)</h4>
                                                <p class="mb-2 fw-bold" style="font-size:12px">Status:Unpaid</p>
                                            </div>
                                            <div class="p-3 bg-light rounded">
                                                <table class="table table-borderless invice-table ">
                                                    <tr>
                                                        <th>Invoice Number</th>
                                                        <th>Viewed/Printed</th>
                                                        <th>Date Genrated</th>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                    <tr class="fw-bold">
                                                        <td>2-1</td>
                                                        <td>0</td>
                                                        <td>03/12/2024</td>
                                                        <td>
                                                            <button class="btn btn-outline-primary">Mark as Final</button>
                                                        </td>
                                                        <td class="text-primary d-flex flex-column ">
                                                            <a href="#" id="emailInvoice">Email</a>
                                                            <a href="#">View/Print</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="my-3 px-2">
                                                <h4 class="">Invoice History</h4>
                                                <div class="my-2 invoiceList">
                                                    <p class="mb-1"><span class="text-muted pe-2">29 Nov 2024</span> <span class="text-muted px-2">04:10 PM</span> <span class="fw-bold px-2 ">example@hydx.in</span> <span class="fw-bold px-2 ">Viewed/printed3-1</span></p>
                                                    <p class="mb-1"><span class="text-muted pe-2">30 Nov 2024</span> <span class="text-muted px-2">02:30 PM</span> <span class="fw-bold px-2 ">info@hydx.in</span> <span class="fw-bold px-2 ">Viewed/printed3</span></p>
                                                </div>
                                                <p class="text-muted my-3 invoiceNote ">Note : Lorem ipsum dolor sit amet consectetur adipisicing elit. A, fuga corrupti. Odit nihil, ab mollitia esse nesciunt perferendis perspiciatis. Officiis at provident quibusdam necessitatibus saepe, similique,
                                                    fugiat nemo placeat commodi veritatis soluta Sequi neque fugit ad porro.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12 col-12">
                                        <div class="reservation-summary px-3 py-2 bg-light">
                                            <h4 class="text-uppercase my-2">Booking Summary</h4>
                                            <div class="my-2">
                                                <label class="d-flex justify-content-between"><span>Room Total</span> <span>₹214</span></label>
                                                <label class="d-flex justify-content-between"><span>Extra Person Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between"><span>Extras Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between"><span>Discount Total</span> <span>₹0</span></label>
                                                <label class="d-flex justify-content-between border-bottom pb-2"><span>Credit Card Surcharges</span> <span>₹0</span></label>
                                                <div class="my-2">
                                                    <label class="d-flex justify-content-between "><span>Total</span> <span>₹214</span></label>
                                                    <label class="d-flex justify-content-between border-bottom  pb-2"><span>Total Received</span> <span>₹0</span></label>
                                                </div>
                                                <div class="my-2">
                                                    <h4 class="d-flex justify-content-between text-danger"><span>Total Outstanding</span> <span>₹214</span></h4>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="form-check checkbox checkbox-primary mb-0">
                                                            <input class="form-check-input" id="checkbox-primary-1" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkbox-primary-1"> Percentage Taxes Included</label>
                                                        </div>
                                                        <span>₹21</span>
                                                    </div>
                                                    <!-- <button class="btn btn-success w-100 btn-sm">Record Payment</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- current invoice end -->

                    </div>

                    <!-- invoice end -->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn text-primary px-1 text-danger" type="button" data-bs-dismiss="modal"><i class="icon-close px-2"></i> Cancel Booking</button>
                <div class="btn-group dropup" role="group">
                    <button class="btn px-1  dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Print</button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Download Invoice</a>
                        <a class="dropdown-item" href="#">Print Invoice</a>
                    </div>
                </div>
                <div class="btn-group dropup" role="group">
                    <button class="btn px-1 dropdown-toggle text-primary" id="emailOpt" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Email</button>
                    <div class="dropdown-menu " aria-labelledby="emailOpt" style="z-index-111 !important;">
                        <a class="dropdown-item" href="#">Send Invoice</a>
                    </div>
                </div>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-warning">Confirm</button>
                    <div class="btn-group dropup" role="group">
                        <button class="btn btn-warning dropdown-toggle px-2" id="confirmDropDown" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu dropup confirmDrop  " aria-labelledby="confirmDropDown" style="transform: translate(-21px, -37px) !important; z-index:111 !important">
                            <a class="dropdown-item" href="#">Confirmed</a>
                            <a class="dropdown-item" href="#">CheckIn</a>
                            <a class="dropdown-item" href="#">CheckOut</a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- ///Edit Reservation status end -->

@endsection