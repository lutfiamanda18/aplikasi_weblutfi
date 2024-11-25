@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 100px;">
            <h2>Kontak Kami</h2>

            <p>Terima kasih telah mengunjungi halaman kontak kami. Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut, jangan ragu untuk menghubungi kami. Kami senang mendengar dari Anda!</p>

            <h3>Informasi Kontak</h3>
            <p>Berikut adalah beberapa cara untuk menghubungi kami:</p>

            <ul>
                <li><strong>Email:</strong> <a href="mailto:info@perusahaan-kami.com">info@perusahaan-kami.com</a></li>
                <li><strong>Telepon:</strong> +1 (555) 123-4567</li>
                <li><strong>Alamat:</strong> Jl. Inovasi No. 1234, Suite 500, Kota Teknologi, Indonesia</li>
            </ul>

            <h3>Formulir Kontak</h3>
            <p>Isi formulir di bawah ini untuk mengirim pesan kepada kami:</p>


                <div class="form-group">
                    <label for="name">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Pesan:</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>

{{-- CSS --}}
<style>


    h2, h3 {
        color: #2c3e50;
        text-align: center;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
        text-align: justify;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
        margin-bottom: 30px;
    }

    ul li {
        margin: 10px 0;
        font-size: 16px;
        color: #333;
    }

    strong {
        color: #2980b9;
    }

    a {
        color: #2980b9;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    form {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 30px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-control:focus {
        border-color: #2980b9;
        box-shadow: 0 0 5px rgba(41, 128, 185, 0.5);
    }

    .btn-primary {
        background-color: #2980b9;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-primary:hover {
        background-color: #3498db;
    }

    .container .row {
        margin: 0;
    }

    .container .col-md-12 {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* For responsive design */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        .container h2 {
            font-size: 28px;
        }

        .container h3 {
            font-size: 22px;
        }

        .container p, .container ul li {
            font-size: 16px;
        }

        .form-control {
            font-size: 14px;
        }

        .btn-primary {
            font-size: 16px;
        }
    }
</style>
@endsection
