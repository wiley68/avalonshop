<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class IndexController extends Controller
{
    /** start index menu */
    public function index(){
        $root_categories = Category::where(['parent_id' => 0])->get();
        return view('index')->with([
            'title' => 'Софтуер - продажба на компютърна техника | Авалон',
            'description' => 'Проектиране и инсталиране на софтуер. Продажба на компютърна техника.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи',
            'root_categories' => $root_categories
        ]);
    }
    /** end index menu */
    /** start forus menu */
    public function forUs(){
        return view('for_us')->with([
            'title' => 'Информация за нашата дейност | Авалон',
            'description' => 'Информация за нашата дейност.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, дейност'
        ]);
    }
    /** end forus menu */
    /** start contact menu */
    public function contact(){
        return view('contact')->with([
            'title' => 'За контакт с нас | Авалон',
            'description' => 'За контакт с нас.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, контакти'
        ]);
    }
    /** end contact menu */
    /** start magazin menu */
    public function shop(){
        return view('avalon.shop')->with([
            'title' => 'Магазин гр. Горна Оряховица | Авалон',
            'description' => 'Магазин за продажба на компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, компютърен магазин'
        ]);
    }
    /** end magazin menu */
    /** start komputaren serviz menu */
    public function service(){
        return view('avalon.service')->with([
            'title' => 'Компютърен сервиз | Авалон',
            'description' => 'Компютърен сервиз за компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, компютърен сервиз'
        ]);
    }
    /** end komputaren serviz menu */
    /** start serviz printeri menu */
    public function service_printeri(){
        return view('avalon.service-printeri')->with([
            'title' => 'Сервиз принтери | Авалон',
            'description' => 'Сервиз за принтери и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, принтер'
        ]);
    }
    /** end serviz printeri menu */
    /** start mrezi menu */
    public function mrezi(){
        return view('avalon.mrezi')->with([
            'title' => 'Компютърни мрежи | Авалон',
            'description' => 'Компютърни мрежи изграждане, поддръжка.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, мрежи'
        ]);
    }
    /** end mrezi menu */
    /** start web menu */
    public function web(){
        return view('avalon.web')->with([
            'title' => 'WEB проекти | Авалон',
            'description' => 'WEB проекти - проектиране, внедряване.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, проектиране'
        ]);
    }
    /** end web menu */
    /** start news menu */
    public function news(){
        return view('avalon.news')->with([
            'title' => 'Новини | Авалон',
            'description' => 'Ноивини за продажба на компютърна техника и софтуер.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, новини'
        ]);
    }
    /** end news menu */
    /** start sitemap menu */
    public function sitemap(){
        return view('avalon.sitemap')->with([
            'title' => 'Карта на сайта | Авалон',
            'description' => 'Карта на сайта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, карта на сайта'
        ]);
    }
    /** end sitemap menu */
    /** start terms menu */
    public function terms(){
        return view('terms')->with([
            'title' => 'Общи условия | Авалон',
            'description' => 'Общи условия.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, общи условия'
        ]);
    }
    /** end terms menu */
    /** start gdpr menu */
    public function gdpr(){
        return view('gdpr')->with([
            'title' => 'Инструкция за обработване на лични данни | Авалон',
            'description' => 'Инструкция за обработване на лични данни.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, лични данни'
        ]);
    }
    /** end gdpr menu */
    /** start politika menu */
    public function politika(){
        return view('politika')->with([
            'title' => 'Политика за поверителност | Авалон',
            'description' => 'Политика за поверителност.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, поверителност'
        ]);
    }
    /** end politika menu */
    /** start dostavka menu */
    public function dostavka(){
        return view('dostavka')->with([
            'title' => 'Доставка и плащане на стоки и услуги | Авалон',
            'description' => 'Доставка и плащане на стоки и услуги.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, доставка'
        ]);
    }
    /** end dostavka menu */
    /** start vrashtane menu */
    public function vrashtane(){
        return view('vrashtane')->with([
            'title' => 'Връщане на стоки | Авалон',
            'description' => 'Връщане на стоки.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, връщане на стока'
        ]);
    }
    /** end vrashtane menu */
    /** start maxtrade change */
    public function maxtrade_change(){
        return view('desktop.maxtrade_change')->with([
            'title' => 'Програма за регистриране на дейността по продажба и обмен на валута | Авалон',
            'description' => 'Програма за регистриране на дейността по продажба и обмен на валута.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, валутно бюро'
        ]);
    }
    /** end maxtrade change */
    /** start maxtrade cmr */
    public function maxtrade_cmr(){
        return view('desktop.maxtrade_cmr')->with([
            'title' => 'Програма за съхранение и печат на митнически товарителници (ЧМР) | Авалон',
            'description' => 'Програма за съхранение и печат на митнически товарителници (ЧМР).',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, чмр'
        ]);
    }
    /** end maxtrade cmr */
    /** start maxtrade ctm */
    public function maxtrade_ctm(){
        return view('desktop.maxtrade_ctm')->with([
            'title' => 'Програма за управление на дейността на Служба по трудова медицина | Авалон',
            'description' => 'Програма за управление на дейността на Служба по трудова медицина.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, медицина'
        ]);
    }
    /** end maxtrade ctm */
    /** start maxtrade lab */
    public function maxtrade_lab(){
        return view('desktop.maxtrade_lab')->with([
            'title' => 'Програма за управление на дейността на Лаборатория | Авалон',
            'description' => 'Програма за управление на дейността на Лаборатория.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, лаборатория'
        ]);
    }
    /** end maxtrade lab */
    /** start maxtrade slr */
    public function maxtrade_slr(){
        return view('desktop.maxtrade_slr')->with([
            'title' => 'Програма за управление на дейността на Ловно Рибарско Дружество | Авалон',
            'description' => 'Програма за управление на дейността на Ловно Рибарско Дружество.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, ловно рибарско дружество'
        ]);
    }
    /** end maxtrade slr */
    /** start maxtrade */
    public function maxtrade_smdc(){
        return view('desktop.maxtrade_smdc')->with([
            'title' => 'Програма за управление на документите от Система по качеството | Авалон',
            'description' => 'Програма за управление на документите от Система по качеството.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, документи'
        ]);
    }
    /** end maxtrade */
    /** start cc_woocommerce */
    public function cc_woocommerce(){
        return view('web.cc_woocommerce')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, woocommerce'
        ]);
    }
    /** end cc_woocommerce */
    /** start cc_opencart */
    public function cc_opencart(){
        return view('web.cc_opencart')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, opencart'
        ]);
    }
    /** end cc_opencart */
    /** start cc_magento */
    public function cc_magento(){
        return view('web.cc_magento')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, magento'
        ]);
    }
    /** end cc_magento */
    /** start cc_prestashop */
    public function cc_prestashop(){
        return view('web.cc_prestashop')->with([
            'title' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ | Авалон',
            'description' => 'Модул за продаване на стоки от онлайн магазини чрез TBI BANK, UNI CREDIT И ПАРИБА ЛИЧНИ ФИНАНСИ.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, prestashop'
        ]);
    }
    /** end cc_prestashop */
    /** start maxtrade_store */
    public function maxtrade_store(){
        return view('web-soft.maxtrade_store')->with([
            'title' => 'Maxtrade Store – Програма за подпомагане дейността на хладилен склад | Авалон',
            'description' => 'Maxtrade Store – Програма за подпомагане дейността на хладилен склад.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, склад'
        ]);
    }
    /** end maxtrade_store */
    /** start maxtrade_storeerp */
    public function maxtrade_storeerp(){
        return view('web-soft.maxtrade_storeerp')->with([
            'title' => 'Maxtrade StoreERP Складово Стопанство – програма за следене на виртуалните движения на стоки в склад | Авалон',
            'description' => 'Складово Стопанство – програма за следене на виртуалните движения на стоки в склад.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, виртуален склад'
        ]);
    }
    /** end maxtrade_storeerp */
    /** start maxtrade_ins */
    public function maxtrade_ins(){
        return view('web-soft.maxtrade_ins')->with([
            'title' => 'Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция | Авалон',
            'description' => 'Maxtrade INS, програма за регистриране на дейността на Застрахователна агенция.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, Застрахователна агенция'
        ]);
    }
    /** end maxtrade_ins */
    /** start avamb */
    public function avamb(){
        return view('web-soft.avamb')->with([
            'title' => 'Програма организатор за малък, среден, а защо не и голям бизнес | Авалон',
            'description' => 'Програма организатор за малък, среден, а защо не и голям бизнес.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, организатор'
        ]);
    }
    /** end avamb */
    /** start website */
    public function website(){
        return view('web-service.website')->with([
            'title' => 'Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него | Авалон',
            'description' => 'Изграждане на Стандартен уеб сайт по поръчка на клиента с информация предоставена ни от него.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, сайт'
        ]);
    }
    /** end website */
    /** start onlineshop */
    public function onlineshop(){
        return view('web-service.onlineshop')->with([
            'title' => 'Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него | Авалон',
            'description' => 'Изграждане на стандартен онлайн магазин по поръчка на клиента с информация предоставена ни от него.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, онлайн магазин'
        ]);
    }
    /** end onlineshop */
    /** start webservice */
    public function webservice(){
        return view('web-service.webservice')->with([
            'title' => 'WEB услуги, инсталации, поддръжка | Авалон',
            'description' => 'WEB услуги, инсталации, поддръжка.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, web услуги'
        ]);
    }
    /** end webservice */
    /** start avambmobile */
    public function avambmobile(){
        return view('mobile.avambmobile')->with([
            'title' => 'AVAMB mobile | Авалон',
            'description' => 'AVAMB mobile.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, mobile'
        ]);
    }
    /** end avambmobile */
    /** start ikunk */
    public function ikunk(){
        return view('industry.ikunk')->with([
            'title' => 'Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК | Авалон',
            'description' => 'Maxtrade IKUNK – SCADA софтуер за мониторинг и управление на ИКУНК.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, ИКУНК'
        ]);
    }
    /** end ikunk */
    /** start kantar */
    public function kantar(){
        return view('industry.kantar')->with([
            'title' => 'Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар | Авалон',
            'description' => 'Maxtrade KNTR. Изработване на софтуер за отчитане, съхранение и обработване на данните от електронен авто кантар.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, кантар'
        ]);
    }
    /** end kantar */
    /** start support all */
    public function supportall(){
        return view('support.all')->with([
            'title' => 'Техническа поддръжка и ревюта | Авалон',
            'description' => 'Техническа поддръжка и ревюта.',
            'keywords' => 'софтуер, програми, компютри, продажба, сервиз, консумативи, кредитен калкулатор, поддръжка'
        ]);
    }
    /** end support all */
}
