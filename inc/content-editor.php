<?php
/**
 * Simple, plugin-free content editor for the safari website.
 *
 * @package Efoil_Safaris
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function woe_content_schema() {
	return array(
		'general' => array(
			'label'       => 'Allgemein',
			'description' => 'Marke, Kontaktdaten und Fusszeile der gesamten Website.',
			'sections'    => array(
				array(
					'title'  => 'Marke und Kopfzeile',
					'fields' => array(
						array( 'id' => 'general_logo', 'label' => 'Logo in der Kopfzeile', 'type' => 'image', 'default' => 'images/yacht-safaris-logo-transparent.png', 'help' => 'Hier kannst du das Yacht-Safaris-Logo jederzeit durch ein anderes Logo ersetzen.' ),
						array( 'id' => 'general_brand', 'label' => 'Markenname', 'type' => 'text', 'default' => 'WORLD OF EFOIL' ),
						array( 'id' => 'general_subtitle', 'label' => 'Unterzeile', 'type' => 'text', 'default' => 'YACHT SAFARIS EGYPT' ),
						array( 'id' => 'general_footer_tagline', 'label' => 'Text in der Fusszeile', 'type' => 'textarea', 'default' => "Wind, water and a moving basecamp on Egypt's Red Sea." ),
					)
				),
				array(
					'title'  => 'Kontakt',
					'fields' => array(
						array( 'id' => 'general_phone_display', 'label' => 'Telefonnummer sichtbar', 'type' => 'text', 'default' => '+49 (0)160 5086 800' ),
						array( 'id' => 'general_phone_link', 'label' => 'Telefonnummer fuer Anrufe', 'type' => 'text', 'default' => '+491605086800', 'help' => 'Nur Zahlen und das Pluszeichen.' ),
						array( 'id' => 'general_whatsapp', 'label' => 'WhatsApp-Nummer', 'type' => 'text', 'default' => '491605086800', 'help' => 'Mit Laendervorwahl, ohne Pluszeichen.' ),
						array( 'id' => 'general_email', 'label' => 'Sichtbare Kontakt-E-Mail', 'type' => 'email', 'default' => 'info@worldofefoil.com' ),
						array( 'id' => 'general_booking_recipients', 'label' => 'Empfaenger fuer Buchungsanfragen', 'type' => 'list', 'default' => 'info@worldofefoil.com', 'help' => 'Eine E-Mail-Adresse pro Zeile. Nur Anfragen aus dem Buchungsformular werden an alle gueltigen Adressen dieser Liste gesendet.' ),
						array( 'id' => 'general_company', 'label' => 'Firmenname', 'type' => 'text', 'default' => 'World of eFoil GmbH' ),
						array( 'id' => 'general_address', 'label' => 'Adresse', 'type' => 'textarea', 'default' => "Wiesenstrasse 5\n27211 Bassum, Germany" ),
					)
				),
			)
		),
		'home' => array(
			'label'       => 'Startseite',
			'description' => 'Die wichtigsten Texte und Bilder der Startseite.',
			'sections'    => array(
				array(
					'title'  => 'Grosses Startbild',
					'fields' => array(
						array( 'id' => 'home_hero_image', 'label' => 'Startbild', 'type' => 'image', 'default' => 'images/hero-wingfoil.webp' ),
						array( 'id' => 'home_hero_kicker', 'label' => 'Kleine Zeile ueber der Ueberschrift', 'type' => 'text', 'default' => '7 nights | Red Sea | Liveaboard yacht' ),
						array( 'id' => 'home_hero_title', 'label' => 'Hauptueberschrift', 'type' => 'textarea', 'default' => 'Wingfoil & Kite Yacht Safaris' ),
						array( 'id' => 'home_hero_lead', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Follow the wind instead of waiting on the beach. Wake up at remote lagoons, ride from the yacht and share the week with a small watersports crew.' ),
					)
				),
				array(
					'title'  => 'Safari-Einleitung',
					'fields' => array(
						array( 'id' => 'home_intro_image', 'label' => 'Bild', 'type' => 'image', 'default' => 'images/yacht-bay.webp' ),
						array( 'id' => 'home_intro_eyebrow', 'label' => 'Kleine Ueberschrift', 'type' => 'text', 'default' => 'A different way to ride Egypt' ),
						array( 'id' => 'home_intro_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'No daily return to shore.' ),
						array( 'id' => 'home_intro_p1', 'label' => 'Absatz 1', 'type' => 'textarea', 'default' => 'The yacht moves with the conditions. One morning starts in glassy water for wingfoil progression, another at a kite lagoon with space to ride. Between sessions there is fresh food, snorkeling, time on deck and a crew that handles the logistics.' ),
						array( 'id' => 'home_intro_p2', 'label' => 'Absatz 2', 'type' => 'textarea', 'default' => 'This is a real liveaboard week, not a hotel package with a watersports add-on.' ),
						array( 'id' => 'home_intro_quote', 'label' => 'Hervorgehobener Satz', 'type' => 'textarea', 'default' => 'Sleep at the spot. Ride before breakfast. Move when the wind does.' ),
					)
				),
				array(
					'title'  => 'Wingfoil und Kite',
					'fields' => array(
						array( 'id' => 'home_wing_image', 'label' => 'Wingfoil-Bild', 'type' => 'image', 'default' => 'images/activities-wing.webp' ),
						array( 'id' => 'home_wing_title', 'label' => 'Wingfoil-Ueberschrift', 'type' => 'text', 'default' => 'Wingfoiling' ),
						array( 'id' => 'home_wing_text', 'label' => 'Wingfoil-Text', 'type' => 'textarea', 'default' => 'From first wing control to stable foiling, transitions and longer rides. The safari gives learners calm water and experienced riders room to explore.' ),
						array( 'id' => 'home_kite_image', 'label' => 'Kite-Bild', 'type' => 'image', 'default' => 'images/activities-kite.webp' ),
						array( 'id' => 'home_kite_title', 'label' => 'Kite-Ueberschrift', 'type' => 'text', 'default' => 'Kitesurfing' ),
						array( 'id' => 'home_kite_text', 'label' => 'Kite-Text', 'type' => 'textarea', 'default' => 'Steady wind, long reaches and uncrowded water. Bring your own equipment or ask about rental and coaching for your week.' ),
					)
				),
				array(
					'title'  => 'Duotone-Ausstattung (Startseite und Sportseite)',
					'fields' => array(
						array( 'id' => 'home_duotone_logo', 'label' => 'Equipped-with-Duotone-Logo', 'type' => 'image', 'default' => 'images/equipped-with-duotone-turquoise.webp' ),
						array( 'id' => 'home_duotone_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Premium Duotone equipment, ready for the week.' ),
						array( 'id' => 'home_duotone_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Our wingfoil and kite setup is centred on current Duotone wings, kites, boards and foils, selected for progression, freeriding and dependable days on the water.' ),
						array( 'id' => 'home_duotone_note', 'label' => 'Kleine Zusatzzeile', 'type' => 'textarea', 'default' => 'A broad size range lets guests compare suitable setups across real safari conditions, not just during a short beach demo.' ),
					)
				),
				array(
					'title'  => 'eFoil-Video',
					'fields' => array(
						array( 'id' => 'home_efoil_video', 'label' => 'Video', 'type' => 'media', 'media_type' => 'video', 'default' => 'video/safari-efoil.mp4' ),
						array( 'id' => 'home_efoil_poster', 'label' => 'Vorschaubild des Videos', 'type' => 'image', 'default' => 'images/video-poster.webp' ),
						array( 'id' => 'home_efoil_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'eFoil is still part of the story.' ),
						array( 'id' => 'home_efoil_text', 'label' => 'Text', 'type' => 'textarea', 'default' => 'When the wind pauses or you want to try something completely different, premium eFoils turn the open water into a silent playground. It is a highlight of the safari, without dictating the whole week.' ),
					)
				),
				array(
					'title'  => 'Warum mit uns buchen',
					'fields' => array(
						array( 'id' => 'home_why_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Built around the week you actually want.' ),
						array( 'id' => 'home_why_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'A purpose-built yacht, a progressive coaching concept and a wider choice of water activities give every rider, partner and family member a reason to look forward to the day.' ),
						array( 'id' => 'home_why_1_title', 'label' => 'Grund 1 Titel', 'type' => 'text', 'default' => 'Purpose-built yacht' ),
						array( 'id' => 'home_why_1_text', 'label' => 'Grund 1 Text', 'type' => 'textarea', 'default' => 'Dedicated equipment storage, a generous water-toy deck, comfortable cabins and practical charging space support real watersports logistics.' ),
						array( 'id' => 'home_why_2_title', 'label' => 'Grund 2 Titel', 'type' => 'text', 'default' => 'Progress that continues' ),
						array( 'id' => 'home_why_2_text', 'label' => 'Grund 2 Text', 'type' => 'textarea', 'default' => 'The Duotone Academy approach uses clear session goals and useful feedback, so each day can build on the one before.' ),
						array( 'id' => 'home_why_3_title', 'label' => 'Grund 3 Titel', 'type' => 'text', 'default' => 'More ways to use the Red Sea' ),
						array( 'id' => 'home_why_3_text', 'label' => 'Grund 3 Text', 'type' => 'textarea', 'default' => 'Wingfoil and kite lead the week, with eFoil, wakeboard, diving, snorkeling, SUP, yoga and more ready for changing conditions and energy.' ),
						array( 'id' => 'home_why_4_title', 'label' => 'Grund 4 Titel', 'type' => 'text', 'default' => 'A dedicated training platform' ),
						array( 'id' => 'home_why_4_text', 'label' => 'Grund 4 Text', 'type' => 'textarea', 'default' => 'Foil docks, a floating practice area and two safety boats make launches, coaching and water support easier throughout the week.' ),
						array( 'id' => 'home_why_5_title', 'label' => 'Grund 5 Titel', 'type' => 'text', 'default' => 'A full Duotone setup' ),
						array( 'id' => 'home_why_5_text', 'label' => 'Grund 5 Text', 'type' => 'textarea', 'default' => 'Current Duotone wingfoil and kite equipment gives beginners and experienced riders reliable sizes for lessons, rental and real-world testing.' ),
						array( 'id' => 'home_why_6_title', 'label' => 'Grund 6 Titel', 'type' => 'text', 'default' => 'A week for the whole group' ),
						array( 'id' => 'home_why_6_text', 'label' => 'Grund 6 Text', 'type' => 'textarea', 'default' => 'Children, partners and non-riders can shape their own day around snorkeling, island time, yoga, water toys and relaxed yacht life.' ),
					)
				),
				array(
					'title'  => 'Yacht und Abschluss',
					'fields' => array(
						array( 'id' => 'home_yacht_image', 'label' => 'Black Panther Hauptbild', 'type' => 'image', 'default' => 'images/black-panther.webp' ),
						array( 'id' => 'home_yacht_image2', 'label' => 'Black Panther Zusatzbild 1', 'type' => 'image', 'default' => 'images/yacht-jacuzzi.webp' ),
						array( 'id' => 'home_yacht_image3', 'label' => 'Black Panther Zusatzbild 2', 'type' => 'image', 'default' => 'images/yacht-lounge.webp' ),
						array( 'id' => 'home_yacht_title', 'label' => 'Yacht-Ueberschrift', 'type' => 'textarea', 'default' => 'M/Y Black Panther: our new premium basecamp.' ),
						array( 'id' => 'home_yacht_text', 'label' => 'Yacht-Text', 'type' => 'textarea', 'default' => 'Launching for our 2027 safaris, Black Panther brings five decks, 15 rooms, generous lounges, a spa and jacuzzi to the Red Sea. It is more than transport: it is the place where every riding day begins and ends.' ),
						array( 'id' => 'home_cta_title', 'label' => 'Letzte Ueberschrift', 'type' => 'textarea', 'default' => 'Ask which week fits your level.' ),
						array( 'id' => 'home_cta_text', 'label' => 'Letzter Text', 'type' => 'textarea', 'default' => 'Tell us whether your focus is wingfoil, kite, eFoil or simply joining the trip.' ),
					)
				),
			)
		),
		'safari' => array(
			'label'       => 'Safari',
			'description' => 'Inhalte der Unterseite The Safari.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'safari_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/gallery-sunset.webp' ),
						array( 'id' => 'safari_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Seven days shaped by wind and water.' ),
						array( 'id' => 'safari_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'A liveaboard watersports week from Hurghada: remote lagoons, a small riding crew, daily flexibility and a comfortable yacht waiting after every session.' ),
					)
				),
				array(
					'title'  => 'Warum eine Yacht-Safari',
					'fields' => array(
						array( 'id' => 'safari_intro_image', 'label' => 'Bild', 'type' => 'image', 'default' => 'images/yacht-bay.webp' ),
						array( 'id' => 'safari_intro_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'The spot changes. Your basecamp comes with you.' ),
						array( 'id' => 'safari_intro_p1', 'label' => 'Absatz 1', 'type' => 'textarea', 'default' => 'On a normal watersports holiday, you return to the same beach every day. Here, the captain, guides and instructors read the forecast and choose the route around the group.' ),
						array( 'id' => 'safari_intro_p2', 'label' => 'Absatz 2', 'type' => 'textarea', 'default' => 'The result is more water time, less transport and the chance to ride places that are difficult to reach from shore.' ),
						array( 'id' => 'safari_full_image', 'label' => 'Breites Bild unter der Einleitung', 'type' => 'image', 'default' => 'images/impression-ride.webp' ),
					)
				),
				array(
					'title'  => 'Wochenablauf',
					'fields' => array(
						array( 'id' => 'safari_day1_title', 'label' => 'Tag 1 Titel', 'type' => 'text', 'default' => 'Arrival' ),
						array( 'id' => 'safari_day1_text', 'label' => 'Tag 1 Text', 'type' => 'textarea', 'default' => 'Pickup at Hurghada Airport, transfer to the marina, cabin check-in, equipment overview and dinner. The yacht stays in port for the first night.' ),
						array( 'id' => 'safari_day2_title', 'label' => 'Tag 2 Titel', 'type' => 'text', 'default' => 'First lagoon' ),
						array( 'id' => 'safari_day2_text', 'label' => 'Tag 2 Text', 'type' => 'textarea', 'default' => 'Safety briefing, group setup and first wingfoil, kite or eFoil sessions in easy water. Settle into yacht life.' ),
						array( 'id' => 'safari_day34_title', 'label' => 'Tag 3-4 Titel', 'type' => 'text', 'default' => 'Find your flow' ),
						array( 'id' => 'safari_day34_text', 'label' => 'Tag 3-4 Text', 'type' => 'textarea', 'default' => 'Early sessions, coaching blocks and guided rides. Snorkel, wakeboard or rest when your body wants a pause.' ),
						array( 'id' => 'safari_day56_title', 'label' => 'Tag 5-6 Titel', 'type' => 'text', 'default' => 'Explore farther' ),
						array( 'id' => 'safari_day56_text', 'label' => 'Tag 5-6 Text', 'type' => 'textarea', 'default' => 'The route develops with the forecast. Expect a mix of progression sessions, free riding, island time and long evenings on deck.' ),
						array( 'id' => 'safari_day7_title', 'label' => 'Tag 7 Titel', 'type' => 'text', 'default' => 'Last full day' ),
						array( 'id' => 'safari_day7_text', 'label' => 'Tag 7 Text', 'type' => 'textarea', 'default' => 'Make the most of the final conditions, pack equipment and share the last dinner with the crew.' ),
						array( 'id' => 'safari_day8_title', 'label' => 'Tag 8 Titel', 'type' => 'text', 'default' => 'Departure' ),
						array( 'id' => 'safari_day8_text', 'label' => 'Tag 8 Text', 'type' => 'textarea', 'default' => 'Breakfast, return to Hurghada Marina and transfer to the airport or your next destination.' ),
					)
				),
				array(
					'title'  => 'Leistungen und Nicht-Fahrer',
					'fields' => array(
						array( 'id' => 'safari_included', 'label' => 'Enthalten, eine Zeile pro Punkt', 'type' => 'list', 'default' => "Seven nights in a yacht cabin\nFresh buffet meals by the onboard chef\nSoft drinks, coffee, snacks and fruit\nHurghada airport to marina transfer\nDaily cabin cleaning\nSpeedboats and 24-hour rescue support\nSnorkeling, wakeboarding, water toys and island BBQ" ),
						array( 'id' => 'safari_excluded', 'label' => 'Nicht enthalten, eine Zeile pro Punkt', 'type' => 'list', 'default' => "Flights to Egypt and entry visa\nTravel and medical insurance\nAlcoholic beverages\nWingfoil, kite, eFoil and diving lessons or rental\nMarina, fuel and environmental fees\nYacht crew tips" ),
						array( 'id' => 'safari_nonrider_image', 'label' => 'Bild fuer Nicht-Fahrer', 'type' => 'image', 'default' => 'images/activities-yoga.webp' ),
						array( 'id' => 'safari_nonrider_title', 'label' => 'Ueberschrift Nicht-Fahrer', 'type' => 'textarea', 'default' => 'Join the week at your own pace.' ),
						array( 'id' => 'safari_nonrider_p1', 'label' => 'Text 1', 'type' => 'textarea', 'default' => 'Partners and friends who do not ride are welcome. Around the sports schedule there is snorkeling, diving, wakeboarding, island stops, yoga, deck time and the simple pleasure of being far from shore.' ),
						array( 'id' => 'safari_nonrider_p2', 'label' => 'Text 2', 'type' => 'textarea', 'default' => 'No one has to join every session. A good safari leaves room for ambition and for doing absolutely nothing.' ),
					)
				),
			)
		),
		'sports' => array(
			'label'       => 'Wing & Kite',
			'description' => 'Sportarten, Kurse, Bilder und eFoil-Video.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'sports_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/hero-wingfoil.webp' ),
						array( 'id' => 'sports_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Wind is the main event.' ),
						array( 'id' => 'sports_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Progression sessions, free riding and remote-water access for beginners through experienced riders. eFoil remains the special no-wind bonus.' ),
					)
				),
				array(
					'title'  => 'Wingfoil und Kite',
					'fields' => array(
						array( 'id' => 'sports_wing_image', 'label' => 'Wingfoil-Bild', 'type' => 'image', 'default' => 'images/activities-wing.webp' ),
						array( 'id' => 'sports_wing_title', 'label' => 'Wingfoil-Ueberschrift', 'type' => 'textarea', 'default' => 'Wingfoiling: learn, link, explore.' ),
						array( 'id' => 'sports_wing_p1', 'label' => 'Wingfoil-Text 1', 'type' => 'textarea', 'default' => 'The yacht gives wingfoilers something a fixed school beach cannot: the freedom to look for flatter water, open space and the right wind for the group.' ),
						array( 'id' => 'sports_wing_p2', 'label' => 'Wingfoil-Text 2', 'type' => 'textarea', 'default' => 'New riders can work through the basics with structured coaching. Independent riders can join guided sessions, tune technique and spend long stretches on the water.' ),
						array( 'id' => 'sports_kite_image', 'label' => 'Kite-Bild', 'type' => 'image', 'default' => 'images/activities-kite.webp' ),
						array( 'id' => 'sports_kite_title', 'label' => 'Kite-Ueberschrift', 'type' => 'textarea', 'default' => 'Kitesurfing without the crowded launch.' ),
						array( 'id' => 'sports_kite_p1', 'label' => 'Kite-Text 1', 'type' => 'textarea', 'default' => 'Red Sea lagoons are made for long sessions. When wind and location line up, the tenders bring riders to the launch zone and the yacht stays close as a comfortable base.' ),
						array( 'id' => 'sports_kite_p2', 'label' => 'Kite-Text 2', 'type' => 'textarea', 'default' => 'Experienced kiters can freeride with space. Beginners and intermediates can ask about lessons, guidance and rental before booking.' ),
					)
				),
				array(
					'title'  => 'Wingfoil Academy',
					'fields' => array(
						array( 'id' => 'sports_level1_title', 'label' => 'Level 1 Titel', 'type' => 'text', 'default' => 'Control the wing' ),
						array( 'id' => 'sports_level1_text', 'label' => 'Level 1 Text', 'type' => 'textarea', 'default' => 'Safety, handling, direction, water starts and first confident board rides before adding foil height.' ),
						array( 'id' => 'sports_level1_hours', 'label' => 'Level 1 Dauer', 'type' => 'text', 'default' => 'Typically 3 sessions | about 6 hours' ),
						array( 'id' => 'sports_level2_title', 'label' => 'Level 2 Titel', 'type' => 'text', 'default' => 'Find the lift' ),
						array( 'id' => 'sports_level2_text', 'label' => 'Level 2 Text', 'type' => 'textarea', 'default' => 'First flights, stable stance, height control and the connection between wing power and foil speed.' ),
						array( 'id' => 'sports_level2_hours', 'label' => 'Level 2 Dauer', 'type' => 'text', 'default' => 'Typically 3 sessions | about 9 hours' ),
						array( 'id' => 'sports_level3_title', 'label' => 'Level 3 Titel', 'type' => 'text', 'default' => 'Link the ride' ),
						array( 'id' => 'sports_level3_text', 'label' => 'Level 3 Text', 'type' => 'textarea', 'default' => 'Longer foiling, transitions, stronger wind control, swell riding and independent decision-making.' ),
						array( 'id' => 'sports_level3_hours', 'label' => 'Level 3 Dauer', 'type' => 'text', 'default' => 'Typically 3 sessions | 6+ hours' ),
					)
				),
				array(
					'title'  => 'eFoil und weitere Aktivitaeten',
					'fields' => array(
						array( 'id' => 'sports_efoil_video', 'label' => 'eFoil-Video', 'type' => 'media', 'media_type' => 'video', 'default' => 'video/safari-efoil.mp4' ),
						array( 'id' => 'sports_efoil_poster', 'label' => 'Video-Vorschaubild', 'type' => 'image', 'default' => 'images/video-poster.webp' ),
						array( 'id' => 'sports_efoil_title', 'label' => 'eFoil-Ueberschrift', 'type' => 'textarea', 'default' => 'Fly when the wind takes a break.' ),
						array( 'id' => 'sports_efoil_text', 'label' => 'eFoil-Text', 'type' => 'textarea', 'default' => 'eFoils are available as a premium extra for first flights, guided rides and testing different setups. They are also a useful bridge for understanding foil height before wingfoiling.' ),
						array( 'id' => 'sports_activity1_image', 'label' => 'Diving-Bild', 'type' => 'image', 'default' => 'images/activities-diving.webp' ),
						array( 'id' => 'sports_activity1_title', 'label' => 'Diving-Titel', 'type' => 'text', 'default' => 'Diving' ),
						array( 'id' => 'sports_activity1_text', 'label' => 'Diving-Text', 'type' => 'textarea', 'default' => 'Explore reefs and Red Sea wildlife between wind sessions. Arranged as an optional extra.' ),
						array( 'id' => 'sports_activity2_image', 'label' => 'Schnorchel-Bild', 'type' => 'image', 'default' => 'images/activities-snorkel.webp' ),
						array( 'id' => 'sports_activity2_title', 'label' => 'Schnorchel-Titel', 'type' => 'text', 'default' => 'Snorkeling' ),
						array( 'id' => 'sports_activity2_text', 'label' => 'Schnorchel-Text', 'type' => 'textarea', 'default' => 'Easy access to clear water, reefs and quiet coves directly from the yacht or tender.' ),
						array( 'id' => 'sports_activity3_image', 'label' => 'Wakeboard-Bild', 'type' => 'image', 'default' => 'images/activities-wake.webp' ),
						array( 'id' => 'sports_activity3_title', 'label' => 'Wakeboard-Titel', 'type' => 'text', 'default' => 'Wakeboarding' ),
						array( 'id' => 'sports_activity3_text', 'label' => 'Wakeboard-Text', 'type' => 'textarea', 'default' => 'A lively alternative when you want board time without setting up a wing or kite.' ),
					)
				),
			)
		),
		'activities' => array(
			'label'       => 'Aktivitaeten',
			'description' => 'Alle Aktivitaeten sowie der wichtige Hinweis zur eFoil-Batteriemiete.',
			'sections'    => array(
				array(
					'title'  => 'Einleitung und Batteriemiete',
					'fields' => array(
						array( 'id' => 'activities_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => '15 activities. One yacht. Your week.' ),
						array( 'id' => 'activities_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Few Red Sea yacht charters bring this many activities together in one week. Wingfoil and kitesurfing lead the programme, eFoil is the premium highlight, and the remaining choices keep riders, families and non-riders moving at their own pace.' ),
						array( 'id' => 'activities_battery_title', 'label' => 'Batterie-Hinweis Titel', 'type' => 'text', 'default' => 'Bring your Lift or Aerofoils eFoil.' ),
						array( 'id' => 'activities_battery_text', 'label' => 'Batterie-Hinweis Text', 'type' => 'textarea', 'default' => 'Lift and Aerofoils owners can ask to rent a compatible battery for the safari and join with their own eFoil. Availability and compatibility must be confirmed before travel.' ),
					)
				),
				array(
					'title'  => 'Alle Aktivitaeten',
					'fields' => woe_activity_fields(),
				),
			)
		),
		'yachts' => array(
			'label'       => 'Yachten',
			'description' => 'Yacht-Texte sowie alle Kabinen- und Deckbilder.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'yachts_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/black-panther.webp' ),
						array( 'id' => 'yachts_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Your hotel moves with the wind.' ),
						array( 'id' => 'yachts_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Comfortable cabins, open decks, real meals and marine logistics designed around a full week on the water.' ),
					)
				),
				array(
					'title'  => 'M/Y Black Panther',
					'fields' => array(
						array( 'id' => 'yachts_bp_image', 'label' => 'Hauptbild', 'type' => 'image', 'default' => 'images/black-panther-close.webp' ),
						array( 'id' => 'yachts_bp_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'The premium flagship.' ),
						array( 'id' => 'yachts_bp_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Black Panther is the premium 2027 basecamp: a modern five-deck superyacht with spacious social areas, 15 rooms, jacuzzi, spa, sun lounges and two speedboats for riding logistics.' ),
						array( 'id' => 'yachts_bp_gallery1', 'label' => 'Bild 1, Kabine', 'type' => 'image', 'default' => 'images/yacht-suite.webp' ),
						array( 'id' => 'yachts_bp_gallery2', 'label' => 'Bild 2, Lounge', 'type' => 'image', 'default' => 'images/yacht-lounge.webp' ),
						array( 'id' => 'yachts_bp_gallery3', 'label' => 'Bild 3, Jacuzzi', 'type' => 'image', 'default' => 'images/yacht-jacuzzi.webp' ),
						array( 'id' => 'yachts_bp_gallery4', 'label' => 'Bild 4, Essen', 'type' => 'image', 'default' => 'images/yacht-dining.webp' ),
						array( 'id' => 'yachts_bp_gallery5', 'label' => 'Bild 5, Bad', 'type' => 'image', 'default' => 'images/yacht-cabin.webp' ),
						array( 'id' => 'yachts_bp_gallery6', 'label' => 'Bild 6, Deck', 'type' => 'image', 'default' => 'images/yacht-deck.webp' ),
					)
				),
				array(
					'title'  => 'M/Y Majestic',
					'fields' => array(
						array( 'id' => 'yachts_maj_image', 'label' => 'Hauptbild', 'type' => 'image', 'default' => 'images/majestic.webp' ),
						array( 'id' => 'yachts_maj_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'The proven safari yacht.' ),
						array( 'id' => 'yachts_maj_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Built in 2023, Majestic offers 16 air-conditioned cabins, private bathrooms, two lounges, shaded decks, a sundeck, jacuzzi, chef-prepared buffet meals and an experienced crew.' ),
						array( 'id' => 'yachts_maj_gallery1', 'label' => 'Bild 1, Salon', 'type' => 'image', 'default' => 'images/majestic-salon.webp' ),
						array( 'id' => 'yachts_maj_gallery2', 'label' => 'Bild 2, Kabine', 'type' => 'image', 'default' => 'images/majestic-cabin.webp' ),
						array( 'id' => 'yachts_maj_gallery3', 'label' => 'Bild 3, Aussendeck', 'type' => 'image', 'default' => 'images/majestic-deck.webp' ),
					)
				),
				array(
					'title'  => 'M/Y Jasmine | Private Charter',
					'fields' => array(
						array( 'id' => 'yachts_jasmine_image', 'label' => 'Hauptbild', 'type' => 'image', 'default' => 'images/jasmine/jasmine-main.webp' ),
						array( 'id' => 'yachts_jasmine_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Your own yacht. Your own safari.' ),
						array( 'id' => 'yachts_jasmine_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Charter the entire 56-metre M/Y Jasmine for a private Red Sea safari shaped around your group, preferred pace and watersports focus. With 13 spacious staterooms for up to 26 guests, five decks, a spa, pool and generous social areas, it turns a week on the water into a private superyacht experience.' ),
						array( 'id' => 'yachts_jasmine_private_title', 'label' => 'Private-Charter-Hinweis', 'type' => 'text', 'default' => 'Available as a full private charter' ),
						array( 'id' => 'yachts_jasmine_private_text', 'label' => 'Private-Charter-Text', 'type' => 'textarea', 'default' => 'Ideal for friends, clubs, families or a hand-picked riding crew who want the yacht, route and daily rhythm to themselves.' ),
						array( 'id' => 'yachts_jasmine_gallery1', 'label' => 'Bild 1, Salon', 'type' => 'image', 'default' => 'images/jasmine/jasmine-salon.webp' ),
						array( 'id' => 'yachts_jasmine_gallery2', 'label' => 'Bild 2, Restaurant', 'type' => 'image', 'default' => 'images/jasmine/jasmine-restaurant.webp' ),
						array( 'id' => 'yachts_jasmine_gallery3', 'label' => 'Bild 3, Kabine', 'type' => 'image', 'default' => 'images/jasmine/jasmine-cabin.webp' ),
						array( 'id' => 'yachts_jasmine_gallery4', 'label' => 'Bild 4, Suite', 'type' => 'image', 'default' => 'images/jasmine/jasmine-suite.webp' ),
						array( 'id' => 'yachts_jasmine_gallery5', 'label' => 'Bild 5, Bad', 'type' => 'image', 'default' => 'images/jasmine/jasmine-bathroom.webp' ),
						array( 'id' => 'yachts_jasmine_gallery6', 'label' => 'Bild 6, Sonnendeck', 'type' => 'image', 'default' => 'images/jasmine/jasmine-sundeck.webp' ),
						array( 'id' => 'yachts_jasmine_gallery7', 'label' => 'Bild 7, Pool', 'type' => 'image', 'default' => 'images/jasmine/jasmine-pool.webp' ),
					)
				),
			)
		),
		'dates' => array(
			'label'       => 'Termine & Preise',
			'description' => 'Termine, Preise, Yachtbeschreibungen und enthaltene Leistungen.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'dates_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/impression-ride.webp' ),
						array( 'id' => 'dates_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Choose your Red Sea week.' ),
						array( 'id' => 'dates_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Seven nights from Hurghada Marina. Cabins are limited; availability, room choice and equipment options are confirmed personally.' ),
					)
				),
				array(
					'title'  => 'M/Y Majestic 2026',
					'fields' => array(
						array( 'id' => 'dates_maj_image', 'label' => 'Bild', 'type' => 'image', 'default' => 'images/majestic.webp' ),
						array( 'id' => 'dates_maj_label', 'label' => 'Jahr und Yacht', 'type' => 'text', 'default' => '2026 | M/Y Majestic' ),
						array( 'id' => 'dates_maj_price', 'label' => 'Preis', 'type' => 'text', 'default' => 'From EUR 1,650' ),
						array( 'id' => 'dates_maj_title', 'label' => 'Ueberschrift', 'type' => 'text', 'default' => 'November wind weeks' ),
						array( 'id' => 'dates_maj_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Modern yacht with 16 cabins, lounges, jacuzzi, chef buffet and experienced marine crew.' ),
						array( 'id' => 'dates_maj_date1', 'label' => 'Termin 1', 'type' => 'text', 'default' => '07.11.2026 - 14.11.2026' ),
						array( 'id' => 'dates_maj_date2', 'label' => 'Termin 2', 'type' => 'text', 'default' => '14.11.2026 - 21.11.2026' ),
					)
				),
				array(
					'title'  => 'M/Y Black Panther 2027',
					'fields' => array(
						array( 'id' => 'dates_bp_image', 'label' => 'Bild', 'type' => 'image', 'default' => 'images/black-panther.webp' ),
						array( 'id' => 'dates_bp_label', 'label' => 'Jahr und Yacht', 'type' => 'text', 'default' => '2027 | M/Y Black Panther' ),
						array( 'id' => 'dates_bp_price', 'label' => 'Preis', 'type' => 'text', 'default' => 'From EUR 1,850' ),
						array( 'id' => 'dates_bp_title', 'label' => 'Ueberschrift', 'type' => 'text', 'default' => 'Spring safari weeks' ),
						array( 'id' => 'dates_bp_text', 'label' => 'Beschreibung', 'type' => 'textarea', 'default' => 'Premium five-deck superyacht with 15 rooms, spa, jacuzzi, generous lounges and two tenders.' ),
						array( 'id' => 'dates_bp_date1', 'label' => 'Termin 1', 'type' => 'text', 'default' => '27.03.2027 - 03.04.2027' ),
						array( 'id' => 'dates_bp_date2', 'label' => 'Termin 2', 'type' => 'text', 'default' => '03.04.2027 - 10.04.2027' ),
						array( 'id' => 'dates_bp_date3', 'label' => 'Termin 3', 'type' => 'text', 'default' => '10.04.2027 - 17.04.2027' ),
						array( 'id' => 'dates_bp_date4', 'label' => 'Termin 4', 'type' => 'text', 'default' => '08.05.2027 - 15.05.2027' ),
					)
				),
				array(
					'title'  => 'Leistungen und Buchung',
					'fields' => array(
						array( 'id' => 'dates_included', 'label' => 'Enthalten, eine Zeile pro Punkt', 'type' => 'list', 'default' => "Seven nights in a yacht cabin\nFresh buffet meals by the onboard chef\nSoft drinks, coffee, snacks and fruit\nHurghada airport to marina transfer\nDaily cabin cleaning\nSpeedboats and rescue support\nSnorkeling, wakeboarding, water toys and island BBQ" ),
						array( 'id' => 'dates_excluded', 'label' => 'Nicht enthalten, eine Zeile pro Punkt', 'type' => 'list', 'default' => "Flights and Egypt entry visa\nTravel and medical insurance\nAlcoholic beverages\nWingfoil, kite, eFoil and diving lessons or rental\nMarina, fuel and environmental fees\nYacht crew tips" ),
						array( 'id' => 'dates_booking_title', 'label' => 'Buchungs-Ueberschrift', 'type' => 'textarea', 'default' => 'Ask for availability.' ),
						array( 'id' => 'dates_booking_text', 'label' => 'Buchungs-Text', 'type' => 'textarea', 'default' => 'Tell us the date, group size and your main sport. The team will reply with open cabins, equipment choices, current fees and the next booking steps.' ),
					)
				),
			)
		),
		'gallery' => array(
			'label'       => 'Galerie',
			'description' => 'Grosses Galeriebild, Videos sowie alle Fotos und Bildtexte.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'gallery_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/impression-social.webp' ),
						array( 'id' => 'gallery_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'This is what the week feels like.' ),
						array( 'id' => 'gallery_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Sessions, saltwater, quiet bays, full plates, tired legs and the people you share it with.' ),
					)
				),
				array(
					'title'  => 'Videos',
					'fields' => array(
						array( 'id' => 'gallery_video_1', 'label' => 'Video 1', 'type' => 'media', 'media_type' => 'video', 'default' => 'video/safari-efoil.mp4' ),
						array( 'id' => 'gallery_video_poster_1', 'label' => 'Vorschaubild Video 1', 'type' => 'image', 'default' => 'images/video-poster.webp' ),
						array( 'id' => 'gallery_video_caption_1', 'label' => 'Titel Video 1', 'type' => 'text', 'default' => 'eFoil safari' ),
						array( 'id' => 'gallery_video_2', 'label' => 'Video 2', 'type' => 'media', 'media_type' => 'video', 'default' => 'video/gallery-safari-wide.mp4' ),
						array( 'id' => 'gallery_video_poster_2', 'label' => 'Vorschaubild Video 2', 'type' => 'image', 'default' => 'images/gallery-archive/archive-01.webp' ),
						array( 'id' => 'gallery_video_caption_2', 'label' => 'Titel Video 2', 'type' => 'text', 'default' => 'A day on the Red Sea' ),
						array( 'id' => 'gallery_video_3', 'label' => 'Video 3', 'type' => 'media', 'media_type' => 'video', 'default' => 'video/gallery-rider-reel.mp4' ),
						array( 'id' => 'gallery_video_poster_3', 'label' => 'Vorschaubild Video 3', 'type' => 'image', 'default' => 'images/gallery-archive/archive-22.webp' ),
						array( 'id' => 'gallery_video_caption_3', 'label' => 'Titel Video 3', 'type' => 'text', 'default' => 'Sunset session' ),
					)
				),
				array(
					'title'  => 'Bilder auf dem Wasser',
					'fields' => woe_gallery_fields(
						1,
						array(
							array( 'images/hero-wingfoil.webp', 'Wingfoil water' ),
							array( 'images/activities-kite.webp', 'Kite sunset' ),
							array( 'images/impression-ride.webp', 'Ride from the yacht' ),
							array( 'images/gallery-sunset.webp', 'Last session' ),
							array( 'images/efoil-rider.webp', 'Silent flight' ),
							array( 'images/impression-foil.webp', 'Premium setup' ),
						)
					)
				),
				array(
					'title'  => 'Bilder an Bord',
					'fields' => woe_gallery_fields(
						7,
						array(
							array( 'images/black-panther.webp', 'Black Panther' ),
							array( 'images/yacht-suite.webp', 'Cabin' ),
							array( 'images/yacht-jacuzzi.webp', 'Jacuzzi deck' ),
							array( 'images/yacht-deck.webp', 'Open deck' ),
							array( 'images/yacht-dining.webp', 'Dining' ),
							array( 'images/yacht-bay.webp', 'Wake up here' ),
						)
					)
				),
				array(
					'title'  => 'Bilder zwischen den Sessions',
					'fields' => woe_gallery_fields(
						13,
						array(
							array( 'images/impression-social.webp', 'The crew' ),
							array( 'images/activities-snorkel.webp', 'Snorkeling' ),
							array( 'images/activities-wake.webp', 'Wakeboarding' ),
							array( 'images/gallery-smile.webp', 'Good water, good mood' ),
							array( 'images/activities-diving.webp', 'Below the surface' ),
							array( 'images/activities-yoga.webp', 'Morning reset' ),
						)
					)
				),
				array(
					'title'  => 'Neue Wingfoil- und Kite-Fotos',
					'fields' => woe_gallery_collection_fields(
						19,
						'images/gallery-new/new-sport-%02d.webp',
						array(
							'Wingfoil session', 'Ready for the water', 'Foiling over clear water', 'Wingfoil progression', 'A quiet launch', 'Red Sea riding',
							'Learning to fly', 'Open-water wingfoil', 'A session with space', 'Wingfoil from the yacht', 'Wind and turquoise water', 'Kite session',
							'Kitesurfing Egypt', 'Long Red Sea reach', 'Kite progression', 'Riding with the group', 'Remote kite water', 'Wind on the lagoon',
							'Kite safari session', 'Space to ride', 'Kite day', 'Sun and steady wind', 'One more session',
						)
					)
				),
				array(
					'title'  => 'Safari-Archiv',
					'fields' => woe_gallery_collection_fields(
						42,
						'images/gallery-archive/archive-%02d.webp',
						array(
							'Yacht-supported eFoil', 'Sunset flight', 'Wingfoil lesson', 'Ready to ride', 'Wingfoil sunset', 'Kite sunset',
							'Hammock time', 'Dolphins', 'Aerofoils equipment', 'Sunset on board', 'eFoil cruise', 'Equipment deck', 'Red Sea sunset',
							'Fresh fruit', 'Quiet deck', 'Remote lagoon', 'Wingfoil golden hour', 'Chef buffet', 'Last light', 'Dinner on board',
							'Wingfoil action', 'Sunset session', 'The safari crew', 'Reef snorkeling', 'Open deck',
						)
					)
				),
			)
		),
		'partners' => array(
			'label'       => 'Partner',
			'description' => 'Partnernamen, Logos und Links. Ein Link kann leer bleiben.',
			'sections'    => array(
				array(
					'title'  => 'Partner-Netzwerk',
					'fields' => woe_partner_fields(),
				),
			)
		),
		'faq' => array(
			'label'       => 'FAQ',
			'description' => 'Haeufige Fragen, Antworten und Kontakt-Seitenkopf.',
			'sections'    => array(
				array(
					'title'  => 'Seitenkopf',
					'fields' => array(
						array( 'id' => 'faq_hero_image', 'label' => 'Grosses Bild', 'type' => 'image', 'default' => 'images/gallery-smile.webp' ),
						array( 'id' => 'faq_hero_title', 'label' => 'Ueberschrift', 'type' => 'textarea', 'default' => 'Know before you go.' ),
						array( 'id' => 'faq_hero_text', 'label' => 'Einleitung', 'type' => 'textarea', 'default' => 'Clear answers about experience, equipment, cabins, food, internet and booking.' ),
					)
				),
				array(
					'title'  => 'Fragen von Fahrern',
					'fields' => woe_faq_fields(
						1,
						array(
							array( 'Do I need previous wingfoil or kite experience?', 'No. Beginners and experienced riders are welcome. Lessons and equipment are optional extras and should be arranged before the trip so the team can prepare the right setup.' ),
							array( 'Can I bring my own equipment?', 'Yes. Tell the team what you plan to bring so transport, storage and charging requirements can be checked in advance.' ),
							array( 'Is equipment rental included in the yacht price?', 'No. Wingfoil, kite, eFoil and diving equipment or lessons are booked separately. Snorkeling, wakeboarding and selected water toys are included.' ),
							array( 'What happens if the wind is light?', 'The yacht route remains flexible and the week includes alternatives such as eFoil, wakeboarding, snorkeling, diving, island stops and time on deck.' ),
							array( 'Where exactly will we ride?', 'The route is chosen shortly before and during the safari. Wind, water, safety and group level determine which lagoons and islands work best.' ),
							array( 'Is rescue support available?', 'Yes. The yachts use tenders for transfers, riding support and rescue. All participants still need appropriate travel and medical insurance.' ),
						)
					)
				),
				array(
					'title'  => 'Fragen zum Yachtleben',
					'fields' => woe_faq_fields(
						7,
						array(
							array( 'Can a non-rider join?', 'Yes. Partners and friends can join for the yacht, sea, food, snorkeling, diving, wakeboarding and relaxed time on board.' ),
							array( 'What is included in the cabin?', 'Cabins are air-conditioned and include a private bathroom. Daily cleaning is included. Exact room layouts vary by yacht.' ),
							array( 'Can I book a cabin for single use?', 'A limited number may be available for single occupancy. Ask for the current surcharge and cabin choice for your preferred week.' ),
							array( 'Can allergies or special diets be handled?', 'Vegan, gluten-free and other requirements can usually be arranged when shared before booking.' ),
							array( 'Is there reliable internet at sea?', 'No. A local SIM may work in some areas, but the safari is not suitable for dependable video calls or remote work.' ),
							array( 'Are there compulsory extra fees?', 'Yes. Marina, fuel and environmental fees plus crew tips are paid separately. The current amount is confirmed before you book.' ),
						)
					)
				),
			)
		),
	);
}

function woe_gallery_fields( $start, $items ) {
	$fields = array();
	foreach ( $items as $offset => $item ) {
		$number   = $start + $offset;
		$fields[] = array( 'id' => 'gallery_image_' . $number, 'label' => 'Bild ' . $number, 'type' => 'image', 'default' => $item[0] );
		$fields[] = array( 'id' => 'gallery_caption_' . $number, 'label' => 'Bildtext ' . $number, 'type' => 'text', 'default' => $item[1] );
	}
	return $fields;
}

function woe_gallery_collection_fields( $start, $path_pattern, $captions ) {
	$items = array();
	foreach ( $captions as $offset => $caption ) {
		$items[] = array( sprintf( $path_pattern, $offset + 1 ), $caption );
	}
	return woe_gallery_fields( $start, $items );
}

function woe_activity_fields() {
	$fields = array();
	foreach ( woe_activity_defaults() as $offset => $activity ) {
		$number   = $offset + 1;
		$fields[] = array( 'id' => 'activity_' . $number . '_image', 'label' => 'Aktivitaet ' . $number . ' Bild', 'type' => 'image', 'default' => 'images/activities-full/' . $activity[0] . '.webp' );
		$fields[] = array( 'id' => 'activity_' . $number . '_title', 'label' => 'Aktivitaet ' . $number . ' Titel', 'type' => 'text', 'default' => $activity[1] );
		$fields[] = array( 'id' => 'activity_' . $number . '_text', 'label' => 'Aktivitaet ' . $number . ' Text', 'type' => 'textarea', 'default' => $activity[2] );
		$fields[] = array( 'id' => 'activity_' . $number . '_label', 'label' => 'Aktivitaet ' . $number . ' kleine Zeile', 'type' => 'text', 'default' => $activity[3] );
	}
	return $fields;
}

function woe_partner_fields() {
	$fields = array();
	foreach ( woe_partner_defaults() as $offset => $partner ) {
		$number   = $offset + 1;
		$fields[] = array( 'id' => 'partner_' . $number . '_logo', 'label' => 'Partner ' . $number . ' Logo', 'type' => 'image', 'default' => 'images/partners/' . $partner[0] . '.webp' );
		$fields[] = array( 'id' => 'partner_' . $number . '_name', 'label' => 'Partner ' . $number . ' Name', 'type' => 'text', 'default' => $partner[1] );
		$fields[] = array( 'id' => 'partner_' . $number . '_url', 'label' => 'Partner ' . $number . ' Link', 'type' => 'url', 'default' => $partner[2] );
	}
	return $fields;
}

function woe_faq_fields( $start, $items ) {
	$fields = array();
	foreach ( $items as $offset => $item ) {
		$number   = $start + $offset;
		$fields[] = array( 'id' => 'faq_question_' . $number, 'label' => 'Frage ' . $number, 'type' => 'textarea', 'default' => $item[0] );
		$fields[] = array( 'id' => 'faq_answer_' . $number, 'label' => 'Antwort ' . $number, 'type' => 'textarea', 'default' => $item[1] );
	}
	return $fields;
}

function woe_all_content_fields() {
	static $fields = null;
	if ( null !== $fields ) {
		return $fields;
	}
	$fields = array();
	foreach ( woe_content_schema() as $tab ) {
		foreach ( $tab['sections'] as $section ) {
			foreach ( $section['fields'] as $field ) {
				$fields[ $field['id'] ] = $field;
			}
		}
	}
	return $fields;
}

function woe_content_value( $id ) {
	$values = get_option( 'woe_content', array() );
	if ( array_key_exists( $id, $values ) && ! in_array( woe_all_content_fields()[ $id ]['type'] ?? '', array( 'image', 'media' ), true ) ) {
		return $values[ $id ];
	}
	$field = woe_all_content_fields()[ $id ] ?? null;
	return $field['default'] ?? '';
}

function woe_content_media_url( $id ) {
	$fields = woe_all_content_fields();
	$field  = $fields[ $id ] ?? null;
	if ( ! $field ) {
		return '';
	}
	$values        = get_option( 'woe_content', array() );
	$attachment_id = isset( $values[ $id ] ) ? absint( $values[ $id ] ) : 0;
	if ( $attachment_id ) {
		$url = wp_get_attachment_url( $attachment_id );
		if ( $url ) {
			return $url;
		}
	}
	return ! empty( $field['default'] ) ? woe_asset_url( $field['default'] ) : '';
}

function woe_content_lines( $id ) {
	$value = (string) woe_content_value( $id );
	return array_values( array_filter( array_map( 'trim', preg_split( '/\r\n|\r|\n/', $value ) ) ) );
}

function woe_admin_menu() {
	add_menu_page(
		'Efoil Safaris Inhalte',
		'Efoil Safaris',
		'edit_theme_options',
		'woe-content',
		'woe_render_content_editor',
		'dashicons-admin-site-alt3',
		3
	);

	$subpages = array(
		'home'       => 'Startseite',
		'general'    => 'Allgemein',
		'safari'     => 'Safari',
		'sports'     => 'Wing & Kite',
		'activities' => 'Aktivitaeten',
		'yachts'     => 'Yachten',
		'dates'      => 'Termine & Preise',
		'gallery'    => 'Galerie',
		'partners'   => 'Partner',
		'faq'        => 'FAQ',
	);
	foreach ( $subpages as $tab => $label ) {
		$slug = 'home' === $tab ? 'woe-content' : 'woe-content&tab=' . $tab;
		add_submenu_page( 'woe-content', $label, $label, 'edit_theme_options', $slug, 'woe_render_content_editor' );
	}
}
add_action( 'admin_menu', 'woe_admin_menu' );

function woe_admin_assets( $hook ) {
	$page = isset( $_GET['page'] ) ? sanitize_key( wp_unslash( $_GET['page'] ) ) : '';
	if ( 'woe-content' !== $page ) {
		return;
	}
	wp_enqueue_media();
	wp_enqueue_style( 'woe-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), WOE_THEME_VERSION );
	wp_enqueue_script( 'woe-admin', get_template_directory_uri() . '/assets/js/admin.js', array( 'jquery' ), WOE_THEME_VERSION, true );
}
add_action( 'admin_enqueue_scripts', 'woe_admin_assets' );

function woe_render_content_editor() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}
	$schema     = woe_content_schema();
	$active_tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'home';
	if ( ! isset( $schema[ $active_tab ] ) ) {
		$active_tab = 'home';
	}
	$stored = get_option( 'woe_content', array() );
	?>
	<div class="wrap woe-editor">
		<div class="woe-editor-head">
			<div><h1>Efoil Safaris bearbeiten</h1><p>Texte anklicken, Bilder auswaehlen und anschliessend speichern. Das Design bleibt automatisch erhalten.</p></div>
			<a class="button button-secondary" href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" rel="noopener">Website ansehen</a>
		</div>
		<?php if ( isset( $_GET['updated'] ) ) : ?>
			<div class="notice notice-success is-dismissible"><p>Die Aenderungen wurden gespeichert.</p></div>
		<?php endif; ?>
		<nav class="woe-tabs" aria-label="Website-Bereiche">
			<?php foreach ( $schema as $tab_key => $tab ) : ?>
				<a class="<?php echo $active_tab === $tab_key ? 'is-active' : ''; ?>" href="<?php echo esc_url( admin_url( 'admin.php?page=woe-content&tab=' . $tab_key ) ); ?>"><?php echo esc_html( $tab['label'] ); ?></a>
			<?php endforeach; ?>
		</nav>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<input type="hidden" name="action" value="woe_save_content">
			<input type="hidden" name="tab" value="<?php echo esc_attr( $active_tab ); ?>">
			<?php wp_nonce_field( 'woe_save_content', 'woe_content_nonce' ); ?>
			<div class="woe-tab-intro"><h2><?php echo esc_html( $schema[ $active_tab ]['label'] ); ?></h2><p><?php echo esc_html( $schema[ $active_tab ]['description'] ); ?></p></div>
			<?php foreach ( $schema[ $active_tab ]['sections'] as $section ) : ?>
				<section class="woe-admin-section">
					<h2><?php echo esc_html( $section['title'] ); ?></h2>
					<div class="woe-fields">
						<?php foreach ( $section['fields'] as $field ) : ?>
							<?php woe_render_admin_field( $field, $stored ); ?>
						<?php endforeach; ?>
					</div>
				</section>
			<?php endforeach; ?>
			<div class="woe-save-bar"><button class="button button-primary button-hero" type="submit">Aenderungen speichern</button></div>
		</form>
	</div>
	<?php
}

function woe_render_admin_field( $field, $stored ) {
	$id        = $field['id'];
	$type      = $field['type'];
	$effective = array_key_exists( $id, $stored ) && ! in_array( $type, array( 'image', 'media' ), true ) ? $stored[ $id ] : $field['default'];
	?>
	<div class="woe-field woe-field-<?php echo esc_attr( $type ); ?>">
		<label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $field['label'] ); ?></label>
		<?php if ( in_array( $type, array( 'image', 'media' ), true ) ) : ?>
			<?php
			$attachment_id = isset( $stored[ $id ] ) ? absint( $stored[ $id ] ) : 0;
			$preview       = woe_content_media_url( $id );
			$media_type    = $field['media_type'] ?? 'image';
			$default_url   = ! empty( $field['default'] ) ? woe_asset_url( $field['default'] ) : '';
			?>
			<div class="woe-media-field<?php echo $preview ? '' : ' is-empty'; ?>" data-media-type="<?php echo esc_attr( $media_type ); ?>" data-default-preview="<?php echo esc_url( $default_url ); ?>">
				<div class="woe-media-preview">
					<?php if ( 'video' === $media_type ) : ?>
						<video src="<?php echo esc_url( $preview ); ?>" muted playsinline></video>
					<?php else : ?>
						<img src="<?php echo esc_url( $preview ); ?>" alt="">
					<?php endif; ?>
					<span class="woe-media-empty">Noch kein eigenes Bild ausgewaehlt</span>
				</div>
				<input id="<?php echo esc_attr( $id ); ?>" type="hidden" name="woe_content[<?php echo esc_attr( $id ); ?>]" value="<?php echo esc_attr( $attachment_id ); ?>">
				<div class="woe-media-actions"><button class="button woe-select-media" type="button"><?php echo 'video' === $media_type ? 'Video auswaehlen' : 'Bild auswaehlen'; ?></button><button class="button-link-delete woe-reset-media" type="button">Original verwenden</button></div>
			</div>
		<?php elseif ( in_array( $type, array( 'textarea', 'list' ), true ) ) : ?>
			<textarea id="<?php echo esc_attr( $id ); ?>" name="woe_content[<?php echo esc_attr( $id ); ?>]" rows="<?php echo 'list' === $type ? '7' : '4'; ?>"><?php echo esc_textarea( $effective ); ?></textarea>
		<?php else : ?>
			<input id="<?php echo esc_attr( $id ); ?>" type="<?php echo esc_attr( $type ); ?>" name="woe_content[<?php echo esc_attr( $id ); ?>]" value="<?php echo esc_attr( $effective ); ?>">
		<?php endif; ?>
		<?php if ( ! empty( $field['help'] ) ) : ?><p class="description"><?php echo esc_html( $field['help'] ); ?></p><?php endif; ?>
	</div>
	<?php
}

function woe_save_content() {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		wp_die( esc_html__( 'You are not allowed to edit these settings.', 'efoil-safaris' ) );
	}
	check_admin_referer( 'woe_save_content', 'woe_content_nonce' );
	$schema = woe_content_schema();
	$tab    = isset( $_POST['tab'] ) ? sanitize_key( wp_unslash( $_POST['tab'] ) ) : 'home';
	if ( ! isset( $schema[ $tab ] ) ) {
		$tab = 'home';
	}
	$submitted = isset( $_POST['woe_content'] ) && is_array( $_POST['woe_content'] ) ? wp_unslash( $_POST['woe_content'] ) : array();
	$stored    = get_option( 'woe_content', array() );
	foreach ( $schema[ $tab ]['sections'] as $section ) {
		foreach ( $section['fields'] as $field ) {
			$id    = $field['id'];
			$value = $submitted[ $id ] ?? '';
			switch ( $field['type'] ) {
				case 'image':
				case 'media':
					$stored[ $id ] = absint( $value );
					break;
			case 'email':
				$stored[ $id ] = sanitize_email( $value );
				break;
			case 'url':
				$stored[ $id ] = esc_url_raw( $value );
				break;
				case 'textarea':
				case 'list':
					$stored[ $id ] = sanitize_textarea_field( $value );
					break;
				default:
					$stored[ $id ] = sanitize_text_field( $value );
			}
		}
	}
	update_option( 'woe_content', $stored, false );
	wp_safe_redirect( admin_url( 'admin.php?page=woe-content&tab=' . $tab . '&updated=1' ) );
	exit;
}
add_action( 'admin_post_woe_save_content', 'woe_save_content' );
