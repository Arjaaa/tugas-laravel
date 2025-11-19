<div id="deleteConfirmModal{{ $student->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full inset-0 h-[calc(100%-1rem)] max-h-full bg-black/50">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-6 text-center">
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                    Apakah Anda yakin ingin menghapus student ini?
                </h3>
                <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Ya, Hapus
                    </button>
                    <button type="button" data-modal-hide="deleteConfirmModal{{ $student->id }}"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100">
                        Batal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
