<div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
          <h4 style="text-align: center; color: #001122; font-weight: bolder; margin-bottom: 20px"> SUBMIT
            YOUR
            CV/RESUME
            HERE </h4>

          <form action="process.php" id="resumeProcess" method="post" role="form" class="php-email-form"
            enctype="multipart/form-data">


            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 form-group">
                <input type="tel" name="contactNumber" class="form-control" id="contactNumber" placeholder="Contact #"
                  required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>

            <div class="form-group mt-3">
              <input type="text" class="form-control" name="positionApplyingFor" id="positionApplyingFor">
            </div>



            <div class="form-group mt-3">
              <label for="file" style="color: #001122">Attach File:</label>
              <input type="file" class="form-control" name="file" id="file" accept=".pdf, .doc, .docx" required>
            </div>
            <div class="text-center">
              <input type="submit"
                style="background: gold; color: black; border: 1px solid gold; border-radius: 10px; width: 10%; margin-top: 20px;"
                value="Submit">
            </div>

          </form>

        </div>
      </div>
    </div>