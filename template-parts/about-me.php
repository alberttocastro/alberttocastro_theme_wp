<div class="fpc-container d-flex align-items-center">
  <div class="container">
    <div class="" scope-page-title>
      <div class="d-flex">
        <div class="flex-grow-1 flex-shrink-1 d-flex align-items-center">
          <div class="line"></div>
        </div>
        <div class="flex-grow-1 text-center title">
          <h3>
            <p>
              Sobre mim
            </p>
          </h3>
        </div>
        <div class="flex-grow-1 flex-shrink-1 d-flex align-items-center">
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="" scope-icon-card>
      <div class="card bg-glass rounded-lg py-2 mb-2">
        <a :href="url" v-if="url">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-grow-0 justify-content-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/web_lover_icon.svg'; ?>" alt=""
                  srcset="" class="mr-2" />
              </div>
              <div class="d-flex flex-grow-1 justify-content-center text-center">
                <p>Web Lover</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="" scope-icon-card>
      <div class="card bg-glass rounded-lg py-2 mb-2">
        <a :href="url" v-if="url">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-grow-0 justify-content-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/dev_backend_icon.svg'; ?>" alt=""
                  srcset="" class="mr-2" />
              </div>
              <div class="d-flex flex-grow-1 justify-content-center text-center">
                <p>Dev Backend</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="" scope-icon-card>
      <div class="card bg-glass rounded-lg py-2 mb-2">
        <a :href="url" v-if="url">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-grow-0 justify-content-center">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/compartilhar_icon.svg'; ?>" alt=""
                  srcset="" class="mr-2" />
              </div>
              <div class="d-flex flex-grow-1 justify-content-center text-center">
                <p>Aprendendo e Compartilhando</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="" scope-icon-card>
      <div class="card bg-glass rounded-lg py-2 mb-2">
        <a :href="url" v-if="url">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div class="d-flex flex-grow-0 justify-content-center">
              </div>
              <div class="d-flex flex-grow-1 justify-content-center text-center">
                <p>Veja meu currículo completo</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>