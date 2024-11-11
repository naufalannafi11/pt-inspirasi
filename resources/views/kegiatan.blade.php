<x-layout>
    <div class="bg-green-500 px-10 py-4">
        <h1 class="text-xl font-bold text-white">Kontak Kami</h1>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6 text-center ">Jadwal Tahunan Pelatihan & Sertifikasi BNSP - KEMNAKER - ESDM TAHUN 2023</h1>

        <!-- Filter dan Sortir -->
        <div class="bg-white p-4 shadow rounded-md mb-4">
            <div class="flex justify-between items-center mb-2">
                <span>Filters Active - <span id="activeFilters">0</span></span>
                <div class="space-x-4">
                    <button class="text-green-600 font-semibold" onclick="toggleAll('collapse')">Collapse All</button>
                    <button class="text-green-600 font-semibold" onclick="toggleAll('show')">Show All</button>
                    <button class="text-green-600 font-semibold" onclick="clearFilters()">Clear All</button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Filter Nama Pelatihan -->
                <div>
                    <label class="font-semibold">Nama Pelatihan</label>
                    <input type="text" id="filterName" placeholder="Cari Nama Pelatihan" class="w-full border rounded-md p-2 mt-1">
                </div>
                <!-- Filter Tanggal -->
                <div>
                    <label class="font-semibold">Tanggal</label>
                    <input type="text" id="filterDate" placeholder="Cari Tanggal" class="w-full border rounded-md p-2 mt-1">
                </div>
                <!-- Filter Lokasi -->
                <div>
                    <label class="font-semibold">Lokasi</label>
                    <input type="text" id="filterLocation" placeholder="Cari Lokasi" class="w-full border rounded-md p-2 mt-1">
                </div>
            </div>
        </div>

        <!-- Tabel Jadwal Pelatihan -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama Pelatihan</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Lokasi</th>
                        <th class="px-4 py-3">Sertifikasi</th>
                        <th class="px-4 py-3">Sektor</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($trainings as $index => $training)
                        <tr>
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ $training['name'] }}</td>
                            <td class="px-4 py-2">{{ $training['date'] }}</td>
                            <td class="px-4 py-2">{{ $training['location'] }}</td>
                            <td class="px-4 py-2">{{ $training['certification'] }}</td>
                            <td class="px-4 py-2">{{ $training['sector'] }}</td>
                            <td class="px-4 py-2">
                                <a href="https://wa.me/1234567890" class="bg-green-500 text-white px-4 py-2 rounded-md">WhatsApp</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Filter functionality (sederhana)
        function clearFilters() {
            document.getElementById('filterName').value = '';
            document.getElementById('filterDate').value = '';
            document.getElementById('filterLocation').value = '';
            filterTable();
        }

        // function filterTable() {
        //     let nameFilter = document.getElementById('filterName').value.toLowerCase();
        //     let dateFilter = document.getElementById('filterDate').value.toLowerCase();
        //     let locationFilter = document.getElementById('filterLocation').value.toLowerCase();
        //     let table = document.querySelector('tbody');
        //     let rows = table.getElementsByTagName('tr');

        //     for (let i = 0; i < rows.length; i++) {
        //         let nameCell = rows[i].getElementsByTagName('td')[1];
        //         let dateCell = rows[i].getElementsByTagName('td')[2];
        //         let locationCell = rows[i].getElementsByTagName('td')[3];

        //         if (nameCell && dateCell && locationCell) {
        //             let nameText = nameCell.textContent.toLowerCase();
        //             let dateText = dateCell.textContent.toLowerCase();
        //             let locationText = locationCell.textContent.toLowerCase();

        //             if (
        //                 nameText.includes(nameFilter) &&
        //                 dateText.includes(dateFilter) &&
        //                 locationText.includes(locationFilter)
        //             ) {
        //                 rows[i].style.display = '';
        //             } else {
        //                 rows[i].style.display = 'none';
        //             }
        //         }
        //     }
        // }

        function filterTable() {
    console.log('Filtering started'); // Debugging line
    let nameFilter = document.getElementById('filterName').value.toLowerCase();
    let dateFilter = document.getElementById('filterDate').value.toLowerCase();
    let locationFilter = document.getElementById('filterLocation').value.toLowerCase();
    let table = document.querySelector('tbody');
    let rows = table.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        let nameCell = rows[i].getElementsByTagName('td')[1];
        let dateCell = rows[i].getElementsByTagName('td')[2];
        let locationCell = rows[i].getElementsByTagName('td')[3];

        if (nameCell && dateCell && locationCell) {
            let nameText = nameCell.textContent.toLowerCase();
            let dateText = dateCell.textContent.toLowerCase();
            let locationText = locationCell.textContent.toLowerCase();

            if (
                nameText.includes(nameFilter) &&
                dateText.includes(dateFilter) &&
                locationText.includes(locationFilter)
            ) {
                rows[i].style.display = '';
            } else {
                rows[i].style.display = 'none';
            }
        }
    }
}


        document.getElementById('filterName').addEventListener('input', filterTable);
        document.getElementById('filterDate').addEventListener('input', filterTable);
        document.getElementById('filterLocation').addEventListener('input', filterTable);
    </script>
</x-layout>
