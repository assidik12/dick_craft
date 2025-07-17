@props(['image', 'title', 'category'])

<div class="bg-brand-light rounded-lg overflow-hidden group border border-brand-border hover:border-brand-cyan transition-all duration-300">
    <div class="overflow-hidden">
        <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
    </div>
    <div class="p-6">
        <p class="text-sm text-brand-cyan">{{ $category }}</p>
        <h3 class="text-xl font-bold text-white mt-2">{{ $title }}</h3>
    </div>
</div>
