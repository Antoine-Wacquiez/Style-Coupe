# Style-Coupe

---  Site de réservation chez le coiffeur (hommes et femmes) - Style & Coupe  ---
                         Slogan - Votre beauté


1. Objectif : 
  Développer un site web pour permettre aux clients de réserver un rendez-vous chez le coiffeur (hommes et femmes), en ligne. 
  Le site permettra également de gérer les prestations, les employés, les créneaux disponibles et l’historique des réservations.

2. Utilisateurs du site
  - Client : peut consulter les prestations, réserver un créneau, modifier ou annuler sa réservation.
  - Coiffeur / Employé : voit ses rendez-vous, peut les valider ou les annuler.
  - Administrateur : gère les employés, les prestations, les horaires, et voit toutes les réservations.

3. Fonctionnalités principales
  3.1 Côté client
    - Inscription / Connexion
    - Consultation des prestations (homme, femme)
    - Choix d’une prestation
    - Choix d’un coiffeur (ou coiffeur automatique)
    - Sélection d’une date et heure disponible
    - Réservation
    - Historique de mes rendez-vous
    - Annulation possible jusqu’à une certaine heure avant le rendez-vous
  3.2 Côté admin / personnel
    - Gestion des prestations (CRUD)
    - Gestion des coiffeurs/employés
    - Visualisation des rendez-vous
    - Modification des horaires disponibles par coiffeur
    - Dashboard général

4. Pages à créer
  Publiques :
    - Accueil
    - Page des prestations
    - Page de connexion
    - Page d'inscription
    - Page de contact
    - Mentions légales / CGU
  Privées (Client) :
    - Tableau de bord client
    - Page "Mes rendez-vous"
    - Formulaire de réservation
  Privées (Admin / Coiffeur) :
    - Dashboard admin
    - Liste des rendez-vous (globale et par coiffeur)
    - Gestion des prestations
    - Gestion des coiffeurs
    - Planning des disponibilités

5. Contraintes techniques
  - Framework : Symfony
  - Base de données : MySQL
  - ORM : Doctrine
  - Frontend : Bootstrap + Twig
  - Authentification : Symfony Security (login, password hash)
  - Envoi de mails : confirmation de rendez-vous, rappel avant le rendez-vous

🧩 Analyse des besoins 🧩

Texte d’analyse des besoins :
  Un client peut s’inscrire sur le site avec ses informations personnelles (nom, prénom, genre, email, mot de passe, téléphone). 
  Il peut consulter la liste des prestations proposées (coupe homme, coupe femme, couleur, barbe, etc.), leurs durées et leurs tarifs.
  Lors d'une réservation, un client choisit une prestation, un coiffeur, une date et une heure. Chaque coiffeur a un emploi du temps avec des créneaux disponibles. 
  Une réservation correspond donc à une relation entre un client, un coiffeur, une prestation, une date et une heure.
  Un administrateur peut gérer les prestations (ajouter, modifier, supprimer), les coiffeurs, et leurs horaires de disponibilité. 
  Il peut aussi consulter toutes les réservations passées et à venir.
  Un coiffeur peut se connecter pour voir la liste de ses rendez-vous et leur état (à venir, passé, annulé).
  Une prestation a un intitulé, une durée en minutes, un prix, et peut être destinée aux hommes, aux femmes ou les deux.

