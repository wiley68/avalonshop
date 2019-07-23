<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Project;

class IndexController extends Controller
{
    /** start index menu */
    public function index(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        $webprojects = Project::where(['category_id' => 'webprojects'])->get();
        return view('index')->with([
            'title' => 'Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи',
            'root_categories' => $root_categories,
            'webprojects' => $webprojects
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
    /** start web menu */
    public function web(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('avalon.web')->with([
            'title' => 'WEB проекти | Авалон',
            'description' => 'WEB проекти - проектиране, внедряване.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, проектиране',
            'root_categories' => $root_categories
        ]);
    }
    /** end web menu */
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
    /** start vrashtane menu */
    public function vrashtane(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('vrashtane')->with([
            'title' => 'Връщане на стоки | Авалон',
            'description' => 'Връщане на стоки.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, връщане на стока',
            'root_categories' => $root_categories
        ]);
    }
    /** end vrashtane menu */
    /** start maxtrade change */
    public function maxtrade_change(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_change')->with([
            'title' => 'Програма за регистриране на дейността по продажба и обмен на валута | Авалон',
            'description' => 'Програма за регистриране на дейността по продажба и обмен на валута.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, валутно бюро',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade change */
    /** start maxtrade cmr */
    public function maxtrade_cmr(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_cmr')->with([
            'title' => 'Програма за съхранение и печат на митнически товарителници (ЧМР) | Авалон',
            'description' => 'Програма за съхранение и печат на митнически товарителници (ЧМР).',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, чмр',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade cmr */
    /** start maxtrade ctm */
    public function maxtrade_ctm(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_ctm')->with([
            'title' => 'Програма за управление на дейността на Служба по трудова медицина | Авалон',
            'description' => 'Програма за управление на дейността на Служба по трудова медицина.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, медицина',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade ctm */
    /** start maxtrade lab */
    public function maxtrade_lab(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_lab')->with([
            'title' => 'Програма за управление на дейността на Лаборатория | Авалон',
            'description' => 'Програма за управление на дейността на Лаборатория.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, лаборатория',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade lab */
    /** start maxtrade slr */
    public function maxtrade_slr(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_slr')->with([
            'title' => 'Програма за управление на дейността на Ловно Рибарско Дружество | Авалон',
            'description' => 'Програма за управление на дейността на Ловно Рибарско Дружество.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, ловно рибарско дружество',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade slr */
    /** start maxtrade */
    public function maxtrade_smdc(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('desktop.maxtrade_smdc')->with([
            'title' => 'Програма за управление на документите от Система по качеството | Авалон',
            'description' => 'Програма за управление на документите от Система по качеството.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, документи',
            'root_categories' => $root_categories
        ]);
    }
    /** end maxtrade */
    /** start cc_woocommerce */
    public function cc_woocommerce(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_woocommerce')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, woocommerce',
            'root_categories' => $root_categories
        ]);
    }
    /** end cc_woocommerce */
    /** start cc_opencart */
    public function cc_opencart(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('web.cc_opencart')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
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
    /** start support all */
    public function supportall(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('support.all')->with([
            'title' => 'Техническа поддръжка и ревюта | Авалон',
            'description' => 'Техническа поддръжка и ревюта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка',
            'root_categories' => $root_categories
        ]);
    }
    /** end support all */
}
