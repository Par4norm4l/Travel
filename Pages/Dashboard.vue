<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class='flex'>
                            <div class="w-1/2">
                                MAP
                            </div>
                            <div class="w-1/2">
                            <h4 class='text-xl'>Countries to Visit </h4>
                                <Select2 v-model="myValue" 
                                :settings="{ 
                                    width: '90%',
                                    ajax:{
                                        url: '/api/countries/list',
                                        dataType: 'json'
                                    }
                                }" 
                                @change="myChangeEvent($event)" 
                                @select="mySelectEvent($event)" 
                                />
                                
                            </div>
                        <a href="/add "
                            class="bg-cyan-300 hover:bg-cyan-200 px-4 py-1 mb-10 mt-6 mr-6 rounded shadow hover:shadow-lg  btn btn-success"
                            >Add</a>
                        </div> 

                        
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Select2 from 'vue3-select2-component';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Select2,
    },
    data() {
        return {
            myValue: '',
            myOptions: ['op1', 'op2', 'op3'] // or [{id: key, text: value}, {id: key, text: value}]
        }
    },
    methods: {
        myChangeEvent(val){
            console.log(val);
        },
        mySelectEvent({id, text}){
            console.log({id, text})
        }
    }
}
</script>


