<?php

declare(strict_types=1);

return [
    // The first elements are used as section descriptions.
    'Open Source' => [
        [
            'description' => '
            <p>
            Smaller personal projects, useful tid-bits and tools that don\'t belong anywhere else! My much bigger
            projects can be found over in <a href="/start-ups">startups.</a>
            </p>
            ',
        ],
        [
            'name' => 'GitHub Sync Tool',
            'description' => '
            <p>
            Frustrated with needing to work across multiple GitHub accounts and not being able to show off
            those dopamine producing green tiles on my own personal profile, I was inspired to write a tool of my own
            that could parse a given GitHub profile and create similar Git commits within a repository of my own. 
            </p>
            <p>
            It has no real value... unless you\'re as obsessed with GitHub activity as I am!
            </p>
            ',
            'href' => 'https://github.com/oliverearl/github-sync-tool',
            'technologies' => ['PHP', 'Laravel Zero'],
        ],
        [
            'name' => 'Hashnode API for PHP',
            'description' => '
            <p>
            A library for interacting with and retrieving data from the
            <a href="https://www.hashnode.com" target="_blank">Hashnode</a> GraphQL API.
            </p>
            <p>
            It was built as part of a Christmas hackathon on the Hashnode platform to build technology that
            made use of their APIs; though it did not win or perhaps gain as much attention as I had hoped.
            </p>
            <p>
            It is not currently maintained outside of security updates. You can read all about it on my blog post
            <a href="/blog/introducing-an-unofficial-hashnode-api-library-for-php">here.</a>
            </p>
            ',
            'href' => 'https://github.com/oliverearl/php-hashnode',
            'technologies' => ['PHP', 'GraphQL'],
        ],
    ],
    'Nightline Association' => [
        [
            'description' => '
            <p>
            I have been volunteering with the <a href="https://www.nightline.ac.uk" target="_blank">Nightline Association</a>
            since 2015, and joined the software development team in 2022 to focus my efforts where they could make the 
            most impact.
            </p>
            ',
            'period' => '2022 - Present',
        ],
        [
            'name' => 'Portal',
            'description' => '
            <p>
            Portal is a modular, monolithic application that is used to fulfill the digital needs of Nightlines 
            and the Nightline Association.
            </p>
            <p>
            It currently has modules for logging call data, anonymous real-time 
            instant messaging, statistics rendering and exportation, and most recently, a module to streamline
            accreditation work by the Quality Standards team.
            </p>
            <p>
            I have been a leading developer on the project since joining the team, and continue to contribute
            features, bugfixes, improvements, and tests to the endeavour.
            </p>
            ',
            'href' => 'https://portal.nightline.ac.uk',
            'technologies' => ['Laravel', 'Vue.js', 'Inertia.js', 'MySQL', 'Websockets'],
            'closed' => true,
        ],
        [
            'name' => 'IM Ringer',
            'description' => '
            <p>
            IM Ringer is an Electron-based desktop application used to alert Nightlines of incoming calls
            in a more reliable way than through the web browser alone.
            </p>
            ',
            'href' => 'https://portal.nightline.ac.uk',
            'technologies' => ['Electron', 'Vue.js'],
            'closed' => true,
        ],
        [
            'name' => 'WordPress Plugins',
            'description' => '
            <p>
            A range of WordPress plugins are available for Nightlines to use on their websites, including a widget
            that connects to Portal\'s API indicating whether their IM service is currently open, away, or closed, and
            most recently an interactive embeddable widget that allows students to find the Nightline that covers their 
            academic institution.
            </p>
            ',
            'href' => 'https://www.github.com/nightline-association/wordpress-plugins',
            'technologies' => ['WordPress', 'Vue.js'],
        ],
    ],
    'Stickee' => [
        [
            'description' => '
            <p>
            Unfortunately, I can\'t reveal too much about every project I\'ve worked on. But here\'s a 
            reverse-chronological list of the amazing work that I have had the opportunity to be a part of during my 
            time at <a href="https://www.stickee.co.uk" target="_blank">Stickee</a>.
            </p>
            <p>
            <code>TODO: Add screenshots!</code>
            </p>
            ',
            'period' => '2021 - Present',
        ],
        [
            'name' => 'Magpie DBX',
            'description' => '
            <p>
            Stickee\'s world leading flagship platform for marketing intelligence.
            </p> 
            <p>
            Independent contributor on numerous modules since June 2024.
            </p>
            ',
            'href' => 'https://www.magpiehq.com/',
            'technologies' => ['Proprietary'],
        ],
        [
            'name' => 'Unnamed content distribution platform',
            'description' => '
            <p>
            A proprietary platform for one of the biggest software companies in the world. Handles and distributes 
            hundreds of gigabytes of data worldwide.
            </p> 
            <p>
            I have been the lead developer of this project since August 2023, and have been contributing to the project
            since early 2022.
            </p>
            ',
            'href' => '',
            'technologies' => ['Proprietary'],
            'closed' => true,
        ],
        [
            'name' => 'Asda Mobile',
            'description' => '
            <p>
            Asda\'s mobile phone network and ecommerce platform, including their mobile app.
            </p>
            <p>
            Core developer since 2021 and one of the principal developers leading the rebuild, 
            codenamed <em>Project Stardust</em>, that went live in March 2024.
            </p>
            ',
            'href' => 'https://mobile.asda.com',
            'technologies' => ['Proprietary'],
        ],
        [
            'name' => 'Asda Gift Cards',
            'description' => '
            <p>
            Core developer since 2024, and independent contributor since 2021, for Asda\'s hugely successful
            gift card ecommerce platform.
            </p> 
            ',
            'href' => 'https://www.asdagiftcards.com',
            'technologies' => ['Proprietary'],
        ],
        [
            'name' => 'Currys Business (formerly Carphone Warehouse for Business)',
            'description' => '
            <p>
            Independent contributor between 2021 and 2022 on both their business retail platform and partner portal.
            </p>       
            ',
            'href' => 'https://business.currys.co.uk',
            'technologies' => ['Proprietary'],
        ],
        [
            'name' => 'EExAT - Early Excellence Assessment Tool',
            'description' => '
            <p>
            Independent contributor in 2021 on an early years summative assessment tool.
            </p>
            ',
            'href' => 'https://earlyexcellence.com/eexat/',
            'technologies' => ['Proprietary'],
        ],
    ],
    'Stickee (OSS)' => [
        [
            'description' => '
            <p>
            Open source initiatives that grew out of the work I did or was a part of, and have
            contributed significantly to.
            </p>
            <p>
            We liked to name both internal and public-facing products after birds.
            </p>
            ',
            'period' => '2021 - Present',
        ],
        [
            'name' => 'Finch',
            'description' => '
            <p>
            Finch is a library for asynchronously processing scraped product pages and 
            normalising their technical specifications into well-defined data objects using AI and ontologies. 
            <strong>It\'s still currently in closed development.</strong>
            </p>
            
            <p>
            Derives its name from the granivorous birds that pick out "seeds"
            of information.
            </p>
            ',
            'href' => 'https://www.github.com/stickeeuk',
            'technologies' => ['PHP', 'Laravel', 'OpenAI'],
            'closed' => true,
        ],
        [
            'name' => 'Canary',
            'description' => '
            <p>
            Canary is a standalone tool written in Laravel Zero for providing linting, automated refactoring, and
            static analysis for Laravel codebases, by amalgamating the best in-line tools and
            streamlining their use, including PHP CS Fixer, Rector, and Larastan.
            </p>
            
            <p>
            Derives its name from canaries that are used in coal mines; an early warning system.
            </p>
            ',
            'href' => 'https://www.github.com/stickeeuk/canary',
            'technologies' => ['PHP', 'Laravel Zero'],
        ],
        [
            'name' => 'Raven (Activity Log)',
            'description' => '
            <p>
            Raven is a fork of the popular <code>spatie/activity-log</code> library with additional features, 
            including built-in correlation tracking, severity tagging, automated alerts, and encrypted properties.
            </p>
            
            <p>
            Ravens are intelligent, meticulous, and love to hoard valuable things, hence why this
            bird was chosen as a namesake.
            </p>
            ',
            'href' => 'https://www.github.com/stickeeuk',
            'technologies' => ['PHP', 'Laravel'],
        ],
        [
            'name' => 'Shrike (Instrumentation)',
            'description' => '
            <p>
            Shrike is an open source instrumentation library, used for exporting events primarily into
            OpenTelemetry, although there are multiple adapters available. 
            </p>
            
            <p>
            The namesake is an interesting one. Shrikes, or <em>butcher birds</em> like to store food and
            objects of importance on sticks. One might say they\'re experts at <em>logging</em> things.
            </p>
            ',
            'href' => 'https://www.github.com/stickeeuk/instrumentation',
            'technologies' => ['PHP', 'Laravel', 'InfluxDB', 'OpenTelemetry']
        ],
    ],
];
