<template>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row card p-5">
                    <div class="col-sm-12 card-body table-responsive p-0">
                        <v-data-table :headers="headers" :items="desserts" sort-by="calories" class="elevation-1">
                            <template v-slot:top>
                                <v-toolbar flat color="white">
                                    <v-toolbar-title>My CRUD</v-toolbar-title>
                                    
                                    <v-divider class="mx-4" inset vertical></v-divider>
                                    <v-btn-toggle
                                        v-model="toggle_exclusive"
                                        >
                                        <v-btn>
                                            <v-icon>mdi-format-align-left</v-icon>
                                        </v-btn>
                                        <v-btn>
                                            <v-icon>mdi-format-align-center</v-icon>
                                        </v-btn>
                                        <v-btn>
                                            <v-icon>mdi-format-align-right</v-icon>
                                        </v-btn>
                                        <v-btn>
                                            <v-icon>mdi-format-align-justify</v-icon>
                                        </v-btn>
                                    </v-btn-toggle>
                                    
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
        data: () => ({
            dialog: false,
            headers: [
                { text: 'ID', align: 'start', value: 'id'},
                { text: 'name', value: 'name' },
                { text: 'email', value: 'email' },
                { text: 'type', value: 'type' },
                { text: 'created_at', value: 'created_at' },
                { text: 'Actions', value: 'actions' },
            ],
            desserts: [],
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
        }),

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
                axios.get('api/user')
                    .then(({ data }) => {
                        this.desserts = data.data
                    }, (data) => {
                        console.log(data) 
                    })
            },

            editItem(item) {
                this.editedIndex = this.desserts.indexOf(item)
                this.editedItem = Object.assign({}, item)
                this.dialog = true
            },

            deleteItem(item) {
                const index = this.desserts.indexOf(item)
                confirm('Are you sure you want to delete this item?') && this.desserts.splice(index, 1)
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
                    Object.assign(this.desserts[this.editedIndex], this.editedItem)
                } else {
                    this.desserts.push(this.editedItem)
                }
                this.close()
            },
        },
    }
</script>