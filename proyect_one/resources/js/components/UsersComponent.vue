<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">USUARIOS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                            <li class="breadcrumb-item active">USUARIOS</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tabla usuarios</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar"> -->
                                        <button class="btn btn-block bg-gradient-success btn-sm text-light" 
                                        data-toggle="modal" data-target="#adduser_modal"
                                        @click="newRegister()">
                                            Agregar <i class="fas fa-user-plus"></i>
                                        </button>
                                        <!-- <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Tipo</th>
                                            <th>Fecha de Registro</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item, index) in users.data" :key="index">
                                            <td> {{ item.id }} </td>
                                            <td> {{ item.name }} </td>
                                            <td> {{ item.email }} </td>
                                            <td> {{ item.type | capitalize }} </td>
                                            <td> {{ item.created_at | mydate }} </td>
                                            <td>
                                                <a href="#" class="mr-2"
                                                @click="editModal(item)" data-toggle="modal" data-target="#adduser_modal"> <i class="fas fa-edit"></i></a>
                                                <a href="#" 
                                                @click="deleteUser(item.id)"> <i class="fas fa-trash red"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <!-- <div class="overflow-auto"> -->
                                    <pagination :data="users" @pagination-change-page="getResults"
                                    align="center"></pagination>
                                <!-- </div> -->
                                
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="adduser_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ (editMode) ? 'Editar Usuario' : 'Crear Usuario' }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="(editMode) ? updateUser() : createUser() ">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="name" v-model="form.name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" v-model="form.email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="email"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" v-model="form.password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="password"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Tipo</label>
                                <select name="type" class="form-control" v-model="form.type" :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="" selected disabled>Seleccionar tipo</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Autor">Autor</option>
                                </select>
                                <has-error :form="form" field="type"></has-error>
                            </div>
                            <div class="form-group">
                                <label>Biografia</label>
                                <textarea type="text" name="bio" v-model="form.bio" class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                <has-error :form="form" field="bio"></has-error>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" :disabled="form.busy">
                                {{ (editMode) ? 'Guardar' : 'Registrar' }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editMode : false,
                users: {},
                form: new Form({
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
            // Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('api/user?page=' + page)
                    .then(response => {
                        this.users = response.data
                    })
            },
            newRegister (){
                this.editMode = false
                this.form.reset()
                this.form.clear()
            },
            loadUsers (){
                this.$Progress.start()
                axios.get('api/user')
                    .then( ({ data }) => {
                        this.users = data
                        this.$Progress.finish()
                    }, (data) => {
                        console.log(data)
                        this.$Progress.fail()
                    })
            },
            createUser () {
                // Submit the form via a POST request
                this.$Progress.start()

                this.form.post('/api/user')
                    .then( (data) => { 
                        
                        this.$Progress.finish()
                        Fire.$emit('afterCreated')
                        $("#adduser_modal").modal('hide')
                        toast.fire({
                            icon : 'success',
                            title: 'Se ha registrado con exitó!.'
                        })
                    })
                    .catch( (err) => {
                        console.log(err)
                        this.$Progress.fail()
                    })
            },
            updateUser () {
                // Submit the form via a POST request
                this.$Progress.start()

                this.form.put('/api/user/' + this.form.id)
                    .then( (data) => { 
                        
                        this.$Progress.finish()
                        Fire.$emit('afterCreated')
                        $("#adduser_modal").modal('hide')
                        toast.fire({
                            icon : 'success',
                            title: 'Se ha actualizado con exitó!.'
                        })
                    })
                    .catch( (err) => {
                        console.log(err)
                        this.$Progress.fail()
                    })
            },
            deleteUser (id) {
                Swal.fire({
                    title: 'Estas seguro?',
                    text: "No podrás revertir esta acción!",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar'
                })
                .then((result) => {

                    if (result.value) {
                        this.form.delete('/api/user/' + id)
                            .then( () => {
                                Swal.fire( 'Eliminado!', 'Operación exitosa.', 'success')
                                Fire.$emit('afterCreated')
                            }, () => {
                                Swal.fire("Error!", "Intetelo más tarde", "warning")
                            })
                    }                    
                })
            },
            editModal (user) {
                this.newRegister()
                this.editMode = true
                this.form.fill(user)
            }
            
        },
        created (){
            this.loadUsers()
            this.getResults()
            Fire.$on('afterCreated', () => {
                this.loadUsers()
            })
        }

    }
</script>

<style>

</style>