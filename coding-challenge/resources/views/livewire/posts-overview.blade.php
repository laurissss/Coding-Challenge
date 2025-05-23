<div class="min-h-screen bg-gray-50">
    <div class="bg-green-700 text-white p-4 sticky top-0 z-50">
        <h1 class="text-xl font-bold text-center">Website</h1>
    </div>

    <div class="max-w-[960px] mx-auto py-8 px-4 space-y-8">
        <div class="space-y-6">
            @foreach($posts as $post)
                <a href="{{ route('post', $post->id)}}" class="block bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <h2 class="pl-2 text-3xl font-semibold">{{ $post->title }}</h2>
                    <div class="md:flex">
                        <div class="md:w-1/3 w-full aspect-video">
                            <img src="{{ Storage::url($post->image_path) }}" class="px-2 py-4 w-full h-full object-fit rounded-3xl">
                        </div>
                        <div class="md:w-2/3">
                            <p class="pt-2 px-2 text-gray-700">{{ $post->text }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        @if (Auth::check())
        <form wire:submit.prevent="uploadPost" class="bg-white  mx-auto rounded-lg shadow border border-gray-300 overflow-hidden">
            <div class="bg-green-700 text-white text-xl font-semibold text-center p-4">
                Inhalte hochladen
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 p-6 text-gray-800">
                <div class="flex flex-col">
                    <label class="text-sm font-medium mb-1">Überschrift</label>
                    <input type="text" wire:model="title" class="border border-gray-300 rounded p-2 focus:outline-none focus:ring-2 focus:ring-green-500">
                    @error('title')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror

                    <label class="text-sm font-medium mt-4 mb-1">Text</label>
                    <textarea wire:model="post_text" class="border border-gray-300 rounded p-2 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                    @error('post_text')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="text-sm font-medium mb-1 block">Bild hochladen</label>

                    <div class="flex items-center justify-center border border-gray-300 rounded-lg h-32 bg-gray-50 text-center">
                        @if (empty($image_path))
                            <div class="space-y-1">
                                <label class="cursor-pointer text-green-700 font-semibold flex items-center justify-center space-x-2">
                                    <span class="rounded bg-green-100 p-1">+ Datei hochladen</span>
                                    <input type="file" wire:model="image_path" class="hidden">
                                </label>
                                <p class="font-semibold text-gray-500">oder Drag and Drop</p>
                            </div>
                        @else
                            <img src="{{ $image_path->temporaryUrl() }}" class="rounded max-h-32  mx-auto">
                        @endif
                    </div>

                    @error('image_path')
                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="p-4 text-right">
                <button type="submit" class=" bg-green-700 text-white font-semibold px-5 py-2 rounded-full hover:bg-green-800 transition">
                    Inhalte ausspielen
                </button>
            </div>
        </form>

        @else
            <div class="text-center">
                <a href="/login" class="font-semibold hover:text-green-500 hover:underline">Anmelden um einen Artikel zu schreiben</a>
            </div>
        @endif
    </div>
</div>
