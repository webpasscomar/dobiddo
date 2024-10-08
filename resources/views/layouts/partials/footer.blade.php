<!-- footer -->

<div class="footer" style="background-color: #333">

  <div class="container py-4">

    <div class="row">

      <div class="col-md-2">
        <p class="h6 fw-bold text-white">AFIP</p>

        <p class="text-white">
          <a href="http://qr.afip.gob.ar/?qr=xf92ZTjtbvkQiUcQdW5vdQ,," target="_F960AFIPInfo"><img
              src="{{ asset('img/qr.jpg') }}" border="0" width="90px"></a>
        </p>

      </div>


      <!-- contacto -->
      <div class="col-md-4">
        <p class="h6 fw-bold text-white">Menú principal</p>
        <ul class="text-white">
          <li><a href="" class="link_webpass" target="_blank">Inicio</a></li>
          <li><a href="" class="link_webpass" target="_blank">Nosotros</a></li>
          <li><a href="" class="link_webpass" target="_blank">Que hacemos</a></li>
          <li><a href="" class="link_webpass" target="_blank">Convocatorias</a></li>
        </ul>
      </div>

      <!-- categorias -->
      <div class="col-md-4">
        <p class="h6 fw-bold text-white">Otros</p>
        <ul class="list-unstyled text-white-50 light">
          <li>
            <a href="#" class="text-decoration-none link-light" title="Politicas de privacidad">Politicas de
              privacidad
            </a>
            {{--  {{ route('policies') }} --}}
          </li>

        </ul>
        <p class="h6 fw-bold text-white">Contacto</p>
        <a href="mailto:info@dobiddo.com" class="text-decoration-none link-light" title="Envianos un email">
          info@dobiddo.com </a>
      </div>


      <!-- redes -->
      <div class="col-md-2">
        <p class="h6 fw-bold text-white">Nuestras redes</p>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
            <a href="mailto:info@dobiddo.com" class="text-decoration-none link-light" title="Envianos un email"> <i
                class="fa-solid fa-envelope fs-5"></i> </a>
          </li>
          <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
            <a href="https://www.instagram.com/thebiddoers/" target="_blank" class="text-decoration-none link-light"
              title="Nuestro Instagram"> <i class="fa-brands fa-instagram fs-5"></i> </a>
          </li>
          <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
            <a href="https://www.linkedin.com/company/dobiddo" target="_blank" class="text-decoration-none link-light"
              title="Nuestro LinkedIn"> <i class="fa-brands fa-linkedin fs-5"></i> </a>
          </li>
        </ul>
      </div>

    </div>
  </div>
</div>


<div class="copyrights" style="background-color: #222">
  <div class="container">
    <div class="row pt-4">

      <div class="col-md-6">
        <p class="text-white">Copyrights &copy; {{ date('Y') }} - Todos los derechos reservados.</p>
      </div>

      <div class="col-md-6">
        <p class="text-white text-end"><a href="https://webpass.com.ar" class="link_webpass h6 fw-bold "
            target="_blank">Diseño
            y
            Desarrollo</a> by WebPass</p>
      </div>

    </div>

  </div>
</div>

@stack('js')
<!-- FIN footer -->


<script type="text/javascript" charset="utf-8">
  // tooltip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });

  // menú dropdown hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  $(window).on("load resize", function() {
    if (this.matchMedia("(min-width: 768px)").matches) {
      $dropdown.hover(
        function() {
          const $this = $(this);
          $this.addClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "true");
          $this.find($dropdownMenu).addClass(showClass);
        },
        function() {
          const $this = $(this);
          $this.removeClass(showClass);
          $this.find($dropdownToggle).attr("aria-expanded", "false");
          $this.find($dropdownMenu).removeClass(showClass);
        }
      );
    } else {
      $dropdown.off("mouseenter mouseleave");
    }
  });

  // search animado
  const searchBtn = document.querySelector('#searchBtn');
  const animatedInput = document.querySelector('#animated-input');

  searchBtn.addEventListener('click', openSearch);

  function openSearch(e) {
    animatedInput.focus();
  }
  // Check if there is text in input every 50ms
  setInterval(function() {
    if (animatedInput.value) {
      animatedInput.style.width = '225px';
    }
  }, 50);
</script>


<script>
  function shareOnWhatsApp(url) {
    window.open(`https://api.whatsapp.com/send?text=${encodeURIComponent(url)}`, '_blank');
  }

  function shareByEmail(url) {
    window.location.href =
      `mailto:?subject=Interesante convocatoria&body=Echa un vistazo a esta convocatoria: ${encodeURIComponent(url)}`;
  }

  function shareOnTwitter(url) {
    window.open(
      `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=Echa un vistazo a esta convocatoria`,
      '_blank');
  }

  function shareOnFacebook(url) {
    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
  }

  function copyToClipboard(url) {
    navigator.clipboard.writeText(url).then(() => {
      alert('URL copiada al portapapeles');
    }, () => {
      alert('Error al copiar la URL');
    });
  }
</script>

<script>
  function addToCalendar(title, organization, expiration) {
    const event = {
      title: title,
      start: expiration,
      description: `Organizado por ${organization}`,
      url: window.location.href
    };

    const eventString = encodeURIComponent(
      `BEGIN:VCALENDAR\n` +
      `VERSION:2.0\n` +
      `BEGIN:VEVENT\n` +
      `SUMMARY:${event.title}\n` +
      `DESCRIPTION:${event.description}\n` +
      `DTSTART:${event.start.replace(/-/g, '')}T000000Z\n` +
      `URL:${event.url}\n` +
      `END:VEVENT\n` +
      `END:VCALENDAR`
    );

    const downloadLink = document.createElement('a');
    downloadLink.href = `data:text/calendar;charset=utf-8,${eventString}`;
    downloadLink.download = `${event.title}.ics`;
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
  }
</script>
