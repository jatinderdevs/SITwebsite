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
        'duration_text'      => '52 weeks (44 weeks face-to-face training + 8 weeks break period interspersed between study periods.)',
        'slug'               => 'certificate-iii-in-solid-plastering',
        'short_desc'         => 'Trade qualification in solid plastering for residential and commercial work.',
        'full_description'   => 'This qualification provides a trade outcome in solid plastering for residential and commercial work. The qualification has core unit of competency requirements that cover common skills for the construction industry, as well as the specialist field of work, solid plastering. Solid plasterers apply plaster, cement and other mixtures to walls to create smooth or decorative finishes to interior walls and to render to exterior walls.

Occupational titles may include:
• Solid Plasterer
• Renderer

Completion of the general construction induction training program, specified in the Safe Work Australia model Code of Practice: Construction Work, is required by anyone carrying out construction work. Achievement of CPCWHS1001 Prepare to work safely in the construction industry meets this requirement.',
        'units'    => '20 (15 core, 5 elective)',
        'packaging_rules'=>'To achieve this qualification, the candidate must demonstrate competency in:
• 20 units of competency:
• 15 core units
• 5 elective units.',
        'mode'               => 'Face-to-face + workshop',
        'mode_text'               => 'This delivery of this course has 2 components:
• Face-to-face classroom sessions,
• Practical training and assessment in purpose-built workshops.',

        'location_text'      => '
        • Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
        • Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000
        
            Practical training conducted at SIT Workshops',
            
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
        'thumbnail'          => 'plaster.webp',
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

State and territory jurisdictions may have different licensing, legislative, regulatory or certification requirements. Relevant state and territory regulatory authorities should be consulted to confirm those requirements.

This qualification is suitable for an Australian apprenticeship pathway.

Completion of the general construction induction training program, specified in the Safe Work Australia model Code of Practice: Construction Work, is required by anyone carrying out construction work. Achievement of CPCCWHS1001 Prepare to work safely in the construction industry meets this requirement.',
    'units'              => '20 (17 core, 3 elective)',
    'packaging_rules'    => 'To achieve this qualification, the candidate must demonstrate competency in:
• 20 units of competency:
• 17 core units
• 3 elective units.',
    'mode'               => 'Face-to-face + workshop',
    'mode_text'          => 'This delivery of this course has 2 components:
• Face-to-face classroom sessions,
• Practical training and assessment in purpose-built workshops.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000

Practical training conducted at SIT Workshops',
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
    'thumbnail'          => 'tiles.webp',
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

Building relates to construction and Site Management is about managing the factors around construction, such as the deployment of crews with specialised skills (including builders), product compliance, deployment of contract specialised skills, weather and site location.

Occupational titles depending on packaging options selected may include:
• Builder
• Construction Supervisor
• Site Manager
• Site Supervisor
• Leading Hand

Completion of the general construction induction training program specified by the model Code of Practice for Construction Work is required for any person who is to carry out construction work. Achievement of unit CPCWHS1001 Prepare to work safely in the construction industry meets this requirement.

Builder and Site Supervisor licensing varies across States and Territories and requirements additional to the attainment of this qualification may be required.',
    'units'              => '19 (11 core, 8 elective)',
    'packaging_rules'    => 'To achieve this qualification, the candidate must demonstrate competency in:
• 19 units of competency:
• 11 core units
• 8 elective units.',
    'mode'               => 'Face-to-face + workshop',
    'mode_text'          => 'This delivery of this course has 2 components:
• Face-to-face classroom sessions,
• Practical training and assessment in purpose-built workshops.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000

Practical training conducted at SIT Workshops',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [
        'CPC50220 Diploma of Building and Construction (Building)',
    ],
    'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'certiv.webp',
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

The construction industry strongly affirms that training and assessment leading to recognition of skills must be undertaken in a real or very closely simulated workplace environment. To achieve this qualification, the candidate must have access to a live building and construction workplace to meet the requirements detailed in the Assessment Requirements of core unit CPCCBC4008 Supervise communication and administration processes for building and construction projects.

Completion of the general construction induction training program specified by the model Code of Practice for Construction Work is required for any person who is to carry out construction work. Achievement of unit CPCWHS1001 Prepare to work safely in the construction industry meets this requirement.

Builder licensing varies across States and Territories and requirements additional to the attainment of this qualification may be required.',
    'units'              => '27 (24 core, 3 elective)',
    'packaging_rules'    => 'To achieve this qualification, the candidate must demonstrate competency in:
• 27 units of competency:
• 24 core units
• 3 elective units.',
    'mode'               => 'Face-to-face + workshop',
    'mode_text'          => 'This delivery of this course has 2 components:
• Face-to-face classroom sessions,
• Practical training and assessment in purpose-built workshops.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000

Practical training conducted at SIT Workshops',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [],
    'resources_note'     => 'SIT provides PPE for workshop use. Students require their own laptop.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'diplomacon.webp',
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
    'slug'               => 'certificate-iii-in-engineering-fabrication-trade',
    'short_desc'         => 'Trade qualification for engineering tradesperson – fabrication (welding, metal fabrication, sheetmetal).',
    'full_description'   => 'This qualification defines the skills and knowledge required of an engineering tradesperson fabrication within metal, engineering, manufacturing and associated industries. The qualification has been specifically developed to meet the needs of apprentices in the above trade.

The skills associated with this qualification are intended to apply to a wide range of fabrication work, including undertaking metal fabrication, structural steel erection, sheetmetal work, welding, blacksmithing and surface finishing.

This qualification is designed to provide an industry recognised skills profile related to trade work as an Engineering Tradesperson - Fabrication.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. However, in some jurisdictions units in this qualification may relate to licensing or regulatory requirements.',
    'units'              => 'Units of competency to the value of 96 points must be achieved (core 33 points + electives).',
    'packaging_rules'    => 'To be awarded the MEM31925 Certificate III in Engineering – Fabrication Trade, units of competency to the value of 96 points must be achieved:
• all core units of competency (totalling 33 points)
• elective units of competency for a generic fabrication trade qualification - minimum value of 40 points from Group A, B, C, D, E, F and G
• elective units of competency to a maximum value of 23 points from Group H to bring the total value to 96 points.

<a href="https://training.gov.au/Training/Details/MEM31925/qualdetails">https://training.gov.au/Training/Details/MEM31925</a>
',
    'mode'               => 'Face-to-face classroom + Practical training in workshop + Mandatory work-based training (work placement).',
    'mode_text'          => 'This delivery of this course has 3 components:
• Face-to-face classroom sessions
• Practical training and assessment in an operational workplace environment with purpose-built workshop
• Workplace practice via a mandatory work based training',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000

Practical training conducted at SIT Workshops',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => true,
    'pathways'           => [
        'MEM40119 Certificate IV in Engineering',
    ],
    'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'feb.webp',
    'order'              => 5,
],

   'mem40119' => [
    'code'               => 'MEM40119',
    'title'              => 'Certificate IV in Engineering (Pathway Course)',
    'cricos'             => '108266K',
    'category'           => 'Engineering',
    'isrequirments'      => 'This course is designed for international students who have completed Certificate III in Engineering – Fabrication Trade. These students would have completed the Work Based Training component as part of their Cert III in Engineering. They will be granted Credit Transfers for the units completed (96 points) and thus the course duration will be reduced.
                            To enter this qualification, applicants should have successfully completed Certificate III in Engineering – Fabrication Trade (or a similar qualification with Work Based Training component)',
    'duration_weeks'     => 30,
    'duration_text'      => '30 weeks (for students who already hold Certificate III in Engineering – Fabrication Trade)',
    'slug'               => 'certificate-iv-in-engineering-pathway-entry',
    'short_desc'         => 'Pathway course for higher engineering tradesperson roles after completing Certificate III Fabrication.',
    'full_description'   => 'The MEM40119 Certificate IV in Engineering qualification provides the competencies required by a higher Engineering Tradesperson carrying out a wide range of engineering work undertaken in the fields of refrigeration and air conditioning, casting and moulding, computer numerically controlled (CNC) programming, fluid power, heavy fabrication, instrumentation, maintenance, plant mechanics, marine electronics, mechatronics, patternmaking, robotics, toolmaking, welding and watch and clock services and repair as well as post trade work.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. However, in some jurisdictions units in this qualification may relate to licensing or regulatory requirements.

This course is designed for international students who have completed Certificate III in Engineering – Fabrication Trade. These students would have completed the Work Based Training component as part of their Cert III in Engineering. They will be granted Credit Transfers for the units completed (96 points) and thus the course duration will be reduced.',
    'units'              => 'Units of competency to the value of 132 points must be achieved (core 33 points + electives).',
    'packaging_rules'    => 'To be awarded the MEM40119 Certificate IV in Engineering, units of competency to the value of 132 points must be achieved:
• All core units of competency (totalling 33 points)
• Elective units of competency to a minimum value of 12 points from Group A
• Elective units of competency to a maximum value of 87 points from Group B to bring the total value to 132 points

Students will be granted credit transfers for the 96 points achieved in Certificate III in Engineering – Fabrication Trade.',
    'mode'               => 'Face-to-face',
    'mode_text'          => 'This delivery of this course has 2 components:
• Face-to-face classroom sessions
• Practical training and assessment in an operational workplace environment with purpose-built workshop',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000

Practical training conducted at SIT Workshops',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [
        'MEM50119 Diploma of Engineering – Advanced Trade',
    ],
    'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'eng.webp',
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

This qualification should not be used for VET in Schools unless the students are formally engaged in a traineeship in accordance with the Australian Apprenticeships policy.

In some jurisdictions, units in this qualification may relate to licensing or regulatory requirements. Licensing and regulatory information is included in the relevant units of competency.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. Local regulations should be checked.',
    'units'              => '20 units of competency: 5 core units + Group A electives (4–8) + Group B electives (minimum 7).',
    'packaging_rules'    => 'The requirement for achievement of the MEM50222 Diploma of Engineering - Technical is achievement of competence in twenty (20) units of competency made up of:
• all five (5) core units of competency, and
• completion of a minimum of four (4) to a maximum of eight (8) Group A elective units
• completion of a minimum of seven (7) Group B elective units

A maximum of three (3) Group B elective units, that are relevant to work as engineering technician within metal, engineering, manufacturing and associated industries and do not duplicate skills and knowledge already available in units within this qualification, may be chosen from this Training Package, other endorsed Training Packages and accredited courses where those units are available for inclusion in Diploma qualifications.',
    'mode'               => 'Face-to-face at State Institute of Training premises.',
    'mode_text'          => 'The mode of delivery for this qualification will be Face to Face at State Institute of Training - SIT premises.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [
        'MEM80125 Graduate Diploma of Engineering',
    ],
    'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'deng.webp',
    'order'              => 7,
],

   'mem80125' => [
    'code'               => 'MEM80125',
    'title'              => 'Graduate Diploma of Engineering',
    'cricos'             => '119070J',
    'category'           => 'Engineering',
    'duration_weeks'     => 104,
    'isrequirments'      =>'
    Students must have one of the following:

• an Advanced Diploma of Engineering or a Diploma of Engineering, or a
• relevant Certificate IV or Certificate III together with significant relevant vocational practice in an engineering related role, or a
• Bachelor Degree; or other higher education qualification, with relevant vocational practice in an engineering related role.
    ',
    'duration_text'      => '104 weeks (80 weeks face-to-face training + 24 weeks break)',
    'slug'               => 'graduate-diploma-of-engineering',
    'short_desc'         => 'High-level supervisory technician and technical officer work across multiple engineering disciplines.',
    'full_description'   => 'This qualification defines the skills and knowledge required to undertake high level supervisory technician and technical officer work across a range of discipline areas including mechanical, mechatronics, manufacturing, maintenance, and heating ventilation air-conditioning and refrigeration (HVACR) in manufacturing and engineering. The qualification provides the opportunity to gain advanced theoretical knowledge and technical skills in either a specific discipline area or across a broad field of technical work and learning.

In some jurisdictions, units in this qualification may relate to licensing or regulatory requirements. Licensing and regulatory information is included in the relevant units of competency.

Licensing/Regulatory Information: No licensing, legislative or certification requirements apply to this qualification at the time of publication. Local regulations should be checked.',
    'units'              => 'Achievement of competence in seven (7) units of competency.',
    'packaging_rules'    => 'The requirement for achievement of the MEM80125 Graduate Diploma of Engineering is the achievement of competence in seven (7) units of competency made up of:
• all three (3) core units of competency and
• four (4) Group A elective units

A maximum of two (2) Group A elective units, that are relevant to work in a high-level engineering supervisory technician and technical officer environment within metal, engineering, manufacturing and associated industries and do not duplicate skills and knowledge already available in units within this qualification, may be chosen from other Graduate Certificate or Graduate Diploma qualifications in this Training Package or from other endorsed Training Packages and accredited courses.',
    'mode'               => 'Face-to-face at State Institute of Training premises.',
    'mode_text'          => 'The mode of delivery for this qualification will be Face to Face at State Institute of Training - SIT premises.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [],
    'resources_note'     => 'SIT provides PPE (Steel Capped Boots, Welding gloves, Masks and Overalls). Students require their own laptop.',
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

Individuals in these roles have project leadership and management roles and are responsible for achieving project objectives. They possess a sound theoretical knowledge base and use a range of specialised, technical and managerial competencies to initiate, plan, execute and evaluate work and/or the work of others.',
    'units'              => '12 units of competency: 8 core units + 4 elective units.',
    'packaging_rules'    => 'Total number of units = 12 units (8 core, 4 elective).',
    'mode'               => 'Face-to-face at State Institute of Training premises.',
    'mode_text'          => 'The mode of delivery for this qualification will be Face to Face at State Institute of Training - SIT premises.

All Units of Competency will be delivered as standalone Units in this qualification. There is no work based training or work placements in this course.',
    'location_text'      => '• Pakenham Campus - Level 1, 29 James Street, Pakenham VIC 3810
• Melbourne Campus - Level 5, 255 William Street, Melbourne VIC 3000',
    'locations'          => ['Pakenham', 'Melbourne'],
    'has_work_placement' => false,
    'pathways'           => [
        'BSB80120 Graduate Diploma of Management (Learning)',
    ],
    'resources_note'     => 'Students require their own laptop. SIT provides all required facilities, equipment and learning resources.',
    'intake_available'   => true,
    'status'             => 'active',
    'thumbnail'          => 'grd.webp',
    'order'              => 9,
],

];