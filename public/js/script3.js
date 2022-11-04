$('.site-menu-item a').on('click', function () {
  var slug = $(this).attr('data-slug');
  var arrSlug = slug.split('-'); //máximo 3 níveis de menu
  if (arrSlug[2] != undefined) {
      //menu de 3 níveis
      window.localStorage.setItem('menuAtivo', $(this).attr('data-slug'));
  } else if (arrSlug[1] != undefined) {
      //menu de 2 níveis
      window.localStorage.setItem('menuAtivo', $(this).attr('data-slug'));
  } else if (!$(this).parent().hasClass('has-sub')) {
      //menu de 1 nível
      window.localStorage.setItem('menuAtivo', $(this).attr('data-slug'));
  }
  console.log(arrSlug);
});

function ativarMenu() {
  var menuAtivo = window.localStorage.getItem('menuAtivo');
  if (menuAtivo != null) {
      var arrSlug = menuAtivo.split('-');
      if (arrSlug[2] != undefined) {
          //menu de 3 níveis
          $("a[data-slug = '" + menuAtivo + "']").parent().addClass('active');
          $("a[data-slug = '" + arrSlug[0] + '-' + arrSlug[1] + "']").parent().addClass('open');
          $("a[data-slug = '" + arrSlug[0] + "']").parent().addClass('open');
      } else if (arrSlug[1] != undefined) {
          //menu de 2 níveis
          $("a[data-slug = '" + menuAtivo + "']").parent().addClass('active');
          $("a[data-slug = '" + arrSlug[0] + "']").parent().addClass('open');
      } else {
          //1 nivel
          $("a[data-slug = '" + menuAtivo + "']").parent().addClass('active');
      }
      // Remove o item
      //window.localStorage.removeItem('menuAtivo');
  }
}

$('document').ready(function () {
  if(location.pathname === '/' || location.pathname === '/index' ){
      window.localStorage.removeItem('menuAtivo');
  }
  ativarMenu();
});