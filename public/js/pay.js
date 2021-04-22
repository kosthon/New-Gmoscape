const actualLocation = location.href;
const menuSidebar = document.querySelectorAll('.card-patio__a');
const menuLength = menuSidebar.length;
for (let i = 0; i < menuLength; i++) {
	if (menuSidebar[i].href === actualLocation) {
		menuSidebar[i].className = 'active';
	}
}

const bannerContainer = document.querySelector('.float-container');
const bannerClose = document.querySelector('.float-container__close');
bannerClose.addEventListener('click', () => {
	bannerContainer.classList.remove('active');
	localStorage.setItem('bannerContainerDisplayed', 'true');
});

setTimeout(() => {
	/*if (!localStorage.getItem('bannerContainerDisplayed')) {
	}*/
	bannerContainer.classList.add('active');
}, 2000);
