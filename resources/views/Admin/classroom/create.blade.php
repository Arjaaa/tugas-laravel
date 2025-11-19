<x-admin.layout title="Classroom List">

    <div class="flex justify-center items-center mt-20">
        <div class="w-full max-w-lg bg-white dark:bg-gray-800 rounded-lg shadow p-6">

            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white">Tambah Classroom</h3>

                <a href="{{ route('admin.classroom.index') }}"
                    class="text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 text-lg">✕</a>
            </div>

            <form action="{{ route('admin.classroom.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nama Kelas
                    </label>
                    <input type="text" name="name" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                </div>

                <div class="flex justify-end gap-3 pt-4">
                    <a href="{{ route('admin.classroom.index') }}"
                        class="px-4 py-2 bg-gray-300 dark:bg-gray-600 dark:text-white rounded-lg text-sm hover:bg-gray-400">
                        Batal
                    </a>

                    <button type="submit"
                        class="px-4 py-2 bg-blue-700 text-white rounded-lg text-sm hover:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

</x-admin.layout>
