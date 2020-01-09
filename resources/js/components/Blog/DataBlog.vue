<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Data Blog</h3></div>

                    <div class="card-body">
                       <button type="button" class="btn btn-success float-right" @click="modalBaru">
                        <i class="fas fa-plus-square"></i>&nbsp;Tambah Data Blog</button>
                      <br><br><br>
                       <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th><center>Id</center></th>
                            <th><center>Id Kategori</center></th>
                            <th><center>Id User</center></th>
                            <th><center>Judul</center></th>
                            <th><center>Isi</center></th>
                            <th><center>Jumlah Baca</center></th>
                            <th style="width:25%"><center>Aksi</center></th>
                          </tr>
                        </thead>
                        <tbody>
                      
                            <tr v-for="items in blogs" :key="items.id">
                            <td>{{items.id}}</td>
                            <td>{{items.kategori_id}}</td>
                            <td>{{items.user_id}}</td>
                            <td>{{items.judul}}</td>
                            <td>{{items.isi}}</td>
                            <td>{{items.jbaca}}</td>

                            <td>
                              <a href="#"  @click="editData(items)" title="Edit Data">
                                   &nbsp;&nbsp;&nbsp; <i class="fas fa-edit green">Edit &nbsp;&nbsp;&nbsp;|</i>
                              </a>

                              <a href="#" @click="deleteData(items.id)" title="Hapus Data">
                                    &nbsp;&nbsp;&nbsp;<i class="fas fa-trash-alt red">Hapus</i>      
                                </a>    
                              </td>
                            </tr>
                          
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="tambah"
      tabindex="-1"
      role="dialog"
      aria-labelledby="tambahLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="tambahLabel" v-show="!editmode">Tambah Data Baru</h5>
            <h5 class="modal-title" id="tambahLabel" v-show="editmode">Rubah Data Blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updateData() : createData()">
            <div class="modal-body">
              <div class="form-group">
                <input
                  v-model="form.kategori_id"
                  type="text"
                  name="kategori_id"
                  placeholder="Kategori Id"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('kategori_id') }"
                />
                <has-error :form="form" field="kategori_id"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.user_id"
                  type="text"
                  name="user_id"
                  placeholder="User Id"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('user_id') }"
                />
                <has-error :form="form" field="user_id"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.judul"
                  type="text"
                  name="judul"
                  placeholder="Judul"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('judul') }"
                />
                <has-error :form="form" field="judul"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.isi"
                  type="text"
                  name="isi"
                  placeholder="Isi"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('isi') }"
                />
                <has-error :form="form" field="isi"></has-error>
              </div>

              <div class="form-group">
                <input
                  v-model="form.jbaca"
                  type="text"
                  name="jbaca"
                  placeholder="Jumlah Baca"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('jbaca') }"
                />
                <has-error :form="form" field="jbaca"></has-error>
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Tambah</button>
              <button v-show="editmode" type="submit" class="btn btn-primary">Rubah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/Modal-->

    </div>
</template>

<script>
   export default {
       data(){
         return{
           editmode: false,
           blogs: {},
           form: new Form({
             id: "",
             kategori_id: "",
             user_id: "",
             judul: "",
             isi: "",
             jbaca: ""
           })
         };
       },
       methods: {
         modalBaru(){
           this.editmode = false;
           this.form.reset();
           $("#tambah").modal("show");
         },
          editData(items){
           this.editmode = true;
           this.form.reset();
           $("#tambah").modal("show");
           this.form.fill(items);
         },
         loadData() {
           axios.get("api/blog").then(({ data }) => (this.blogs= data));
         },
         createData() {
      this.form
        .post("api/blog")
        .then(() => {
          this.$Progress.start();
          Fire.$emit("refreshData");
          $("#tambah").modal("hide");
          Toast.fire({
            type: "success",
            title: "Data Berhasi Tersimpan"
          });
          this.$Progress.finish();
        })
        .catch();
    },
    updateData(){
        this.form
        .put("api/blog/" + this.form.id)
        .then(() => {
          this.$Progress.start();
          $("#tambah").modal("hide");
          Toast.fire({
            type: "success",
            title: "Data Berhasil Terubah"
          });
          this.$Progress.finish();
          Fire.$emit("refreshData");
        })
        .catch(() =>{
          this.$Progress.fail();
        });
      },
       deleteData(id){
        Swal.fire({
          title: "Anda Yakin Ingin Menghapus Data ini ?",
          text: "Klik Batal Untuk Membatalkan Penghapusan",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Hapus"
        }).then(result=> {
          if (result.value){
            this.form
            .delete("api/blog/"+id)
            .then(()=>{
              Swal.fire("Terhapus", "Data Anda Sudah Terhapus", "success");
              Fire.$emit("refreshData");
            })
            .catch(()=>{
              Swal.fire("Gagal", "Data Gagal Terhapus", "warning");
            });
          }
        });
      }
   },
       created() {
         this.loadData();
         Fire.$on("refreshData", () => {
           this.loadData();
         });
       }
    };
</script>