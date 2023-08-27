<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LGASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localGovernmentAreas = [
            "Abia" => [
                "Aba North",
                "Aba South",
                "Arochukwu",
                "Bende",
                "Ikwuano",
                "Isiala-Ngwa North",
                "Isiala-Ngwa South",
                "Isuikwato",
                "Obi Nwa",
                "Ohafia",
                "Osisioma",
                "Ngwa",
                "Ugwunagbo",
                "Ukwa East",
                "Ukwa West",
                "Umuahia North",
                "Umuahia South",
                "Umu-Neochi"
            ],
            "Adamawa" => [
                "Demsa",
                "Fufore",
                "Ganaye",
                "Gireri",
                "Gombi",
                "Guyuk",
                "Hong",
                "Jada",
                "Lamurde",
                "Madagali",
                "Maiha",
                "Mayo-Belwa",
                "Michika",
                "Mubi North",
                "Mubi South",
                "Numan",
                "Shelleng",
                "Song",
                "Toungo",
                "Yola North",
                "Yola South"
            ],
            "Anambra" => [
                "Aguata",
                "Anambra East",
                "Anambra West",
                "Anaocha",
                "Awka North",
                "Awka South",
                "Ayamelum",
                "Dunukofia",
                "Ekwusigo",
                "Idemili North",
                "Idemili south",
                "Ihiala",
                "Njikoka",
                "Nnewi North",
                "Nnewi South",
                "Ogbaru",
                "Onitsha North",
                "Onitsha South",
                "Orumba North",
                "Orumba South",
                "Oyi"
            ],
            "Akwa Ibom" => [
                "Abak",
                "Eastern Obolo",
                "Eket",
                "Esit Eket",
                "Essien Udim",
                "Etim Ekpo",
                "Etinan",
                "Ibeno",
                "Ibesikpo Asutan",
                "Ibiono Ibom",
                "Ika",
                "Ikono",
                "Ikot Abasi",
                "Ikot Ekpene",
                "Ini",
                "Itu",
                "Mbo",
                "Mkpat Enin",
                "Nsit Atai",
                "Nsit Ibom",
                "Nsit Ubium",
                "Obot Akara",
                "Okobo",
                "Onna",
                "Oron",
                "Oruk Anam",
                "Udung Uko",
                "Ukanafun",
                "Uruan",
                "Urue-Offong/Oruko",
                "Uyo"
            ],
            "Bauchi" => [
                "Alkaleri",
                "Bauchi",
                "Bogoro",
                "Damban",
                "Darazo",
                "Dass",
                "Ganjuwa",
                "Giade",
                "Itas/Gadau",
                "Jama'are",
                "Katagum",
                "Kirfi",
                "Misau",
                "Ningi",
                "Shira",
                "Tafawa-Balewa",
                "Toro",
                "Warji",
                "Zaki"
            ],
            "Bayelsa" => [
                "Brass",
                "Ekeremor",
                "Kolokuma/Opokuma",
                "Nembe",
                "Ogbia",
                "Sagbama",
                "Southern Jaw",
                "Yenegoa"
            ],
            "Benue" => [
                "Ado",
                "Agatu",
                "Apa",
                "Buruku",
                "Gboko",
                "Guma",
                "Gwer East",
                "Gwer West",
                "Katsina-Ala",
                "Konshisha",
                "Kwande",
                "Logo",
                "Makurdi",
                "Obi",
                "Ogbadibo",
                "Oju",
                "Okpokwu",
                "Ohimini",
                "Oturkpo",
                "Tarka",
                "Ukum",
                "Ushongo",
                "Vandeikya"
            ],
            "Borno" => [
                "Abadam",
                "Askira/Uba",
                "Bama",
                "Bayo",
                "Biu",
                "Chibok",
                "Damboa",
                "Dikwa",
                "Gubio",
                "Guzamala",
                "Gwoza",
                "Hawul",
                "Jere",
                "Kaga",
                "Kala/Balge",
                "Konduga",
                "Kukawa",
                "Kwaya Kusar",
                "Mafa",
                "Magumeri",
                "Maiduguri",
                "Marte",
                "Mobbar",
                "Monguno",
                "Ngala",
                "Nganzai",
                "Shani"
            ],
            "Cross River" => [
                "Akpabuyo",
                "Odukpani",
                "Akamkpa",
                "Biase",
                "Abi",
                "Ikom",
                "Yarkur",
                "Odubra",
                "Boki",
                "Ogoja",
                "Yala",
                "Obanliku",
                "Obudu",
                "Calabar South",
                "Etung",
                "Bekwara",
                "Bakassi",
                "Calabar Municipality"
            ],
            "Delta" => [
                "Oshimili",
                "Aniocha",
                "Aniocha South",
                "Ika South",
                "Ika North-East",
                "Ndokwa West",
                "Ndokwa East",
                "Isoko south",
                "Isoko North",
                "Bomadi",
                "Burutu",
                "Ughelli South",
                "Ughelli North",
                "Ethiope West",
                "Ethiope East",
                "Sapele",
                "Okpe",
                "Warri North",
                "Warri South",
                "Uvwie",
                "Udu",
                "Warri Central",
                "Ukwani",
                "Oshimili North",
                "Patani"
            ],
            "Ebonyi" => [
                "Edda",
                "Afikpo",
                "Onicha",
                "Ohaozara",
                "Abakaliki",
                "Ishielu",
                "lkwo",
                "Ezza",
                "Ezza South",
                "Ohaukwu",
                "Ebonyi",
                "Ivo"
            ],
            "Enugu" => [
                "Enugu South,",
                "Igbo-Eze South",
                "Enugu North",
                "Nkanu",
                "Udi Agwu",
                "Oji-River",
                "Ezeagu",
                "IgboEze North",
                "Isi-Uzo",
                "Nsukka",
                "Igbo-Ekiti",
                "Uzo-Uwani",
                "Enugu Eas",
                "Aninri",
                "Nkanu East",
                "Udenu."
            ],
            "Edo" => [
                "Esan North-East",
                "Esan Central",
                "Esan West",
                "Egor",
                "Ukpoba",
                "Central",
                "Etsako Central",
                "Igueben",
                "Oredo",
                "Ovia SouthWest",
                "Ovia South-East",
                "Orhionwon",
                "Uhunmwonde",
                "Etsako East",
                "Esan South-East"
            ],
            "Ekiti" => [
                "Ado",
                "Ekiti-East",
                "Ekiti-West",
                "Emure/Ise/Orun",
                "Ekiti South-West",
                "Ikere",
                "Irepodun",
                "Ijero,",
                "Ido/Osi",
                "Oye",
                "Ikole",
                "Moba",
                "Gbonyin",
                "Efon",
                "Ise/Orun",
                "Ilejemeje."
            ],
            "FCT" => [
                "Abaji",
                "Abuja Municipal",
                "Bwari",
                "Gwagwalada",
                "Kuje",
                "Kwali"
            ],
            "Gombe" => [
                "Akko",
                "Balanga",
                "Billiri",
                "Dukku",
                "Kaltungo",
                "Kwami",
                "Shomgom",
                "Funakaye",
                "Gombe",
                "Nafada/Bajoga",
                "Yamaltu/Delta."
            ],
            "Imo" => [
                "Aboh-Mbaise",
                "Ahiazu-Mbaise",
                "Ehime-Mbano",
                "Ezinihitte",
                "Ideato North",
                "Ideato South",
                "Ihitte/Uboma",
                "Ikeduru",
                "Isiala Mbano",
                "Isu",
                "Mbaitoli",
                "Mbaitoli",
                "Ngor-Okpala",
                "Njaba",
                "Nwangele",
                "Nkwerre",
                "Obowo",
                "Oguta",
                "Ohaji/Egbema",
                "Okigwe",
                "Orlu",
                "Orsu",
                "Oru East",
                "Oru West",
                "Owerri-Municipal",
                "Owerri North",
                "Owerri West"
            ],
            "Jigawa" => [
                "Auyo",
                "Babura",
                "Birni Kudu",
                "Biriniwa",
                "Buji",
                "Dutse",
                "Gagarawa",
                "Garki",
                "Gumel",
                "Guri",
                "Gwaram",
                "Gwiwa",
                "Hadejia",
                "Jahun",
                "Kafin Hausa",
                "Kaugama Kazaure",
                "Kiri Kasamma",
                "Kiyawa",
                "Maigatari",
                "Malam Madori",
                "Miga",
                "Ringim",
                "Roni",
                "Sule-Tankarkar",
                "Taura",
                "Yankwashi"
            ],
            "Kaduna" => [
                "Birni-Gwari",
                "Chikun",
                "Giwa",
                "Igabi",
                "Ikara",
                "jaba",
                "Jema'a",
                "Kachia",
                "Kaduna North",
                "Kaduna South",
                "Kagarko",
                "Kajuru",
                "Kaura",
                "Kauru",
                "Kubau",
                "Kudan",
                "Lere",
                "Makarfi",
                "Sabon-Gari",
                "Sanga",
                "Soba",
                "Zango-Kataf",
                "Zaria"
            ],
            "Kano" => [
                "Ajingi",
                "Albasu",
                "Bagwai",
                "Bebeji",
                "Bichi",
                "Bunkure",
                "Dala",
                "Dambatta",
                "Dawakin Kudu",
                "Dawakin Tofa",
                "Doguwa",
                "Fagge",
                "Gabasawa",
                "Garko",
                "Garun Mallam",
                "Gaya",
                "Gezawa",
                "Gwale",
                "Gwarzo",
                "Kabo",
                "Kano Municipal",
                "Karaye",
                "Kibiya",
                "Kiru",
                "Kumbotso",
                "Kunchi",
                "Kura",
                "Madobi",
                "Makoda",
                "Minjibir",
                "Nasarawa",
                "Rano",
                "Rimin Gado",
                "Shanono",
                "Sumaila",
                "Takali",
                "Tofa",
                "Tsanyawa",
                "Tudun Wada",
                "Ungogo",
                "Warawa",
                "Wudil"
            ],
            "Katsina" => [
                "Bakori",
                "Batagarawa",
                "Batsari",
                "Baure",
                "Bindawa",
                "Charanchi",
                "Dandume",
                "Danja",
                "Dan Musa",
                "Daura",
                "Dutsi",
                "Dutsin-Ma",
                "Faskari",
                "Funtua",
                "Ingawa",
                "Jibia",
                "Kafur",
                "Kaita",
                "Kankara",
                "Kankia",
                "Katsina",
                "Kurfi",
                "Kusada",
                "Mai'Adua",
                "Malumfashi",
                "Mani",
                "Mashi",
                "Matazu",
                "Musawa",
                "Rimi",
                "Sabuwa",
                "Safana",
                "Sandamu",
                "Zango"
            ],
            "Kebbi" => [
                "Aleiro",
                "Arewa-Dandi",
                "Argungu",
                "Augie",
                "Bagudo",
                "Birnin Kebbi",
                "Bunza",
                "Dandi",
                "Fakai",
                "Gwandu",
                "Jega",
                "Kalgo",
                "Koko/Besse",
                "Maiyama",
                "Ngaski",
                "Sakaba",
                "Shanga",
                "Suru",
                "Wasagu/Danko",
                "Yauri",
                "Zuru"
            ],
            "Kogi" => [
                "Adavi",
                "Ajaokuta",
                "Ankpa",
                "Bassa",
                "Dekina",
                "Ibaji",
                "Idah",
                "Igalamela",
                "Ijumu",
                "Kabba/Bunu",
                "Kogi",
                "Lokoja",
                "Mopa-Muro",
                "Ofu",
                "Ogori/Magongo",
                "Okehi",
                "Okene",
                "Olamaboro",
                "Omala",
                "Yagba East",
                "Yagba West"
            ],
            "Kwara" => [
                "Asa",
                "Baruten",
                "Edu",
                "Ekiti",
                "Ifelodun",
                "Ilorin East",
                "Ilorin West",
                "Irepodun",
                "Isin",
                "Kaiama",
                "Moro",
                "Offa",
                "Oke-Ero",
                "Oyun",
                "Pategi"
            ],
            "Lagos" => [
                "Agege",
                "Ajeromi-Ifelodun",
                "Alimosho",
                "Amuwo-Odofin",
                "Apapa",
                "Badagry",
                "Epe",
                "Eti-Osa",
                "Ibeju/Lekki",
                "Ifako-Ijaiye",
                "Ikeja",
                "Ikorodu",
                "Kosofe",
                "Lagos Island",
                "Lagos Mainland",
                "Mushin",
                "Ojo",
                "Oshodi-Isolo",
                "Shomolu",
                "Surulere"
            ],
            "Nasarawa" => [
                "Akwanga",
                "Awe",
                "Doma",
                "Karu",
                "Keana",
                "Keffi",
                "Kokona",
                "Lafia",
                "Nasarawa",
                "Nasarawa Egon",
                "Obi",
                "Toto",
                "Wamba"
            ],
            "Niger" => [
                "Agaie",
                "Agwara",
                "Bida",
                "Borgu",
                "Bosso",
                "Chanchaga",
                "Edati",
                "Gbako",
                "Gurara",
                "Katcha",
                "Kontagora",
                "Lapai",
                "Lavun",
                "Magama",
                "Mariga",
                "Mashegu",
                "Mokwa",
                "Muya",
                "Pailoro",
                "Rafi",
                "Rijau",
                "Shiroro",
                "Suleja",
                "Tafa",
                "Wushishi"
            ],
            "Ogun" => [
                "Abeokuta North",
                "Abeokuta South",
                "Ado-Odo/Ota",
                "Ewekoro",
                "Ifo",
                "Ijebu East",
                "Ijebu North",
                "Ijebu North East",
                "Ijebu Ode",
                "Ikenne",
                "Imeko-Afon",
                "Ipokia",
                "Obafemi-Owode",
                "Odogbolu",
                "Ogun Waterside",
                "Remo North",
                "Shagamu"
            ],
            "Ondo" => [
                "Akoko North East",
                "Akoko North West",
                "Akoko South Akure East",
                "Akoko South West",
                "Akure North",
                "Akure South",
                "Ese-Odo",
                "Idanre",
                "Ifedore",
                "Ilaje",
                "Ile Oluji/Okeigbo",
                "Irele",
                "Odigbo",
                "Okitipupa",
                "Ondo East",
                "Ondo West",
                "Ose",
                "Owo"
            ],
            "Osun" => [
                "Aiyedade",
                "Aiyedire",
                "Atakumosa East",
                "Atakumosa West",
                "Boluwaduro",
                "Boripe",
                "Ede North",
                "Ede South",
                "Egbedore",
                "Ejigbo",
                "Ife Central",
                "Ife East",
                "Ife North",
                "Ife South",
                "Ifedayo",
                "Ifelodun",
                "Ila",
                "Ilesa East",
                "Ilesa West",
                "Irepodun",
                "Irewole",
                "Isokan",
                "Iwo",
                "Obokun",
                "Odo Otin",
                "Ola Oluwa",
                "Olorunda",
                "Oriade",
                "Orolu",
                "Osogbo"
            ],
            "Oyo" => [
                "Afijio",
                "Akinyele",
                "Atiba",
                "Atigbo",
                "Egbeda",
                "Ibadan Central",
                "Ibadan North",
                "Ibadan North West",
                "Ibadan South East",
                "Ibadan South West",
                "Ibarapa Central",
                "Ibarapa East",
                "Ibarapa North",
                "Ido",
                "Irepo",
                "Iseyin",
                "Itesiwaju",
                "Iwajowa",
                "Kajola",
                "Lagelu",
                "Ogbomosho North",
                "Ogbomosho South",
                "Ogo Oluwa",
                "Olorunsogo",
                "Oluyole",
                "Ona Ara",
                "Orelope",
                "Ori Ire",
                "Oyo East",
                "Oyo West",
                "Saki East",
                "Saki West",
                "Surulere"
            ],
            "Plateau" => [
                "Barkin Ladi",
                "Bassa",
                "Bokkos",
                "Jos East",
                "Jos North",
                "Jos South",
                "Kanam",
                "Kanke",
                "Langtang North",
                "Langtang South",
                "Mangu",
                "Mikang",
                "Pankshin",
                "Qua'an Pan",
                "Riyom",
                "Shendam",
                "Wase"
            ],
            "Rivers" => [
                "Abua/Odual",
                "Ahoada East",
                "Ahoada West",
                "Akuku-Toru",
                "Andoni",
                "Asari-Toru",
                "Bonny",
                "Degema",
                "Eleme",
                "Emohua",
                "Etche",
                "Gokana",
                "Ikwerre",
                "Khana",
                "Obio/Akpor",
                "Ogba/Egbema/Ndoni",
                "Ogu/Bolo",
                "Okrika",
                "Omuma",
                "Opobo/Nkoro",
                "Oyigbo",
                "Port Harcourt",
                "Tai"
            ],
            "Sokoto" => [
                "Binji",
                "Bodinga",
                "Dange-shnsi",
                "Gada",
                "Goronyo",
                "Gudu",
                "Gwadabawa",
                "lllela",
                "Isa",
                "Kware",
                "kebbe",
                "Rabah",
                "Sabon birni",
                "Shagari",
                "Silame",
                "Sokoto North",
                "Sokoto South",
                "Tambuwal",
                "Tqngaza",
                "Tureta",
                "Wamako",
                "Wurno",
                "Yabo"
            ],
            "Taraba" => [
                "Ardo-Kola",
                "Bali",
                "Donga",
                "Gashaka",
                "Gassol",
                "lbi",
                "Jalingo",
                "Karim Lamido",
                "Kumi",
                "Lau",
                "Sardauna",
                "Takum",
                "Ussa",
                "Wukari",
                "Yorro",
                "Zing"
            ],
            "Yobe" => [
                "Bade",
                "Bursari",
                "Damaturu",
                "Fika",
                "Fune",
                "Geidam",
                "Gujba",
                "Gulani",
                "Jakusko",
                "Karasuwa",
                "Machina",
                "Nangere",
                "Nguru",
                "Potiskum",
                "Tarmuwa",
                "Yunusari",
                "Yusufari"
            ],
            "Zamfara" => [
                "Anka",
                "Bakura",
                "Birnin Magaji",
                "Bukkuyum",
                "Bungudu",
                "Gummi",
                "Gusau",
                "Kaura",
                "Namoda",
                "Maradun",
                "Maru",
                "Shinkafi",
                "Talata Mafara",
                "Tsafe",
                "Zurmi"
            ]
        ];

        foreach ($localGovernmentAreas as $state => $lgas) {
            foreach ($lgas as $lga) {
                \App\Models\LGA::create([
                    'name' => $lga,
                    'state' => $state
                ]);
            }
        }
    }
}
