<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= BASE_URL; ?>/email/sendMessage" class="d-block" style="width: auto;">
                    <div class="form-group mb-3">
                        <label for="labelname">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="What's Your Name ?">
                    </div>
                    <div class="form-group mb-3">
                        <label for="labelemail">Email Address</label>
                        <input type="text" name="email" class="form-control" id="labelemail" placeholder="Input Your Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Project Detail</label>
                        <textarea class="form-control" name="project_detail" id="exampleFormControlTextarea1" rows="3" placeholder="Tell about your great project"></textarea>
                    </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-modal-cancel" data-bs-dismiss="modal" class="col-lg-6">Cancel</button>
                <button name="button-submit" type="submit" class="btn btn-modal-lets-talk " class="col-lg-6">Send message</button>
            </div>
            </form>
        </div>
    </div>
</div>