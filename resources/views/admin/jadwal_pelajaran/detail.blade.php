@foreach ($jadwal_pelajaran as $jadwal)
    <!-- Detail Jadwal Modal -->
    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
        id="detail-jadwal_pelajaran-modal{{ $jadwal->id }}">
        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Detail Jadwal Pelajaran
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                        data-modal-toggle="detail-jadwal_pelajaran-modal{{ $jadwal->id }}">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="kelas"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                            <input disabled="true" type="text" value="{{ old('kelas', $jadwal->kelas->nama_kelas ?? 'N/A') }}" name="kelas"
                                id="kelas"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="12 ... 2">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="hari"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hari</label>
                            <input disabled="true" type="text" value="{{ old('hari', $jadwal->hari ?? 'N/A') }}"
                                name="hari" id="hari"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="example@gmail.com">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="jam_mulai"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Mulai</label>
                            <input disabled="true" type="text" value="{{ old('jam_mulai', $jadwal->jam_mulai ?? 'N/A') }}" name="jam_mulai"
                                id="jam_mulai"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Siswa">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="jam_selesai"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam Selesai</label>
                            <input disabled="true" type="text" value="{{ old('jam_selesai', $jadwal->jam_selesai ?? 'N/A') }}" name="jam_selesai"
                                id="jam_selesai"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Siswa">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="pelajaran"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelajaran</label>
                            <input disabled="true" type="text" value="{{ old('pelajaran', $jadwal->pelajaran->nama_pelajaran ?? 'N/A') }}" name="pelajaran"
                                id="pelajaran"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Siswa">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="guru"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Guru</label>
                            <input disabled="true" type="text" value="{{ old('guru', $jadwal->guru->user->name ?? 'N/A') }}" name="guru"
                                id="guru"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Siswa">
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="ruang"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruang</label>
                            <input disabled="true" type="text" value="{{ old('ruang', $jadwal->ruang->nama_ruang ?? 'N/A') }}" name="ruang"
                                id="ruang"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Siswa">
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button type="button" data-modal-toggle="detail-jadwal_pelajaran-modal{{ $jadwal->id }}"
                        class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Kembali
                    </button>
                </div>
            </div>
        </div>
    </div>
@endforeach
