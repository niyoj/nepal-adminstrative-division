<?php

class AdminstrativeDivision {
    $province = array(
        "province no. 1",
        "province no. 2",
        "bagmati",
        "gandaki",
        "lumbini",
        "karnali",
        "sudurpaschim"
    );

    $district = array(
        "taplejung",//
        "panchthar",//
        "ilam",//
        "jhapa",//
        "morang",//
        "sunsari",//
        "dhankuta", //
        "terhathum",//
        "sankhuwasabha",//
        "bhojpur",//
        "solukhumbu",//
        "okhaldhunga",//
        "khotang",//
        "udayapur",//
        "spatari",//
        "siraha",//
        "dhanusha",//
        "mahottari",//
        "sarlahi",//
        "bara",//
        "parsa",//
        "rautahat",//
        "sindhuli",//
        "ramechhap",//
        "dolakha",//
        "sindhupalchok",//
        "kavrepalanchok",//
        "lalitpur",//
        "bhaktapur",//
        "kathmandu",//
        "nuwakot",//
        "rasuwa",//
        "dhading",//
        "makwanpur",//
        "chitwan",//
        "gorkha",//
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

    $zone = array(
        "mechi",
        "koshi",
        "sagarmatha",
        "janakpur",
        "bagmati",
        "narayani",
        "gandaki",
        "lumbini",
        "dhaulagiri",
        "rapti",
        "karnali",
        "bheri",
        "seti",
        "mahakali"
    );

    $provinceHQ = array(
        "biratnagar",
        "jankpur",
        "hetauda",
        "pokhara",
        "deukhuri",
        "birendranagar",
        "dhangadhi"
    );

    $districtHQ = array(
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

    $zoneHQ = array(
        "ilam",
        "biratnagar",
        "rajbiraj",
        "janakpur dham",
        "kathmandu",
        "hetauda",
        "pokhara",
        "baglung",
        "butwal",
        "tulsipur",
        "nepalgunj",
        "jumla",
        "dhangadi",
        "mahendranagar"
    ); 

    $municipality = array(
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
        "ekdara", //mahottaru ends here
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
        "ramechhap" //ramechhap ends here
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
    );

    $vdc = array(
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
        "yangawarak"//panchthar ends here
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
        "jahada" //morang ends here
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
        "yasam"//okhaldhunga ends here
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
        "tirhut" //saptari ends here
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



    );

    $metropolitian = array(
        "biratnagar", //morang ends here
        "lalitpur", //lalitpur ends here
        "kathmandu", //kathmandu ends here
        "bharatpur", //chitwan ends here
    );

    $sub_metropolitian = array(
        "itahari",
        "dharan", //sunsari ends here
        "janakpur", //dhanusha ends here
        "kalaiya",
        "jeetpur simara",//bara  ends here
        "birgunj",//parsa ends here
        "hetauda", //makwanpur ends here

    );
}

?>