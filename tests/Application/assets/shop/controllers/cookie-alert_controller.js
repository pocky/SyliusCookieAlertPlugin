import { Controller } from 'stimulus';


export default class extends Controller {
  constructor() {
    super();
    // eslint-disable-next-line no-undef
    this.cookieAlert = document.querySelector('.cookiealert');
    // eslint-disable-next-line no-undef
    this.acceptCookies = document.querySelector('.acceptcookies');
  }
  connect() {
    if (!this.getCookie('acceptCookies')) {
      this.cookieAlert.classList.add('show');
    }
  }

  setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    const expires = `expires=${d.toUTCString()}`;
    document.cookie = `${cname}=${cvalue};${expires};path=/`;
  }

  acceptCookie() {
    this.setCookie('acceptCookies', true, 365);
    this.cookieAlert.classList.remove('show');
    alert('cookies accepted');
  }

  getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) === 0) {
        return c.substring(name.length, c.length);
      }
    }
    return '';
  }
}
