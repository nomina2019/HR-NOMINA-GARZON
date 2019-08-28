<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default{

        data : function () {
            return {
                users : ''
            }
        },

        methods: {


            fetchUser: function () {

                var vm = this;

                vm.$http.get('user/', function (data) {
                   vm.$set('users', data)
                })

            }
        },
        ready() {

            this.fetchUser();
        },

    }
</script>
