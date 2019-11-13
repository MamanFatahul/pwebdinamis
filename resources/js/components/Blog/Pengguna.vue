<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blog Pengguna</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                        <thead>                  
                          <tr>
                            <th>Nama</th>
                            <th style="width:25%"><center>Aksi</center></th>
                          </tr>
                        </thead>
                        <tbody>

                      
                            <tr>
                             <td>Maman</td>
                            <td>
                              <a href="#">
                                 <i class="fas fa-eye">Lihat&nbsp;&nbsp;&nbsp;|</i>
                              </a>

                              <a href="#">
                                  &nbsp;&nbsp;&nbsp;<i class="fas fa-edit green">Edit &nbsp;&nbsp;&nbsp;|</i>
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