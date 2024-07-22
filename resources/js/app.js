import './bootstrap';

import Swal from 'sweetalert2';
window.Swal = Swal;

// Evitar cierre de dropdown de sectores en formulario de consultores
$(document).ready(function(){
  $('.dropdown-menu').on('click','li.dropdown-item', (e)=>{
    if (e.target.tagName !== 'INPUT'){
      let checkbox = $(this).find(`.item${e.target.value}`);
      checkbox.prop('checked', !checkbox.prop('checked'));
    }
    e.stopPropagation();
  });
});
