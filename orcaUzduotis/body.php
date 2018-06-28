<body>
  <!-- navigacija -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center">programuosiu cia</h2>
    </div>
  </div>
</div>

  <!-- mainas su comment forma -->

<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">cia bus mano comment forma</h2>
      </div>
    </div>
  </div>
  <div class="tarpas">
    <p></p>
  </div>

  <div class="container" id="commentForm">
    <div class="row">
      <div class="col-md-12">
        <hr class="hr-bold">
        <h2 class="bold text-center">Comment form</h2>
        <hr class="hr-bold">
      </div>
    </div>
  </div>


<div class="container container-form">
  <form class="comment-form" action="add_comment.php" method="post">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3">
                <label class="email" for="comment_email">Email*</label>
              </div>
              <div class="col-md-9">
                <input type="email" name="comment_email"  class="form-control inputemail  " id="comment_email" >
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-3">
                <label class="name" for="comment_name">Name*</label>
              </div>
              <div class="col-md-9">
                <input type="text" name="comment-name"  class="form-control inputname " id="comment_name" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2">
              <label class="comment" for="comment_body">Comment*</label>
          </div>

          <div class="col-md-10">
              <textarea type="text" name="comment_body" class="form-control " id="comment_body" placeholder=""></textarea><br />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="btn">
          <button type="submit" class="btn btn-light">Submit</button>
        </div>
      </div>
    </div>
  </div>
  </form>
  <div class="container">
    <div class="row comment-media">
      <div class="col-md-12 media-body">
        <div class="row ">
          <div class="col-md-6">
            <h4 class="media-heading">Vardas</h4>
          </div>
          <div class="col-md-6 reply-link">
            <a class="reply-link" href="#">Reply</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 media-text">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>

        </div>
      </div>
  </div>

  </div>




 </main>

  <!-- mainas su comment forma END -->
