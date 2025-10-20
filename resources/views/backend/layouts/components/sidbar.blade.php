  <!--navigation-->
  <ul class="metismenu" id="menu">
      <li>
          <a href="{{ route('dashboard.index') }}">
              <div class="parent-icon"><i class='bx bx-home'></i>
              </div>
              <div class="menu-title">Dashboard</div>
          </a>
      </li>

      <li>
          <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="lni lni-circle-plus"></i></div>
              <div class="menu-title">Posts</div>
          </a>
          <ul>
              <li>
                  <a href="{{ route('post.index') }}"><i class="bx bx-right-arrow-alt"></i>All Post</a>
              </li>
              <li>
                  <a href="{{ route('post.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Post</a>
              </li>
              <li>
                  <a href="javascript:;" class="has-arrow">
                      <div class="parent-icon"><i class="bx bx-command"></i></div>
                      <div class="menu-title">Post Future</div>
                  </a>
                  <ul>

                      <li> <a href="{{ route('category.index') }}"><i class="lni lni-checkbox"></i>Category</a>
                      </li>
                      <li> <a href="{{ route('tag.index') }}"><i class="lni lni-tag"></i>Tag</a></li>

                  </ul>
              </li>
          </ul>
      </li>
      <li>
          <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="lni lni-book"></i></div>
              <div class="menu-title">Portfolio</div>
          </a>
          <ul>
              <li>
                  <a href="{{ route('portfolio.index') }}"><i class="bx bx-right-arrow-alt"></i>All Portfolio</a>
              </li>
              <li>
                  <a href="{{ route('portfolio.create') }}"><i class="bx bx-right-arrow-alt"></i>Add Portfolio</a>
              </li>
              <li>
              <li> <a href="{{ route('portfolio-category.index') }}"><i class="lni lni-checkbox"></i>Category</a>
              </li>
      </li>

  </ul>
  </li>
  <li>
      <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="bx bx-spa"></i></div>
          <div class="menu-title">Application</div>
      </a>
      <ul>
          <li>
              <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
          </li>
          <li>
              <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
          </li>
          <li>
              <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
          </li>
      </ul>
  </li>
  </ul>
  <!--end navigation-->
