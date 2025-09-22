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
                                                <div class="w-100 overflow-auto table-responsive">
                                                    <table class="table ">
                                                        <thead>
                                                            <tr>
                                                                <th>Name file</th>
                                                                <th>created by</th>
                                                                <th>created date</th>
                                                                <th>action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($data as $file)
                                                                <tr>
                                                                    <td>{{$file->label_file}}</td>
                                                                    <td>
                                                                        {{$file->created_by}}
                                                                    </td>
                                                                    <td>
                                                                        <span class="badge badge-pill badge-info">{{ \Carbon\Carbon::parse($file->created_at)->translatedFormat('d F Y') }}</span>
                                                                    </td>
                                                                    <td class = "gap-2 d-flex">
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
                                                                        <button class="btn btn-warning btn-tone m-r-5 btn-sm">
                                                                            <i class="anticon anticon-edit"></i>
                                                                        </button>
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                    <td colspan="6" class="text-center">Belum ada file</td>
                                                                </tr>
                                                            @endforelse
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="d-flex gap-2 mt-2">
                                                    <span class="badge badge-pill badge-default">10 of 100</span>
                                                    <button class="badge badge-pill badge-magenta"><i class="anticon anticon-left"></i></button>
                                                    <button class="badge badge-pill badge-magenta">1</button>
                                                    <button class="badge badge-pill badge-magenta">2</button>
                                                    <button class="badge badge-pill badge-magenta">3</button>
                                                    <button class="badge badge-pill badge-magenta">4</button>
                                                    <button class="badge badge-pill badge-magenta">5</button>
                                                    <button class="badge badge-pill badge-magenta"><i class="anticon anticon-right"></i></button>
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