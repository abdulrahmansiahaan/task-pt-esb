@extends('layouts.layout')

@section('content')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h6>Soal :</h6>
                                <p>
                                1. Analisa contoh invoice di bawah ini dan buat struktur tabel sesuai kebutuhan 
                                untuk menampung seluruh input yang ada pada invoice berikut:
                                </p>
                                <img src="{!! asset('assets/images/Analisa-Contoh-Invoice.png') !!}" class="img-fluid rounded mx-auto d-block" width="600" height="auto" alt="...">
                                <h6>Jawab :</h6>
                                <p>Link : <a href=""></a></p>
                                <hr>

                                <p>
                                2. Buat aplikasi sederhana yang memiliki fungsi CRUD 
                                (Create, Update, and Delete) untuk mengolah data invoice tersebut. 
                                Halaman diawali dengan daftar invoice, kemudian dari halaman tersebut 
                                disediakan akses untuk melakukan tambah, ubah, dan hapus invoice. 
                                Isian form mengikuti desain tabel yang dibuat pada nomor 1:
                                </p>
                                <h6>Jawab :</h6>
                                <p>Link : <a href=""></a></p>
                                <hr>
                                
                                <p>3. Buat 2 API untuk mendapatkan data – data invoice yang sudah disimpan. </br>
                                - Menampilkan semua invoice yang ada. </br>
                                - Menampilkan informasi detail spesifik untuk 1 invoice. Lengkapi API dengan validasi nomor invoice.
                                </p>
                                <h6>Jawab :</h6>
                                <p>Link : <a href=""></a></p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection