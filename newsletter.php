<section class="newsletter">
    <div class="container">
      <div class="newsletter-wrap">
        <div class="row" style="align-items: flex-start">
          <div class="col-12">
            <div class="newsletter-text text-center mb-4">
              <h3 class="title">
                Subscribe Our <shape class="title-shape-1">Newsletter</shape>
              </h3>
            </div>
          </div>

          <div class="col-12">
            <div id="subscribe_main">
              <form method="POST" action="newslettermail.php" class="form newsletter-form">
                <div class="row">
                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <input type="email" placeholder="Enter Your Email" required class="email-input-field"
                      autocomplete="off" id="email" name="email" />
                  </div>

                  <div class="col-lg-5 col-md-6 col-sm-12">
                    <input type="text" placeholder="Enter Your Company Name" required class="email-input-field"
                      autocomplete="off" id="company" name="company" />
                  </div>

                  <div class="col-lg-2 col-md-12 col-sm-12">
                    <button class="btn form-control" type="submit">
                      Subscribe
                    </button>
                  </div>
                </div>
              </form>
              <p class="newsletter-msg"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>