<script setup>
//import ref
import { ref, onMounted } from "vue";
//import router
import { useRouter, useRoute } from 'vue-router';
//import api
import api from "../../api/index";

//init router
const router = useRouter();
//init route
const route = useRoute();

//define state
const nama = ref("");
const jurusan = ref("");
const angkatan = ref("");
const errors = ref([]);

//onMounted
onMounted(async () => {
    //fetch detail data post by ID
    await api.get(`/api/mahasiswa/${route.params.id}`)
        .then(response => {
            //set response data to state
            nama.value = response.data.data.nama
            jurusan.value = response.data.data.jurusan
            angkatan.value = response.data.data.angkatan
        });
})


//method "updateMahasiswa"
const updateMahasiswa = async () => {

    //init formData
    let formData = new FormData();

    //assign state value to formData
    formData.append("nama", nama.value);
    formData.append("jurusan", jurusan.value);
    formData.append("angkatan", angkatan.value);
    formData.append("_method", "PUT");

    //store data with API
    await api.post(`/api/mahasiswa/${route.params.id}`, formData)
        .then(() => {
            //redirect
            router.push({ path: "/mahasiswa" });
        })
        .catch((error) => {
            //assign response error data to state "errors"
            errors.value = error.response.data;
        });
};
</script>

<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <form @submit.prevent="updateMahasiswa()">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Nama</label>
                                <input type="text" class="form-control" v-model="nama" placeholder="nama Mahasiswa">
                                <div v-if="errors.nama" class="alert alert-danger mt-2">
                                    <span>{{ errors.nama[0] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Jurusan</label>
                                <input type="text" class="form-control" v-model="jurusan" placeholder="jurusan Mahasiswa">
                                <div v-if="errors.jurusan" class="alert alert-danger mt-2">
                                    <span>{{ errors.jurusan[0] }}</span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Angkatan</label>
                                <input type="text" class="form-control" v-model="angkatan" placeholder="angkatan Mahasiswa">
                                <div v-if="errors.angkatan" class="alert alert-danger mt-2">
                                    <span>{{ errors.angkatan[0] }}</span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary rounded-sm shadow border-0">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>