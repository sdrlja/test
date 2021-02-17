class MobileMenu {
    constructor() {
        this.menu = document.querySelector('.mobile__menu');
        this.openButton = document.querySelector('.menu-open')
        this.closeButton = document.querySelector('.menu-close')
        this.body = document.getElementsByTagName('body')[0]
        this.events()
    }

    events() {
        this.closeButton.addEventListener("click", () => this.closeMenu());
        this.openButton.addEventListener("click", () => this.openMenu());
    }

    // methods
    openMenu() {
        this.menu.classList.add('down');
        console.log('Open fired');
        this.openButton.classList.add('hide');
        this.body.classList.add('no-scroll');
    }

    closeMenu() {
        this.menu.classList.remove('down');
        console.log('Close fired');
        setTimeout(() => {
            this.openButton.classList.remove('hide');
        }, 500);
        this.body.classList.remove('no-scroll');
    }


}

export default MobileMenu