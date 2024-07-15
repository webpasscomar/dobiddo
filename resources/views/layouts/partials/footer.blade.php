    <!-- footer -->
    <div class="bg-dark">
      <div class="container py-4 small">
        <div class="row">


          <!-- contacto -->
          <div class="col-md-4 mb-3">
            <p class="h6 fw-bold text-white">Contacto</p>
            <ul class="list-unstyled light text-light">
              <li>¡Sigue nuestras redes sociales para estar al día con las últimas noticias, lanzamientos y eventos de
                música!</li>
            </ul>
          </div>


          <!-- categorias -->
          <div class="col-md-4 mb-3">
            <p class="h6 fw-bold text-white">Otros</p>
            <ul class="list-unstyled text-white-50 light">
              <li><a href="#" class="text-decoration-none link-light" title="Politicas de privacidad"> Politicas de
                  privacidad
                </a></li>
              {{-- <li><a href="{{ route('servicios') }}" class="text-decoration-none link-light"
                  title="Todos los servicios"> Servicios
                </a></li>
              <li><a href="{{ route('productos') }}" class="text-decoration-none link-light"
                  title="Todos nuestros productos">
                  Productos </a></li>
              <li><a href="{{ route('novedades') }}" class="text-decoration-none link-light"
                  title="Todas la últimas novedades">
                  Novedades </a></li>
              <li><a href="{{ route('contacto') }}" class="text-decoration-none link-light" title="Nuestros contactos">
                  Contacto </a>
              </li> --}}
            </ul>
          </div>


          <!-- data fiscal -->
          {{-- <div class="col-md-3 mb-3">
            <p class="h6 fw-bold text-white">Data fiscal</p>
            <img src="{{ asset('img/datafiscal-qr.png') }}" title="Imagen de data fiscal de la empresa">
          </div> --}}


          <!-- redes -->
          <div class="col-md-4">
            <p class="h6 fw-bold text-white">Nuestras redes</p>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                <a href="/" class="text-decoration-none link-light" title="Mirá nuestro canal de youtube"> <i
                    class="fa-brands fa-youtube"></i> </a>
              </li>
              <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                <a href="/" class="text-decoration-none link-light" title="Nuestro Instagram"> <i
                    class="fa-brands fa-instagram"></i> </a>
              </li>
            </ul>
          </div>

        </div>

        <div class="row">
          <p class="text-white text-right"><a href="https://webpass.com.ar" target="_blank">Diseño y Desarrollo</a>
            by WebPass</p>
        </div>
      </div>
    </div>
    <!-- FIN footer -->


    {{-- <script src="js/jquery.min.js"></script> --}}
    <!-- <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script> -->
    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}

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
