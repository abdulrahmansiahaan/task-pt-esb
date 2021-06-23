@extends('layouts.layout')

@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mycard">
                    <div class="m-contents">
                        <div class="row">
                            <div class="col-12">
                                <div class="mc-head">
                                    <div class="d-flex justify-content-start">
                                        <a class="btn btn-outline-secondary btn-sm" href="{{ route('salescreate') }}" role="button">Add Invoice</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mc-body">
                                    <table class="table table-bordered">
                                        <thead class="text-center">
                                            <tr>
                                                <th style="width:5%;">No.</th>
                                                <th scope="col">Invoice ID</th>
                                                <th style="width:15%;">Issue Date</th>
                                                <th style="width:20%;">Due Date</th>
                                                <th scope="col">Subject</th>
                                                <th style="width:20%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>Date (upon receipt)</td>
                                                <td>@mdo</td>
                                                <th>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Detail</a>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Edit</a>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Delete</a>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th class="text-center">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>Date (upon receipt)</td>
                                                <td>@fat</td>
                                                <th>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Detail</a>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Edit</a>
                                                    <a class="btn btn-outline-secondary btn-sm" href="#" role="button">Delete</a>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection