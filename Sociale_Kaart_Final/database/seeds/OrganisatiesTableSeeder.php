<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisatiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Werk & dagbesteding
        // Begeleiding naar werk
        DB::table('organisaties')->insert([
            'naam' => 'Connecting 2 U',
            'adres' => 'Rijnkade 192',
            'contactpersoon' => '',
            'gemeente' => 'Weesp',
            'telefoonnummer' => '0294-482664',
            'beschrijving' => 'Connecting2U is een re-integratiebureau met een duidelijke, onderscheidende visie. Onze activiteiten richten zich op opdrachtgevers uit de overheid, de zorgsector, zakelijke dienstverlening en de industrie. Wij geloven dat een vraaggerichte aanpak, betrokkenheid en samenwerking de sleutels zijn tot succesvolle re-integratie van personen op zoek naar werk. Na een korte praktijktraining stroomt de cliënt door en vindt uiteindelijk een baan met een maatschappelijke waarde bij een regionale werkgever of bij de Connecting2U-groep zelf. Onze aanpak wérkt. We houden onze cliënten tijdens het hele traject gemotiveerd en hebben een hoog plaatsingspercentage.',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'I Doe',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Kandidatennet',
            'adres' => 'asdsadasda',
            'contactpersoon' => 'dsaadsasd',
            'gemeente' => 'asdsad',
            'telefoonnummer' => '0987617823',
            'beschrijving' => 'asasdsda',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Project JA',
            'adres' => 'asdsadsad',
            'contactpersoon' => 'asdsadasd',
            'gemeente' => 'Den haag',
            'telefoonnummer' => '12312321',
            'beschrijving' => 'dasdasd asasds adads adssajkhfdgf akuhfaeu fkhaerufia weifuhaw ifuah efkuyga fkuayg fkuaefa ',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Servicepunt werk ISD',
            'adres' => 'asdsadasdasd',
            'contactpersoon' => 'asdasdasd',
            'gemeente' => 'asdasdasd',
            'telefoonnummer' => 'asdasdasd',
            'beschrijving' => 'asasdasd',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Studio Moio',
            'adres' => 'asdsadasdasdasd',
            'contactpersoon' => 'Nathalie Lecina',
            'gemeente' => 'Leiden',
            'telefoonnummer' => '0629349621',
            'beschrijving' => 'asdsasadasasdadsasd',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Talentcoaching/Welzijnskwartier',
            'adres' => '',
            'contactpersoon' => 'Ingrid Schoneveld',
            'gemeente' => 'Katwijk',
            'telefoonnummer' => '0613425147',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Visie-R',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Dagbesteding
        DB::table('organisaties')->insert([
            'naam' => 'Autisme 2 play',
            'adres' => 'betaplein 8',
            'contactpersoon' => 'Jack Straatman',
            'gemeente' => 'Den haag',
            'telefoonnummer' => '06-12345678',
            'beschrijving' => 'Phasellus faucibus varius lacinia. Duis et massa iaculis, fringilla arcu sit amet, accumsan justo. Ut eleifend et mauris et luctus. Phasellus pharetra sem vitae tortor suscipit varius. Duis elit sem, bibendum eget ante id, iaculis maximus orci. Sed finibus metus ac malesuada consequat. Cras cursus augue eu ex fermentum lobortis. Vivamus pulvinar felis non bibendum efficitur.',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Binnenste Buiten Tuin',
            'adres' => '',
            'contactpersoon' => 'Yonina Hordijk',
            'gemeente' => '',
            'telefoonnummer' => '0638067728',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Cardea Daghulp',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Dagbesteding via Ipse De
             Bruggen, MEE, Gemiva, Inizo',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Inzowijs',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jeugdsupport Maatjesproject',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jeugd- en Jongerenwerk',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Prodeba',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Windroos Toekomsttraject',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Zorgboeren Zuid Holland',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Inkomen
        // Schulden
        DB::table('organisaties')->insert([
            'naam' => 'Budget Informatiepunt
            ISD Bollenstreek',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Debt to no debt',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Schuldhulpverlening
            gemeenten, overig',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Schuldhulpmaatje',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stadsbank Leiden',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting Jongeren in
            Nood',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Uitkering
        DB::table('organisaties')->insert([
            'naam' => 'ISD Bollenstreek',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => 'Katwijk, Teylingen, Noordwijk, Noordwijkerhout, Lisse, Hillegom',
            'telefoonnummer' => '0252-360930.',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Sociale diensten,
            overige gemeenten',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'UWV',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Financien
        DB::table('organisaties')->insert([
            'naam' => 'DUO',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Humanitas Thuisadministratie',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting Jongeren in Nood',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting Leergeld',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting Urgente Noden',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        // Onderwijs
        // Begeleiding (naar) onderwijs
        DB::table('organisaties')->insert([
            'naam' => 'Ambulante Educatie Dienst (AED)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Buitenkans',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Cardea Daghulpcentrum',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Geef Me De 5',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Inizo',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Key to success/JES Rijnland',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Pluscoach',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'RMC/Forward',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Talentcoaching',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Yoep Onderwijs en Zorg',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Keuze beroep/opleiding
        DB::table('organisaties')->insert([
            'naam' => 'Breekjaar',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Leerwerkloket UWV',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Loopbaanadviseurs (mbo)
opleidingen/school',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'RMC/Forward',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting Samenwerking
Beroepsonderwijs Bedrijfsleven (SBB)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // NT2
        DB::table('organisaties')->insert([
            'naam' => 'B plus C',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Delken en Boot',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Internationale Schakelklas (ISK),
basisonderwijs: Teldersschool, Brede
School Merenwijk (Leiden), OBS
Dubbelburg (Katwijk)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'ISK VO, locatie Katwijk, Andreas
College',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'ISK VO, locatie Leiden Da Vinci
College',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Kopklas Leiden (schakeljaar PO-
VO), Vlietland College',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'ROC Leiden Educatie',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Schakeltraject hoger opgeleiden
Haagse Hogeschool',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Transferium (project JA)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Gezondheid
        // Psychisch
        DB::table('organisaties')->insert([
            'naam' => 'Centrum "45',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Centrum voor
Autisme',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Curium',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'De Banjaard',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'GGZ Divers',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'GGZ Rivierduinen',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Ipsy',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'JGT/SWT',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jongeren Ondersteuning Team (JOT)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Multi Aanpak',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'PsyQ',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Transparant',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Virenze',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Vivamente',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Lichamelijk
        DB::table('organisaties')->insert([
            'naam' => 'GGD Hollands Midden',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'ExposeYour',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Multi Aanpak',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Verslaving
        DB::table('organisaties')->insert([
            'naam' => 'Brijder (Preventie)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stichting De Stam',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Yes We Can Klinieken',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Sociaal functioneren
        // Gezins & opvoedingsproblematiek
        DB::table('organisaties')->insert([
            'naam' => 'Cardea Jeugdzorg',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'De Avonturentuin',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'De Buitenwereld',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'De Opvoedpoli',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'GGD crisis interventie team',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Horizon',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jeugdformaat',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Kleen4care',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Kwadraad',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Leger des Heils',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'MEE',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stek jeugdhulp',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Timon',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Justitie
        DB::table('organisaties')->insert([
            'naam' => 'De Waag',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Exodus',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Halt',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Het Palmhuis',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jeugdbescherming west',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Jeugd preventie Team (JPT)',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Veilig Thuis Hollands Midden',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Jonge moeders/vaders
        DB::table('organisaties')->insert([
            'naam' => 'Cardea Jong Ouderschap',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'ÇASA kliniek Leiden',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Stevig ouderschap',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Vluchtelingen
        DB::table('organisaties')->insert([
            'naam' => 'Project JA/statushouders',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Nidos',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'UAF',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Vluchtelingenwerk',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);

        // Wonen
        DB::table('organisaties')->insert([
            'naam' => 'Begeleid wonen Cardea',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Binnenvest',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
        DB::table('organisaties')->insert([
            'naam' => 'Pluswonen',
            'adres' => '',
            'contactpersoon' => '',
            'gemeente' => '',
            'telefoonnummer' => '',
            'beschrijving' => '',
        ]);
    }
}
