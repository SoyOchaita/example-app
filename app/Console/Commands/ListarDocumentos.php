<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ListarDocumentos extends Command
{
    protected $signature = 'app:listar-documentos {numero?}';
    protected $description = 'Lista los documentos disponibles y muestra o descarga el documento seleccionado';

    public function handle()
    {
        // Lista de documentos con sus nombres de archivo
        $documentos = [
            1 => 'CES.pdf',
            2 => 'VIGUA.pdf',
            3 => 'ENCA.pdf',
        ];

        // Obtén el número de documento del argumento
        $numero = $this->argument('numero');

        // Si no se proporcionó un número, muestra un menú para seleccionar
        if (is_null($numero)) {
            $numero = $this->choice(
                'Seleccione el número del documento para mostrar o descargar:',
                array_keys($documentos)
            );
        }

        // Verifica si el número proporcionado es válido
        if (array_key_exists($numero, $documentos)) {
            $filePath = storage_path('documents/' . $documentos[$numero]);

            // Verifica si el archivo existe
            if (file_exists($filePath)) {
                $this->info("Mostrando o descargando el documento seleccionado:");

                // Abre el archivo dependiendo del sistema operativo
                if (PHP_OS_FAMILY === 'Windows') {
                    // Utiliza el comando rundll32 para abrir con el visor predeterminado
                    exec('rundll32 url.dll,FileProtocolHandler ' . escapeshellarg($filePath));
                } elseif (PHP_OS_FAMILY === 'Darwin') {
                    // macOS: usa 'open'
                    exec('open ' . escapeshellarg($filePath));
                } else {
                    // Linux: usa 'xdg-open'
                    exec('xdg-open ' . escapeshellarg($filePath));
                }

            } else {
                $this->error("El archivo $filePath no existe.");
            }
        } else {
            $this->error("El número de documento proporcionado no es válido.");
        }
    }
}
