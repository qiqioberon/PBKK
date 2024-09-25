<div x-data="{ open: false }" @keydown.window.escape="open = false" x-show="open"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50" style="display: none;">
    <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/3">
        <div class="px-4 py-2 border-b">
            <h5 class="text-lg font-semibold">{{ $title }}</h5>
            <button @click="open = false" class="float-right text-gray-500 hover:text-gray-700">
                &times;
            </button>
        </div>
        <div class="p-4">
            {!! $content !!}
        </div>
        <div class="px-4 py-2 border-t">
            <button @click="open = false"
                class="mr-2 bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Tutup</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
        </div>
    </div>
</div>
