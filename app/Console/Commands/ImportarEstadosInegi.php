<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportarEstadosInegi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:importar-estados-inegi';
    protected $signature = 'importar:estados-inegi';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa los estados desde el servicio de INEGI';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $url = 'https://gaia.inegi.org.mx/wscatgeo/mgee/';

        $response = \Illuminate\Support\Facades\Http::get($url);

        if (! $response->ok()) {
            $this->error('No se pudo consumir el servicio INEGI');
            return self::FAILURE;
        }

        $data = $response->json();

        if (! isset($data['datos']) || ! is_array($data['datos'])) {
            $this->error('Respuesta inesperada del servicio INEGI');
            return self::FAILURE;
        }

        foreach ($data['datos'] as $item) {
            \App\Models\Estado::updateOrCreate(
                ['cvegeo' => $item['cvegeo']],
                [
                    'cve_agee' => $item['cve_agee'],
                    'nom_agee' => $item['nom_agee'],
                    'nom_abrev' => $item['nom_abrev'],
                    'pob' => (int) $item['pob'],
                ]
            );
        }

        $this->info('Estados importados correctamente.');
        return self::SUCCESS;
    }
}
