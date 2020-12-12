$(document).ready(function() {

    $('.sidenav').sidenav({
        menuWidth: 200,
        daggable: true
    });
    $('.tooltipped').tooltip();
    $('.dropdown-trigger').dropdown({
        constrainWidth: false,
        flotter: true
    });
});