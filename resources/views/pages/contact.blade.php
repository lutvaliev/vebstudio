@extends('layouts.master')
@section('title', 'Əlaqə')
@section('content')
    <section class="contact">
        <div class="container">
            <div class="contact-section">
                <div class="contact_details">
                    <h3 class="contact-title">Bizimlə əlaqə</h3>
                    <div class="contact_details-all">
                        <div class="contact_detail flex a-start">
                            <div class="contact_detail-icon">
                                <img src="{{ asset('images/calll.svg') }}" alt="">
                            </div>
                            <div class="contact_detail-info">
                                <h5 class="contact_detail-info-title">Zəng et</h5>
                                <a href="tel:(+994)12 455 55 66">(+994)12 455 55 66</a>
                            </div>
                        </div>
                        <div class="contact_detail flex a-start">
                            <div class="contact_detail-icon">
                                <img src="{{ asset('images/messagess.svg') }}" alt="">
                            </div>
                            <div class="contact_detail-info">
                                <h5 class="contact_detail-info-title">Email yaz</h5>
                                <a href="mailto:support@vebstudio.az">support@vebstudio.az</a>
                            </div>
                        </div>
                        <div class="contact_detail flex a-start">
                            <div class="contact_detail-icon">
                                <img src="{{ asset('images/poosition.svg') }}" alt="">
                            </div>
                            <div class="contact_detail-info">
                                <h5 class="contact_detail-info-title">Ünvanımız</h5>
                                <h6>Bakı şəhəri, Yasamal
                                    Şərifzadə 158, bina 9</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact_form">
                    <form action="">
                        <h5 class="contact-title">Məktub yaz</h5>
                        <div class="contact_form-fields">
                            <input type="text" class="contact_form-field" placeholder="Ad və soyad">
                            <input type="text" class="contact_form-field" placeholder="Email">
                            <input type="text" class="contact_form-field" placeholder="Telefon">
                            <input type="text" class="contact_form-field" placeholder="Mövzu">
                            <textarea type="text" class="contact_form-textarea" placeholder="Məzmun"></textarea>
                        </div>
                        <div class="contact_form-submit flex j-end">
                            <button class="section-link">Göndər</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
