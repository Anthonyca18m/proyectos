<template>
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">PROGRAMADOR</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                            <li class="breadcrumb-item active">PROGRAMADOR</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <!-- /.content-header -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                <div class="col-sm-12">
                    <passport-clients></passport-clients>
                </div>
                <div class="col-sm-12">
                    <passport-authorized-clients></passport-authorized-clients>
                </div>
                <div class="col-sm-12">
                    <passport-personal-access-tokens></passport-personal-access-tokens>
                </div>
            </div>
          </div>
      </div>      
  </div>

</template>

<script>
export default {

}
</script>

<style>

</style>