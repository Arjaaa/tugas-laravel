<div id="editGuardianModal{{ $guardian->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center w-full p-4 overflow-x-hidden overflow-y-auto bg-black/50">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            {{-- Header --}}
            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Guardian</h3>
                <button type="button" data-modal-hide="editGuardianModal{{ $guardian->id }}"
                    class="text-gray-400 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center">
                    ✕
                </button>
            </div>

            {{-- Form --}}
            <form action="{{ route('admin.guardian.update', $guardian->id) }}" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" value="{{ $guardian->name }}" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                               dark:bg-gray-600 dark:border-gray-500 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job</label>
                    <input type="text" name="job" value="{{ $guardian->job }}" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                               dark:bg-gray-600 dark:border-gray-500 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" value="{{ $guardian->email }}" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                               dark:bg-gray-600 dark:border-gray-500 dark:text-white focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <textarea name="address" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5
                               dark:bg-gray-600 dark:border-gray-500 dark:text-white focus:ring-blue-500 focus:border-blue-500">{{ $guardian->address }}</textarea>
                </div>

                {{-- Tombol --}}
                <div class="flex justify-end gap-2">
                    <button type="button" data-modal-hide="editGuardianModal{{ $guardian->id }}"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
