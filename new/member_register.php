<!-- Toast Notification -->
<div aria-live="polite" aria-atomic="true" style="position: fixed; top: 1.5rem; right: 1.5rem; z-index: 1080; min-width: 320px;">
  <div id="cornerToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" style="display:none;">
    <div class="d-flex">
      <div class="toast-body" id="cornerToastMsg"></div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close" onclick="hideCornerToast()"></button>
    </div>
  </div>
</div>
<?php
session_start();
if (isset($_SESSION['success_msg'])) {
    echo '<script>window.addEventListener("DOMContentLoaded",function(){showCornerToast("'.addslashes($_SESSION['success_msg']).'","success")});</script>';
    unset($_SESSION['success_msg']);
}
if (isset($_GET['error'])) {
    echo '<script>window.addEventListener("DOMContentLoaded",function(){showCornerToast("'.addslashes($_GET['error']).'","error")});</script>';
}
?>
<script>
// Toast notification logic
function showCornerToast(msg, type) {
  var toast = document.getElementById('cornerToast');
  var toastMsg = document.getElementById('cornerToastMsg');
  toastMsg.textContent = msg;
  if (type === 'success') {
    toast.classList.remove('bg-danger');
    toast.classList.add('bg-success');
  } else {
    toast.classList.remove('bg-success');
    toast.classList.add('bg-danger');
  }
  toast.style.display = 'block';
  setTimeout(hideCornerToast, 4000);
}
function hideCornerToast() {
  var toast = document.getElementById('cornerToast');
  toast.style.display = 'none';
}
</script>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <?php include 'includes/header.php'; ?>
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-xl-10">
                <div class="glass-card p-4 p-md-5">
                    <h5 class="text-center fw-bold mb-4" style="color:#b85c38; letter-spacing:1px; text-shadow:1px 2px 8px #fff8; font-size:1.5rem; font-family:'Poppins',sans-serif;">Member Registration Form ( সদস্য নিবন্ধন ফর্ম )</h5>
                    <hr />
                    <div class="mb-4">
                        <h5 class="fw-bold mb-3" style="color:#b85c38;">Rules and Regulations (নিয়মাবলি ও বিধান)</h5>
                        <ul style="font-size:1.05rem;line-height:1.7;">
                            <li>সমিতির নাম: "কোডার পেশাজীবী সমবায় সমিতি লিমিটেড" (Coder Pesajibi Samabay Samity Ltd.)</li>
                            <li>সমিতির ঠিকানা: সমিতির নিবন্ধিত অফিস হবে []।</li>
                            <li>সমিতির উদ্দেশ্য: সমিতির মূল উদ্দেশ্যসমূহ হলো: (Objective of the Society: The main objectives of the society are:)</li>
                            <li>ক) কোডার এবং আইটি পেশাজীবীদের মধ্যে সহযোগিতা বৃদ্ধি করা। (To promote cooperation among coders and IT professionals.)</li>
                            <li>খ) সদস্যদের আর্থিক, প্রযুক্তিগত ও প্রশিক্ষণ সহায়তা প্রদান। (To provide financial, technical, and training support to members.)</li>
                            <li>গ) যৌথ উদ্যোগ ও ফ্রিল্যান্সিংয়ের মাধ্যমে কর্মসংস্থানের সুযোগ সৃষ্টি। (To create employment opportunities through joint ventures and freelancing.)</li>
                            <li>ঘ) সদস্যদের আর্থসামাজিক উন্নয়ন নিশ্চিত করা। (To ensure the economic and social development of the members.)</li>
                        </ul>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" value="1" id="agreeRules">
                            <label class="form-check-label" for="agreeRules">
                                I have read and agree to the Rules & Regulations. (আমি নিয়মাবলী পড়েছি এবং সম্মত।)
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button id="goToFormBtn" class="btn btn-success btn-lg rounded-pill px-5" style="display:none;letter-spacing:1px;">Proceed to Registration Form (নিবন্ধনটি এগিয়ে যান)</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include 'includes/js.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
