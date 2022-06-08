// ----------
// Declaration variable

const time_animation = 2000; //2000
const cursor = document.querySelector('.cursor');
const anto_rempli = document.querySelector('.anto_rempli');
const body = document.querySelector('body');
const home = document.querySelector('.home');
const nav = document.querySelector('.nav');
const anto_creative_developer = document.querySelector(
	'.anto_creative_developer'
);
const parent_marquee_tab = [
	document.querySelector('.m1'),
	document.querySelector('.m2'),
	document.querySelector('.m3'),
	document.querySelector('.m4'),
	document.querySelector('.m5'),
];
const maindiv = document.querySelector('.maindiv');
const competence = document.querySelector('.competence');
const titre_contact = document.querySelector('.titre-contact');
const home_logo_tab = [
	document.querySelector('#home-logo-a'),
	document.querySelector('#home-logo-n'),
	document.querySelector('#home-logo-t'),
	document.querySelector('#home-logo-o'),
];
const home_paragraphe = document.querySelector('.home-paragraphe');
const navStatic = document.querySelector('.nav-static');
const grid = document.querySelector('.grid');

//---------

// console.log(home_paragraphe.children[1]);
window.setTimeout(() => {
	home_paragraphe.style.opacity = '1';
	navStatic.style.opacity = 1;
}, 5000); //5000

//-----------------

function generateRandom(min = -180, max = 180) {
	// find diff
	let difference = max - min;

	// generate random number
	let rand = Math.random();

	// multiply with difference
	rand = Math.floor(rand * difference);

	// add with min value
	rand = rand + min;

	return rand;
}

const anime_logo = (x) => {
	home_logo_tab[x].addEventListener('mouseover', () => {
		// console.log(generateRandom());
		home_logo_tab[x].style.transform = `rotate(${generateRandom()}deg)`;
		// console.log(home_logo_tab[x].style.transform);
		window.setTimeout(() => {
			home_logo_tab[x].style.transform = 'rotate(0deg)';
		}, 1800); // 1800
	});
};
for (let k = 0; k < 4; k++) {
	anime_logo(k);
}
//---------
//animation creative developer

anime({
	targets: '.anto path',
	strokeDashoffset: [anime.setDashoffset, 0],
	easing: 'easeInOutSine',
	duration: time_animation,
	delay: function (el, i) {
		return i * 0;
	},
	direction: 'normal',
	loop: false,
});

anime({
	targets: '.creative_developer path',
	strokeDashoffset: [anime.setDashoffset, 0],
	easing: 'easeInOutSine',
	duration: time_animation,
	delay: function (el, i) {
		return i * 0;
	},
	direction: 'normal',
	loop: false,
});

//fait aparaître le remplissage
window.setTimeout(() => {
	anto_rempli.style.opacity = '1';
}, time_animation + 400); //400

window.setTimeout(() => {
	anto_creative_developer.style.opacity = '0';
}, time_animation + 1500); //1500

window.setTimeout(() => {
	anto_creative_developer.style.display = 'none';
	home.style.opacity = '1';
	body.style.overflowY = 'scroll';
	cursor.style.opacity = '1';
	body.style.cursor = 'none';
}, time_animation + 2500); //2500

//--------------

//--------------

/* NAV BAR ANIMATION */
let pixel_scroll_last;

window.addEventListener('scroll', (e) => {
	let pixel_scroll = window.scrollY;

	if (pixel_scroll_last < pixel_scroll) {
		nav.style.top = '-10%';
	} else {
		nav.style.top = '0';
	}
	// console.log(`pixel scroll : ${pixel_scroll}`);
	// console.log(`pixel_scroll_last : ${pixel_scroll_last}`);
	pixel_scroll_last = pixel_scroll;

	if (pixel_scroll < 300) {
		nav.style.top = '-10%';
	}
});

//------------------------------------------------------------------------------------------------------------------

const anime_projet = (n) => {
	//1
	parent_marquee_tab[n].addEventListener('mouseleave', () => {
		window.setTimeout(() => {
			parent_marquee_tab[n].children[0].style.display = 'block';
		}, 280);
	});
	parent_marquee_tab[n].addEventListener('mouseenter', () => {
		parent_marquee_tab[n].children[0].style.display = 'none';
		parent_marquee_tab[n].style.height = '0vh';

		if (parent_marquee_tab[n + 1]) {
			parent_marquee_tab[n + 1].style.height = '20vh';
		}
	});

	if (parent_marquee_tab[n + 1]) {
		parent_marquee_tab[n + 1].addEventListener('mouseenter', () => {
			parent_marquee_tab[n].style.height = '20vh';
		});
	}

	maindiv.addEventListener('mouseleave', () => {
		parent_marquee_tab[n].style.height = '20vh';
	});

	if (parent_marquee_tab[n]) {
		competence.addEventListener('mouseenter', () => {
			parent_marquee_tab[n].style.height = '20vh';
		});
	}

	if (parent_marquee_tab[n]) {
		home.addEventListener('mouseenter', () => {
			parent_marquee_tab[n].style.height = '20vh';
		});
	}
};
for (let i = 0; i < 5; i++) {
	anime_projet(i);
}

//----------------

const cursor_move = () => {
	body.addEventListener('mousemove', (e) => {
		cursor.style.top = `${e.clientY}px`;

		cursor.style.left = `${e.clientX}px`;
	});
};

cursor_move();
//_------------/-----------------------------------------------
////----------------------------------------------- 1
const path = anime.path('.mp1 path');

anime({
	targets: '.mp1 .fp1',
	translateX: path('x'),
	translateY: path('y'),
	rotate: path('angle'),
	easing: 'linear',
	duration: 13000,
	loop: true,
});

window.setTimeout(() => {
	anime({
		targets: '.mp1 .fp2',
		translateX: path('x'),
		translateY: path('y'),
		rotate: path('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 3000); //3500

window.setTimeout(() => {
	anime({
		targets: '.mp1 .fp3',
		translateX: path('x'),
		translateY: path('y'),
		rotate: path('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 7000); //3500

////----------------------------------------------- 2
const path2 = anime.path('.mp2 path');

anime({
	targets: '.mp2 .fp1',
	translateX: path2('x'),
	translateY: path2('y'),
	rotate: path2('angle'),
	easing: 'linear',
	duration: 13000,
	loop: true,
});

window.setTimeout(() => {
	anime({
		targets: '.mp2 .fp2',
		translateX: path2('x'),
		translateY: path2('y'),
		rotate: path2('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 3500); //3500

window.setTimeout(() => {
	anime({
		targets: '.mp2 .fp3',
		translateX: path2('x'),
		translateY: path2('y'),
		rotate: path2('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 7000); //3500

//----------------------------------------------- 3
const path3 = anime.path('.mp3 path');

anime({
	targets: '.mp3 .fp1',
	translateX: path3('x'),
	translateY: path3('y'),
	rotate: path3('angle'),
	easing: 'linear',
	duration: 13000,
	loop: true,
});

window.setTimeout(() => {
	anime({
		targets: '.mp3 .fp2',
		translateX: path3('x'),
		translateY: path3('y'),
		rotate: path3('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 3500); //3500

window.setTimeout(() => {
	anime({
		targets: '.mp3 .fp3',
		translateX: path3('x'),
		translateY: path3('y'),
		rotate: path3('angle'),
		easing: 'linear',
		duration: 13000,
		loop: true,
	});
}, 7000); //3500
//------------

const input_submit = document.querySelector("input[type='submit']");
input_submit.addEventListener('submit', (event) => {
	event.preventDefault();
});

//------------
window.addEventListener(
	'beforeunload',
	() => {
		anto_creative_developer.style.display = 'flex';
		window.scrollTo(0, 0);
	},
	false
);

document.addEventListener(
	'beforeunload',
	() => {
		anto_creative_developer.style.display = 'flex';
		document.scrollTo(0, 0);
	},
	false
);
// document.addEventListener(
// 	'load',
// 	() => {
// 		anto_creative_developer.style.display = 'flex';
// 		window.scrollTo(0, 0);
// 	},
// 	false
// );

// le bon :
// window.addEventListener(
// 	'load',
// 	() => {
// 		anto_creative_developer.style.display = 'flex';
// 		window.scrollTo(0, 0);
// 	},
// 	false
// );

//------------
let devFront_projet = [];
let designGraphique_projet = [];
let uiDesign_projet = [];
let animationEtVideo_projet = [];
let devBack_projet = [];
const div1_devFront = document.querySelectorAll('.div1-devFront');
const div2_devFront = document.querySelectorAll('.div2-devFront');

const div1_design_graphique = document.querySelectorAll(
	'.div1-design_graphique'
);
const div2_design_graphique = document.querySelectorAll(
	'.div2-design_graphique'
);

const div1_UIDesign = document.querySelectorAll('.div1-UIDesign');
const div2_UIDesign = document.querySelectorAll('.div2-UIDesign');

const div1_AnimationVideo = document.querySelectorAll('.div1-AnimationVideo');
const div2_AnimationVideo = document.querySelectorAll('.div2-AnimationVideo');

const div1_DevBack = document.querySelectorAll('.div1-DevBack');
const div2_DevBack = document.querySelectorAll('.div2-DevBack');
// console.log('prout' + div1);
// read ../model/read_projet.php with ajax
fetch('model/read_projet.php') // récupérer les donnée dans le fichier read.php
	.then((res) => res.json()) // met les donnée en json
	.then((data) => {
		//rentre dans le json
		data.forEach((element) => {
			if (element.practice == 10) {
				devFront_projet.push(element);
			}
			if (element.practice == 11) {
				designGraphique_projet.push(element);
			}
			if (element.practice == 12) {
				uiDesign_projet.push(element);
			}
			if (element.practice == 13) {
				animationEtVideo_projet.push(element);
			}
			if (element.practice == 14) {
				devBack_projet.push(element);
			}
		});
		console.log(uiDesign_projet);
		//ajouter un élément
		const add_element = (element, parent, textContent) => {
			const new_element = document.createElement(element);
			parent.appendChild(new_element);
			new_element.setAttribute('class', 'parent_projet'); // avec les attributs class="first_name"

			// après x temps
			setTimeout(() => {
				new_element.innerHTML = ` ${textContent}`;
				new_element.style.height = 'fit-content';
			}, 100);
		};
		// supprimer un élément
		const remove_element = (element) => {
			element.remove();
		};

		// ajouter les élément dans le html
		const function_affiche_projet = (tableau) => {
			let devFront_html = ``;
			// console.log(devFront_projet);
			tableau.forEach((element) => {
				devFront_html += `<div class="projet-individuel">`;
				devFront_html += `<div class="parent-img">
				<a  target="_blank" href="${element.link}"><img src="view/assets/img/${element.media}" alt=""></div></a>
				`;
				devFront_html += `<div class="parent-text"><h2>${element.name}</h2><p class="description" >${element.description}</p>
				<p class="info-suplementaire"> <a target="_blank" href="${element.link}"><img src="view/assets/img/play-btn.svg"></a>
				${element.annee} ${element.temps} </p>
	
				
				
				</div>`;
				devFront_html += `</div>`;
			});
			return devFront_html;
		};

		let affiche_dev_front = false;
		const dev_front = document.querySelector('.dev_front');
		console.log(dev_front);
		div1_devFront.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_dev_front == false) {
					add_element(
						'div',
						dev_front,
						function_affiche_projet(devFront_projet)
					);
					affiche_dev_front = true;
				} else {
					remove_element(dev_front.lastElementChild);
					affiche_dev_front = false;
				}
			});
		});
		div2_devFront.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_dev_front == false) {
					add_element(
						'div',
						dev_front,
						function_affiche_projet(devFront_projet)
					);
					affiche_dev_front = true;
				} else {
					remove_element(dev_front.lastElementChild);
					affiche_dev_front = false;
				}
			});
		});

		//------------
		let affiche_design_graphique = false;
		const design_graphique = document.querySelector('.design_graphique');
		console.log(design_graphique);

		div1_design_graphique.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_design_graphique == false) {
					add_element(
						'div',
						design_graphique,
						function_affiche_projet(designGraphique_projet)
					);
					affiche_design_graphique = true;
				} else {
					remove_element(design_graphique.lastElementChild);
					affiche_design_graphique = false;
				}
			});
		});
		div2_design_graphique.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_design_graphique == false) {
					add_element(
						'div',
						design_graphique,
						function_affiche_projet(designGraphique_projet)
					);
					affiche_design_graphique = true;
				} else {
					remove_element(design_graphique.lastElementChild);
					affiche_design_graphique = false;
				}
			});
		});

		//------------------------------------------------------------------
		let affiche_ui_design = false;
		const ui_design = document.querySelector('.ui_design');
		console.log(ui_design);

		div1_UIDesign.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_ui_design == false) {
					add_element(
						'div',
						ui_design,
						function_affiche_projet(uiDesign_projet)
					);
					affiche_ui_design = true;
				} else {
					remove_element(ui_design.lastElementChild);
					affiche_ui_design = false;
				}
			});
		});

		div2_UIDesign.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_ui_design == false) {
					add_element(
						'div',
						ui_design,
						function_affiche_projet(uiDesign_projet)
					);
					affiche_ui_design = true;
				} else {
					remove_element(ui_design.lastElementChild);
					affiche_ui_design = false;
				}
			});
		});

		//------------
		let affiche_AnimationVideo = false;
		const AnimationVideo = document.querySelector('.AnimationVideo');
		console.log(AnimationVideo);

		div1_AnimationVideo.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_AnimationVideo == false) {
					add_element(
						'div',
						AnimationVideo,
						function_affiche_projet(animationEtVideo_projet)
					);
					affiche_AnimationVideo = true;
				} else {
					remove_element(AnimationVideo.lastElementChild);
					affiche_AnimationVideo = false;
				}
			});
		});

		div2_AnimationVideo.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_AnimationVideo == false) {
					add_element(
						'div',
						AnimationVideo,
						function_affiche_projet(animationEtVideo_projet)
					);
					affiche_AnimationVideo = true;
				} else {
					remove_element(AnimationVideo.lastElementChild);
					affiche_AnimationVideo = false;
				}
			});
		});

		//------------
		let affiche_dev_back = false;
		const dev_back = document.querySelector('.dev_back');
		console.log(dev_back);

		div1_DevBack.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_dev_back == false) {
					add_element('div', dev_back, function_affiche_projet(devBack_projet));
					affiche_dev_back = true;
				} else {
					remove_element(dev_back.lastElementChild);
					affiche_dev_back = false;
				}
			});
		});

		div2_DevBack.forEach((element) => {
			element.addEventListener('click', () => {
				if (affiche_dev_back == false) {
					add_element('div', dev_back, function_affiche_projet(devBack_projet));
					affiche_dev_back = true;
				} else {
					remove_element(dev_back.lastElementChild);
					affiche_dev_back = false;
				}
			});
		});
	});

//------------
