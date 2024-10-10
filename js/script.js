const app = Vue.createApp({
    data() {
        return {
            links: [
                { text: 'Home', href: 'index.php' },
                { text: 'Prodotti', href: '#' },
                { text: 'Servizi', href: '#' },
                { text: 'Contatti', href: '#' },
                { text: 'Carrello', href: '#', icon: 'fa-shopping-cart' },
            ]
        };
    },
}).mount('#app');