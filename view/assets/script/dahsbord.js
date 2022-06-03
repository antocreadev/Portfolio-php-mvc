const conteneur_mail = document.querySelector('#conteneur_mail');

const afficher_message = document.querySelector('#afficher_message');
conteneur_mail.style.display = 'none';
window.addEventListener('load', () => {
	afficher_message.addEventListener('click', (e) => {
		if (conteneur_mail.style.display === 'none') {
			conteneur_mail.style.display = 'flex';

			afficher_message.innerText = 'Cacher les messages';
		} else {
			conteneur_mail.style.display = 'none';
			afficher_message.innerText = 'Afficher les messages';
			console.log(btn_affiche.textContent);
		}
	});
});

//------------------

const conteneur_home = document.querySelector('#conteneur-home');

const afficher_modif_home = document.querySelector('#afficher-modif-home');
conteneur_home.style.display = 'none';
window.addEventListener('load', () => {
	afficher_modif_home.addEventListener('click', (e) => {
		if (conteneur_home.style.display === 'none') {
			conteneur_home.style.display = 'flex';

			afficher_modif_home.innerText = 'Cacher modif home';
		} else {
			conteneur_home.style.display = 'none';
			afficher_modif_home.innerText = 'Afficher modif home';

			console.log(btn_affiche.textContent);
		}
	});
});

//------------------

const conteneur_photo = document.querySelector('#conteneur-photo');

const afficher_modif_photo = document.querySelector('#afficher-modif-photo');
conteneur_photo.style.display = 'none';
window.addEventListener('load', () => {
	afficher_modif_photo.addEventListener('click', (e) => {
		if (conteneur_photo.style.display === 'none') {
			conteneur_photo.style.display = 'flex';

			afficher_modif_photo.innerText = 'Cacher modif photo';
		} else {
			conteneur_photo.style.display = 'none';
			afficher_modif_photo.innerText = 'Afficher modif photo';

			console.log(btn_affiche.textContent);
		}
	});
});
//------------------
const conteneur_ajouter_projet = document.querySelector(
	'#conteneur-ajouter-projet'
);

const afficher_ajouter_projet = document.querySelector(
	'#afficher-ajout-projet'
);
conteneur_ajouter_projet.style.display = 'none';
window.addEventListener('load', () => {
	afficher_ajouter_projet.addEventListener('click', (e) => {
		if (conteneur_ajouter_projet.style.display === 'none') {
			conteneur_ajouter_projet.style.display = 'flex';

			afficher_ajouter_projet.innerText = 'Cacher ajout projet';
		} else {
			conteneur_ajouter_projet.style.display = 'none';
			afficher_ajouter_projet.innerText = 'Afficher ajout projet';

			console.log(btn_affiche.textContent);
		}
	});
});
//------------------
const conteneur_modifier_projet = document.querySelector(
	'#conteneur-mdofier-projet'
);

const afficher_modifier_projet = document.querySelector(
	'#afficher-modif-projet'
);
conteneur_modifier_projet.style.display = 'none';
window.addEventListener('load', () => {
	afficher_modifier_projet.addEventListener('click', (e) => {
		if (conteneur_modifier_projet.style.display === 'none') {
			conteneur_modifier_projet.style.display = 'flex';

			afficher_modifier_projet.innerText = 'Cacher modifier projet';
		} else {
			conteneur_modifier_projet.style.display = 'none';
			afficher_modifier_projet.innerText = 'Afficher modifier projet';

			console.log(btn_affiche.textContent);
		}
	});
});
//------------------
const conteneur_supprimer_projet = document.querySelector(
	'#conteneur-supprimer-projet'
);
const afficher_supprimer_projet = document.querySelector(
	'#afficher-supprimer-projet'
);
conteneur_supprimer_projet.style.display = 'none';
window.addEventListener('load', () => {
	afficher_supprimer_projet.addEventListener('click', (e) => {
		if (conteneur_supprimer_projet.style.display === 'none') {
			conteneur_supprimer_projet.style.display = 'flex';

			afficher_supprimer_projet.innerText = 'Cacher supprimer projet';
		} else {
			conteneur_supprimer_projet.style.display = 'none';
			afficher_supprimer_projet.innerText = 'Afficher supprimer projet';

			console.log(btn_affiche.textContent);
		}
	});
});
