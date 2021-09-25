<template>
    <div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="contact2-form validate-form" @submit.prevent="handleSubmit">
					<span class="contact2-form-title">
						Mail Broadcasting Manger
					</span>

                    <div class="wrap-input2 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input2" type="text" name="subjec" v-model="form.subject">
                        <span class="focus-input2" data-placeholder="Enter Email Subject"></span>
                        <span class="error-message" v-if="errors.subject">{{ errors.subject }}</span>
                    </div>


                    <div class="wrap-input2 validate-input"
                         v-for="(email , index) in form.emails" :key="'mail-wrapper'+index"
                         data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input2" type="email" name="email" v-model="form.emails[index]">
                        <span class="focus-input2" data-placeholder="EMAIL"></span>
                        <span class="error-message" v-if="errors['emails-'+index]">{{
                                errors['emails-' + index]
                            }}</span>
                        <button class="btn-remove" v-if="index !=0" @click="removeRecipient(index)">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn">
                            <div class="contact2-form-bgbtn"></div>
                            <button class="contact2-form-btn" type="button" @click="addNewRecipients">
                                <i class="fa fa-plus" style="margin-right: 5px"></i> Add New Recipients
                            </button>
                        </div>
                    </div>

                    <div class="wrap-input2 validate-input" data-validate="Message is required">
                        <textarea class="input2" name="message" v-model="form.message"></textarea>
                        <span class="focus-input2" data-placeholder="MESSAGE"></span>
                        <span class="error-message" v-if="errors.message">{{ errors.message }}</span>
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="wrap-contact2-form-btn" v-if="!sending">
                            <div class="contact2-form-bgbtn"></div>
                            <button  type="submit" class="contact2-form-btn">
                                Send Your Message
                            </button>

                        </div>
                        <div class="wrap-contact2-form-btn" v-else>
                            <div class="contact2-form-bgbtn"></div>
                            <button type="button" class="contact2-form-btn" disabled>
                                <i class="fa fa-spinner fa-spin"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
    name: "App",
    data() {
        return {
            sending: false,
            errors: {},
            form: {
                emails: [''],
                subject: "",
                message: "",
            }
        }
    },

    methods: {
        validForm() {
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            this.errors = {}
            if (this.form.subject == "")
                this.errors['subject'] = "Subject Field is required";
            if (this.form.message == "")
                this.errors['message'] = "Messaege Field is required";
            for (let i = 0; i < this.form.emails.length; i++) {

                if (this.form.emails[i] == "" || !re.test(this.form.emails[i])) {
                    this.errors["emails-" + i] = "Please Enter Valid Email"
                }
            }
            return Object.keys(this.errors).length == 0
        },
        handleSubmit() {
            this.sending = true
            if (this.validForm()) {
                axios.post('/boradcasting/send', this.form).then(res => {
                    Swal.fire("Successful", res.data.message, 'success')
                    // this.resetForm()
                }).catch(error => {
                    Swal.fire("Error", error.response.data.error, 'error')
                    // this.resetForm()
                })
            }
        },
        resetForm() {
            this.sending = false
            this.errors = {}
            this.form = {
                emails: [''],
                subject: "",
                message: "",
            }
        },
        addNewRecipients() {
            this.form.emails.push('')
            delete this.errors["emails-" + this.form.emails.length-1]
        },
        removeRecipient(index) {
            this.form.emails.splice(index, 1)
        }
    }
}
</script>

<style scoped>
.btn-remove {
    float: right;
    background: red;
    color: #fff;
    padding: 5px;
    margin: 6px;
    border: 1px solid red;
    border-radius: 6px;
    top: 0;
    position: absolute;
    right: 0%;
}

.error-message {
    color: red;
    position: absolute;
}

</style>
