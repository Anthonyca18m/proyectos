<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Usuarios</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active"><a href="#">Usuarios</a></li>
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
                        <v-data-table 
                            :headers="headers" 
                            :items="users" 
                            :search="search" 
                            :loading="cargando" 
                            loading-text="Cargando datos..."
                            class="elevation-1">

                            <template v-slot:top>
                                <v-toolbar flat color="white">
                                    <v-toolbar-title>Usuarios</v-toolbar-title>
                                    <v-divider class="mx-4" inset vertical></v-divider>
                                    <div class="btn-group btn-group-sm shadow-sm">
                                            <button class="btn btn-danger" title="EXPORTAR PDF">
                                                <i class="fas fa-file-pdf"></i>
                                            </button>
                                            <button class="btn btn-success" title="EXPORTAR EXCEL">
                                                <i class="fas fa-file-excel"></i>
                                            </button>
                                            <button class="btn btn-warning" title="EXPORTAL CSV">
                                                <i class="fas fa-file-csv"></i>
                                            </button>
                                            <button class="btn btn-default btn-copy" title="COPIAR">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                            <button class="btn btn-secondary" title="IMPRIMIR">
                                                <i class="fas fa-print"></i>
                                            </button>
                                        </div>
                                        <v-divider class="mx-4 ml-5 mr-5" inset vertical></v-divider>
                                        <v-text-field
                                            v-model="search"
                                            append-icon="mdi-magnify"
                                            label="Buscar"
                                            single-line
                                            hide-details
                                        ></v-text-field>
                                    <v-spacer></v-spacer>
                                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#UserModal">
                                        Agregar <i class="fas fa-user-plus"></i> 
                                    </button>
                                </v-toolbar>
                            </template>

                            <template v-slot:item.p_name="{ item }">
                             {{ item.p_name }} {{ item.p_paterno }} {{ item.p_materno }}
                            </template>

                            <template v-slot:item.created_at="{ item }">
                             {{ item.created_at | mydate }} 
                            </template>

                            <template v-slot:item.s_descripcion="{ item }">
                                <v-chip :color="getStatusColor(item.id_states)" dark>{{ item.s_descripcion }}</v-chip>
                            </template>

                            <template v-slot:item.actions="{ item }">
                                <v-icon small class="mr-2" @click="editUser(item)">
                                    mdi-pencil
                                </v-icon>
                                <v-icon small @click="deleteUser(item)">
                                    mdi-delete
                                </v-icon>
                            </template>
                            <template v-slot:no-data>
                                <v-btn color="primary" @click="loadUsers">Recargar</v-btn>
                            </template>
                        </v-data-table>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Agregar Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form @submit.prevent="createUser()" autocomplete="off" >
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Nombre: </label>
                                                <input type="text" name="name" placeholder="Ingrese nombres"
                                                v-model="form.name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                <has-error :form="form" field="Nombre"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Apellido Paterno: </label>
                                                <input type="text" name="paterno" placeholder="Ingrese ap. paterno"
                                                v-model="form.paterno" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                <has-error :form="form" field="Ap. Paterno"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Apellido Materno: </label>
                                                <input type="text" name="materno" placeholder="Ingrese ap. materno"
                                                v-model="form.materno" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                                                <has-error :form="form" field="Ap. Materno"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Tipo: </label>
                                                <select name="type" class="form-control"
                                                v-model="form.type" :class="{ 'is-invalid': form.errors.has('type') }">
                                                    <option value="" selected disabled>Seleccionar tipo</option>
                                                </select>
                                                <has-error :form="form" field="Tipo"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Género: </label>
                                                <select name="type" class="form-control"
                                                v-model="form.type" :class="{ 'is-invalid': form.errors.has('type') }">
                                                    <option value="" selected disabled>Seleccionar género</option>
                                                    <option value="M">Hombre</option>
                                                    <option value="F">Mujer</option>
                                                </select>
                                                <has-error :form="form" field="Tipo"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Email: </label>
                                                <input type="email" name="email" placeholder="Ingrese email"
                                                v-model="form.email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                                                <has-error :form="form" field="email"></has-error>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Contraseña: </label>
                                                <input type="password" name="password"
                                                v-model="form.password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                                <has-error :form="form" field="password"></has-error>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="font-weight-normal">Repetir Contraseña: </label>
                                                <input type="password" name="rpassword"
                                                v-model="form.rpassword" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                                <has-error :form="form" field="r-password"></has-error>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success" :disabled="form.busy">Registrar</button>
                                </div>
                                </form>
                        </div>
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
                cargando : true,
                search: '',
                dialog: false,
                headers: [
                    { text: 'Nombre Completo', value: 'p_name', /*sortable: false , value: 'name'*/ },
                    { text: 'Gmail / Usuario', value: 'c_mail' },
                    { text: 'N° Celular', value: 'c_phone' },
                    { text: 'Tipo de Usuario', value: 'at_description' },
                    { text: 'Estado', value: 's_descripcion' },
                    { text: 'Fecha de Registro', value: 'created_at' },
                    { text: 'Acciones', value: 'actions', sortable: false },
                ],
                users: [],
                form: new Form({
                    id: '',
                    name: '',
                    paterno: '',
                    materno: '',
                    type: '',
                    email: '',
                    password: '',
                    rpassword: '',
                }),
            }
        },
        created() {
            this.loadUsers()
        },
        methods: {
            loadUsers() {
                this.$Progress.start()
                axios.get('api/moduloUser')
                    .then( ({ data }) => {
                        this.users = data.data
                        this.cargando = false
                        this.$Progress.finish()
                    }, (data) => {
                        this.$Progress.fail()
                    })
                
            },

            editUser(item) {
                
            },

            deleteUser(item) {
                
            },
            getStatusColor (status) {
                if (status == 2) return 'red'
                else if (status == 3) return 'orange'
                else return 'green'
            },
        }
    }
</script>

<style>

</style>