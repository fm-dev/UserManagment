@extends('layouts.app')
@section('content')
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row ">
                        <div class="col-md-12 col-lg-12 ">
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
                                        <h5>Monitoring File</h5>
                                    </div>
                                    <div class="m-t-10">
                                        <div class="card">
                                            <div class = "card-body">
                                                <a href="/TambahFile" class="btn btn-secondary m-r-5 mb-2"><i class="anticon anticon-file-add"></i> Tambah data</a>
                                                <div>
                                                    <div class="file-wrapper m-t-20">
                                                         @forelse($data as $file)
                                                        <div class="file">
                                                            <div class="media align-items-center">
                                                                <div class="m-r-15 font-size-30">
                                                                    <i class="anticon anticon-folder text-warning"></i>
                                                                </div>
                                                                <div>
                                                                    <h6 class="mb-0 text-truncate"> {{ Str::limit($file->label_file, 20) }}</h6>
                                                                    <span class="font-size-13 text-muted">{{$file->created_by}}</span>
                                                                    <div class = "gap-2 d-flex">
                                                                        <button class="btn btn-secondary btn-tone m-r-5 btn-sm">
                                                                            <a href="{{ route('file.download', $file->id) }}"><i class="anticon anticon-cloud-download"></i></a>
                                                                        </button>
                                                                        <div>
                                                                            <form action="{{ route('file.destroy', $file->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus file ini?')">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="anticon anticon-delete"></i></button>
                                                                            </form>
                                                                        </div>
                                                                        <!-- <button class="btn btn-warning btn-tone m-r-5 btn-sm">
                                                                            <i class="anticon anticon-edit"></i>
                                                                        </button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         @empty
                                                         <p class="text-center">Belum ada file</p>
                                                         @endforelse
                                                    </div>
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