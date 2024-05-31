<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('company.part.index');
});

/////////////company part\\\\
Route::get('index', function () {
    return view('company.part.index');
});


//////////////////اضافة شركة///////////////////////
Route::post('comp', 'company\part1\sys_companyController@store')->name('files.comp');
/////////// حذف    شركة ////////////
Route::get('dalcomp/{comp_id}','company\part1\sys_companyController@distory');

//////////////////اضافة الفرع ///////////////////////
Route::post('branch', 'company\part1\sys_branchController@store')->name('files.branch');
/////////// حذف    الفرع ////////////
Route::get('dalbranch/{branch_id}','company\part1\sys_branchController@distory');
///////////اضافة بيانات قسم او ادارة/////////////
Route::get('deptSort','company\part1\sys_deptController@Stort');
/////////// حذف    بيانات قسم او ادارة ////////////
Route::get('daldept/{dept_id}','company\part1\sys_deptController@distory');
//////////////  عرض الشركة الفروع  الاقسام//////////////
Route::get('companies', 'company\part1\sys_companyController@show');




///////////اضافة مركز التكلة/////////////
Route::get('contersSort','company\part\sys_accontsController@Stort');
/////////// حذف   مركز التكلة ////////////
Route::get('dalconters/{conter_id}','company\part\sys_accontsController@distory');
///////////اضافة العملات/////////////
Route::get('currenciesSort','company\part2\sys_coursesController@Stort');
/////////// حذف   العملات ////////////
Route::get('dalcurrencies/{currency_id}','company\part2\sys_coursesController@distory');
///////////اضافة البنك/////////////
Route::get('bankSort','company\part2\sys_bankController@Stort');
/////////// حذف   البنك ////////////
Route::get('dalbank/{bank_id}','company\part2\sys_bankController@distory');
//////////// (مركز التكلة_العملات_البنك) عرض  الحسابات////////////////////
Route::get('sys','company\part\sys_accontsController@show');





///////////اضافة   انواع وثائق  /////////////
Route::get('emply_doc_typesSort','company\part2\emply_doc_typesController@Stort');
///////////حذف انواع وثائق/////////////
Route::get('dalemply_doc_types/{doc_type_id}','company\part2\emply_doc_typesController@distory');
///////////اضافة   انواع الاثباتات  /////////////
Route::get('prooftypeSort','company\part2\sys_prooftypeController@Stort');
///////////حذف انواع الاثباتات/////////////
Route::get('dalprooftype/{prooft_id}','company\part2\sys_prooftypeController@distory');
//////////// عرض    انواع وثائق &الاثباتات  ////////////////////
Route::get('employeesettings','company\part2\sys_prooftypeController@show');

//////////// عرض    انواع العقد   ////////////////////
Route::get('contracts','company\part2\sys_contractsController@show');


Route::get('textr', function () {
    return view('dynamic');
});
/////////////company part1\\\\

///////////اضافة المواهلات/////////////
Route::get('qualificationStort','company\part1\sys_qualificationController@Stort');
///////////تعديل المواهلات/////////////
Route::get('desys_qualification/{qualification_id}','company\part1\sys_qualificationController@display');
//////////// عرض تفاصيل المواهلات////////////////////
Route::get('view-qualification/{qualification_id}','company\part1\sys_qualificationController@display');
///////////حذف المواهلات/////////////
Route::get('dalsys_qualification/{qualification_id}','company\part1\sys_qualificationController@distory');
//////////// عرض المواهلات////////////////////
Route::get('qualifications','company\part1\sys_qualificationController@show');


///////////اضافة التخصوصات/////////////
Route::get('specializationSort','company\part1\sys_specialtiesController@Stort');
///////////حذف التخصوصات/////////////
Route::get('dalspecialization/{specialties_Id}','company\part1\sys_specialtiesController@distory');
//////////// عرض تفاصيل التخصوصات////////////////////
Route::get('view-specialization/{specialties_Id}','company\part1\sys_specialtiesController@display');
//////////// عرض التخصوصات////////////////////
Route::get('specialization','company\part1\sys_specialtiesController@show');




///////////اضافة الفئات/////////////
Route::get('categoriesSort','company\part1\sys_categoriesController@Stort');
//////////// عرض تفاصيل الفئات////////////////////
Route::get('view-categories/{category_id}','company\part1\sys_categoriesController@display');
///////////حذف الفئات/////////////
Route::get('dalcategories/{category_id}','company\part1\sys_categoriesController@distory');
//////////// عرض الفئات////////////////////
Route::get('categories','company\part1\sys_categoriesController@show');




///////////اضافة المسام الوظيفي/////////////
Route::get('job-titlesSort','company\part1\sys_jobtitlesController@Stort');
/////////// حذف المسام الوظيفي////////////
Route::get('daljob-titles/{jop_id}','company\part1\sys_jobtitlesController@distory');
//////////// عرض تفاصيل المسام الوظيفي////////////////////
Route::get('view-job-titles/{category_id}','company\part1\sys_jobtitlesController@display');
//////////// عرض المسام الوظيفي////////////////////
Route::get('job-titles','company\part1\sys_jobtitlesController@show');



//////////اضافة الدرجات الوظفية/////////////
Route::get('jopdegreeSort','company\part1\sys_jopdegreeController@Stort');
/////////// حذف الدرجات الوظفية////////////
Route::get('daljob-grades/{jopdegree_id}','company\part1\sys_jopdegreeController@distory');
//////////// عرض تفاصيل الدرجات الوظفية////////////////////
Route::get('view-job-grades/{jopdegree_id}','company\part1\sys_jopdegreeController@display');
//////////// عرض الدرجات الوظفية ////////////////////
Route::get('job-grades','company\part1\sys_jopdegreeController@show');




//////////// عرض  بيانات الموظف&وثائق الموظفين&اثباتات الموظف&التامينات الاجتماعية&التامينات الصحية&المؤهلات الخاصة بالموظف &الدورات&الخبرات &اللغات&التابعين للموظف  ////////////////////
Route::get('employees','company\part1\employeesController@show');
////////////////// انتقال الي واجهة الموظف ///////////////////////
Route::get('add-employee', 'company\part\sys_EmplyController@index')->name('add-employee');


//////////////////اضافة موظف ///////////////////////
Route::post('employee', 'company\part\sys_EmplyController@store')->name('files.employee');
//////////// عرض تفاصيل  الموظف////////////////////
Route::get('view-employee','company\part\sys_EmplyController@display');


//////////اضافة  وثائق الموظفين/////////////
Route::get('emply_docSort','company\part\emply_docController@Stort');
//////////// عرض تفاصيل   وثائق الموظفين////////////////////
Route::get('view-employee-documents','company\part\emply_docController@display');


//////////اضافة  اثباتات الموظف /////////////
Route::post('evidence', 'company\part\evidencesController@store')->name('files.evidence');
//////////// عرض تفاصيل  اثباتات الموظف////////////////////
Route::get('view-employee-proofs','company\part\evidencesController@display');



//////////اضافة  التامينات الاجتماعية /////////////
Route::get('socialseuritiesSort','company\part\sys_socialseuritiesController@Stort');
//////////// عرض تفاصيل   التامينات الاجتماعية////////////////////
Route::get('view-employee-social-security','company\part\sys_socialseuritiesController@display');


//////////اضافة  التامينات الصحية  /////////////
Route::get('healthinsurancesSort','company\part\sys_healthinsurancesController@Stort');
//////////   اضافة   المؤهلات للموظف /////////////
Route::get('qualificationempliesSort','company\part\sys_qualificationemplyController@Stort');
//////////   اضافة   الدورات  للموظف /////////////
Route::get('coursesSort','company\part\sys_coursesController@Stort');
//////////////////اضافة الخبرات///////////////////////
Route::post('experiences', 'company\part\sys_experiencesController@store')->name('files.experiences');
//////////// عرض تفاصيل  الخبرات////////////////////
Route::get('view-employee-expe','company\part\sys_experiencesController@display');


//////////   اضافة     التابعين للموظف /////////////
Route::get('employeedepSort','company\part\sys_employeedepController@Stort');
//////////// عرض تفاصيل  التابعين للموظف////////////////////
Route::get('view-employee-tabian','company\part\sys_employeedepController@display');









//////////اضافة  الوظائف/////////////
Route::get('jopdataSort','company\part1\sys_jopdataController@Stort');
/////////// حذف الوظائف ////////////
Route::get('daljobs/{jop_id}','company\part1\sys_jopdataController@distory');
//////////// عرض تفاصيل  الوظائف////////////////////
Route::get('view-job/{jop_id}','company\part1\sys_jopdataController@display');
//////////// عرض الوظائف  ////////////////////
Route::get('jobs','company\part1\sys_jopdataController@show');



Route::get('benefits-deductions', function () {
    return view('company.part1.benefits-deductions');
});

////////////////// انتقال الي واجهة العقود ///////////////////////
Route::get('add-contract', 'company\part1\sys_contractController@index');


//////////اضافة  العقود/////////////
Route::get('contractSort','company\part1\sys_contractController@Stort');

//////////// عرض تفاصيل  العقود////////////////////
Route::get('view-contract/{contracttype_id}','company\part1\sys_contractController@display');

///////////حذف العقود/////////////
Route::get('dalcontract/{contract_id}','company\part1\sys_contractController@distory');
//////////اضافة  بنودالعقود/////////////
Route::get('contractitemSort','company\part1\sys_contractitemController@Stort');
///////////حذف بنودالعقود/////////////
Route::get('dalcontractitem/{contractitem_id}','company\part1\sys_contractitemController@distory');

//////////اضافة  أنواع العقود/////////////
Route::get('contracttypeSort','company\part1\sys_contracttypeController@Stort');
///////////حذف أنواع العقود/////////////
Route::get('dalcontracttype/{contracttype_id}','company\part1\sys_contracttypeController@distory');

//////////// عرض أنواع العقود&بنودالعقود&العقود  ////////////////////
Route::get('contract','company\part1\sys_contractController@show');

/////////////company part2\\\\

///////////اضافة العهد /////////////
Route::get('covenantSort','company\part2\sys_covenantController@Stort');

/////////// حذف   العهد ////////////
Route::get('dalcovenant/{covenant_id}','company\part2\sys_covenantController@distory');
///////////اضافة اصنناف العهد /////////////
Route::get('covenantitemsSort','company\part2\sys_covenantitemsController@Stort');
/////////// حذف  اصنناف العهد ////////////
Route::get('dalcovenantitems/{covenant_id}','company\part2\sys_covenantitemsController@distory');
/////////// عرض  العهد اصنناف /////////////
Route::get('covenant','company\part2\sys_covenantController@show');



///////////اضافة  بيانات العطل الرسمية /////////////
Route::get('holidaySort','company\part\sys_holidayController@Stort');
/////////// حذف     بيانات العطل الرسمية////////////
Route::get('dalholiday/{holiday_id}','company\part\sys_holidayController@distory');
///////////اضافة  بيانات أنواع الاجازات /////////////
Route::get('holidaytypeSort','company\part\sys_holidaytypeController@Stort');
/////////// حذف     بيانات أنواع الاجازات////////////
Route::get('dalholidaytype/{holidaytype_id}','company\part\sys_holidaytypeController@distory');
///////////اضافة  رصيد الاجازات /////////////
Route::get('vacationbalanceSort','company\part\sys_vacationbalanceController@Stort');
/////////// حذف    رصيد الاجازات////////////
Route::get('dalvacationbalance/{vacationbalance_id}','company\part\sys_vacationbalanceController@distory');
///////////اضافة  تقديم الاجازات /////////////
Route::get('offervactionSort','company\part\sys_offervactionController@Stort');
/////////// حذف      تقديم الاجازات////////////
Route::get('daloffervactions/{offervaction_id}','company\part\sys_offervactionController@distory');
///////////اضافة  بيانات السنوات /////////////
Route::get('yearSort','company\part\sys_yearsController@Stort');
/////////// حذف    بيانات السنوات////////////
Route::get('dalyear/{year_id}','company\part\sys_yearsController@distory');
///////////الاجــــــــــــــــــــأزات والعطل الرسمية /////////////
Route::get('vacationholiday','company\part\sys_holidayController@show');




///////////اضافة   السلف  /////////////
Route::get('predSort','company\part2\sys_predController@Stort');
///////////اضافة   الاقساط  /////////////
Route::get('installmentsSort','company\part2\sys_installmentsController@Stort');
//////////السلف والقروض /////////////
Route::get('advancesLans','company\part2\sys_predController@show');




////////////////big
///////////اضافة تراخيص /////////////
Route::post('licenses','company\part2\sys_licensesController@Stort')->name('files.licenses');
/////////// حذف    التراخص////////////
Route::get('dallicenses/{licenses_id}','company\part2\sys_licensesController@distory');
///////////اضافة انواع التراخص /////////////
Route::get('typeLicensesStort','company\part2\sys_type_licensesController@Stort');
/////////// حذف   انواع التراخص////////////
Route::get('dalType_licenses/{type_licenses_id}','company\part2\sys_type_licensesController@distory');
//////////// عرض انواع التراخيص والتراخيص////////////////////
Route::get('license','company\part2\sys_licensesController@show');




/////////////////end


////////////////big
///////////اضافة معايير التقييم /////////////
Route::get('evaluationSort','company\part2\sys_evaluationController@Stort');
/////////// حذف    معايير التقييم////////////
Route::get('dalevaluation/{evaluation_id}','company\part2\sys_evaluationController@distory');

///////////اضافة  التقييم /////////////
Route::get('criteriaSort','company\part2\sys_criteriaController@Stort');
/////////// حذف    التقييم////////////
Route::get('dalcriteria/{criteria_id}','company\part2\sys_criteriaController@distory');
//////////// عرض  التقييم معايير التقييم////////////////////
Route::get('evaluation','company\part2\sys_evaluationController@show');




///////////اضافة التنقلات/////////////
Route::get('TranSort','company\part2\sys_TranController@Stort');
/////////// حذف   التنقلات ////////////
Route::get('daltransfers/{tran_id}','company\part2\sys_TranController@distory');
//////////// عرض  التنقلات  ////////////////////
Route::get('transfers','company\part2\sys_TranController@show');






///////////اضافة جنسية/////////////
Route::get('nationalitySort','company\part2\sys_nationalityController@Stort');
/////////// حذف   جنسية ////////////
Route::get('dalnationality/{nationality_id}','company\part2\sys_nationalityController@distory');
//////////// عرض  الجنسية////////////////////
Route::get('nationality','company\part2\sys_nationalityController@show');
///////////اضافة لغات/////////////
Route::get('languageSort','company\part2\sys_languagesController@Stort');
/////////// حذف   لغات ////////////
Route::get('dallanguages/{state_id}','company\part2\sys_languagesController@distory');
//////////// عرض  اللغات////////////////////
Route::get('language','company\part2\sys_languagesController@show');





///////////اضافة الدول/////////////
Route::get('stateSort','company\part2\sys_stateController@Stort');
/////////// حذف   الدول ////////////
Route::get('dalstate/{state_id}','company\part2\sys_stateController@distory');
///////////اضافة المحافطات/////////////
Route::get('governorSort','company\part2\sys_governorController@Stort');
/////////// حذف   المحافطات ////////////
Route::get('dalgovernor/{governor_id}','company\part2\sys_governorController@distory');
///////////اضافة الاحياء/////////////
Route::get('neighSort','company\part2\sys_neighController@Stort');
/////////// عرض   الاحياء ////////////
Route::get('disneighs/{neigh_id}','company\part2\sys_neighController@display');
Route::get('disneighss','company\part2\sys_neighController@show')->name('disneighss');
/////////// حذف   الاحياء ////////////
Route::get('dalneigh/{neigh_id}','company\part2\sys_neighController@distory');
////////////  عرض الدول المحافظات الاحياء  ////////////////////
Route::get('locations','company\part2\sys_stateController@show');










/////////////test////////////

Route::get('test','testController@showw');
Route::get('users.delete/{qualification_id}', 'testController@distory')->name('users.delete');

Route::get('GetSubCatAgainstMainCatEdit/{branch_nameAR}', 'testController@GetSubCatAgainstMainCatEdit');
Route::get('GetSubCatAgainstMainCatEdit1/{dept_name}', 'testController@GetSubCatAgainstMainCatEdit');
//Route::get('testt','testController@showw');
//Route::patch('upm_view/{languages_id}','testController@update' );
//Route::get('upm/{id}','testController@edit' );





/////////////////////////////edit///////////
Route::get('Assept/{emply_id}','company\part\sys_EmplyController@yosri' );




//view-employee
