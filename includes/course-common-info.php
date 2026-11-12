<?php
/**
 * Shared “Important Information for Students” section
 * Used on every course page. Keep all common policy text here.
 *
 * Expects $course (optional) from the parent page for small course-specific notes.
 */
$resourcesNote = $course['resources_note'] ?? 'Students require their own laptop. SIT provides PPE for workshop use where applicable.';
$isTradeCourse = in_array($course['category'] ?? '', ['Building & Construction', 'Engineering'], true);
?>

<!-- ===================== IMPORTANT INFORMATION FOR STUDENTS ===================== -->
<section class="course-info-section" id="student-info">
    <div class="container">
        <div class="section-head">
            <span class="section-eyebrow">Policies &amp; Support</span>
            <h2><em> Important </em>Information for Students</h2>
            <p class="section-lead">
                Key details about how we deliver training, support you, and protect your rights as an international
                student.
            </p>
        </div>

        <div class="info-cards-grid">

            <!-- 1. Pre-Training Review & Suitability -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-clipboard" aria-hidden="true"></i>
                </div>
                <h3>Pre-Training Review &amp; Suitability</h3>
                <p>
                    All learners complete an initial skills assessment to confirm the course is suitable
                    and to identify any support needs. A qualified assessor reviews the outcome.
                    <?php if ($isTradeCourse): ?>
                    This is a physically demanding trade — expect power tools, standing, bending and manual handling.
                    Please advise SIT of any disability or physical condition that may affect your ability to complete
                    the qualification.
                    <?php endif; ?>
                </p>
                <a href="<?= BASE_URL ?>/student-support#pre-training" class="info-card-link">Full policy details →</a>
            </article>

            <!-- 2. Delivery, Self-Study & Resources -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                </div>
                <h3>Delivery, Self-Study &amp; Resources</h3>
                <p>
                    Structured training is scheduled for 20 hours per week (classroom + practical workshop where
                    applicable).
                    You will also complete mandatory self-study activities in your own time (videos, research, practical
                    tasks and reflection).
                    <?= htmlspecialchars($resourcesNote) ?>
                </p>
                <a href="<?= BASE_URL ?>/student-support#delivery" class="info-card-link">Full policy details →</a>
            </article>

            <!-- 3. Living Costs & Accommodation -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <h3>Living Costs &amp; Accommodation</h3>
                <p>
                    Course fees do not cover living costs in Australia. The Study in Australia website provides
                    up-to-date guides on accommodation options and average living expenses.
                    Home Affairs also sets financial capacity requirements for student visas.
                </p>
                <div class="info-card-links">
                    <a href="https://www.studyinaustralia.gov.au/english/live-in-australia/living-costs" target="_blank"
                        rel="noopener" class="info-card-link">Study in Australia guide →</a>
                    <a href="https://immi.homeaffairs.gov.au/visas/getting-a-visa/visa-listing/student-500"
                        target="_blank" rel="noopener" class="info-card-link">Home Affairs requirements →</a>
                </div>
            </article>

            <!-- 4. RPL, Credit Transfer & LLN -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-exchange" aria-hidden="true"></i>
                </div>
                <h3>RPL, Credit Transfer &amp; LLN</h3>
                <p>
                    Before enrolment we assess any prior formal, non-formal or informal learning that may attract
                    Credit Transfer or Recognition of Prior Learning (this can shorten your course duration).
                    After enrolment you will complete a Language, Literacy and Numeracy (LLN) assessment
                    so we can provide any extra support you need.
                </p>
                <a href="<?= BASE_URL ?>/student-support#rpl-lln" class="info-card-link">Full policy details →</a>
            </article>

            <!-- 5. USI & Certification -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                </div>
                <h3>USI &amp; Certification</h3>
                <p>
                    You need a Unique Student Identifier (USI) to receive your Qualification or Statement of Attainment.
                    SIT will only issue AQF certification once you have a verified USI and all fees are paid.
                    Certificates are issued within 30 calendar days of successful course completion.
                </p>
                <div class="info-card-links">
                    <a href="https://www.usi.gov.au/" target="_blank" rel="noopener" class="info-card-link">Get or find
                        your USI →</a>
                    <a href="<?= BASE_URL ?>/student-support#certification" class="info-card-link">Issuance policy →</a>
                </div>
            </article>

            <!-- 6. Student Support & Progress -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-life-ring" aria-hidden="true"></i>
                </div>
                <h3>Student Support &amp; Course Progress</h3>
                <p>
                    International students receive an age- and culturally-appropriate Orientation Program at no extra
                    cost.
                    We monitor course progress to help you complete within the expected duration on your CoE
                    and will implement our intervention strategy if needed.
                </p>
                <a href="<?= BASE_URL ?>/student-support" class="info-card-link">Support services →</a>
            </article>

            <!-- 7. Fees Protection, Refunds & TPS -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-shield" aria-hidden="true"></i>
                </div>
                <h3>Fees Protection, Refunds &amp; TPS</h3>
                <p>
                    SIT’s Refund Policy covers terms, conditions and your consumer rights (including a 10-business-day
                    cooling-off period).
                    The Tuition Protection Scheme (TPS) protects fees paid in advance if the provider defaults —
                    you can complete your studies elsewhere or receive a refund of unspent tuition fees.
                </p>
                <div class="info-card-links">
                    <a href="<?= BASE_URL ?>/student-support#refunds" class="info-card-link">Refund policy →</a>
                    <a href="https://tps.gov.au/Home" target="_blank" rel="noopener" class="info-card-link">Tuition
                        Protection Scheme →</a>
                </div>
            </article>

            <!-- 8. Enrolment Changes & Complaints -->
            <article class="info-card">
                <div class="info-card-icon">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                </div>
                <h3>Enrolment Changes &amp; Complaints</h3>
                <p>
                    You may request deferral or suspension on compassionate or compelling grounds.
                    SIT may suspend or cancel enrolment for breach of the Enrolment Agreement or visa conditions
                    (you will receive written notice and 20 working days to access our internal complaints process).
                    You can also escalate to the Overseas Student Ombudsman.
                </p>
                <div class="info-card-links">
                    <a href="<?= BASE_URL ?>/student-support#deferment" class="info-card-link">Deferment &amp;
                        cancellation →</a>
                    <a href="<?= BASE_URL ?>/student-support#complaints" class="info-card-link">Complaints &amp; appeals
                        →</a>
                </div>
            </article>

        </div>
    </div>
</section>