<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            //id 1
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513164486-NRFZKTWBXJXWQ3MQ3KX1/610_0001.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513164239-COKFEC326MK2RWB4U2ZJ/610_0002.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513192800-LFGUY8TL7HYHVDKKQ1JN/610_0006.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513203825-EQZLOL6C03Z510X9LHFB/610_0014.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513209371-MOJQ0M00T261F6NZYPHP/610_0019.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513252812-ZZ6EKZOVJLF8SX3C8EWD/610_0070.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513258941-TFD8PTSBVVJAKB0RTL6F/610_0076.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513302442-4HO25FSA608PBBZ4151I/610_0638.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513266303-LL57XEGPPYUOTJ55RSJB/610_0091.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513271799-0Z8VH0E5LS249KWR23EK/610_0092.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513277604-VAULJLD0Q4ZEIC8USFG6/610_0100.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513278394-AG0LLX53TF4DAK0WYYNY/610_0101.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513313772-9ZP27584I0VP2DCTR5CS/610_0766.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513316755-0764CNVYUXNF01E26RWO/610_0927.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513244522-TB4EDZGY409T9GSMDX1N/610_0061.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513241526-5RN052FMKLQQDRDVW0XC/610_0060.jpg",
                'customer_id' => "1",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595513239958-6BV7LYB5YNYMEFYZ6BH0/610_0045.jpg",
                'customer_id' => "1",
            ],
            //id 2
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114238568-OVLROI7H1Q9MHDEONN6S/TerrainweddingbyPeachPlumPearPhoto_002.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114284855-M47NHO2UH8Y77Z2XAYO4/TerrainweddingbyPeachPlumPearPhoto_036.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114729001-9K2Z3DSGWRWVEIKUO6TM/TerrainweddingbyPeachPlumPearPhoto_041.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114746181-WYFV8XJA1WJY0QOOFB36/TerrainweddingbyPeachPlumPearPhoto_074.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114749571-27MAQTODKM1LKXR3O4FE/TerrainweddingbyPeachPlumPearPhoto_076.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115436572-WMHQ849NLPG2YM1CKA3U/TerrainweddingbyPeachPlumPearPhoto_102.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115442842-GULZXBXGMBMEOI6LFAP2/TerrainweddingbyPeachPlumPearPhoto_104.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115458983-Q1E5FP57LZ7JUCRZS3LP/TerrainweddingbyPeachPlumPearPhoto_123.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115453963-9YZEHC1YIHON7P445LSZ/TerrainweddingbyPeachPlumPearPhoto_117.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115431970-P05FW241H1VQ7Y6NMJGV/TerrainweddingbyPeachPlumPearPhoto_129.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115826572-4FAUF3RVXHVAOHNDPQGL/TerrainweddingbyPeachPlumPearPhoto_134.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115837918-TW7VP2ZM7A0ZH8XYOR2Q/TerrainweddingbyPeachPlumPearPhoto_146.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115845107-1YUIOIU1U6UXDXFXVOGF/TerrainweddingbyPeachPlumPearPhoto_171.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115852579-YF15320KDIM7QBJ25NP4/TerrainweddingbyPeachPlumPearPhoto_178.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579116000698-97PHWD5GJS38LGJR8PSE/TerrainweddingbyPeachPlumPearPhoto_202.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579116007004-62D236TMMONKKXFOOYL0/TerrainweddingbyPeachPlumPearPhoto_219.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579116018380-BFKGIQM82JDWWV275GA9/TerrainweddingbyPeachPlumPearPhoto_234.jpg",
                'customer_id' => "2",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579116021665-T812L3WJWKRRTD0YJJDV/TerrainweddingbyPeachPlumPearPhoto_236.jpg",
                'customer_id' => "2",
            ],
            //id 3
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556664837216-VT7S5P1I39KD97M1VXO6/SneakPeek-020.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556664872018-SSGR7GGHNQ37C72HICRT/SneakPeek-016.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556663810231-Y84F9KAUF2NB4S56LE8P/SneakPeek-001.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556728226333-Y42L3CS92Q8BT2WIS0AQ/SneakPeek-019.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556728269564-PIBI8GA00FQM0A3RFKO1/SneakPeek-021.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556730691818-UNG4QT6NQ1UMY0Q8BH11/SneakPeek-029.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556730773055-ARA4XSPWA80XXBOSRYCN/SneakPeek-033.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556731314049-6EWQXCZYQGKMJ63ADE4W/SneakPeek-045.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556742866538-PSIEMYSNQ3IUB6GDRBJH/SneakPeek-049.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556742763804-EKI02KQX3FMQY38QL4JI/SneakPeek-050.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556746591629-MZ1YN9RGZG9F0B8L2E71/SneakPeek-068.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556750039937-WYPFKRZLU67AG3FGL8DX/SneakPeek-081.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556826598594-5RWCW7S03KWV4FV59H4Q/SneakPeek-090.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579115852579-YF15320KDIM7QBJ25NP4/TerrainweddingbyPeachPlumPearPhoto_178.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556827906232-CRBASNTI0M8DF41OJT35/SneakPeek-097.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556827853653-ZX19805VAZ8TY9WHBQAN/SneakPeek-096.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557251799617-CC61XFR95V5LEXYN4NR6/SneakPeek-106.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557252324783-2Q34QDUV0DXKXSM0AZX2/SneakPeek-119.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557252246017-JRTX83B0AFA2TL64PLQG/SneakPeek-120.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557252647020-60QMIHNLBABAI18R01V8/SneakPeek-136.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557252681074-LAA2IJMFUFMCD5BA5LNX/SneakPeek-138.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557253659016-VRIW35P9XFUPK97VP1Q3/SneakPeek-208.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557253396036-4M7VDLN2DDOSOG73MVTQ/SneakPeek-227.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557253570429-D2XUP0IX9QPDYU7JJ2X4/SneakPeek-236.jpg",
                'customer_id' => "3",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1557253441908-PJ9UQHIITUQZM2SEVVD0/SneakPeek-231.jpg",
                'customer_id' => "3",
            ],
            // id 4
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663989070-6C96ASOEB74IEMMDJR60/2019-12-28+Glenn-Zipf+Wedding-0719.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663487311-7TUQYKCVFQLBGHCI4KT5/2019-12-28+Glenn-Zipf+Wedding-0001.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663504780-QUTBIBRG5MG7D6GVD5UK/2019-12-28+Glenn-Zipf+Wedding-0006.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663512965-Z8PRA4YUUCZMW5X83S0G/2019-12-28+Glenn-Zipf+Wedding-0021.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663518664-MSL576RH3SXBEQJK3BPW/2019-12-28+Glenn-Zipf+Wedding-0066.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663535995-MYCOHOTKCK6SA0YNYEHQ/2019-12-28+Glenn-Zipf+Wedding-0072.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663528130-LPVPQ8EOJLYHY5J9L0ZF/2019-12-28+Glenn-Zipf+Wedding-0067.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663556187-58UXCYJ8AC3LHIVCN1BQ/2019-12-28+Glenn-Zipf+Wedding-0080.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663563204-JJXRA2NSS5HTI94WVNQN/2019-12-28+Glenn-Zipf+Wedding-0093.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663571409-C86JG05NWQQD3KKJ98VR/2019-12-28+Glenn-Zipf+Wedding-0110.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663577178-MJADIE2BCC4A0III1OCK/2019-12-28+Glenn-Zipf+Wedding-0124.JPG",
                'customer_id' => "4",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663588467-T6RKE8303WRHTFVPQP4L/2019-12-28+Glenn-Zipf+Wedding-0147.JPG",
                'customer_id' => "4",
            ],
            
            // id 5
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773676835-E56HSHTQULVDE2MM56FE/chelsea-monte-109.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773329480-TNIZCULBDKBZ1KG27HKC/chelsea-monte-50.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773676528-G0IN3Q0W80O4E4X6B4RY/chelsea-monte-89.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773329241-UAF0CI72ZXOH68X6G23A/chelsea-monte-55.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773679666-IXNT5ZM4LOL3POR7W5HJ/chelsea-monte-130.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773329706-6QK5FNZR7HZ0SDDIQYT7/chelsea-monte-51.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773693706-PRZ70DOKHWMLUU3PVVSF/chelsea-monte-225.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773711961-J6LLUZMLGQQBXDYHBJYV/chelsea-monte-339.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773716769-LDMG9KUDSBPQ47HIV4CH/chelsea-monte-486.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773716179-7YTTATS7R3CK9ZYA0KM0/chelsea-monte-456.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773718021-XTYO47VR8VVHJ1LFREGY/chelsea-monte-464.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773833019-9V9KBMD2HN2DMCDEZ0NE/chelsea-monte-527.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774121175-AGFV88QDSK9FSXEDL22A/chelsea-monte-548.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774121837-3TDBTPY4NWKS796UNM2Q/chelsea-monte-608.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774128246-CI6H3AHCF59RZ8UO7UHO/chelsea-monte-637.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774132358-LUGY894S7KM8R0TPBM1Z/chelsea-monte-840.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774131716-6UMUNVNGIBK6N2YJ9WWA/chelsea-monte-748.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774137577-FI39LJQTDYHDF2KVNC0A/chelsea-monte-984.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774127608-AJ0M3TZ3T3LC39QEPET9/chelsea-monte-714.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774131716-ION3GWI16JRN4KE3FIU8/chelsea-monte-918.jpg",
                'customer_id' => "5",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562774137507-16T1FLWC5IY7M4WAF3RU/chelsea-monte-982.jpg",
                'customer_id' => "5",
            ],
            // id 6
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768450890-DKOQRYLXCA9NHWDZFLXY/sarah-sean-400.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768452157-6X0L5I08P1RKIOVYKOEP/sarah-sean-388.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768455683-YUXDZHDSKNHSIY6NV9LS/sarah-sean-408.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768545069-SRWMI9M6G1NPVNKFFH39/sarah-sean-529.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768545480-AJSKUANJEUV878VF0B1O/sarah-sean-537.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768483616-6TUZMYEF1KBM84ZCLLQ3/sarah-sean-485.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768549127-PQS29BXHKIICF3PXRHZZ/sarah-sean-841.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768259934-51VOTWM1UWJ1Y77TJI64/sarah-sean-190.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768254468-XHQPG20QYLV2LBN6UD6Y/sarah-sean-41.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768261229-L953A05EYREYH9XR4CPV/sarah-sean-135.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768255463-XE7GGEHC7SAYLD3PMU9H/sarah-sean-102.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768377048-YYXGX6HYFXVPP2JYIEG6/sarah-sean-205.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768378491-F2D1K2M9M2UJDAWY7DX1/sarah-sean-274.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768378161-K8U7KB9VAIJRW5RGKV6V/sarah-sean-258.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768544995-RE73FL8TDZZRJUFIO0TU/sarah-sean-807.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768555522-HOQBN9RVUAEQP5VSY80Y/sarah-sean-995.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768560265-5CP2IYPUAH0TDTK5ZCML/sarah-sean-1078.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768558848-RY68J3J1V2AZQTE78VBJ/sarah-sean-1132.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768548223-GQ0ACAWFKMUOGQ5GLOB0/sarah-sean-808.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768569195-JDAU9HCF0C3JFJAEF68L/sarah-sean-1232.jpg",
                'customer_id' => "6",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768560368-BF587MZIO8M2HX6MLAL4/sarah-sean-1113.jpg",
                'customer_id' => "6",
            ],
            // id 7
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556552999328-3LB40E44LHM3E1AFBQFP/Murray_Wedding_004.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553001469-RG85HANEMSTM90URS9QW/Murray_Wedding_008.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553027317-52J3U2OSROD53QUPV4Z5/Murray_Wedding_074.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553054735-0110UII38WGTHVCT0FUL/Murray_Wedding_109.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553051235-40N4O7DP3YEW4NHK3HFF/Murray_Wedding_115.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553053795-FK9V9JRBXCPTYKQ02T0Q/Murray_Wedding_124.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553082870-RHFA9LQT2YJ6KSTS66OQ/Murray_Wedding_133.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553085549-WYRP7GGWABXRPIV7Y5B9/Murray_Wedding_188.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553113235-RPVKG1DNUC1P0I535R8E/Murray_Wedding_338.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553422397-X8660IHT1WR4DXVY6VTJ/Murray_Wedding_415.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553420722-JLPI40GNDAJXIK0VVY50/Murray_Wedding_406.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553415716-2110LZ3KF4ZHSY61RCWX/Murray_Wedding_447.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553429168-ZLBCTZ5ECNB27WAA216S/Murray_Wedding_481.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553436954-CIL4X8200V6R0MS89U6K/Murray_Wedding_603.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553441508-PDKVY83LEMI4V95LPCVB/Murray_Wedding_699.jpg",
                'customer_id' => "7",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553427413-CCJY5THP8N748OQXK7HI/Murray_Wedding_802.jpg",
                'customer_id' => "7",
            ],
// id 8
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089973524-7H8M7LOCOLMDHT1CM6KS/chloe-jimmy--2.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089974614-LFZAZ044J1CZE0IWM2Y6/chloe-jimmy--7.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089974661-WS7WVYZ6T0GJS0FVBA7U/chloe-jimmy--8.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089976996-1G36IM01PS2AETQWVS61/chloe-jimmy--13.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089978024-UR7UFUZ3NKFK0RAQOO0U/chloe-jimmy--66.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089978022-B071TZ4QEDA8XUF6SB4T/chloe-jimmy--109.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089981028-LXFVFOZBP9WSYJWU6I53/chloe-jimmy--142.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089981929-SD6WJVRTICBVRSCWTTXM/chloe-jimmy--168.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089982910-4MZO9BY4ANS8Q85PIU1E/chloe-jimmy--178.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089983525-C6SC3856Q3HTY1820JA6/chloe-jimmy--191.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089986529-JT0RGHXF7PURH6H05SPT/chloe-jimmy--265.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089984959-M9JE1K1PH1VS23DNLHWU/chloe-jimmy--232.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089986860-Z4LUN29DJSD9YWZ0GRP8/chloe-jimmy--271.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089989115-ODK3P5XMHS2LIA3IFRCV/chloe-jimmy--274.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089999178-5OZ4IFC33PF0MT3QR3YG/chloe-jimmy--366.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555090000942-8P6M07GPNXN1LFFT53MO/chloe-jimmy--397.jpg",
                'customer_id' => "8",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555090001504-VBWUQZVKZ88FM40ZIHIG/chloe-jimmy--402.jpg",
                'customer_id' => "8",
            ],
            //id 9
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553616608-CF8XW12FUUCJL5O8ZBCP/SneakPeek-001.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553626364-JCH85INI0649YKZLSXMM/SneakPeek-009.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554089834-J62IYZJF3XYMA55Q1CTN/SneakPeek-045.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554053395-0DU1W8UFPEGADZ924XZH/SneakPeek-038.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554017342-DHM1NYA5GRFM6NIHPFCN/SneakPeek-034.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554003012-BT7OJW7AJVK8VPUX4I5Z/SneakPeek-053.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556438708-CK44JB784KJDZKBJ33EL/SneakPeek-169.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554362613-VU81DU07C5UCI00IYNT5/SneakPeek-067.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554404129-1PO0BQX07FRISPZ1VJH3/SneakPeek-072.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554370936-K92BM7708GD3JAY1PXDK/SneakPeek-068.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554432529-SNHWKYR65L3DIUWP2L5D/SneakPeek-087.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556555590045-5BYE1NLI29OXB3REMLVM/SneakPeek-115.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556555532823-FWXUWPKW4X2CEPTCJGW5/SneakPeek-113.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556555525124-JA0CH3Z5WU0DG54A8I0V/SneakPeek-092.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556554312043-W8K9IBWMAS7EZ1AJ9P3N/SneakPeek-090.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556555542652-U62ZEGF3L9YYKRHQP9PZ/SneakPeek-094.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556555555278-S5DMC78PV91CIO00Y0G1/SneakPeek-096.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556311089-4Y5ATLKPCU421H3KOQHQ/SneakPeek-156.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556400738-T5SRZEL2FD6MMP0FX9IR/SneakPeek-162.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556371110-EITPJNODTDCTJ65608IS/SneakPeek-172.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556294329-9P1MM8R8A4NOEXLQIYGI/SneakPeek-145.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556466577-R337EW32XHY0VE48FY3F/SneakPeek-173.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556514037-PPHPY4W083BVU7ATJ6X7/SneakPeek-176.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556726335-N8TDFHH0IMAU1DRYWT77/SneakPeek-192.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556557294721-U3DERV4XTGEJW4RE3M5N/SneakPeek-247.jpg",
                'customer_id' => "9",
            ],
            [
                'image_url' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556557510214-SW752PJDJ6JRCIR63TSR/SneakPeek-272.jpg",
                'customer_id' => "9",
            ],
        ]);
}
}
