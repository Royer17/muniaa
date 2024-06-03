

<footer class="flex flex-col">
  <div class="flex flex-col md:flex-row w-full">
    <div
      class="flex sm:flex-wrap items-center justify-center bg-[#E7E7E7] w-full md:w-4/12 gap-5 sm:gap-20 md:gap-10 lg:gap-5 px-10 md:px-8 lg:px-4 py-2 mb-1 md:mb-0"
    >
      <img
        class="w-36 md:w-40 2xl:w-56"
        src="{{ asset('img/logo.png') }}"
        alt="Logo Municipalidad Alto de la Alianza"
      />
      <img
        class="w-36 md:w-40 2xl:w-56"
        src="{{ asset('img/logo4.png') }}"
        
        alt="Logo Slogan Municipalidad Alto de la Alianza"
      />
    </div>
    <div
      class="flex flex-col md:flex-row gap-2 md:gap-8 flex-1 bg-green-light text-white p-8 md:px-16 md:py-10 text-xs md:text-base"
    >
      <div>
        <p>
          Derechos Reservados Municipalidad Distrital Alto de la Alianza
        </p>
        <p>Dirección: {{ $setting->address }}</p>
      </div>

      <div>
        <p>Email: {{ $setting->email }}</p>
        <p>Central Telefonica: {{ $setting->phone }}</p>
      </div>
    </div>
  </div>

  <div
    class="bg-dark-blue text-white text-[0.5rem] md:text-base text-center py-0.5"
  >
    <p class="uppercase">
      Funcionario responsable: Sub gerencia de Tecnologías de la Información
      y Comunicación
    </p>
  </div>
</footer>

<div id="news-popup" class="popup-gallery hidden">
  <a
    href="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_b.jpg"
    title="The Cleaner"
    ><img
      src="http://farm9.staticflickr.com/8242/8558295633_f34a55c1c6_s.jpg"
      width="75"
      height="75"
  /></a>
<!--   <a
    href="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_b.jpg"
    title="Winter Dance"
    ><img
      src="http://farm9.staticflickr.com/8382/8558295631_0f56c1284f_s.jpg"
      width="75"
      height="75"
  /></a>
  <a
    href="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_b.jpg"
    title="The Uninvited Guest"
    ><img
      src="http://farm9.staticflickr.com/8225/8558295635_b1c5ce2794_s.jpg"
      width="75"
      height="75"
  /></a>
  <a
    href="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_b.jpg"
    title="Oh no, not again!"
    ><img
      src="http://farm9.staticflickr.com/8383/8563475581_df05e9906d_s.jpg"
      width="75"
      height="75"
  /></a>
  <a
    href="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_b.jpg"
    title="Swan Lake"
    ><img
      src="http://farm9.staticflickr.com/8235/8559402846_8b7f82e05d_s.jpg"
      width="75"
      height="75"
  /></a>
  <a
    href="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_b.jpg"
    title="The Shake"
    ><img
      src="http://farm9.staticflickr.com/8235/8558295467_e89e95e05a_s.jpg"
      width="75"
      height="75"
  /></a>
  <a
    href="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_b.jpg"
    title="Who's that, mommy?"
    ><img
      src="http://farm9.staticflickr.com/8378/8559402848_9fcd90d20b_s.jpg"
      width="75"
      height="75"
  /></a> -->
</div>
<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"
></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="./js/slides/homepage.min.js"></script>
<script src="./js/main.min.js"></script>
</body>
</html>