var models = document.getElementById('models');
models.onchange = checkOtherUnion;
models.onchange();

function checkOtherUnion() {
    var models = this;
    var innymodel = document.getElementById('innymodel');
    if (model.options[model.selectedIndex].value === 'other') {
        innymodel.style.display = '';
    } else {
        innymodel.style.display = 'none';
    }
}


var producent = document.getElementById('producent');
producent.onchange = checkOtherUnions;
producent.onchange();

function checkOtherUnions() {
    var producent = this;
    var innyproducent = document.getElementById('innyproducent');
    if (producent.options[producent.selectedIndex].value === 'other') {
        innyproducent.style.display = '';
    } else {
        innyproducent.style.display = 'none';
    }
}





