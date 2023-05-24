 <x-modal modalId="edit-master-employee" modalHeaderBackground="bg-warning" modalTitleColor="text-dark" modalSize="''">
     <x-slot:modalTitle>
         Form Edit Master Karyawan
     </x-slot:modalTitle>
     <x-slot:modalBody>
         <form action="">
             @csrf
             <input type="text" id="id" name="id" hidden>
             <div class="form-group mb-3">
                 <label for="nip" class="form-label">NIP Karyawan</label>
                 <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP Karyawan">
             </div>
             <div class="form-group mb-3">
                 <label for="nama_karyawan" class="form-label">Nama Karyawan</label>
                 <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan"
                     placeholder="Nama Karyawan">
             </div>
             <div class="row">
                 <div class="form-group col-md-6">
                     <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                     <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                         placeholder="Tempat Lahir">
                 </div>
                 <div class="form-group col-md-6">
                     <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                     <input type="date" class="form-control mb-3 flatpickr-no-config" name="tanggal_lahir"
                         id="tanggal_lahir" placeholder="Select date.." />
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="alamat" class="form-label">Alamat</label>
                 <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" placeholder="Alamat"></textarea>
             </div>
             <div class="form-group mb-3">
                 <label for="no_hp" class="form-label">No Hp</label>
                 <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No Hp">
             </div>
             <div class="row">
                 <div class="form-group col-md-6">
                     <label for="start_date" class="form-label">Start Date</label>
                     <input type="date" class="form-control mb-3 flatpickr-no-config" name="start_date"
                         id="start_date" placeholder="Select date.." />
                 </div>
                 <div class="form-group col-md-6">
                     <label for="end_date" class="form-label">End Date</label>
                     <input type="date" class="form-control mb-3 flatpickr-no-config" name="end_date" id="end_date"
                         placeholder="Select date.." />
                 </div>
             </div>
             <div class="form-group mb-3">
                 <label for="divisi" class="form-label">Divisi</label>
                 <select class="choices form-select" name="divisi" id="divisi">
                     <option value="square">Square</option>
                     <option value="rectangle">Rectangle</option>
                 </select>
             </div>
             <div class="form-group mb-3">
                 <label for="jabatan" class="form-label">Jabatan</label>
                 <select class="choices form-select" name="jabatan" id="jabatan">
                     <option value="square">Square</option>
                     <option value="rectangle">Rectangle</option>
                 </select>
             </div>
     </x-slot:modalBody>
     <x-slot:modalFooter>
         <div class="modal-footer">
             <button type="button" class="btn btn-light-primary" data-bs-dismiss="modal">
                 <i class="bx bx-x d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Batal</span>
             </button>
             <button type="button" class="btn btn-primary ms-1" data-bs-dismiss="modal">
                 <i class="bx bx-check d-block d-sm-none"></i>
                 <span class="d-none d-sm-block">Simpan</span>
             </button>
         </div>
     </x-slot:modalFooter>
     </form>
 </x-modal>
