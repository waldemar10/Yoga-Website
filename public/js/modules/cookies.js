/* function setCookie(name) {
    var datum = new Date();
    datum.setTime(datum.getTime() + 24 * 60 * 60 * 1000);
    var expires = datum.toUTCString();
    document.cookie = name + "=" + "; expires=" + expires + ";path=/";
  }
  function getCookie(name) {
    var nameCookie = name + "=";
    var URICookie = decodeURIComponent(document.cookie);
    var getCookieName = URICookie.split(";");
    if (nameCookie == getCookieName) {
      return nameCookie;
    } else {
      return "";
    }
  }
  function deleteCookie(name) {
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
  } */