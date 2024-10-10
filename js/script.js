const app = Vue.createApp({
    data() {
        return {
            isLoggedIn: false,
            links: [
                { text: 'Home', href: 'index.php' },
                { text: 'Prodotti', href: '#' },
                { text: 'Servizi', href: '#' },
                { text: 'Contatti', href: '#' },
                { text: 'Carrello', href: '#', icon: 'fa-shopping-cart' }
            ]
        };
    },
    methods: {
        fetchLoginStatus() {
            // Verifico lo stato del login
            fetch('check_login.php')
                .then(response => response.json())
                .then(data => {
                    this.isLoggedIn = data.isLoggedIn;
                    // Aggiungo il link di login o logout in base allo stato
                    const loginLink = this.isLoggedIn
                        ? { text: 'Logout', href: 'logout.php', icon: 'fa-user' }
                        : { text: 'Login', href: 'login.php', icon: 'fa-user' };
                    
                    this.links.push(loginLink);
                });
        }
    },
    mounted() {
        // Controllo lo stato, al montaggio
        this.fetchLoginStatus();
    }
}).mount('#app');