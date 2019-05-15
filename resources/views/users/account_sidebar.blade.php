
        <div class="col-lg-4 pb-5">
          <!-- Account Sidebar-->
          <div class="author-card pb-3">
            <div class="author-card-cover" style="background-image: url(images/users/profile_dummy.jpg);">

            </div>
            <div class="author-card-profile">
              <div class="author-card-avatar">
                <img src="/images/users/profile_dummy.jpg" alt="{{ $user->fullName }}"/>
              </div>
              <div class="author-card-details">
                  <h5 class="author-card-name text-lg">{{ $user->fullName }}</h5>
                  <span class="author-card-position">Joined {{ $user->joiningDate }}</span>
              </div>
            </div>
          </div>

          
        <div class="wizard">
            <nav class="list-group list-group-flush">

              <a class="list-group-item" id="section_orders" href="{{ route('dash', ['_section' => 'orders']) }}">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">Orders List</div>
                  </div><span class="badge badge-secondary">6</span>
                </div>
              </a>

              <a class="list-group-item" id="section_mybooks" href="{{ route('dash', ['_section' => 'mybooks']) }}">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-book-open mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">My Books</div>
                  </div><span class="badge badge-secondary">3</span>
                </div>
              </a>

              <a class="list-group-item" id="section_settings" href="{{ route('dash', ['_section' => 'settings']) }}"><i class="fe-icon-user text-muted"></i>Profile Settings</a>

{{--               <a class="list-group-item" id="section_address" href="{{ route('dash', ['_section' => 'address']) }}"><i class="fe-icon-map-pin text-muted"></i>Address</a> --}}
              
              <a class="list-group-item" id="section_wishlist" href="{{ route('dash', ['_section' => 'wishlist']) }}">
                <div class="d-flex justify-content-between align-items-center">
                  <div><i class="fe-icon-heart mr-1 text-muted"></i>
                    <div class="d-inline-block font-weight-medium text-uppercase">My Wishlist</div>
                  </div><span class="badge badge-secondary">3</span>
                </div>
              </a>

              <a class="list-group-item" id="section_reviews" href="{{ route('dash', ['_section' => 'reviews']) }}"><i class="fe-icon-edit-3 text-muted"></i>My Reviews</a>

              <a class="list-group-item" id="section_password" href="{{ route('dash', ['_section' => 'password']) }}"><i class="fe-icon-edit-3 text-muted"></i>Password</a>              

              @role('admin')
                <a class="list-group-item" id="section_gifts" href="{{ route('admins.welcome') }}"><i class="fe-icon-package text-muted"></i>Admin</a>
              @endrole
              
            </nav>
          
        </div>
    </div>

<script>
    const tab = '{!! $section !!}'
    const section = `section_${tab}`;
    
    document.querySelectorAll('div.wizard nav.list-group a').forEach( a => { a.classList.remove('active')});

    document.querySelector(`div.wizard nav.list-group a#${section}`).classList.add('active');

</script>    