<x-admin.layout :title="$title">

    {{-- Header dan Tombol Tambah --}}
    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Student List</h1>

        <button 
            data-modal-target="addStudentModal" 
            data-modal-toggle="addStudentModal"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
            + Tambah Student
        </button>
    </div>

    {{-- Tabel Data Students --}}
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">#</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Email</th>
                    <th class="px-6 py-3">Alamat</th>
                    <th class="px-6 py-3">Kelas</th>
                    <th class="px-6 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $i => $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">
                            {{ ($students->currentPage() - 1) * $students->perPage() + $i + 1 }}
                        </td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $student->name }}</td>
                        <td class="px-6 py-4">{{ $student->email }}</td>
                        <td class="px-6 py-4">{{ $student->address }}</td>
                        <td class="px-6 py-4">{{ $student->classroom->name ?? '-' }}</td>
                        <td class="px-6 py-4 text-right">
                            {{-- Tombol titik tiga --}}
                            <button id="dropdownButton{{ $student->id }}" data-dropdown-toggle="dropdownMenu{{ $student->id }}" class="text-gray-500 hover:text-gray-700 dark:hover:text-white focus:outline-none">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6-2a2 2 0 100 4 2 2 0 000-4zm4 2a2 2 0 114 0 2 2 0 01-4 0z"/>
                                </svg>
                            </button>

                            {{-- Dropdown menu Flowbite --}}
                            <div id="dropdownMenu{{ $student->id }}" class="hidden z-10 w-36 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <button 
                                            data-modal-target="editStudentModal{{ $student->id }}" 
                                            data-modal-toggle="editStudentModal{{ $student->id }}"
                                            class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Edit
                                        </button>
                                    </li>
                                    <li>
                                        <button 
                                            data-modal-target="deleteConfirmModal{{ $student->id }}" 
                                            data-modal-toggle="deleteConfirmModal{{ $student->id }}"
                                            class="w-full text-left px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-red-500">
                                            Delete
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    {{-- Modal Edit dan Delete --}}
                    @include('Admin.students.update', ['student' => $student, 'classrooms' => $classrooms])
                    @include('Admin.students.delete', ['student' => $student])
                @endforeach
            </tbody>
        </table>

        <div class="p-4">
            {{ $students->links('pagination::tailwind') }}
        </div>
    </div>

    {{-- Modal Tambah Student --}}
    @include('Admin.students.create', ['classrooms' => $classrooms])

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</x-admin.layout>
