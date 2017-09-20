<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-6 form-group">
          <form method="POST" name="mailer" action="send_mail.php">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="message" placeholder="Message" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" id="sendform" type="submit" onsubmt="sendmail();">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
