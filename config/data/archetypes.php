<?php

return [

    'Animalistic Alien' => [

        'brawn' => 3,
        'agility' => 3,
        'intellect' => 2,
        'cunning' => 2,
        'willpower' => 1,
        'presence' => 2,

        'wound_threshold' => '10 + Brawn',
        'strain_threshold' => '8 + Willpower',
        'starting_experience' => '80 xp',
        
        'special_abilities' => "An animalistic alien starts with one rank in Athletics, Coordination, or Resilience during character creation. You still can't train their skills above rank 2 during character creation.",

        'other_abilities' => [
            'Natural Weapons' => 'An animalistic alien adds +2 damage to any Brawl combat checks they make. Their Brawl combat checks also gain the Vicious 1 quality or increase an existing Vicious quality by one.',
        ],

        'description' => 'Space opera settings often have alien species that are derivative of some terrestrial species. Fiction abounds with catlike aliens, turtle-like aliens, reptilian aliens, and so forth. Traditionally, these species are stronger, faster, or tougher than humans, and they share some traits with the nonsapient Terran species they mimic. Our animalistic alien species is stronger and faster than most average humans, but trades this for fewer starting XP. The physical appearance of this species is, of course, up to you.',
    ],

    'Average Human' => [

        'brawn' => 2,
        'agility' => 2,
        'intellect' => 2,
        'cunning' => 2,
        'willpower' => 2,
        'presence' => 2,

        'wound_threshold' => '10 + Brawn',
        'strain_threshold' => '10 + Willpower',
        'starting_experience' => '110 xp',
        
        'special_abilities' => "An average human starts with one rank in each of two different non-career skills at character creation. They obtain this rank before spending experience points, and these skills may not be increased higher than rank 2 during character creation.",

        'other_abilities' => [
            'Ready for Anything' => "Once per session as an out-of-turn incidental, you may move one Story Point from the Game Master's pool to the players' pool.",
        ],

        'description' => "The average human archetype is our baseline for character creation, and portrays the most customizable example of a person. You should choose this archetype if you prefer to play 'generalist' characters, who are never going to be terrible at anything. You should also choose this archetype if you have a very specific type of character in mind, since this archetype has the most customization options of the four choices. The characteristics all start at 2, meaning your character is going to have a hard time increasing any one characteristic to a 4 or 5, but also that your character isn't going to have any characteristic they are truly lacking in. Likewise, the strain and wound thresholds start at the average 10. Your character starts with more ranks in skills than anyone else, again playing to the idea of being a generalist. Your archetype ability is also a generalist ability. Effectively, your group gains a Story Point to spend whenever it needs it. And finally, your character starts with the most experience of any of the four archetypes. Just remember, character creation is your only chance to spend XP on characteristics (otherwise, to increase a characteristic you need to purchase the Dedication talent; see page 81). We recommend you spend most of these XP on improving your characteristics, while saving at most 25–35 experience for talents and skills.",
    ],

    'Bioroid' => [

        'brawn' => 3,
        'agility' => 1,
        'intellect' => 1,
        'cunning' => 1,
        'willpower' => 1,
        'presence' => 1,

        'wound_threshold' => '11 + Brawn',
        'strain_threshold' => '8 + Willpower',
        'starting_experience' => '155 xp',
        
        'special_abilities' => "Bioroids do not need to eat, sleep, or breathe, and are unaffected by toxins and poisons. Bioroids do not reduce their strain threshold when they receive cybernetics (in the case of bioroids, the cybernetics can represent upgraded mechanical components instead of true cybernetics).",

        'other_abilities' => [
            'Inorganic' => "Since bioroids are inorganic, they do not gain the benefits of healing wounds with painkillers or a Medicine check. Bioroids can heal wounds and strain naturally by resting, as their systems attempt self-repairs. Bioroids can also be 'healed by using the Mechanics skill instead of the Medicine skill, but otherwise following the guidelines detailed on page 116.",
        ],

        'description' => "This profile works for just about any humanoid robot with human-level intelligence and a certain degree of free will. Because robots are built to meet certain specifications, we gave the bioroid low starting characteristics but a lot of experience. That way, you can customize your characteristics and skills to represent any of the different 'models of bioroid.",
    ],

];
