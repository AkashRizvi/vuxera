<div class="inquiry-form">

              <h4>Get a Quote</h4>

              <form action="{{ route('contact.send') }}" method="post" class="php-email-form">
              @csrf

                <div class="form-group mb-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>

                <div class="form-group mb-3">
                  <input type="email" name="email" class="form-control" id="email"
                    placeholder="Your Email" required="">
                </div>

                <div class="form-group mb-3">
                  <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone ( Optional )">
                </div>

                <input type="text" name="subject" class="form-control" name="subject" placeholder="What's this about?" required="">

                <div class="form-group mb-4">
                  <textarea class="form-control" name="message" rows="5" placeholder="Tell us about your requirements..." required="">
                  </textarea>
                </div>


                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif

                {{-- <div class="loading">Loading</div>
                <div class="error-message"></div> --}}

                <div class="sent-message">
                  Your message has been sent successfully.
                </div>

                <button type="submit" class="btn-submit w-100">
                  Request Quote
                </button>

              </form>

            </div>
