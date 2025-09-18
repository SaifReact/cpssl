   <?php include_once __DIR__ . '/includes/open.php'; ?>
   <!-- Hero Start -->
   <div class="container-fluid pb-3 hero-header bg-light">
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-12 col-md-12 col-lg-12 col-xl-12">
           <div class="glass-card-header">
             <h5 class="text-center fw-bold" style="color:#045D5D; letter-spacing:1px; text-shadow:1px 2px 8px #fff8; font-size:1.5rem; font-family:'Poppins',sans-serif;">Member Registration Form ( সদস্য নিবন্ধন ফর্ম )</h5> 
           </div>
           <form method="post" action="process/member_register_process.php" enctype="multipart/form-data">
             <div id="formErrorMsg" class="alert alert-danger" style="display:none;"></div>
             <div class="mb-4">
               <div class="glass-card mb-2">
                 <div class="row">
                   <div class="col-md-4">
                     <div class="mb-2">
                       <label for="nid" class="form-label">জাতীয় পরিচয়পত্র/জন্ম নিবন্ধন নম্বর: <span class="text-secondary small">(NID/BRN Number)</span>
                       </label>
                       <input type="text" class="form-control" id="nid" name="nid" required oninput="validateNID()" onfocus="clearNIDError()" maxlength="19" autocomplete="off">
                       <span id="nidError" class="text-danger small"></span>
                     </div>
                     <div class="mb-2">
                       <label for="name_bn" class="form-label">নাম (বাংলা): <span class="text-secondary small">(Name in Bangla)</span>
                       </label>
                       <input type="text" class="form-control" id="name_bn" name="name_bn" required>
                     </div>
                     <div class="mb-2">
                       <label for="father_name" class="form-label">পিতার নাম: <span class="text-secondary small">(Father's Name)</span>
                       </label>
                       <input type="text" class="form-control" id="father_name" name="father_name" required>
                     </div>
                     <div class="mb-2">
                       <label for="religion" class="form-label">ধর্ম: <span class="text-secondary small">(Religion)</span>
                       </label>
                       <select class="form-select" id="religion" name="religion" required>
                         <option value="">নির্বাচন করুন (Select)</option>
                         <option value="ইসলাম">ইসলাম (Islam)</option>
                         <option value="হিন্দু">হিন্দু (Hindu)</option>
                         <option value="খ্রিস্টান">খ্রিস্টান (Christan)</option>
                         <option value="বৌদ্ধ">বৌদ্ধ (Buddist)</option>
                       </select>
                     </div>
                     <div class="mb-2" id="spouse_name_group" style="display:none;">
                       <label for="spouse_name" class="form-label">স্বামী/স্ত্রীর নাম: <span class="text-secondary small">(Spouse Name)</span>
                       </label>
                       <input type="text" class="form-control" id="spouse_name" name="spouse_name">
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="mb-2">
                       <label for="dob" class="form-label">জন্ম তারিখ: <span class="text-secondary small">(Date of Birth)</span>
                       </label>
                       <input type="date" class="form-control" id="dob" name="dob" required>
                       <span id="dobError" class="text-danger small"></span>
                     </div>
                     <div class="mb-2">
                       <label for="name_en" class="form-label">নাম (ইংরেজি): <span class="text-secondary small">(Name in English)</span>
                       </label>
                       <input type="text" class="form-control" id="name_en" name="name_en" required oninput="validateNameEn()" onfocus="clearNameEnError()" autocomplete="off">
                       <span id="nameEnError" class="text-danger small"></span>
                     </div>
                     <div class="mb-2">
                       <label for="mother_name" class="form-label">মাতার নাম: <span class="text-secondary small">(Mother's Name)</span>
                       </label>
                       <input type="text" class="form-control" id="mother_name" name="mother_name" required>
                     </div>
                     <div class="mb-2">
                       <label for="gender" class="form-label">লিঙ্গ: <span class="text-secondary small">(Gender)</span>
                       </label>
                       <select class="form-select" id="gender" name="gender" required>
                         <option value="">নির্বাচন করুন (Select)</option>
                         <option value="Male">পুরুষ (Male)</option>
                         <option value="Female">মহিলা (Female)</option>
                         <option value="Other">অন্যান্য (Other)</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="mb-2">
                       <label for="mobile" class="form-label">মোবাইল নম্বর: <span class="text-secondary small">(Mobile Number)</span>
                       </label>
                       <input type="text" class="form-control" id="mobile" name="mobile" required oninput="validateMobile()" onfocus="clearMobileError()" maxlength="11" autocomplete="off">
                       <span id="mobileError" class="text-danger small"></span>
                     </div>
                     <div class="mb-2">
                       <label for="education" class="form-label">শিক্ষাগত যোগ্যতা: <span class="text-secondary small">(Educational Qualification)</span>
                       </label>
                       <select class="form-select" id="education" name="education" required>
                         <option value="">নির্বাচন করুন (Select)</option>
                         <option value="স্নাতক/সমমান">স্নাতক/সমমান (Hon's)</option>
                         <option value="স্নাতকোত্তর/সমমান">স্নাতকোত্তর/সমমান (Masters)</option>
                         <option value="অন্যান্য">অন্যান্য (Other)</option>
                       </select>
                     </div>
                     <div class="mb-2">
                       <label for="share" class="form-label">শেয়ার সংখ্যা: <span class="text-secondary small">(No of Share )</span>
                       </label>
                       <input type="text" class="form-control" id="share" name="share" required>
                     </div>
                     <div class="mb-2">
                       <label for="marital_status" class="form-label">বৈবাহিক অবস্থা: <span class="text-secondary small">(Marital Status)</span>
                       </label>
                       <select class="form-select" id="marital_status" name="marital_status" required>
                         <option value="">নির্বাচন করুন (Select)</option>
                         <option value="Single">অবিবাহিত (Unmarried)</option>
                         <option value="Married">বিবাহিত (Married)</option>
                         <option value="Divorced">তালাকপ্রাপ্ত (Divorced)</option>
                         <option value="Widowed">বিধবা/বিপত্নীক (Widowed)</option>
                       </select>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="section-card">
                 <h5>Professional Info (পেশার তথ্য)</h5>
                 <hr />
                 <div class="row">
                   <div class="col-md-6">
                     <div class="mb-2">
                       <label for="office_name" class="form-label">অফিসের নাম: <span class="text-secondary small">(Office Name)</span>
                       </label>
                       <input type="text" class="form-control" id="office_name" name="office_name">
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="mb-2">
                       <label for="position" class="form-label">পজিশন: <span class="text-secondary small">(Position)</span>
                       </label>
                       <input type="text" class="form-control" id="position" name="position">
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="mb-2">
                       <label for="office_address" class="form-label">অফিসের ঠিকানা: <span class="text-secondary small">(Office Address)</span>
                       </label>
                       <input type="text" class="form-control" id="office_address" name="office_address">
                     </div>
                   </div>
                 </div>
               </div>
               <!-- Nominee Information Section -->
               <div class="section-card">
                 <h5>Nominee Info (নমীনির তথ্য)</h5>
                 <hr />
                 <div id="nomineeSection">
                   <!-- Nominee cards will be appended here -->
                 </div>
                 <div class="d-flex justify-content-end mt-2">
                   <button type="button" class="btn btn-success btn-sm" id="addNomineeBtn">
                     <b>+</b> Add Nominee </button>
                 </div>
               </div>
               <div class="section-card">
                 <h5>User Profile (ইউজার প্রোফাইল)</h5>
                 <hr />
                 <div class="row">
                   <div class="col-md-4 mb-3">
                     <label for="username" class="form-label">Username <span class="text-secondary small">(ইউজারনেম)</span>
                     </label>
                     <input type="text" class="form-control" id="username" name="username" required>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="password" class="form-label">Password <span class="text-secondary small">(পাসওয়ার্ড)</span>
                     </label>
                     <!-- Password Field (with eye icon) -->
                     <div class="input-group">
                       <input type="password" class="form-control" id="password" name="password" required>
                       <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('password', this)" tabindex="-1">
                         <i class="fa fa-eye"></i>
                       </button>
                     </div>
                   </div>
                   <div class="col-md-4 mb-3">
                     <label for="retype_password" class="form-label">Retype Password <span class="text-secondary small">(পুনরায় পাসওয়ার্ড)</span>
                     </label>
                     <!-- Retype Password Field (rounded, with checkmark only) -->
                     <div class="position-relative">
                       <input type="password" class="form-control" id="retype_password" name="retype_password" required oninput="checkPasswordMatch()" onfocus="clearPasswordMatchError()">
                       <span id="retypePasswordSuccess" style="display:none; color:green; position:absolute; right:15px; top:50%; transform:translateY(-50%); font-size:1.3em;"> &#10004; </span>
                     </div>
                     <span id="retypePasswordError" class="text-danger small"></span>
                   </div>
                 </div>
               </div>
               <div class="d-grid gap-2 mt-2">
                 <button type="submit" class="btn btn-lg btn-success rounded-pill shadow-sm" style="font-size:1.2rem;letter-spacing:1px;">Submit Application (আবেদনটি জমা দিন)</button>
               </div>
             </div>
         </div>
         </form>
       </div>
     </div>
   </div>
   </div>
   <!-- Hero End --> <?php include_once __DIR__ . '/includes/end.php'; ?>