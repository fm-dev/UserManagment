@extends('layouts.app')
@section('content')
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card bg-secondary w-full">
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
                                        <h5>Add New Data</h5>
                                    </div>
                                    <div class="m-t-10">
                                        <div class="card">
                                            <div class = "card-body">
                                                <form >
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="col-md-12 col-lg-6">
                                                            <label for="basic-url">Nama File</label>
                                                            <div class="input-group mb-3">
                                                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 col-lg-6">
                                                            <label for="basic-url">Upload File</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-secondary m-r-5"><i class="anticon anticon-folder-add"></i> Simpan</button>
                                                </form>
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