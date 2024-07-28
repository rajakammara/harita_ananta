<?php

namespace Database\Seeders;

use App\Models\DepartmentMaster;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department_masters')->delete();
        $departments = [
            ['id' => 1, 'dept_name' => '14TH(IR)BN-APSP-ATP', 'description' => '14TH(IR)BN-APSP-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 2, 'dept_name' => 'Adult Education', 'description' => 'Adult Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 3, 'dept_name' => 'Agriculture', 'description' => 'Agriculture', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 4, 'dept_name' => 'Agriculture Technology Mangement Agency', 'description' => 'Agriculture Technology Mangement Agency', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 5, 'dept_name' => 'ANANTAPUR DISTRICT COOPERATIVE CENTRAL BANK', 'description' => 'ANANTAPUR DISTRICT COOPERATIVE CENTRAL BANK', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 6, 'dept_name' => 'ANANTHAPUR HINDUPUR URBAN DEVELOPMENT AUTHORITY', 'description' => 'ANANTHAPUR HINDUPUR URBAN DEVELOPMENT AUTHORITY', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 7, 'dept_name' => 'Ananthapuramu Municipal Corporation', 'description' => 'Ananthapuramu Municipal Corporation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 8, 'dept_name' => 'ANDHRA BATTALION NCC ANANTAPUR', 'description' => 'ANDHRA BATTALION NCC ANANTAPUR', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 9, 'dept_name' => 'Andhra pradesh Industrial inforastructure Corporation', 'description' => 'Andhra pradesh Industrial inforastructure Corporation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 10, 'dept_name' => 'Andhra Pradesh Vaidya Vidhana Parishad', 'description' => 'Andhra Pradesh Vaidya Vidhana Parishad', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 11, 'dept_name' => 'Animal Husbandry', 'description' => 'Animal Husbandry', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 12, 'dept_name' => 'ANTI CORRUPTION BUREAU', 'description' => 'ANTI CORRUPTION BUREAU', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 13, 'dept_name' => 'AP BC Cooperative Finance Corporation', 'description' => 'AP BC Cooperative Finance Corporation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 14, 'dept_name' => 'AP Dairy Development Cooperative Federation (AP DIARY)', 'description' => 'AP Dairy Development Cooperative Federation (AP DIARY)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 15, 'dept_name' => 'AP Micro Irrigation Project', 'description' => 'AP Micro Irrigation Project', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 16, 'dept_name' => 'AP POLLUTION CONTROL BOARD', 'description' => 'AP POLLUTION CONTROL BOARD', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 17, 'dept_name' => 'AP Scheduled Castes Coorpertive Finance Corporation', 'description' => 'AP Scheduled Castes Coorpertive Finance Corporation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 18, 'dept_name' => 'AP SCHEDULED TRIBES COOPERATIVE FINANCE CORPORATION', 'description' => 'AP SCHEDULED TRIBES COOPERATIVE FINANCE CORPORATION', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 19, 'dept_name' => 'AP Social Welfare Residential Educational Institutions', 'description' => 'AP Social Welfare Residential Educational Institutions', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 20, 'dept_name' => 'AP State Cooperative Marketing Federation (MARKFED)', 'description' => 'AP State Cooperative Marketing Federation (MARKFED)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 21, 'dept_name' => 'AP State Housing Corporation Ltd', 'description' => 'AP State Housing Corporation Ltd', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 22, 'dept_name' => 'Ap State Irrgation Developement Corparation', 'description' => 'Ap State Irrgation Developement Corparation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 23, 'dept_name' => 'AP State Minorities Finance Corporation Ltd', 'description' => 'AP State Minorities Finance Corporation Ltd', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 24, 'dept_name' => 'AP State Tourism Authority', 'description' => 'AP State Tourism Authority', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 25, 'dept_name' => 'AP TRANSCO', 'description' => 'AP TRANSCO', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 26, 'dept_name' => 'AP Womens Cooperative Finance Corporation', 'description' => 'AP Womens Cooperative Finance Corporation', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 27, 'dept_name' => 'APEWIDC', 'description' => 'APEWIDC', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 28, 'dept_name' => 'APMSIDC-ATP', 'description' => 'APMSIDC-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 29, 'dept_name' => 'APSCSCL', 'description' => 'APSCSCL', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 30, 'dept_name' => 'Archaeology and Museums', 'description' => 'Archaeology and Museums', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 31, 'dept_name' => 'ATP2CIR-ATPDIVN', 'description' => 'ATP2CIR-ATPDIVN', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 32, 'dept_name' => 'BC Welfare', 'description' => 'BC Welfare', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 33, 'dept_name' => 'Board Of intermediate Education', 'description' => 'Board Of intermediate Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 34, 'dept_name' => 'Civil Supplies', 'description' => 'Civil Supplies', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 35, 'dept_name' => 'COLLEGIATE EDUCATION', 'description' => 'COLLEGIATE EDUCATION', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 36, 'dept_name' => 'Commercial Taxes', 'description' => 'Commercial Taxes', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 37, 'dept_name' => 'Cooperation Cooperative Societies', 'description' => 'Cooperation Cooperative Societies', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 38, 'dept_name' => 'CRB', 'description' => 'CRB', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 39, 'dept_name' => 'Differently Abled, Senior Citizens & Transgender', 'description' => 'Differently Abled, Senior Citizens & Transgender', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 40, 'dept_name' => 'DISTRICT JAIL OFFICE', 'description' => 'DISTRICT JAIL OFFICE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 41, 'dept_name' => 'DISTRICT PANCHAYAT UNIT', 'description' => 'DISTRICT PANCHAYAT UNIT', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 42, 'dept_name' => 'DISTRICT SUB JAILS OFFICE', 'description' => 'DISTRICT SUB JAILS OFFICE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 43, 'dept_name' => 'Drugs Control Administration', 'description' => 'Drugs Control Administration', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 44, 'dept_name' => 'Economics and Statistics', 'description' => 'Economics and Statistics', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 45, 'dept_name' => 'Emplyment And Training', 'description' => 'Emplyment And Training', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 46, 'dept_name' => 'Endowment', 'description' => 'Endowment', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 47, 'dept_name' => 'Factories', 'description' => 'Factories', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 48, 'dept_name' => 'Fire Services', 'description' => 'Fire Services', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 49, 'dept_name' => 'Fisheries', 'description' => 'Fisheries', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 50, 'dept_name' => 'Forest (PCCF)', 'description' => 'Forest (PCCF)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 51, 'dept_name' => 'FOREST DEPARTMENT (DFO SOCIAL FORESTRY)', 'description' => 'FOREST DEPARTMENT (DFO SOCIAL FORESTRY)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 52, 'dept_name' => 'FOREST DEPARTMENT(T)', 'description' => 'FOREST DEPARTMENT(T)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 53, 'dept_name' => 'FOREST SETTLEMENT OFFICE', 'description' => 'FOREST SETTLEMENT OFFICE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 54, 'dept_name' => 'Gooty Municipality', 'description' => 'Gooty Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 55, 'dept_name' => 'Government Life Insurance', 'description' => 'Government Life Insurance', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 56, 'dept_name' => 'GOVT. OBSERVATION HOME FOR BOYS ANANTHAPURAMU', 'description' => 'GOVT. OBSERVATION HOME FOR BOYS ANANTHAPURAMU', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 57, 'dept_name' => 'Ground Water', 'description' => 'Ground Water', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 58, 'dept_name' => 'Guntakal Municipality', 'description' => 'Guntakal Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 59, 'dept_name' => 'Handlooms & Textil', 'description' => 'Handlooms & Textil', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 60, 'dept_name' => 'HANDRI NEEVA SUJALA SRAVANTHI PROJECT', 'description' => 'HANDRI NEEVA SUJALA SRAVANTHI PROJECT', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 61, 'dept_name' => 'HLC DIV-ATP', 'description' => 'HLC DIV-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 62, 'dept_name' => 'Horticulture', 'description' => 'Horticulture', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 63, 'dept_name' => 'Industries,Commerce And Export Promotion', 'description' => 'Industries,Commerce And Export Promotion', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 64, 'dept_name' => 'Information and Public Relations', 'description' => 'Information and Public Relations', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 65, 'dept_name' => 'Institute of Preventive medicine (IPM) & Food Safety', 'description' => 'Institute of Preventive medicine (IPM) & Food Safety', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 66, 'dept_name' => 'INSURANCE MEDICAL SERVICES', 'description' => 'INSURANCE MEDICAL SERVICES', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 67, 'dept_name' => 'Intermediate Education', 'description' => 'Intermediate Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 68, 'dept_name' => 'Irrigation (E-in-C)', 'description' => 'Irrigation (E-in-C)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 69, 'dept_name' => 'Irrigation Projects,Anantapur', 'description' => 'Irrigation Projects,Anantapur', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 70, 'dept_name' => 'Jawahar Navodaya Vidyalaya', 'description' => 'Jawahar Navodaya Vidyalaya', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 71, 'dept_name' => 'Juvenile Welfare & Correctional Services', 'description' => 'Juvenile Welfare & Correctional Services', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 72, 'dept_name' => 'Kalyanadurgam Municipality', 'description' => 'Kalyanadurgam Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 73, 'dept_name' => 'Kendriya Vidyalaya', 'description' => 'Kendriya Vidyalaya', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 74, 'dept_name' => 'Labour', 'description' => 'Labour', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 75, 'dept_name' => 'LAND ACQUISITION UNIT-HLC PROJECT (REVENUE DEPARTMENT)', 'description' => 'LAND ACQUISITION UNIT-HLC PROJECT (REVENUE DEPARTMENT)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 76, 'dept_name' => 'Land Acquisition-PABR-II', 'description' => 'Land Acquisition-PABR-II', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 77, 'dept_name' => 'Legal Metrology', 'description' => 'Legal Metrology', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 78, 'dept_name' => 'Madakasira Municipality', 'description' => 'Madakasira Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 79, 'dept_name' => 'MARKETING', 'description' => 'MARKETING', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 80, 'dept_name' => 'Medical College', 'description' => 'Medical College', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 81, 'dept_name' => 'Mines and Geology', 'description' => 'Mines and Geology', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 82, 'dept_name' => 'Mines and Geology,Gooty', 'description' => 'Mines and Geology,Gooty', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 83, 'dept_name' => 'Mines and Geology,Tadipathri', 'description' => 'Mines and Geology,Tadipathri', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 84, 'dept_name' => 'MINORITIES WELFARE', 'description' => 'MINORITIES WELFARE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 85, 'dept_name' => 'Mission for Elimination of poverty in Municipal Areas (ME', 'description' => 'Mission for Elimination of poverty in Municipal Areas (ME', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 86, 'dept_name' => 'Municipal Administration', 'description' => 'Municipal Administration', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 87, 'dept_name' => 'NATIONAL INFORMATICS CENTRE', 'description' => 'NATIONAL INFORMATICS CENTRE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 88, 'dept_name' => 'NEHRU YUVA KENDRA', 'description' => 'NEHRU YUVA KENDRA', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 89, 'dept_name' => 'NREDCAP-ATP', 'description' => 'NREDCAP-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 90, 'dept_name' => 'NTR Vaidyaseva Trust', 'description' => 'NTR Vaidyaseva Trust', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 91, 'dept_name' => 'Nursing College', 'description' => 'Nursing College', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 92, 'dept_name' => 'Pamidi Municipality', 'description' => 'Pamidi Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 93, 'dept_name' => 'PANCHAYATI RAJ ENGINEERING', 'description' => 'PANCHAYATI RAJ ENGINEERING', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 94, 'dept_name' => 'PAO(WA)-ATP', 'description' => 'PAO(WA)-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 95, 'dept_name' => 'Police (DGP)', 'description' => 'Police (DGP)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 96, 'dept_name' => 'Police-Training', 'description' => 'Police-Training', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 97, 'dept_name' => 'Prisons & Correctional Services', 'description' => 'Prisons & Correctional Services', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 98, 'dept_name' => 'Prohibition and Excise', 'description' => 'Prohibition and Excise', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 99, 'dept_name' => 'PROSECUTIONS', 'description' => 'PROSECUTIONS', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 100, 'dept_name' => 'Public Health', 'description' => 'Public Health', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 101, 'dept_name' => 'PUBLIC HEALTH AND MUNICIPAL ENGINEERING (PH&ME)', 'description' => 'PUBLIC HEALTH AND MUNICIPAL ENGINEERING (PH&ME)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 102, 'dept_name' => 'PUBLIC HEALTH ENGINEERING', 'description' => 'PUBLIC HEALTH ENGINEERING', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 103, 'dept_name' => 'PUBLIC LIBRARIES', 'description' => 'PUBLIC LIBRARIES', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 104, 'dept_name' => 'Puttaparthy Municipality', 'description' => 'Puttaparthy Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 105, 'dept_name' => 'Rayadurga Municipality', 'description' => 'Rayadurga Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 106, 'dept_name' => 'Registration and Stamps', 'description' => 'Registration and Stamps', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 107, 'dept_name' => 'Revenue (CCLA)', 'description' => 'Revenue (CCLA)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 108, 'dept_name' => 'ROADS AND BUilDING', 'description' => 'ROADS AND BUilDING', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 109, 'dept_name' => 'Roads and Buildings (E-in-C)', 'description' => 'Roads and Buildings (E-in-C)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 110, 'dept_name' => 'Rural Development', 'description' => 'Rural Development', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 111, 'dept_name' => 'RURAL WATER SUPPLY ENGINEERING', 'description' => 'RURAL WATER SUPPLY ENGINEERING', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 112, 'dept_name' => 'Sainik Welfare', 'description' => 'Sainik Welfare', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 113, 'dept_name' => 'Samagra Shiksha', 'description' => 'Samagra Shiksha', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 114, 'dept_name' => 'School Education', 'description' => 'School Education', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 115, 'dept_name' => 'SE(R&B) NH CIRCLE', 'description' => 'SE(R&B) NH CIRCLE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 116, 'dept_name' => 'Sericulture', 'description' => 'Sericulture', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 117, 'dept_name' => 'SKU-ATP', 'description' => 'SKU-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 118, 'dept_name' => 'SOCIAL WELFARE', 'description' => 'SOCIAL WELFARE', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 119, 'dept_name' => 'Society for Elimination of Rural Poverty', 'description' => 'Society for Elimination of Rural Poverty', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 120, 'dept_name' => 'Sports Authority of Andhra Pradesh', 'description' => 'Sports Authority of Andhra Pradesh', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 121, 'dept_name' => 'State Audit', 'description' => 'State Audit', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 122, 'dept_name' => 'Survery Settlements and Land Records', 'description' => 'Survery Settlements and Land Records', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 123, 'dept_name' => 'Tadipatri Municipality', 'description' => 'Tadipatri Municipality', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 124, 'dept_name' => 'Teaching Hospital', 'description' => 'Teaching Hospital', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 125, 'dept_name' => 'TECHNICAL EDUCATION', 'description' => 'TECHNICAL EDUCATION', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 126, 'dept_name' => 'Technical Unit', 'description' => 'Technical Unit', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 127, 'dept_name' => 'Town and Country Planning', 'description' => 'Town and Country Planning', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 128, 'dept_name' => 'Transport', 'description' => 'Transport', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 129, 'dept_name' => 'Treasuries & Accounts', 'description' => 'Treasuries & Accounts', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 130, 'dept_name' => 'Tribal Welfare', 'description' => 'Tribal Welfare', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 131, 'dept_name' => 'WATER RESOURCE(IRRIGATION CIRCLE)', 'description' => 'WATER RESOURCE(IRRIGATION CIRCLE)', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 132, 'dept_name' => 'Women Development and Child Welfare', 'description' => 'Women Development and Child Welfare', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 133, 'dept_name' => 'WRD-HNSS-ATP', 'description' => 'WRD-HNSS-ATP', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 134, 'dept_name' => 'Youth Services', 'description' => 'Youth Services', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],
            ['id' => 135, 'dept_name' => 'Zilla Parishad Unit', 'description' => 'Zilla Parishad Unit', 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'),],



        ];
        foreach ($departments as $department) {
            DepartmentMaster::create($department);
        }
    }
}
