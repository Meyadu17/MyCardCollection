<?php

namespace App\DataFixtures;

use App\Entity\Departement;
use App\Entity\Region;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        //#region -------------------------- USER --------------------------
        $user1 = new User();
        $user1->setPseudo('meya');
        $user1->setEmail('melody.delage@gmail.com');
        $password1 = $this->hasher->hashPassword($user1, 'Pa$$w0rd2013');
        $user1->setPassword($password1);
        $user1->setRoles(["ROLE_ADMIN"]);
        $user1->setNom("DELAGE");
        $user1->setPrenom("Mélody");
        $manager->persist($user1);

        $user2 = new User();
        $user2->setPseudo('wekogirl');
        $user2->setEmail('wekogirl17@gmail.com');
        $password2 = $this->hasher->hashPassword($user2, 'Pa$$w0rd1966');
        $user2->setPassword($password2);
        $user2->setRoles(["ROLE_ADMIN"]);
        $user2->setNom("DELAGE");
        $user2->setPrenom("Florence");
        $manager->persist($user2);
        //#endregion -------------------------- USER --------------------------

        //#region -------------------------- REGION --------------------------
        $region1 = new Region();
        $region1->setNom('Auvergne-Rhône-Alpes');
        $manager->persist($region1);

        $region2 = new Region();
        $region2->setNom('Bourgogne-Franche-Comté');
        $manager->persist($region2);

        $region3 = new Region();
        $region3->setNom('Bretagne');
        $manager->persist($region3);

        $region4 = new Region();
        $region4->setNom('Centre-Val de Loire');
        $manager->persist($region4);

        $region5 = new Region();
        $region5->setNom('Corse');
        $manager->persist($region5);

        $region6 = new Region();
        $region6->setNom('Grand Est');
        $manager->persist($region6);

        $region7 = new Region();
        $region7->setNom('Hauts-de-France');
        $manager->persist($region7);

        $region8 = new Region();
        $region8->setNom('Île-de-France');
        $manager->persist($region8);

        $region9 = new Region();
        $region9->setNom('Normandie');
        $manager->persist($region9);

        $region10 = new Region();
        $region10->setNom('Nouvelle-Aquitaine');
        $manager->persist($region10);

        $region11 = new Region();
        $region11->setNom('Occitanie');
        $manager->persist($region11);

        $region12 = new Region();
        $region12->setNom('Pays de la Loire');
        $manager->persist($region12);

        $region13 = new Region();
        $region13->setNom('Provence-Alpes-Côte d’Azur');
        $manager->persist($region13);

        $region14 = new Region();
        $region14->setNom('Régions/Départements d’Outremer');
        $manager->persist($region14);
        //#endregion -------------------------- REGION --------------------------

        //#region -------------------------- DEPARTMENT --------------------------
        $department1 = new Departement();
        $department1->setNom('Ain');
        $department1->setCode('01');
        $department1->setRegion($region1);
        $manager->persist($department1);

        $department2 = new Departement();
        $department2->setNom('Aisne');
        $department2->setCode('02');
        $department2->setRegion($region7);
        $manager->persist($department2);

        $department3 = new Departement();
        $department3->setNom('Allier');
        $department3->setCode('03');
        $department3->setRegion($region1);
        $manager->persist($department3);

        $department4 = new Departement();
        $department4->setNom('Alpes-de-Haute-Provence');
        $department4->setCode('04');
        $department4->setRegion($region13);
        $manager->persist($department4);

        $department5 = new Departement();
        $department5->setNom('Hautes-Alpes');
        $department5->setCode('05');
        $department5->setRegion($region13);
        $manager->persist($department5);

        $department6 = new Departement();
        $department6->setNom('Alpes-Maritimes');
        $department6->setCode('06');
        $department6->setRegion($region13);
        $manager->persist($department6);

        $department7 = new Departement();
        $department7->setNom('Ardèche');
        $department7->setCode('07');
        $department7->setRegion($region1);
        $manager->persist($department7);

        $department8 = new Departement();
        $department8->setNom('Ardennes');
        $department8->setCode('08');
        $department8->setRegion($region6);
        $manager->persist($department8);

        $department9 = new Departement();
        $department9->setNom('Ariège');
        $department9->setCode('09');
        $department9->setRegion($region11);
        $manager->persist($department9);

        $department10 = new Departement();
        $department10->setNom('Aube');
        $department10->setCode('10');
        $department10->setRegion($region6);
        $manager->persist($department10);

        $department11 = new Departement();
        $department11->setNom('Aude');
        $department11->setCode('11');
        $department11->setRegion($region11);
        $manager->persist($department11);

        $department12 = new Departement();
        $department12->setNom('Aveyron	');
        $department12->setCode('12');
        $department12->setRegion($region11);
        $manager->persist($department12);

        $department13 = new Departement();
        $department13->setNom('Bouches-du-Rhône');
        $department13->setCode('13');
        $department13->setRegion($region13);
        $manager->persist($department13);

        $department14 = new Departement();
        $department14->setNom('Calvados');
        $department14->setCode('14');
        $department14->setRegion($region9);
        $manager->persist($department14);

        $department15 = new Departement();
        $department15->setNom('Cantal');
        $department15->setCode('15');
        $department15->setRegion($region1);
        $manager->persist($department15);

        $department16 = new Departement();
        $department16->setNom('Charente');
        $department16->setCode('16');
        $department16->setRegion($region10);
        $manager->persist($department16);

        $department17 = new Departement();
        $department17->setNom('Charente-Maritime');
        $department17->setCode('17');
        $department17->setRegion($region10);
        $manager->persist($department17);

        $department17b = new Departement();
        $department17b->setNom('Île d\'Oléron');
        $department17b->setCode('17');
        $department17b->setRegion($region10);
        $manager->persist($department17b);

        $department18 = new Departement();
        $department18->setNom('Cher');
        $department18->setCode('18');
        $department18->setRegion($region4);
        $manager->persist($department18);

        $department19 = new Departement();
        $department19->setNom('Corrèze');
        $department19->setCode('19');
        $department19->setRegion($region10);
        $manager->persist($department19);

        $department2A = new Departement();
        $department2A->setNom('Corse-du-Sud');
        $department2A->setCode('2A');
        $department2A->setRegion($region5);
        $manager->persist($department2A);

        $department2B = new Departement();
        $department2B->setNom('Haute-Corse');
        $department2B->setCode('2B');
        $department2B->setRegion($region5);
        $manager->persist($department2B);

        $department21 = new Departement();
        $department21->setNom('Côte-d\'Or');
        $department21->setCode('21');
        $department21->setRegion($region2);
        $manager->persist($department21);

        $department22 = new Departement();
        $department22->setNom('Côtes d\'Armor');
        $department22->setCode('22');
        $department22->setRegion($region3);
        $manager->persist($department22);

        $department23 = new Departement();
        $department23->setNom('Creuse');
        $department23->setCode('23');
        $department23->setRegion($region10);
        $manager->persist($department23);

        $department24 = new Departement();
        $department24->setNom('Dordogne');
        $department24->setCode('24');
        $department24->setRegion($region10);
        $manager->persist($department24);

        $department25 = new Departement();
        $department25->setNom('Doubs');
        $department25->setCode('25');
        $department25->setRegion($region2);
        $manager->persist($department25);

        $department26 = new Departement();
        $department26->setNom('Drôme');
        $department26->setCode('26');
        $department26->setRegion($region1);
        $manager->persist($department26);

        $department27 = new Departement();
        $department27->setNom('Eure');
        $department27->setCode('27');
        $department27->setRegion($region9);
        $manager->persist($department27);

        $department28 = new Departement();
        $department28->setNom('Eure-et-Loir');
        $department28->setCode('28');
        $department28->setRegion($region4);
        $manager->persist($department28);

        $department29 = new Departement();
        $department29->setNom('Finistère');
        $department29->setCode('29');
        $department29->setRegion($region3);
        $manager->persist($department29);

        $department30 = new Departement();
        $department30->setNom('Gard');
        $department30->setCode('30');
        $department30->setRegion($region11);
        $manager->persist($department30);

        $department31 = new Departement();
        $department31->setNom('Haute-Garonne');
        $department31->setCode('31');
        $department31->setRegion($region11);
        $manager->persist($department31);

        $department32 = new Departement();
        $department32->setNom('Gers');
        $department32->setCode('32');
        $department32->setRegion($region11);
        $manager->persist($department32);

        $department33 = new Departement();
        $department33->setNom('Gironde');
        $department33->setCode('33');
        $department33->setRegion($region10);
        $manager->persist($department33);

        $department34 = new Departement();
        $department34->setNom('Hérault');
        $department34->setCode('34');
        $department34->setRegion($region11);
        $manager->persist($department34);

        $department35 = new Departement();
        $department35->setNom('Ille-et-Vilaine');
        $department35->setCode('35');
        $department35->setRegion($region3);
        $manager->persist($department35);

        $department36 = new Departement();
        $department36->setNom('Indre');
        $department36->setCode('36');
        $department36->setRegion($region4);
        $manager->persist($department36);

        $department37 = new Departement();
        $department37->setNom('Indre-et-Loire');
        $department37->setCode('37');
        $department37->setRegion($region4);
        $manager->persist($department37);

        $department38 = new Departement();
        $department38->setNom('Isère');
        $department38->setCode('38');
        $department38->setRegion($region1);
        $manager->persist($department38);

        $department39 = new Departement();
        $department39->setNom('Jura');
        $department39->setCode('39');
        $department39->setRegion($region2);
        $manager->persist($department39);

        $department40 = new Departement();
        $department40->setNom('Landes');
        $department40->setCode('40');
        $department40->setRegion($region10);
        $manager->persist($department40);

        $department41 = new Departement();
        $department41->setNom('Loir-et-Cher');
        $department41->setCode('41');
        $department41->setRegion($region4);
        $manager->persist($department41);

        $department42 = new Departement();
        $department42->setNom('Loire');
        $department42->setCode('42');
        $department42->setRegion($region1);
        $manager->persist($department42);

        $department43 = new Departement();
        $department43->setNom('Haute-Loire');
        $department43->setCode('43');
        $department43->setRegion($region1);
        $manager->persist($department43);

        $department44 = new Departement();
        $department44->setNom('Loire-Atlantique');
        $department44->setCode('44');
        $department44->setRegion($region12);
        $manager->persist($department44);

        $department45 = new Departement();
        $department45->setNom('Loiret');
        $department45->setCode('45');
        $department45->setRegion($region4);
        $manager->persist($department45);

        $department46 = new Departement();
        $department46->setNom('Lot');
        $department46->setCode('46');
        $department46->setRegion($region11);
        $manager->persist($department46);

        $department47 = new Departement();
        $department47->setNom('Lot-et-Garonne');
        $department47->setCode('47');
        $department47->setRegion($region10);
        $manager->persist($department47);

        $department48 = new Departement();
        $department48->setNom('Lozère');
        $department48->setCode('48');
        $department48->setRegion($region11);
        $manager->persist($department48);

        $department49 = new Departement();
        $department49->setNom('Maine-et-Loire');
        $department49->setCode('49');
        $department49->setRegion($region12);
        $manager->persist($department49);

        $department50 = new Departement();
        $department50->setNom('Manche');
        $department50->setCode('50');
        $department50->setRegion($region9);
        $manager->persist($department50);

        $department51 = new Departement();
        $department51->setNom('Marne');
        $department51->setCode('51');
        $department51->setRegion($region6);
        $manager->persist($department51);

        $department52 = new Departement();
        $department52->setNom('Haute-Marne');
        $department52->setCode('52');
        $department52->setRegion($region6);
        $manager->persist($department52);

        $department53 = new Departement();
        $department53->setNom('Mayenne');
        $department53->setCode('53');
        $department53->setRegion($region12);
        $manager->persist($department53);

        $department54 = new Departement();
        $department54->setNom('Meurthe-et-Moselle');
        $department54->setCode('54');
        $department54->setRegion($region6);
        $manager->persist($department54);

        $department55 = new Departement();
        $department55->setNom('	Meuse');
        $department55->setCode('55');
        $department55->setRegion($region6);
        $manager->persist($department55);

        $department56 = new Departement();
        $department56->setNom('Morbihan');
        $department56->setCode('56');
        $department56->setRegion($region3);
        $manager->persist($department56);

        $department57 = new Departement();
        $department57->setNom('Moselle');
        $department57->setCode('57');
        $department57->setRegion($region6);
        $manager->persist($department57);

        $department58 = new Departement();
        $department58->setNom('Nièvre');
        $department58->setCode('58');
        $department58->setRegion($region2);
        $manager->persist($department58);

        $department59 = new Departement();
        $department59->setNom('Nord');
        $department59->setCode('59');
        $department59->setRegion($region7);
        $manager->persist($department59);

        $department60 = new Departement();
        $department60->setNom('Oise');
        $department60->setCode('60');
        $department60->setRegion($region7);
        $manager->persist($department60);

        $department61 = new Departement();
        $department61->setNom('Orne');
        $department61->setCode('61');
        $department61->setRegion($region9);
        $manager->persist($department61);

        $department62 = new Departement();
        $department62->setNom('Pas-de-Calais');
        $department62->setCode('62');
        $department62->setRegion($region7);
        $manager->persist($department62);

        $department63 = new Departement();
        $department63->setNom('Puy-de-Dôme');
        $department63->setCode('63');
        $department63->setRegion($region1);
        $manager->persist($department63);

        $department64 = new Departement();
        $department64->setNom('Pyrénées-Atlantiques');
        $department64->setCode('64');
        $department64->setRegion($region10);
        $manager->persist($department64);

        $department65 = new Departement();
        $department65->setNom('Hautes-Pyrénées');
        $department65->setCode('65');
        $department65->setRegion($region11);
        $manager->persist($department65);

        $department66 = new Departement();
        $department66->setNom('Pyrénées-Orientales');
        $department66->setCode('66');
        $department66->setRegion($region11);
        $manager->persist($department66);

        $department67 = new Departement();
        $department67->setNom('Bas-Rhin');
        $department67->setCode('67');
        $department67->setRegion($region6);
        $manager->persist($department67);

        $department68 = new Departement();
        $department68->setNom('Haut-Rhin');
        $department68->setCode('68');
        $department68->setRegion($region6);
        $manager->persist($department68);

        $department69 = new Departement();
        $department69->setNom('Rhône');
        $department69->setCode('69');
        $department69->setRegion($region1);
        $manager->persist($department69);

        $department70 = new Departement();
        $department70->setNom('Haute-Saône');
        $department70->setCode('70');
        $department70->setRegion($region2);
        $manager->persist($department70);

        $department71 = new Departement();
        $department71->setNom('Saône-et-Loire');
        $department71->setCode('71');
        $department71->setRegion($region2);
        $manager->persist($department71);

        $department72 = new Departement();
        $department72->setNom('Sarthe');
        $department72->setCode('72');
        $department72->setRegion($region12);
        $manager->persist($department72);

        $department73 = new Departement();
        $department73->setNom('Savoie');
        $department73->setCode('73');
        $department73->setRegion($region1);
        $manager->persist($department73);

        $department74 = new Departement();
        $department74->setNom('Haute-Savoie');
        $department74->setCode('74');
        $department74->setRegion($region1);
        $manager->persist($department74);

        $department75 = new Departement();
        $department75->setNom('Paris');
        $department75->setCode('75');
        $department75->setRegion($region8);
        $manager->persist($department75);

        $department76 = new Departement();
        $department76->setNom('Seine-Maritime');
        $department76->setCode('76');
        $department76->setRegion($region9);
        $manager->persist($department76);

        $department77 = new Departement();
        $department77->setNom('Seine-et-Marne');
        $department77->setCode('77');
        $department77->setRegion($region8);
        $manager->persist($department77);

        $department78 = new Departement();
        $department78->setNom('Yvelines');
        $department78->setCode('78');
        $department78->setRegion($region8);
        $manager->persist($department78);

        $department79 = new Departement();
        $department79->setNom('Deux-Sèvres');
        $department79->setCode('79');
        $department79->setRegion($region10);
        $manager->persist($department79);

        $department80 = new Departement();
        $department80->setNom('Somme');
        $department80->setCode('80');
        $department80->setRegion($region7);
        $manager->persist($department80);

        $department81 = new Departement();
        $department81->setNom('Tarn');
        $department81->setCode('81');
        $department81->setRegion($region11);
        $manager->persist($department81);

        $department82 = new Departement();
        $department82->setNom('Tarn-et-Garonne');
        $department82->setCode('82');
        $department82->setRegion($region11);
        $manager->persist($department82);

        $department83 = new Departement();
        $department83->setNom('Var');
        $department83->setCode('83');
        $department83->setRegion($region13);
        $manager->persist($department83);

        $department84 = new Departement();
        $department84->setNom('Vaucluse');
        $department84->setCode('84');
        $department84->setRegion($region13);
        $manager->persist($department84);

        $department85 = new Departement();
        $department85->setNom('Vendée');
        $department85->setCode('85');
        $department85->setRegion($region12);
        $manager->persist($department85);

        $department86 = new Departement();
        $department86->setNom('Vienne');
        $department86->setCode('86');
        $department86->setRegion($region10);
        $manager->persist($department86);

        $department87 = new Departement();
        $department87->setNom('Haute-Vienne');
        $department87->setCode('87');
        $department87->setRegion($region10);
        $manager->persist($department87);

        $department88 = new Departement();
        $department88->setNom('Vosges');
        $department88->setCode('88');
        $department88->setRegion($region6);
        $manager->persist($department88);

        $department89 = new Departement();
        $department89->setNom('Yonne');
        $department89->setCode('89');
        $department89->setRegion($region2);
        $manager->persist($department89);

        $department90 = new Departement();
        $department90->setNom('Territoire-de-Belfort');
        $department90->setCode('90');
        $department90->setRegion($region2);
        $manager->persist($department90);

        $department91 = new Departement();
        $department91->setNom('Essonne');
        $department91->setCode('91');
        $department91->setRegion($region8);
        $manager->persist($department91);

        $department92 = new Departement();
        $department92->setNom('Hauts-de-Seine');
        $department92->setCode('92');
        $department92->setRegion($region8);
        $manager->persist($department92);

        $department93 = new Departement();
        $department93->setNom('Seine-Saint-Denis');
        $department93->setCode('93');
        $department93->setRegion($region8);
        $manager->persist($department93);

        $department94 = new Departement();
        $department94->setNom('Val-de-Marne');
        $department94->setCode('94');
        $department94->setRegion($region8);
        $manager->persist($department94);

        $department95 = new Departement();
        $department95->setNom('Val-D\'Oise');
        $department95->setCode('95');
        $department95->setRegion($region8);
        $manager->persist($department95);

        $department971 = new Departement();
        $department971->setNom('Guadeloupe');
        $department971->setCode('971');
        $department971->setRegion($region14);
        $manager->persist($department971);

        $department972 = new Departement();
        $department972->setNom('Martinique');
        $department972->setCode('972');
        $department972->setRegion($region14);
        $manager->persist($department972);

        $department973 = new Departement();
        $department973->setNom('Guyane');
        $department973->setCode('973');
        $department973->setRegion($region14);
        $manager->persist($department973);

        $department974 = new Departement();
        $department974->setNom('La Réunion');
        $department974->setCode('974');
        $department974->setRegion($region14);
        $manager->persist($department974);

        $department976 = new Departement();
        $department976->setNom('Mayotte');
        $department976->setCode('976');
        $department976->setRegion($region14);
        $manager->persist($department976);
        //#endregion -------------------------- DEPARTMENT --------------------------
        $manager->flush();
    }
}
