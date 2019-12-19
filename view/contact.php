<div class="container mt-4">
<main role="main" class="m-auto p-5 main">

  <section class="project_plan pt-5 border-bottom text-justify">
  <h3 class="text-center pb-4">Have a question?</h3>

  <div class="p-3 m-3">
  <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" name=”contact_form” method="post">
    <div class="form-group">
      <label for="" class="col-form-label">Name</label>
      <div class="">
      <input name="name" type="text" class="form-control" placeholder="Required field" required>
      </div>
    </div>

    <div class="form-group">
      <label for="" class="col-form-label">Email</label>
      <div class="">
      <input name="email" type="text" class="form-control" id="" placeholder="Required field" required>
      </div>
    </div>

    <div class="form-group">
      <label for="" class="col-form-label">Phone number</label>
      <div class="">
      <input name="phone" type="text" class="form-control" id="" placeholder="">
      </div>
    </div>

    <div class="form-group">
    <label for="" class="col-form-label">Message</label>
    <div class="">
    <textarea name="message" class="form-control z-depth-1" rows="7" placeholder=""></textarea>
    </div>
    </div>

    </div>
    <div class="pb-3 mb-3 text-center">
      <button type="submit" class="btn" name="send_mail">Submit</button>
    </div>

</form>
</div>
</section>
</main>
</div>


