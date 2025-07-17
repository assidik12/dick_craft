@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mx-auto px-6 py-16">
    <div class="text-center mb-12">
        <h2 class="text-sm font-bold uppercase text-brand-cyan tracking-widest">CONTACT</h2>
        <p class="text-3xl md:text-4xl font-bold text-white mt-2">Get In Touch Today!</p>
        <p class="text-text-secondary mt-4 max-w-2xl mx-auto">
            Have a project in mind? Want to collaborate? Or just want to say hi? <br/>
            Fill out the form below and I'll get back to you as soon as possible.
        </p>
    </div>

    <div class="max-w-4xl mx-auto bg-brand-light border border-brand-border rounded-lg p-8 md:p-12">
        <form action="#" method="POST" class="flex flex-col w-full">
            @csrf
            <div class="flex flex-col">
                <div class="flex flex-col mt-6 ">
                    <label for="name" class="text-md font-medium text-text-secondary mb-2">Full Name</label>
                    <input type="text" id="name" name="name" class="p-2 border border-brand-border rounded-lg" placeholder="John Doe" required>
                </div>
                <div class="flex flex-col mt-6 ">
                    <label for="name" class="text-md font-medium text-text-secondary mb-2">Social Media</label>
                    <input type="text" id="name" name="name" class="p-2 border border-brand-border rounded-lg" placeholder="Ex: LinkedIn (linkedin.com/username)" required>
                </div>
                <div class="flex flex-col mt-6">
                    <label for="message" class="text-md font-medium text-text-secondary mb-2">Message</label>
                    <textarea id="message" name="message" class="p-2 border border-brand-border rounded-lg" placeholder="Your Message" rows="6" required></textarea>
                </div>
            <div class="mt-8 text-center">
                <button type="submit" class="btn btn-primary w-full md:w-auto shadow-lg shadow-brand-cyan/20">
                    Send Message
                </button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection

