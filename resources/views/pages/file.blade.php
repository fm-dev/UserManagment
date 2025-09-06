@extends('layouts.app')
@section('content')
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row col-12">
                        <div class="col-md-12 col-lg-12 ">
                            <div class="card bg-secondary w-100">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-lg avatar-image">
                                            <i class="fab fa-earlybirds"></i>
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0 text-white">Selamat Datang</h2>
                                            <p class="m-b-0 text-white">Aplikasi File Managment</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Monitoring File</h5>
                                    </div>
                                    <div class="m-t-10">
                                        <div class="card">
                                            <div class = "card-body">
                                                <div class="w-100   ">
                                                    <a href="/TambahFile" class="btn btn-secondary m-r-5 mb-2"><i class="anticon anticon-file-add"></i> Tambah data</a>
                                                    <table id="data-table" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Name file</th>
                                                                <th>created by</th>
                                                                <th>created date</th>
                                                                <th>action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>ktp_fajri</td>
                                                                <td>
                                                                    Dea ayu ananda
                                                                </td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-info">22 agustus 2022</span>
                                                                </td>
                                                                <td class = "gap-2">
                                                                    <button class="btn btn-secondary btn-tone m-r-5 btn-sm">
                                                                        <i class="anticon anticon-cloud-download"></i>
                                                                        Download
                                                                    </button>
                                                                    <button class="btn btn-danger btn-tone m-r-5 btn-sm">
                                                                        <i class="anticon anticon-delete"></i>
                                                                    </button>
                                                                    <button class="btn btn-warning btn-tone m-r-5 btn-sm">
                                                                        <i class="anticon anticon-edit"></i>
                                                                    </button>
                                                                </td>
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
                        
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content justify-content-between">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
@endsection