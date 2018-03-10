<template>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <form role="form" v-on:submit.prevent="onSubmit">
            <div class="form-group">
                <label for="email">Email*</label>
                <div class="row">
                    <div class="col-sm-12">
                     <input type="text" class="form-control" name="email" id="email"  v-model="formData.email" required/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="name">Name*</label>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="name" id="name" v-model="formData.name"
                                required/>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone*</label>
                <div class="row">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" name="phone" id="phone" v-model="formData.phone"
                                required/>
                    </div>
                </div>
            </div>
               <div class="pull-right">
                <button type="submit" class="btn btn-success" id="submit" >
                    Submit
                </button>
            </div>
        </form>
        </div>
    </div>
</div>
</template>

<script>
    export default {
         created() {
            console.log('Component mounted.')
        },
        data: function(){
            return {
               formData:{
                name:null,
                email:null,
                phone:null
               }
            }
        },
        methods:{
              onSubmit: function () {
                let x = this.formData.phone.length;
                if (x < 8) {
                    this.$swal({
                        title: 'Phone Number Not Valid',
                        text: 'Phone Number not valid',
                        type: "warning",
                        allowOutsideClick: true,
                        allowEscapeKey: true,
                        allowEnterKey: true,
                        confirmButtonText: 'ok',

                    })
                } else {
                    this.submit();
                }
            },
            submit: function() {
                console.log('submit');
                axios.post('/data/submit',this.formData).then(response =>{
                    this.$swal({
                        title: 'Success Input',
                        text: 'Input Success',
                        type: "success",
                        allowOutsideClick: true,
                        allowEscapeKey: true,
                        confirmButtonText: 'ok',
                    })
                })    .catch(error => {
                    console.log('error')
                        // $.unblockUI();
                        // this.hasError = true;
                        // this.error.code = error.response.data.code;
                        // this.error.detail = error.response.data.detail;
                        // document.body.scrollTop = document.documentElement.scrollTop = 0;
                    });
            }
        }
    }
</script>
