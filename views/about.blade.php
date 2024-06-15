@extends('layouts.main')

@section('title', 'About')

@section('deepta')
<div class="card">
    <div class="card-header text-center">
        <h2>About Deep Equipment</h2>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Welcome to Deep Equipment</h1>
                <p class="lead" align="justify">
                    Deep Equipment is dedicated to providing high-quality gym equipment to help you achieve your fitness goals. Whether you are a professional athlete, a fitness enthusiast, or just starting your fitness journey, we have the right tools to support your training and development.
                </p>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Our Mission</h3>
                        <p align="justify">
                            Our mission is to deliver top-notch fitness equipment that combines functionality, durability, and innovative design. We strive to inspire a healthier lifestyle by making fitness accessible to everyone, and to support athletes and fitness enthusiasts in reaching their highest potential.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>Our Vision</h3>
                        <p align="justify">
                            Our vision is to become a leading global provider of gym equipment, recognized for our commitment to quality and customer satisfaction. We aim to continuously innovate and improve our products to meet the evolving needs of the fitness community.
                        </p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/200" class="rounded-circle" alt="Quality Equipment">
                        <h4 class="mt-3">Quality Equipment</h4>
                        <p align="justify">
                            We prioritize quality in every piece of equipment we offer, ensuring it meets the highest standards of performance and safety.
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/200" class="rounded-circle" alt="Innovative Design">
                        <h4 class="mt-3">Innovative Design</h4>
                        <p align="justify">
                            Our equipment features innovative designs that enhance functionality and user experience, helping you get the most out of your workouts.
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/200" class="rounded-circle" alt="Customer Support">
                        <h4 class="mt-3">Customer Support</h4>
                        <p align="justify">
                            We provide exceptional customer support to assist you with any questions or concerns, ensuring a smooth and satisfying experience.
                        </p>
                    </div>
                </div>
                <hr class="my-4">
                <div class="text-center">
                    <a href="/contact" class="btn btn-primary btn-lg"><i class="bi bi-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
