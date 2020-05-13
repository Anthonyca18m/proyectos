<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">MIS DATOS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                            <li class="breadcrumb-item active">MIS DATOS</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <!-- /.content-header -->
        <div class="content">
            <div class="content-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white" style="background: url('./img/photo1.png') center center;">
                                <h3 class="widget-user-username text-left">Elizabeth Pierce</h3>
                                <h5 class="widget-user-desc text-left">Web Designer</h5>
                            </div>
                            <div class="widget-user-image">
                                <img class="img-circle" src="" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">3,200</h5>
                                            <span class="description-text">SALES</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                        <div class="description-block">
                                            <h5 class="description-header">13,000</h5>
                                            <span class="description-text">FOLLOWERS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4">
                                        <div class="description-block">
                                            <h5 class="description-header">35</h5>
                                            <span class="description-text">PRODUCTS</span>
                                        </div>
                                        <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    
                                    <div class="tab-pane active" id="settings">
                                        <form class="form-horizontal" @submit.prevent="updatedInfo()">
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">Nombre</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"  v-model="form.name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" v-model="form.email">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Biográfia</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control" placeholder="Experience" v-model="form.bio"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">Foto</label>
                                                <div class="input-group col-sm-10">
                                                    <div class="custom-file ">
                                                        <input type="file" class="custom-file-input" @change="updatePhoto">
                                                        <label class="custom-file-label" for="">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-2 col-form-label">Passport ( Dejar vacio sino cambia )</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="passport">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Guardar Cambios</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                form : new Form({
                    id : '',
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        methods: {
            loadUser (){
                axios.get('api/profile')
                    .then( ({data}) => {
                        this.form.fill(data)
                    })
                    .catch ( (err) => {
                        toast.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Recargue la página nuevamente!'
                        })
                    })
            },
            updatePhoto (e) {
                // console.log("uploding")
                let file = e.target.files[0]
                let reader = new FileReader()
                reader.onloadend = (file) => {
                    this.form.photo = reader.result
                    // console.log('RESULT', reader.result)
                }

                reader.readAsDataURL(file)
            },
            updatedInfo () {
                // Submit the form via a POST request
                this.$Progress.start()

                this.form.put('/api/profile')
                    .then( (data) => { 
                        
                        this.$Progress.finish()
                        Fire.$emit('afterCreated')
                        
                        toast.fire({
                            icon : 'success',
                            title: 'Su información ha sido actualizada!.'
                        })
                    })
                    .catch( (err) => {
                        console.log(err)
                        this.$Progress.fail()
                    })
            }
        },
        created() {
            this.loadUser(),
            Fire.$on('afterCreated', () => {
                this.loadUser()
            })
            
        }
    }
</script>

<style>

</style>