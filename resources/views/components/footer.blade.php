{{-- File: resources/views/components/footer.blade.php --}}
<footer class="bg-brand-light border-t border-brand-border">
    <div class="container mx-auto px-6 py-8">
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="flex flex-col items-center text-center md:text-left mb-4 md:mb-0">
                <p class="text-text-primary">&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>

            </div>
        </div>
    </div>
</footer>
