<div class="min-h-screen bg-gray-50">
    <header class="bg-green-700 text-white p-4 sticky top-0 z-50">
        <h1 class="text-xl font-bold text-center">Website</h1>
    </header>

    <div class="md:max-w-[960px] sm:w-full mx-auto py-8 px-4">
        <div class="relative aspect-video rounded overflow-hidden">
            <img src="{{ Storage::url($post->image_path) }}" class="w-full h-full object-fit">

            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                <h2 class="text-white text-4xl font-bold">{{ $post->title }}</h2>
            </div>
        </div>
        <p class="my-2 text-gray-700 font-medium">{{ $post->text }}</p>
        <a href="{{ route('overview')}}" class="p-2 mt-5 md:w-1/5 sm:w-full bg-green-700 rounded-full font-semibold text-white">Zurück zur Übersicht</a>
    </div>
</div>
