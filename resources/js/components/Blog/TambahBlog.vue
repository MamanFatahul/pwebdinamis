<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Tambah Blog</h3></div>

                    <div class="card-body">
                    <button type="button" class="btn btn-success float-right"><i class="fas fa-plus-square"></i>&nbsp;Tambah Blog</button>
                    <br><br><br>
                       <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th><center>Nama</center></th>
                            <th style="width:25%"><center>Pengguna</center></th>
                            <th style="width:25%"><center>Kategori</center></th>
                            <th style="width:25%"><center>Aksi</center></th>
                          </tr>
                        </thead>
                        <tbody>
                      
                            <tr>
                             <td><center>Maman</center></td>
                             <td><center>Maman</center></td>
                             <td><center>Laki-Laki</center></td>
                            <td>
                              <a href="#">
                                 <i class="fas fa-eye">Lihat &nbsp;&nbsp;&nbsp;|</i>
                              </a>

                              <a href="#">
                                   &nbsp;&nbsp;&nbsp; <i class="fas fa-edit green">Edit &nbsp;&nbsp;&nbsp;|</i>
                              </a>

                              <a href="#">
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
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
