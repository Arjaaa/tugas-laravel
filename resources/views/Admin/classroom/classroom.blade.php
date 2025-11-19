<x-admin.layout :title="$title">

    <div class="flex justify-between items-center mt-10 mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Classroom List</h1>

        <a href="{{ route('admin.classroom.create') }}"
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">
            + Add Classroom
        </a>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama Kelas</th>
                    <th class="px-6 py-3">Siswa</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($classroom as $room)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{ $loop->iteration }}</td>

                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                            {{ $room->name }}
                        </td>

                        <td class="px-6 py-4 text-gray-700 dark:text-gray-300">
                            @if ($room->students->count())
                                <ul class="list-disc list-inside">
                                    @foreach ($room->students as $student)
                                        <li>{{ $student->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-gray-400 italic">Belum ada siswa</span>
                            @endif
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin.layout>
