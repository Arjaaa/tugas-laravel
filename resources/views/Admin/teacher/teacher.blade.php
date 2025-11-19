<x-admin.layout :title="$title">

    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Teacher List</h1>

        <!-- OPEN CREATE MODAL -->
        <button data-modal-target="addTeacherModal" data-modal-toggle="addTeacherModal"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
            + Add Teacher
        </button>
    </div>

    <!-- TABLE -->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Mata Pelajaran</th>
                    <th class="px-6 py-3">Telepon</th>
                    <th class="px-6 py-3">Alamat</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{ $loop->iteration }}</td>

                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $teacher->name }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $teacher->subject->name ?? 'N/A' }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $teacher->phone }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $teacher->address }}
                        </td>

                        <td class="px-6 py-4 text-right">

                            <!-- Three Dots Button -->
                            <button 
                                id="dropdownButton{{ $teacher->id }}" 
                                data-dropdown-toggle="dropdownMenu{{ $teacher->id }}"
                                class="text-gray-500 hover:text-gray-700 dark:hover:text-white">

                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </button>

                            <!-- DROPDOWN -->
                            <div 
                                id="dropdownMenu{{ $teacher->id }}" 
                                class="hidden z-10 w-36 bg-white divide-y divide-gray-100 rounded-lg shadow
                                    dark:bg-gray-700 dark:divide-gray-600">

                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">

                                    <li>
                                        <button 
                                            data-modal-target="updateTeacherModal{{ $teacher->id }}"
                                            data-modal-toggle="updateTeacherModal{{ $teacher->id }}"
                                            class="w-full text-left px-4 py-2 hover:bg-gray-100 
                                                dark:hover:bg-gray-600 dark:hover:text-white">
                                            Edit
                                        </button>
                                    </li>

                                    <li>
                                        <button 
                                            data-modal-target="deleteTeacherModal{{ $teacher->id }}"
                                            data-modal-toggle="deleteTeacherModal{{ $teacher->id }}"
                                            class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 
                                                dark:hover:bg-gray-600 dark:text-red-500">
                                            Delete
                                        </button>
                                    </li>

                                </ul>
                            </div>

                        </td>
                    </tr>

                    {{-- UPDATE MODAL --}}
                    @include('Admin.teacher.update', ['teacher' => $teacher])

                    {{-- DELETE MODAL --}}
                    @include('Admin.teacher.delete', ['teacher' => $teacher])

                @endforeach
            </tbody>
        </table>
    </div>

    {{-- CREATE MODAL --}}
    @include('Admin.teacher.create')

</x-admin.layout>
