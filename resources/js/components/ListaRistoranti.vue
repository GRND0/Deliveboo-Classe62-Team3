<template>
  <main>
    <div class="container">
      <JumboTron />
      <CustomSelettore @opzione="categoriaSelezionata($event)" />
      <div v-if="item.length > 0" class="row">
        <SingleRestaurantCard v-for="(item, index) in item" :key="index" :item="item"
          class="col-12 col-md-6 ms-card ms-translate box-shadow" />
      </div>
      <h4 v-else class="text-center mt-5">
        Nessun ristorante corrisponde alle categorie selezionate
      </h4>
    </div>
  </main>
</template>

<script>
import JumboTron from "./JumboTron.vue";
import SingleRestaurantCard from "./SingleRestaurantCard.vue";
import CustomSelettore from "./CustomSelettore.vue";
import axios from "axios";
import { stripVTControlCharacters } from "util";

export default {
  name: "ListaRistoranti",
  components: {
    SingleRestaurantCard,
    CustomSelettore,
    JumboTron,
  },

  data: function () {
    return {
      item: [],
      restaurants: [],
      categoriaRistorante: [],
      categories_id: [],
    };
  },

 
  watch: {
    categoriaRistorante() {
      if (this.categoriaRistorante) {
        this.ristorantiFiltrati
      }
    },
  },

  created() {

    
  },



  methods: {
    // questa funzione serve come toggle per le checkbox
    categoriaSelezionata(categoria) {
      this.categoriaRistorante = categoria; console.log('categoriaRistorante trasmissione', this.categoriaRistorante);
      return this.categoriaRistorante;

    },

  },

  computed: {
    ristorantiFiltrati() {
      axios.get('/api/users/ricerca', {
        params: {
          str: JSON.stringify(this.categoriaRistorante),
        }
      })
        .then(response => {
          this.item = response.data.results
        });
    },
  },
};
</script>

<style lang="scss" scoped>
.ms-card {
  width: 48%;
  margin: 0 1%;
}

</style>