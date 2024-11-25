@extends('master.layout')

@section('title')
    Contact
@endsection

@section('content')
<div class="container mt-5 pt-5">  <!-- Padding dan margin top tambahan -->
    <div class="row justify-content-center">
        <!-- Contact Information Section -->
        <div class="col-md-6 text-center mb-4">
            <h2>Contact Us</h2>
            <p class="lead">Hubungi Kami Di Bawah Ini</p>
            <div class="social-icons mb-3">
                <a href="#" class="btn btn-primary btn-sm mx-2">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
                <a href="#" class="btn btn-info btn-sm mx-2">
                    <i class="fab fa-whatsapp"></i> Whatsapp
                </a>
                <a href="#" class="btn btn-danger btn-sm mx-2">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-md-8">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nama Anda</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message">Mau Pesan Apa??</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Write your message here" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
