<?php /* Template Name: Links */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />

  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <?php wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/index.css') ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div id="app">
    <div id="link-bg" fluid="" class="text-center">
      <img
        src="data:image/png;base64,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"
        class="my-3 round" style="max-width: 40vw;">
      <div class="container">
        <div class="content__default">
          <div class="mb-5">
            <span class="font-weight-bolder text-white" style="font-size:1.7rem;">@alberttocastro</span>
          </div>
          <div>
            <a href="/curriculum/" target="_blank" class="rounded-lg text-decoration-none text-black">
              <div class="card rounded-lg font-weight-bold bg-primary" style="font-size: 1.4rem;">
                <div class="card-body">
                  <div class="card-text d-flex align-items-center justify-content-center text-light">
                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img"
                      aria-label="file earmark text fill" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                      class="bi-file-earmark-text-fill mr-2 b-icon bi">
                      <g>
                        <path
                          d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z">
                        </path>
                      </g>
                    </svg>
                    <p>Meu CV</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="mt-3">
            <a href="https://www.linkedin.com/in/alberttocastro/" target="_blank"
              class="rounded-lg text-decoration-none text-black">
              <div class="card rounded-lg font-weight-bold bg-primary" style="font-size: 1.4rem;">
                <div class="card-body">
                  <div class="card-text d-flex align-items-center justify-content-center text-light"><svg
                      viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="linkedin"
                      xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-linkedin mr-2 b-icon bi">
                      <g>
                        <path
                          d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z">
                        </path>
                      </g>
                    </svg>
                    <p>LinkedIn</p>
                    </d>
                  </div>
                </div>
            </a>
          </div>
          <div class="mt-3"><a href="/blog" target="_blank" class="rounded-lg text-decoration-none text-black">
              <div class="card rounded-lg font-weight-bold bg-primary" style="font-size: 1.4rem;">
                <div class="card-body">
                  <div class="card-text d-flex align-items-center justify-content-center text-light">
                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img"
                      aria-label="file post fill" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                      class="bi-file-post-fill mr-2 b-icon bi">
                      <g>
                        <path
                          d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM4.5 3h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5z">
                        </path>
                      </g>
                    </svg>
                    <p>Blog</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php $posts = wp_get_recent_posts(['numberposts' => 3, 'post_status' => 'publish'], 'array'); ?>
          <?php foreach ($posts as $post) : ?>
          <div class="mt-3">
            <a href="<?php echo get_the_permalink($post) ?>" target="_blank"
              class="rounded-lg text-decoration-none text-black">
              <div class="card rounded-lg font-weight-bold bg-primary" style="font-size: 1.4rem;">
                <div class="card-body">
                  <div class="card-text d-flex align-items-center justify-content-center text-light"><svg
                      viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img"
                      aria-label="file arrow up fill" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                      class="bi-file-arrow-up-fill mr-2 b-icon bi">
                      <g>
                        <path
                          d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM7.5 6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707z">
                        </path>
                      </g>
                    </svg>
                    <p><?php echo get_the_title($post) ?></p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
          <div class="mt-3">
            <a href="https://www.facebook.com/alberttocastro0" target="_blank"
              class="rounded-lg text-decoration-none text-black">
              <div class="card rounded-lg font-weight-bold bg-primary" style="font-size: 1.4rem;">
                <div class="card-body">
                  <div class="card-text d-flex align-items-center justify-content-center text-light">
                    <svg viewBox="0 0 16 16" width="1em" height="1em" focusable="false" role="img" aria-label="facebook"
                      xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi-facebook mr-2 b-icon bi">
                      <g>
                        <path
                          d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                        </path>
                      </g>
                    </svg>
                    <p>Facebook</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>