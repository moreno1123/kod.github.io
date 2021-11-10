SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
USE `iwa_2020_zb_projekt` ;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

INSERT INTO `tip_korisnika` (`tip_id`, `naziv`) VALUES
(0, 'administrator'),
(1, 'voditelj'),
(2, 'korisnik');


INSERT INTO `korisnik` (`korisnik_id`, `tip_id`, `korisnicko_ime`, `lozinka`, `ime`, `prezime`, `email`, `slika`) VALUES
(1, 0, 'admin', 'foi', 'Administrator', 'Admin', 'admin@foi.hr', 'korisnici/admin.jpg'),
(2, 1, 'voditelj', '123456', 'voditelj', 'Vodi', 'voditelj@foi.hr', 'korisnici/admin.jpg'),
(3, 2, 'pkos', '123456', 'Pero', 'Kos', 'pkos@fff.hr', 'korisnici/pkos.jpg'),
(4, 2, 'vzec', '123456', 'Vladimir', 'Zec', 'vzec@fff.hr', 'korisnici/vzec.jpg'),
(5, 2, 'qtarantino', '123456', 'Quentin', 'Tarantino', 'qtarantino@foi.hr', 'korisnici/qtarantino.jpg'),
(6, 2, 'mbellucci', '123456', 'Monica', 'Bellucci', 'mbellucci@foi.hr', 'korisnici/mbellucci.jpg'),
(7, 2, 'vmortensen', '123456', 'Viggo', 'Mortensen', 'vmortensen@foi.hr', 'korisnici/vmortensen.jpg'),
(8, 2, 'jgarner', '123456', 'Jennifer', 'Garner', 'jgarner@foi.hr', 'korisnici/jgarner.jpg'),
(9, 2, 'nportman', '123456', 'Natalie', 'Portman', 'nportman@foi.hr', 'korisnici/nportman.jpg'),
(10, 2, 'dradcliffe', '123456', 'Daniel', 'Radcliffe', 'dradcliffe@foi.hr', 'korisnici/dradcliffe.jpg'),
(11, 2, 'hberry', '123456', 'Halle', 'Berry', 'hberry@foi.hr', 'korisnici/hberry.jpg'),
(12, 2, 'vdiesel', '123456', 'Vin', 'Diesel', 'vdiesel@foi.hr', 'korisnici/vdiesel.jpg'),
(13, 2, 'ecuthbert', '123456', 'Elisha', 'Cuthbert', 'ecuthbert@foi.hr', 'korisnici/ecuthbert.jpg'),
(14, 2, 'janiston', '123456', 'Jennifer', 'Aniston', 'janiston@foi.hr', 'korisnici/janiston.jpg'),
(15, 2, 'ctheron', '123456', 'Charlize', 'Theron', 'ctheron@foi.hr', 'korisnici/ctheron.jpg'),
(16, 2, 'nkidman', '123456', 'Nicole', 'Kidman', 'nkidman@foi.hr', 'korisnici/nkidman.jpg'),
(17, 2, 'ewatson', '123456', 'Emma', 'Watson', 'ewatson@foi.hr', 'korisnici/ewatson.jpg'),
(18, 1, 'kdunst', '123456', 'Kirsten', 'Dunst', 'kdunst@foi.hr', 'korisnici/kdunst.jpg'),
(19, 2, 'sjohansson', '123456', 'Scarlett', 'Johansson', 'sjohansson@foi.hr', 'korisnici/sjohansson.jpg'),
(20, 2, 'philton', '123456', 'Paris', 'Hilton', 'philton@foi.hr', 'korisnici/philton.jpg'),
(21, 2, 'kbeckinsale', '123456', 'Kate', 'Beckinsale', 'kbeckinsale@foi.hr', 'korisnici/kbeckinsale.jpg'),
(22, 2, 'tcruise', '123456', 'Tom', 'Cruise', 'tcruise@foi.hr', 'korisnici/tcruise.jpg'),
(23, 2, 'hduff', '123456', 'Hilary', 'Duff', 'hduff@foi.hr', 'korisnici/hduff.jpg'),
(24, 2, 'ajolie', '123456', 'Angelina', 'Jolie', 'ajolie@foi.hr', 'korisnici/ajolie.jpg'),
(25, 2, 'kknightley', '123456', 'Keira', 'Knightley', 'kknightley@foi.hr', 'korisnici/kknightley.jpg'),
(26, 2, 'obloom', '123456', 'Orlando', 'Bloom', 'obloom@foi.hr', 'korisnici/obloom.jpg'),
(27, 2, 'llohan', '123456', 'Lindsay', 'Lohan', 'llohan@foi.hr', 'korisnici/llohan.jpg'),
(28, 2, 'jdepp', '123456', 'Johnny', 'Depp', 'jdepp@foi.hr', 'korisnici/jdepp.jpg'),
(29, 2, 'kreeves', '123456', 'Keanu', 'Reeves', 'kreeves@foi.hr', 'korisnici/kreeves.jpg'),
(30, 1, 'thanks', '123456', 'Tom', 'Hanks', 'thanks@foi.hr', 'korisnici/thanks.jpg'),
(31, 2, 'elongoria', '123456', 'Eva', 'Longoria', 'elongoria@foi.hr', 'korisnici/elongoria.jpg'),
(32, 2, 'rde', '123456', 'Robert', 'De', 'rde@foi.hr', 'korisnici/rde.jpg'),
(33, 2, 'jheder', '123456', 'Jon', 'Heder', 'jheder@foi.hr', 'korisnici/jheder.jpg'),
(34, 2, 'rmcadams', '123456', 'Rachel', 'McAdams', 'rmcadams@foi.hr', 'korisnici/rmcadams.jpg'),
(35, 2, 'cbale', '123456', 'Christian', 'Bale', 'cbale@foi.hr', 'korisnici/cbale.jpg'),
(36, 1, 'jalba', '123456', 'Jessica', 'Alba', 'jalba@foi.hr', 'korisnici/jalba.jpg'),
(37, 2, 'bpitt', '123456', 'Brad', 'Pitt', 'bpitt@foi.hr', 'korisnici/bpitt.jpg'),
(43, 2, 'apacino', '123456', 'Al', 'Pacino', 'apacino@foi.hr', 'korisnici/apacino.jpg'),
(44, 2, 'wsmith', '123456', 'Will', 'Smith', 'wsmith@foi.hr', 'korisnici/wsmith.jpg'),
(45, 2, 'ncage', '123456', 'Nicolas', 'Cage', 'ncage@foi.hr', 'korisnici/ncage.jpg'),
(46, 2, 'vanne', '123456', 'Vanessa', 'Anne', 'vanne@foi.hr', 'korisnici/vanne.jpg'),
(47, 2, 'kheigl', '123456', 'Katherine', 'Heigl', 'kheigl@foi.hr', 'korisnici/kheigl.jpg'),
(48, 2, 'gbutler', '123456', 'Gerard', 'Butler', 'gbutler@foi.hr', 'korisnici/gbutler.jpg'),
(49, 2, 'jbiel', '123456', 'Jessica', 'Biel', 'jbiel@foi.hr', 'korisnici/jbiel.jpg'),
(50, 2, 'ldicaprio', '123456', 'Leonardo', 'DiCaprio', 'ldicaprio@foi.hr', 'korisnici/ldicaprio.jpg'),
(51, 2, 'mdamon', '123456', 'Matt', 'Damon', 'mdamon@foi.hr', 'korisnici/mdamon.jpg'),
(52, 2, 'hpanettiere', '123456', 'Hayden', 'Panettiere', 'hpanettiere@foi.hr', 'korisnici/hpanettiere.jpg'),
(53, 2, 'rreynolds', '123456', 'Ryan', 'Reynolds', 'rreynolds@foi.hr', 'korisnici/rreynolds.jpg'),
(54, 2, 'jstatham', '123456', 'Jason', 'Statham', 'jstatham@foi.hr', 'korisnici/jstatham.jpg'),
(55, 2, 'enorton', '123456', 'Edward', 'Norton', 'enorton@foi.hr', 'korisnici/enorton.jpg'),
(56, 2, 'mwahlberg', '123456', 'Mark', 'Wahlberg', 'mwahlberg@foi.hr', 'korisnici/mwahlberg.jpg'),
(57, 2, 'jmcavoy', '123456', 'James', 'McAvoy', 'jmcavoy@foi.hr', 'korisnici/jmcavoy.jpg'),
(58, 2, 'epage', '123456', 'Ellen', 'Page', 'epage@foi.hr', 'korisnici/epage.jpg'),
(59, 2, 'mcyrus', '123456', 'Miley', 'Cyrus', 'mcyrus@foi.hr', 'korisnici/mcyrus.jpg'),
(60, 2, 'kstewart', '123456', 'Kristen', 'Stewart', 'kstewart@foi.hr', 'korisnici/kstewart.jpg'),
(61, 2, 'mfox', '123456', 'Megan', 'Fox', 'mfox@foi.hr', 'korisnici/mfox.jpg'),
(62, 2, 'slabeouf', '123456', 'Shia', 'LaBeouf', 'slabeouf@foi.hr', 'korisnici/slabeouf.jpg'),
(63, 2, 'ceastwood', '123456', 'Clint', 'Eastwood', 'ceastwood@foi.hr', 'korisnici/ceastwood.jpg'),
(64, 2, 'srogen', '123456', 'Seth', 'Rogen', 'srogen@foi.hr', 'korisnici/srogen.jpg'),
(65, 2, 'nreed', '123456', 'Nikki', 'Reed', 'nreed@foi.hr', 'korisnici/nreed.jpg'),
(66, 2, 'agreene', '123456', 'Ashley', 'Greene', 'agreene@foi.hr', 'korisnici/agreene.jpg'),
(67, 2, 'zdeschanel', '123456', 'Zooey', 'Deschanel', 'zdeschanel@foi.hr', 'korisnici/zdeschanel.jpg'),
(68, 2, 'dfanning', '123456', 'Dakota', 'Fanning', 'dfanning@foi.hr', 'korisnici/dfanning.jpg'),
(69, 2, 'tlautner', '123456', 'Taylor', 'Lautner', 'tlautner@foi.hr', 'korisnici/tlautner.jpg'),
(70, 2, 'rpattinson', '123456', 'Robert', 'Pattinson', 'rpattinson@foi.hr', 'korisnici/rpattinson.jpg');


INSERT INTO `lokacija` (`lokacija_id`,`moderator_id`, `naziv`) VALUES
(1,2,'Costa Rica'),
(2,2,'Sahara'),
(3,18,'Amazona'),
(4,30,'Antartika');

INSERT INTO `zivotinja` (`zivotinja_id`, `korisnik_id`, `datum_vrijeme_dodavanja`, `naziv`,`opis`,`slika`) VALUES
(1,2,'2020-10-19 10:00:00','Ogrnuti urlikavac','Ogrnuti urlikavac (lat. Alouatta palliata) je vrsta primata iz porodice hvataša. Rasprostranjen je na području od Srednje do Južne Amerike. Naziv je dobio po gustim zlatno-crvenkastim dlakama na bokovima','https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Allouataadulto_500px.jpg/200px-Allouataadulto_500px.jpg'),
(2,2,'2020-10-17 10:00:00','Crvenooka gatalinka','Agalychnis callidryas, poznat kao crvenooka stabla, arborealni je hidlid podrijetlom iz neotropskih prašuma gdje se kreće od Meksika, preko Srednje Amerike, do Kolumbije. Ponekad se drži u zatočeništvu. Znanstveno ime stabloplave crvene oči, A. callidryas, dolazi od grčkih riječi kalos i dryas.','https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Red_eyed_tree_frog.jpg/220px-Red_eyed_tree_frog.jpg'),
(3,2,'2020-10-18 10:00:00','Tukan','Tukani su porodica ptica iz reda Piciformes. Imaju izuzetno velik kljun, a vrsta sa najvećim kljunom je toko tukan, sa duljinom kljuna od 23 cm. U bliskom su srodstvu sa barbetima i potiču od zajedničkog pretka','https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Keel-billed_toucan%2C_costa_rica.jpg/240px-Keel-billed_toucan%2C_costa_rica.jpg'),
(4,2,'2020-10-15 14:00:00','Ljenivac','Ljenivci (tipavci; lat. Folivora) su vrlo stari podred krezubica (Pilosa) a srodni su s mravojedima i pasancima. Poznato je šest recentnih vrsta koje se dijele na dvije porodice, dvoprstih (Megalonychidae) i troprstih ljenivaca (Bradypodidae). Pored recentnih, postojao je još i cijeli niz vrsta golemih ljenjivaca koji su izumrli. Postoji i naziv tipavci za ljenivce iz reda krezubica, koji žive na drveću','https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Choloepus_hoffmanni.jpg/220px-Choloepus_hoffmanni.jpg'),
(5,18,'2020-10-15 10:00:00','Kobra','Kobre su zmije otrovnice iz porodice guja (Elapidae). To je zbirni naziv za čitav niz raznih vrsta zmija iz te porodice, svrstanih inače u razne rodove. ','https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Indian_cobra.jpg/250px-Indian_cobra.jpg'),
(6,18,'2020-10-15 15:00:00','Anakonda','Anakonde (Eunectes) su rod zmija iz porodice kržljonoški. Žive u kišnim šumama Južne Amerike. ','https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Anaconda_jaune_34.JPG/240px-Anaconda_jaune_34.JPG'),
(7,2,'2020-10-15 12:00:00','Krokodil','Krokodili (Crocodilia; sinonim: Crocodylia) su red tropskih grabežljivaca. Uz ptice, to su jedini do danas preživjeli "potomci" velike grupe gmazova, Archosaura. Prema tome, njihovi i danas živući najbliži srodnici su ptice. Njihovo je srodstvo dokazivo cijelim nizom osobina, ali prije svega građom sistema krvotoka. Zbog koštanog oklopa, krokodile nazivaju i oklopljenim gušterima.Svi danas živući krokodili žive u rijekama i jezerima tropa i suptropskoh područja, jedino Crocodylus porosus može živjeti i u moru, a često se pojavljuje uz obale različitih otoka. Kao prilagodbu životnom okolišu, ove životinje jako dobro plivaju i prikrivaju se u vodi tako, da miruju uronjeni u vodu pri čemu iz vode izviruju jedino oči i nosnice. Poznatije vrste su nilski krokodil, gangeski gavijal, misisipski aligator, obični kajman. ','https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/China-Alligator.jpg/240px-China-Alligator.jpg'),
(8,18,'2020-10-14 10:00:00','Sova','Sovke (lat. Strigiformes) su red iz razreda ptica u koji se ubraja više od 130 vrsta. Članovi ove grupe ptica, kao i sokolovke i jastrebovke žive na svim kontinentima, s izuzetkom Antarktika. One su, kao i sokolovke i jastrebovke, isto tako grabljivice, ali većim dijelom su, za razliku od njih, aktivne noću i nizom svojih osobina su prilagođene tom načinu života. Unutar ovog reda su dvije porodice, kukuvije (Tytonidae) i sove (Strigidae). ','https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Raufusskauz.jpg/220px-Raufusskauz.jpg'),
(9,30,'2020-10-12 10:00:00','Noj','Noj (lat. Struthio camelus) je vrsta ptica iz reda nojevki i najveća je danas živuća ptica na Zemlji. Danas obitava još samo u Africi južno od Sahare. Ranije je živio i u zapadnoj Aziji. To je ptica koja je zbog svog perja, mesa i kože oduvijek bila značajna za ljude. To je dovelo do toga, da je danas istrijebljena u mnogim područjima u kojima je ranije živjela. ','https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Afrikanischer_strauss.jpg/250px-Afrikanischer_strauss.jpg'),
(10,30,'2020-10-13 10:00:00','Lav','Lav (lat. Panthera leo) životinjska je vrsta iz porodice mačaka. Za razliku od drugih mačaka, lavovi žive u čoporima. Lako ga je prepoznati po grivi koju imaju mužjaci, a danas žive u Africi kao i u nekim područjima Azije. ','https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Lion_waiting_in_Namibia.jpg/250px-Lion_waiting_in_Namibia.jpg'),
(11,2,'2020-10-12 10:00:00','Tigar','Tigar (lat. Panthera tigris) je najveća vrsta mačaka na svijetu. Živi u azijskim džunglama, u jugoistočnom Sibiru i jugoistočnoj Aziji. ','https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Panthera_tigris_tigris.jpg/250px-Panthera_tigris_tigris.jpg'),
(12,2,'2020-10-15 11:00:00','Pingvin','Pingvini (lat. Spheniscidae) ptice su koje ne mogu letjeti, a žive na južnoj polutki. To je jedina porodica unutar reda Sphenisciformes, podrazreda ptica Neognathae. Pingvine obuhvaća šest rodova sa 17 ili 20 vrsta, što ovisi od autora. Smatra se vjerojatnim da su im, razvojno gledano, sestrinske grupe plijenori (Gaviiformes) i bubnjavke (Procellariiformes). Vrlo ih je lako razlikovati od svih ostalih ptica. Izvrsno su se prilagodile životu u moru, a djelomično i ekstremno hladnim područjima zemlje. Oni ne mogu letjeti, ali odlično plivaju velikom brzinom. ','https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Koenigspinguine.jpg/250px-Koenigspinguine.jpg'),
(13,2,'2020-10-14 10:00:00','Galapagoška kornjača','Galapagoška kornjača (Geochelone nigra) danas je najveća kornjača. ','https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/Galapagos_giant_tortoise_Geochelone_elephantopus.jpg/250px-Galapagos_giant_tortoise_Geochelone_elephantopus.jpg');

INSERT INTO `zivotinje_na_lokaciji` (`zivotinja_id`, `lokacija_id`, `admin`) VALUES
(1,1,0),
(2,1,0),
(3,1,0),
(4,1,0),
(5,2,0),
(6,3,0),
(7,1,0),
(7,3,0),
(8,1,1),
(12,4,0),
(9,1,1);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
