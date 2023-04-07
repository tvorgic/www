<?php

class NadzornaplocaController 
    extends AutorizacijaController
{


    public function index()
    {

        $statistika = Grupa::brojPolaznikaPoGrupama();

        parent::setCSSdependency([
            '<link rel="stylesheet" href="' . App::config('url') . 'public/css/dependency/jquery-ui.css">'
        ]);
        parent::setJSdependency([
            '<script src="' . App::config('url') . 'public/js/dependency/highcharts.js"></script>',
            '<script src="' . App::config('url') . 'public/js/dependency/exporting.js"></script>',
            '<script src="' . App::config('url') . 'public/js/dependency/export-data.js"></script>',
            '<script src="' . App::config('url') . 'public/js/dependency/accessibility.js"></script>',
            '<script src="' . App::config('url') . 'public/js/dependency/jquery-ui.js"></script>',
            '<script>
                let url=\'' . App::config('url') . '\';
                let podaci = JSON.parse(\'' . json_encode($statistika, JSON_NUMERIC_CHECK) .'\');
            </script>'
        ]);
        $this->view->render('privatno' . DIRECTORY_SEPARATOR . 
                'nadzornaPloca');
    }

    public function trazi($uvjet){
        $rez =NadzornaPloca::trazi($uvjet);
        usort($rez, function($a, $b) { return strcmp($a->tekst, $b->tekst); });
        $this->view->api($rez);
    }

}