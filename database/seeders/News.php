<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class News extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('news')->insert(
            [
                 
                    [
                        'id' => 1,
                        'title' => 'Determined to push forward, Biden tightens his circle and grows combative',
                        'content' => 'WASHINGTON — President Joe Biden spent more than a week in meetings and on phone calls addressing Democrats’ concerns about his candidacy with a positive, conciliatory message about his path forward. At times, he even sounded contrite about his uneven debate performance, which prompted calls for him to suspend his re-election campaign. \n\nHe took blunt questions about his mental acuity in stride. He smiled through suggestions from allies that he take a cognitive test or consider allowing someone younger to take his place on the Democratic ticket. He agreed that his supporters have legitimate concerns and promised to show them he’s up for the rigor of a presidential campaign and another four years in the White House.\n\nThen he’d had enough.\n\nIn the past few days, Biden has started to privately convey a new message to Democrats: The conversation about my future is over, and I’m getting irritated that you’re not realizing that. Biden has called several prominent allies individually to tell them to spread the word.\n\n“We think we’ve got a good plan to fight through this,” a senior Biden aide said.\n\nNearly three weeks since his rocky debate performance that shook his party, Biden is intent on shutting down dissent among Democrats in order to move forward and focus on defeating Donald Trump. And after hearing out his critics, he’s tightening his circle to those he‘s relied on the longest — and who support his path ahead.\n\nBiden’s thinning patience for questions about his candidacy were on display as he campaigned Friday in Detroit telling a large, effusive crowd: “You made me the nominee. No one else. Not the press, not the pundits, not the insiders, not donors.”\n\n“And I’m not going anywhere,” Biden added. \n\nIn private calls with Democratic lawmakers on Saturday, he also made clear he finds the continued conversations about whether he should remain in the race exasperating.\n\n“Stay positive you are sounding defensive,” read a note one of Biden’s aides handed to him during a call with members of the Congressional Progressive Caucus, which the president then read aloud. (Two people familiar with the call said Biden intentionally read the note for a moment of \"levity.\")\n\nOn a later call with the moderate New Democratic Coalition, many of whom are in tough re-election fights, Biden grew frustrated at times, according to people familiar with the call..',
                        'author' => 'Carol E. Lee',
                        'date' => '2024-07-17',
                        'image_url' => 'https://media-cldnry.s-nbcnews.com/image/upload/t_focal-1000x667,f_auto,q_auto:best/rockcms/2024-07/240716-joe-biden-vl-336p-d6e6ca.jpg',
                        'summarise' => 'WASHINGTON — President Joe Biden spent more than a week in meetings and on phone calls addressing Democrats’ concerns about his...',
                        'categories_id' => 2,
                    ],
                    [
                        'id' => 2,
                        'title' => '\'Hot Ones\' and other YouTube favorites snubbed by Emmys',
                        'content' => 'Representatives for the YouTube shows did not immediately respond to requests for comment.\n\nDigital creators have won Emmys before. Some who started on YouTube, like \"Crazy Ex-Girlfriend\" showrunner and star Rachel Bloom, have also gone on to successful careers in traditional entertainment.\n\nBut in recent years, many content creators have ramped up their efforts to garner mainstream recognition.\n\nIn June, Sean Evans, the host of “Hot Ones,” and Rhett and Link, hosts of “Good Mythical Morning,” spoke with The Hollywood Reporter about their Emmy aspirations.\n\n“I’m a traditionalist,” Evans said. “I grew up on Letterman and Conan and Jimmy and those kinds of shows. To compete against those institutions, I think would be the most important distinction we’ve ever had.”\n\nSome, like Dimoldenberg, have been tapped to take part in awards shows as a red carpet host. In 2023, her red carpet interviews from the Golden Globes became instant hits on social media. Her popularity caught the Motion Picture Academy’s attention. The organization behind the Oscars tapped Dimoldenberg to be a “social media ambassador and red carpet correspondent” at the 2024 Academy Awards.',
                        'author' => 'Daysia Tolentino',
                        'date' => '2024-07-13',
                        'image_url' => 'https://media-cldnry.s-nbcnews.com/image/upload/t_focal-1000x667,f_auto,q_auto:best/rockcms/2024-07/240717-Amelia-Dimoldenberg-Sean-Evans-2-up-split-3x2-ac-430p-d7b40a.jpg',
                        'summarise' => 'YouTube CEO Neal Mohan advocated for creators to be treated like their own production studios, writing in a May column that "it\'s time a creator won an Emmy."',
                        'categories_id' => 4,
                    ],
                    [
                        'id' => 3,
                        'title' => 'Melting ice is slowing Earth\'s spin, shifting its axis and even influencing its inner core, research shows',
                        'content' => 'Climate change is altering the Earth to its literal core, new research suggests. \n\nAs polar and glacial ice melts because of global warming, water that was once concentrated at the top and the bottom of the globe is getting redistributed toward the equator. The extra mass around Earth’s middle slows its rotation, which in turn has a lengthening effect on our days.\n\nA new study offers more evidence of that dynamic and further suggests that changes to the planet’s ice have been profound enough to affect the Earth’s axis — the invisible line at its center around which it rotates. Together, those shifts are causing feedback beneath the surface, affecting the fluids that move around in Earth’s molten core. \n\nThe findings were published in two journals, Nature Geoscience and Proceedings of the National Academy of Sciences, over the last week. \n\nThe studies, along with similar research published in March, suggest that humans have tinkered with foundational elements of the planet’s physical properties — a process that will continue until some time after global temperatures stabilize and the melting of ice sheets reaches an equilibrium. \n\n“You can add Earth’s rotation to this list of things humans have completely affected,” said an author of the two new studies, Benedikt Soja, an assistant professor of space geodesy at ETH Zurich in Switzerland.\n\nThe alteration to Earth’s spin is significant enough that it could one day rival the influence of tidal forces caused by the moon, Soja said — if carbon emissions continue at extreme levels.',
                        'author' => 'Evan Bush',
                        'date' => '2024-07-15',
                        'image_url' => 'https://media-cldnry.s-nbcnews.com/image/upload/t_focal-1000x667,f_auto,q_auto:best/rockcms/2024-07/240716-antartica-ice-melted-ch-0947-96828d.jpg',
                        'summarise' => 'Climate change is altering the Earth to its literal core, new research suggests.',
                        'categories_id' => 1,
                    ],
                    [
                        'id' => 4,
                        'title' => 'We\'re here to speak for the people who can\'t',
                        'content' => 'But as well as fulfilling a personal ambition, Tarazi said, she hopes to use her presence in Paris to speak up for the people of Gaza, where more than 38,700 people have been killed in the Israeli military campaign, according to local health officials, since Hamas’ Oct. 7 attack, which saw around 1,200 people killed and around 240 people taken hostage, according to Israeli officials.\n\n“We’re not here to compete for ourselves or represent ourselves,” said Tarazi, who was born and raised in Chicago. “This is more than that.”\n\nThe 24-year-old is one of eight Palestinian athletes set to compete in Paris, along with fellow swimmer Yazan al Bawwab, taekwondo fighter Omar Ismail and judoka Fares Badawi. Boxer Waseem Abu Sal, runners Layla Almasri and Mohammed Dwedar will also take part, while Jorge Antonio Salhe will compete in the skeet shooting.',
                        'author' => 'Chantal Da Silva and Alexander Smith',
                        'date' => '2024-07-14',
                        'image_url' => 'https://media-cldnry.s-nbcnews.com/image/upload/t_focal-762x508,f_auto,q_auto:best/rockcms/2024-07/240715-palestine-olympic-swimmers-ew-1220p-2b746d.jpg',
                        'summarise' => '\'We\'re here to speak for the people who can\'t\': Palestinian Olympians show solidarity with Gaza',
                        'categories_id' => 3,
                    ],
                
                
            ]
        );
    }
}
