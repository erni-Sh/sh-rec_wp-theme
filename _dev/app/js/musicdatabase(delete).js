"use strict";

let KARJALA = musicBand([
	{
	bandName: 		'КАРЕЛИЯ',
	bandDiv: 		'KARJALA',
	genre: 			'folk-rock',
	foto: 			'./media/KARJALA/KARJALA.jpg',
	description: 	`<p>Участник фестивалей «Части Света 2019», «Небо и Земля» (Тюмень), Этнофест (Финляндия), Дикая Мята (Тула), «Живой!», «Этно-Механика» и многих других; оркестр, разделивший сцену с NoizeMC, Инной Желанной, Сергеем Старостиным, МГЗАВРЕБИ и Машей Макаровой, Odnono, гр. Пилот.</p>
                    <br>
                    <p>Карелия - лучший новый word-music проект 2017 года по мнению RWMA.</p>
                    <br>
                    <p>Осенью 2019-го музыка Карелии прозвучала в легендарной авторской программе Бориса Гребенщикова «Аэростат».</p>`,
	}
]);

let KARJALA_PL = musicAlbum([
	{
	bandDiv: 	'KARJALA',
	albumName: 	'Планета',
	type: 		'album',
	date: 		'December 28, 2018',
	studio: 	'Галерная 20 / студия ИнтерЗвук / HIBOLL STUDIO / DOBROLET',
	cover: 		'./media/KARJALA/PL/karjalaPlaneta.jpg',
	container: 	'waveKarPL', // контейнер зараннее прописывается в html
	marker: 	'PL',
	curState:   'unplayed',
	},
	['Олень', 			'./media/KARJALA/PL/01 ОЛЕНЬ.mp3'],
	['Планета', 		'./media/KARJALA/PL/02 ПЛАНЕТА.mp3'],
	['Луна', 			'./media/KARJALA/PL/03 ЛУНА.mp3'],
	['Темные мысли', 	'./media/KARJALA/PL/04 ТЕМНЫЕ МЫСЛИ.mp3'],
	['Его мир', 		'./media/KARJALA/PL/05 ЕГО МИР.mp3'],
	['Птицею', 			'./media/KARJALA/PL/06 ПТИЦЕЮ.mp3'],
	['Не буди', 		'./media/KARJALA/PL/07 НЕ БУДИ.mp3'],
	['Прозрачный', 		'./media/KARJALA/PL/08 ПРОЗРАЧНЫЙ.mp3'],
	['Луна(live)', 		'./media/KARJALA/PL/09 ЛУНА (live).mp3'],
	['Ежик(live)', 		'./media/KARJALA/PL/10 ЕЖИК (live).mp3']
]);

let KARJALA_TS = musicAlbum([
	{
	bandDiv: 	'KARJALA',
	albumName: 	'ТРЕБЬЮТ КИНО',
	type: 		'single',
	date: 		'June, 2017',
	studio: 	'TreKiNorda studio',
	cover: 		'./media/KARJALA/TS/karjalaKino.jpg', 
	container: 	'waveKarTS',
	marker: 	'TS',
	curState:   'unplayed',
	},
	['Место для шага вперед', 		'./media/KARJALA/TS/МЕСТО ДЛЯ ШАГА ВПЕРЕД.mp3']
]);

let KARJALA_BV = musicAlbum([
	{
	bandDiv: 	'KARJALA',
	albumName: 	'Буйные ветры',
	type: 		'album',
	date: 		'September 2, 2016',
	studio: 	'студия ИнтерЗвук',
	cover: 		'./media/KARJALA/BV/karjalaBV.jpg', 
	container: 	'waveKarBV',
	marker: 	'BV',
	curState:   'unplayed',
	},
	['Все танцуют', 		'./media/KARJALA/BV/01 Все танцуют.mp3'],
	['То ли быль', 			'./media/KARJALA/BV/02 То ли быль.mp3'],
	['Кали', 				'./media/KARJALA/BV/03 Кали.mp3'],
	['Жаркое солнце', 		'./media/KARJALA/BV/04 Жаркое солнце.mp3'],
	['Север', 				'./media/KARJALA/BV/05 Север.mp3'],
	['Las-Vegas', 			'./media/KARJALA/BV/06 Las-Vegas.mp3'],
	['And I walk alone',	'./media/KARJALA/BV/07 And I walk alone.mp3'],
	['Pop-pop-pop', 		'./media/KARJALA/BV/08 Pop-pop-pop.mp3'],
	['Mamas & Papas', 		'./media/KARJALA/BV/09 Mamas & Papas.mp3'],
	['I cant stop',			'./media/KARJALA/BV/10 I cant stop.mp3']
]);

let drugoyVeter = musicBand([
	{
	bandName: 		'ДРУГОЙ ВЕТЕР',
	bandDiv: 		'DrVeter',
	genre: 			'rock',
	foto: 			'./media/DrugoyVeter/DrVeter2.jpg',
	description: 	`<p>Творчество группы отличает умение видеть обратную сторону шаблонного мира и открытый рассказ о том, о чём обычно принято молчать. Однажды попав в этот микрокосмос, ты навсегда останешься в нём. Здесь всё по-настоящему и всё по-dругому.</p>
		<br>
		<p>На счету коллектива - несколько студийных альбомов, ротация на «Нашем Радио», участие в фестивалях «Нашествие», «Окна Открой», «Улетай», «Соседний мир», «Алые Паруса» и др.</p>`,
	}
]);

let drVeter_Zasipay = musicAlbum([
	{
	bandDiv: 	'DrVeter',
	albumName: 	'Засыпай, мой Похиоки',
	type: 		'single',
	date: 		'January 7, 2017',
	studio: 	'HIBOLL STUDIO',
	cover: 		'./media/DrugoyVeter/Zasipay/DrVet_Zasipay.jpg',
	container: 	'waveDrVet_Zasipay',
	marker: 	'ZMP',
	curState:   'unplayed',
	},
	['Засыпай, мой Похиоки', 		'./media/DrugoyVeter/Zasipay/Засыпай, мой Похиоки.mp3'],
]);

let drVeter_GNC = musicAlbum([
	{
	bandDiv: 	'DrVeter',
	albumName: 	'Спокойной ночи, малыши',
	type: 		'album',
	date: 		'April 1, 2016',
	studio: 	'home / HIBOLL STUDIO',
	cover: 		'./media/DrugoyVeter/GNC/DrVeter-GNC.jpg',
	container: 	'waveDrVet_GNC',
	marker: 	'GNC',
	curState:   'unplayed',
	},
	['Урок N1', 					'./media/DrugoyVeter/GNC/01 УРОК N1.mp3'],
	['Пражская весна', 				'./media/DrugoyVeter/GNC/02 ПРАЖСКАЯ ВЕСНА.mp3'],
	['Революция внутри себя', 		'./media/DrugoyVeter/GNC/03 РЕВОЛЮЦИЯ ВНУТРИ СЕБЯ.mp3'],
	['Спокойной ночи, малыши', 		'./media/DrugoyVeter/GNC/04 СПОКОЙНОЙ НОЧИ, МАЛЫШИ.mp3'],
]);

let drVeter_Sny = videoContent([
    {
    bandDiv:    'DrVeter',
    code: 		`<iframe width="560" height="315" src="https://www.youtube.com/embed/Li_S_JFUNGk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`,
    },
]);

let drVeter_Povodok = videoContent([
    {
    bandDiv:    'DrVeter',
    code: 		`<iframe width="560" height="315" src="https://www.youtube.com/embed/xeOh3lrL_F0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`,
    },
]);

let drVeter_Urok1 = videoContent([
    {
    bandDiv:    'DrVeter',
    code: 		`<iframe width="560" height="315" src="https://www.youtube.com/embed/0zC35vSC-WA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`,
    },
]);

let drVeter_PP = videoContent([
    {
    bandDiv:    'DrVeter',
    code: 		`<iframe width="560" height="315" src="https://www.youtube.com/embed/-u8snH-RhMA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`,
    },
]);

let LSazonov = musicBand([
	{
	bandName: 		'ЛЕВА САЗОНОВ',
	bandDiv: 		'LSazonov',
	genre: 			'acoustic',
	foto: 			'./media/LSazonov/LSaz 2.jpg',
	description: 	`<p>Акустические песни фронтмена группы «Dругой Ветер».</p>`,
	}
]);

let LSaz_TT = musicAlbum([
	{
	bandDiv: 	'LSazonov',
	albumName: 	'Тяв-тяв!',
	type: 		'single',
	date: 		'September 3, 2019',
	studio: 	'Seratonin Studio (Севастополь)',
	cover: 		'./media/LSazonov/LSaz_TT.jpg',
	container: 	'LSaz_TT',
	marker: 	'LS_TT',
	curState:   'unplayed',
	},
	['Тяв-тяв!', 					'./media/LSazonov/Тяв-тяв!.mp3'],
]);

let LSaz_MP = musicAlbum([
	{
	bandDiv: 	'LSazonov',
	albumName: 	'Млечный путь!',
	type: 		'single',
	date: 		'September 10, 2018',
	studio: 	'Галерная 20',
	cover: 		'./media/LSazonov/LSaz_MP.jpg',
	container: 	'LSaz_MP',
	marker: 	'LS_MP',
	curState:   'unplayed',
	},
	['Млечный путь', 		'./media/LSazonov/Млечный путь.mp3'],
]);

let LSaz_CH = musicAlbum([
	{
	bandDiv: 	'LSazonov',
	albumName: 	'Числа',
	type: 		'single',
	date: 		'Oktober 13, 2017',
	studio: 	'студия Интерзвук',
	cover: 		'./media/LSazonov/LSaz_CH.jpg',
	container: 	'LSaz_CH',
	marker: 	'LS_CH',
	curState:   'unplayed',
	},
	['Числа', 					'./media/LSazonov/Числа.mp3'],
]);

let MEANTRAITORS = musicBand([
	{
	bandName: 		'MEANTRAITORS',
	bandDiv: 		'MEANTRAITORS',
	genre: 			'psyhobilly',
	foto: 			'./media/Meantraitors/meantraitors3.jpg',
	description: 	`<p>Группа The Meantraitors, играющая в стиле Psychobilly, начала своё существование в далёком 1989 году в Санкт-Петербурге. Бессменный лидер The Meantraitors, Стас Богорад стал живой легендой для всех поклонников этого музыкального стиля, и его команда по праву считается одной из самых сильных и лучших не только в России, но и в Европе.</p>`,
	}
]); 

let MNTRTRS_DWH = musicAlbum([
	{
	bandDiv: 	'MEANTRAITORS',
	albumName: 	'Down with the human',
	type: 		'album',
	date: 		'April 12, 2019',
	studio: 	'HIBOLL STUDIO',
	cover: 		'./media/Meantraitors/DWH/MeantraitorsBWH.jpg',
	container: 	'waveMNTRTS_DWH',
	marker: 	'DWH',
	curState:   'unplayed',
	},
	['Down With the Human', 		'./media/Meantraitors/DWH/01 Down With the Human.mp3'],
	['The Voice of Bear', 			'./media/Meantraitors/DWH/02 The Voice of Bear.mp3'],
	['Lazy God', 					'./media/Meantraitors/DWH/03 Lazy God.mp3'],
	['Hell No', 					'./media/Meantraitors/DWH/04 Hell No.mp3'],
	['Hostage', 					'./media/Meantraitors/DWH/05 Hostage.mp3'],
	['Final Take Off', 				'./media/Meantraitors/DWH/06 Final Take Off.mp3'],
	['Nascar Fan', 					'./media/Meantraitors/DWH/07 Nascar Fan.mp3'],
	['Blind Injustice', 			'./media/Meantraitors/DWH/08 Blind Injustice.mp3'],
	['Cheering The Dawn', 			'./media/Meantraitors/DWH/09 Cheering The Dawn.mp3'],
	['No Woman means No Pain', 		'./media/Meantraitors/DWH/10 No Woman means No Pain.mp3'],
	['Guilty Forever', 				'./media/Meantraitors/DWH/11 Guilty Forever.mp3'],
]); 

let STiho = musicBand([
	{
	bandName: 		'СТАС ТИХО',
	bandDiv: 		'Stiho',
	genre: 			'singer-songwriter',
	foto: 			'./media/STiho/StasTiho.jpg',
	description: 	`<p>Рок-бард, гитарист и композитор из Москвы. Лауреат «Оскольской лиры», московского «Фестоса», «Парусов надежды». В разное время сотрудничал с музыкантами таких групп, как Оргия Праведников, Лена Тэ, Сплин, Tequillajazzz, Карелия, Танцы Минус и многих других.</p>`,
	}
]);

let STIHO_numbers = musicAlbum([
	{
	bandDiv: 	'Stiho',
	albumName: 	'ЧИСЛА',
	type: 		'album',
	date: 		'November 16, 2018',
	studio: 	'Галерная 20 / TreKiNorda studio',
	cover: 		'./media/STiho/Numbers/ST_numbers.jpg',
	container: 	'waveST_num',
	marker: 	'ST_num',
	curState:   'unplayed',
	},
	['Числа', 			'./media/STiho/Numbers/01 ЧИСЛА.mp3'],
	['Горят мосты', 	'./media/STiho/Numbers/02 ГОРЯТ МОСТЫ.mp3'],
	['Мельниц ход', 	'./media/STiho/Numbers/03 МЕЛЬНИЦ ХОД.mp3'],
	['Белая луна', 		'./media/STiho/Numbers/04 БЕЛАЯ ЛУНА.mp3'],
	['Джек', 			'./media/STiho/Numbers/05 ДЖЕК.mp3'],
]);

let STIHO_PRoofs = musicAlbum([
	{
	bandDiv: 	'Stiho',
	albumName: 	'Питерские крыши',
	type: 		'album',
	date: 		'April 1, 2016',
	studio: 	'Just Studio',
	cover: 		'./media/STiho/PRoofs/PRoofs.jpg',
	container: 	'waveST_PRoofs',
	marker: 	'PRF',
	curState:   'unplayed',
	},
	['Питерские крыши', 			'./media/STiho/PRoofs/01 Питерские крыши.mp3'],
	['Транцендентное состояние', 	'./media/STiho/PRoofs/02 Транцендентное состояние.mp3'],
	['Брошенные', 					'./media/STiho/PRoofs/03 Брошенные.mp3'],
	['Светопоклонник', 				'./media/STiho/PRoofs/04 Светопоклонник.mp3'],
	['Эхо', 						'./media/STiho/PRoofs/05 Эхо.mp3'],
	['Питерские Крыши(guitar version)', './media/STiho/PRoofs/06 Питерские крыши (Unplugged version).mp3'],
]);

let STIHO_BKBG = musicAlbum([
	{
	bandDiv: 	'Stiho',
	albumName: 	'Без крыльев и без головы',
	type: 		'album',
	date: 		'September, 2014',
	studio: 	'студия ИнтерЗвук',
	cover: 		'./media/STiho/BKBG/ST_BKBG.jpg',
	container: 	'waveST_BKBG',
	marker: 	'ST_BKBG',
	curState:   'unplayed',
	},
	['Приходит осень', 				'./media/STiho/BKBG/01 Приходит осень.mp3'],
	['Корабли (Modern version)', 	'./media/STiho/BKBG/02 Корабли (Modern version).mp3'],
	['Первая любовь', 				'./media/STiho/BKBG/03 Первая любовь.mp3'],
	['Подружка невесты', 			'./media/STiho/BKBG/04 Подружка невесты.mp3'],
	['Без крыльев и без головы', 	'./media/STiho/BKBG/05 Без крыльев и без головы.mp3'],
	['Тысяча художников', 			'./media/STiho/BKBG/06 Тысяча художников.mp3'],
	['Танцуй', 						'./media/STiho/BKBG/07 Танцуй.mp3'],
	['Мельниц ход', 				'./media/STiho/BKBG/08 Мельниц ход.mp3'],
	['Девять вокзалов', 			'./media/STiho/BKBG/09 Девять вокзалов.mp3'],
	['Пыль', 						'./media/STiho/BKBG/10 Пыль.mp3'],
	['Корабли (Classic version)', 	'./media/STiho/BKBG/11 Корабли (Classic version).mp3'],

]);

let Dunkan = musicBand([
	{
	bandName: 		'ДУНКАН',
	bandDiv: 		'Dunkan',
	genre: 			'rock',
	foto: 			'./media/Dunkan/dunkan 2.jpg',
	description: 	``,
	}
]);

let DUNKAN_VAHTA = musicAlbum([
	{
	bandDiv: 	'Dunkan',
	albumName: 	'Вахта',
	type: 		'album',
	date: 		'September 20, 2018',
	studio: 	'TreKiNorda / DOBROLET / ИнтерЗвук',
	cover: 		'./media/Dunkan/Vahta/Dun_Vahta.jpg',
	container: 	'waveDN_V',
	marker: 	'DNVah',
	curState:   'unplayed',
	},
	['Крылья', 				'./media/Dunkan/Vahta/01 КРЫЛЬЯ.mp3'],
	['Магеллан', 			'./media/Dunkan/Vahta/02 МАГЕЛЛАН.mp3'],
	['Остановка сердца', 	'./media/Dunkan/Vahta/03 ОСТАНОВКА СЕРДЦА.mp3'],
	['Ксанф', 				'./media/Dunkan/Vahta/04 КСАНФ.mp3'],
	['Изнутри', 			'./media/Dunkan/Vahta/05 ИЗНУТРИ.mp3'],
	['Молодой актер', 		'./media/Dunkan/Vahta/06 МОЛОДОЙ АКТЕР.mp3'],
	['Камни', 				'./media/Dunkan/Vahta/07 КАМНИ.mp3'],
	['Первые стихи', 		'./media/Dunkan/Vahta/08 ПЕРВЫЕ СТИХИ.mp3'],
	['Новые полярники', 	'./media/Dunkan/Vahta/09 НОВЫЕ ПОЛЯРНИКИ.mp3'],
	['Ветер с вершин', 		'./media/Dunkan/Vahta/10 ВЕТЕР С ВЕРШИН.mp3'],
	['Вальс врачей', 		'./media/Dunkan/Vahta/11 ВАЛЬС ВРАЧЕЙ.mp3'],
	['Река', 				'./media/Dunkan/Vahta/12 РЕКА.mp3'],

]);

let erni_Sh = musicBand([
	{
	bandName: 		'erni_Sh',
	bandDiv: 		'erni_Sh',
	genre: 			'electronic',
	foto: 			'./media/erni_Sh/erni_Sh.jpg',
	description: 	`<p>erni_Sh — экспериментальный авторский проект звукорежиссера Эрнеста Шеремет (г.Санкт-Петербург). В его лаборатории смешивались звуковые элементы десятков альбомов/синглов/EP артистов самых разнообразных жанров. В этих исследованиях и была обнаружена новая музыкальная концепция.</p>
		<br>
		<p>Ритмы и мелодии точно преломления звукового окружения мегаполиса. <br>
		Ассоциативные ряды важнее математических. И так же выверены.<br>
		Все, что напоминают звуки, и есть музыка.</p>
		<br>
		<p>Музыка - каждый.<br>
		Все остальное - имена.</p>`,
	}
]);

let erni_Slepok = musicAlbum([
	{
	bandDiv: 	'erni_Sh',
	albumName: 	'Слепок',
	type: 		'single',
	date: 		'April  19, 2019',
	studio: 	'HIBOLL STUDIO',
	cover: 		'./media/erni_Sh/Slepok_cover.jpg',
	container: 	'wave_ESlepok',
	marker: 	'ERS',
	curState:   'unplayed',
	},
	['Слепок', 	'./media/erni_Sh/erni_Sh - Слепок.mp3'],
]);

let erni_Lestnica = musicAlbum([
	{
	bandDiv: 	'erni_Sh',
	albumName: 	'Лестница',
	type: 		'single',
	date: 		'August 30, 2019',
	studio: 	'HIBOLL STUDIO',
	cover: 		'./media/erni_Sh/Lestnica_cover.jpg',
	container: 	'wave_ELes',
	marker: 	'ERL',
	curState:   'unplayed',
	},
	['Лестница', 	'./media/erni_Sh/erni_Sh - Лестница.mp3'],
]);


let KEIPA = musicBand([
	{
	bandName: 		'KEIPA',
	bandDiv: 		'KEIPA',
	genre: 			'melancholick rock',
	foto: 			'./media/KEIPA/KEIPA2.jpg',
	description: 	``,
	}
]);

let KEIPA_tam = musicAlbum([
	{
	bandDiv: 	'KEIPA',
	albumName: 	'Там, где жизнь',
	type: 		'album',
	date: 		'April 1, 2016',
	studio: 	'студия ИнтерЗвук',
	cover: 		'./media/KEIPA/ТГЖ/Keipa-ТГЖ.jpg',
	container: 	'waveKP_T',
	marker: 	'KPTam',
	curState:   'unplayed',
	},
	['Глаза змеи', 			'./media/KEIPA/ТГЖ/01 ГЛАЗА ЗМЕИ.mp3'],
	['На юг', 				'./media/KEIPA/ТГЖ/02 НА ЮГ.mp3'],
	['Там, где жизнь', 		'./media/KEIPA/ТГЖ/03 ТАМ ГДЕ ЖИЗНЬ.mp3'],
	['Понедельник', 		'./media/KEIPA/ТГЖ/04 ПОНЕДЕЛЬНИК.mp3'],
	['Выход', 				'./media/KEIPA/ТГЖ/05 ВЫХОД.mp3'],
	['Антракт', 			'./media/KEIPA/ТГЖ/06 АНТРАКТ.mp3'],
	['Меня здесь нет', 		'./media/KEIPA/ТГЖ/07 МЕНЯ ЗДЕСЬ НЕТ.mp3'],
	['Птаха', 				'./media/KEIPA/ТГЖ/08 ПТАХА.mp3'],
	['Я чувствую тебя', 	'./media/KEIPA/ТГЖ/09 Я ЧУВСТВУЮ ТЕБЯ.mp3'],
	['Круг', 				'./media/KEIPA/ТГЖ/10 КРУГ.mp3'],
]);

let CorRLMS = musicBand([
	{
	bandName: 		'CORRODED REALMS',
	bandDiv: 		'CorRLMS',
	genre: 			'metal',
	foto: 			'./media/CRealms/CORRODED REALMS.jpg',
	description: 	``,
	}
]); 

let CorRLMS_NHTM = musicAlbum([
	{
	bandDiv: 	'CorRLMS',
	albumName: 	'No Healing for Tortured Mind',
	type: 		'album',
	date: 		'october 6, 2017',
	studio: 	'ИнтерЗвук / home',
	cover: 		'./media/CRealms/NHTM/NHTM_cover.jpg',
	container: 	'waveCorRLMS_NHTM',
	marker: 	'NHTM',
	curState:   'unplayed',
	},
	['Cellardoor', 			'./media/CRealms/NHTM/01 Cellardoor.mp3'],
	['Grenade in Mouth', 	'./media/CRealms/NHTM/02 Grenade in Mouth.mp3'],
	['Seeds', 				'./media/CRealms/NHTM/03 Seeds.mp3'],
	['Rain for Dead', 		'./media/CRealms/NHTM/04 Rain for Dead.mp3'],
	['Bone Tomahawk', 		'./media/CRealms/NHTM/05 Bone Tomahawk.mp3'],
	['Sea Inside', 			'./media/CRealms/NHTM/06 Sea Inside.mp3'],
	['Stone to Fire', 		'./media/CRealms/NHTM/07 Stone to Fire.mp3'],
	['Filth', 				'./media/CRealms/NHTM/08 Filth.mp3'],
	['Kid Sorrow', 			'./media/CRealms/NHTM/09 Kid Sorrow.mp3'],
	['Soul Pirate', 		'./media/CRealms/NHTM/10 Soul Pirate.mp3'],
]); 
