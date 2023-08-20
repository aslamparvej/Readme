<?php
include "head.php";
?>

<link rel="stylesheet" href="./css/custom_css_for_user.css">

<?php
include "header.php";
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 contact-form-container">
            <div class="top-of-the-form">
                <h3>Feedback Form</h3>
                <p>We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</p>
            </div>
            <hr />
            <form>
                <div class="input-group flex-column">
                    <label class="input-label">Feedback Type</label>
                    <div class="row mt-2">
                        <div class="col-lg-4 p-0 d-flex align-items-center">
                            <input type="radio" name="feedback-type" id="feedback_type_comments" />
                            <label class="form-label mb-0 feedback-radio-label ps-3" for="feedback_type_comments">Comments</label>
                        </div>
                        <div class="col-lg-4 p-0 d-flex align-items-center">
                            <input type="radio" name="feedback-type" id="feedback_type_suggestions" />
                            <label class="form-label mb-0 feedback-radio-label ps-3" for="feedback_type_suggestions">Suggestions</label>
                        </div>
                        <div class="col-lg-4 p-0 d-flex align-items-center">
                            <input type="radio" name="feedback-type" id="feedback_type_Questions" />
                            <label class="form-label mb-0 feedback-radio-label ps-3" for="feedback_type_Questions">Questions</label>
                        </div>
                    </div>
                </div>
                <div class="input-group flex-column mt-5">
                    <label class="input-label" for="feedback_text_field">Describe Your Feedback:</label>
                    <div class="row mt-2">
                        <div class="col p-0">
                            <textarea class="form-control" rows="5" id="feedback_text_field"></textarea>
                        </div>
                    </div>
                </div>
                <div class="input-group flex-column mt-5">
                    <label class="input-label">Name</label>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-lg-5 p-0">
                            <input type="text" class="form-control" id="first_name" name="name" />
                            <label class="form-label-for-name mt-1" for="first_name">First Name</label>
                        </div>
                        <div class="col-lg-5 p-0">
                            <input type="text" class="form-control" id="last_name" name="name" />
                            <label class="form-label-for-name mt-1" for="last_name">Last Name</label>
                        </div>
                    </div>
                </div>
                <div class="input-group flex-column mt-3">
                    <label class="input-label" for="email">Email</label>
                    <div class="row mt-2 justify-content-between">
                        <div class="col-lg-5 p-0">
                            <input type="email" class="form-control" id="email" name="email" />
                            <label class="form-label-for-name mt-1" for="email">example@example.com</label>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="feedback-btn-container text-center">
                    <button class="submit-feedback-btn" id="submit_feedback_btn">Submit Feedback</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php"
?>