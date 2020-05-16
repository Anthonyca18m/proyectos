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

                
                    <div class="text-center mb-4">
                        <v-btn color="primary" @click="alert = !alert">
                            Toggle
                        </v-btn>
                    </div>
                    <v-alert :value="alert" color="pink" dark border="top" icon="mdi-home" transition="scale-transition">
                        Phasellus tempus. Fusce ac felis sit amet ligula pharetra condimentum. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Pellentesque posuere. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.

                        Phasellus nec sem in justo pellentesque facilisis. Phasellus magna. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. In hac habitasse platea dictumst. Praesent turpis.
                    </v-alert>
            


                <div class="row card p-5">
                    <div class="col-sm-12 card-body table-responsive p-0">
                        <table id="example" class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                <tr v-for="(item, index) in users.data" :key="index">
                                    <td>Tiger Nixon {{ index }} </td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            </tbody> -->
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
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
                users: {},
                alert : true
            }
        },
        methods: {
            table() {
                // axios.get('api/user')
                //     .then(({ data }) => {
                //         this.users = data
                //     }, (data) => {
                //         console.log(data)
                //     })
                $(document).ready(function() {
                    $('#example').DataTable({
                        'ajax': 'api/user'
                    })
                })
            }
        },
        created() {
            this.table()
        },
    }
</script>