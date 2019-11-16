<?php

namespace App\Http\Controllers;

use App\Project;
use App\Support;
use App\Category;
use App\Mail\ReturnProduct;
use App\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Software;
use App\Product;
use App\Property;
use PHPUnit\Framework\UnintentionallyCoveredCodeError;

class IndexController extends Controller
{
    public function maintanence(){
        return view('maintanence');
    }

    /** start index menu */
    public function index(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $webprojects = Project::all();
        $supports_gamings = Support::where(['category_id' => 'gamings'])->get();
        $supports_offices = Support::where(['category_id' => 'offices'])->get();
        $supports_printers = Support::where(['category_id' => 'printers'])->get();
        $supports_instalations = Support::where(['category_id' => 'instalations'])->get();
        $supports_networks = Support::where(['category_id' => 'networks'])->get();
        $supports_cameras = Support::where(['category_id' => 'cameras'])->get();
        $supports_softwares = Support::where(['category_id' => 'softwares'])->get();
        $manufacturers = Manufacturer::all();
        $properties = Property::first();

        $paramstbi = "";
        $deviceis = "";
        $tbi_picture = "";
        $uni_container_status = "";
        $uni_logo = "";
        $uni_picture = "";
        $uni_container_txt1 = "";
        $uni_container_txt2 = "";
        $uni_backurl = "";
        $tbiyes = $properties->tbibank;
        $uniyes = $properties->unicredit;

        /** Credit */
        /** TBI Bank */
        if ($tbiyes){
            $credittbi_unicid = '9ac3191c-d67c-47f3-aed0-135cc2d1f9cf';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://api.tbibank.support/function/getparameters.php?cid='.$credittbi_unicid);
            $paramstbi=json_decode(curl_exec($ch), true);
            curl_close($ch);
    
            //detect mobile
            $useragent=$_SERVER['HTTP_USER_AGENT'];
            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
                $deviceis = "mobile";
            }else{
                $deviceis = "pc";
            }
    
            //test 0%
            if ($paramstbi['tbi_purcent_default'] == 2 || $paramstbi['tbi_purcent_default'] == 3 || $paramstbi['tbi_purcent_default'] == 4){
                $tbi_picture = 'https://api.tbibank.support/calculators/assets/img/tbim10.png';
            }else{
                $tbi_picture = 'https://api.tbibank.support/calculators/assets/img/tbim' . $paramstbi['tbi_container_reklama'] . '.png';
            }    
        }

        /** UNI Credit */
        if ($uniyes){
            $credituni_unicid = '9ce5287c-c8d1-4a22-878c-1a9d42d7160a';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_URL, 'https://unicreditconsumerfinancing.info/function/getparameters.php?cid='.$credituni_unicid);
            $paramsuni=json_decode(curl_exec($ch), true);
            curl_close($ch);
    
            $uni_logo = 'https://unicreditconsumerfinancing.info/dist/img/uni_logo.jpg';
            $uni_backurl = $paramsuni['uni_backurl'];
            $uni_picture = 'https://unicreditconsumerfinancing.info/calculators/assets/img/unim' . $paramsuni['uni_container_reklama'] . '.png';
            $uni_container_txt1 = $paramsuni['uni_container_txt1'];
            $uni_container_txt2 = $paramsuni['uni_container_txt2'];
            $uni_container_status = $paramsuni['uni_container_status'];    
        }

        $software_desktop = Software::where(['category_id' => 'desktop'])->get();
        $software_modules = Software::where(['category_id' => 'modules'])->get();
        $software_websoftware = Software::where(['category_id' => 'websoftware'])->get();
        $software_webservice = Software::where(['category_id' => 'webservice'])->get();
        $software_mobile = Software::where(['category_id' => 'mobile'])->get();
        $software_industry = Software::where(['category_id' => 'industry'])->get();
        /** Credit */
        return view('index')->with([
            'title' => 'Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи',
            'root_categories' => $root_categories,
            'webprojects' => $webprojects,
            'supports_gamings' => $supports_gamings,
            'supports_offices' => $supports_offices,
            'supports_printers' => $supports_printers,
            'supports_instalations' => $supports_instalations,
            'supports_networks' => $supports_networks,
            'supports_cameras' => $supports_cameras,
            'supports_softwares' => $supports_softwares,
            'paramstbi' => $paramstbi,
            'deviceis' => $deviceis,
            'tbi_picture' => $tbi_picture,
            'uni_container_status' => $uni_container_status,
            'uni_logo' => $uni_logo,
            'uni_picture' => $uni_picture,
            'uni_container_txt1' => $uni_container_txt1,
            'uni_container_txt2' => $uni_container_txt2,
            'uni_backurl' => $uni_backurl,
            'manufacturers' => $manufacturers,
            'software_desktop' => $software_desktop,
            'software_modules' => $software_modules,
            'software_websoftware' => $software_websoftware,
            'software_webservice' => $software_webservice,
            'software_mobile' => $software_mobile,
            'software_industry' => $software_industry,
            'tbiyes' => $tbiyes,
            'uniyes' => $uniyes
        ]);
    }
    /** end index menu */
    /** start forus menu */
    public function forUs(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('for_us')->with([
            'title' => 'Информация за нашата дейност | Авалон',
            'description' => 'Информация за нашата дейност.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, дейност',
            'root_categories' => $root_categories
        ]);
    }
    /** end forus menu */
    /** start contact menu */
    public function contact(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('contact')->with([
            'title' => 'За контакт с нас | Авалон',
            'description' => 'За контакт с нас.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, контакти',
            'root_categories' => $root_categories
        ]);
    }
    /** end contact menu */
    /** start credit menu */
    public function creditInfo(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('credit')->with([
            'title' => 'Информация покупка на стока на кредит | Авалон',
            'description' => 'Информация покупка на стока на кредит.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредит, изплащане',
            'root_categories' => $root_categories
        ]);
    }
    /** end credit menu */
    /** start credit menu */
    public function proizvoditeli(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $manufacturers = Manufacturer::all();
        return view('proizvoditeli')->with([
            'title' => 'Всички производители | Авалон',
            'description' => 'Всички производители.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, производители, продукти',
            'root_categories' => $root_categories,
            'manufacturers' => $manufacturers
        ]);
    }
    /** end credit menu */
    /** start magazin menu */
    public function shop(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.shop')->with([
            'title' => 'Магазин гр. Горна Оряховица | Авалон',
            'description' => 'Магазин за продажба на компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, компютърен магазин',
            'root_categories' => $root_categories
        ]);
    }
    /** end magazin menu */
    /** start komputaren serviz menu */
    public function service(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.service')->with([
            'title' => 'Компютърен сервиз | Авалон',
            'description' => 'Компютърен сервиз за компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, компютърен сервиз',
            'root_categories' => $root_categories
        ]);
    }
    /** end komputaren serviz menu */
    /** start serviz printeri menu */
    public function service_printeri(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.service-printeri')->with([
            'title' => 'Сервиз принтери | Авалон',
            'description' => 'Сервиз за принтери и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, принтер',
            'root_categories' => $root_categories
        ]);
    }
    /** end serviz printeri menu */
    /** start mrezi menu */
    public function mrezi(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.mrezi')->with([
            'title' => 'Компютърни мрежи | Авалон',
            'description' => 'Компютърни мрежи изграждане, поддръжка.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, мрежи',
            'root_categories' => $root_categories
        ]);
    }
    /** end mrezi menu */
    /** start news menu */
    public function news(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.news')->with([
            'title' => 'Новини | Авалон',
            'description' => 'Ноивини за продажба на компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, новини',
            'root_categories' => $root_categories
        ]);
    }
    /** end news menu */
    /** start sitemap menu */
    public function sitemap(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.sitemap')->with([
            'title' => 'Карта на сайта | Авалон',
            'description' => 'Карта на сайта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, карта на сайта',
            'root_categories' => $root_categories
        ]);
    }
    /** end sitemap menu */
    /** start terms menu */
    public function terms(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('terms')->with([
            'title' => 'Общи условия | Авалон',
            'description' => 'Общи условия.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, общи условия',
            'root_categories' => $root_categories
        ]);
    }
    /** end terms menu */
    /** start gdpr menu */
    public function gdpr(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('gdpr')->with([
            'title' => 'Инструкция за обработване на лични данни | Авалон',
            'description' => 'Инструкция за обработване на лични данни.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, лични данни',
            'root_categories' => $root_categories
        ]);
    }
    /** end gdpr menu */
    /** start politika menu */
    public function politika(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('politika')->with([
            'title' => 'Политика за поверителност | Авалон',
            'description' => 'Политика за поверителност.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, поверителност',
            'root_categories' => $root_categories
        ]);
    }
    /** end politika menu */
    /** start dostavka menu */
    public function dostavka(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('dostavka')->with([
            'title' => 'Доставка и плащане на стоки и услуги | Авалон',
            'description' => 'Доставка и плащане на стоки и услуги.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, доставка',
            'root_categories' => $root_categories
        ]);
    }
    /** end dostavka menu */
    /** start klienti menu */
    public function klienti(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('klienti')->with([
            'title' => 'Добра търговска практика. Клиентите за нас. | Авалон',
            'description' => 'Добра търговска практика. Клиентите за нас.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, клиенти',
            'root_categories' => $root_categories
        ]);
    }
    /** end klienti menu */
    /** start klient menu */
    public function klient(Request $request, $id=null){
        $root_categories = Category::where(['parent_id' => 0])->get();
        switch ($id) {
            case 1:
                $name = "Аркус АД";
                $img = "/images/klienti/arcus.jpg";
                $text = "АРКУС АД изразява своето удовлетворение от услугите предлагани от Авалон
                ООД, гр. Лясковец и особено от възможността за директен контакт с екипа
                на дружеството. Коректността и лоялността към нас съчетани с качеството
                на предлаганите услуги, покриват нашите изисквания към партньорите ни.
                Смятаме и за в бъдеще да използваме предлаганите услуги от Авалон ООД.";
                $sign = "Изп. Директор: инж. Банко Банков";
                break;
            case 2:
                $name = "Булгарконтрола ЕАД";
                $img = "/images/klienti/bulgarkontrola.jpg";
                $text = "Булгарконтрола ЕАД гр. Горна Оряховица ползва компютърни услуги и
                консумативи на Авалон ООД гр. Лясковец. Удовлетворени сме от лоялността
                и коректността към нас. Предлаганите услуги са качествени и най-важно
                своевременни. От поддръжката на компютърната техника и ползваните
                консумативи на фирмата сме много довлни. Лоялност, качество и
                своевременност са качества, които ценим. И за в бъдеще ще продължаваме
                да работим с тях.";
                $sign = "Ръководител: Веска Иванова";
                break;
            case 3:
                $name = "Булмекс ООД";
                $img = "/images/klienti/bulmex.jpg";
                $text = "От Булмекс удостоверяваме пред всички заинстересовани страни, че при
                всички случаи когато сме закупували компютърна техника и консумативи от
                Авалон ООД сме били обслужвани коректно и в срок. Не сме имали
                проблеми с качеството на продуктите. Изградили сме си мнението, че можем
                винаги да разчитаме на височкоквалифицираните им специалисти. Както и на
                добрата им организация във всички направления касаещи тяхната дейност.
                Настоящото писмо се издава в полза на Авалон ООД, за да послужи пред
                други заинтересовани организации.";
                $sign = "Управител: Петко Петков";
                break;
            case 4:
                $name = "Държавна Агенция Държавен Резерв и Военновременни Запаси";
                $img = "/images/klienti/darzaven_rezerv.jpg";
                $text = "С настоящето референтно писмо от Държавен резерв и военновременни запаси.
                Имаме удоволствието да изразим своето удовлетворение от фирма Авалон ООД
                като коректен и надежден партньор. Работата на екипа на фирмата се
                отличава с истински професионализъм и високо качество. Авалон ООД
                стриктно е изпълнявал своите задължения. Съобразявайки се с поетите към
                деловите си контрагенти ангажименти и извършване на уговорените услуги,
                с качество и в рамките на уфоворените срокове. В тази връзка
                препоръчваме Авалон ООД при изпълнението на дейности, свързани с
                доставката на висококачествени IT продъкти, консултации и решаване на
                проблеми на клиентите.";
                $sign = "Директор: Димитър Балджиев";
                break;
            case 5:
                $name = "Еурокс ПроМарк Консултинг ЕООД";
                $img = "/images/klienti/eurox.jpg";
                $text = "С настоящата, ние от Еурокс Промарк Консултинг, удостоверяваме пред
                всички заинтересовани страни. В досегашните ни бизнес взаимоотношения с
                Авалон ООД сме констатирали единствено и само изключително съвестно и
                професионално изпълнение на поетите от тях ангажименти. Високо качество,
                както на предлаганите продукти, така и на извършваните от тх услуги. От
                впечатленията, които вече имаме, сме си изградили мнението, че фирмата
                разполага с висококвалифицирани специалисти. Много добра организация във
                всички направления касаещи тяхната дейност. Настоящата референция се
                издава в полза на Авалон ООД за да послужи пред други заинтересовани
                организации.";
                $sign = "Управител: инж. Петър Хрулев";
                break;
            case 6:
                $name = "Георгиев-2000 ЕООД";
                $img = "/images/klienti/georgiev_2000.jpg";
                $text = "От Георгиев 2000 ЕООД работим с фирма Авалон ООД от създаването на
                нашата организация. Фирмата е наш основен партньор при закупуване на
                персонални компютри, периферни устройства за тях и друга офис техника.
                Както и при закупуването на софтуер. Висококвалифицираните специалисти
                на фирмата са с богат опит и защитили професионалния си имидж.
                Консултациите предоставени ни от тях за изключително полезни и ценни за
                нас. Деловите отношения с Авалон ООД се основават на професионализъм,
                коректност и акуратност. Проявяват се от служителите на фирмата при
                изпълнение на поетите ангажименти към нас като клиенти. Показаните
                качества от експертите на фирмата ни позволяват да дадем висока оценка
                на услугите на фирмата и да ги препоръчаме като партньори. Даваме
                съгласието си настоящата референция да се използва от Авалон ООД като
                търговска препоръка пред нагови потенциални бизнес партьори с цел
                доказване на коректност и квалификация.";
                $sign = "Управител: Пламен Георгиев";
                break;
            case 7:
                $name = "ГРИД ЕООД";
                $img = "/images/klienti/grid_eood.jpg";
                $text = "С настоящата референция от Грид бихме желали да изразим своята висока
                оценка за осъществените съвсемстно с Авалон ООД проекти. За изработка и
                дизайн в сферата на информационните технологии. Професионализма на екипа
                на Авалон ООД е осонован с коректността, точността и отзивчивостта
                относно иновациите в бранша. Множество консултации предоставени от екипа
                работил по проектите допринесоха за създаването на функционалност,
                предлагаща съществени предимства на всички наши клиенти. Успешната
                съвместна работа с Авалон ООД ни дава основание да дадем висока оценка
                за качеството на обслужване и навременните срокове за изпълнение на
                задачите. Горещо препоръчваме Авалон ООД като компетентен, надежден и
                коректен бизнес партньор.";
                $sign = "Управител: инж. Георги Георгиев";
                break;
            case 8:
                $name = "Канак ЕООД";
                $img = "/images/klienti/kanak.jpg";
                $text = "Фирма Канак ЕООД ползва продукти и услуги предлагани от фирма Авалон ООД
                от началото на 2003г. Закупената компютърна техника и периферни
                устройства. Както и помощта при изграждането на локалната мрежа и
                Интернет връзката на територията на нашето предприятие са факти. Те
                определят Авалон ООД като надежден, отговорен и коректен партньор. На
                тях винаги може да се разчита и да се има доверие. Оценката на
                качествата, взаимоотношенията и съвместната ни работа ни позволява да
                изберем Авалон ООД като наш собствен доставчик и засега оставаме с
                намерението за по-успешна и ползотворна дейност в бъдеще.";
                $sign = "Георги Пеев";
                break;
            case 9:
                $name = "Каси Темпра Пак ЕООД";
                $img = "/images/klienti/kasi.jpg";
                $text = "Каси Темпра Пак ООД сме клиенти на фирма Авалон ООД от 2003г., когато
                сме закупили първата конфигурация от тях. Удовлетворени сме от
                качеството на предлаганата техника и преди всичко от професионалната
                консултация, която не предложиха, за да изберем техника, необходима за
                нашите нужди. Избрахме Авалон ООД заради коректността, професионализма и
                ангажираното отношение към нас.";
                $sign = "Управител: инж. Красимира Коцева";
                break;
            case 10:
                $name = "Медия 5100 ООД";
                $img = "/images/klienti/media_5100.jpg";
                $text = "От Медия 5100 ползваме услугите на фирма Авалон ООД - гр. Лясковец от
                началото на 2003г. Досега сме купували от Авалон компютърна техника и
                периферни устройства. Доволни сме от техниката предлагана ни от Авалон,
                но особено ценен за нас е геранционният и извънгаранционен сервиз,
                осъществяван от техния екип. Изключително сме доволни от възможността за
                директен контакт с екипа на фирмата и най-вече от тяхната отзивчивост
                при възникнали проблеми. Коректни са към нас и засега покриват
                изискванията ни за качество на ползваните от нас продукти и услуги.
                Категорични сме, че и в бъдеще ще продължаваме да работим заедно. Затова
                смело ги препоръчваме и на други фирми, които в лицето на Авалон ООД ще
                намерят наистина сигурен и надежден партньор в бизнеса си.";
                $sign = "Управител: Димитър Савов";
                break;
            case 11:
                $name = "Монолит 99 ООД";
                $img = "/images/klienti/monolit_99.jpg";
                $text = "От Монилит-99 ползваме услугите предлагани от фирма Авалон ООД гр.
                Лясковец от началото на 2003г. Доволни сме от техникара предлагана ни от
                Авалон и особено от гаранционния и извънгаранционен сервиз осъществяван
                от техния екип. Досега сме закупували от Авалон компютърна техника и
                периферни устройства. Добро впечатление ни прави възможността за
                директен контакт с екипа на фирмата, както и тяхната отзивчивост при
                възникнали проблеми. Коректни са към нас и засега покриват изискванията
                ни за качество на използваните от нас продукти и услуги.";
                $sign = "Управител: Иван Михнев";
                break;
            case 12:
                $name = "МСМ ГАЗ ООД";
                $img = "/images/klienti/msm_gas.jpg";
                $text = "Нашето Дружество, МСМ ГАЗ, се ползва от слугите на Авалон ООД в областта
                на поддръжката на компютърната ни техника, софтуера и web дизайна от
                самото и създаване в началото на 2003г. С колегите от фирмата
                поддържваме работни взаимоотношения и дълго преди създаването на Авалон
                ООД. Доволни сме от експедитивността и коректността в работата им. Почти
                цялата ни компютърна техника е закупена от Авалон ООД и чрез
                съдействието на нейните специалисти. Проектът и поддръжката на
                страницата на фирмата ни в Интернет е осъществен и се извършва изцяло от
                Авалон ООД. Имайки предвид дългогодишното ни успешно сътрудничество със
                специалистите от Авалон ООД, бихме препоръчвали техните услуги в
                областта на компютърните технологии и на други фирми.";
                $sign = "Управител: инж. Мирослав Марков";
                break;
            case 13:
                $name = "ЕТ Полет 90";
                $img = "/images/klienti/polet_90.jpg";
                $text = "ЕТ Полет 90 в качеството си на клиент на Авалон ООД гр. Лясковец издава
                настоящата референция в уверение на това, че те са наш лоялен и коректен
                партньор и доставчик. Нашите търговски взаимоотношения датират от 2004г.
                И от тогава досега всички наши заявки и запитвания са били навременно и
                правилно обработвани и доставяни. За времето през което те са наш
                доставчик не сме предявявали рекламации по отношение на доставените от
                тях услуги, консумативи и техника. Винаги са реагирали бързо и адекватно
                към нашите запитвания и проблеми. По наше мнение Авалон ООД е дружество
                с добра система на организация и изграден авторитет на българския пазар,
                което е също причина да ги изберем за наш партьор. Издаваме тази
                референция на Авалон ООД с цел тя да им послуци при контактите им с
                техни потенциални партньори.";
                $sign = "Мариан Джанов";
                break;
            case 14:
                $name = "Прити 95 ООД";
                $img = "/images/klienti/priti.jpg";
                $text = "Ползваме услугите предлагани от Авалон ООД от началото на 2003 г. Доволни
                сме от техниката предлагана ни от Авалон ООД и особено от гаранционния и
                извънгаранционен сервиз осъществяван от техния екип. Досега сме
                закупували от Авалон ООД компютърна техника и периферни устройства.
                Добро впечатление ни прави възможността за директен контакт с екипа на
                фирмата, както и тяхната отзивчивост при възникнали проблеми. Коректни
                са към нас и засега покриват изискванията ни за качество на използваните
                от нас продукти и услуги.";
                $sign = "Президент: Евгени Иванов";
                break;
            case 15:
                $name = "Складова Техника АД";
                $img = "/images/klienti/skladova_tehnika.jpg";
                $text = "С настоящето, аз, долуподписаният инж. ЮЛИАН ЦВЕТАНОВ ГЕЧЕВ, ЕГН
                6806101467, л.к №112555202м издадена на 19.02.2000г. от МВР Велико
                Търново, тел. : 60077. На длъжност Директор Външна Търговия при фирма
                Складова Техника АД декларирам, че фирма Складова Техника АД. Се
                намира в перфектни взаимоотношения с фирма Авалон ООД с адрес на
                управление в гр. Лясковец 5140, ул. Васил Левски № 8Б Досега фирма
                Авалон ООД е изградила компютърни мрежи в Управлението на фирма
                Складова техника АД и в Направление Битова Техника към Складова
                Техника АД. Предвижда се свързване между отделните направления на
                нашето Дружество. Поради проявявания изключителен професионализъм,
                перфектно качество и добри цени, то също така ще бъде изпълнено от фирма
                Авалон ООД. Фирма Складова Техника АД е закупила над двадесет броя
                нови компютърни конфигурации от фирма Авалон ООД. Също така и девет
                броя употребявани принтери и др. техника. Фирма Авалон ООД осигурява
                отличен сервиз и поддръжка на техниката, отстранява в много кратки
                срокове с голяма вещина каквито и да са възникнали проблеми. Изложеното
                по-горе е гаранция за продължаване и в бъдеще на успешната съвсместна
                дейност между фирма Складова Техника АД и фирма Авалон ООД.";
                $sign = "Директор Външна Търговия: инж. Юлиян Гечев";
                break;
            case 16:
                $name = "СОТ Велико Търново ЕООД";
                $img = "/images/klienti/sot.jpg";
                $text = "Партньорството между СОТ В. Търново ЕООД и Авалон ООД започна преди
                повече от 2 години. Отношенията между двете фирми са както служеби, така
                и приятелски. Изключително сме доволни от предлаганите стоки и услуги.
                Бързите отговори, реакции и перфектния сервиз, гарантират за бъдещите
                взаимоотношения между двете фирми! Фирма Авалон ООД покрива изцяло
                нуждите ни, свързани с техния бранш.";
                $sign = "Управител: инж. Марин Нешев";
                break;
            case 17:
                $name = "Винпром АД";
                $img = "/images/klienti/vinprom.jpg";
                $text = "Винпром АД, град Велико Търново, издава настоящата референция на Авалон
                ООД, град Лясковец, регистрирано по ф.д.№486 / 2003 година на ВТОС, със
                седалище и адрес на управление гр. Лясковец, ул. Васил Левски №8.
                Фирмата се представлява от Илко Николов Иванов - управител. Регистрации
                : шифър по Булстат № 104605318, Данъчен № 10550002434, ТДД град Горна
                Оряховица. С Авалон ООД работим от месец май 2003 година. От тогава до
                сега Винпром АД купува компютърни системи и консумативи за тях само от
                Авалон ООД. Фирмата се наложи в нашия регион като изключително
                коректен доставчик в областта на компютърните системи и технологии.
                Дружеството е специализирано в изграждане и поддръжка на компютърни
                мрежи. Авалон ООД разполага със собствен магазин, сервизна база и
                квалифициран персонал. Към настоящия момент не сме предявявали абсолютно
                никакви претенции относно качеството на работа и коректността на фирма
                Авалон ООД.";
                $sign = "Изп. Директор: инж. Маруся Йорданова";
                break;
            case 18:
                $name = "VT Servicess Ltd";
                $img = "/images/klienti/vt_services.jpg";
                $text = "We, VT Services Ltd., have used the services of Avalon Limited. Bulgarian
                registered company who is extremely capabe and apcialise in the various
                fields of computer technology. They have installed the office computer
                system for our company, plus website design. The equipment and products
                provided by Avalon Limited have performed excellently. They provide
                excellent after sales service together with ongoing help and support
                when needed. We would highly recomment Avalon Ltd to any company or
                organisation who require a first class service.";
                $sign = "Director: Malcolm Yaxley";
                break;
            case 19:
                $name = "Захарни Заводи АД";
                $img = "/images/klienti/zaharni_zavodi.jpg";
                $text = "Авалон ООД гр. Лясковец, ул Васил Левски 8Б е наш партньор в доставката
                на компютърни системи и технологии и техните консумативи. Преките ни
                впечатления от тяхната работа са в професионално отношение, коректно,
                точно и навременно изпълнение на доставките, което улеснява работата на
                целия екип. С настоящата референция представяме Авалон ООД на новите им
                партньори и им желаем ползотворно сътрудничество.";
                $sign = "Изп. Директор: инж. Румен Иванов";
                break;
            default:
                $name = "";
                $img = "";
                $text = "";
                $sign = "";
            break;
        }
        return view('klient')->with([
            'title' => 'Добра търговска практика. Клиентите за нас. Отзив от клиент. | Авалон',
            'description' => 'Добра търговска практика. Клиентите за нас. Отзив от клиент.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, клиенти, отзив',
            'root_categories' => $root_categories,
            'name' => $name,
            'img' => $img,
            'text' => $text,
            'sign' => $sign
        ]);
    }
    /** end klienti menu */
    /** start vrashtane menu */
    public function vrashtane(Request $request){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $message = '';

        if ($request->isMethod('post')){
            $this->validate($request, [
                'f_name' => 'required',
                'f_last_name' => 'required',
                'f_email' => 'required',
                'f_phone' => 'required',
                'f_order' => 'required',
                'f_product_name' => 'required',
                'f_product_code' => 'required',
                'f_product_qt' => 'required'
            ],
            [
                'f_name.required' => 'Задължително е въвеждането на Вашето име!',
                'f_last_name.required' => 'Задължително е въвеждането на Вашата фамилия!',
                'f_email.required' => 'Задължително е въвеждането на Вашия E-Mail адрес!',
                'f_phone.required' => 'Задължително е въвеждането на Вашия телефон!',
                'f_order.required' => 'Задължително е въвеждането на Поръчката!',
                'f_product_name.required' => 'Задължително е въвеждането на името на продукта!',
                'f_product_code.required' => 'Задължително е въвеждането на кода на продукта!',
                'f_product_qt.required' => 'Задължително е въвеждането на количеството на продукта!'
            ]);

            $name = $request->input('f_name');
            $last_name = $request->input('f_last_name');
            $email = $request->input('f_email');
            $phone = $request->input('f_phone');
            $order = $request->input('f_order');
            $product_name = $request->input('f_product_name');
            $product_code = $request->input('f_product_code');
            $product_qt = $request->input('f_product_qt');
            $pricina = $request->input('f_pricina');
            $otvaran = $request->input('f_otvaran');
            $description = $request->input('f_description');

            //to admin
            $objMailAdmin = new \stdClass();
            $objMailAdmin->app_name = env('APP_NAME', 'Авалон Магазин');
            $objMailAdmin->name = $name;
            $objMailAdmin->last_name = $last_name;
            $objMailAdmin->email = $email;
            $objMailAdmin->phone = $phone;
            $objMailAdmin->order = $order;
            $objMailAdmin->product_name = $product_name;
            $objMailAdmin->product_code = $product_code;
            $objMailAdmin->product_qt = $product_qt;
            $objMailAdmin->pricina = $pricina;
            $objMailAdmin->otvaran = $otvaran;
            $objMailAdmin->description = $description;
            $objMailAdmin->sender = env('MAIL_USERNAME', 'ilko.iv@gmail.com');
            $objMailAdmin->receiver = 'Администратор Авалон Магазин';

            Mail::to('home@avalonbg.com')->send(new ReturnProduct($objMailAdmin));
            $message = '<b>Благодарим Ви!</b> Вашето съобщение е получено от екипа на Авалон ООД. Очаквайте свързване за уточняване на връщането.';
        }

        return view('vrashtane')->with([
            'title' => 'Връщане на стоки | Авалон',
            'description' => 'Връщане на стоки.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, връщане на стока',
            'root_categories' => $root_categories,
            'message' => $message
        ]);
    }
    /** end vrashtane menu */
    /** start desktop software */
    public function software($code=null){
        $root_categories = Category::where(['parent_id' => 0])->get();

        if ($code != null){
          $software = Software::where(['code' => $code])->first();
          if (empty($software)){
            return abort(404);
          }else{
            return view('software')->with([
                'title' => $software->shortDescription . ' | Авалон',
                'description' => $software->shortDescription,
                'keywords' => $software->keywords,
                'root_categories' => $root_categories,
                'software' => $software
            ]);
          }
        }else{
          return abort(404);
        }
    }
    /** end desktop software */
    /** start cc_woocommerce */
    public function cc_woocommerce(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_woocommerce')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ за WooCommerce | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ за WooCommerce.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, woocommerce',
            'root_categories' => $root_categories
        ]);
    }
    /** end cc_woocommerce */
    /** start cc_opencart */
    public function cc_opencart(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_opencart')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ за OpenCart | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ за OpenCart.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, opencart',
            'root_categories' => $root_categories
        ]);
    }
    /** end cc_opencart */
    /** start cc_magento */
    public function cc_magento(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_magento')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, magento',
            'root_categories' => $root_categories
        ]);
    }
    /** end cc_magento */
    /** start cc_prestashop */
    public function cc_prestashop(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_prestashop')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, prestashop',
            'root_categories' => $root_categories
        ]);
    }
    /** end cc_prestashop */
    /** start maxtrade_store */
    public function maxtrade_store(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-soft.maxtrade_store')->with([
            'title' => 'Maxtrade Store – Програма за подпомагане дейността на хладилен склад | Авалон',
            'description' => 'Maxtrade Store – Програма за подпомагане дейността на хладилен склад.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, склад',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade_store */
    /** start maxtrade_storeerp */
    public function maxtrade_storeerp(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-soft.maxtrade_storeerp')->with([
            'title' => 'Maxtrade StoreERP Складово Стопанство – програма за следене на виртуалните движения на стоки в склад | Авалон',
            'description' => 'Складово Стопанство – програма за следене на виртуалните движения на стоки в склад.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, виртуален склад',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade_storeerp */
    /** start maxtrade_ins */
    public function maxtrade_ins(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-soft.maxtrade_ins')->with([
            'title' => 'Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция | Авалон',
            'description' => 'Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, Застрахователна агенция',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade_ins */
    /** start avamb */
    public function avamb(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-soft.avamb')->with([
            'title' => 'Програма организатор за малък, среден, а защо не и голям бизнес | Авалон',
            'description' => 'Програма организатор за малък, среден, а защо не и голям бизнес.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, организатор',
            'root_categories' => $root_categories
        ]);
    }
    /** end avamb */
    /** start website */
    public function website(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-service.website')->with([
            'title' => 'Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него | Авалон',
            'description' => 'Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, сайт',
            'root_categories' => $root_categories
        ]);
    }
    /** end website */
    /** start onlineshop */
    public function onlineshop(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-service.onlineshop')->with([
            'title' => 'Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него | Авалон',
            'description' => 'Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, онлайн магазин',
            'root_categories' => $root_categories
        ]);
    }
    /** end onlineshop */
    /** start webservice */
    public function webservice(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web-service.webservice')->with([
            'title' => 'WEB услуги, инсталации, поддръжка | Авалон',
            'description' => 'WEB услуги, инсталации, поддръжка.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, web услуги',
            'root_categories' => $root_categories
        ]);
    }
    /** end webservice */
    /** start avambmobile */
    public function avambmobile(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('mobile.avambmobile')->with([
            'title' => 'AVAMB mobile | Авалон',
            'description' => 'AVAMB mobile.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, mobile',
            'root_categories' => $root_categories
        ]);
    }
    /** end avambmobile */
    /** start ikunk */
    public function ikunk(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('industry.ikunk')->with([
            'title' => 'Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК | Авалон',
            'description' => 'Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, ИКУНК',
            'root_categories' => $root_categories
        ]);
    }
    /** end ikunk */
    /** start kantar */
    public function kantar(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('industry.kantar')->with([
            'title' => 'Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар | Авалон',
            'description' => 'Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, кантар',
            'root_categories' => $root_categories
        ]);
    }
    /** end kantar */

}
