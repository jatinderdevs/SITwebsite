<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php require_once __DIR__ . '/config.php'; ?>

    <title>Our Agents | Authorised Education Agents | State Institute of Training</title>
    <meta name="description"
        content="Find authorised education agents for State Institute of Training. Contact a local agent for course advice, applications and enrolment support across Melbourne, Pakenham and Brisbane." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?= BASE_URL ?>/our-agents" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="State Institute of Training" />
    <meta property="og:title" content="Our Agents | Authorised Education Agents | State Institute of Training" />
    <meta property="og:description"
        content="Find authorised education agents for course advice, applications and enrolment support at State Institute of Training." />
    <meta property="og:url" content="<?= BASE_URL ?>/our-agents" />
    <meta property="og:image" content="<?= BASE_URL ?>/img/logo.png" />
    <meta property="og:locale" content="en_AU" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Our Agents | Authorised Education Agents | State Institute of Training" />
    <meta name="twitter:description"
        content="Find authorised education agents for course advice, applications and enrolment support." />
    <meta name="twitter:image" content="<?= BASE_URL ?>/img/logo.png" />

    <?php include_once('./includes/stylefiles.php') ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/our-agents.css" />
</head>

<body>
    <main>
        <?php include_once('./includes/header.php') ?>

        <!-- ===================== PAGE HEADER ===================== -->
        <section class="page-header">
            <div class="page-hero-bg">
                <img src="https://images.pexels.com/photos/783681/pexels-photo-783681.jpeg?_gl=1*vkxn7p*_ga*NTcwNjI5OTg5LjE3OTMxNDQyOTI.*_ga_8JE65Q40S6*czE3OTMxNDg4ODMkbzIkZzEkdDE3OTMxNDkwMjQkajU5JGwwJGgw"
                    alt="Authorised education agents for State Institute of Training" />
            </div>
            <div class="page-header-inner">
                <nav class="crumb" aria-label="Breadcrumb">
                    <a href="<?= BASE_URL ?>/">Home</a>
                    <span class="sep">/</span>
                    <span class="crumbactive">Our Agents</span>
                </nav>
                <span class="sit-c-eyebrow">Education agents</span>
                <h1>Our authorised agents</h1>
                <p>
                    Work with a trusted education agent for course advice, applications and enrolment support.
                    Prefer to apply yourself? Contact us directly.
                </p>
            </div>
        </section>

        <!-- ===================== QUICK STRIP ===================== -->
        <section class="oa-quick">
            <div class="container">
                <div class="oa-quick-grid">
                    <a href="#directory" class="oa-q-card">
                        <div class="oa-q-icon"><i class="fa fa-address-book-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Agent directory</strong>
                            <span>Browse authorised agents</span>
                        </div>
                    </a>
                    <a href="<?= BASE_URL ?>/agent-zone" class="oa-q-card">
                        <div class="oa-q-icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Become an agent</strong>
                            <span>Partner with SIT</span>
                        </div>
                    </a>
                    <a href="<?= BASE_URL ?>/contact#query" class="oa-q-card">
                        <div class="oa-q-icon"><i class="fa fa-comments-o" aria-hidden="true"></i></div>
                        <div>
                            <strong>Contact us</strong>
                            <span>Apply without an agent</span>
                        </div>
                    </a>
                    <a href="<?= BASE_URL ?>/courses" class="oa-q-card">
                        <div class="oa-q-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                        <div>
                            <strong>Our courses</strong>
                            <span>Building · Engineering · Business</span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- ===================== INTRO ===================== -->
        <section class="oa-section">
            <div class="container">
                <div class="section-head">
                    <span class="section-eyebrow">How it works</span>
                    <h2>Get help from an authorised agent</h2>
                    <p class="section-lead">
                        Education agents can guide you through course choice, applications and visa-related questions.
                        Only agents listed below are authorised to represent State Institute of Training.
                    </p>
                </div>
                <div class="oa-steps">
                    <div class="oa-step">
                        <span class="oa-step-num">01</span>
                        <h3>Find an agent</h3>
                        <p>Search or browse the directory and contact an agent near you or online.</p>
                    </div>
                    <div class="oa-step">
                        <span class="oa-step-num">02</span>
                        <h3>Discuss your goals</h3>
                        <p>Share your study plans so they can recommend the right SIT qualification.</p>
                    </div>
                    <div class="oa-step">
                        <span class="oa-step-num">03</span>
                        <h3>Apply with support</h3>
                        <p>They help with documents and the application — or you can apply via our contact form.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================== DIRECTORY ===================== -->
        <section class="oa-section alt" id="directory">
            <div class="container">
                <div class="section-head oa-dir-head">
                    <div>
                        <span class="section-eyebrow">Directory</span>
                        <h2>Authorised education agents</h2>
                        <p class="section-lead">
                            Search by name. Click phone or email to get in touch.
                        </p>
                    </div>
                    <div class="oa-search-wrap">
                        <label class="sr-only" for="agentSearch">Search agents</label>
                        <div class="oa-search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input type="search" id="agentSearch" placeholder="Search by agent name…"
                                autocomplete="off" />
                        </div>
                        <p class="oa-count" id="agentCount" aria-live="polite"></p>
                    </div>
                </div>

                <?php
                // Load agents from data file (edit data/dbagents.php to update the list)
                $agents = require __DIR__ . '/data/dbagents.php';

                // Sort A–Z
                usort($agents, function ($a, $b) {
                    return strcasecmp($a['name'], $b['name']);
                });

                function oa_tel_href(string $phone): string
                {
                    $digits = preg_replace('/\D+/', '', $phone);
                    if (strlen($digits) === 10 && $digits[0] === '0') {
                        return 'tel:+61' . substr($digits, 1);
                    }
                    if (strlen($digits) === 11 && str_starts_with($digits, '61')) {
                        return 'tel:+' . $digits;
                    }
                    return 'tel:' . preg_replace('/\s+/', '', $phone);
                }
                ?>

                <div class="oa-grid" id="agentGrid">
                    <?php foreach ($agents as $agent) :
                        $name = htmlspecialchars($agent['name']);
                        $phone = htmlspecialchars($agent['phone']);
                        $email = htmlspecialchars($agent['email']);
                        $tel = oa_tel_href($agent['phone']);
                        $search = strtolower($agent['name'] . ' ' . $agent['email']);
                        ?>
                    <article class="oa-card" data-search="<?= htmlspecialchars($search) ?>">
                        <div class="oa-card-top">
                            <div class="oa-avatar" aria-hidden="true">
                                <?= strtoupper(mb_substr($agent['name'], 0, 1)) ?>
                            </div>
                            <h3 class="oa-name"><?= $name ?></h3>
                        </div>
                        <div class="oa-card-actions">
                            <a href="<?= htmlspecialchars($tel) ?>" class="oa-action">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?= $phone ?></span>
                            </a>
                            <a href="mailto:<?= $email ?>" class="oa-action">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span><?= $email ?></span>
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>

                <div class="oa-empty" id="agentEmpty" hidden>
                    <p>No agents match your search. Try a different name or <a
                            href="<?= BASE_URL ?>/contact#query">contact us
                            directly</a>.</p>
                </div>
            </div>
        </section>

        <!-- ===================== CTA ===================== -->
        <section class="oa-section">
            <div class="container">
                <div class="oa-cta">
                    <div class="oa-cta-text">
                        <span class="section-eyebrow">Next steps</span>
                        <h2>Ready to apply or become an agent?</h2>
                        <p>
                            Students can contact us directly. Education agents can apply to partner with SIT
                            through the Agent Zone.
                        </p>
                    </div>
                    <div class="oa-cta-actions">
                        <a href="<?= BASE_URL ?>/contact" class="btn btn_custom btn_custom_blue">Contact us</a>
                        <a href="<?= BASE_URL ?>/agent-zone" class="btn btn_custom btn_custom_highlight">Agent Zone</a>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once('./includes/footer.php') ?>
    </main>

    <?php include_once('./includes/scriptfiles.php') ?>

    <script>
    (function() {
        var input = document.getElementById('agentSearch');
        var grid = document.getElementById('agentGrid');
        var empty = document.getElementById('agentEmpty');
        var countEl = document.getElementById('agentCount');
        if (!input || !grid) return;

        var cards = Array.prototype.slice.call(grid.querySelectorAll('.oa-card'));
        var total = cards.length;

        function update() {
            var q = (input.value || '').trim().toLowerCase();
            var visible = 0;
            cards.forEach(function(card) {
                var hay = card.getAttribute('data-search') || '';
                var show = !q || hay.indexOf(q) !== -1;
                card.style.display = show ? '' : 'none';
                if (show) visible++;
            });
            if (empty) empty.hidden = visible !== 0;
            if (countEl) {
                countEl.textContent = q ?
                    visible + ' of ' + total + ' agents' :
                    total + ' authorised agents';
            }
        }

        input.addEventListener('input', update);
        update();
    })();
    </script>
</body>

</html>