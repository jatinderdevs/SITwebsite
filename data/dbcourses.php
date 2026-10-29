<?php

/**
 * data/courses.php
 * Single source of truth for all courses on the website.
 * Edit here → changes appear everywhere (listing, thumbnails, course pages, footer, etc.)
 */

return [

    // =====================================================
    // BUILDING & CONSTRUCTION
    // =====================================================

    'cpc31020' => [
        'code'               => 'CPC31020',
        'title'              => 'Certificate III in Solid Plastering',
        'cricos'             => '119339G',
        'category'           => 'Building & Construction',
        'duration_weeks'     => 52,
        'duration_text'      => '52 weeks (44 weeks face-to-face training + 8 weeks break)',
        'slug'               => 'certificate-iii-in-solid-plastering',
        'short_desc'         => 'Trade qualification in solid plastering for residential and commercial work.',
        'full_description'   => 'This qualification provides a trade outcome in solid plastering for residential and commercial work. The qualification has core unit of competency requirements that cover common skills for the construction industry, as well as the specialist field of work, solid plastering. Solid plasterers apply plaster, cement and other mixtures to walls to create smooth or decorative finishes to interior walls and to render to exterior walls.

Occupational titles may include:
• Solid Plasterer
• Renderer

Completion of the general construction induction training program, specified in the Safe Work Australia model Code of Practice: Construction Work, is required by anyone carrying out construction work. Achievement of CPCWHS1001 Prepare to work safely in the construction industry meets this requirement.',
        'packaging_rules'    => '20 (15 core, 5 elective)',
        'mode'               => 'Face-to-face + workshop',
        'locations'          => ['Melbourne','Brisbane'],
        'has_work_placement' => false,
        'pathways'           => [
            'CPC40120 Certificate IV in Building and Construction',
            'CPC50220 Diploma of Building and Construction (Building)',
            'Other trade or building-related diplomas and licenses',
        ],
        'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/solid-plastering.jpg',
        'order'              => 1,
    ],

    'cpc31320' => [
        'code'               => 'CPC31320',
        'title'              => 'Certificate III in Wall and Floor Tiling',
        'cricos'             => '119340C',
        'category'           => 'Building & Construction',
        'duration_weeks'     => 52,
        'duration_text'      => '52 weeks (44 weeks face-to-face training + 8 weeks break)',
        'slug'               => 'certificate-iii-in-wall-and-floor-tiling',
        'short_desc'         => 'Trade qualification in wall and floor tiling for residential and commercial construction.',
        'full_description'   => 'This qualification provides a trade outcome in wall and floor tiling for residential and commercial construction work. The qualification has core unit of competency requirements that cover common skills for the construction industry, as well as the specialist field of work, wall and floor tiling.

Tilers work with materials like ceramic, glass, slate, marble and clay. They cut these materials and lay tiles on walls and floors, both interior and exterior. They may also add decorative touches to their basic work.

Occupational titles may include:
• Tiler
• Wall and Floor Tiler

This qualification is suitable for an Australian apprenticeship pathway.

Completion of the general construction induction training program is required. Achievement of CPCCWHS1001 Prepare to work safely in the construction industry meets this requirement.',
        'packaging_rules'    => '20 units of competency: 17 core units + 3 elective units.',
        'mode'               => 'Face-to-face classroom sessions + Practical training and assessment in purpose-built workshops.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [
            'CPC40120 Certificate IV in Building and Construction',
            'CPC50220 Diploma of Building and Construction (Building)',
            'Other trade or building-related diplomas and licenses',
        ],
        'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/tiling.jpg',
        'order'              => 2,
    ],

    'cpc40120' => [
        'code'               => 'CPC40120',
        'title'              => 'Certificate IV in Building and Construction',
        'cricos'             => '119342A',
        'category'           => 'Building & Construction',
        'duration_weeks'     => 40,
        'duration_text'      => '40 weeks (33 weeks face-to-face training + 7 weeks break)',
        'slug'               => 'certificate-iv-in-building-and-construction',
        'short_desc'         => 'For builders, site managers and supervisors of small to medium-sized building businesses.',
        'full_description'   => 'This qualification reflects the role of builders, site managers and managers of small to medium-sized building businesses who apply knowledge of structural principles, codes, standards and legal requirements to Class 1 and 10, to a maximum of two storeys and Class 2 to 9 Type C constructions, and who plan and supervise safe building and construction work, prepare and administer contracts, and who apply quality principles to building and construction projects.

Occupational titles may include:
• Builder
• Construction Supervisor
• Site Manager
• Site Supervisor
• Leading Hand

Completion of the general construction induction training program is required. Achievement of unit CPCWHS1001 Prepare to work safely in the construction industry meets this requirement.

Builder and Site Supervisor licensing varies across States and Territories.',
        'packaging_rules'    => '19 units of competency: 11 core units + 8 elective units.',
        'mode'               => 'Face-to-face classroom sessions + Practical training and assessment in purpose-built workshops.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [
            'CPC50220 Diploma of Building and Construction (Building)',
        ],
        'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/building-construction-iv.jpg',
        'order'              => 3,
    ],

    'cpc50220' => [
        'code'               => 'CPC50220',
        'title'              => 'Diploma of Building and Construction (Building)',
        'cricos'             => '119341B',
        'category'           => 'Building & Construction',
        'duration_weeks'     => 52,
        'duration_text'      => '52 weeks (44 weeks face-to-face training + 8 weeks break)',
        'slug'               => 'diploma-of-building-and-construction-building',
        'short_desc'         => 'For building professionals managing residential and commercial construction projects.',
        'full_description'   => 'This qualification reflects the role of building professionals who apply knowledge of structural principles, risk and financial management, estimating, preparing and administering building and construction contracts, selecting contractors, overseeing the work and its quality and managing construction work in building projects including residential and commercial with the following limitations:

• Residential construction limited to National Construction Code Class 1 and 10 buildings to a maximum of 3 storeys.
• Commercial construction limited to National Construction Code Class 2 to 9 buildings, Type C and B construction.

Occupational titles may include:
• Builder
• General Foreperson
• Building Inspector

The construction industry strongly affirms that training and assessment must be undertaken in a real or closely simulated workplace environment.

Completion of the general construction induction training program is required.',
        'packaging_rules'    => '27 units of competency: 24 core units + 3 elective units.',
        'mode'               => 'Face-to-face classroom sessions + Practical training and assessment in purpose-built workshops.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [],
        'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/building-construction-diploma.jpg',
        'order'              => 4,
    ],

    // =====================================================
    // ENGINEERING
    // =====================================================

    'mem31925' => [
        'code'               => 'MEM31925',
        'title'              => 'Certificate III in Engineering - Fabrication Trade',
        'cricos'             => '119160G',
        'category'           => 'Engineering',
        'duration_weeks'     => 62,
        'duration_text'      => '62 weeks (39 weeks face-to-face + 19 weeks work placement + 4 weeks break)',
        'slug'               => 'certificate-III-in-engineering-fabrication-trade',
        'short_desc'         => 'Trade qualification for engineering tradesperson – fabrication (welding, metal fabrication, sheetmetal).',
        'full_description'   => 'This qualification defines the skills and knowledge required of an engineering tradesperson fabrication within metal, engineering, manufacturing and associated industries. The qualification has been specifically developed to meet the needs of apprentices in the above trade.

The skills associated with this qualification are intended to apply to a wide range of fabrication work, including undertaking metal fabrication, structural steel erection, sheetmetal work, welding, blacksmithing and surface finishing.

This qualification is designed to provide an industry recognised skills profile related to trade work as an Engineering Tradesperson - Fabrication.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. However, in some jurisdictions units may relate to licensing or regulatory requirements.',
        'packaging_rules'    => 'Units of competency to the value of 96 points must be achieved (core 33 points + electives).',
        'mode'               => 'Face-to-face classroom + Practical training in workshop + Mandatory work-based training (work placement).',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => true,
        'pathways'           => [
            'MEM40119 Certificate IV in Engineering',
        ],
        'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/engineering-fabrication.jpg',
        'order'              => 5,
    ],

    'mem40119' => [
        'code'               => 'MEM40119',
        'title'              => 'Certificate IV in Engineering (Pathway Course)',
        'cricos'             => '108266K',
        'category'           => 'Engineering',
        'duration_weeks'     => 30,
        'duration_text'      => '30 weeks (for students who already hold Certificate III in Engineering – Fabrication Trade)',
        'slug'               => 'certificate-iv-in-engineering-pathway-entry',
        'short_desc'         => 'Pathway course for higher engineering tradesperson roles after completing Certificate III Fabrication.',
        'full_description'   => 'The MEM40119 Certificate IV in Engineering qualification provides the competencies required by a higher Engineering Tradesperson carrying out a wide range of engineering work undertaken in the fields of refrigeration and air conditioning, casting and moulding, computer numerically controlled (CNC) programming, fluid power, heavy fabrication, instrumentation, maintenance, plant mechanics, marine electronics, mechatronics and other related areas.

This course is designed for international students who have completed Certificate III in Engineering – Fabrication Trade. Students who have completed Certificate III will be given Credit Transfer for the Cert III units (96 points) and the Cert IV course duration will be reduced to 30 weeks.',
        'packaging_rules'    => 'Units of competency to the value of 132 points must be achieved (core 33 points + electives).',
        'mode'               => 'Face-to-face at SIT premises.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [
            'MEM50222 Diploma of Engineering – Technical',
            'MEM80125 Graduate Diploma of Engineering',
        ],
        'resources_note'     => 'Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/engineering-iv.jpg',
        'order'              => 6,
    ],

    'mem50222' => [
        'code'               => 'MEM50222',
        'title'              => 'Diploma of Engineering – Technical',
        'cricos'             => '117580C',
        'category'           => 'Engineering',
        'duration_weeks'     => 52,
        'duration_text'      => '52 weeks (47 weeks face-to-face training + 5 weeks break)',
        'slug'               => 'diploma-of-engineering-technical',
        'short_desc'         => 'Skills and knowledge required of an Engineering Technician in metal, engineering and manufacturing industries.',
        'full_description'   => 'This qualification defines the skills and knowledge required of an Engineering Technician within metal, engineering, manufacturing and associated industries.

The skills associated with this qualification are intended to apply to a wide range of technical engineering discipline areas including mechanical, mechatronics, manufacturing, maintenance, and heating ventilation air-conditioning, engineering drafting and refrigeration and air conditioning in manufacturing, engineering and related industries. The qualification provides the opportunity to develop theoretical knowledge and technical skills in either a specific discipline area or across a broad field of technical work and learning.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. Local regulations should be checked.',
        'packaging_rules'    => '20 units of competency: 5 core units + Group A electives (4–8) + Group B electives (minimum 7).',
        'mode'               => 'Face-to-face at State Institute of Training premises.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [
            'MEM80125 Graduate Diploma of Engineering',
        ],
        'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/engineering-diploma.jpg',
        'order'              => 7,
    ],

    'mem80125' => [
        'code'               => 'MEM80125',
        'title'              => 'Graduate Diploma of Engineering',
        'cricos'             => '119070J',
        'category'           => 'Engineering',
        'duration_weeks'     => 104,
        'duration_text'      => '104 weeks (80 weeks face-to-face training + 24 weeks break)',
        'slug'               => 'graduate-diploma-of-engineering',
        'short_desc'         => 'High-level supervisory technician and technical officer work across multiple engineering disciplines.',
        'full_description'   => 'This qualification defines the skills and knowledge required to undertake high level supervisory technician and technical officer work across a range of discipline areas including mechanical, mechatronics, manufacturing, maintenance, and heating ventilation air-conditioning and refrigeration (HVACR) in manufacturing and engineering.

Entry requirements: Students must have one of the following:
• an Advanced Diploma of Engineering or a Diploma of Engineering, or
• a relevant Certificate IV or Certificate III together with significant relevant vocational practice in an engineering related role, or
• a Bachelor Degree or other higher education qualification, with relevant vocational practice in an engineering related role.',
        'packaging_rules'    => 'Achievement of competence in seven (7) units of competency.',
        'mode'               => 'Face-to-face at State Institute of Training premises.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [],
        'resources_note'     => 'Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/engineering-grad-diploma.jpg',
        'order'              => 8,
    ],

    // =====================================================
    // BUSINESS & MANAGEMENT
    // =====================================================

    'bsb50820' => [
        'code'               => 'BSB50820',
        'title'              => 'Diploma of Project Management',
        'cricos'             => '107504J',
        'category'           => 'Business & Management',
        'duration_weeks'     => 60,
        'duration_text'      => '60 weeks (Full-time, minimum 20 hours per week – Total 1200 Hours)',
        'slug'               => 'diploma-of-project-management',
        'short_desc'         => 'Apply project management skills and knowledge across a variety of industry sectors.',
        'full_description'   => 'This qualification reflects the role of individuals who apply project management skills and knowledge in a variety of contexts, across a number of industry sectors. The job roles that relate to this qualification may include Project Manager and Project Team Leader.

Individuals in these roles have project leadership and management roles and are responsible for achieving project objectives. They possess a sound theoretical knowledge base and use a range of specialised, technical and managerial competencies to initiate, plan, execute and evaluate their own work and/or the work of others.',
        'packaging_rules'    => '12 units of competency: 8 core units + 4 elective units.',
        'mode'               => 'Face-to-face at State Institute of Training premises.',
        'locations'          => ['Pakenham', 'Melbourne'],
        'has_work_placement' => false,
        'pathways'           => [
            'BSB80120 Graduate Diploma of Management (Learning)',
        ],
        'resources_note'     => 'Students require their own laptop.',
        'intake_available'   => true,
        'status'             => 'active',
        'thumbnail'          => 'https://www.sit.vic.edu.au/images/courses/project-management.jpg',
        'order'              => 9,
    ],


];