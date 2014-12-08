<div class="row">
    <div class="col-lg-8">
        <h2>Well hello....</h2>
        <p>If you have any questions about any of our products or services, just fill out the form and send it over.
        </p>
    </div>
    <div class="col-lg-4">
        <form role="form" action="https://webapp4.asu.edu/pubtools/Mail">
            <input name="sendto" type="hidden" value="dejanzelic@gmail.com" />
            <input name="subject" type="hidden" value="Contact Us Conceptual">
            <input name="location" type="hidden" value="http://cis425.wpcarey.asu.edu/dzelic/Conceptual/index.php/thankyou" />
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autofocus>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" title="Please use only letters or apostrophes" pattern="[A-Za-z-' ]{4,30}">
            </div>
            <div class="form-group" >
                <textarea class="form-control" name="Comments" id="comments" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>