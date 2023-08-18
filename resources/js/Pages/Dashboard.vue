

<template>
    <AuthenticatedLayout>
        <div class="flex justify-center items-center h-full">
            <div class="w-full ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 m-5 flex justify-center items-center flex-col sm:flex-row">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <!-- <button @click="openDialog" class="mx-2 px-4 py-2 bg-blue-500 text-white rounded">
                        <i class="material-icons  ">list</i> Mostrar Alumnos
                        </button>
                        <AlumnosDialog v-if="isDialogOpen" @closeDialog="closeDialog" /> -->
                        <input v-model="dni" type="text" class="px-4 py-2 border rounded" placeholder="Ingrese DNI">
                        <select v-model="tipo" class="mx-2  px-4 py-2  border rounded" style="width: 250px;">
                            <option value="certificados">Certificados</option>
                            <option value="cursos">Cursos Actuales</option>
                            <option value="matriculas">Matrículas</option>
                        </select>
                        <button @click="searchData" class="px-4 py-2 bg-blue-500 text-white rounded material-icons">
                            <i v-if="data.length === 0" class="material-icons">Buscar</i>
                                <span v-else>Buscar</span>
                            </button>
                        <button @click="listAlumnos" class="mx-2 px-4 py-2 bg-blue-500 text-white rounded">Listar Alumnos</button>
                    </div>
                </div>
                <div class="bg-white shadow-sm sm:rounded-lg p-6 m-5 flex justify-center items-center flex-col sm:flex-row">
                    <div class="overflow-x-auto"  v-if="data.length > 0">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th v-for="(header, index) in headers" :key="index" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ header }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="(item, rowIndex) in paginatedData" :key="rowIndex">
                                    <td v-for="(header, colIndex) in headers" :key="colIndex" class="px-6 py-4 whitespace-nowrap">
                                        {{ item[header] }}
                                    </td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class="pagination">
                            <button @click="currentPage--" :disabled="currentPage === 1" class="pagination-btn" :class="{ 'disabled': currentPage === 1 }">Antes</button>
                            <span class="pagination-btn mx-2">{{ currentPage }} / {{ itemsPerPage }}</span>
                            <button @click="currentPage++" :disabled="currentPage * itemsPerPage >= data.length" class="pagination-btn" :class="{ 'disabled': currentPage * itemsPerPage >= data.length }">Después</button>
                        </div>
                    </div>
                    <div v-else class="bg-white shadow-sm sm:rounded-lg p-6 m-5">
                    <p class="text-center text-gray-500">{{ error }}</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import '@mdi/font/css/materialdesignicons.css'

import { ref ,computed} from 'vue';

const paginatedData = computed(() => {
  const startIndex = (currentPage.value - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  return data.value.slice(startIndex, endIndex);
});
const error = ref('Presiona buscar para encontrar registros por dni de alumno.');
const dni = ref('98342630');
const tipo = ref('certificados'); // Valor por defecto, puedes cambiarlo según tu necesidad

const data = ref([]);
const headers = ref([]);

const itemsPerPage = 10; // Number of records per page
const currentPage = ref(1);

const listAlumnos = async () => {
  try {
    const response = await fetch(`/dashboard/get-alumnos`);
    if (response.ok) {
      const responseData = await response.json();
      data.value = responseData;
      currentPage.value = 1;

      if (responseData.length > 0) {
        headers.value = Object.keys(responseData[0]);
      }
    }
  } catch (error) {
    console.error('Error fetching data:', error);
  }
};
const searchData = async () => {
  try {
    const response = await fetch(`/dashboard/search?dni=${dni.value}&tipo=${tipo.value}`);
    if (response.ok) {
      const responseData = await response.json();
      data.value = responseData;

      if (responseData.status==404){
        error.value="No hay ningun registro con ese DNI."
      }else if (responseData.length > 0) {
        headers.value = Object.keys(responseData[0]);
      }else{
        error.value="No se encontraron registros."
    }
    }
  } catch (error) {

    console.error('Error fetching data:', error);
  }
};


</script>

<style>
.pagination {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 1rem;
}

.pagination-btn {
  background-color: #3490dc;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: background-color 0.2s;
}

.pagination-btn:hover {
  background-color: #2779bd;
}

.pagination-btn.disabled {
  background-color: #ccc;
  cursor: not-allowed;
}

.pagination-btn.disabled:hover {
  background-color: #ccc; /* Keep the same color even on hover */
}

</style>