<template>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Home</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!-- <li class="breadcrumb-item active">USUARIOS</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <v-card>
              <v-alert border="left" colored-border color="deep-purple accent-4" elevation="2">
                <p class="display-1">
                  Bienvenido al sistema!
                </p>
              </v-alert>
            </v-card>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>


<script>
  export default {
    data() {
      return {

      }
    }
  }
</script>