<?php
/* 
    Program Name: PHP Nepal Adminstrataive Division,
    Program Author: Niyoj Oli,
    Author URL: fb.com/oliniyoj,
    Program License: MIT License,
    Program Description: 
*/

class AdminstrativeDivison {
    public $province = array(
        "province1",
        "province2",
        "bagmati",
        "gandaki",
        "lumbini",
        "karnali",
        "sudurpaschim"
    );

    public $district = array(
        "taplejung",
        "panchthar",
        "ilam",
        "jhapa",
        "morang",
        "sunsari",
        "dhankuta",
        "terhathum",
        "sankhuwasabha",
        "bhojpur",
        "solukhumbu",
        "okhaldhunga",
        "khotang",
        "udayapur",
        "saptari",
        "siraha",
        "dhanusha",
        "mahottari",
        "sarlahi",
        "bara",
        "parsa",
        "rautahat",
        "sindhuli",
        "ramechhap",
        "dolakha",
        "sindhupalchok",
        "kavrepalanchok",
        "lalitpur",
        "bhaktapur",
        "kathmandu",
        "nuwakot",
        "rasuwa",
        "dhading",
        "makwanpur",
        "chitwan",
        "gorkha",
        "lamjung",
        "tanahun",
        "syangja",
        "kaski",
        "manang",
        "mustang",
        "myangdi",
        "nawalpur",
        "parbat",
        "baglung",
        "gulmi",
        "palpa",
        "parasi",
        "rupandehi",
        "kapilvastu",
        "arghakhanchi",
        "pyuthan",
        "rolpa",
        "eastern rukum",
        "banke",
        "bardiya",
        "dang",
        "western rukum",
        "salyan",
        "surkhet",
        "dailekh",
        "jajarkot",
        "dolpa",
        "jumla",
        "kalikot",
        "mugu",
        "humla",
        "bajura",
        "bajhang",
        "achham",
        "doti",
        "kailali",
        "kanchanpur",
        "dadeldhura",
        "baitadi",
        "darchula"
    );

    public $provinceHQ = array(
        "biratnagar",
        "jankpur",
        "hetauda",
        "pokhara",
        "deukhuri",
        "birendranagar",
        "dhangadhi"
    );

    public $districtHQ = array(
        "taplejung",
        "phidim",
        "ilam",
        "bhadrapur",
        "biratnagar",
        "inaruwa",
        "dhankuta",
        "myanglung",
        "khandbari",
        "bhojpur",
        "dudhkunda",
        "siddhicharan",
        "diktel",
        "triyuga",
        "rajbiraj",
        "siraha",
        "janakpur",
        "jaleshwar",
        "malangwa",
        "kalaiya",
        "birganj",
        "gaur",
        "kamalamai",
        "manthali",
        "bhimeshwar",
        "chautara",
        "dhulikhel",
        "lalitpur",
        "bhaktapur",
        "kathmandu",
        "bidur",
        "dhunche",
        "nilkantha",
        "hetauda",
        "bharatpur",
        "gorkha",
        "besisahar",
        "byas",
        "putalibazar",
        "pokhara",
        "chame",
        "jomsom",
        "beni",
        "kawasoti",
        "kusma",
        "baglung",
        "resunga",
        "tansen",
        "ramgram",
        "siddharthanagar",
        "kapilvastu",
        "sandhikharka",
        "pyuthan",
        "liwang",
        "rumkumkot",
        "nepalganj",
        "gulariya",
        "tribhuwannagar",
        "musikot",
        "salyan",
        "birendrangar",
        "narayan",
        "khalanga",
        "dunai",
        "chandannath",
        "manma",
        "gamgadhi",
        "simikot",
        "martadi",
        "jayaprithivi",
        "mangalsen",
        "dipayal silgadhi",
        "dhangadhi",
        "bhimdatta",
        "amargadhi",
        "daharathchand",
        "api"
    );

    public $municipality = array(
        "phungling", //taplejung ends here
        "phidim", //panchthar ends here
        "ilam",
        "deumai",
        "mai",
        "suryodaya", //ilam ends here
        "mechinagar",
        "bhadrapur",
        "birtamod",
        "arjundhara",
        "kankai",
        "shivasatakshi",
        "gauradha",
        "damak", //jhapa ends here
        "sundarharaicha",
        "belbari",
        "pathari-sanischare",
        "urlabari",
        "rangeli",
        "letang",
        "ratuwamai",
        "sunawarshi", //morang ends here
        "inaruwa",
        "duhabi",
        "ramdhuni",
        "barahachhetra", //sunsari ends here
        "dhankuta",
        "pakhribas",
        "mahalaxmi", //dhankuta ends here
        "myanglung",
        "laligurans",//tehrathum ends here
        "chainpur",
        "dharmadevi",
        "khandbari",
        "madi",
        "panchkhapan",//sankhuwasabha  ends here
        "bhojpur",
        "shadanand",//bhojpur ends here
        "solududhkunda",//solukhumbu ends here
        "siddhicharan",//okhaldhunga ends here
        "diktel rupakot majhuwagadhi",
        "halesi tuwachung",//khotang ends here
        "triyuga",
        "katari",
        "chaudandigadhi",
        "belaka", //udayapur ends  here
        "bodebarsain",
        "dakneshwori",
        "hanumannagar kankalini",
        "kanchanrup",
        "khadak",
        "sambhunath",
        "surunga",
        "rajbiraj", //saptari ends here
        "lahan",
        "dhangadhimai",
        "siraha",
        "golbazar",
        "mirchaiya",
        "kalyanpur",
        "karjanha",
        "sukhipur", //siraha ends here
        "chhireshwarnath",
        "ganeshman charanath",
        "dhanusadham",
        "nagarain",
        "mithila",
        "bideha",
        "sahidnagar",
        "sabaila",
        "kamala",
        "mithila bihari",
        "hansapur", //dhanusha ends here 
        "aurahi",
        "balawa",
        "bardibas",
        "bhangaha",
        "gaushala",
        "jaleshwor",
        "loharpatti",
        "manarashiswa",
        "matihani",
        "ramgopalpur",
        "ekdara", //mahottari ends here
        "kolhabi",
        "nijgadh",
        "mahagadhimai",
        "simraungadh",
        "pacharauta", //bara ends here
        "bahudarmai",
        "parsagadhi",
        "pokhariya", //parsa ends here
        "baudhimai",
        "brindaban",
        "chandrapur",
        "dewahi gonahi",
        "gadhimai",
        "garuda",
        "gaur",
        "gujara",
        "ishanath",
        "katahariya",
        "madhav narayan",
        "maulapur",
        "paroha",
        "phatuwa bijayapur",
        "rajdevi",
        "rajpur", //rauthata ends here
        "manthali",
        "ramechhap", //ramechhap ends here
        "kamalamai",
        "dudhauli", //sindhuli ends here
        "bhimeswor",
        "jiri", //dolakha ends here
        "chautara sangachowkgadi",
        "bahrabise",
        "melamchi", //sindhupalchok ends here
        "dhulikhel",
        "banepa",
        "panauti",
        "panchkhal",
        "namobuddha",
        "mandandeupur", //kavrepalanchok ends here 
        "konjyoson",
        "bagmati",
        "mahankal", //lalitpur ends here
        "bhaktapur",
        "changunarayan",
        "madhyapur thimi",
        "suryabinayak", //bhaktapur ends here
        "budanilakantha",
        "chandragiri",
        "dakshinkali",
        "gokarneshwar",
        "kageshwari manohara",
        "kirtipur",
        "nagarjun",
        "shankharapur",
        "tarakeshwar",
        "tokha", //kathmandu ends here
        "bidur",
        "belkotgadhi", //nuwakot ends here
        "dhunibeshi",
        "nilkantha", //dhading ends here
        "thaha", //makwanpur ends here
        "kalika",
        "khairahani",
        "madi",
        "ratnanagar",
        "rapti", //chitwan ends here
        "gorkha",
        "palungtar",//gorkha ends here
        "besisahar",
        "madhaya nepal",
        "rainas",
        "sundarbazar",//lamjung ends here
        "bhanu",
        "bhimad",
        "byas",
        "shuklagandaki",//tanahun ends here
        "galyang",
        "chapakot",
        "putalibazar",
        "bheerkot",
        "waling", //syangja ends here
        "beni", //myagdi ends here   
        "kawasoti",
        "gaindakot",
        "devachuli",
        "madhyabindu",//nawalpur ends here
        "kushma",
        "phalewas",//parbat ends here
        "baglung",
        "dhorpatan",
        "galkot",
        "jaimuni",//baglung ends here
        "musikot",
        "resunga",//gulmi ends here
        "tansen",
        "rampur",//palpa ends here
        "bardghat",
        "ramgram",
        "sunwal",//parasi ends here
        "devdaha",
        "lumbini sanskritik",
        "sainamaina",
        "siddharthanagar",
        "tilottama",//rupandehi ends here
        "kapilvastu",
        "banganga",
        "buddhabhumi",
        "shivaraj",
        "krishnanagar",
        "maharajgunj",//kapilvastu ends here 
        "sandhikharka",
        "sitganga",
        "bhumikasthan",//argakhanchi ends here
        "pyuthan",
        "swargadwari",//pyuthan ends here
        "rolpa",//rolpa ends here
        "kohalpur", //banke ends here
        "gulariya",
        "rajapur",
        "madhuwan",
        "thakurbaba",
        "basgadhi",
        "barbardiya",//bardiya ends here
        "lamahi",//dang ends here
        "musikot",
        "chaurjahari",
        "aathbiskot",//estern rukum ends here
        "shaarda",
        "bagchaur",
        "bangad kupinde",//salyan ends here
        "birendrangar",
        "bheriganga",
        "gurbha kot",
        "pachapuri",
        "lekbesi",//surkhet ends here
        "bheri",
        "chhedagad",
        "nalgad",//jajrkot ends here
        "narayan",
        "dullu",
        "aathbis",
        "chamunda bindrasaini",//dailekh ends here
        "thuli bheri",
        "tripurasundari",//dolpa ends here
        "chandannath",//jumla ends here
        "khandachakra",
        "raskot",
        "tilagufa",//kalikot ends here
        "chhayanath rara",//mugu ends here
        "badimalika",
        "triveni",
        "budhiganga",
        "budhinanda",//bajura ends here
        "jaya prithivi",
        "bungal", //bajhang ends here
        "mangalsen",
        "kamalbazar",
        "sanfebagar",
        "panchadewal binayak",//accham ends here
        "dipayal silgadhi",
        "shikhar",//doti ends here
        "lamki chuha",
        "tikapur",
        "ghodaghodi",
        "bhajani",
        "godawari",
        "gauriganga",//kailali ends here 
        "bedkot",
        "belauri",
        "bhimdatta",
        "mahakali",
        "shuklaphanta",
        "krishnapur",
        "punarbas",//kanchanpur ends here
        "amargadhi",
        "parshuram",//dadeldhura ends here
        "dasharathchand",
        "patan",
        "melauli",
        "purchaudi",//baitadi ends here
        "mahakali",
        "shaliyasikhar"//darchula ends here
    );

    public $vdc = array(
        "aathrai tribeni",
        "sidingwa",
        "phaktanglung",
        "mikkwakhola",
        "meringden",
        "maiwakhola",
        "pathibhara yangwarak",
        "sirijangha",//taplejung ends here
        "hilihang",
        "kummayak",
        "miklajung",
        "phalelung",
        "phalgunanda",
        "tumbewa",
        "yangawarak",//panchthar ends here
        "phakphokthum",
        "mai jogmai",
        "chulachuli",
        "rong",
        "mangsebung",
        "sandakpur", //ilam ends here
        "buddhashanti",
        "haldibari",
        "kachankawal",
        "barhadashi",
        "jhapa",
        "gauriganj",
        "kamal", //jhapa ends here
        "kerabari",
        "miklajung",
        "kanepokhari",
        "budhiganga",
        "gramthan",
        "katahari",
        "dhanpalthan",
        "jahada", //morang ends here
        "koshi",
        "gadhi",
        "barju",
        "bhokraha",
        "harinagara",
        "dewangang", //sunsari ends here
        "sangurigadhi",
        "chaubise",
        "khalsa chhintang sahidbhumi",
        "chhathar jorpati",//dhankuta ends here
        "aathrai",
        "chhathar",
        "phedap",
        "menchhayayem",//tehrathum ends here
        "bhotkhola",
        "chichila",
        "makalu",
        "savapokhari",
        "silichong",//sankhusabha  ends here
        "hatuwagadhi",
        "ramprasad rai",
        "aamchok",
        "tyamke maiyunmm",
        "arun",
        "pauwadungma",
        "salpasilichho", //bhojpur ends her
        "dudhakushika",
        "necha salyan",
        "dudhkoshi",
        "maha kulung",
        "sotang",
        "likhu pike",
        "khumbu pasanglhamu",//solukhumbu ends here
        "andheri narayansthan",
        "baksa",
        "balakhu",
        "barnalu",
        "baruneshwor",
        "betinee",
        "bhadaure",
        "bhussinga",
        "bigutar",
        "bilandu",
        "chyanam",
        "diyale",
        "fediguth",
        "fulbari",
        "gamnangtar",
        "harkapur",
        "jantarkhani",
        "jyamire",
        "kalikadevi",
        "khijikati",
        "katunje",
        "ketuker",
        "khiji",
        "chandeshwori",
        "khijifalate",
        "kuibhir",
        "kuntadevi",
        "madhavpur",
        "mamkha",
        "manebhanjyang",
        "moli",
        "mulkharka",
        "narmedeshwor",
        "okhaldhunga",
        "palapu",
        "patle",
        "salleri",
        "serna",
        "shreechaur",
        "singhadevi",
        "sinseri",
        "taluwa",
        "tarkerabari",
        "thakle",
        "thoksela",
        "thulachhap",
        "ubu",
        "yasam",//okhaldhunga ends here
        "khotehang",
        "diprung",
        "aiselukharka",
        "jantedhunga",
        "kepilasgadhi",
        "barahpokhari",
        "rawabesi",
        "sakela",//khotanf ends here   
        "udayapurgadhi",
        "rautamai",
        "tapli",
        "limchungbung", //udayapur ends  here
        "agnisaira krishnasavaran",
        "balan-bihul",
        "rajgadh",
        "bishnupur",
        "chhinnamasta",
        "mahadeva",
        "rupani",
        "tilathi koiladi",
        "tirhut", //saptari ends here
        "bhagwanpur",
        "aurahi",
        "bishnupur",
        "bariyarpatti",
        "lakshmipur",
        "naraha",
        "sakhuwanankar",
        "arnama",
        "navarajpur",//siraha ends here
        "janaknandani",
        "bateshwar",
        "mukhiyapatti",
        "lakshminya",
        "aurahi",
        "dhanauji", //dhanusha ends here
        "mahottari",
        "pipara",
        "samsi",
        "sonama", //mahottari ends here
        "pheta",
        "bishrampur",
        "parasauni",
        "adarsh kotwal",
        "karaiyamai",
        "devtal",
        "parwanipur",
        "baragadhi",
        "suwarna", //bara ends here
        "bindabasini",
        "dhobini",
        "chhipaharmai",
        "jagarnathpur",
        "jirbhawani",
        "kalikamai",
        "pakaha mainpur",
        "paterwa sugauli",
        "sakhuwa prasauni",
        "thori", //parsa ends here
        "durga bhagwati",
        "yamunamai", //rautahat ends here
        "umakunda",
        "khandadevi",
        "gokulganga",
        "doramba",
        "likhu",
        "sunapati", //ramechhap ends here
        "sunkoshi",
        "hariharpur gadhi",
        "tinpatan",
        "marin",
        "golanjor",
        "phikkal",
        "ghyanglekh", //sindhuli ends here
        "kalinchok",
        "melung",
        "bigu",
        "gaurishankar",
        "baiteshwor",
        "sailung",
        "tamakoshi", //dolakha ends here
        "balephi",
        "sunkoshi",
        "indrawati",
        "jugal",
        "panchpokhari thangpal",
        "bhotekoshi",
        "lisankhu",
        "helambu",
        "tripurasundari", //sindhupalchok ends here
        "khani khola",
        "chauri deurali",
        "temal",
        "bethanchok",
        "bhumlu",
        "mahabharat",
        "roshi", //kavreplanchok ends here
        "mahalaxmi",
        "godawari", //lalitpur ends here
        "kakani",
        "panchakanya",
        "likhu",
        "dupcheshwar",
        "shivapuri",
        "tadi",
        "suryagadhi",
        "tarkeshwar",
        "kispang",
        "myagang", //nuwakot ends here
        "uttargaya",
        "kalika",
        "gosaikunda",
        "naukunda",
        "aamachhodingmo", //rasuwa ends here
        "khaniyabas",
        "gajuri",
        "galchhi",
        "hangajamuna",
        "jwalamukhi",
        "thakre",
        "netrawati dabjong",
        "benighar rorang",
        "rubi valley",
        "siddhalek",
        "tripurasundari", //dhading ends here
        "bhimpedi",
        "makawanpurgadhi",
        "manahari",
        "raksirang",
        "bakaiya",
        "bagmati",
        "kailash",
        "indrasarowar", //makwanpr ends here
        "ichchhakamana", //chitwan ends here
        "sulikot",
        "siranchowk",
        "ajirkot",
        "tsum nubri",
        "dharche",
        "bhimsen thapa",
        "sahid lakhan",
        "aarughat",
        "gandaki", //gorkha ends here
        "dordi",
        "dudhpokhari",
        "kwhlosothar",
        "marsyandi",//lamjung ends here
        "anbu khaireni",
        "devghat",
        "bandipur",
        "rishing",
        "ghiring",
        "myagde",//tanahun ends here
        "arjun chaupari",
        "aandhikhola",
        "kaligandaki",
        "phedikhola",
        "harinas",
        "biruwa",//Syanja ends here
        "annapurna",
        "machhapuchchhre",
        "madi",
        "rupa",//kaski ends here
        "chame",
        "nason",
        "narpa bhumi",
        "manang ngisyang",//manang ends  here
        "gharpajhong",
        "thasang",
        "barhagaun muktichhetra",
        "lomanthang",
        "lo-ghekar damodarkunda",//mustang ends here
        "annapurna",
        "dhaulagiri",
        "mangala",
        "malika",
        "raghuganga",//myagdi ends here
        "baudikali",
        "bulingtar",
        "binayi tribeni",
        "hupsekot", //nawalpur ends here
        "jaljala",
        "paiyun",
        "mahashila",
        "modi",
        "bihadi",//parbat ends here
        "bareng",
        "khathekhola",
        "taman khola",
        "tara khola",
        "nisikhola",
        "badigad",//baglung ends here        
        "ishma",
        "kaligandaki",
        "gulmi darbar",
        "satyawati",
        "chandrakot",
        "rurukshetra",
        "chhatrakot",
        "dhurkot",
        "madane",
        "malika",//gulmi ends here
        "rainadevi",
        "ripdikot",
        "bagnaskali",
        "rambha",
        "purbakhola",
        "nisdi",
        "mathagadi",
        "tinahu",//palpa ends here
        "susta",
        "palhinandan",
        "pratappur",
        "sarawal", //parasi ends here
        "gaidahawa",
        "kanchan",
        "kotahimai",
        "marchawari",
        "mayadevi",
        "omsatiya",
        "rohini",
        "sammarimai",
        "siyari",
        "suddodhan",//rupandehi ends here
        "mayadevi",
        "yashodhara",
        "suddhodhan",
        "bijaynagar",//kapilvastu ends here
        "chhatradev",
        "panini",
        "malarani",//arghakhanchi ends here
        "gaumukhi",
        "mandwi",
        "sarumarani",
        "mallarani",
        "naubahini",
        "jhimruk",
        "airawati",
        "runtigadhi",
        "triveni",
        "lungri",
        "sunchhahari",
        "thabang",
        "madi",
        "gangadev",
        "paribartan",//ropla ends here
        "bhume",
        "putha uttarganga",
        "sisne",//eastern rukum ends here
        "rapti-sonari",
        "narainapur",
        "duduwa",
        "janaki",
        "khajura",
        "baijanath",//banke ends here
        "badhaiyatal",
        "geruwa",//bardiya ends here
        "gadhawa",
        "rajpur",
        "shantinagar",
        "rapti",
        "banglachuli",
        "dangisharan",
        "babai",//dang ends here
        "banphikot",
        "tribeni",
        "sani bheri",//rukum ends here
        "kalimati",
        "tribeni",
        "kapurkot",
        "chatreshwari",
        "kumakh",
        "siddha kumakh",
        "darma",//slayan end here
        "chaukune",
        "barahatal",
        "chingad",
        "simta",//surkhet ends here
        "thantikandh",
        "bhairabi",
        "mahabu",
        "naumule",
        "dungeshwar",
        "gurans",
        "bhagawatimai",//dailekh ends here
        "junichande",
        "kushe",
        "barekot",
        "shivalaya",//jajarkot ends here
        "dolpo buddha",
        "she phoksundo",
        "jagadulla",
        "mudkechula",
        "kaike",
        "chharka tangsong",//dolpa ends here
        "kankasundari",
        "sinja",
        "hima",
        "tila",
        "guthichaur",
        "tatopani",
        "patarasi",//jumla ends here
        "pachalijharna",
        "sanni triveni",
        "narharinath",
        "shubha kalika",
        "mahawai",
        "plata",//kalikot ends here
        "mugum karmarong",
        "soru",
        "khatyad",//mugu ends here
        "simkot",
        "namkha",
        "kharpunath",
        "sarkegad",
        "chankheli",
        "adanchuli",
        "tajakot",//humla ends here
        "gaumul",
        "triveni",
        "jagnnath",
        "swamikartik",
        "chhdedaha",
        "himali",//bajura  ends  here
        "talkot",
        "masta",
        "khaptadchhanna",
        "thalara",
        "bittadchir",
        "surma",
        "chhabis pathibhera",
        "burgathali",
        "kedarsyu",
        "saipal",//bajhang ends here
        "ramaroshan",
        "chaurpati",
        "turmakhand",
        "mellekh",
        "dhakari",
        "bannigadi jayagad",//achham ends here
        "purbichauki",
        "badikedar",
        "jorayal",
        "sayal",
        "aadarsha",
        "dr ki singh",
        "bogatan",//doti ends her
        "janaki",
        "bardagoriya",
        "mohanyal",
        "kailari",
        "joshipur",
        "chure",//kailali ends here
        "laljhadi",
        "beldandi",//kanchanpur ends here
        "aalitaal",
        "bhageshwar",
        "navadurga",
        "ajaymeru",
        "ganyapadhura",//dadeldhura ends here
        "sunarya",
        "sigas",
        "shivnath",
        "pancheshwor",
        "dogdakedar",
        "dilasaini",//baitadi ends here
        "malikarjun",
        "apihimal",
        "duhun",
        "naugad",
        "marma",
        "lekam",
        "vyans"//darchula ends here
    );  

    public $metropolitian = array(
        "biratnagar", //morang ends here
        "lalitpur", //lalitpur ends here
        "kathmandu", //kathmandu ends here
        "bharatpur", //chitwan ends here
        "pokhara" //kasku ends here
    );

    public $sub_metropolitian = array(
        "itahari",
        "dharan", //sunsari ends here
        "janakpur", //dhanusha ends here
        "kalaiya",
        "jeetpur simara",//bara  ends here
        "birgunj",//parsa ends here
        "hetauda", //makwanpur ends here
        "butwal", //rupandehi ends here
        "nepalgunj", //banke ends here
        "ghorahi",
        "tulsipur",//dang ends  here
        "dhangadhi"//kailali ends here
    );

    public function list_province($sort = false) {
        $province_array = $this->province;

        ($sort)? asort($province_array): false;
        return $province_array;
    }

    public function list_province_hq($sort = false) {
        $province_hq = $this->provinceHQ;

        ($sort)? asort($province_hq): false;
        return $province_hq;
    }

    public function list_district($province_req = "all", $sort = false) {
        $province_array = $this->province;
        $district_array = $this->district;

        if($province_req == "all") {
           ($sort)? asort($district_array): false;
           return $district_array; 
        }

        if(!in_array(strtolower($province_req), $province_array)) {
            return false;
        }

        $province_req = array_search($province_req, $province_array);
        $breakpoint = array("taplejung", "udayapur", "rautahat", "chitwan", "baglung", "dang", "humla", "darchula");
        $return_array = ($province_req == 0)? array("taplejung"): array();
        
        foreach($district_array as $district) {
            if(isset($push_status)) {
                ($push_status)? array_push($return_array, $district): false;
            } else {
                $push_status= false;
            }

            if($district == $breakpoint[$province_req+1]) {
                break;
            }
            if(empty($push_status)) {
                $push_status = ($district == $breakpoint[$province_req])?true: false;
            }
        }

        ($sort)? asort($return_array): false;
        return $return_array;
    }

    public function list_municipality($district_req = "all", $sort = false) {
        $district_array = $this->district;
        $mun_array = $this->municipality;
        
        $district_req = trim(strtolower($district_req));
        
        if($district_req == "all") {
            ($sort)? asort($mun_array): false;
            return $mun_array;
        }

        if(!in_array($district_req,  $district_array)){
            return false;
        }

        $breakpoint = array("phungling", "phungling", "phidim", "suryodaya", "damak", "sunawarshi", "barahachhetra", "mahalaxmi", "laligurans", "panchkhapan", "shadanand", "solududhkunda", "siddhicharan", "halesi tuwachung", "belaka", "rajbiraj",  "sukhipur", "dhanusha", "ekdara", "pacharauta", "pokhariya", "rajpur", "ramechhap", "dudhauli", "jiri", "melamchi", "mandandeupur", "mahankal", "suryabinayak", "tokha", "belkotgadhi", "nilkantha", "thaha", "rapti", "palungtar", "sundarbazar", "shuklagandaki", "waling", "beni", "madhyabindu", "phalewas", "jaimuni", "resunga", "rampur", "sunwal", "tilottama", "maharajgunj", "bhumikasthan", "swargadwari", "rolpa", "kohalpur", "barbardiya", "lamahi", "aathbiskot");
        $district_req = array_search($district_req, $district_array);
        $return_array = array();

        foreach($mun_array as $mun) {
            if(isset($push_status)) {
                ($push_status)? array_push($return_array, $mun): false;
            } else {
                $push_status= false;
            }

            if($mun == $breakpoint[$district_req+1]) {
                break;
            }
            if(empty($push_status)) {
                $push_status = ($mun == $breakpoint[$district_req])?true: false;
            }
        }
        
        ($sort)? asort($return_array): false;
        return $return_array;
    }

    public function list_municiplaity_province($province_req, $type = "all", $sort = false) {

    }

    public function get_info($divison, $type) {

    }
}

?>