const actualLocation = location.href;
const menuSidebar = document.querySelectorAll('.galleries__item a');
const menuLength = menuSidebar.length;
for (let i = 0; i < menuLength; i++) {
	if (menuSidebar[i].href === actualLocation) {
		menuSidebar[i].className = 'active';
	}
}
