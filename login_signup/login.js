document.getElementById('initialForm').onsubmit = function(event) {
    event.preventDefault();
    var email = document.getElementById('email').value;
    // Simuler une base de données d'utilisateurs avec un tableau d'e-mails
    var existingUsers = ["Alhamzah@gmail.com", "ross@gmail.com", "Karim@gmail.com", "JP@gmail.com"];

    
    if (existingUsers.indexOf(email) > -1) {
        displayLoginForm(email);
    } else {
        displaySignupForm(email);
    }
};

function displayLoginForm(email) {
    var dynamicForm = document.getElementById('dynamicForm');
    dynamicForm.innerHTML = '<h2>Connexion pour ' + email + '</h2>' +
                            '<form id="loginForm">' +
                            '<input type="password" placeholder="Mot de passe" required>' +
                            '<input type="submit" style="background-color: #2ec94a;" value="Se connecter">' +
                            '</form>';
    document.getElementById('loginForm').onsubmit = function(e) {
        e.preventDefault();
      
        console.log('Utilisateur connecté avec le mot de passe : ' + document.querySelector('#loginForm input[type=password]').value);
        
    };
}

function displaySignupForm(email) {
    var dynamicForm = document.getElementById('dynamicForm');
    dynamicForm.innerHTML = `
        <h1>Devenez membre</h1>
        <p>Nous avons besoin de quelques informations pour finaliser votre inscription.</p>
        <form id="signupForm">
            <div class="form-row">
                <input type="text" id="firstName" placeholder="Prénom" required>
            </div>
            <div class="form-row">
                <input type="text" id="lastName" placeholder="Nom de famille" required>
            </div>
            <div class="form-row">
                <input type="password" id="password" placeholder="Mot de passe" required>
            </div>
            <div class="form-row">
                <select id="shoppingPreference" required>
                    <option value="">Préférence de shopping</option>
                    <option value="homme">Homme</option>
                    <option value="femme">Femme</option>
                    <option value="enfant">Enfant</option>
                </select>
            </div>
            <div class="form-row">
                <input type="date" id="dob" placeholder="Date de naissance" required>
            </div>
            <div class="form-row">
                <label>
                    <input type="checkbox" id="newsletter" name="newsletter">
                    S'inscrire aux e-mails pour recevoir des mises à jour de produits et offres.
                </label>
            </div>
            <div class="form-row">
                <input type="submit" style="background-color: #2ec94a;" value="S'inscrire">
            </div>
        </form>
    `;

    document.getElementById('signupForm').onsubmit = function(e) {
        e.preventDefault();
        var newUser = {
            email: email,
            firstName: document.getElementById('firstName').value,
            lastName: document.getElementById('lastName').value,
            password: document.getElementById('password').value,
            shoppingPreference: document.getElementById('shoppingPreference').value,
            dob: document.getElementById('dob').value,
            newsletter: document.getElementById('newsletter').checked,
        };
        // Ajouter ici la logique pour inscrire l'utilisateur, comme envoyer ces informations à un serveur
        console.log('Nouvel utilisateur inscrit : ', newUser);
        // Rediriger vers la page de bienvenue ou autre
    };
}
