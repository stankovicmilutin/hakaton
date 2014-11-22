<?php

class BazaSeeder extends Seeder {

    public function run() {
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo2', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo3', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo4', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo5', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo6', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo7', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo8', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo9', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo0', 'tip' => 'Obavezni', 'espb' => 6));
        Predmet::create(array('naziv' => 'Softversko Inženjerstvo-', 'tip' => 'Obavezni', 'espb' => 6));

        Rok::create(array('naziv' => 'januar 2015', 'tip' => 'Redovni', 'pocetak' => '2015-01-20', 'kraj' => '2015-02-20', 'pocetak_prijave' => '2015-01-05', 'kraj_prijave' => '2015-01-15'));
        Rok::create(array('naziv' => 'mart 2015', 'tip' => 'Vanredni', 'pocetak' => '2015-03-20', 'kraj' => '2015-03-22', 'pocetak_prijave' => '2015-03-05', 'kraj_prijave' => '2015-03-15'));
        Rok::create(array('naziv' => 'april 2015', 'tip' => 'Redovni', 'pocetak' => '2015-04-20', 'kraj' => '2015-04-30', 'pocetak_prijave' => '2015-04-05', 'kraj_prijave' => '2015-04-15'));
        Rok::create(array('naziv' => 'maj 2015', 'tip' => 'Vanredni', 'pocetak' => '2015-05-20', 'kraj' => '2015-05-22', 'pocetak_prijave' => '2015-05-05', 'kraj_prijave' => '2015-05-15'));
        Rok::create(array('naziv' => 'jun 2015', 'tip' => 'Redovni', 'pocetak' => '2015-06-20', 'kraj' => '2015-07-10', 'pocetak_prijave' => '2015-06-05', 'kraj_prijave' => '2015-06-15'));

        Smer::create(array('naziv' => 'Računarstvo i informatika', 'tip' => 'Osnovne'));
        Smer::create(array('naziv' => 'Multimedija', 'tip' => 'Strukovne'));
        Smer::create(array('naziv' => 'Bezbednost računarskih sistema', 'tip' => 'Master'));

        User::create(array(
            'index' => 13481,
            'password' => Hash::make("password"),
            'ime' => 'Aleksandar',
            'prezime' => 'Tošić',
            'jmbg' => 2310990730039,
            'adresa' => 'Novoprojektovana BB',
            'email' => 'aleksandar.tosic@elfak.rs',
            'smerID' => 3,
            'godina_studija' => 5,
            'level' => 1
        ));

        User::create(array(
            'index' => 14567,
            'password' => Hash::make("password"),
            'ime' => 'Milutin',
            'prezime' => 'Stanković',
            'jmbg' => 2109991730039,
            'adresa' => 'Novoprojektovana BB',
            'email' => 'milutin.stankovic@elfak.rs',
            'smerID' => 1,
            'godina_studija' => 4,
            'level' => 1
        ));

        User::create(array(
            'index' => 12478,
            'password' => Hash::make("password"),
            'ime' => 'Miloš',
            'prezime' => 'Mirković',
            'jmbg' => 100398910045,
            'adresa' => 'Novoprojektovana BB',
            'email' => 'milos.mirkovic@elfak.rs',
            'smerID' => 2,
            'godina_studija' => 3,
            'level' => 1
        ));

        User::create(array(
            'index' => 12478,
            'password' => Hash::make("password"),
            'ime' => 'Marko',
            'prezime' => 'Manojlović',
            'jmbg' => 0808989720042,
            'adresa' => 'Novoprojektovana BB',
            'email' => 'marko.manojlovic@elfak.rs',
            'smerID' => 3,
            'godina_studija' => 5,
            'level' => 1
        ));

        Zahtev::create(array('studentID' => 1, 'dokument' => 'Svedočanstvo'));
        Zahtev::create(array('studentID' => 2, 'dokument' => 'Diploma'));
        Zahtev::create(array('studentID' => 3, 'dokument' => 'Uverenje za zdravstvenu zaštitu'));
        Zahtev::create(array('studentID' => 4, 'dokument' => 'Uverenje za gradski prevoz'));

        Uplata::create(array('studentID' => 1, 'svrha' => 'Prijava ispita u vanrednom roku', 'iznos' => '3100.00'));
        Uplata::create(array('studentID' => 1, 'svrha' => 'Prijava ispita u vanrednom roku', 'iznos' => '3100.00'));
        Uplata::create(array('studentID' => 2, 'svrha' => 'Rata za školarinu',          'iznos' => '22000.00'));
        Uplata::create(array('studentID' => 2, 'svrha' => 'Zakasnela prijava ispita',   'iznos' => '6600.00'));
        Uplata::create(array('studentID' => 3, 'svrha' => 'Ispis sa fakulteta',         'iznos' => '3000.00'));
        Uplata::create(array('studentID' => 4, 'svrha' => 'Izdavanje diplome',          'iznos' => '5400.00'));

        Prijava::create(array('studentID' => 1, 'rokID' => 1, 'predmetID' => 1));
        Prijava::create(array('studentID' => 2, 'rokID' => 1, 'predmetID' => 3));
        Prijava::create(array('studentID' => 2, 'rokID' => 1, 'predmetID' => 5));
        Prijava::create(array('studentID' => 3, 'rokID' => 1, 'predmetID' => 4));
        Prijava::create(array('studentID' => 4, 'rokID' => 1, 'predmetID' => 2));
        Prijava::create(array('studentID' => 4, 'rokID' => 1, 'predmetID' => 6));
        Prijava::create(array('studentID' => 4, 'rokID' => 1, 'predmetID' => 7));

        Student_ispit::create(array('studentID' => 1, 'predmetID' => 1));
        Student_ispit::create(array('studentID' => 2, 'predmetID' => 3));
        Student_ispit::create(array('studentID' => 2, 'predmetID' => 5));
        Student_ispit::create(array('studentID' => 3, 'predmetID' => 4));
        Student_ispit::create(array('studentID' => 4, 'predmetID' => 2));
        Student_ispit::create(array('studentID' => 4, 'predmetID' => 6));
        Student_ispit::create(array('studentID' => 4, 'predmetID' => 7));
    }

}
