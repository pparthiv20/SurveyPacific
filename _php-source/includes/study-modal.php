<?php
/**
 * Study Inquiry Modal
 * Include this file once per page (typically right before </body>).
 * Requires $headerTheme to be set (falls back to 'blue').
 */
$modalTheme = $headerTheme ?? ($pageConfig['theme'] ?? 'blue');
?>

<!-- ==================== START A STUDY MODAL ==================== -->
<div id="studyModal" class="study-modal-overlay" aria-hidden="true" role="dialog" aria-labelledby="studyModalTitle" aria-modal="true">
  <div class="study-modal-backdrop"></div>
  <div class="study-modal-container">
    <div class="study-modal-card" id="studyModalCard">

      <!-- Close button -->
      <button id="studyModalClose" class="study-modal-close" aria-label="Close dialog">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>

      <!-- ===== FORM VIEW ===== -->
      <div id="studyFormView" class="study-modal-view">
        <!-- Header -->
        <div class="study-modal-header">
          <h2 id="studyModalTitle" class="study-modal-title">Start a Study</h2>
          <p class="study-modal-subtitle">Tell us about your research needs and we'll get back to you within 24 hours.</p>
        </div>

        <!-- Form -->
        <form id="studyInquiryForm" class="study-modal-form" novalidate>
          <!-- Name -->
          <div class="study-field">
            <label for="studyName" class="study-label">Full Name</label>
            <input type="text" id="studyName" name="name" class="study-input theme-<?= $modalTheme ?>" placeholder="e.g. Priya Sharma" required autocomplete="name">
            <span class="study-error" id="studyNameError"></span>
          </div>

          <!-- Email -->
          <div class="study-field">
            <label for="studyEmail" class="study-label">Work Email</label>
            <input type="email" id="studyEmail" name="email" class="study-input theme-<?= $modalTheme ?>" placeholder="e.g. priya@company.com" required autocomplete="email">
            <span class="study-error" id="studyEmailError"></span>
          </div>

          <!-- Topic Dropdown -->
          <div class="study-field">
            <label for="studyTopic" class="study-label">Research Topic</label>
            <div class="study-select-wrapper">
              <select id="studyTopic" name="topic" class="study-input study-select theme-<?= $modalTheme ?>" required>
                <option value="" disabled selected>Select a topic</option>
                <option value="market-research">Market Research</option>
                <option value="online-survey">Online Survey</option>
                <option value="face-to-face-survey">Face-to-Face / CAPI Survey</option>
                <option value="telephone-cati">Telephone / CATI Survey</option>
                <option value="depth-interviews">Depth Interviews</option>
                <option value="focus-groups">Focus Groups</option>
                <option value="product-testing">Product Testing</option>
                <option value="mystery-shopping">Mystery Shopping</option>
                <option value="diary-studies">Diary Studies</option>
                <option value="brand-consumer">Brand & Consumer Insights</option>
                <option value="user-research">User Experience Research</option>
                <option value="multi-country">Multi-Country Fieldwork</option>
                <option value="other">Other / Not Sure</option>
              </select>
              <svg class="study-select-chevron" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
            </div>
            <span class="study-error" id="studyTopicError"></span>
          </div>

          <!-- Submit -->
          <button type="submit" id="studySubmitBtn" class="study-submit-btn theme-<?= $modalTheme ?>">
            <span id="studySubmitText">Submit Inquiry</span>
            <svg id="studySubmitSpinner" class="study-spinner hidden" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"/><path d="M12 2a10 10 0 0 1 10 10" stroke-linecap="round"/></svg>
          </button>
        </form>
      </div>

      <!-- ===== SUCCESS VIEW ===== -->
      <div id="studySuccessView" class="study-modal-view study-success-view hidden">
        <div class="study-success-content">
          <!-- Animated checkmark -->
          <div class="study-success-check theme-<?= $modalTheme ?>">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" class="study-check-circle"/>
              <path d="m9 12 2 2 4-4" class="study-check-path"/>
            </svg>
          </div>
          <h3 class="study-success-title">Thank You!</h3>
          <p class="study-success-message">Our team will surely contact you<br>within <strong>24 hours</strong>.</p>
          <p class="study-success-sub">Thank you for your interest in Survey Pacific.</p>
          <button id="studySuccessClose" class="study-success-btn theme-<?= $modalTheme ?>">Done</button>
        </div>
      </div>

    </div>
  </div>
</div>

<style>
/* ===== MODAL OVERLAY ===== */
.study-modal-overlay {
  position: fixed;
  inset: 0;
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s ease, visibility 0.3s ease;
}
.study-modal-overlay.active {
  opacity: 1;
  visibility: visible;
}

.study-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(16, 38, 51, 0.55);
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
}

.study-modal-container {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 480px;
  margin: 16px;
}

/* ===== CARD ===== */
.study-modal-card {
  position: relative;
  background: #ffffff;
  border-radius: 20px;
  box-shadow: 0 32px 80px rgba(16, 38, 51, 0.22), 0 0 0 1px rgba(255,255,255,0.08);
  overflow: hidden;
  transform: translateY(24px) scale(0.97);
  transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}
.study-modal-overlay.active .study-modal-card {
  transform: translateY(0) scale(1);
}

/* ===== CLOSE ===== */
.study-modal-close {
  position: absolute;
  top: 18px;
  right: 18px;
  z-index: 10;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  background: #F4F5F7;
  border-radius: 10px;
  color: #1E354A;
  cursor: pointer;
  transition: background 0.2s, transform 0.2s;
}
.study-modal-close:hover {
  background: #E8EAED;
  transform: scale(1.08);
}

/* ===== VIEWS ===== */
.study-modal-view {
  padding: 40px 36px 36px;
}
.study-modal-view.hidden {
  display: none;
}

/* ===== HEADER ===== */
.study-modal-header {
  text-align: center;
  margin-bottom: 28px;
}

.study-modal-icon {
  width: 56px;
  height: 56px;
  border-radius: 16px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 16px;
}
.study-modal-icon.theme-blue  { background: rgba(29,86,212,0.08); color: #1D56D4; }
.study-modal-icon.theme-green { background: rgba(30,158,107,0.08); color: #1E9E6B; }
.study-modal-icon.theme-gold  { background: rgba(232,184,48,0.10); color: #C99A1E; }

.study-modal-title {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 26px;
  font-weight: 700;
  color: #1E354A;
  margin: 0;
  line-height: 1.2;
}

.study-modal-subtitle {
  font-size: 13.5px;
  color: #6B7A8D;
  margin: 8px 0 0;
  line-height: 1.55;
}

/* ===== FORM ===== */
.study-modal-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.study-field {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.study-label {
  font-size: 12.5px;
  font-weight: 600;
  color: #1E354A;
  letter-spacing: 0.2px;
}

.study-input {
  width: 100%;
  height: 46px;
  padding: 0 16px;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  color: #1E354A;
  background: #F8F9FB;
  border: 1.5px solid #E2E5EA;
  border-radius: 12px;
  outline: none;
  transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
  -webkit-appearance: none;
  appearance: none;
}
.study-input::placeholder { color: #A3ADBA; }
.study-input:hover { background: #F2F4F7; }

.study-input.theme-blue:focus  { border-color: #1D56D4; box-shadow: 0 0 0 3px rgba(29,86,212,0.10); background: #fff; }
.study-input.theme-green:focus { border-color: #1E9E6B; box-shadow: 0 0 0 3px rgba(30,158,107,0.10); background: #fff; }
.study-input.theme-gold:focus  { border-color: #E8B830; box-shadow: 0 0 0 3px rgba(232,184,48,0.10); background: #fff; }

.study-input.field-error { border-color: #E53E3E; box-shadow: 0 0 0 3px rgba(229,62,62,0.08); }

/* Select wrapper */
.study-select-wrapper {
  position: relative;
}
.study-select {
  padding-right: 40px;
  cursor: pointer;
}
.study-select option[value=""][disabled] { color: #A3ADBA; }
.study-select-chevron {
  position: absolute;
  right: 14px;
  top: 50%;
  transform: translateY(-50%);
  color: #6B7A8D;
  pointer-events: none;
}

/* Error messages */
.study-error {
  font-size: 12px;
  color: #E53E3E;
  min-height: 0;
  line-height: 1.3;
  transition: all 0.2s;
}

/* ===== SUBMIT BUTTON ===== */
.study-submit-btn {
  width: 100%;
  height: 48px;
  border: none;
  border-radius: 12px;
  font-family: 'Inter', sans-serif;
  font-size: 14.5px;
  font-weight: 600;
  color: #ffffff;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  margin-top: 6px;
  transition: transform 0.18s, box-shadow 0.18s, opacity 0.18s;
}
.study-submit-btn.theme-blue  { background: linear-gradient(135deg, #1D56D4 0%, #2B6BF0 100%); }
.study-submit-btn.theme-green { background: linear-gradient(135deg, #1E9E6B 0%, #25B87D 100%); }
.study-submit-btn.theme-gold  { background: linear-gradient(135deg, #D4A21E 0%, #E8B830 100%); }

.study-submit-btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(16, 38, 51, 0.18);
}
.study-submit-btn:active {
  transform: translateY(0);
}
.study-submit-btn:disabled {
  opacity: 0.65;
  cursor: not-allowed;
  transform: none;
}

/* Spinner */
.study-spinner {
  animation: studySpin 0.7s linear infinite;
}
.study-spinner.hidden { display: none; }
@keyframes studySpin { to { transform: rotate(360deg); } }

/* ===== SUCCESS VIEW ===== */
.study-success-view {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 380px;
}

.study-success-content {
  text-align: center;
  padding: 20px 0;
}

.study-success-check {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 24px;
  animation: studyCheckPop 0.5s cubic-bezier(0.16, 1, 0.3, 1) 0.15s both;
}
.study-success-check.theme-blue  { background: rgba(29,86,212,0.08); color: #1D56D4; }
.study-success-check.theme-green { background: rgba(30,158,107,0.08); color: #1E9E6B; }
.study-success-check.theme-gold  { background: rgba(232,184,48,0.10); color: #C99A1E; }

@keyframes studyCheckPop {
  0% { transform: scale(0.3); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}

.study-check-circle {
  stroke-dasharray: 63;
  stroke-dashoffset: 63;
  animation: studyCircleDraw 0.6s ease-out 0.3s forwards;
}
@keyframes studyCircleDraw {
  to { stroke-dashoffset: 0; }
}

.study-check-path {
  stroke-dasharray: 20;
  stroke-dashoffset: 20;
  animation: studyTickDraw 0.35s ease-out 0.7s forwards;
}
@keyframes studyTickDraw {
  to { stroke-dashoffset: 0; }
}

.study-success-title {
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 28px;
  font-weight: 700;
  color: #1E354A;
  margin: 0 0 12px;
}

.study-success-message {
  font-size: 15px;
  color: #3D4F5F;
  line-height: 1.6;
  margin: 0 0 8px;
}
.study-success-message strong { color: #1E354A; }

.study-success-sub {
  font-size: 13px;
  color: #8A96A3;
  margin: 0 0 28px;
}

.study-success-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 44px;
  min-width: 140px;
  border: none;
  border-radius: 12px;
  font-family: 'Inter', sans-serif;
  font-size: 14px;
  font-weight: 600;
  color: #ffffff;
  cursor: pointer;
  transition: transform 0.18s, box-shadow 0.18s;
}
.study-success-btn.theme-blue  { background: linear-gradient(135deg, #1D56D4 0%, #2B6BF0 100%); }
.study-success-btn.theme-green { background: linear-gradient(135deg, #1E9E6B 0%, #25B87D 100%); }
.study-success-btn.theme-gold  { background: linear-gradient(135deg, #D4A21E 0%, #E8B830 100%); }
.study-success-btn:hover {
  transform: translateY(-1px);
  box-shadow: 0 6px 20px rgba(16, 38, 51, 0.18);
}

/* ===== RESPONSIVE ===== */
@media (max-width: 520px) {
  .study-modal-container { max-width: 100%; margin: 12px; }
  .study-modal-view { padding: 32px 24px 28px; }
  .study-modal-title { font-size: 22px; }
  .study-success-view { min-height: 320px; }
}
</style>

<script>
(function() {
  'use strict';

  const overlay   = document.getElementById('studyModal');
  const closeBtn  = document.getElementById('studyModalClose');
  const form      = document.getElementById('studyInquiryForm');
  const formView  = document.getElementById('studyFormView');
  const successView = document.getElementById('studySuccessView');
  const successCloseBtn = document.getElementById('studySuccessClose');
  const submitBtn = document.getElementById('studySubmitBtn');
  const submitText = document.getElementById('studySubmitText');
  const spinner   = document.getElementById('studySubmitSpinner');

  // Fields
  const nameInput  = document.getElementById('studyName');
  const emailInput = document.getElementById('studyEmail');
  const topicInput = document.getElementById('studyTopic');

  // Error spans
  const nameError  = document.getElementById('studyNameError');
  const emailError = document.getElementById('studyEmailError');
  const topicError = document.getElementById('studyTopicError');
  let focusTimer = null;

  // A page restored from the browser's back/forward cache must never retain
  // an open modal from its previous visit.
  function resetModalState() {
    if (focusTimer) {
      clearTimeout(focusTimer);
      focusTimer = null;
    }
    overlay.classList.remove('active');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  resetModalState();
  window.addEventListener('pagehide', resetModalState);
  window.addEventListener('pageshow', resetModalState);

  // Open modal - attach to all "Start a Study" buttons
  function openModal(e) {
    if (!e || !e.isTrusted || !e.currentTarget.matches('button[data-open-study-modal]')) return;
    e.preventDefault();
    if (overlay.classList.contains('active')) return;
    overlay.classList.add('active');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    // Reset to form view
    formView.classList.remove('hidden');
    successView.classList.add('hidden');
    form.reset();
    clearErrors();
    // Focus first input after animation
    if (focusTimer) clearTimeout(focusTimer);
    focusTimer = setTimeout(function() {
      focusTimer = null;
      if (overlay.classList.contains('active')) nameInput.focus();
    }, 350);
  }

  function closeModal() {
    resetModalState();
  }

  // Reuse the same thank-you view after successful submissions elsewhere.
  window.showStudyThankYou = function() {
    formView.classList.add('hidden');
    successView.classList.remove('hidden');
    overlay.classList.add('active');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  };

  // Bind all triggers
  document.querySelectorAll('button[data-open-study-modal]').forEach(function(btn) {
    btn.addEventListener('click', openModal);
  });

  closeBtn.addEventListener('click', closeModal);
  successCloseBtn.addEventListener('click', closeModal);

  // Close on backdrop click
  overlay.querySelector('.study-modal-backdrop').addEventListener('click', closeModal);

  // Close on Escape
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && overlay.classList.contains('active')) closeModal();
  });

  // Validation helpers
  function validateEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function clearErrors() {
    [nameInput, emailInput, topicInput].forEach(function(el) { el.classList.remove('field-error'); });
    nameError.textContent = '';
    emailError.textContent = '';
    topicError.textContent = '';
  }

  // Clear individual error on input
  nameInput.addEventListener('input', function() { nameInput.classList.remove('field-error'); nameError.textContent = ''; });
  emailInput.addEventListener('input', function() { emailInput.classList.remove('field-error'); emailError.textContent = ''; });
  topicInput.addEventListener('change', function() { topicInput.classList.remove('field-error'); topicError.textContent = ''; });

  // Submit
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    clearErrors();

    let valid = true;
    const name  = nameInput.value.trim();
    const email = emailInput.value.trim();
    const topic = topicInput.value;

    if (!name) {
      nameInput.classList.add('field-error');
      nameError.textContent = 'Please enter your name.';
      valid = false;
    }
    if (!email) {
      emailInput.classList.add('field-error');
      emailError.textContent = 'Please enter your email.';
      valid = false;
    } else if (!validateEmail(email)) {
      emailInput.classList.add('field-error');
      emailError.textContent = 'Please enter a valid email address.';
      valid = false;
    }
    if (!topic) {
      topicInput.classList.add('field-error');
      topicError.textContent = 'Please select a research topic.';
      valid = false;
    }

    if (!valid) return;

    // Simulate submission
    submitBtn.disabled = true;
    submitText.textContent = 'Submitting…';
    spinner.classList.remove('hidden');

    setTimeout(function() {
      // Show success
      formView.classList.add('hidden');
      successView.classList.remove('hidden');
      // Reset button state
      submitBtn.disabled = false;
      submitText.textContent = 'Submit Inquiry';
      spinner.classList.add('hidden');
    }, 1200);
  });
})();
</script>
