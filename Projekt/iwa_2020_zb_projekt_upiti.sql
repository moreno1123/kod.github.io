#odabir svih korisnika
SELECT * FROM korisnik;

#odabir svih lokacija
SELECT lokacija_id, naziv FROM lokacija

#odabir svih moderatora
SELECT * FROM korisnik WHERE tip_id = 1;

#odabir svih lokacija za koje je zadužen moderator 2
SELECT * FROM lokacija_id WHERE moderator_id=2

#odabir svih životinja koje nije unio moderator 2 na lokaciji 1
SELECT * FROM zivotinja z, zivotinje_na_lokaciji zl WHERE z.zivotinja_id = zl.zivotinja_id AND z.korisnik_id<>2 AND zl.lokacija_id=1

#odabir svih zivotinja kojima je lokaciju dodjelio administrator
SELECT z.naziv as zivotinja FROM zivotinja z, zivotinje_na_lokaciji l WHERE z.zivotinja_id=l.zivotinja_id AND admin=1

#odabir svih životinja koje nemaju lokaciju
SELECT * FROM zivotinja WHERE zivotinja_id NOT IN (SELECT zivotinja_id FROM zivotinje_na_lokaciji)

#odabir životinja filtrirano po datumu i vremenu dodavanja
SELECT * FROM zivotinja WHERE datum_vrijeme_dodavanja BETWEEN '2020-10-01 10:00:00' AND '2020-10-15 13:00:00'

#odabir zivotinja filtrirano na lokaciji 1 i vremenskog razdoblja po datumu dodavanja
SELECT * FROM zivotinja z, zivotinje_na_lokaciji l WHERE z.zivotinja_id=l.zivotinja_id AND l.lokacija_id=1 AND  datum_vrijeme_dodavanja BETWEEN '2020-10-01 10:00:00' AND '2020-10-15 13:00:00'

#statistika broja životinja po lokaciji sortirano po lokaciji
SELECT l.naziv as lokacija, COUNT(*) as broj_zivotinja FROM zivotinje_na_lokaciji z, lokacija l WHERE z.lokacija_id=l.lokacija_id GROUP BY l.lokacija_id ORDER BY l.naziv
