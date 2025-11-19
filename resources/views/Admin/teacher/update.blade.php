<div id="updateTeacherModal{{ $teacher->id }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 justify-center items-center w-full h-full overflow-y-auto flex">

    <div class="relative w-full max-w-lg p-4">
        <div class="bg-white rounded-lg shadow dark:bg-gray-700">

            <!-- HEADER -->
            <div class="flex items-center justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit Teacher
                </h3>

                <button 
                    data-modal-hide="updateTeacherModal{{ $teacher->id }}"
                    class="text-gray-400 hover:bg-gray-200 p-2 rounded">
                    ✕
                </button>
            </div>

            <!-- FORM -->
            <form action="{{ route('admin.teacher.update', $teacher->id) }}" method="POST" class="p-6 space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="font-medium">Nama</label>
                    <input type="text" name="name" value="{{ $teacher->name }}"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white">
                </div>

                <div>
                    <label class="font-medium">Mata Pelajaran</label>
                    <input type="text" name="subject_name" value="{{ $teacher->subject->name }}"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white">
                </div>

                <div>
                    <label class="font-medium">Deskripsi</label>
                    <textarea name="subject_description"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white">{{ $teacher->subject->description }}</textarea>
                </div>

                <div>
                    <label class="font-medium">Telepon</label>
                    <input type="text" name="phone" value="{{ $teacher->phone }}"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white">
                </div>

                <div>
                    <label class="font-medium">Alamat</label>
                    <textarea name="address"
                        class="w-full p-2.5 border rounded-lg dark:bg-gray-600 dark:text-white">{{ $teacher->address }}</textarea>
                </div>

                <div class="flex justify-end gap-3">
                    <button type="button"
                        data-modal-hide="updateTeacherModal{{ $teacher->id }}"
                        class="px-4 py-2 bg-gray-300 rounded-lg">
                        Cancel
                    </button>

                    <button class="px-4 py-2 bg-blue-700 text-white rounded-lg">
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
