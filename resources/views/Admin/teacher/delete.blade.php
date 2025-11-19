<div id="deleteTeacherModal{{ $teacher->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full overflow-y-auto flex">

    <div class="relative w-full max-w-md p-4">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <div class="p-6 text-center">
                
                <h3 class="mb-5 text-lg font-medium text-gray-900 dark:text-gray-300">
                    Delete teacher <strong>{{ $teacher->name }}</strong> ?
                </h3>

                <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="button"
                        data-modal-hide="deleteTeacherModal{{ $teacher->id }}"
                        class="px-4 py-2 bg-gray-300 rounded-lg mr-3">
                        Cancel
                    </button>

                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg">
                        Delete
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>
