<footer>
    <section class="section social-media-banner wf-section">
      <div class="container">
        <div class="grid-card-social">
          <h3 id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120e3-e84120df">Baucampus in den Medien</h3>
          <a id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120e5-e84120df" href="#" class="social-card center w-inline-block"><img src="images/F2x_1F2x.png" id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120e6-e84120df" width="23" alt="">
            <div id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120e7-e84120df">
              <div class="card-name-text social">Baucampus Deutschland</div>
              <p>Unserer Seite beitreten!</p>
            </div>
          </a>
          <a id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120ec-e84120df" href="#" class="social-card w-inline-block"><img src="images/T2x_1T2x.png" width="42" id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120ed-e84120df" alt="">
            <div id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120ee-e84120df">
              <div class="card-name-text social">Baucampus Deutschland</div>
              <p>Folgen SIe uns!</p>
            </div>
          </a>
        </div>
      </div>
    </section>
    <section class="section footer wf-section">
      <div class="container">
        <div class="footer-grid">
          <div id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120f6-e84120df" class="logo-wrapper fo-footer">
            <div class="text-logo-wrapper for-footer"><img src="images/logo.png" loading="lazy" width="50" height="50" srcset="images/logo-p-500.png 500w, images/logo-p-800.png 800w, images/logo-p-1080.png 1080w, images/logo.png 1172w" sizes="50px" alt="">
              <div class="logo-text">Baucampus</div>
              <div class="logo-text subtext">München</div>
            </div>
          </div>
          <p id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e84120fd-e84120df" class="footer-text copyright">© 2023 Baucampus by <a href="https://ariet.is" target="_blank">Arietis </a>- <a href="legal/impressum.html">Impressum</a> - <a href="legal/datenschutz.html">Datenschutz</a>
          </p>
          <div id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e8412105-e84120df">
            <a href="tel:+35391760711" class="list-item-footer w-inline-block">
              <p id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e8412107-e84120df" class="footer-text"><strong>T:</strong></p>
              <p class="footer-text">+49 5722 913800</p>
            </a>
            <a href="#" class="list-item-footer w-inline-block">
              <p id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e841210d-e84120df" class="footer-text"><strong>E:</strong></p>
              <p class="footer-text">info@baucampus.de</p>
            </a>
          </div>
          <div id="w-node-_4aa0d7f3-2a4a-6a6b-69be-35f8e8412105-e84120df">

          @php
                $i=0;
                @endphp        
   
    @foreach($ortat as $orte)
    @if ($i++ < 16)
  <a href="/baugutachter" class="list-item-footer w-inline-block">Baugutachter {{$orte->ort}}</a>
    @else
    @endif
    @endforeach
            
          </div>
        </div>
      </div>
    </section>
  </footer>