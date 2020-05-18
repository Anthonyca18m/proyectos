<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class provincesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [

            [

                "id_provinces" => "0101",
                "d_name" => "Chachapoyas",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0102",
                "d_name" => "Bagua",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0103",
                "d_name" => "Bongará",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0104",
                "d_name" => "Condorcanqui",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0105",
                "d_name" => "Luya",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0106",
                "d_name" => "Rodríguez de Mendoza",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0107",
                "d_name" => "Utcubamba",
                "id_departments" => "01"
            ],
            [

                "id_provinces" => "0201",
                "d_name" => "Huaraz",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0202",
                "d_name" => "Aija",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0203",
                "d_name" => "Antonio Raymondi",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0204",
                "d_name" => "Asunción",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0205",
                "d_name" => "Bolognesi",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0206",
                "d_name" => "Carhuaz",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0207",
                "d_name" => "Carlos Fermín Fitzcarrald",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0208",
                "d_name" => "Casma",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0209",
                "d_name" => "Corongo",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0210",
                "d_name" => "Huari",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0211",
                "d_name" => "Huarmey",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0212",
                "d_name" => "Huaylas",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0213",
                "d_name" => "Mariscal Luzuriaga",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0214",
                "d_name" => "Ocros",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0215",
                "d_name" => "Pallasca",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0216",
                "d_name" => "Pomabamba",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0217",
                "d_name" => "Recuay",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0218",
                "d_name" => "Santa",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0219",
                "d_name" => "Sihuas",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0220",
                "d_name" => "Yungay",
                "id_departments" => "02"
            ],
            [

                "id_provinces" => "0301",
                "d_name" => "Abancay",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0302",
                "d_name" => "Andahuaylas",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0303",
                "d_name" => "Antabamba",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0304",
                "d_name" => "Aymaraes",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0305",
                "d_name" => "Cotabambas",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0306",
                "d_name" => "Chincheros",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0307",
                "d_name" => "Grau",
                "id_departments" => "03"
            ],
            [

                "id_provinces" => "0401",
                "d_name" => "Arequipa",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0402",
                "d_name" => "Camaná",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0403",
                "d_name" => "Caravelí",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0404",
                "d_name" => "Castilla",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0405",
                "d_name" => "Caylloma",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0406",
                "d_name" => "Condesuyos",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0407",
                "d_name" => "Islay",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0408",
                "d_name" => "La Uniòn",
                "id_departments" => "04"
            ],
            [

                "id_provinces" => "0501",
                "d_name" => "Huamanga",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0502",
                "d_name" => "Cangallo",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0503",
                "d_name" => "Huanca Sancos",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0504",
                "d_name" => "Huanta",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0505",
                "d_name" => "La Mar",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0506",
                "d_name" => "Lucanas",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0507",
                "d_name" => "Parinacochas",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0508",
                "d_name" => "Pàucar del Sara Sara",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0509",
                "d_name" => "Sucre",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0510",
                "d_name" => "Víctor Fajardo",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0511",
                "d_name" => "Vilcas Huamán",
                "id_departments" => "05"
            ],
            [

                "id_provinces" => "0601",
                "d_name" => "Cajamarca",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0602",
                "d_name" => "Cajabamba",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0603",
                "d_name" => "Celendín",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0604",
                "d_name" => "Chota",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0605",
                "d_name" => "Contumazá",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0606",
                "d_name" => "Cutervo",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0607",
                "d_name" => "Hualgayoc",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0608",
                "d_name" => "Jaén",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0609",
                "d_name" => "San Ignacio",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0610",
                "d_name" => "San Marcos",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0611",
                "d_name" => "San Miguel",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0612",
                "d_name" => "San Pablo",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0613",
                "d_name" => "Santa Cruz",
                "id_departments" => "06"
            ],
            [

                "id_provinces" => "0701",
                "d_name" => "Prov. Const. del Callao",
                "id_departments" => "07"
            ],
            [

                "id_provinces" => "0801",
                "d_name" => "Cusco",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0802",
                "d_name" => "Acomayo",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0803",
                "d_name" => "Anta",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0804",
                "d_name" => "Calca",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0805",
                "d_name" => "Canas",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0806",
                "d_name" => "Canchis",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0807",
                "d_name" => "Chumbivilcas",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0808",
                "d_name" => "Espinar",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0809",
                "d_name" => "La Convención",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0810",
                "d_name" => "Paruro",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0811",
                "d_name" => "Paucartambo",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0812",
                "d_name" => "Quispicanchi",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0813",
                "d_name" => "Urubamba",
                "id_departments" => "08"
            ],
            [

                "id_provinces" => "0901",
                "d_name" => "Huancavelica",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0902",
                "d_name" => "Acobamba",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0903",
                "d_name" => "Angaraes",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0904",
                "d_name" => "Castrovirreyna",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0905",
                "d_name" => "Churcampa",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0906",
                "d_name" => "Huaytará",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "0907",
                "d_name" => "Tayacaja",
                "id_departments" => "09"
            ],
            [

                "id_provinces" => "1001",
                "d_name" => "Huánuco",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1002",
                "d_name" => "Ambo",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1003",
                "d_name" => "Dos de Mayo",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1004",
                "d_name" => "Huacaybamba",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1005",
                "d_name" => "Huamalíes",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1006",
                "d_name" => "Leoncio Prado",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1007",
                "d_name" => "Marañón",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1008",
                "d_name" => "Pachitea",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1009",
                "d_name" => "Puerto Inca",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1010",
                "d_name" => "Lauricocha ",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1011",
                "d_name" => "Yarowilca ",
                "id_departments" => "10"
            ],
            [

                "id_provinces" => "1101",
                "d_name" => "Ica ",
                "id_departments" => "11"
            ],
            [

                "id_provinces" => "1102",
                "d_name" => "Chincha ",
                "id_departments" => "11"
            ],
            [

                "id_provinces" => "1103",
                "d_name" => "Nasca ",
                "id_departments" => "11"
            ],
            [

                "id_provinces" => "1104",
                "d_name" => "Palpa ",
                "id_departments" => "11"
            ],
            [

                "id_provinces" => "1105",
                "d_name" => "Pisco ",
                "id_departments" => "11"
            ],
            [

                "id_provinces" => "1201",
                "d_name" => "Huancayo ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1202",
                "d_name" => "Concepción ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1203",
                "d_name" => "Chanchamayo ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1204",
                "d_name" => "Jauja ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1205",
                "d_name" => "Junín ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1206",
                "d_name" => "Satipo ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1207",
                "d_name" => "Tarma ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1208",
                "d_name" => "Yauli ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1209",
                "d_name" => "Chupaca ",
                "id_departments" => "12"
            ],
            [

                "id_provinces" => "1301",
                "d_name" => "Trujillo ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1302",
                "d_name" => "Ascope ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1303",
                "d_name" => "Bolívar ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1304",
                "d_name" => "Chepén ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1305",
                "d_name" => "Julcán ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1306",
                "d_name" => "Otuzco ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1307",
                "d_name" => "Pacasmayo ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1308",
                "d_name" => "Pataz ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1309",
                "d_name" => "Sánchez Carrión ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1310",
                "d_name" => "Santiago de Chuco ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1311",
                "d_name" => "Gran Chimú ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1312",
                "d_name" => "Virú ",
                "id_departments" => "13"
            ],
            [

                "id_provinces" => "1401",
                "d_name" => "Chiclayo ",
                "id_departments" => "14"
            ],
            [

                "id_provinces" => "1402",
                "d_name" => "Ferreñafe ",
                "id_departments" => "14"
            ],
            [

                "id_provinces" => "1403",
                "d_name" => "Lambayeque ",
                "id_departments" => "14"
            ],
            [

                "id_provinces" => "1501",
                "d_name" => "Lima ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1502",
                "d_name" => "Barranca ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1503",
                "d_name" => "Cajatambo ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1504",
                "d_name" => "Canta ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1505",
                "d_name" => "Cañete ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1506",
                "d_name" => "Huaral ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1507",
                "d_name" => "Huarochirí ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1508",
                "d_name" => "Huaura ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1509",
                "d_name" => "Oyón ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1510",
                "d_name" => "Yauyos ",
                "id_departments" => "15"
            ],
            [

                "id_provinces" => "1601",
                "d_name" => "Maynas ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1602",
                "d_name" => "Alto Amazonas ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1603",
                "d_name" => "Loreto ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1604",
                "d_name" => "Mariscal Ramón Castilla ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1605",
                "d_name" => "Requena ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1606",
                "d_name" => "Ucayali ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1607",
                "d_name" => "Datem del Marañón ",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1608",
                "d_name" => "Putumayo",
                "id_departments" => "16"
            ],
            [

                "id_provinces" => "1701",
                "d_name" => "Tambopata ",
                "id_departments" => "17"
            ],
            [

                "id_provinces" => "1702",
                "d_name" => "Manu ",
                "id_departments" => "17"
            ],
            [

                "id_provinces" => "1703",
                "d_name" => "Tahuamanu ",
                "id_departments" => "17"
            ],
            [

                "id_provinces" => "1801",
                "d_name" => "Mariscal Nieto ",
                "id_departments" => "18"
            ],
            [

                "id_provinces" => "1802",
                "d_name" => "General Sánchez Cerro ",
                "id_departments" => "18"
            ],
            [

                "id_provinces" => "1803",
                "d_name" => "Ilo ",
                "id_departments" => "18"
            ],
            [

                "id_provinces" => "1901",
                "d_name" => "Pasco ",
                "id_departments" => "19"
            ],
            [

                "id_provinces" => "1902",
                "d_name" => "Daniel Alcides Carrión ",
                "id_departments" => "19"
            ],
            [

                "id_provinces" => "1903",
                "d_name" => "Oxapampa ",
                "id_departments" => "19"
            ],
            [

                "id_provinces" => "2001",
                "d_name" => "Piura ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2002",
                "d_name" => "Ayabaca ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2003",
                "d_name" => "Huancabamba ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2004",
                "d_name" => "Morropón ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2005",
                "d_name" => "Paita ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2006",
                "d_name" => "Sullana ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2007",
                "d_name" => "Talara ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2008",
                "d_name" => "Sechura ",
                "id_departments" => "20"
            ],
            [

                "id_provinces" => "2101",
                "d_name" => "Puno ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2102",
                "d_name" => "Azángaro ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2103",
                "d_name" => "Carabaya ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2104",
                "d_name" => "Chucuito ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2105",
                "d_name" => "El Collao ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2106",
                "d_name" => "Huancané ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2107",
                "d_name" => "Lampa ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2108",
                "d_name" => "Melgar ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2109",
                "d_name" => "Moho ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2110",
                "d_name" => "San Antonio de Putina ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2111",
                "d_name" => "San Román ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2112",
                "d_name" => "Sandia ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2113",
                "d_name" => "Yunguyo ",
                "id_departments" => "21"
            ],
            [

                "id_provinces" => "2201",
                "d_name" => "Moyobamba ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2202",
                "d_name" => "Bellavista ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2203",
                "d_name" => "El Dorado ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2204",
                "d_name" => "Huallaga ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2205",
                "d_name" => "Lamas ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2206",
                "d_name" => "Mariscal Cáceres ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2207",
                "d_name" => "Picota ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2208",
                "d_name" => "Rioja ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2209",
                "d_name" => "San Martín ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2210",
                "d_name" => "Tocache ",
                "id_departments" => "22"
            ],
            [

                "id_provinces" => "2301",
                "d_name" => "Tacna ",
                "id_departments" => "23"
            ],
            [

                "id_provinces" => "2302",
                "d_name" => "Candarave ",
                "id_departments" => "23"
            ],
            [

                "id_provinces" => "2303",
                "d_name" => "Jorge Basadre ",
                "id_departments" => "23"
            ],
            [

                "id_provinces" => "2304",
                "d_name" => "Tarata ",
                "id_departments" => "23"
            ],
            [

                "id_provinces" => "2401",
                "d_name" => "Tumbes ",
                "id_departments" => "24"
            ],
            [

                "id_provinces" => "2402",
                "d_name" => "Contralmirante Villar ",
                "id_departments" => "24"
            ],
            [

                "id_provinces" => "2403",
                "d_name" => "Zarumilla ",
                "id_departments" => "24"
            ],
            [

                "id_provinces" => "2501",
                "d_name" => "Coronel Portillo ",
                "id_departments" => "25"
            ],
            [

                "id_provinces" => "2502",
                "d_name" => "Atalaya ",
                "id_departments" => "25"
            ],
            [

                "id_provinces" => "2503",
                "d_name" => "Padre Abad ",
                "id_departments" => "25"
            ],
            [

                "id_provinces" => "2504",
                "d_name" => "Purús",
                "id_departments" => "25"
            ]
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('provinces')->insert($data);
    }
}
