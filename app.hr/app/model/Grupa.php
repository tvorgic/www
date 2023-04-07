<?php

class Grupa
{
    // CRUD operacije

    public static function read()
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
        select
        a.sifra,
        a.naziv,
        b.naziv as smjer,
        concat(d.ime, \' \', d.prezime) as predavac,
        a.datumpocetka,
        a.maksimalnopolaznika,
        count(e.polaznik) as polaznika
        from grupa a 
        inner join smjer b on a.smjer =b.sifra 
        left join predavac c on a.predavac =c.sifra 
        left join osoba d on c.osoba =d.sifra 
        left join clan e on a.sifra =e.grupa 
        group by 
        a.sifra,
        a.naziv,
        b.naziv,
        concat(d.ime, \' \', d.prezime),
        a.datumpocetka,
        a.maksimalnopolaznika 
        
        
        ');
        $izraz->execute();
        $rez = $izraz->fetchAll(); 
        foreach($rez as $r){
            $r->polaznici=Grupa::polazniciNaGrupi($r->sifra);
        }
        return $rez;
    }

    public static function polazniciNaGrupi($sifra)
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
           select a.sifra, b.ime, b.prezime, concat(b.ime, \' \',b.prezime) as imeprezime, b.email
           from polaznik a inner join osoba b
           on a.osoba=b.sifra inner join clan c
           on c.polaznik=a.sifra where c.grupa=:sifra
        
        ');
        $izraz->execute([
            'sifra'=>$sifra
        ]);
        return $izraz->fetchAll();
    }

    public static function readOne($sifra)
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            select * from grupa
            where sifra=:sifra
        
        ');
        $izraz->execute([
            'sifra'=>$sifra
        ]);
        $grupa = $izraz->fetch();

        $izraz = $veza->prepare('
        
        select b.sifra, 
        concat(c.ime, \' \', c.prezime) as imeprezime
        from clan a inner join polaznik b
        on a.polaznik  = b.sifra 
        inner join osoba c on b.osoba =c.sifra 
        where a.grupa=:sifra;
    
    ');
    $izraz->execute([
        'sifra'=>$sifra
    ]);

    $grupa->polaznici = $izraz->fetchAll();

        return $grupa;
    }

    public static function create($parametri)
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            insert into grupa
            (naziv,smjer,predavac,
            datumpocetka,maksimalnopolaznika) values
            (:naziv,:smjer,:predavac,
            :datumpocetka,:maksimalnopolaznika);
        
        ');
        $izraz->execute($parametri);
        return $veza->lastInsertId();
    }

    public static function update($parametri)
    {
        Log::info($parametri);
        unset($parametri['polaznici']);
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            update grupa set
            naziv=:naziv,
            smjer=:smjer,
            predavac=:predavac,
            datumpocetka=:datumpocetka,
            maksimalnopolaznika=:maksimalnopolaznika
            where sifra=:sifra
        
        ');
        $izraz->execute($parametri);
    }

    public static function delete($sifra)
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
            delete from grupa
            where sifra=:sifra
        
        ');
        $izraz->execute([
            'sifra'=>$sifra
        ]);
    }


    public static function postojiPolaznikGrupa($grupa, $polaznik)
    {   
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
           select count(*) as ukupno 
           from clan where grupa=:grupa 
           and polaznik=:polaznik
        
        ');
        $izraz->execute([
            'grupa'=>$grupa,
            'polaznik'=>$polaznik
        ]);
        $rez = (int)$izraz->fetchColumn();
        return $rez>0;

    }

    public static function dodajPolaznikGrupa($grupa, $polaznik)
    {   
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
           insert into clan (grupa,polaznik)
           values (:grupa, :polaznik)
        
        ');
        $izraz->execute([
            'grupa'=>$grupa,
            'polaznik'=>$polaznik
        ]);
    }


    public static function obrisiPolaznikGrupa($grupa, $polaznik)
    {   
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
           delete from clan where grupa=:grupa
           and polaznik=:polaznik
        
        ');
        $izraz->execute([
            'grupa'=>$grupa,
            'polaznik'=>$polaznik
        ]);
    }


    public static function brojPolaznikaPoGrupama()
    {
        $veza = DB::getInstance();
        $izraz = $veza->prepare('
        
        select a.naziv as name, count(b.polaznik) as y
        from grupa a inner join
        clan b on a.sifra = b.grupa 
        group by a.naziv order by 2 desc;
        
        
        ');
        $izraz->execute();
        $rez = $izraz->fetchAll(); 
        
        return $rez;
    }
}