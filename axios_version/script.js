// GOAL:

// Basandosi sui dati in allegato, sviluppare front-end e back-end nelle due varianti come visto questa mattina:

// - stampa integrale in PHP attraverso l'include
// - stampa attraverso axios su API in PHP

// Bonus: nella versione a API, aggiungere la possibilita' di filtrare per artista, facendo attenzione a filtrare i dati nella location piu' corretta
// Nota1: utilizzare le sole tecnologie viste questa mattina
// Nota2: per chi avesse fatto esercizio simile in precedenza, e' possibile riciclare il CSS

var app = new Vue({
  el: "#app",
  data: {
    dischi: [],
  },
  methods: {},
  mounted: function () {
    axios.get("data.php").then((risposta) => {
      this.dischi = risposta.data;
      console.log(this.dischi);
    });
  },
});
