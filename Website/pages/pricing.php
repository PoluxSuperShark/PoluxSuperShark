<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pricing.css">
    <title>Prix et tarification</title>
</head>

<body>
    <nav id="nav">
        <h3>PoluxSuperShark</h3>
        <ul>
            <li>
                <a href="#">Accueil</a>
            </li>
            <li>
                <a href="#">Boutique</a>
            </li>
            <li>
                <a href="<?php echo '../blog/'; ?>">Blog</a>
            </li>
        </ul>
        <div id="icons"></div>
    </nav>
    <main>
        <h1>Les plans Premium de PoluxSuperShark</h1>
        <div class="pricing-table">
            <div class="plan">
                <h2>Plan Basique</h2>
                <p>Pour les haters des pubs</p>
                <p class="price">9,99€/mois</p>
                <a href="#" class="cta-button">Choisir ce plan</a>
                <ul>
                    <li>Grade "V.I.P."</li>
                    <li>2 rangées dans l'Ender Chest</li>
                    <li>Possibilité d'être en créatif</li>
                    <li>Pas de pubs</li>
                </ul>
            </div>
            <div class="plan">
                <h2>Plan Standard</h2>
                <p>Notre offre la plus populaire</p>
                <p class="price">19,99€/mois</p>
                <a href="#" class="cta-button">Choisir ce plan</a>
                <ul>
                    <li>Grade V.I.P. II</li>
                    <li>3 rangées dans l'Ender Chest</li>
                    <li>Victoires fréquentes</li>
                    <li>World Edit autorisé</li>
                </ul>
            </div>
            <div class="plan">
                <h2>Plan addictif</h2>
                <p>Pour les utilisateurs avancés</p>
                <p class="price">29,99€/mois</p>
                <a href="#" class="cta-button">Choisir ce plan</a>
                <ul>
                    <li>4 rangées dans l'Ender Chest</li>
                    <li>Grade Légende</li>
                    <li>Livraisons gratuites</li>
                    <li>Double comptes autorisés</li>
                </ul>
            </div>
            <div class="plan">
                <h2>Plan Maximal</h2>
                <p>Pour les utilisateurs très avancés</p>
                <p class="price">39,99€/mois</p>
                <a href="#" class="cta-button">Choisir ce plan</a>
                <ul>
                    <li>7 rangées dans l'Ender Chest</li>
                    <li>Grade Légende V.I.P.</li>
                    <li>Cheats autorisés</li>
                </ul>
            </div>
        </div>

        <table>
            <caption>Fonctionnalités des plans</caption>
            <thead>
                <tr>
                    <th>Fonctionnalités</th>
                    <th>Plan Basique</th>
                    <th>Plan Standard</th>
                    <th>Plan addictif</th>
                    <th>Plan Maximal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Grade</td>
                    <td>V.I.P.</td>
                    <td>V.I.P. II</td>
                    <td>Légende</td>
                    <td>Légende V.I.P.</td>
                </tr>
                <tr>
                    <td>Rangées dans l'Ender Chest</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Possibilité d'être en créatif</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Pas de pubs</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Victoires fréquentes</td>
                    <td>Non</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>World Edit autorisé</td>
                    <td>Non</td>
                    <td>Oui</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Livraisons gratuites</td>
                    <td>Non</td>
                    <td>Non</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Double comptes autorisés</td>
                    <td>Non</td>
                    <td>Non</td>
                    <td>Oui</td>
                    <td>Oui</td>
                </tr>
                <tr>
                    <td>Cheats autorisés</td>
                    <td>Non</td>
                    <td>Non</td>
                    <td>Non</td>
                    <td>Oui</td>
                </tr>
            </tbody>
        </table>

        <!-- FAQ -->
        <h2>Questions ? Réponses !</h2>
        <div class="faq">
            <div class="question">
                <button class="accordion">Puis-je annuler la commande ?</button>
                <div class="panel">
                    <p>Oui. Vous pouvez annuler ou résillier le plan si celui-ci ne vous plaît pas.</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Puis-je changer de plan ?</button>
                <div class="panel">
                    <p>Non. Vous devez alors résiller votre abonnement puis choisir un autre une fois résillié.</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Je suis banni définitivement du serveur, est-ce que mon plan prend encore effet
                    ?</button>
                <div class="panel">
                    <p>Non. En cas de bannissement définitif, le plan et les grades sont retirés, il n'y a rien à payer en
                        plus.</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Je n'ai pas encore reçu les services alors que j'ai payé, que faire ?</button>
                <div class="panel">
                    <p>Contactez le service Discord sur notre serveur, et ouvrez un ticket dans la section "Support et
                        Aide".</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Est-ce que le plan suppérieur contient les fonctionnalités du précédent</button>
                <div class="panel">
                    <p>Oui, et en plus vous avez également d'autres fonctionnalités supplémentaires</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Faire un don ou payer abonnement Patreon peut-il donner un plan ?</button>
                <div class="panel">
                    <p>Non, un don est un paiement unique. Un abonnement Patreon ou Premium sont deux plans différents.</p>
                    <p>Par contre, vous possédez une réduction de vos achats de 20% en fin de mois et 2% en cas d'escompte
                    </p>
                    <p>seulement en cas d'achats de deux plans différents</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Puis-je payer la livraison gratuitement sur ces plans</button>
                <div class="panel">
                    <p>Oui. Les frais sont franco, il n'y a rien à payer en frais de port car ce sont des services
                        numériques</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Quelle différence entre un plan Premium et un plan Patreon ?</button>
                <div class="panel">
                    <p>Les deux plans sont abonnements différents.</p>
                    <p>Les plans Premium sont pour le serveur et le site</p>
                    <p>Les plans Patreon donnent à des avantages (vidéos Premium, en avant-première, les coulisses...) et a
                        des droits supplémentaires</p>
                </div>
            </div>
            <div class="question">
                <button class="accordion">Quels moyens de paiement sont acceptés ?</button>
                <div class="panel">
                    <p>Les moyens de paiement acceptés sont PayPal, pour des raisons de sécurité</p>
                    <p>et contre les failles dangereuses de sécurité.</p>
                </div>
            </div>
        </div>
        <a href="#" class="terms-link">Consultez les conditions d'utilisation et de vente</a>
    </main>

    <footer>
        © PoluxSuperShark 2023-2024
    </footer>

    <script>
        const links = document.querySelectorAll("nav li");
        icons.addEventListener("click", () => {
            nav.classList.toggle("active");
        });
        links.forEach((link) => {
            link.addEventListener("click", () => {
                nav.classList.remove("active");
            });
        });
    </script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

</body>
</html>