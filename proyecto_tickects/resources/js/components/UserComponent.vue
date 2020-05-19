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
                        <v-data-table :headers="headers" :items="users" :search="search" sort-by="calories" class="elevation-1">
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
                                    <v-dialog v-model="dialog" max-width="500px">
                                        <template v-slot:activator="{ on }">
                                            <v-btn color="primary" dark class="mb-2" v-on="on">New Item</v-btn>
                                        </template>
                                        <v-card>
                                            <v-card-title>
                                                <span class="headline">{{ formTitle }}</span>
                                            </v-card-title>

                                            <v-card-text>
                                                <v-container>
                                                    <v-row>
                                                        <v-col cols="12" sm="6" md="4">
                                                            <v-text-field v-model="editedItem.name" label="Dessert name"></v-text-field>
                                                        </v-col>
                                                        <v-col cols="12" sm="6" md="4">
                                                            <v-text-field v-model="editedItem.calories" label="Calories"></v-text-field>
                                                        </v-col>
                                                        <v-col cols="12" sm="6" md="4">
                                                            <v-text-field v-model="editedItem.fat" label="Fat (g)"></v-text-field>
                                                        </v-col>
                                                        <v-col cols="12" sm="6" md="4">
                                                            <v-text-field v-model="editedItem.carbs" label="Carbs (g)"></v-text-field>
                                                        </v-col>
                                                        <v-col cols="12" sm="6" md="4">
                                                            <v-text-field v-model="editedItem.protein" label="Protein (g)"></v-text-field>
                                                        </v-col>
                                                    </v-row>
                                                </v-container>
                                            </v-card-text>

                                            <v-card-actions>
                                                <v-spacer></v-spacer>
                                                <v-btn color="blue darken-1" text @click="close">Cancel</v-btn>
                                                <v-btn color="blue darken-1" text @click="save">Save</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-dialog>
                                </v-toolbar>
                            </template>
                            <template v-slot:item.actions="{ item }">
                                <v-icon small class="mr-2" @click="editItem(item)">
                                    mdi-pencil
                                </v-icon>
                                <v-icon small @click="deleteItem(item)">
                                    mdi-delete
                                </v-icon>
                            </template>
                            <template v-slot:no-data>
                                <v-btn color="primary" @click="initialize">Reset</v-btn>
                            </template>
                        </v-data-table>
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
                search: '',
                dialog: false,
                headers: [{
                        text: 'Dessert (100g serving)',
                        align: 'start',
                        sortable: false,
                        value: 'name',
                    },
                    {
                        text: 'Calories',
                        value: 'calories'
                    },
                    {
                        text: 'Fat (g)',
                        value: 'fat'
                    },
                    {
                        text: 'Carbs (g)',
                        value: 'carbs'
                    },
                    {
                        text: 'Protein (g)',
                        value: 'protein'
                    },
                    {
                        text: 'Actions',
                        value: 'actions',
                        sortable: false
                    },
                ],
                users: [],
                editedIndex: -1,
                editedItem: {
                    name: '',
                    calories: 0,
                    fat: 0,
                    carbs: 0,
                    protein: 0,
                },
                defaultItem: {
                    name: '',
                    calories: 0,
                    fat: 0,
                    carbs: 0,
                    protein: 0,
                },
            }
        },

        computed: {
            formTitle() {
                return this.editedIndex === -1 ? 'New Item' : 'Edit Item'
            },
        },

        watch: {
            dialog(val) {
                val || this.close()
            },
        },

        created() {
            this.initialize()
        },

        methods: {
            initialize() {
                this.$Progress.start()
                axios.get('api/moduloUser')
                    .then( ({ data }) => {
                        this.users = data.data
                        this.$Progress.finish()
                    }, (data) => {
                        console.log(data) 
                        this.$Progress.fail()
                    })
                
            },

            editItem(item) {
                this.editedIndex = this.users.indexOf(item)
                this.editedItem = Object.assign({}, item)
                this.dialog = true
            },

            deleteItem(item) {
                const index = this.users.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.users.splice(index, 1)
            },

            close() {
                this.dialog = false
                this.$nextTick(() => {
                    this.editedItem = Object.assign({}, this.defaultItem)
                    this.editedIndex = -1
                })
            },

            save() {
                if (this.editedIndex > -1) {
                    Object.assign(this.users[this.editedIndex], this.editedItem)
                } else {
                    this.users.push(this.editedItem)
                }
                this.close()
            },
        }
    }
</script>

<style>

</style>